@extends('master3')
@section('judulhalaman', 'Data mahasiswa')

@section('konten')

	<br><br>
	<h3>Edit mahasiswa</h3>

	<a href="{{ url()->previous() }}" class="btn btn-light"> Kembali</a>

	<br/>
	<br/>

	@foreach($mahasiswa as $p)
	<form action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="NRP" value="{{ $p->NRP }}"> <br/>
        <div class="form-group row">
            <div class="col-1">
            <label for="NRP" class="col-xs-4 col-form-label mr-2">NRP</label></div>
            <div class="col-3">
            <input type="text" class="form-control" required="required" name="NRP" value="{{ $p->NRP }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-1">
            <label for="nama" class="col-xs-4 col-form-label mr-2">Nama</label></div>
            <div class="col-3">
            <input type="text" class="form-control" class="form-control" required="required" name="nama" value="{{ $p->nama }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-1">
            <label for="jurusan" class="col-xs-4 col-form-label mr-2">Jurusan</label></div>
            <div class="col-3 ">
            <input type="teks" class="form-control" required="required" name="jurusan" value="{{ $p->jurusan }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-1">
            <label for="ipk" class="col-xs-4 col-form-label mr-2">IPK</label></div>
            <div class="col-3">
            <input type="float" class="form-control" required="required" name="ipk" value=" {{$p->ipk }}">
            </div>
        </div>
        <div class="form-group row"><div class="col-1"></div><div class="col-3">
		<input type="submit" value="Simpan Data" class="btn btn-primary"></div></div>
	</form>


	@endforeach
@endsection
