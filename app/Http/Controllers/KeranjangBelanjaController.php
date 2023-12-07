<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class keranjangbelanjaController extends Controller
{
	public function indexx()
	{
    	// mengambil data dari table
		$keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data keranjangbelanja ke view indexx
		return view('indexx',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form beli keranjangbelanja
	public function beli()
	{

		// memanggil view beli
		return view('beli');

	}

	// method untuk insert data ke table keranjangbelanja
	public function store(Request $request)
	{
		// insert data ke table keranjangbelanja
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');

	}

	// method untuk hapus data keranjangbelanja
	public function hapus($ID)
	{
		// menghapus data keranjangbelanja berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');
	}


}
