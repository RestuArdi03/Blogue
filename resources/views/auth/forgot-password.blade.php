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

        <div class="mb-4 text-sm text-gray-600">
          {{ __('Masukin email yang loe lupa passwordnya, nanti gue kirim link reset password ke email loe') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="space-y-4 md:space-y-6">
          @csrf

          <!-- Email Address -->
          <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
              required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>

          <div class="flex items-center justify-end mt-4">
            <x-primary-button>
              {{ __('Reset Password') }}
            </x-primary-button>
          </div>
        </form>
      </div>
    </div>
  </section>
</x-guest-layout>
