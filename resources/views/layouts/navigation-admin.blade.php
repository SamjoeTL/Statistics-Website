<aside class="h-screen px-3 py-4 mr-5 text-white bg-teal-500 rounded w-72" aria-label="Sidebar">
  <div class="">
    <h3 class="mb-5 text-2xl font-bold text-center" ><div class="mb-4">
    <img src="https://cdn.undiksha.ac.id/wp-content/uploads/2021/12/27081301/logo-undiksha.png" class="w-72 h-auto rounded-full" alt="">
    </div> Static Admin</h3>
    <ul class="space-y-2">
      <li>
        <a href="/" class="flex items-center p-2 text-base font-normal rounded-lg text-white-900">
          <i class="fa-solid fa-table-columns"></i>
          <span class="ml-3 text-white block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-600 md:p-0"">Home</span>
        </a>
      </li>
      <li>
        <a href="/admin" class="flex items-center p-2 text-base font-normal rounded-lg text-white-900">
          <i class="fa-solid fa-table-columns " ></i>
          <span class="ml-3 text-white block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-600 md:p-0">Admin</span>
        </a>
      </li>
      <li>
        <div class="flex items-center p-2 text-base font-normal rounded-lg text-white-900">
            <i class="mr-3 fa-solid fa-table-columns"></i>
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                              this.closest('form').submit();" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-600 md:p-0">
                {{ __('Log Out') }}
              </x-dropdown-link>
            </form>
        </div>
      </li>
    </ul>
  </div>
</aside>
