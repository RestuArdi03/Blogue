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
          Masuk ke akun loe
        </h1>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-4 md:space-y-6">
          @csrf

          <!-- Email Input -->
          <div>
            <x-input-label for="email" value="Email loe" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" placeholder="john@gmail.com"
              required autofocus />
            <x-input-error :messages="$errors->get('email')" />
          </div>

          <!-- Password Input -->
          <div>
            <x-input-label for="password" value="Password loe" />
            <x-text-input id="password" type="password" name="password" placeholder="••••••••" required />
            <x-input-error :messages="$errors->get('password')" />
          </div>

          <!-- Remember Me & Forgot Password -->
          <div class="flex items-center justify-between">
            <div class="flex items-start">
              <div class="flex items-center h-5">
                <x-checkbox id="remember" name="remember" />
              </div>
              <div class="ml-3 text-sm">
                <label for="remember" class="text-gray-500 ">Jangan lupain gue!</label>
              </div>
            </div>

            @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}" class="text-sm font-medium text-heading hover:underline ">
                Lupa password?
              </a>
            @endif
          </div>

          <!-- Submit Button Component -->
          <x-primary-button>
            Masuk
          </x-primary-button>

          <!-- Sign Up Link -->
          <p class="text-sm font-light text-gray-500 text-center">
            Belum punya akun nih?
            <a href="{{ route('register') }}" class="font-medium text-heading hover:underline">
              Bikin di sini
            </a>
          </p>
        </form>

      </div>
    </div>
  </section>
</x-guest-layout>
