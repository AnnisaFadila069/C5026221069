@extends('master2')
@section('judulhalaman', 'Data keranjangbelanja')

@section('konten')

	<h3>Beli Barang</h3>

	<a href="/keranjangbelanja" class="btn btn-light"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <div class="col-3">
            <label for="KodeBarang" class="col-xs-4 col-form-label mr-2">Kode Barang</label></div>
            <div class="col-3">
            <input type="number" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3">
            <label for="Jumlah" class="col-xs-4 col-form-label mr-2">Jumlah Pembelian</label></div>
            <div class="col-3">
            <input type="number" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3">
            <label for="Harga" class="col-xs-4 col-form-label mr-2">Harga Per Item</label></div>
            <div class="col-3 ">
            <input type="number" class="form-control" id="Harga" name="Harga">
            </div>
        </div>
        <div class="form-group row"><div class="col-3"></div><div class="col-3">
		<input type="submit" value="Simpan Data" class="btn btn-primary"></div></div>
	</form>

@endsection
