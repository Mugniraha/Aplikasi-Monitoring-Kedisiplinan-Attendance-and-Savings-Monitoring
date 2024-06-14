@extends('layoutadmin.index')
@section('konten')

    <div id="content" class="sm:ml-64 bg-slate-100">
        <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
            <img class="mr-10" src="{{ asset('images/notification.png') }}" alt="">
        </div>
        <label class="btn btn-primary" for="modal-2">Open Modal</label>

        <input class="modal-state" id="modal-2" type="checkbox" />
        <div class="modal w-screen">
            <label class="modal-overlay" for="modal-2"></label>

            <div class="bg-white rounded-lg shadow-xl max-w-md w-full p-6">
                <!-- Modal Header -->
                <div class="flex justify-between items-center border-b pb-3 mb-3">

                    <button class="text-gray-400 hover:text-gray-500" type="button" for="modal-2">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="bg-white-200 h-48 flex items-center justify-center rounded">
                    <h2 class="text-xl">Modal title 1</h2>
                    <span> Apakah anda ingin keluar dari situs ini</span>

                    <div class="flex gap-3">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-error btn-block" type="submit">Iya</button>
                        </form>

                        <button class="btn btn-block" type="button"
                            onclick="document.getElementById('modal-2').checked = false;">Tidak</button>
                    </div>
                </div>
            </div>
        </div>


        </body>

        </html>
    </div>
