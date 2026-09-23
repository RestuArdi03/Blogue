<x-guest-layout>
  <section class="flex flex-col justify-center items-center">

    <!-- Logo -->
    <a href="{{ route('frontend.home') }}" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
      <img class="w-8 h-8 mr-2" src="{{ asset('images/blogue.png') }}" alt="Blogue Logo">
      Blogue
    </a>

    <!-- Card Container -->
    <div class="w-full bg-white rounded-lg shadow sm:max-w-md xl:p-0">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
          Bikin dulu akun loe
        </h1>

        <form method="POST" action="{{ route('register') }}" class="space-y-4 md:space-y-6">
          @csrf

          <!-- Name -->
          <div>
            <x-input-label for="name" :value="__('Nama Loe')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
              placeholder="John Doe" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
          </div>

          <!-- Email Address -->
          <div class="mt-4">
            <x-input-label for="email" :value="__('Email Loe')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
              placeholder="john@gmail.com" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>

          <!-- Password -->
          <div class="mt-4">
            <x-input-label for="password" :value="__('Password Loe')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
              placeholder="••••••••" autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>

          <!-- Confirm Password -->
          <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password Loe')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" placeholder="••••••••"
              name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
          </div>

          <x-primary-button>
            {{ __('Daftar') }}
          </x-primary-button>

          <p class="text-sm font-light text-gray-500 text-center">
            Dah punya akun?
            <a href="{{ route('login') }}" class="font-medium text-heading hover:underline">
              Balik ke login
            </a>
          </p>

        </form>
      </div>
    </div>
  </section>
</x-guest-layout>
