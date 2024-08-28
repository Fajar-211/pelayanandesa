<x-app-layout>
  {{-- <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard User') }}
    </h2>
  </x-slot> --}}
  <div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col items-center justify-center bg-[#DEF2F1] relative">
      <!-- Page content here -->

       <!-- KOTAK WARNA PUTIH -->
    <div class="w-5/6 h-svh bg-[#DEF2F1] float-left">
      <div class="bg-transparent w-full h-24 items-end justify-end absolute top-0">
        <ul class="bg-transparent menu menu-vertical lg:menu-horizontal items-center text-black mt-12 mr-8 mb-12">
          <li>Hallo, {{$nama}}</li>
          <li>
            <details class="dropdown">
              <summary>
              <a class="inline-flex items-center justify-center p-2 hover:text-[#000000]">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg>
            </a>

              </summary>
              <ul class="menu dropdown-content bg-white rounded-box z-[1] w-52 p-2 shadow">
                <li><a>Info profile</a></li>
                <li><a>Log out</a></li>
              </ul>
            </details>
          </li>
        </ul>
      </div>
  </div>

      <!-- ISI KONTEN (DI BAWAH KOTAK PUTIH) -->
      <div class="card bg-primary text-primary-content w-96">
        <div class="card-body">
          <h2 class="card-title">Card title!</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions justify-end">
            <button class="btn">Buy Now</button>
          </div>
        </div>
      </div>
      <!-- KOTAK MENU SEBELAH KIRI -->
      <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
        Open drawer
      </label>
    </div>
    <div class="drawer-side">
      <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
      <ul class="menu bg-[#3AAFA9] text-white min-h-full w-80 p-4">
        <!-- Sidebar content here -->
        <div class="text-white text-center mb-4">
            <h3 class="text-center text-lg font-bold">Pelayanan Desa</h3>
          </div>
        <li><a>Surat pengantar</a></li>
        <li><a>Kas warga</a></li>
        <li><a>Wajib lapor</a></li>
        <li><a>Data Warga</a></li>
        <li><a>Pemberitahuan</a></li>
      </ul>
    </div>
  </div>
</x-app-layout>