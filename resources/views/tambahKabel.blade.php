@extends('master3')
@section('judulhalaman', 'Data kabel')

@section('konten')

    <h3>Tambah Kabel</h3>

    <a href="/kabel" class="btn btn-light"> Kembali</a>

    <br />
    <br />

    <form action="/kabel/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <div class="col-2">
                <label for="merkKabel" class="col-xs-4 col-form-label mr-2">Merk Kabel</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" id="merkKabel" name="merkKabel">
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-2">
                <label for="stokKabel" class="col-xs-4 col-form-label mr-2">Stok Kabel</label>
            </div>
            <div class="col-3 ">
                <input type="number" class="form-control" id="stokKabel" name="stokKabel">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-2">
                <label for="tersedia" class="col-xs-4 col-form-label mr-2">Tersedia</label>
            </div>
            <div class="col-3">
                <div class="form-check form-check-inline" >
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia1" value="Y">
                    <label class="form-check-label" class="col-xs-4 col-form-label mr-2" for="inlineRadio1">Ada</label>
                </div>
                <div class="form-check form-check-inline" >
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia2" value="N">
                    <div class="col-xs-4 col-form-label mr-2">
                    <label class="form-check-label" for="inlineRadio2">Tidak Ada</label> </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-2"></div>
            <div class="col-3">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
    </form>

@endsection
