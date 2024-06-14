@extends('layoutadmin.index')
@section('konten')

<div id="content" class="sm:ml-64 bg-slate-100 h-full">
    <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
        <img class="mr-10" src="{{asset('images/notification.png')}}" alt="">
    </div>
    <div class="ml-4 mt-4 p-3 rounded-l-md bg-teal-550">
        <span class="text-white font-bold">BIODATA</span>
    </div>
    <div class="p-5 grid grid-cols-1">
        <div class="bg-white flex justify-center rounded-lg shadow-lg mx-auto mt-10 w-3/6 py-12 ">
            <div class="">
                <img class="rounded-md object-cover w-36 h-36" src="{{ asset('images/student.jpeg') }}" alt="">
            </div>
            <div class="flex mx-10 my-auto text-lg font-light font-sans leading-snug">
                Mohamad Mughni R <br>
                2203049 <br>
                1(satu) <br>
                Laki laki
            </div>
        </div>
    </div>
    <div class="mx-36 grid grid-cols-3 grid-flow-col-dense gap-5 mt-24">
        <a href="{{'hadir'}}" class="bg-white border-2 border-gray-300 rounded-md  shadow-sm flex">
            <div class="rounded-l px-5 h-44 py-12 flex" style="background-color: rgb(120, 202, 237, 0.3);">
                <img class="h-20 my-auto mx-auto object-contain" src="{{asset('images/absensibiodata.png')}}" alt="">
            </div>
            <div class="grid content-center text-xl font-sans font-normal mx-5">
                <span>Absensi</span>
                <span>85%</span>
            </div>
        </a>
        <a href="{{'tabungan'}}" class="bg-white border-2 border-gray-300 rounded-md  shadow-sm flex">
            <div class="rounded-l px-5 h-44 py-12 flex" style="background-color: rgb(159, 248, 168, 0.4);">
                <img class="h-20 my-auto mx-auto object-contain" src="{{asset('images/tabunganbiodata.png')}}" alt="">
            </div>
            <div class="grid content-center text-xl font-sans font-normal mx-5">
                <span>Tabungan</span>
                <span>Rp.2000000</span>
            </div>
        </a>
        <a class="bg-white border-2 border-gray-300 rounded-md  shadow-sm flex">
            <div class="rounded-l px-5 h-44 py-12 flex" style="background-color: rgb(243, 17, 17, 0.4);">
                <img class="h-20 my-auto mx-auto object-contain" src="{{asset('images/profilbiodata.png')}}" alt="">
            </div>
            <div class="grid content-center text-xl font-sans font-normal mx-5">
                <span>Profil Siswa</span>
            </div>
        </a>
    </div>

</div>
