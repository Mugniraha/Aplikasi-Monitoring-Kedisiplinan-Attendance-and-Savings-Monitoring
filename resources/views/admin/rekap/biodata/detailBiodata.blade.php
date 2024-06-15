@extends('layoutadmin.index')
@section('konten')

    <div id="content" class="sm:ml-64 bg-slate-100">
        <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
            <label for="modal-2"><img class="mr-10 w-9" src="{{ asset('images/notification.png') }}" alt=""></label>
        </div>

        <div class="ml-4 mt-4 p-3 rounded-l-md bg-teal-550">
            <span class="text-white font-bold">DETAIL BIODATA SISWA</span>
        </div>


        <div class="bg-white p-8 rounded-lg shadow-md border border-gray-200 w-full max-w-4xl mx-auto mt-5">
            <form class="space-y-6" action="" >
                <div class="">
                    <img class="rounded-md object-cover w-36 h-36" src="{{ asset('/storage/images/' . ($siswa->foto ?? '')) }}" alt="">
                </div>
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
                    <input type="text" id="nama" name="nama_siswa" value="{{ $siswa->nama_siswa ?? '' }}" placeholder="data belum diisi"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
                </div>
                <div>
                    <label for="nis" class="block text-sm font-medium text-gray-700">NIS</label>
                    <input type="text" id="nis" name="nis" value="{{ $siswa->nis ?? '' }}" placeholder="data belum diisi"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
                </div>
                <div>
                    <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                    <input type="text" id="nisn" name="nisn" value="{{  $siswa->nisn ?? '' }}" placeholder="data belum diisi"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
                </div>
                <div>
                    <label for="tgl_lahir" class="block text-sm font-medium text-gray-700">NISN</label>
                    <input type="text" id="tgl_lahir" name="tgl_lahir" value="{{  $siswa->tgl_lahir ?? '' }}" placeholder="data belum diisi"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
                </div>
                <div>
                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">NISN</label>
                    <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="{{  $siswa->jenis_kelamin ?? '' }}" placeholder="data belum diisi"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="text" id="email" name="email" value="{{  $siswa->email ?? '' }}" placeholder="data belum diisi"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
                </div>
                <div>
                    <label for="orangtua" class="block text-sm font-medium text-gray-700">Orang Tua</label>
                    <input type="text" id="orangtua" name="orangtua" value=" {{ $siswa->orangtua ?? '' }}" placeholder="data belum diisi"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
                </div>
                <div>
                    <label for="no_telpon" class="block text-sm font-medium text-gray-700">No. Telepon</label>
                    <input type="text" id="no_telpon" name="no_telpon" value="{{ $siswa->no_telpon ?? '' }}" placeholder="data belum diisi"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
                </div>
                <div class="flex justify-end">
                    <a href="{{  route('editBiodata', $siswa->id_siswa) }}"
                        class="py-2 px-4 bg-teal-500 text-white rounded shadow-sm hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Edit Biodata</a>
                </div>
            </form>
        </div>
    </div>
