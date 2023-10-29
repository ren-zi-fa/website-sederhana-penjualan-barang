<x-app-layout>
    <x-app-layout>
        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                {{-- @if ($item->price instanceof Illuminate\Database\Eloquent\Collection)
                @foreach ($items as $item)
                {{$item->price}}
                @endforeach
                @endif --}}
                <ul>
                    <li>nama: {{$product->title}}</li>
                    <li>harga: {{$product->price}}</li>
                    <li>deskripsi: {{$product->description}}</li>
                </ul>



            </div>
        </div>
    </x-app-layout>
</x-app-layout>