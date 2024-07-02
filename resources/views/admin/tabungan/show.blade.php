@extends('layoutadmin.index')
@section('konten')

<div class="container mx-auto px-4">
    <div class="max-w-lg mx-auto my-10 bg-white p-8 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold text-gray-800">Detail Tabungan</h2>
        <div class="mt-4">
            <label for="id_siswa" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
            <p class="mt-1">{{ $tabungans->profile_siswa->nama_siswa }}</p>
        </div>
        {{-- <div class="mt-4">
            <label for="id_admin" class="block text-sm font-medium text-gray-700">Nama Admin</label>
            <p class="mt-1">{{ $tabungans->admin->nama }}</p>
        </div> --}}
        <div class="mt-4">
            <label for="nominal" class="block text-sm font-medium text-gray-700">Nominal</label>
            <p class="mt-1">{{ $tabungans->nominal }}</p>
        </div>
        {{-- <div class="mt-4">
            <label for="saldo" class="block text-sm font-medium text-gray-700">Saldo</label>
            <p class="mt-1">{{ $tabungans->saldo }}</p>
        </div> --}}
        <div class="mt-4">
            <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
            <p class="mt-1">{{ $tabungans->updated_at }}</p>
        </div>
    </div>
</div>

@endsection
