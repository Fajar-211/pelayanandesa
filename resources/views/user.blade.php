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
      <div class="w-5/6 hidden" id="DivSurat"><!-- Surat Pengantar -->
        <div class="card text-primary-content bg-white">
          <div class="card-body">
            <h2 class="card-title">ISI FORM</h2>
            <form action="">
              <table>
                <tr>
                  <td>Nomor KK</td>
                  <td><input type="text" placeholder="" class="input w-full max-w-xs bg-white" /></td>
                </tr>
                <tr>
                  <td>NIK</td>
                  <td><input type="text" placeholder="" class="input w-full max-w-xs bg-white" /></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td><input type="text" placeholder="" class="input w-full max-w-xs bg-white" /></td>
                </tr>
                <tr>
                  <td>Keperluan</td>
                  <td><textarea class="textarea bg-white" placeholder=""></textarea></td>
                </tr>
              </table>
            </form>
          </div>
        </div>
        <div class="card-actions justify-end">
          <button class="btn btn-accent mt-6">Ajukan</button>
        </div>
      </div>

      <div class="w-5/6 hidden" id="DivKas"><!-- Kas Warga -->
        <h2>Hallo ini kotak kas warga</h2>
      </div>
      
      <div class="w-5/6 hidden" id="DivLapor"><!-- Wajib Lapor -->
        <div class="card text-primary-content bg-white">
          <div class="card-body">
            <h2 class="card-title">ISI FORM</h2>
            <form action="">
              <table>
                <tr>
                  <td>NIK</td>
                  <td><input type="text" placeholder="" class="input w-full max-w-xs bg-white" /></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td><input type="text" placeholder="" class="input w-full max-w-xs bg-white" /></td>
                </tr>
                <tr>
                  <td>Upload Foto</td>
                  <td><input type="file" class="file-input w-full max-w-xs bg-white" /></td>
                </tr>
              </table>
            </form>
          </div>
        </div>
        <div class="card-actions justify-end">
          <button class="btn btn-accent mt-6">Ajukan</button>
        </div>
      </div>




      <!-- KOTAK MENU SEBELAH -->
      <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
        Open drawer
      </label>
    </div>
    <div class="drawer-side">
      <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
      <ul class="menu bg-[#3AAFA9] text-white min-h-full w-80 p-4">
        <!-- Sidebar content here -->
        <h1 class="text-center">JUDUL</h1>
        <li><a id="showSurat" onclick="showSurat()">Surat pengantar</a></li>
        <li><a id="showKas" onclick="showKas()">Kas warga</a></li>
        <li><a id="showLapor" onclick="showLapor()">Wajib lapor</a></li>
      </ul>
    </div>
  </div>
  <script>
    function showSurat() {
      document.getElementById("DivSurat").style.display = "block";
      document.getElementById("DivKas").style.display = "none";
      document.getElementById("DivLapor").style.display = "none";
    }
    function showKas() {
      document.getElementById("DivSurat").style.display = "none";
      document.getElementById("DivKas").style.display = "block";
      document.getElementById("DivLapor").style.display = "none";
    }
    function showLapor() {
      document.getElementById("DivSurat").style.display = "none";
      document.getElementById("DivKas").style.display = "none";
      document.getElementById("DivLapor").style.display = "block";
    }
  </script>
</x-app-layout>