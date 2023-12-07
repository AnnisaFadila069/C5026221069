@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="{{ url()->previous() }}" class="btn btn-light"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group row">
            <div class="col-1">
            <label for="nama" class="col-xs-4 col-form-label mr-2">Nama</label></div>
            <div class="col-3">
            <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-1">
            <label for="jabatan" class="col-xs-4 col-form-label mr-2">Jabatan</label></div>
            <div class="col-3">
            <input type="text" class="form-control" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-1">
            <label for="umur" class="col-xs-4 col-form-label mr-2">Umur</label></div>
            <div class="col-3 ">
            <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-1">
            <label for="alamat" class="col-xs-4 col-form-label mr-2">Alamat</label></div>
            <div class="col-3">
            <textarea type="text" class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>
        <div class="form-group row"><div class="col-1"></div><div class="col-3">
		<input type="submit" value="Simpan Data" class="btn btn-primary"></div></div>
	</form>


	@endforeach
@endsection
