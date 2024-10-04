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
                        <span class="text-lg lg:text-xl font-semibold ml-10 text-[#2B7A78]">Hallo,</span>
                    </div>

                    <div class="flex items-center">
                        <div class="dropdown dropdown-end"> <!-- Removed margin -->
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
                                <li><a class="text-black" href="{{ url('/admin/info-profil') }}">Info Profil</a></li>
                                <li><a class="text-red-600">Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main content -->
            <div class="flex-1  bg-[#DEF2F1] overflow-hidden">
                <div class="bg-[#DEF2F1] flex justify-center w-full ">
                    <div class="w-5/6 " id="DivInfo"><!-- Info Porfile -->
                        <div class="card text-primary-content">
                            <div class="card-body">
                                <div class="avatar justify-center">
                                    <div class="w-24 rounded-full">
                                        <img
                                            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                    </div>
                                </div>
                                <h2 class="text-center"></h2>
                                <table>
                                    <tr>
                                        <td class="text-green-500">Nomor KK</td>
                                    </tr>
                                    <tr>
                                        <td class="text-stone-400">
                                            example</td>
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
                            <a href="{{ url('/admin/edit-profile') }}" class="btn btn-accent text-white">Edit</a>
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
                <li><a href="{{ url('/admin/surat-pengantar') }}">Surat pengantar</a></li>
                <li><a href="{{ url('/admin/kas-warga') }}">Kas warga</a></li>
                <li><a href="{{ url('/admin/wajib-lapor') }}">Wajib lapor</a></li>
                <li><a href="{{ url('/admin/data-warga') }}">Data Warga</a></li>
                <li><a href="{{ url('/admin/pemberitahuan') }}">Pemberitahuan</a></li>
            </ul>
        </div>
    </div>
</x-app-layout>
