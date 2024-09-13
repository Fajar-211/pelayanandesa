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
                            <button class="btn text-white btn-accent mt-6 bg-[#0FA4AF]">Terima</button>
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
                            <button class="btn text-white btn-accent mt-6 bg-[#0FA4AF]">Terima</button>
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
                        <h2 class="card-title text-black">ISI FORM</h2>
                        <form action="">
                          <table class="text-black">
                            <tr>
                              <td>NIK</td>
                              <td><input type="text" placeholder="" class="ml-10 input w-full max-w-xs border-[#e7e7e7]" /></td>
                            </tr>
                            <tr>
                              <td>Nama</td>
                              <td><input type="text" placeholder="" class="mt-5 ml-10 input w-full max-w-xs border-[#e7e7e7]" /></td>
                            </tr>
                            <tr>
                              <td>Upload Foto</td>
                              <td><input type="file" class="mt-5 ml-10 file-input w-full max-w-xs bg-white" /></td>
                            </tr>
                          </table>
                        </form>
                      </div>
                    </div>
                    <div class="card-actions justify-end">
                      <button class="btn text-white btn-accent mt-6 bg-[#0FA4AF]">Ajukan</button>
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
                        <h2 class="text-center text-black">{{$nama}}</h2>
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
                      <button class="btn btn-accent text-white bg-[#0FA4AF]" id="showEdit" onclick="showEdit()">Edit</button>
                    </div>
                  </div>
                    </div>

                  <div class="flex justify-center">
                    <!-- note -->
                    <!-- biar nampilin edit profile, hidden nya harus di hapus tapi nanti di tiap halaman bakal muncul bagian edit profile -->
                      <div class="w-5/6 " id="DivEdit"><!-- Edit Porfile --> 
                        <form action="">
                        <div class=" text-primary-content">
                            <div class="card-body">
                                <div class="avatar flex justify-center items-center">
                                    <div class="w-24 rounded-full">
                                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                    </div>  
                                    <label for="file-input">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                                        </button>
                                        <div class="flex justify-center">
                                            <input id="file-input" type="file" class="file-input w-full max-w-xs bg-white hidden" />
                                        </div>
                                    </label>
                                </div>
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
                                        class="input w-full max-w-xs bg-[#DEF2F1]" /></td>
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
                                <button class="btn btn-secondary text-white">Batal</button>
                                <button class="btn btn-accent text-white">Simpan</button>
                            </div>
                        </form>
                        </div>
                      </div>
              </div>
        </div>

        <!-- sidebar content -->
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu text-white h-full w-80 p-4 bg-[#3AAFA9]">
            <div class="lg:hidden flex justify-end mb-4">
                <label for="my-drawer-2" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                </label>
            </div>
            <!-- sidebar content  -->
            <div class="text-center mb-4 flex items-center justify-center">
                <h1 class="mt-10 mb-6 text-xl font-bold">RT 3 RW 1</h1>
            </div>
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
