@extends('layoutadmin.index')
@section('konten')


    <div id="content" class="sm:ml-64 bg-gray-100">
        <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
            <img class="mr-10" src="{{ asset('images/notification.png') }}" alt="">
        </div>
        <div class="ml-4 mt-4 p-3 rounded-l-md bg-teal-550">
            <span class="text-white font-bold">BIODATA</span>
        </div>

        <div class="bg-white shadow-smml-4 m-5 rounded-md p-5">
            <div class="mb-10 mt-5">
                <select class="select" id="select-kelas">
                    <option value="">Pilih Kelas</option>
                    @foreach ($angkatan as $tahun => $siswas)
                        <option value="{{ $tahun }}">Kelas {{  0 + (date('Y') - $tahun) }}</option>
                    @endforeach
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
            <div id="grid-siswa" class="grid grid-cols-5 gap-4" >
                @foreach ($siswa as $datasiswa)
                <a href="{{ url('biodataLengkap/' . $datasiswa->id_siswa) }}" class=" bg-white p-5 w-48 rounded-2xl border-2 border-gray-300 shadow-xl">
                    <div class="flex justify-items-center ml-9">
                        <img class="object-cover flex h-20 w-20 rounded-full" src="{{ asset('./storage/images/' . ($datasiswa->foto ?? '')) }}"
                            alt="">
                    </div>
                    <div class="mt-5 text-center">
                        <ul>
                            <li class="font font-light">{{  $datasiswa->nama_siswa }}</li>
                            <li class="font font-light">{{ $datasiswa->nis }}</li>
                            <li class="font font-light">{{ $datasiswa->nisn }}</li>
                            <li class="angkatan" hidden>{{ $datasiswa->angkatan }}</li>
                        </ul>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        document.getElementById('select-kelas').addEventListener('change', function() {
            const selectedClass = this.value;
            const siswaItems = document.querySelectorAll('#grid-siswa a');

            siswaItems.forEach(item => {
                const siswaAngkatan = item.querySelector('.angkatan').textContent;
                if (selectedClass === '' || siswaAngkatan === selectedClass) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>
