<x-app-layout>
    <div class="p-4 sm:ml-64">
        <div class="hidden sm:block  relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="my-4">
                    @if (session('success'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 w-full "
                        role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alamat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No Telpon/Wa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$order->nama_product}}
                            </th>
                            <td class="px-6 py-4">
                                {{$order->provinsi}},{{$order->kabupaten}},{{$order->alamat}}
                            </td>
                            <td class="px-6 py-4">
                                {{$order->no_telp}}
                            </td>
                            <td class="px-6 py-4">
                                Rp.{{
                                    number_format($order->gross_amount,2,",",".") }}

                            </td>
                            @if ($order->status === 'settlement')
                            <td class="px-6 py-4">
                                <div
                                    class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-sm text-sm text-center mr-2 mb-2 dark:bg-green-600 py-2 px-2 dark:hover:bg-green-700 dark:focus:ring-green-900">
                                    Success
                                </div>
                            </td>
                            @else

                            <td class="px-6 py-4">
                                <div
                                    class=" text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-sm text-sm text-center mr-2 mb-2 dark:bg-red-600 py-2 px-2 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                    {{ $order->status }}
                                </div>
                            </td>
                            @endif
                            <td class="px-6 py-4">
                                <form action="/dashboard/daftarorder/{{$order->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="return confirm('Yakin data ini dihapus?')"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</x-app-layout>