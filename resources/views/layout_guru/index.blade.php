<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div id="content" class="">
        <div class="navbar navbar-floating navbar-glass bg-indigo-950">
            <div class="navbar-start">
                <a class=" text-white"><span class="font-bold">Vigilant </span>Parent</a>
            </div>
            <div class="navbar-center text-white">
                <a href="{{'siswaAbsen'}}" class="navbar-item text-white">Home</a>
                <a href="{{'detailAbsen'}}" class="navbar-item text-white">Absensi</a>
                <a href="{{'deteksi'}}" class="navbar-item text-white">Scan</a>
            </div>
            <div class="navbar-end">
                <a href="" class="text-white navbar-item">Profile</a>
            </div>
        </div>

        <div class="mt-32 p-2 rounded-r-md w-48 bg-teal-550">
            <span class="text-white font-bold">Home</span>
        </div>

        <div class="mt-5">
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
                <div class="grid grid-cols-1 ml-14 md:grid-cols-6 gap-4 justify-center">
                    @foreach ($siswa as $datasiswa)
                    <div class="bg-white p-5 w-48 rounded-2xl border-2 border-gray-300 shadow-xl">
                        <div class="flex justify-center">
                            <img class="object-cover h-20 w-20 rounded-full" src="{{ asset('images/student.jpeg') }}" alt="">
                        </div>
                        <div class="mt-5 text-center">
                            <ul>
                                <li class="font font-light">{{ $datasiswa->nama_siswa }}</li>
                                <li class="font font-light">{{ $datasiswa->nis }}</li>
                                <li class="font font-light">{{ $datasiswa->nisn }}</li>
                            </ul>
                        </div>
                        <div class="mt-4 text-center">
                            <a href="{{ route('regist', ['id' => $datasiswa->id_siswa]) }}" class="inline-block p-3 rounded-md bg-teal-550 text-white">
                                Daftarkan Wajah
                            </a>
                        </div>
                    </div>
                @endforeach

                </div>
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>


