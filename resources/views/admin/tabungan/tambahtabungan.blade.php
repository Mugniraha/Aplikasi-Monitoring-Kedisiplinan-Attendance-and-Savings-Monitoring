@extends('layoutadmin.index')
@section('konten')

<div id="content" class="sm:ml-64 bg-slate-100">
    <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
        <label for="modal-2"><img class="mr-10 w-9" src="{{asset('images/notification.png')}}" alt=""></label>
    </div>

    <input class="modal-state" id="modal-2" type="checkbox" />
    <div class="modal w-screen fixed right-0 top-0">
        <label class="modal-overlay" for="modal-2"></label>
        <div class="modal-content flex flex-col gap-5 max-w-3xl">
            <label for="modal-2" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
            <h2>Modal</h2>
            <div class="px-4 py-2 flex items-center border-b">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m2-4h.01M19 9l-7 7-7-7" />
                </svg>
                <span class="ml-3">Pengajuan Kesalahan Input Biodata</span>
              </div>
              <div class="px-4 py-2 flex items-center border-b">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m2-4h.01M19 9l-7 7-7-7" />
                </svg>
                <span class="ml-3">Pengajuan Pengambilan tabungan</span>
              </div>
              <div class="px-4 py-2 flex items-center border-b">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m2-4h.01M19 9l-7 7-7-7" />
                </svg>
                <span class="ml-3">Pengajuan Kesalahan Input Tabungan</span>
              </div>
              <div class="px-4 py-2 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m2-4h.01M19 9l-7 7-7-7" />
                </svg>
                <span class="ml-3">Pengajuan Kesalahan Input Tabungan</span>
              </div>
            <div class="flex gap-3">
                <button class="btn btn-error btn-block">Delete</button>
                <button class="btn btn-block">Cancel</button>
            </div>
        </div>
    </div>


    <div class="ml-4 mt-4 p-3 rounded-l-md bg-teal-550">
        <span class="text-white font-bold">PENGAJUAN</span>
    </div>

   
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
