@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-light"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <div class="col-1">
            <label for="nama" class="col-xs-4 col-form-label mr-2">Nama</label></div>
            <div class="col-3">
            <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-1">
            <label for="jabatan" class="col-xs-4 col-form-label mr-2">Jabatan</label></div>
            <div class="col-3">
            <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-1">
            <label for="umur" class="col-xs-4 col-form-label mr-2">Umur</label></div>
            <div class="col-3 ">
            <input type="number" class="form-control" id="umur" name="umur">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-1">
            <label for="alamat" class="col-xs-4 col-form-label mr-2">Alamat</label></div>
            <div class="col-3">
            <textarea type="text" class="form-control" id="alamat" name="alamat"></textarea>
            </div>
        </div>
        <div class="form-group row"><div class="col-1"></div><div class="col-3">
		<input type="submit" value="Simpan Data" class="btn btn-primary"></div></div>
	</form>

@endsection
