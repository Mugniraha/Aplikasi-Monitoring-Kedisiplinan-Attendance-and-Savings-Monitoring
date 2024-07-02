@extends('layoutadmin.index')
@section('konten')


<div id="content" class="sm:ml-64 bg-slate-100">
    <div class="p-2 h-14 flex justify-end" style="background-color: rgb(58, 158, 157, 0.6);">
        <img class="mr-10" src="{{asset('images/notification.png')}}" alt="">
    </div>
    <div class="ml-4 mt-4 p-3 rounded-l-md bg-teal-550">
        <span class="text-white font-bold">TABUNGAN</span>
    </div>

    <div class="p-8">
        <a href="{{ route('tabungan.create') }}" class="absolute top-32 right-4 bg-green-500 text-white rounded-full p-3 shadow-md">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
        </a>


        <div class="w-40">
            <select name="kelas" id="kelas" class="w-full p-2 border border-gray-300 rounded-lg">
                <option value="">Pilih Kelas</option>
                <option value="1">Kelas 1</option>
                <option value="2">Kelas 2</option>
                <option value="3">Kelas 3</option>
                <option value="4">Kelas 4</option>
                <option value="5">Kelas 5</option>
                <option value="6">Kelas 6</option>
            </select>
        </div>


        <!-- Dropdown Menus -->
        <div class="flex justify-end mb-4 mt-12">
            <div class="mr-4">
                <label for="month" class="block text-sm font-medium text-gray-700">Bulan</label>
                <select id="month" name="month" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>Januari</option>
                    <option>Februari</option>
                    <option>Maret</option>
                    <option>April</option>
                    <option>Mei</option>
                    <option>Juni</option>
                    <option>Juli</option>
                    <option>Agustus</option>
                    <option>September</option>
                    <option>Oktober</option>
                    <option>November</option>
                    <option>Desember</option>
                </select>
            </div>
            <div>
                <label for="date" class="block text-sm font-medium text-gray-700">Tanggal</label>
                <select id="date" name="date" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                </select>
            </div>
        </div>


        <!-- Table -->
        <div class="w-full overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NISN</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pemasukan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pengeluaran</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Detail</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($tabungans as $index => $tabungan)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $tabungan->profile_siswa->nama_siswa }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $tabungan->profile_siswa->nisn }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $tabungan->updated_at }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $tabungan->nominal }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">Berhasil</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $tabungan->nominal }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $tabungan->nominal }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $tabungan->nominal }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('tabungan.show', $tabungan->id_tabungan) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    {{-- <tr>
                        <td class="px-6 py-4 whitespace-nowrap">2</td>
                        <td class="px-6 py-4 whitespace-nowrap">Mardhiyatus Sholihah</td>
                        <td class="px-6 py-4 whitespace-nowrap">283671756</td>
                        <td class="px-6 py-4 whitespace-nowrap">20-10-2023</td>
                        <td class="px-6 py-4 whitespace-nowrap">50000</td>
                        <td class="px-6 py-4 whitespace-nowrap">Berhasil</td>
                        <td class="px-6 py-4 whitespace-nowrap">50000</td>
                        <td class="px-6 py-4 whitespace-nowrap">-</td>
                        <td class="px-6 py-4 whitespace-nowrap">50000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <label type="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" for="modal-2">
                                detail
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">3</td>
                        <td class="px-6 py-4 whitespace-nowrap">Ramadhani</td>
                        <td class="px-6 py-4 whitespace-nowrap">283671756</td>
                        <td class="px-6 py-4 whitespace-nowrap">20-10-2023</td>
                        <td class="px-6 py-4 whitespace-nowrap">50000</td>
                        <td class="px-6 py-4 whitespace-nowrap">Berhasil</td>
                        <td class="px-6 py-4 whitespace-nowrap">50000</td>
                        <td class="px-6 py-4 whitespace-nowrap">-</td>
                        <td class="px-6 py-4 whitespace-nowrap">50000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <label type="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" for="modal-2">
                                detail
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">4</td>
                        <td class="px-6 py-4 whitespace-nowrap">Moh. Mughni Rahadiansyah</td>
                        <td class="px-6 py-4 whitespace-nowrap">283671756</td>
                        <td class="px-6 py-4 whitespace-nowrap">20-10-2023</td>
                        <td class="px-6 py-4 whitespace-nowrap">50000</td>
                        <td class="px-6 py-4 whitespace-nowrap">Berhasil</td>
                        <td class="px-6 py-4 whitespace-nowrap">50000</td>
                        <td class="px-6 py-4 whitespace-nowrap">-</td>
                        <td class="px-6 py-4 whitespace-nowrap">50000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <label type="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" for="modal-2">
                                detail
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">5</td>
                        <td class="px-6 py-4 whitespace-nowrap">Cecilia</td>
                        <td class="px-6 py-4 whitespace-nowrap">283671756</td>
                        <td class="px-6 py-4 whitespace-nowrap">20-10-2023</td>
                        <td class="px-6 py-4 whitespace-nowrap">50000</td>
                        <td class="px-6 py-4 whitespace-nowrap">Berhasil</td>
                        <td class="px-6 py-4 whitespace-nowrap">50000</td>
                        <td class="px-6 py-4 whitespace-nowrap">-</td>
                        <td class="px-6 py-4 whitespace-nowrap">50000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <label type="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" for="modal-2">
                                detail
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">5</td>
                        <td class="px-6 py-4 whitespace-nowrap">Putri Diah Pitaloka</td>
                        <td class="px-6 py-4 whitespace-nowrap">283671756</td>
                        <td class="px-6 py-4 whitespace-nowrap">20-10-2023</td>
                        <td class="px-6 py-4 whitespace-nowrap">50000</td>
                        <td class="px-6 py-4 whitespace-nowrap">Berhasil</td>
                        <td class="px-6 py-4 whitespace-nowrap">50000</td>
                        <td class="px-6 py-4 whitespace-nowrap">-</td>
                        <td class="px-6 py-4 whitespace-nowrap">50000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                detail
                            </button>
                        </td>
                    </tr> --}}
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap">Total</td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap"> :</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $tabungans->sum('saldo') }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    </div>


</div>


<label class="btn btn-primary" for="modal-2">Open Modal</label>

<input class="modal-state" id="modal-2" type="checkbox" />
<div class="modal w-screen">
	<label class="modal-overlay" for="modal-2"></label>

        <div class="bg-white rounded-lg shadow-xl max-w-md w-full p-6">
            <!-- Modal Header -->
            <div class="flex justify-between items-center border-b pb-3 mb-3">
                <h3 class="text-lg font-medium text-gray-900">Foto Bukti</h3>
                <button class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Close</span>
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal Content -->
            <div class="bg-gray-200 h-48 flex items-center justify-center rounded">
                <!-- Placeholder for image -->
                <span class="text-gray-500">Image placeholder</span>
            </div>
        </div>
	</div>
</div>


