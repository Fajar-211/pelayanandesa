<x-app-layout>
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
            Open drawer
          </label>
        </div>
        <div class="drawer-side">
          <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
          <ul class="menu text-white min-h-full w-full p-4">
            <!-- Sidebar content here -->
            <li><a>Surat Pengantar</a></li>
            <li><a>Kas Warga</a></li>
            <li><a>Wajib Lapor</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- box kanan -->
    <d class="w-5/6 h-svh bg-[#DEF2F1] float-left">
      <!-- header -->
      <div class="w-full h-32 bg-white grid justify-items-end">
        <ul class="menu menu-vertical lg:menu-horizontal bg-base-200 rounded-box h-3/6">
          <li><a>Hallo, {{$nama}}</a></li>
          <li><a>Item 2</a></li>
          <li><a>Item 3</a></li>
        </ul>
      </div>

      <!-- Isi konten -->
      <div class="h-[calc(100vh-8rem)] w-full">
        <button class="btn btn-accent text-white">Masuk</button>
      </div>

  </div>
  </div>
</x-app-layout>