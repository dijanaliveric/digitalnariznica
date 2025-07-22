<nav class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <!-- lijevi dio: logo i linkovi -->
        <div class="flex">
          <!-- ... -->
        </div>

        <!-- desni dio: auth/gost -->
        <div class="hidden sm:flex sm:items-center sm:ml-6">
          @guest
            <a href="{{ route('login') }}"
               class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
              Register
            </a>
          @endguest

          @auth
            <!-- Settings Dropdown -->
            <div class="ml-3 relative">
              <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                  <button
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 
                           font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white 
                           dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 
                           focus:outline-none transition ease-in-out duration-150">
                    <div>{{ Auth::user()->name }}</div>

                    <div class="ml-1">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" 
                           viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 
                                 10.586l3.293-3.293a1 1 0 
                                 111.414 1.414l-4 4a1 1 0 
                                 01-1.414 0l-4-4a1 1 0 
                                 010-1.414z" clip-rule="evenodd"/>
                      </svg>
                    </div>
                  </button>
                </x-slot>

                <x-slot name="content">
                  <!-- Profile -->
                  <x-dropdown-link :href="route('profile.edit')">
                    Profile
                  </x-dropdown-link>
                  <!-- Logout -->
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault(); this.closest('form').submit();">
                      {{ __('Log Out') }}
                    </x-dropdown-link>
                  </form>
                </x-slot>
              </x-dropdown>
            </div>
          @endauth
        </div>
      </div>
    </div>
</nav>
