@extends('layoutadmin.index')
@section('konten')

<div id="content" class="sm:ml-64 bg-gray-100">
    <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
        <img class="mr-10" src="{{asset('images/notification.png')}}" alt="">
    </div>
    <div class="ml-4 mt-4 p-3 rounded-l-md bg-teal-550">
        <span class="text-white font-bold">BIODATA</span>
    </div>
    <div class="bg-white shadow-smml-4 m-5 rounded-md p-5">
        <div class="mb-10 mt-5">
            <select class="select">
                <option>Kelas 1</option>
                <option>Kelas 2</option>
                <option>Kelas 3</option>
                <option>Kelas 4</option>
                <option>Kelas 5</option>
                <option>Kelas 6</option>
            </select>
        </div>
        <div class="grid grid-cols-5 gap-4" >
            <a href="{{'biodataLengkap'}}" class=" bg-white p-5 w-48 rounded-2xl border-2 border-gray-300 shadow-xl">
                <div class="flex justify-items-center ml-9">
                    <img class="object-cover flex h-20 w-20 rounded-full" src="{{asset('images/student.jpeg')}}" alt="">
                </div>
                <div class="mt-5 text-center">
                    <ul>
                        <li class="font font-light">Mohamad Mughni R</li>
                        <li class="font font-light">2203049</li>
                        <li class="font font-light">18</li>
                    </ul>
                </div>
            </a>
        </div>
    </div>
</div>
