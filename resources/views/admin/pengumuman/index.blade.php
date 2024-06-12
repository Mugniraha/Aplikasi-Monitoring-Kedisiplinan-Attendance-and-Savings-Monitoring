@extends('layoutadmin.index')
@section('konten')

<div id="content" class="sm:ml-64 ">
    <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
        <img class="mr-10" src="{{asset('images/notification.png')}}" alt="">
    </div>
    <div class="ml-4 mt-4 p-3 rounded-l-md bg-teal-550">
        <span class="text-white font-bold">PENGUMUMAN</span>
    </div>

    <div class="p-8">
        <button class="absolute top-32 right-4 bg-green-500 text-white rounded-full p-3 shadow-md">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
        </button>

    <div class="container mx-auto mt-4 ">
        <!-- Main Card -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-6 relative h-72 w-2/3 mx-auto  ">
            <div class="flex">
                <div class="w-64"> 
                    <img src="{{asset("images/logo.png")}}" alt="Kartono" class="rounded-lg">
                </div>
                <div class="ml-6">
                    <h2 class="text-xl font-bold mb-2">Memperingati Hari R A Kartini 2024</h2>
                    <p class="text-gray-700 mb-4">Selamat memperingati hari kartini semoga kita terinspirasi untuk mengangkat martabat dan kesetaraan gender</p>
                    <p class="text-gray-700">Pada Tanggal 21 April 2024, anak-anak menggunakan baju adat</p>
                </div>
            </div>
            
        </div>
    
        <!-- Smaller Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md relative h-60">
                <img src="{{asset("images/logo.png")}}" alt="Kartini" class="w-11 rounded-lg mb-4">
                <h3 class="text-lg font-bold mb-2">Memperingati Hari R A Kartini</h3>
                <p class="text-gray-700">pada tanggal 21 April 2024</p>
                <div class="absolute top-4 right-4 space-x-2">
                    <button class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-700">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="bg-red-500 text-white p-2 rounded-full hover:bg-red-700">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
    
            <div class="bg-white p-6 rounded-lg shadow-md relative h-60">
                <img src="{{asset("images/logo.png")}}" alt="Maulid Nabi" class="w-11 rounded-lg mb-4">
                <h3 class="text-lg font-bold mb-2">Memperingati Maulid Nabi 1444 hijriah</h3>
                <p class="text-gray-700">pada tanggal 20 Maret 2024</p>
                <div class="absolute top-4 right-4 space-x-2">
                    <button class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-700">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="bg-red-500 text-white p-2 rounded-full hover:bg-red-700">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
    
            <div class="bg-white p-6 rounded-lg shadow-md relative h-60">
                <img src="{{asset("images/logo.png")}}" alt="Idul Fitri" class="w-11 rounded-lg mb-4">
                <h3 class="text-lg font-bold mb-2">Memperingati Hari Idul Fitri 1444 hijriah</h3>
                <p class="text-gray-700">pada tanggal 10 April 2024</p>
                <div class="absolute top-4 right-4 space-x-2">
                    <button class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-700">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="bg-red-500 text-white p-2 rounded-full hover:bg-red-700">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
