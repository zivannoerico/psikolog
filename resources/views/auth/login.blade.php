<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <div class="mb-8 text-center">
        <h2 class="text-2xl font-bold font-jakarta text-gray-900 mb-2">Masuk ke Dashboard</h2>
        <p class="text-gray-500 text-sm">Silakan masukkan kredensial Anda.</p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" class="text-gray-700 font-semibold mb-1" />
            <x-text-input id="email" class="block w-full mt-1 border-gray-200 focus:border-brand-pink focus:ring-brand-pink rounded-lg shadow-sm transition duration-200" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div x-data="{ showPassword: false }">
            <div class="flex justify-between items-center mb-1">
                <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-semibold" />
                @if (Route::has('password.request'))
                    <a class="text-sm font-medium text-brand-pink hover:text-brand-pink-hover transition" href="{{ route('password.request') }}">
                        {{ __('Lupa password?') }}
                    </a>
                @endif
            </div>

            <div class="relative">
                <x-text-input id="password" class="block w-full mt-1 border-gray-200 focus:border-brand-pink focus:ring-brand-pink rounded-lg shadow-sm transition duration-200 pr-10"
                                x-bind:type="showPassword ? 'text' : 'password'"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="••••••••" />
                                
                <button type="button" @click="showPassword = !showPassword" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-brand-pink focus:outline-none transition-colors">
                    <!-- Eye Icon (hidden when password is shown) -->
                    <svg x-show="!showPassword" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <!-- Eye Slash Icon (shown when password is shown) -->
                    <svg x-show="showPassword" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                    </svg>
                </button>
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#C8607A] shadow-sm focus:ring-[#C8607A] cursor-pointer" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
            </label>
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-brand-pink hover:bg-brand-pink-hover focus:outline-none focus:ring-2 focus:ring-offset-2 ring-brand-pink transition-colors duration-200">
                {{ __('Masuk ke Dashboard') }}
            </button>
        </div>
    </form>
</x-guest-layout>
