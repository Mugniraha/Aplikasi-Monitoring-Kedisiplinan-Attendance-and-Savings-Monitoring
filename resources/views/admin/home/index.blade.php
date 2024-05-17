@extends('layoutadmin.index')
@section('konten')

<div class="sm:ml-64">
    <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
        <label for="sidebar-mobile-fixed" style="background-color: rgb(58, 158, 157, 0.6);" class="btn-primary btn sm:hidden mr-52 rounded-lg"><img src="{{asset('images/menu.png')}}" class="h-8 transform scale-x(-1)" alt=""></label>
        <img class="mr-10" src="{{asset('images/notification.png')}}" alt="">
    </div>

    <div class="ml-4 mt-4 p-3 rounded-l-md bg-teal-550">
        <span class="text-white font-bold">DASHBOARD</span>
    </div>
    
    <div class="w-full p-5 from-neutral-500">
        <img class="w-full" src="{{asset('images/dash.png')}}" alt="">
    </div>
    <div class="grid grid-cols-3 gap-4 p-5 ms-10">
        <div class= "rounded-lg shadow-lg flex bg-white">
            <img class="p-2 object-contain w-full h-40" src="{{asset('images/note.png')}}" alt="">
            <div class="p-5 w-full flex items-center hover:bg-gray-100">
                <span class="font-semibold text-xl">Dashboard</span>
            </div>
        </div>
        <div class= "rounded-lg shadow-lg flex bg-white">
            <img class="p-2 object-contain w-full h-40" src="{{asset('images/note.png')}}" alt="">
            <div class="p-5 w-full flex items-center hover:bg-gray-100">
                <span class="font-semibold text-xl">Dashboard</span>
            </div>
        </div>
        <div class= "rounded-lg shadow-lg flex bg-white">
            <img class="p-2 object-contain w-full h-40" src="{{asset('images/note.png')}}" alt="">
            <div class="p-5 w-full flex items-center hover:bg-gray-100">
                <span class="font-semibold text-xl">Dashboard</span>
            </div>
        </div>
        <div class= "rounded-lg shadow-lg flex flex-row w-full bg-white">
            <img class="p-2 object-contain w-full h-40" src="{{asset('images/logo.png')}}" alt="">
            <div class="p-5 w-full flex flex-row items-center hover:bg-gray-100 hover:text-gray-600">
                <span class="font-semibold text-xl ">Dashboard</span>
            </div>
        </div>
    </div>
</div>

