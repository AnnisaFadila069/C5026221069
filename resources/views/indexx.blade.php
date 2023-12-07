@extends('master3')
@section('judulhalaman', 'Data keranjangbelanja')

@section('konten')
    <h2>KERANJANG BELANJA</h2>
	<a href="/keranjangbelanja/beli" class="btn btn-primary"> Beli Barang</a><br>

	<br/>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->ID}}</td>
			<td>{{ $p->KodeBarang}}</td>
			<td>{{ $p->Jumlah}}</td>
			<td>{{ number_format($p->Harga,2,',','.') }}</td>
			<td>{{ number_format($p->Harga*$p->Jumlah,2,',','.') }}</td>
			<td>
				<a href="/keranjangbelanja/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>

		@endforeach
	</table>
@endsection
