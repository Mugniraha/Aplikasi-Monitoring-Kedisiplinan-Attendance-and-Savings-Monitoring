<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use App\Models\Profile_siswa;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class tabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabungans = Tabungan::with(['profile_siswa', 'user'])->get();

        // Menghitung saldo untuk setiap tabungan
        foreach ($tabungans as $tabungan) {
            $saldo = DB::table('tabungan')
                ->where('id_siswa', $tabungan->id_siswa)
                ->sum('nominal');
            // $tabungan->saldo = $saldo;
        }
        return view('admin.tabungan.index', compact('tabungans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswas = Profile_siswa::all();
        $users = User::all();
        return view('admin.tabungan.create', compact('siswas', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'id_siswa' => 'required|numeric',
            'nominal' => 'required|numeric',
            // 'saldo' => 'required|numeric',
            // 'tanggal' => 'required|date',
        ]);

        $id_admin = Auth::id();
        echo $id_admin;
        $tabunganStore = Tabungan::create([
            'id_admin' => $id_admin,
            'id_siswa' => $request->id_siswa,
            'nominal' => $request->nominal,
        ]);
        
        if ($tabunganStore) {
            echo 'Berhasil';
            return redirect()->route('tabungan.index')->with('success', 'Tabungan berhasil ditambahkan.');
        } else {
            echo 'Gagal';
            return redirect()->back()->with('error', 'Gagal menambahkan tabungan. Silakan coba lagi.');
        }
        // try {
        //     // Mendapatkan ID admin yang saat ini terautentikasi
        //     // Menambahkan 'id_admin' ke dalam request data
        //     // $request->merge(['id_admin' => $id_admin]);
            
        //     // Simpan data tabungan
        //     // $tabungan = Tabungan::create($request->all());
        //     $tabunganStore = Tabungan::create([
        //         'id_admin' => $id_admin,
        //         'id_siswa' => $request->id_siswa,
        //         'nominal' => $request->nominal,
        //     ]);
            
        //     if ($tabunganStore) {
        //         echo 'Berhasil';
        //         // return redirect()->route('admin.tabungan.index')->with('success', 'Tabungan berhasil ditambahkan.');
        //     } else {
        //         echo 'Gagal';
        //         // return redirect()->back()->with('error', 'Gagal menambahkan tabungan. Silakan coba lagi.');
        //     }
        // } catch (\Exception $e) {
        //     echo 'Gagal catch';
        //     // return redirect()->back()->with('error', 'Gagal menambahkan tabungan: ' . $e->getMessage());
        // }
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id_tabungan)
    {
        $tabungans = Tabungan::with(['profile_siswa', 'user'])->findOrFail($id_tabungan);
        return view('admin.tabungan.show', compact('tabungans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
