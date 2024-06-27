<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <style>
        #sidebar{

        }
    </style>
</head>
<body>
    <div id="content" class=" bg-gray-100">
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
                <div class="absolute top-50 right-10 bg-green-500 text-white rounded-full p-3 shadow-md">
                    <a href="{{ 'tambahBiodata' }}">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-5 gap-4 ">
                @foreach ($siswa as $datasiswa)
                <a class=" bg-white p-5 w-48 rounded-2xl border-2 border-gray-300 shadow-xl">
                    <div class="flex justify-items-center ml-9">
                        <img class="object-cover flex h-20 w-20 rounded-full" src="{{ asset('images/student.jpeg') }}"
                            alt="">
                    </div>
                    <div class="mt-5 text-center">
                        <ul>
                            <li class="font font-light">{{  $datasiswa->nama_siswa }}</li>
                            <li class="font font-light">{{ $datasiswa->nis }}</li>
                            <li class="font font-light">{{ $datasiswa->nisn }}</li>
                        </ul>
                    </div>
                        <a href="" class="ml-4 mt-4 p-3 rounded-md bg-teal-500">
                            Daftarkan Wajah
                        </a>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <script src="../../../js/app.js"></script>
</body>


