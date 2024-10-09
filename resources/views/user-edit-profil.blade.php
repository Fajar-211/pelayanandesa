<x-app-layout>
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col items-center justify-start bg-[#DEF2F1]">
            <!-- Tombol di pojok kiri atas -->
            <label for="my-drawer-2" id="toggleButton" class="btn btn-primary drawer-button fixed top-4 left-4 z-50">
                <!-- Ikon Garis 3 -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </label>

            <!-- Navbar dan konten lainnya -->
            <div class="navbar rounded-box mt-10">
                <div class="flex flex-1 justify-end px-2">
                    <div class="flex items-stretch">
                        <h2 class="my-4 mr-4 text-black" id="user">Hallo, {{ \App\models\DataWarga::where('email', Auth::user()->email)->first()->nama }} </h2>

                        <!-- Info Profil -->
                        <div class="dropdown dropdown-end mr-4">
                            <div tabindex="0" role="button" class="btn btn-ghost rounded-btn">
                                <div class="avatar">
                                    <div class="w-12 rounded-full">
                                        <a
                                            class="inline-flex items-center justify-center p-2 hover:text-[#000000] mt-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="1.5"
                                                stroke="currentColor" class="h-6 w-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <ul tabindex="0"
                                class="menu dropdown-content bg-white rounded-box z-[1] mt-4 w-52 p-2 shadow">
                                <li><a href="{{url('/user/info-profil')}}" class="text-black">Info Profil</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
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
                                        <a
                                            class="inline-flex items-center justify-center p-2 hover:text-[#000000] mt-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <ul tabindex="0"
                                class="menu dropdown-content bg-white rounded-box z-[1] mt-4 w-52 p-2 shadow">
                                <li class="text-center text-black">Notifikasi</li>
                                @if($notifikasi->isEmpty())
                                <p class="mt-2 mb-2 items-center justify-center">Tidak Ada Notifikasi</p>
                                @else
                                @foreach ($notifikasi as $item)
                                    <li>{{ $item->deskripsi }} ({{ $item->created_at }})</li>
                                @endforeach
                                @endif
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <!-- Konten halaman lainnya -->
            <!-- ISI KONTEN TAMBAHAN DAPAT DILETAKKAN DI SINI -->
            <div class="w-5/6 hidden" id="DivEdit"><!-- Edit Porfile -->
                <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                    <div class="card text-primary-content">
                        <div class="card-body">
                            <label for="chooseAvatar">
                                <div class="avatar flex justify-center items-center">
                                    <div class="w-24 rounded-full">
                                        <img
                                            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                    </div>
                                </div>
                            </label>
                            <input type="file" id="chooseAvatar" name="foto_profil" id="foto_profil" class="hidden" accept=".jpg,.jpeg,.png"
                                accept=".jpg,.jpeg,.png">
                            <div class="flex justify-center"><input type="text" placeholder="{{ \App\models\DataWarga::where('email', Auth::user()->email)->first()->nama }}"
                                name="nama"  value="{{ $dataWarga->nama }}"   class="input w-full max-w-xs bg-[#DEF2F1] text-center" /></div>
                        </div>
                    </div>
                    <table>
                        <tr>
                            <td class="text-green-500">Nomor KK</td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="{{ \App\models\DataWarga::where('email', Auth::user()->email)->first()->no_kk }}"
                                name="no_kk" value="{{ $dataWarga->no_kk }}"    class="input w-full max-w-xs bg-[#DEF2F1]" /></td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td class="text-green-500">NIK</td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="{{ \App\models\DataWarga::where('email', Auth::user()->email)->first()->nik }}"
                                 name="nik" value="{{ $dataWarga->nama }}"   class="input w-full max-w-xs bg-[#DEF2F1]" /></td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td class="text-green-500">Jenis Kelamin</td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="{{ \App\models\DataWarga::where('email', Auth::user()->email)->first()->jenis_kelamin }}"
                                name="jenis_kelamin" value="{{ $dataWarga->jenis_kelamin }}"    class="input w-full max-w-xs bg-[#DEF2F1]" /></td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td class="text-green-500">Tanggal Lahir</td>
                        </tr>
                        <tr>
                            <td><input type="date" placeholder="Type here"
                                name="tanggal_lahir" value="{{ $dataWarga->tanggal_lahir }}"    class="input input-bordered w-full max-w-xs bg-[#DEF2F1]" /></td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td class="text-green-500">Email</td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="{{ \App\models\DataWarga::where('email', Auth::user()->email)->first()->email }}"
                                name="email" value="{{ $dataWarga->email }}"   class="input w-full max-w-xs bg-[#DEF2F1]" /></td>
                        </tr>
                    </table>
                    <div class="card-actions justify-end mb-8">
                        <button class="btn btn-secondary text-white" type="reset" onclick="window.history.back();">Batal</button>
                        <button class="btn btn-accent text-white" type="submit">Simpan</button>
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
                <li><a href="{{url('/user/surat-pengantar')}}" id="showSurat" onclick="showSurat()">Surat pengantar</a></li>
                <li><a href="{{url('/user/kas-warga')}}">Kas warga</a></li>
                <li><a href="{{url('/user/wajib-lapors')}}">Wajib lapor</a></li>
            </ul>
        </div>
    </div>

    <script>
        // Mengubah ikon burger menjadi minus saat sidebar terbuka
        const drawerCheckbox = document.getElementById('my-drawer-2');
        const toggleButton = document.getElementById('toggleButton');

        drawerCheckbox.addEventListener('change', function() {
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
            document.getElementById("DivEdit").style.display = "block";
    </script>
</x-app-layout>
