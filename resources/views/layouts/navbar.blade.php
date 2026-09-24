<nav class="bg-neutral-primary fixed w-full z-20 top-0 start-0 border-b border-default">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="{{ route('frontend.home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ asset('images/blogue.png') }}" class="w-5 h-auto" alt="Blogue Logo" />
      <span class="self-center text-xl text-[#12345A] font-bold whitespace-nowrap">Blogue</span>
    </a>

    <!-- Area Kanan (Auth State) -->
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

      <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        {{-- Jika sudah login --}}
        @auth
          <button type="button"
            class="flex text-sm bg-neutral-primary rounded-full md:me-0 focus:ring-4 focus:ring-neutral-tertiary"
            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
            data-dropdown-placement="bottom">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="user photo">
          </button>
        @endauth
        {{-- JIka belum login --}}
        @guest
          <div class="flex items-center space-x-2">
            <a href="{{ route('login') }}"
              class="text-body hover:text-heading font-medium text-sm px-3 py-2 rounded-base hover:bg-neutral-secondary-soft transition">
              Masuk
            </a>
            <a href="{{ route('register') }}"
              class="text-white bg-[#12345A] hover:bg-[#061b33] font-medium text-sm px-4 py-2 rounded-base transition">
              Daftar
            </a>
          </div>
        @endguest
        <!-- Dropdown menu -->
        <div class="z-50 hidden bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-44"
          id="user-dropdown">
          <div class="px-4 py-3 text-sm border-b border-default">
            <span class="block text-heading font-medium">Joseph McFall</span>
            <span class="block text-body truncate">name@flowbite.com</span>
          </div>
          <ul class="p-2 text-sm text-body font-medium" aria-labelledby="user-menu-button">
            <li>
              <a href="{{ route('backend.dashboard') }}"
                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Dashboard</a>
            </li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}"
                  class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded"
                  onclick="event.preventDefault(); this.closest('form').submit();">
                  Logout
                </a>
              </form>
            </li>
          </ul>
        </div>
        <button data-collapse-toggle="navbar-user" type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary"
          aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
          </svg>
        </button>
      </div>
    </div>

    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
      <ul
        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-default rounded-base bg-neutral-secondary-soft md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-neutral-primary">
        <li>
          <x-nav-link href="/" :current="request()->is('/')">Beranda</x-nav-link>
        </li>
        <li>
          <x-nav-link href="/articles" :current="request()->is('articles*')">Artikel</x-nav-link>
        </li>
        <li>
          <x-nav-link href="/about" :current="request()->is('about')">Tentang</x-nav-link>
        </li>
        <li>
          <x-nav-link href="/contact" :current="request()->is('contact')">Kontak</x-nav-link>
        </li>
      </ul>
    </div>
  </div>
</nav>
