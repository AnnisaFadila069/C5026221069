@extends('masterKabel')
@section('judulhalaman', 'Data kabel')

@section('konten')
<br><br>
	<h2>Data Ketersediaa Kabel</h2>

	<a href="/kabel/tambahKabel" class="btn btn-primary"> + Tambah kabel </a><br>

	<br/>
	<br/>

	<table class="table table-hover">
		<thead class="thead-dark"><tr>
			<th>Kode Kabel</th>
			<th>Merk Kabel</th>
			<th>Stok Kabel</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr> </thead>
		@foreach($kabel as $p)
		<tr>
            <td>{{ $p->kodeKabel }}</td>
			<td>{{ $p->merkKabel }}</td>
			<td>{{ $p->stokKabel }}</td>
			<td>{{ $p->tersedia  }}</td>
			<td>
				<a href="/kabel/editKabel/{{ $p->kodeKabel}}" class="btn btn-warning">Edit</a>
				|
				<a href="/kabel/hapusKabel/{{ $p->kodeKabel}}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{-- method untuk membuat pagination otomatis --}}
    {{ $kabel->links()}}
@endsection
