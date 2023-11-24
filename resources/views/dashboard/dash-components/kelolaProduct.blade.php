<x-app-layout>
    <div class="p-4 sm:ml-64">
        <div class="hidden sm:block  relative overflow-x-auto shadow-md sm:rounded-lg">
            <button type="button" data-modal-target="default-modal" data-modal-toggle="default-modal"
                class="flex items-center text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                <svg class="w-[15px] h-[15px] text-white dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 1v16M1 9h16" />
                </svg><span class="flex-1 ml-3 whitespace-nowrap">tambah product</span></button>
            <div class="my-4">
                @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 w-full "
                    role="alert">
                    {{ session('success') }}
                </div>
                @endif
            </div>
            @if ($errors->any())
            <div class="my-4">
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <span class=" font-medium">{{$error}}</span>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama product
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{$loop->iteration}}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$product->name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$product->category->name}}
                        </td>
                        <td class="px-6 py-4">
                            Rp.{{number_format($product->price,2,",",".") }}
                        </td>
                        
                        <td class="px-6 py-4 flex">
                            <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg  text-sm text-center px-4 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mr-3" data-modal-target="edit-modal" data-modal-toggle="edit-modal" >Edit</button>
                            <form action="/dashboard/kelolaproducts/{{$product->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin data ini dihapus?')"
                                    class="font-medium text-black  bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300  rounded-lg text-sm p-1 text-center dark:focus:ring-yellow-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="block sm:hidden  relative overflow-x-auto shadow-md sm:rounded-lg">
            @include('dashboard.dash-components.kelolaProductMobile')
        </div>

    </div>
    </div>
    <!-- Main modal -->
    @include('dashboard.dash-components.modal-input')
    @include('dashboard.dash-components.modal-edit')

    <script>
      function preview() { frame.src=URL.createObjectURL(event.target.files[0]); }
    </script>
</x-app-layout>