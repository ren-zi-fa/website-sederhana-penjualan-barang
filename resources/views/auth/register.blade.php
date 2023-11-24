<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="relative py-3 mt-4 sm:max-w-xl sm:mx-auto">
            <div
            class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
            <div class="relative px-3 py-8 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <div>
                        <h1 class="text-2xl font-semibold">Register System</h1>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="relative">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name"
                                    class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                                    type="text" name="name" :value="old('name')" required autofocus
                                    autocomplete="username" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                            </div>
                            <div class="relative">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email"
                                    class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                                    type="email" name="email" :value="old('email')" required autofocus
                                    autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>
                            <div class="relative">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input required autocomplete="current-password" id="password" name="password"
                                    type="password"
                                    class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                                    placeholder="Password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="relative">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-text-input required autocomplete="new-password" id="password_confirmation"
                                    name="password_confirmation" type="password"
                                    class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                    href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <x-primary-button class="ml-4">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </form>
</x-guest-layout>