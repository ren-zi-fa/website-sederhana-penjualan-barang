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
            <th scope="row"
                class=" px-4 sm:px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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