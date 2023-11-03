<button type="button" data-modal-target="main-modal" data-modal-toggle="main-modal"
    class="flex items-center  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-4 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
    <svg class="w-[19px] h-[19px] text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        fill="none" viewBox="0 0 18 18">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 1v16M1 9h16" />
    </svg><span class="flex-1 ml-3 whitespace-nowrap">tambah product</span></button>
<table class="table-auto text-left text-gray-500 dark:text-gray-400 ">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class=" px-4 sm:px-6 py-3">name</th>
            <th scope="col" class=" px-4 sm:px-6 py-3">price</th>
            <th scope="col" class=" px-4 sm:px-16 py-3">action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)

        <tr>
            <th scope="row" class=" px-4 sm:px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$product->name}}</th>
            <td class=" px-4 sm:px-6 py-3">{{$product->price}}</td>
            <td class=" px-4 sm:px-16 py-3">
                <a href="" class="text-yellow-500">edit</a> |
                <a href="" class="text-red-500">delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@include('dashboard.dash-components.modal-input-mobile')