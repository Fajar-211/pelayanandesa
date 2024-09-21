<x-app-layout>
  <div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col items-center justify-start bg-[#DEF2F1]">
      <!-- Tombol di pojok kiri atas -->
      <label for="my-drawer-2" id="toggleButton" class="btn btn-primary drawer-button fixed top-4 left-4 z-50">
        <!-- Ikon Garis 3 -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </label>

      <!-- Navbar dan konten lainnya -->
      <div class="navbar rounded-box mt-10">
        <div class="flex flex-1 justify-end px-2">
          <div class="flex items-stretch">
            <h2 class="my-4 mr-4 text-black" id="user">Hallo </h2>

            <!-- Info Profil -->
            <div class="dropdown dropdown-end mr-4">
              <div tabindex="0" role="button" class="btn btn-ghost rounded-btn">
                <div class="avatar">
                  <div class="w-12 rounded-full">
                    <a class="inline-flex items-center justify-center p-2 hover:text-[#000000] mt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="1.5" stroke="currentColor"
                        class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <ul tabindex="0" class="menu dropdown-content bg-white rounded-box z-[1] mt-4 w-52 p-2 shadow">
                <li><a class="text-black" id="showInfo" onclick="showInfo()">Info Profil</a></li>
                <li>
                  <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="text-red-500">Log Out</button>
                  </form>
                </li>
              </ul>
            </div>

            <!-- Notifikasi -->
            <div class="dropdown dropdown-end">
              <div tabindex="0" role="button" class="btn btn-ghost rounded-btn">
                <div class="avatar">
                  <div class="w-12 rounded-full">
                    <a class="inline-flex items-center justify-center p-2 hover:text-[#000000] mt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <ul tabindex="0" class="menu dropdown-content bg-white rounded-box z-[1] mt-4 w-52 p-2 shadow">
                <li class="text-center text-black">Notifikasi</li>
                @foreach ($notifikasi as $item)
                  <li>{{ $item->deskripsi }} ({{ $item->created_at }})</li>
                @endforeach
              </ul>
            </div>

          </div>
        </div>
      </div>

      <!-- Konten halaman lainnya -->
      <!-- ISI KONTEN TAMBAHAN DAPAT DILETAKKAN DI SINI -->
      <div class="w-5/6 hidden mt-10" id="DivSurat"><!-- Surat Pengantar -->
        <form action="{{ route('surat-pengantar.store') }}" method="POST">
          @csrf
          <div class="card text-primary-content bg-white">
            <div class="card-body">
              <h2 class="card-title">ISI FORM</h2>
              <table>
                <tr>
                  <td><label for="nokk">Nomor KK</label></td>
                  <td><input type="text" id="nokk" name="nokk" placeholder="Nomor Kartu Keluarga"
                      class="input w-full max-w-xs bg-white" required /></td>
                </tr>
                <tr>
                  <td><label for="nik">NIK</label></td>
                  <td><input type="text" id="nik" name="nik" placeholder="Nomor Induk KTP"
                      class="input w-full max-w-xs bg-white" required /></td>
                </tr>
                <tr>
                  <td><label for="nama">Nama</label></td>
                  <td><input type="text" id="nama" name="nama" placeholder="Nama" class="input w-full max-w-xs bg-white"
                      required /></td>
                </tr>
                <tr>
                  <td><label for="keperluan">Keperluan</label></td>
                  <td><input type="text" id="keperluan" name="keperluan" placeholder="Keperluan"
                      class="input w-full max-w-xs bg-white" required /></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="card-actions justify-end">
            <button type="submit" class="btn btn-accent mt-6">Ajukan</button>
          </div>
        </form>
      </div>

      <div class="w-5/6 hidden mt-10" id="DivKas"><!-- Kas Warga -->
        <div class="card text-primary-content bg-white">
          <div class="card-body">
            <form>
              <label for="start-date">Tanggal Mulai:</label>
              <input type="date" id="start-date" name="start-date" required />

              <label for="end-date">Tanggal Akhir:</label>
              <input type="date" id="end-date" name="end-date" required />
              <button class="btn btn-accent">Cek</button>
            </form>
          </div>
        </div>
      </div>

      <div class="w-5/6 hidden mt-12" id="DivLapor"><!-- Wajib Lapor -->
        <form action="{{ route('wajib_lapors.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card text-primary-content bg-white">
            <div class="card-body">
              <h2 class="card-title">ISI FORM</h2>
              <table>
                <tr>
                  <td><label for="nikTamu">NIK</label></td>
                  <td><input type="text" id="nikTamu" name="nik_tamu" placeholder="NIK Tamu"
                      class="input w-full max-w-xs bg-white" required /></td>
                </tr>
                <tr>
                  <td><label for="namaTamu">Nama</label></td>
                  <td><input type="text" id="namaTamu" name="nama_tamu" placeholder="Nama Tamu"
                      class="input w-full max-w-xs bg-white" required /></td>
                </tr>
                <tr>
                  <td><label for="uploadKTP">Upload KTP</label></td>
                  <td><input type="file" id="uploadKTP" name="foto_tamu" class="file-input w-full max-w-xs bg-white"
                      accept=".jpg,.jpeg,.png" required /></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="card-actions justify-end">
            <button class="btn btn-accent mt-6 text-white">Ajukan</button>
          </div>
        </form>
      </div>

      <div class="w-5/6 hidden" id="DivInfo"><!-- Info Porfile -->
        <div class="card text-primary-content">
          <div class="card-body">
            <div class="avatar justify-center">
              <div class="w-24 rounded-full">
                <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
              </div>
            </div>
            <h2 class="text-center">Pengguna</h2>
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
        <form action="">
          <div class="card text-primary-content">
            <div class="card-body">
              <label for="chooseAvatar">
                <div class="avatar flex justify-center items-center">
                  <div class="w-24 rounded-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                  </div>
                </div>
              </label>
              <input type="file" id="chooseAvatar" class="hidden" accept=".jpg,.jpeg,.png" accept=".jpg,.jpeg,.png">
              <div class="flex justify-center"><input type="text" placeholder="Pengguna"
                  class="input w-full max-w-xs bg-[#DEF2F1] text-center" /></div>
            </div>
          </div>
          <table>
            <tr>
              <td class="text-green-500">Nomor KK</td>
            </tr>
            <tr>
              <td><input type="text" placeholder="example" class="input w-full max-w-xs bg-[#DEF2F1]" /></td>
            </tr>
            <tr></tr>
            <tr>
              <td class="text-green-500">NIK</td>
            </tr>
            <tr>
              <td><input type="text" placeholder="example" class="input w-full max-w-xs bg-[#DEF2F1]" /></td>
            </tr>
            <tr></tr>
            <tr>
              <td class="text-green-500">Jenis Kelamin</td>
            </tr>
            <tr>
              <td><input type="text" placeholder="example" class="input w-full max-w-xs bg-[#DEF2F1]" /></td>
            </tr>
            <tr></tr>
            <tr>
              <td class="text-green-500">Tanggal Lahir</td>
            </tr>
            <tr>
              <td><input type="date" placeholder="Type here"
                  class="input input-bordered w-full max-w-xs bg-[#DEF2F1]" /></td>
            </tr>
            <tr></tr>
            <tr>
              <td class="text-green-500">Email</td>
            </tr>
            <tr>
              <td><input type="text" placeholder="Email" class="input w-full max-w-xs bg-[#DEF2F1]" /></td>
            </tr>
          </table>
          <div class="card-actions justify-end mb-8">
            <button class="btn btn-secondary text-white" type="reset" id="batal">Batal</button>
            <button class="btn btn-accent text-white">Simpan</button>
          </div>
        </form>
      </div>

    </div>
    <!-- Drawer Sidebar -->
    <div class="drawer-side">
      <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
      <ul class="menu bg-[#3AAFA9] text-white min-h-full w-80 p-4">
        <!-- Sidebar content here -->
        <h1 class="text-center my-10 text-2xl">RT 3 RW 1</h1>
        <li><a id="showSurat" onclick="showSurat()">Surat pengantar</a></li>
        <li><a id="showKas" onclick="showKas()">Kas warga</a></li>
        <li><a id="showLapor" onclick="showLapor()">Wajib lapor</a></li>
      </ul>
    </div>
  </div>

  <script>
    // Mengubah ikon burger menjadi minus saat sidebar terbuka
    const drawerCheckbox = document.getElementById('my-drawer-2');
    const toggleButton = document.getElementById('toggleButton');

    drawerCheckbox.addEventListener('change', function () {
      if (drawerCheckbox.checked) {
        // Ganti ikon ke minus
        toggleButton.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
          </svg>
        `;
      } else {
        // Kembalikan ikon ke garis tiga
        toggleButton.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        `;
      }
    });

    // Fungsi untuk menampilkan konten sesuai pilihan
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
      document.getElementById("DivSurat").style.display = "none";
      document.getElementById("DivKas").style.display = "none";
      document.getElementById("DivLapor").style.display = "block";
      document.getElementById("DivInfo").style.display = "none";
      document.getElementById("user").style.display = "block";
      document.getElementById("DivEdit").style.display = "none";
    }

    function showInfo() {
      document.getElementById("DivSurat").style.display = "none";
      document.getElementById("DivKas").style.display = "none";
      document.getElementById("DivLapor").style.display = "none";
      document.getElementById("DivInfo").style.display = "block";
      document.getElementById("user").style.display = "none";
      document.getElementById("DivEdit").style.display = "none";
    }
    function showEdit() {
      document.getElementById("DivSurat").style.display = "none";
      document.getElementById("DivKas").style.display = "none";
      document.getElementById("DivLapor").style.display = "none";
      document.getElementById("DivInfo").style.display = "none";
      document.getElementById("user").style.display = "none";
      document.getElementById("DivEdit").style.display = "block";
    }
    const batal = document.getElementById('batal');
    batal.addEventListener('click', showInfo);
  </script>
</x-app-layout>