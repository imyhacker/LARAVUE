<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\User;
use App\Models\Dafsis;
use App\Models\Jurusan;

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
        $data = Dafsis::all();
        $jurusan = Jurusan::all();
       
        return Inertia::render('Dashboard/Daftar', ['data'=>$data, 'jurusan'=>$jurusan]);
    }
    public function hdf()
    {
        $jurusan = Jurusan::all();
        return Inertia::render('Dashboard/Hdf', ['jurusan'=>$jurusan]);
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
            'jurusan' => 'required',
            'rek' => 'required'
        ]);
        
        $data = Dafsis::create([
            'nama_siswa' => $request->nama_siswa,
            'gender_siswa' => $request->gender_siswa,
            'nisn' => $request->nisn,
            'lahir_siswa' => $request->lahir_siswa,
            'tempat_lahir_siswa' => $request->tempat_lahir_siswa,
            'askol_siswa' => $request->askol_siswa,
            'hp_siswa' => $request->hp_siswa,
            'alamat_siswa' => $request->alamat_siswa,
            'nama_ortu' => $request->nama_ortu,
            'kk_ortu' => $request->kk_ortu,
            'ktp_ortu' => $request->ktp_ortu,
            'hp_ortu' => $request->hp_ortu,
            'pekerjaan_ortu' => $request->pekerjaan_ortu,
            'alamat_ortu' => $request->alamat_ortu,
            'rekomendasi' => $request->rek,
            'jurusan' => $request->jurusan,
            'status' => 0
        ]);

        return redirect('/home/daftarsiswa')->with('message', 'Sukses');
    }

    public function hapussemua()
    {
        $data = Dafsis::truncate();
        return redirect('/home/daftarsiswa')->with('message', 'Data Berhasil Di Hapus');
    }

    public function look($id)
    {
        $daf = Dafsis::find($id);
        return Inertia::render('Dashboard/Look', ['daf'=>$daf]);
    }















    public function tambahjurusan(Request $request)
    {
        $request->validate([
            'n_jurusan' => 'required|string'
        ]);
        $data = Jurusan::create($request->all());
        return redirect('/home/daftarsiswa')->with('message', 'Sukses Menambahkan Jurusan Baru');
    }
}
