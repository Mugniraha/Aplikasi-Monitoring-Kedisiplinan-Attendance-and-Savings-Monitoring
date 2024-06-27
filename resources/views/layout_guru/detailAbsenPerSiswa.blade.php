<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-white">
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
            <span class="text-white font-bold">Absensi/Detail Absensi</span>
        </div>
        <div class="flex justify-center">
            <div class="grid grid-cols-1 ml-16 sm:grid-cols-1  md:grid-cols-1 rounded-xl gap-4 mt-10 p-10 bg-teal-700">
                <div class="bg-teal-550 p-5 w-48 rounded-2xl  shadow-xl">
                    <div class="flex justify-center">
                        <img class="object-cover h-20 w-20 rounded-full" src="{{ asset('images/student.jpeg') }}" alt="">
                    </div>
                    <div class="mt-5 text-center">
                        <ul>
                            <li class="font text-white">{{ $siswa->nama_siswa }}</li>
                            <li class="font text-white">{{ $siswa->nis }}</li>
                        </ul>
                    </div>
                </div>

                {{-- <div class="bg-teal-550 p-5 w-48 rounded-2xl  shadow-xl">
                    <div class="mt-5 text-center">
                        <p class="font text-white text-xl">Hadir</p>
                        <p class="font text-white mt-5 text-3xl">{{round($persentaseKehadiran,2)}}%</p>
                    </div>
                </div>

                <div class="bg-teal-550 p-5 w-48 rounded-2xl  shadow-xl">
                    <div class="mt-5 text-center">
                        <p class="font text-white text-xl">Alfa</p>
                        <p class="font text-white mt-5 text-3xl">50%</p>
                    </div>
                </div>

                <div class="bg-teal-550 p-5 w-48 rounded-2xl  shadow-xl">
                    <div class="mt-5 text-center">
                        <p class="font text-white text-xl">Izin</p>
                        <p class="font text-white mt-5 text-3xl">50%</p>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="grid grid-rows-1 justify-center mt-4">
            @php
            $grupAbsensi = $siswa->absensi->groupBy(function($item){
                return $item->tanggal . $item->id_siswa;
            })
        @endphp

        @foreach ($grupAbsensi as $absensi)
            @php
                $checkIn = $absensi->where('keterangan', 'Check in')->first();
                $checkOut = $absensi->where('keterangan', 'Check out')->first();
            @endphp

            <div class="flex items-center space-x-4 mt-4 p-4 bg-teal-600 rounded-lg shadow-xl">
                <div class="flex flex-col items-center justify-center w-24 h-24 bg-white rounded-lg shadow-md">
                    <div class="text-3xl font-bold">{{ \Carbon\Carbon::parse($absensi[0]->tanggal)->format('d') }}</div>
                    <div class="text-lg font-medium">{{ \Carbon\Carbon::parse($absensi[0]->tanggal)->translatedFormat('l') }}</div>
                </div>

                {{-- Check-in section --}}
                <div class="flex items-center space-x-2 bg-white rounded-lg shadow-md p-2">
                    <div class="flex flex-col">
                        @if ($checkIn)
                            <div class="text-xl font-bold">{{ \Carbon\Carbon::parse($checkIn->waktu)->format('H:i') }}</div>
                        @else
                            <div class="text-xl font-bold">
                                @if (\Carbon\Carbon::parse($absensi[0]->waktu)->format('H') < 9)
                                    Check in
                                @else
                                    On going
                                @endif
                            </div>
                        @endif
                        <div class="text-sm text-gray-600">Check-in</div>
                    </div>
                    @if ($checkIn)
                        <label for="modal-cekin-{{ $checkIn->id_absensi }}" class="bg-teal-500 text-white px-3 py-2 rounded-md cursor-pointer">Detail</label>
                    @endif
                </div>

                {{-- Check-out section --}}
                <div class="flex items-center space-x-2 bg-white rounded-lg shadow-md p-2">
                    <div class="flex flex-col">
                        @if ($checkOut)
                            <div class="text-xl font-bold">{{ \Carbon\Carbon::parse($checkOut->waktu)->format('H:i') }}</div>
                        @else
                            <div class="text-xl font-bold">
                                @if (\Carbon\Carbon::parse($absensi[0]->waktu)->format('H') >= 9)
                                    Check out
                                @else
                                    On going
                                @endif
                            </div>
                        @endif
                        <div class="text-sm text-gray-600">Check-out</div>
                    </div>
                    @if ($checkOut)
                        <label for="modal-co-{{ $checkOut->id_absensi }}" class="bg-teal-500 text-white px-3 py-2 rounded-md cursor-pointer">Detail</label>
                    @endif
                </div>

                {{-- Form Izin --}}
                <label for="modal-i" class="flex items-center justify-center bg-teal-500 text-white px-3 py-2 rounded-md shadow-md cursor-pointer">
                    Form Izin
                </label>
            </div>

            {{-- Modal Check-in --}}
            @if ($checkIn)
                <input class="modal-state" id="modal-cekin-{{ $checkIn->id_absensi }}" type="checkbox" />
                <div class="modal">
                    <label class="modal-overlay" for="modal-cekin-{{ $checkIn->id_absensi }}"></label>
                    <div class="modal-content flex flex-col gap-5">
                        <label for="modal-cekin-{{ $checkIn->id_absensi }}" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
                        <h2 class="text-xl">Check in</h2>
                        <img src="{{ asset('storage/uploads/' . $checkIn->bukti_absensi) }}" alt="Bukti Absensi" width="100%">
                    </div>
                </div>
            @endif

            {{-- Modal Check-out --}}
            @if ($checkOut)
                <input class="modal-state" id="modal-co-{{ $checkOut->id_absensi }}" type="checkbox" />
                <div class="modal">
                    <label class="modal-overlay" for="modal-co-{{ $checkOut->id_absensi }}"></label>
                    <div class="modal-content flex flex-col gap-5">
                        <label for="modal-co-{{ $checkOut->id_absensi }}" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
                        <h2 class="text-xl">Check out</h2>
                        <img src="{{ asset('storage/uploads/' . $checkOut->bukti_absensi) }}" alt="Bukti Absensi" width="100%">
                    </div>
                </div>
            @endif
        @endforeach

        </div>
    </div>




    {{-- modal izin --}}
    <input class="modal-state" id="modal-i" type="checkbox" />
    <div class="modal">
        <label class="modal-overlay" for="modal-i"></label>
        <div class="modal-content flex flex-col gap-5">
            <label for="modal-i" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
            <h2 class="text-xl">Modal title 1</h2>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolorum voluptate ratione dicta. Maxime cupiditate, est commodi consectetur earum iure, optio, obcaecati in nulla saepe maiores nobis iste quasi alias!</span>
            <div class="flex gap-3">
                <button class="btn btn-error btn-block">Delete</button>

                <button class="btn btn-block">Cancel</button>
            </div>
        </div>
    </div>

    <script>
        // Example data for demonstration
        const formData = new FormData();
        formData.append('detectedImage', new Blob(['image data'], { type: 'image/jpeg' })); // Replace with actual file object
        formData.append('label', 'nama_siswa');

        // Fetch API call to the upload endpoint
        fetch('/upload', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById('date').textContent = data.tanggal;
                document.getElementById('day').textContent = data.namaHari;
            } else {
                console.error('Error:', data.error);
            }
        })
        .catch(error => console.error('Error:', error));
    </script>
    <script src="js/app.js"></script>

</body>
