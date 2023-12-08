<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class  kabelController extends Controller
{
	public function indexKabel()
	{
    	// mengambil data dari table  kabel
		// $ kabel = DB::table(' kabel')->get();
        $kabel = DB::table('kabel')->paginate(15); //agar tersortir 15 halaman

    	// mengirim data kabel ke view indexKabel
		return view('indexKabel',['kabel' => $kabel]);

	}

	// method untuk menampilkan view form tambah  kabel
	public function tambahKabel()
	{

		// memanggil view tambah
		return view('tambahKabel');

	}

	// method untuk insert data ke table  kabel
	public function store(Request $request)
	{
		// insert data ke table  kabel
		DB::table('kabel')->insert([
			'merkKabel' => $request->merkKabel,
			'stokKabel' => $request->stokKabel,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman  kabel
		return redirect('/kabel');

	}

	// method untuk edit data  kabel
	public function editKabel($kodeKabel)
	{
		// mengambil data  kabel berdasarkan kodeKabel yang dipilih
		$kabel = DB::table('kabel')->where('kodeKabel',$kodeKabel)->get();
		// passing data  kabel yang dkodeKabelapat ke view edit.blade.php
		return view('editKabel',['kabel' => $kabel]);

	}

	// update data  kabel
	public function update(Request $request)
	{
		// update data  kabel
		DB::table('kabel')->where('kodeKabel',$request->kodeKabel)->update([
			'merkKabel' => $request->merkKabel,
			'stokKabel' => $request->stokKabel,
			'tersedia' => $request->tersedia,
		]);

		// alihkan halaman ke halaman  kabel
		return redirect('/kabel');
	}

	// method untuk hapus data  kabel
	public function hapusKabel($kodeKabel)
	{
		// menghapus data  kabel berdasarkan kodeKabel yang dipilih
		DB::table('kabel')->where('kodeKabel',$kodeKabel)->delete();

		// alihkan halaman ke halaman  kabel
		return redirect('/kabel');
	}

}
