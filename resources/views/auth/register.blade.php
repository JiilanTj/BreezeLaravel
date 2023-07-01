<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nama asli pada rekening')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Username -->
            <div>
                <x-label for="username" :value="__('username')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-label for="nomorHP" :value="__('nomorHP')" />

                <x-input id="nomorHP" class="block mt-1 w-full" type="number" name="nomorHP" :value="old('nomorHP')" required />
            </div>

            <div class="mt-4">
                <x-label for="noRek" :value="__('noRek')" />

                <x-input id="noRek" class="block mt-1 w-full" type="number" name="noRek" :value="old('noRek')" required />
            </div>

            <!-- Nama Bank -->
             <div class="mt-4">
                <x-input-label for="bank" :value="__('Nama Bank')" />
                <select id="bank" name="bank" class="block w-full mt-1 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300">
                    <option value="BCA">BCA</option>
                    <option value="BRI">BRI</option>
                    <option value="MANDIRI">Mandiri</option>
                    <!-- Tambahkan opsi bank lainnya sesuai kebutuhan -->
                </select>
                <x-input-error :messages="$errors->get('bank')" class="mt-2" />
             </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
