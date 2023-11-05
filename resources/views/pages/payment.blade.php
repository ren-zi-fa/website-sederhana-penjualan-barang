<x-main-layout>


    <div class="max-w-sm p-6 mt-40 mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img class="p-8 rounded-t-lg" src="{{url('storage/'.$product->image)}}"
        alt="product image" />
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 capitalize">Nama Product: {{$product->name}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Harga: Rp.{{
            number_format($product->price,2,",",".") }}</p>

        <button id="pay-button" type="submit"
        class=" inline-flex items-center ml-20 px-7 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pay!</button>
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
              alert("pembayaran berhasil kami menyiapkan pesanan anda!"); console.log(result);
              sendResponseToForm(result);
            },
            onPending: function(result){
              /* You may add your own implementation here */
              alert("menunggu pembayaran!"); console.log(result);
              sendResponseToForm(result);
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