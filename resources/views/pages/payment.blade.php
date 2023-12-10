<x-main-layout>

  <div class="grid grid-cols-2  mt-40 ">
    <div
      class="max-w-sm p-6  mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
      <img class="p-8 rounded-t-lg h-60 w-full overflow-hidden" src="{{url('storage/'.$product->image)}}" alt="product image" />
      <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400 py-5">
        <li class="flex items-center">
            <svg class="w-3.5 h-3.5 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
             </svg>
             Nama Produk: {{$product->name}}
        </li>
        <li class="flex items-center">
            <svg class="w-3.5 h-3.5 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
             </svg>
             <?php $diskon = $product->price*(10/100);?>
             Harga setelah diskon: Rp.{{
              number_format($product->price-$diskon,2,",",".") }}
        </li>
      
      </ul>
     

      <button id="pay-button" type="submit"
        class=" inline-flex items-center px-36 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pay</button>
    </div>
    <div class="ml-10 hidden sm:block">
      <img src="{{url('shopping.png')}}" class="rounded-full w-96 h-96 " alt="">
    </div>

  </div>

  <form action="" method="POST" id="submit_form">
    @csrf
    @method('POST')
    <input type="hidden" name="json" id="payment_hidden">
  </form>


  <script type="text/javascript">
    var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{$snap_token}}', {
            onSuccess: function(result){
              /* You may add your own implementation here */
              alert("pembayaran berhasil kami lagi menyiapkan pesanan anda!"); console.log(result);
              sendResponseToForm(result);
            },
            onPending: function(result){
              /* You may add your own implementation here */
              alert("pembayaran di batalkan"); console.log(result);
              sendResponseToForm(result);
              window.location.href = window.location.href;
            },
            onError: function(result){
              /* You may add your own implementation here */
              alert("Pembayaran Gagal!"); console.log(result);
              sendResponseToForm(result);
            },
            onClose: function(){
              /* You may add your own implementation here */
              alert('kamu menutup pembayaran tanpa menyelesaikannya');
            }
          })
        });

        function sendResponseToForm(result){
            document.getElementById('payment_hidden').value = JSON.stringify(result);
        //  alert(document.getElementById('payment_hidden').value);
        $('#submit_form').submit()
        }
  </script>
</x-main-layout>