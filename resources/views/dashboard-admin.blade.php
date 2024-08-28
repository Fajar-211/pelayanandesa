<x-app-layout>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  {{-- <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard User') }}
    </h2>
  </x-slot> --}}

  <div class="h-svh w-full bg-grey">
    <!-- box kiri -->
    <div class="h-svh w-1/6 bg-[#3AAFA9] float-left">
      <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col items-center justify-center">
          <!-- Page content here -->
          <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
            =
          </label>
        </div>

        <div class="drawer-side mt-12">
          <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
          
          <!-- New Title Div -->
          <div class="text-white text-center mb-4">
            <h3 class="text-lg font-bold">Judul</h3>
          </div>

          <!-- Sidebar content here -->
          <ul class="menu text-white w-full p-4" style="overflow: hidden;">
            <li><a class="block w-full px-4 py-2 hover:bg-[#44C3CC] hover:text-[#DEF2F1]">Surat Pengantar</a></li>
            <li><a class="block w-full px-4 py-2 hover:bg-[#44C3CC] hover:text-[#DEF2F1]">Kas Warga</a></li>
            <li><a class="block w-full px-4 py-2 hover:bg-[#44C3CC] hover:text-[#DEF2F1]">Wajib Lapor</a></li>
            <li><a class="block w-full px-4 py-2 hover:bg-[#44C3CC] hover:text-[#DEF2F1]">Data Warga</a></li>
            <li><a class="block w-full px-4 py-2 hover:bg-[#44C3CC] hover:text-[#DEF2F1]">Pemberitahuan</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- box kanan -->
    <div class="w-5/6 h-svh bg-[#DEF2F1] float-left">
      <!-- header -->
      <div class="bg-transparent w-full h-32 bg-white grid justify-items-end">
        <ul class="bg-transparent menu menu-vertical lg:menu-horizontal bg-base-200 rounded-box h-3/6">
          <li>
            <!-- User Greeting without Hover Effect -->
            <a class="hover-none">Hallo, {{$nama}}</a>
          </li>
          <li>
            <!-- SVG Icon with Hover Effect -->
            <a class="inline-flex items-center justify-center p-2 rounded-full hover:bg-[#2B7A78] hover:text-[#DEF2F1]">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg>
            </a>
          </li>
        </ul>
      </div>

      <!-- Isi konten -->
      <div class="h-[calc(100vh-8rem)] w-full">
        
      </div>
    </div>
  </div>
</x-app-layout>
