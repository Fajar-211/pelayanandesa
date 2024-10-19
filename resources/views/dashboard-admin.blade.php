<x-app-layout>
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-current" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </label>
                            <span class="text-lg lg:text-xl font-semibold ml-10 text-[#2B7A78]">Hallo,
                                </span>
                        </div>

                        <div class="flex items-center">
                            <div class="dropdown dropdown-end"> <!-- Removed margin -->
                                <div tabindex="0" role="button" class="btn btn-ghost rounded-btn">
                                    <div class="avatar">
                                        <div class="w-12 rounded-full">
                                            <a
                                                class="inline-flex items-center justify-center p-2 hover:text-[#000000] mt-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <ul tabindex="0"
                                    class="menu dropdown-content bg-white rounded-box z-[1] mt-4 w-52 p-2 shadow">
                                    <li><a class="text-black" href="{{url('/admin/info-profile')}}">Info Profil</a></li>
                                    @csrf
                                    <li><a class="text-red-600">Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main content -->
                <div class="flex-1  bg-[#DEF2F1] overflow-y=auto">
                    <div class="bg-[#DEF2F1] flex justify-center w-full ">
                        <div class="w-5/6 mt-10" id="DivSurat"><!-- Surat Pengantar -->
                            <div class="flex items-center space-x-2">
                                <span
                                    class="inline-flex items-center justify-center px-4 py-3 text-black bg-white rounded-md">Permintaan</span>
                                <select class="select join-item w-30">
                                    <option disabled selected>Filter</option>
                                    <option>ops 1</option>
                                    <option>ops 2</option>
                                    <option>ops 3</option>
                                </select>
                            </div>
                            <br>
                            @foreach ($SuratPengantar as $surat)
                            <div tabindex="0" class="collapse collapse-arrow border-base-300 bg-base-200 border mb-2">
                                <div class="collapse-title text-xl font-medium bg-white">{{$surat->nama}}</div>
                                <div class="collapse-content bg-white">
                                    <table>
                                        <tr>
                                            <td>NIK</td>
                                            <td><input type="text" placeholder=""
                                                    class="input w-full max-w-xs bg-white" />{{$surat->nik}}</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor KK</td>
                                            <td><input type="text" placeholder=""
                                                    class="input w-full max-w-xs bg-white" />{{$surat->nokk}}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td><input type="text" placeholder=""
                                                    class="input w-full max-w-xs bg-white" />{{$surat->nama}}</td>
                                        </tr>
                                        <tr>
                                            <td>Keperluan</td>
                                            <td><input type="text" placeholder=""
                                                    class="input w-full max-w-xs bg-white" />{{$surat->keperluan}}</td>
                                        </tr>
                                    </table>
                                    <div class="card-actions justify-end">
                                        <button class="btn text-white btn-accent mt-6 bg-[#0FA4AF]">Terima</button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <br>
                        </div>
                    </div>
                        <div class="w-5/6 mt-10" id="DivWajibLapor"><!-- Wajib Lapor -->
                            <div class="flex items-center space-x-2">
                                <span
                                    class="inline-flex items-center justify-center px-4 py-3 text-black bg-white rounded-md">Laporan</span>
                                <select class="select join-item w-30">
                                    <option disabled selected>Filter</option>
                                    <option>ops 1</option>
                                    <option>ops 2</option>
                                    <option>ops 3</option>
                                </select>
                            </div>
                            <br>
                            @foreach ($WajibLapor as $lapor)
                            <div tabindex="0" class="collapse collapse-arrow border-base-300 bg-base-200 border mb-2">
                                <div class="collapse-title text-xl font-medium bg-white">{{$lapor->nama_tamu}}</div>
                                <div class="collapse-content bg-white">
                                    <table>
                                        <tr>
                                            <td>NIK</td>
                                            <td><input type="text" placeholder=""
                                                    class="input w-full max-w-xs bg-white" /></td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td><input type="text" placeholder=""
                                                    class="input w-full max-w-xs bg-white" /></td>
                                        </tr>
                                        <tr>
                                            <td>Foto</td>
                                            <td><input type="text" placeholder=""
                                                    class="input w-full max-w-xs bg-white" /></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            @endforeach
                            <br>
                        </div>
                            <div class="w-5/6 mt-12" id="DivDataWarga"><!-- Data Warga -->
                                <div class="card text-primary-content bg-white">
                                    <div class="card-body">
                                        <h2 class="card-title text-black">Data Warga</h2>
                                        <form action="{{ route('import.datawarga') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="file" name="file" accept=".xlsx">
                                            <button type="submit" class="btn">Import</button>
                                        </form>
                                        <livewire:data-warga-table />
                                    </div>
                                </div>
                            </div>
                            <div class="w-5/6 mt-12" id="DivPemberitahuan">
                                <div class="card text-primary-content bg-white">
                                    <div class="card-body">
                                        <h2 class="card-title text-black">Kirim Notifikasi</h2>
                                        <form action="{{ route('notif.store') }}" method="post">
                                            @csrf
                                            <table>
                                                <tr>
                                                    <td><label class="text-black" for="deskripsi">Notifikasi</label></td>
                                                    <td><input type="text" id="deskripsi" name="deskripsi" placeholder="notifikasi" class="input text-black w-full max-w-xs bg-white" required /></td>
                                                </tr>
                                            </table>
                                            <div class="card-actions justify-end">
                                                <button type="submit" class="btn btn-accent text-white">Kirim</button></td>
                                            </div>
                                        </form>
                                    </div>
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-gray-700"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </label>
                    </div>
                    <!-- sidebar content  -->
                    <div class="text-center mb-4 flex items-center justify-center">
                        <h1 class="mt-10 mb-6 text-xl font-bold">RT 3 RW 1</h1>
                    </div>
                    <li><a href="{{url('/admin/surat-pengantar')}}" id="showSurat" onclick="showSurat()">Surat pengantar</a></li>
                    <li><a href="{{url('/admin/kas-warga')}}" >Kas warga</a></li>
                    <li><a href="{{url('/admin/wajib-lapor')}}" >Wajib lapor</a></li>
                    <li><a href="{{url('/admin/data-warga')}}">Data Warga</a></li>
                    <li><a href="{{url('/admin/pemberitahuan')}}">Pemberitahuan</a></li>
                    <li><a href="{{ url('/admin/setting') }}">Setting</a></li>
                </ul>
            </div>
        </div>
    
</x-app-layout>
