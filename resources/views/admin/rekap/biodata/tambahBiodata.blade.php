@extends('layoutadmin.index')
@section('konten')

    <div id="content" class="sm:ml-64 bg-slate-100">
        <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
            <label for="modal-2"><img class="mr-10 w-9" src="{{ asset('images/notification.png') }}" alt=""></label>
        </div>

        <div class="ml-4 mt-4 p-3 rounded-l-md bg-teal-550">
            <span class="text-white font-bold">TAMBAH DATA SISWA</span>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-md border border-gray-200 w-full max-w-4xl mx-auto mt-5">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form class="space-y-6" action="{{ route('tambahBiodata.store') }}" method="POST">
                @csrf
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
                    <input type="text" id="nama" name="nama_siswa"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="nis" class="block text-sm font-medium text-gray-700">NIS</label>
                    <input type="text" id="nis" name="nis"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                    <input type="text" id="nisn" name="nisn"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="text" id="email" name="email"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="text" id="password" name="password"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="py-2 px-4 bg-teal-500 text-white rounded shadow-sm hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
                </div>
            </form>
        </div>
    </div>
