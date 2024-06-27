@extends('layoutadmin.index')
@section('konten')

<div id="content" class="sm:ml-64 bg-slate-100">
    <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
        <img class="mr-10" src="{{asset('images/notification.png')}}" alt="">
    </div>
    <div class="ml-4 mt-4 p-3 rounded-l-md bg-teal-550">
        <span class="text-white font-bold">ABSENSI HADIR</span>
    </div>

    <div class="container mx-auto p-4">
        <div class="flex justify-around mb-4">
            <a href="{{'hadir'}}" class="bg-green-200 text-green-800 text-center p-8 rounded-lg shadow-lg w-64 h-32 transition transform hover:-translate-y-1 hover:scale-105 hover:bg-green-300">
                <div class="text-xl font-bold">Hadir</div>
                <div class="text-2xl">85%</div>
            </a>
            <a href="{{'izin'}}" class="bg-yellow-200 text-yellow-800 text-center p-8 rounded-lg shadow-lg w-64 h-32 transition transform hover:-translate-y-1 hover:scale-105 hover:bg-yellow-300">
                <div class="text-xl font-bold">Izin</div>
                <div class="text-2xl">10%</div>
            </a>
            <a href="{{'alfa'}}" class="bg-red-200 text-red-800 text-center p-8 rounded-lg shadow-lg w-64 h-32 transition transform hover:-translate-y-1 hover:scale-105 hover:bg-red-300">
                <div class="text-xl font-bold">Alfa</div>
                <div class="text-2xl">5%</div>
            </a>
        </div>

        <!-- Dropdown Menus -->
        <div class="flex justify-end mb-4 mt-12">
            <div class="mr-4">
                <label for="month" class="block text-sm font-medium text-gray-700">Bulan</label>
                <select id="month" name="month" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>Januari</option>
                    <option>Februari</option>
                    <option>Maret</option>
                    <option>April</option>
                    <option>Mei</option>
                    <option>Juni</option>
                    <option>Juli</option>
                    <option>Agustus</option>
                    <option>September</option>
                    <option>Oktober</option>
                    <option>November</option>
                    <option>Desember</option>
                </select>
            </div>
            <div>
                <label for="date" class="block text-sm font-medium text-gray-700">Tahun</label>
                <select id="date" name="date" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>2024</option>
                    <option>2025</option>
                    <option>2026</option>
                </select>
            </div>
        </div>


        <!-- Table -->
        <div class="w-full overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check In</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check Out</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                @php
                    $grupAbsensi = $siswa->absensi->groupBy(function($item){
                        return $item->tanggal . $item->id_siswa;
                    })
                @endphp
                @foreach ($grupAbsensi as $absensi)
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ \Carbon\Carbon::parse($absensi[0]->tanggal)->format('d-m-Y') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($absensi[0]->keterangan === 'Check in')
                                    <div class="flex flex-col">
                                        {{ \Carbon\Carbon::parse($absensi[0]->waktu)->format('H:i') }} WIB
                                        {{-- <label type="" class="bg-blue-500 w-20 text-center hover:bg-blue-700 text-white py-2 px-4 rounded" for="modal-2-{{$absensi[0]->id_absensi}}">
                                            <span class="text-center">Detail</span>
                                        </label> --}}
                                        <button id="open-modal-{{$absensi[0]->id_absensi}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 w-2/5 rounded" onclick="openModal({{$absensi[0]->id_absensi}})">
                                            Detail
                                        </button>
                                    </div>
                                @else
                                    On going
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if (count($absensi) > 1) {{-- Jika terdapat data Check out --}}
                                    @if ($absensi[1]->keterangan === 'Check out')
                                        <div class="flex flex-col">
                                            {{ \Carbon\Carbon::parse($absensi[1]->waktu)->format('H:i') }} WIB
                                            <button id="open-modal-{{$absensi[1]->id_absensi}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 w-2/5 rounded" onclick="openModal({{$absensi[1]->id_absensi}})">
                                                Detail
                                            </button>
                                            {{-- <label type="" class="bg-blue-500 w-20 hover:bg-blue-700 text-white py-2 text-center px-4 rounded" for="modal-3-{{$absensi[1]->id_absensi}}">
                                                <span class="text-center">Detail</span>
                                            </label> --}}
                                        </div>
                                    @else
                                        <div class="">
                                            On going
                                        </div>
                                    @endif
                                @else
                                    On going
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($absensi[0]->keterangan === 'Check in' && isset($absensi[1]) && $absensi[1]->keterangan === 'Check out')
                                    Berhasil
                                @else
                                    On going
                                @endif
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

{{-- @foreach ($siswa->absensi as $absensi)
<input class="modal-state hidden" id="modal-2-{{$absensi->id_absensi}}" type="checkbox" />
<div class="modal w-screen ">
	<label class="modal-overlay" for="modal-2-{{$absensi->id_absensi}}"></label>
        <div class="bg-white rounded-lg shadow-xl max-w-md w-full p-6">
            <!-- Modal Header -->
            <div class="flex justify-between items-center border-b pb-3 mb-3">
                <h3 class="text-lg font-medium text-gray-900">Foto Bukti</h3>
                <button class="text-gray-400 hover:text-gray-500 cursor-pointer">
                    <span class="sr-only">Close</span>
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class=" h-auto flex items-center justify-center rounded">
                <img src="{{asset('storage/uploads/'. $absensi->bukti_absensi)}}" alt="">
            </div>
        </div>
</div>
@endforeach

@foreach ($siswa->absensi as $absensi)
<input class="modal-state" id="modal-3-{{$absensi->id_absensi}}" type="checkbox" />
<div class="modal w-screen">
	<label class="modal-overlay" for="modal-3-{{$absensi->id_absensi}}"></label>
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
            <div class=" h-56 flex items-center justify-center rounded">
                <img src="{{asset('storage/uploads/'. $absensi->bukti_absensi)}}" alt="">
            </div>
        </div>
</div>
@endforeach --}}


@foreach ($siswa->absensi as $absensi)
    <div id="modal-{{$absensi->id_absensi}}" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg p-8 max-w-md w-full">
            <div class="flex justify-between items-center border-b pb-3 mb-3">
                <h3 class="text-lg font-medium text-gray-900">Modal Title</h3>
                <button class="text-gray-400 hover:text-gray-500" onclick="closeModal({{$absensi->id_absensi}})">
                    <span class="sr-only">Close</span>
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-content">
                <img src="{{asset('storage/uploads/'. $absensi->bukti_absensi)}}" alt="">
            </div>
        </div>
    </div>
@endforeach

@foreach ($siswa->absensi as $absensi)
    <div id="modal-{{$absensi->id_absensi}}" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg p-8 max-w-md w-full">
            <div class="flex justify-between items-center border-b pb-3 mb-3">
                <h3 class="text-lg font-medium text-gray-900">Modal Title</h3>
                <button class="text-gray-400 hover:text-gray-500" onclick="closeModal({{$absensi->id_absensi}})">
                    <span class="sr-only">Close</span>
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-content">
                <img src="{{asset('storage/uploads/'. $absensi->bukti_absensi)}}" alt="">
            </div>
        </div>
    </div>
@endforeach


<script>
    // Ambil elemen-elemen yang diperlukan
    const openModalButton = document.getElementById('open-modal-{{$absensi->id_absensi}}');
    const closeModalButton = document.getElementById('close-modal');
    const modal = document.getElementById('modal-{{$absensi->id_absensi}}');

    // Tambahkan event listener untuk tombol open modal
    openModalButton.addEventListener('click', function() {
    modal.classList.remove('hidden'); // Hapus kelas 'hidden' untuk menampilkan modal
    });

    // Tambahkan event listener untuk tombol close modal
    closeModalButton.addEventListener('click', function() {
    modal.classList.add('hidden'); // Tambahkan kembali kelas 'hidden' untuk menyembunyikan modal
    });

        function openModal(id) {
        const modal = document.getElementById('modal-' + id);
        modal.classList.remove('hidden');
    }

    // Function untuk menutup modal
    function closeModal(id) {
        const modal = document.getElementById('modal-' + id);
        modal.classList.add('hidden');
    }

</script>
