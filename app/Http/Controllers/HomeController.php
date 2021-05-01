<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\User;
use App\Models\Dafsis;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        
        return Inertia::Render('Dashboard/Index', ['user'=>$user]);
    }
    public function daftarSis()
    {
        return Inertia::render('Dashboard/Daftar');
    }
    public function hdf()
    {
        return Inertia::render('Dashboard/Hdf');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'nama_siswa' => 'required',
            'gender_siswa' => 'required',
            'nisn' => 'required',
            'lahir_siswa' => 'required',
            'tempat_lahir_siswa' => 'required',
            'askol_siswa' => 'required',
            'hp_siswa' => 'required',
            'alamat_siswa' => 'required',
            'nama_ortu' => 'required',
            'kk_ortu' => 'required',
            'ktp_ortu' => 'required',
            'hp_ortu' => 'required',
            'pekerjaan_ortu' => 'required',
            'alamat_ortu' => 'required',
            'rek' => 'required'
        ]);
        
        $data = Dafsis::create([
            'nama_siswa' => $request->nama_siswa,
            'gender_siswa' => $request->gender_siswa,
            'nisn' => $request->nisn,
            'lahir_siswa' => $request->tanggal_lahir,
            'tempat_lahir_siswa' => $request->tempat_lahir,
            'askol_siswa' => $request->askol,
            'hp_siswa' => $request->hp_siswa,
            'alamat_siswa' => $request->alamat_siswa,
            'nama_ortu' => $request->nama_ortu,
            'kk_ortu' => $request->kk,
            'ktp_ortu' => $request->ktp,
            'hp_ortu' => $request->hp_ortu,
            'pekerjaan_ortu' => $request->pekerjaan,
            'alamat_ortu' => $request->alamat_ortu,
            'rekomendasi' => $request->rek,
        ]);

        return redirect('/home/daftarsiswa')->with('message', 'Sukses');
    }
}
