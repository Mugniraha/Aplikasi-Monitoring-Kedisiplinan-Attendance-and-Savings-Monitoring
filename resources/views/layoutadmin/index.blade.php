<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <div class="flex flex-row sm:gap-10">
        <div class="sm:w-full sm:max-w-[18rem]">
            <input type="checkbox" id="sidebar-mobile-fixed" class="sidebar-state" />
            <label for="sidebar-mobile-fixed" class="sidebar-overlay"></label>
            <aside
                class="sidebar sidebar-fixed-left sidebar-mobile bg-indigo-950 w-64 h-full justify-start max-sm:fixed max-sm:-translate-x-full">
                <div class="h-14 bg-teal-450 text-center text-white p-3">
                    <span class="font-bold">Vigilant </span>Parent
                </div>
                <div class=" text-white">
                    <div class="flex justify-center mt-3">
                        <img src="{{ asset('images/logo.png') }}" width="40%" alt="SDN 1 PENGANJANG">
                    </div>
                    <span class="flex justify-center font-semibold">UPTD SDN 1 PENGANJANG</span>
                    <section class="sidebar-content w-64">
                        <nav class="menu rounded-md">
                            <section class="menu-section px-4">
                                <ul class="menu-items">
                                    <li
                                        class="menu-item hover:bg-indigo-900 text-white focus:border-l-4 focus:border-blue-400 rounded-lg">
                                        <img src="{{ asset('images/home.png') }}" class="h-6" alt="">
                                        <a class="text-white text-lg dark:text-green-200 hover:bg-indigo-900 group w-full ml-3 font-light"
                                            href="{{ 'home' }}">Home</a>
                                    </li>

                                    <li class="text-white rounded-lg dark:text-green-200 ">
                                        <input type="checkbox" id="menu-1" class="menu-toggle" />
                                        <label
                                            class="text-white menu-item justify-between hover:bg-indigo-900 group focus:border-l-4 focus:border-blue-400 rounded-lg"
                                            for="menu-1">
                                            <div class="flex gap-2">
                                                <img src="{{ asset('images/group.png') }}" class="h-6"
                                                    alt="">
                                                <span class="text-white ml-3 text-lg font-light">Rekap Siswa</span>
                                            </div>
                                            <span class="menu-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </label>
                                        <div class="menu-item-collapse">
                                            <div class="min-h-0">
                                                <div class="">
                                                    <a class="ml-9 menu-item text-white hover:text-base hover:bg-indigo-950"
                                                        href="{{ route('rekap.index') }}">Biodata Siswa</a>
                                                </div>
                                                <div>
                                                    <a class="ml-9 menu-item text-white hover:text-base hover:bg-indigo-950"
                                                        href="{{ 'pengajuan' }}">Pengajuan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="text-white rounded-lg dark:text-green-200 ">
                                        <input type="checkbox" id="menu-2" class="menu-toggle" />
                                        <label
                                            class="text-white menu-item justify-between hover:bg-indigo-900 group focus:border-l-4 focus:border-blue-400 rounded-lg"
                                            for="menu-2">
                                            <div class="flex gap-2">
                                                <img src="{{ asset('images/savings.png') }}" class="h-7"
                                                    alt="">
                                                <span class="text-white ml-3 text-lg font-light">Tabungan</span>
                                            </div>
                                            <span class="menu-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </label>
                                        <div class="menu-item-collapse">
                                            <div class="min-h-0">
                                                <div class="">
                                                    <a class="ml-7 menu-item text-white hover:text-base hover:bg-indigo-950"
                                                        href="{{ route('tabungan.index') }}">Biodata Siswa</a>
                                                </div>
                                                <div>
                                                    <a class="ml-7 menu-item text-white hover:text-base hover:bg-indigo-950"
                                                        href="{{ 'pengajuan' }}">Pengajuan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li
                                        class="menu-item hover:bg-indigo-900 text-white  focus:border-l-4 focus:border-blue-400 rounded-lg">
                                        <img src="{{ asset('images/megaphone.png') }}" class="h-6" alt="">
                                        <a class="text-white dark:text-green-200 hover:bg-indigo-900 group w-full ml-4 text-lg font-light"
                                            href="{{ 'pengumuman' }}">Pengumuman</a>
                                    </li>

                                    <li
                                        class="menu-item hover:bg-indigo-900 text-white  focus:border-l-4 focus:border-blue-400 rounded-lg">
                                        <img src="{{ asset('images/settings.png') }}" class="h-6" alt="">
                                        <a class="text-white dark:text-green-200 hover:bg-indigo-900 group w-full ml-4 text-lg font-light"
                                            href="{{ 'settingakun' }}">Setting Akun</a>
                                    </li>

                                    <li
                                        class="menu-item hover:bg-indigo-900 text-white  focus:border-l-4 focus:border-blue-400 rounded-lg">
                                        <img src="{{ asset('images/logout.png') }}" class="h-6" alt="">
                                        <label for="modal-2">
                                            <a
                                                class="text-white dark:text-green-200 hover:bg-indigo-900 group w-full ml-5 text-lg font-light">Logout</a>
                                        </label>

                                    </li>

                                </ul>
                            </section>
                            <input class="modal-state" id="modal-2" type="checkbox" />
                            <div class="modal w-screen">
                                <label class="modal-overlay" for="modal-2"></label>
                                <div class="bg-white rounded-lg shadow-xl max-w-md w-full p-6">
                                    <!-- Modal Header -->
                                    <div class="flex justify-between items-center border-b pb-3 mb-3">
                                        <button class="text-gray-400 hover:text-gray-500">
                                            <span class="sr-only">Close</span>
                                            <svg class="h-6 w-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="modal-content flex flex-col gap-5">
                                        <h2 class="text-center text-red-700 font-semibold text-xl">Apakah anda ingin
                                            keluar dari situs ini?</h2>
                                    </div>
                                    <div class="bg-white-200 h-75 flex flex-col items-center justify-center rounded">
                                        <div class="flex gap-3">
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-error btn-block" type="submit">Iya</button>
                                            </form>

                                            <button class="btn btn-block" type="button"
                                                onclick="document.getElementById('modal-2').checked = false;">Tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </nav>
                    </section>
            </aside>
        </div>

        <div class="sm:ml-64 bg-slate-500">
            <div class="sm:ml-64">
                @yield('konten')
            </div>
        </div>
    </div>

    {{-- <div id="content" class="sm:ml-64 bg-slate-100">
        @yield('konten')
    </div> --}}
    <script src="js/app.js"></script>
</body>

</html>
