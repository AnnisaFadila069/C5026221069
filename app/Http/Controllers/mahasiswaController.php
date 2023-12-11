<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class mahasiswaController extends Controller
{
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table mahasiswa sesuai pencarian data
		$mahasiswa = DB::table('mahasiswa')
		->where('nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data mahasiswa ke view index
		return view('indexmahasiswa',['mahasiswa' => $mahasiswa, 'cari' => $cari]);

	}

	// method untuk insert data ke table mahasiswa
	public function store(Request $request)
	{
		// insert data ke table mahasiswa
		DB::table('mahasiswa')->insert([
			'NRP' => $request->NRP,
			'nama' => $request->nama,
			'jurusan' => $request->jurusan,
			'ipk' => $request->ipk
		]);
		// alihkan halaman ke halaman mahasiswa
		return redirect('/mahasiswa');

	}

	public function indexmahasiswa()
	{
    	// mengambil data dari table mahasiswa
		// $mahasiswa = DB::table('mahasiswa')->get();
        $mahasiswa = DB::table('mahasiswa')->paginate(15); //agar tersortir 15 halaman

    	// mengirim data mahasiswa ke view indexmahasiswa
		return view('indexmahasiswa',['mahasiswa' => $mahasiswa]);

	}

	// method untuk editmahasiswa data mahasiswa
	public function editmahasiswa($NRP)
	{
		// mengambil data mahasiswa berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$NRP)->get();
		// passing data mahasiswa yang didapat ke view editmahasiswa.blade.php
		return view('editmahasiswa',['mahasiswa' => $mahasiswa]);

	}

	// update data mahasiswa
	public function update(Request $request)
	{
		// update data mahasiswa
		DB::table('mahasiswa')->where('NRP',$request->NRP)->update([
            'NRP' => $request->NRP,
			'nama' => $request->nama,
			'jurusan' => $request->jurusan,
			'ipk' => $request->ipk
		]);

		// alihkan halaman ke halaman mahasiswa
		return redirect('/mahasiswa');
	}

    // method untuk lihat data mahasiswa
	public function lihatmahasiswa($NRP)
	{
		// mengambil data mahasiswa berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$NRP)->get();
		// passing data mahasiswa yang didapat ke view lihat.blade.php
		return view('lihatmahasiswa',['mahasiswa' => $mahasiswa]);
	}
}
