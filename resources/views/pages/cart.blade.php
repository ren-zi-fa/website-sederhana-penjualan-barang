<x-main-layout>
    <div class="mt-40">
        <small class="dark:text-yellow-200 text-red-500 font-medium top-0 ml-7 "> <span class="text-red-600 text-xl">*</span>Login Terlebih Dahulu Untuk Melanjutkan Pembelian</small>
   
    <div class="grid grid-cols-2  ml-4">

        <div
            class="max-w-lg  flex justify-center ml-4 p-4 mt-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <form method="GET" action="/payment/{{$product->id}}" class="">
                @csrf

                <div class="text-center tracking-wide text-gray-700 text-lg font-bold underline pb-6">Formulir Pembelian
                </div>
                <div class="flex flex-wrap -mx-3 mb-6 mt-3">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-10 hidden">
                        <input type="text" id="disabled-input-2" aria-label="disabled input 2" name="nama_product"
                            class=" " value="{{$product->name}}">
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-10 hidden">
                        <input type="text" id="disabled-input-2" aria-label="disabled input 2" name="category_name"
                            class="" value="{{$product->category->name}}">
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-10 hidden">
                        <input type="text" id="disabled-input-2" aria-label="disabled input 2" name="harga" class=""
                            value="{{$product->price}}">
                    </div>


                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            Nama
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" type="text" name="name" placeholder="Rentzy" required>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            No Telpon/Whatsapp
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" type="text" name="no_telp" placeholder="0821xxxxx" required>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2 mt-20">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select id="underline_select" name="provinsi" required
                            class="block py-2.5 px-3 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected>Pilih Provinsi</option>
                            @foreach ($provinces as $province)
                            <option value="{{$province->name}}">{{$province->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select id="underline_select" name="kabupaten" required
                            class="block py-2.5 px-3 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected>Pilih Kabupaten</option>
                            @foreach ($regencies as $regenci)
                            <option value="{{$regenci->name}}">{{$regenci->name}}</option>
                            @endforeach

                        </select>
                    </div>

                </div>
                <div class="flex flex-wrap -mx-2 mb-10 mt-4">
                    <label for="message" class="block mb-2 pl-2 text-sm font-medium text-gray-900 dark:text-white">
                        Alamat Lengkap</label>
                    <textarea id="message" rows="4" name="alamat"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Simpang Aru" required></textarea>

                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 18 21">
                        <path
                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                    Lanjutkan Transaksi
                </button>

            </form>
        </div>

        <div
            class="max-w-sm mx-auto hidden sm:block bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="p-8 rounded-t-lg h-60 w-full overflow-hidden" src="{{url('storage/'.$product->image)}}"
                alt="product image" />
                <div class="text-lg text-center font-semibold capitalize tracking-tight text-red-600 dark:text-indigo-500 py-4 ">
                    {{$product->name}}
                <div class="text-sm md:text-xl  font-bold text-gray-900 dark:text-white line-through">Rp{{
                    number_format($product->price,2,",",".") }}</div> 
                </div>
            </div>
         
            <div class="sm:px-5 sm:pb-5 px-3 pb-2">
               
                    <div class="flex items-center justify-between mt-3">
                        
                    </div>
                    <div class="flex items-center justify-between mt-3">
                        <?php $diskon = $product->price*(10/100);?>
                        <div class="text-sm md:text-xl font-bold text-gray-900 dark:text-white ">Total yg harus dibayar: <span class="text-red-400"> Rp{{
                            number_format($product->price-$diskon,2,",",".") }}</span></div> 
                    </div>
                  
            </div>
        </div>
    </div>
</div>
</x-main-layout>