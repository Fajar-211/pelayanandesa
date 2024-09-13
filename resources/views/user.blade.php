<x-app-layout>
  <div class="h-screen  bg-black flex overflow-hidden">
    <!-- sidebar -->
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <!-- drawer content -->
        <div class="drawer-content flex flex-col h-screen">
            <!-- wrapper for spacing -->
            <div class="header-wrapper bg-[#DEF2F1] px-4 py-2 lg:px-4 lg:py-2">
                <div class="header-box bg-[#DEF2F1] rounded-lg flex justify-between items-center py-4 px-6 lg:px-12">
                    <div class="flex items-center">
                        <label for="my-drawer-2" class="lg:hidden cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </label>
                        <span class="text-lg lg:text-xl font-semibold ml-10 text-[#2B7A78]">Hallo, {{$nama}}</span>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="dropdown dropdown-end"> <!-- Removed margin -->
                        <div tabindex="0" role="button" class="btn btn-ghost rounded-btn">
                        <div class="avatar">
                            <div class="w-12 rounded-full">
                            <a class="inline-flex items-center justify-center p-2 hover:text-[#000000] mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </a>
                            </div>
                        </div>
                        </div>
                        <ul tabindex="0" class="menu dropdown-content bg-white rounded-box z-[1] mt-4 w-52 p-2 shadow">
                        <li><a class="text-black" id="showInfo" onclick="showInfo()">Info Profil</a></li>
                        <li><a class="text-red-600">Log Out</a></li>
                        </ul>
                    </div>
                    
                    <div class="dropdown dropdown-end ml-2"> <!-- Adjusted margin to be very small -->
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
            <!-- main content -->
            <div class="flex-1  bg-[#DEF2F1] overflow-hidden">
                <div class="bg-[#DEF2F1] flex justify-center w-full ">
                    <div class="w-5/6 mt-10" id="DivSurat"><!-- Surat Pengantar -->      
                    <div class="card text-primary-content bg-white">
                        <div class="text-black justify-center card-body">
                            <h2 class="card-title">Buat Pengajuan</h2>
                            <form action="">
                            <table>
                                <tr>
                                <td>Nomor KK</td>
                                <td><input type="text" placeholder="" class="ml-10 input w-full max-w-xs border-[#e7e7e7]" /></td>
                                </tr>
                                <tr>
                                <td>NIK</td>
                                <td><input type="text" placeholder="" class="mt-5 ml-10 input w-full max-w-xs border-[#e7e7e7]" /></td>
                                </tr>
                                <tr>
                                <td>Nama</td>
                                <td><input type="text" placeholder="" class="mt-5 ml-10 input w-full max-w-xs border-[#e7e7e7]" /></td>
                                </tr>
                                <tr>
                                <td>Keperluan</td>
                                <td><textarea class="mt-5 ml-10 textarea border-[#e7e7e7]" placeholder=""></textarea></td>
                                </tr>
                            </table>
                            </form>
                            </div>
                        </div>
                        <div class="card-actions justify-end">
                            <button class="btn text-white btn-accent bg-[#0FA4AF] mt-6">Ajukan</button>
                        </div>
                    </div>
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
        <form action="" method="POST">
          <div class="card text-primary-content bg-white">
            <div class="card-body">
              <h2 class="card-title">ISI FORM</h2>
              <table>
                <tr>
                  <td><label for="nikTamu">NIK</label></td>
                  <td><input type="text" id="nikTamu" name="" placeholder="NIK Tamu" class="input w-full max-w-xs bg-white" required /></td>
                </tr>
                <tr>
                  <td><label for="namaTamu">Nama</label></td>
                  <td><input type="text" id="namaTamu" name="" placeholder="Nama Tamu" class="input w-full max-w-xs bg-white" required /></td>
                </tr>
                <tr>
                  <td><label for="uploadKTP">Upload KTP</label></td>
                  <td><input type="file" id="uploadKTP" name="" class="file-input w-full max-w-xs bg-white" accept=".jpg,.jpeg,.png" required /></td>
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
              <div class="flex justify-center"><input type="text" placeholder="{{$nama}}"
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
