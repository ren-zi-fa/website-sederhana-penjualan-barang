<x-app-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 text-center border-gray-200 border-dashed rounded-lg dark:border-gray-700">
         
           <h1 class="dark:text-white ">Welocome {{Auth::user()->name}}</h1>
           <h3 class="text-yellow-600">Disini anda dapat meneglola Pesanan dan Product Yang ingin Anda Jual</h3>
        </div>
     </div>
</x-app-layout>