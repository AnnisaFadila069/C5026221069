<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nilaiKuliahController extends Controller
{
	public function indexNilaiKuliah()
	{
    	// mengambil data dari table nilaiKuliah
		$nilaikuliah = DB::table('nilaikuliah')->get();
        // $nilaiKuliah = DB::table('nilaiKuliah')->paginate(15);
    	// mengirim data nilaiKuliah ke view index
		return view('indexNilaiKuliah',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah nilaiKuliah
	public function tambahNilaiKuliah()
	{

		// memanggil view tambah
		return view('tambahNilaiKuliah');

	}

	// method untuk insert data ke table nilaiKuliah
	public function store(Request $request)
	{
		// insert data ke table nilaiKuliah
		DB::table('nilaikuliah')->insert([
			'ID' => $request->id,
			'NRP' => $request->nrp,
			'NilaiAngka' => $request->nilaiangka,
			'SKS' => $request->sks
		]);
		// alihkan halaman ke halaman nilaiKuliah
		return redirect('/nilaikuliah');

	}

}
