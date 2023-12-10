<button data-popover-target="popover-user-profile" type="button"><svg
        class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        fill="currentColor" viewBox="0 0 14 18">
        <path
            d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
    </svg></button>

<div data-popover id="popover-user-profile" role="tooltip"
    class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
    <div class="p-3">

        {{-- <a href="#">
            <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese Leos">
        </a> --}}
        {{-- <div>
            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Follow</button>
        </div> --}}

        <p class="text-base font-semibold leading-none text-gray-900 dark:text-white">
            <a href=""> {{Auth::user()->name}}</a>
        </p>
        <div class="flex items-center justify-between mb-2">
            <a href="{{route('user.edit')}}" class="mt-2 pt-4 hover:text-red-500">
                {{ __('Edit Profile') }}
            </a>
        </div>
    </div>
    <div data-popper-arrow></div>
</div>