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
      <div class="w-full h-24 bg-white items-end justify-end absolute top-0">
        <ul class="menu menu-vertical lg:menu-horizontal rounded-box items-center text-black mt-12 mr-8 mb-12">
          <li>Hallo, {{$nama}}</li>
          <li>
            <details class="dropdown">
              <summary>
                <div class="avatar">
                  <div class="w-8 rounded-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                  </div>
                </div>
              </summary>
              <ul class="menu dropdown-content bg-white rounded-box z-[1] w-52 p-2 shadow">
                <li><a>Info profile</a></li>
                <li><a>Log out</a></li>
              </ul>
            </details>
          </li>
          <li>
            <details class="dropdown">
              <summary>
                <div class="avatar">
                  <div class="w-8 rounded-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                  </div>
                </div>
              </summary>
              <ul class="menu dropdown-content bg-white rounded-box z-[1] w-52 p-2 shadow">
                <li><a>Info profile</a></li>
                <li><a>Log out</a></li>
              </ul>
            </details>
          </li>
        </ul>
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
        <h1 class="text-center">JUDUL</h1>
        <li><a>Surat pengantar</a></li>
        <li><a>Kas warga</a></li>
        <li><a>Wajib lapor</a></li>
      </ul>
    </div>
  </div>
</x-app-layout>