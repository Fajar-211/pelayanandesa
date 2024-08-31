<x-app-layout>
  {{-- <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard User') }}
    </h2>
  </x-slot> --}}
  <div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col items-center justify-start bg-[#DEF2F1]">
      <!-- Page content here -->

      <!-- KOTAK WARNA ATAS -->
      <div class="navbar rounded-box mt-10">
        <div class="flex flex-1 justify-end px-2">
          <div class="flex items-stretch">
            <h2 class="my-4 mr-4 text-black" id="user">Hallo {{$nama}} </h2>
            <!-- Info Profil -->
            <div class="dropdown dropdown-end mr-4">
              <div tabindex="0" role="button" class="btn btn-ghost rounded-btn">
                <div class="avatar">
                  <div class="w-12 h-12 rounded-full">
                    <a class="inline-flex items-center justify-center p-2 hover:text-[#000000] mt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <ul tabindex="0" class="menu dropdown-content bg-white rounded-box z-[1] mt-4 w-52 p-2 shadow">
                <li><a class="text-black" id="showInfo" onclick="showInfo()">Info Profil</a></li>
                <li><a class="text-red">Log Out</a></li>
              </ul>
            </div>
            <!-- Notifikasi -->
            <div class="dropdown dropdown-end">
              <div tabindex="0" role="button" class="btn btn-ghost rounded-btn">
                <div class="avatar">
                  <div class="w-12 rounded-full">
                    <a class="inline-flex items-center justify-center p-2 hover:text-[#000000] mt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <ul tabindex="0" class="menu dropdown-content bg-white rounded-box z-[1] mt-4 w-52 p-2 shadow">
                <li class="text-center text-black">Notifikasi</li>
                <li></li>
                <li><a>Notifikasi 1</a></li>
                <li><a>Notifikasi 2</a></li>
                <li><a>Notifikasi 3</a></li>
                <li><a>Notifikasi 4</a></li>
                <li><a>Notifikasi 5</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- ISI KONTEN (DI BAWAH) -->
      <div class="w-5/6 hidden mt-10" id="DivSurat"><!-- Surat Pengantar -->
      <div class="flex items-center space-x-2">
        <span class="inline-flex items-center justify-center px-4 py-3 text-black bg-white rounded-md">Permintaan</span>
        <select class="select join-item w-30">
          <option disabled selected>Filter</option>
          <option>ops 1</option>
          <option>ops 2</option>
          <option>ops 3</option>
        </select>
      </div>
<br>
    <div tabindex="0" class="collapse collapse-arrow border-base-300 bg-base-200 border mb-2">
      <div class="collapse-title text-xl font-medium bg-white">Budi</div>
      <div class="collapse-content bg-white">
      <table>
                <tr>
                  <td>NIK</td>
                  <td><input type="text" placeholder="" class="input w-full max-w-xs bg-white" /></td>
                </tr>
                <tr>
                  <td>Nomor KK</td>
                  <td><input type="text" placeholder="" class="input w-full max-w-xs bg-white" /></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td><input type="text" placeholder="" class="input w-full max-w-xs bg-white" /></td>
                </tr>
                <tr>
                  <td>Keperluan</td>
                  <td><input type="text" placeholder="" class="input w-full max-w-xs bg-white" /></td>
                </tr>
              </table>
              <div class="card-actions justify-end">
                <button class="btn btn-accent mt-6 bg-[#0FA4AF]">Terima</button>
              </div>
      </div>
    </div>
    <div tabindex="0" class="collapse collapse-arrow border-base-300 bg-base-200 border mb-2">
      <div class="collapse-title text-xl font-medium bg-white">Ahmad</div>
      <div class="collapse-content bg-white">
      <table>
                <tr>
                  <td>NIK</td>
                  <td><input type="text" placeholder="" class="input w-full max-w-xs bg-white" /></td>
                </tr>
                <tr>
                  <td>Nomor KK</td>
                  <td><input type="text" placeholder="" class="input w-full max-w-xs bg-white" /></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td><input type="text" placeholder="" class="input w-full max-w-xs bg-white" /></td>
                </tr>
                <tr>
                  <td>Keperluan</td>
                  <td><input type="text" placeholder="" class="input w-full max-w-xs bg-white" /></td>
                </tr>
              </table>
              <div class="card-actions justify-end">
                <button class="btn btn-accent mt-6 bg-[#0FA4AF]">Terima</button>
              </div>
      </div>
    </div>
  
<br>
    
      </div>
      <div class="w-5/6 hidden mt-10" id="DivKas">
          <!-- Kas Warga -->
          <button class="btn bg-white text-gray-800 hover:bg-gray-200 focus:outline-none " id="buttonPermintaan" onclick="toggleButton(this)">Kas Warga</button>
          <button class="btn bg-white text-gray-800 hover:bg-gray-200 focus:outline-none " id="buttonEdit" onclick="toggleButton(this)">Edit</button>
          <div id="editFormContainer" style="display: none; margin-top: 20px;">
            <form id="editForm">
                <label for="jenis">Pilih</label>
                <select id="jenis" name="jenis">
                    <option value="pemasukkan">Pemasukkan</option>
                    <option value="pengeluaran">Pengeluaran</option>
                </select>

                <label for="jumlah">Jumlah:</label>
                <input type="number" id="jumlah" name="jumlah" required>

                <label for="saldo">Saldo Akhir:</label>
                <input type="number" id="saldo" name="saldo" required>

                <button type="submit">Submit</button>
            </form>
        </div> 
      </div>

      <div class="w-5/6 hidden mt-12" id="DivLapor"><!-- Wajib Lapor -->
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

      <div class="w-5/6 hidden" id="DivInfo"><!-- Info Porfile -->
        <div class="card text-primary-content">
          <div class="card-body">
            <div class="avatar justify-center">
              <div class="w-24 rounded-full">
                <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
              </div>
            </div>
            <h2 class="text-center">{{$nama}}</h2>
            <table>
              <tr>
                <td class="text-green-500">Nomor KK</td>
              </tr>
              <tr>
                <td class="text-stone-400">example</td>
              </tr>
              <tr></tr>
              <tr>
                <td class="text-green-500">NIK</td>
              </tr>
              <tr>
                <td class="text-stone-400">example</td>
              </tr>
              <tr></tr>
              <tr>
                <td class="text-green-500">Jenis Kelamin</td>
              </tr>
              <tr>
                <td class="text-stone-400">example</td>
              </tr>
              <tr></tr>
              <tr>
                <td class="text-green-500">Tanggal Lahir</td>
              </tr>
              <tr>
                <td class="text-stone-400">example</td>
              </tr>
              <tr></tr>
              <tr>
                <td class="text-green-500">Email</td>
              </tr>
              <tr>
                <td class="text-stone-400">example</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="card-actions justify-end">
          <button class="btn btn-accent text-white" id="showEdit" onclick="showEdit()">Edit</button>
        </div>
      </div>

      <div class="w-5/6 hidden" id="DivEdit"><!-- Edit Porfile -->
        <div class="card text-primary-content">
          <div class="card-body">
            <div class="avatar justify-center">
              <div class="w-24 rounded-full">
                <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
              </div>
            </div>
            <h2 class="text-center">EDIT PROFIL</h2>
          </div>
        </div>
        <div class="card-actions justify-end">
          <button class="btn btn-secondary text-white">Batal</button>
          <button class="btn btn-accent text-white">Simpan</button>
        </div>
      </div>
      <div>
        
      </div>
      <!-- KOTAK MENU SEBELAH -->
      <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
        Buka Tab
      </label>
    </div>
    <div class="drawer-side">
      <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
      <ul class="menu bg-[#3AAFA9] text-white min-h-full w-80 p-4">
        <!-- Sidebar content here -->
        <h1 class="text-center my-10 text-2xl">RT 3 RW 1</h1>
        <li><a id="showSurat" onclick="showSurat()">Surat pengantar</a></li>
        <li><a id="showKas" onclick="showKas()">Kas warga</a></li>
        <li><a id="showLapor" onclick="showLapor()">Wajib lapor</a></li>
        <li><a id="showLapor" onclick="showLapor()">Data Warga</a></li>
        <li><a id="showLapor" onclick="showLapor()">Pemberitahuan</a></li>
      </ul>
    </div>
  </div>
  <script>
    function showSurat() {
      document.getElementById("DivSurat").style.display = "block";
      document.getElementById("DivKas").style.display = "none";
      document.getElementById("DivLapor").style.display = "none";
      document.getElementById("DivInfo").style.display = "none";
      document.getElementById("user").style.display = "block";
      document.getElementById("DivEdit").style.display = "none";
    }
    function showKas() {
      document.getElementById("DivSurat").style.display = "none";
      document.getElementById("DivKas").style.display = "block";
      document.getElementById("DivLapor").style.display = "none";
      document.getElementById("DivInfo").style.display = "none";
      document.getElementById("user").style.display = "block";
      document.getElementById("DivEdit").style.display = "none";
    }
    function showLapor() {
 
    }
    function showInfo() {

    }
    function showEdit() {

    }
    function showData(){
      // show data isinya data warga, tapi untuk tampilan data warga belum ada
    }
    function toggleButton(button) {
      const buttons = document.querySelectorAll('#DivKas .btn');
      buttons.forEach(btn => {
        btn.classList.remove('bg-custom-blue', 'text-white');
        btn.classList.add('bg-white', 'text-gray-800');
      });
      button.classList.add('bg-custom-blue', 'text-white');
      button.classList.remove('bg-white', 'text-gray-800');
    }
    function togglebuttonEdit() {
    const formContainer = document.getElementById('editForm');
    const editButton = document.getElementById('buttonEdit');

    if (formContainer.style.display === 'none' || formContainer.style.display === '') {
        formContainer.style.display = 'block';
        editButton.classList.add('active'); // Optionally, add an active class to style the button differently
    } else {
        formContainer.style.display = 'none';
        editButton.classList.remove('active');
    }
}

  </script>
</x-app-layout>