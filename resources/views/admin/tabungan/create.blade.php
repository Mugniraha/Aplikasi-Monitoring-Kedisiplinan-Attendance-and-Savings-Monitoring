{{-- @extends('layoutadmin.index')
@section('konten')

    <div id="content" class="sm:ml-64 bg-slate-100">
        <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
            <img class="mr-10" src="{{ asset('images/notification.png') }}" alt="">
        </div>
        <div class="ml-4 mt-4 p-3 rounded-l-md bg-teal-550">
            <span class="text-white font-bold">TAMBAH TABUNGAN</span>
        </div>

        <div class="p-8">
            <form action="{{ route('tabungan.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id_siswa" class="block text-gray-700 text-sm font-bold mb-2">Siswa:</label>
                    <select name="id_siswa" id="id_siswa"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @foreach ($siswas as $siswa)
                            <option value="{{ $siswa->id_siswa }}">{{ $siswa->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="id_user" class="block text-gray-700 text-sm font-bold mb-2">User:</label>
                    <select name="id_user" id="id_user"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="nominal" class="block text-gray-700 text-sm font-bold mb-2">Nominal:</label>
                    <input type="number" name="nominal" id="nominal"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="saldo" class="block text-gray-700 text-sm font-bold mb-2">Saldo:</label>
                    <input type="number" name="saldo" id="saldo"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="tanggal" class="block text-gray-700 text-sm font-bold mb-2">Tanggal:</label>
                    <input type="date" name="tanggal" id="tanggal"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection --}}
@extends('layoutadmin.index')
@section('konten')

<div id="content" class="sm:ml-64 bg-slate-100">
    <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
        <label for="modal-2"><img class="mr-10 w-9" src="{{asset('images/notification.png')}}" alt=""></label>
    </div>

    <div class="p-8">
        <form action="{{ route('tabungan.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="id_siswa" class="block text-gray-700 text-sm font-bold mb-2">Siswa:</label>
                <select name="id_siswa" id="id_siswa"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ($siswas as $siswa)
                        <option value="{{ $siswa->id_siswa }}">{{ $siswa->nama_siswa }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="nominal" class="block text-gray-700 text-sm font-bold mb-2">Nominal:</label>
                <input type="number" name="nominal" id="nominal"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="saldo" class="block text-gray-700 text-sm font-bold mb-2">Saldo:</label>
                <input type="number" name="saldo" id="saldo"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="tanggal" class="block text-gray-700 text-sm font-bold mb-2">Tanggal:</label>
                <input type="date" name="tanggal" id="tanggal"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan
                </button>
            </div>
        </form>

    </div>
</div>
