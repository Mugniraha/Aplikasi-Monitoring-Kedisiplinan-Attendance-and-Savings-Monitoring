@extends('layoutadmin.index')
@section('konten')

<div id="content" class="sm:ml-64 bg-slate-100">
    <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
        <img class="mr-10" src="{{asset('images/notification.png')}}" alt="">
    </div>
    <div class="ml-4 mt-4 p-3 rounded-l-md bg-teal-550">
        <span class="text-white font-bold">PENGAJUAN</span>
    </div>

    <h1>INI PENGAJUAN</h1>
    <div class="bg-white p-8 rounded-lg shadow-md border border-gray-200 w-full max-w-4xl mx-auto mt-5">
        <form class="space-y-6">
            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
                <input type="text" id="judul" name="judul" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700">NISN</label>
                <input type="text" id="judul" name="judul" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700">Kelas</label>
                <input type="text" id="judul" name="judul" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
    
            <div>
                <label for="foto" class="block text-sm font-medium text-gray-700">Bukti Validasi</label>
                <input type="file" id="foto" name="foto" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
    
            <div class="flex justify-end">
                <button type="submit" class="py-2 px-4 bg-teal-500 text-white rounded shadow-sm hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
            </div>
        </form>
    </div>
</div>
