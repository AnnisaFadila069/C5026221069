@extends('master3')
@section('judulhalaman', 'Data kabel')

@section('konten')

	<h3>Edit Data Kabel</h3>

	<a href="{{ url()->previous() }}" class="btn btn-light"> Kembali</a>

	<br/>
	<br/>

	@foreach($kabel as $p)
	<form action="/kabel/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="kodeKabel" value="{{ $p->kodeKabel }}"> <br/>
        <div class="form-group row">
            <div class="col-2">
            <label for="merkKabel" class="col-xs-4 col-form-label mr-2">Merk Kabel</label></div>
            <div class="col-3">
            <input type="text" class="form-control" required="required" name="merkKabel" value="{{ $p->merkKabel }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-2">
            <label for="stokKabel" class="col-xs-4 col-form-label mr-2">Stok Kabel</label></div>
            <div class="col-3 ">
            <input type="number" class="form-control" required="required" name="stokKabel" value="{{ $p->stokKabel }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-2">
                <label for="tersedia" class="col-xs-4 col-form-label mr-2">Tersedia</label>
            </div>
            <div class="col-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia1" value="Y" {{ $p->tersedia == 'Y' ? 'checked' : '' }}>
                    <label class="form-check-label" for="tersedia1">Ada</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia2" value="N" {{ $p->tersedia == 'N' ? 'checked' : '' }}>
                    <label class="form-check-label" for="tersedia2">Tidak Ada</label>
                </div>
            </div>
        </div>
        <div class="form-group row"><div class="col-2"></div><div class="col-3">
		<input type="submit" value="Simpan Data" class="btn btn-primary"></div></div>
	</form>


	@endforeach
@endsection
