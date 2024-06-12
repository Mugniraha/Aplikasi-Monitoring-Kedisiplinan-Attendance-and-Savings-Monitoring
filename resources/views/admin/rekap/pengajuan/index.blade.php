@extends('layoutadmin.index')
@section('konten')

<div id="content" class="sm:ml-64 bg-slate-100">
    <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
        <img class="mr-10" src="{{asset('images/notification.png')}}" alt="">
    </div>
    <div class="ml-4 mt-4 p-3 rounded-l-md bg-teal-550">
        <span class="text-white font-bold">PENGAJUAN</span>
    </div>

    
    <body class="bg-gray-100">
        <div class="container mx-auto p-4">
            <div class="flex justify-between items-center mb-4">
                <select class="p-2 border rounded">
                    <option>Kelas 1 (satu)</option>
                    <option>Kelas 2 (dua)</option>
                    <option>Kelas 3 (tiga)</option>
                    <option>Kelas 4 (empat)</option>
                    <option>Kelas 5 (lima)</option>
                    <option>Kelas 6 (enam)</option>
                </select>
                <input type="text" placeholder="Search" class="p-2 border rounded">
            </div>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">No</th>
                        <th class="py-2 px-4 border-b">Nama Lengkap</th>
                        <th class="py-2 px-4 border-b">Nisn</th>
                        <th class="py-2 px-4 border-b">Deskripsi</th>
                        <th class="py-2 px-4 border-b">Bukti</th>
                        <th class="py-2 px-4 border-b">Aksi</th>
                        <th class="py-2 px-4 border-b">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">1.</td>
                        <td class="py-2 px-4 border-b">Andini Aprilian</td>
                        <td class="py-2 px-4 border-b">2203034</td>
                        <td class="py-2 px-4 border-b">Kesalahan Pada Nama Lengkap</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <label type="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" for="modal-2">
                                Bukti
                            </label>
                        </td>                        
                        <td class="py-2 px-4 border-b">
                            <button class="bg-green-500 text-white px-2 py-1 rounded">Terima</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded ml-2">Tolak</button>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <label type="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" for="modal-2">
                                detail
                            </label>
                        </td>
                    
                    </tr>

                    <tr>
                        <td class="py-2 px-4 border-b">2.</td>
                        <td class="py-2 px-4 border-b">Amanda</td>
                        <td class="py-2 px-4 border-b">2203034</td>
                        <td class="py-2 px-4 border-b">Kesalahan Pada Nama Lengkap</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <label type="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" for="modal-2">
                                Bukti
                            </label>
                        </td>                        
                        <td class="py-2 px-4 border-b">
                            <button class="bg-green-500 text-white px-2 py-1 rounded">Terima</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded ml-2">Tolak</button>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <label type="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" for="modal-2">
                                detail
                            </label>
                        </td>
                    </tr>
                    <!-- Repeat similar <tr> blocks for other rows -->
                </tbody>
            </table>
        </div>
    </body>   
</div>

<label class="btn btn-primary" for="modal-2">Open Modal</label>

<input class="modal-state" id="modal-2" type="checkbox" />
<div class="modal w-screen">
	<label class="modal-overlay" for="modal-2"></label>

        <div class="bg-white rounded-lg shadow-xl max-w-md w-full p-6">
            <!-- Modal Header -->
            <div class="flex justify-between items-center border-b pb-3 mb-3">
                <h3 class="text-lg font-medium text-gray-900">Foto Bukti</h3>
                <button class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Close</span>
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="p-5">
                <!-- Modal Content -->
                <div class="bg-teal-100 h-auto items-center rounded mb-5 flex-row">
                    <!-- Placeholder for image -->
                    {{-- <p class="text-gray-500">Nama : Andini Aprilian</p>
                    <p class="text-gray-500">Nama : Andini Aprilian</p>
                    <p class="text-gray-500">Nama : Andini Aprilian</p> --}}
                    <label class="text-gray-500">Nama : Andini Aprilian</label><br>
                    <label class="text-gray-500">Kelas : Dua</label><br>
                    <label class="text-gray-500">NISN : 2289732</label><br>
                    <label class="text-gray-500">Deskripsi : Kesalahan pada gatau ya dicek ja</label>
                

                </div>
                <div class="bg-gray-200 h-48 flex items-center justify-center rounded">
                    <!-- Placeholder for image -->
                    <span class="text-gray-500">Image placeholder</span>
                </div>
            </div>

        </div>
	</div>
</div>


