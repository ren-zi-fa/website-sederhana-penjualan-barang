<div id="edit-modal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit product
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="edit-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <form action="/dashboard/kelolaproducts" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-6 mb-6 ">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nama
                                product</label>
                            <input type="text" id="name" name="name" value="{{old('name',$product->name)}}"
                                class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') bg-red-50 border border-red-500 text-red-900  @enderror"
                                value="{{old('name')}}" placeholder="baju partai bekas ">
                            @error('name')
                            <div class="text-red-500 font-medium">{{$message}}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">deskripsi
                                product
                            </label>
                            <input type="text" id="description" name="description"
                                class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('description') bg-red-50 border border-red-500 text-red-900  @enderror"
                                value="{{old('description')}}" placeholder="langka dan berkualitas">
                            @error('description')
                            <div class="text-red-500 font-medium">{{$message}}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="price"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">harga</label>
                            <input type="text" id="price" name="price"
                                class="btext-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('price') bg-red-50 border border-red-500 text-red-900  @enderror"
                                value="{{old('price')}}" placeholder="2.000.000">
                            @error('price')
                            <div class="text-red-500 font-medium">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">category</label>
                            <select name="category_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($categories as $category)
                                @if(old('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                    </div>


                    <div class="flex items-center justify-center w-full">

                        <label for="image"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">

                            <img  class="w-624 h-256 absolute top-35 object-fill overflow-hidden "
                                id="frame" >

                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                    800x400px)</p>

                            </div>
                            <input onchange="preview()" id="image" type="file" class="hidden" name="image" />
                        </label>
                    </div>


                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambahkan</button>
                        <button data-modal-hide="edit-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batalkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function preview() { frame.src=URL.createObjectURL(event.target.files[0]); }
</script>