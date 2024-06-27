@extends('layoutadmin.index')
@section('konten')

<div id="content" class="sm:ml-64 bg-slate-100">
    <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
        <img class="mr-10" src="{{asset('images/notification.png')}}" alt="">
    </div>
    <div class="ml-4 mt-4 p-3 rounded-l-md bg-teal-550">
        <span class="text-white font-bold">SETTING AKUN</span>
    </div>

    {{-- <div class="bg-white p-8 rounded-lg shadow-md border border-gray-200 w-full max-w-4xl mx-auto mt-5">
        <form class="space-y-6">
            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700">Nama Sekolah</label>
                <input type="text" id="judul" name="judul" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="foto" class="block text-sm font-medium text-gray-700">Logo Sekolah</label>
                <input type="file" id="foto" name="foto" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700">Alamat Sekolah</label>
                <input type="text" id="judul" name="judul" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="py-2 px-4 bg-teal-500 text-white rounded shadow-sm hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
            </div>
        </form>
    </div> --}}

    @foreach ($settings as $setting)
    <div class="bg-white p-8 rounded-lg shadow-md border border-gray-200 w-full max-w-4xl mx-auto mt-5">
        <form class="space-y-6" action="" >
            <div class="">
                <img class="rounded-md object-cover w-36 h-36" src="{{ asset('./storage/images/' . ($setting->logo_sekolah ?? '')) }}" alt="">
            </div>
            <div>
                <label for="nama_sekolah" class="block text-sm font-medium text-gray-700">Nama Sekolah</label>
                <input type="text" id="nama_sekolah" name="nama_sekolah" value="{{ $setting->nama_sekolah ?? '' }}" placeholder="data belum diisi"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
            </div>
            <div>
                <label for="motto" class="block text-sm font-medium text-gray-700">MOTTO</label>
                <input type="text" id="motto" name="motto" value="{{ $setting->motto ?? '' }}" placeholder="data belum diisi"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
            </div>
            <div>
                <label for="visi" class="block text-sm font-medium text-gray-700">VISI</label>
                <input type="text" id="visi" name="visi" value="{{  $setting->visi ?? '' }}" placeholder="data belum diisi"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
            </div>
            <div>
                <label for="misi" class="block text-sm font-medium text-gray-700">MISI</label>
                <input type="text" id="misi" name="misi" value="{{  $setting->misi ?? '' }}" placeholder="data belum diisi"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
            </div>
            <div>
                <label for="alamat_sekolah" class="block text-sm font-medium text-gray-700">ALAMAT</label>
                <input type="text" id="alamat_sekolah" name="alamat_sekolah" value="{{  $setting->alamat_sekolah ?? '' }}" placeholder="data belum diisi"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text" id="email" name="email" value="{{  $setting->email ?? '' }}" placeholder="data belum diisi"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
            </div>
            <div class="flex justify-end">
                <a href="{{  route('settingakun.edit', $setting->id) }}"
                    class="py-2 px-4 bg-teal-500 text-white rounded shadow-sm hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Edit Akun</a>
            </div>
            {{-- <div class="flex justify-end">
                <a href="{{ url('biodataLengkap/' . $siswa->id_siswa) }}"
                    class="py-2 px-4 bg-blue-500 text-white rounded shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Kembali</a>
            </div> --}}
        </form>
    </div>
    @endforeach
    
</div>

