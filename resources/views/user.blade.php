<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard User') }}
        </h2>
    </x-slot>

    <div>
        <div class="drawer lg:drawer-open">
            <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col items-center justify-center">

                <div class="card bg-white w-[80%] shadow-xl">
                    <div class="card-body">
                      <h2 class="card-title text-base-200">Isi Form</h2>
                      <div class="w-full flex gap-2 items-center">
                        <label for="nomorkk" class="w-1/3 text-base-200">Nomer KK</label>

                          <input id="nomorkk" type="text" placeholder="Type here" class="input  w-full border border-black/30 bg-white text-base-200" />
                      </div>
                      <div class="w-full flex gap-2 items-center">
                        <label for="nik" class="w-1/3 text-base-200">NIK</label>

                          <input id="nik" type="text" placeholder="Type here" class="input  w-full border border-black/30 bg-white text-base-200" />
                      </div>
                      <div class="w-full flex gap-2 items-center">
                        <label for="nama" class="w-1/3 text-base-200">Nama</label>

                          <input id="nama" type="text" placeholder="Type here" class="input  w-full border border-black/30 bg-white text-base-200" />
                      </div>
                      <div class="w-full flex gap-2 items-center">
                        <label for="keperluan" class="w-1/3 text-base-200">Keperluan</label>

                          <input id="keperluan" type="text" placeholder="Type here" class="input  w-full border border-black/30 bg-white text-base-200" />
                      </div>
                    </div>
                  </div>

                  <div class="w-[80%] flex justify-end mt-5">
                      <button class="btn">Button</button>
                  </div>

              <!-- Page content here -->
              <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
                Open drawer
              </label>
            </div>
            <div class="drawer-side ">
              <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
              <ul class="menu bg-[#3AAFA9] text-base-content min-h-full w-80 p-4">
                <h1 class="text-white text-xl text-center py-12">Judul</h1>
                <!-- Sidebar content here -->
                <li class="text-white"><a>Surat Pengantar</a></li>
                <li class="text-white"><a>Kas Warga</a></li>
                <li class="text-white"><a>Wajib Lapor</a></li>
              </ul>
            </div>
          </div>
    </div>
</x-app-layout>
