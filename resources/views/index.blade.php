<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
    <style>
        #sidebar{

        }
    </style>
</head>
<body>
    <button data-drawer-target="sidebar" data-drawer-toggle="sidebar" aria-controls="sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>
    <aside id="sidebar" class="fixed top-0 left-0 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0">
        <div class="h-14 bg-teal-450 text-center text-white p-3">
            <span class="font-bold">Vigilant </span>Parent
        </div>
        <div class="h-full px-3 py-4 overflow-y-auto bg-indigo-950 text-white">
            <div class="flex justify-center mt-3">
                <img src="{{asset('images/logo.png')}}" width="40%" alt="SDN 1 PENGANJANG">
            </div>
            <span class="flex justify-center font-semibold">UPTD SDN 1 PENGANJANG</span>
            <ul class="mt-8 font-normal">
                <li>
                    <a href="#" class="flex items-center p-2 text-white  dark:text-green-200 hover:bg-indigo-900 group focus:border-l-4 focus:border-blue-400">
                        <img  src="{{asset('images/home.png')}}" width="10%" alt="">
                        <span class="ms-3">HOME</span>
                    </a>
                </li>
                <li>
                    <button data-collapse-toggle="dropdown1" type="button" id="dropdownButton" class="flex items-center w-full p-2 rounded-lg dark:text-white hover:bg-indigo-900 group" aria-controls="dropdown1" >
                        <img src="{{asset('images/home.png')}}" width="10%" alt="">
                        <span class="ms-3">REKAP SISWA</span>
                        <svg class="w-3 h-3 ms-11" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <ul id="dropdown1" class="dropdown-menu hidden opacity-0 transform scale-95 py-2 space-y-2 w-full transition duration-300 ease-out">
                        <li>
                            <a href="" class="flex ml-12 group">Biodata</a>
                        </li>
                        <li>
                            <a href="" class="flex ml-12 group">Pengajuan</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <button data-collapse-toggle="dropdown2" type="button" id="dropdownButton" class="flex items-center w-full p-2 rounded-lg dark:text-white hover:bg-indigo-900 group" aria-controls="dropdown1" >
                        <img src="{{asset('images/home.png')}}" width="10%" alt="">
                        <span class="ms-3">TABUNGAN</span>
                        <svg class="w-3 h-3 ms-14" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <ul id="dropdown2" class="dropdown-menu hidden opacity-0 transform scale-95 py-2 space-y-2 w-full transition duration-300 ease-out">
                        <li>
                            <a href="" class="flex ml-12 group">Data Siswa</a>
                        </li>
                        <li>
                            <a href="" class="flex ml-12 group">Pengajuan Kesalahan</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-green-200 hover:bg-indigo-900 group">
                        <img  src="{{asset('images/home.png')}}" width="10%" alt="">
                        <span class="ms-3">PENGUMUMAN</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-green-200 hover:bg-indigo-900 group">
                        <img  src="{{asset('images/home.png')}}" width="10%" alt="">
                        <span class="ms-3">SETTING AKUN</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-green-200 hover:bg-indigo-900 group">
                        <img  src="{{asset('images/home.png')}}" width="10%" alt="">
                        <span class="ms-3">LOGOUT</span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>

    <div class="sm:ml-64 bg-slate-100">
        <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
            <img class="mr-10" src="{{asset('images/home.png')}}" alt="">
        </div>

        <div class="ml-4 mt-4 p-3 rounded-l-md bg-teal-550">
            <span class="text-white font-bold">DASHBOARD</span>
        </div>

        <div class="w-full p-5 from-neutral-500">
            <img class="w-full" src="{{asset('images/dash.png')}}" alt="">
        </div>
        <div class="grid grid-cols-3 gap-4 p-5 ms-10">
            <div class= "rounded-lg shadow-lg flex bg-white">
                <img class="p-2 object-contain w-full h-40" src="{{asset('images/note.png')}}" alt="">
                <a href="{{url('home')}}"></a>
                <div class="p-5 w-full flex items-center hover:bg-gray-100">
                    <span class="font-semibold text-xl">Dashboard</span>
                </div>
            </div>
            <div class= "rounded-lg shadow-lg flex bg-white">
                <img class="p-2 object-contain w-full h-40" src="{{asset('images/note.png')}}" alt="">
                <div class="p-5 w-full flex items-center hover:bg-gray-100">
                    <span class="font-semibold text-xl">Dashboard</span>
                </div>
            </div>
            <div class= "rounded-lg shadow-lg flex bg-white">
                <img class="p-2 object-contain w-full h-40" src="{{asset('images/note.png')}}" alt="">
                <div class="p-5 w-full flex items-center hover:bg-gray-100">
                    <span class="font-semibold text-xl">Dashboard</span>
                </div>
            </div>
            <div class= "rounded-lg shadow-lg flex flex-row w-full bg-white">
                <img class="p-2 object-contain w-full h-40" src="{{asset('images/logo.png')}}" alt="">
                <div class="p-5 w-full flex flex-row items-center hover:bg-gray-100 hover:text-gray-600">
                    <span class="font-semibold text-xl ">Dashboard</span>
                </div>
            </div>
        </div>

    </div>

    <script>
        document.querySelectorAll('[data-collapse-toggle]').forEach(button=>{
            button.addEventListener('click',function(){
                const dropdownId =this.getAttribute('data-collapse-toggle');
                const dropdownMenu = document.getElementById(dropdownId);

                if (dropdownMenu.classList.contains('hidden')){
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.classList.add('hidden','opacity-0','scale-95');
                    });
                    dropdownMenu.classList.remove('hidden');
                    setTimeout(()=>{
                        dropdownMenu.classList.remove('opacity-0','scale-95');
                    }, 10)
                } else {
                    dropdownMenu.classList.add('opacity-0','scale-95');
                    setTimeout(()=>{
                        dropdownMenu.classList.add('hidden');
                    },300)
                }
            });
        });
    </script>
    <script src="js/app.js"></script>
</body>
</html>
