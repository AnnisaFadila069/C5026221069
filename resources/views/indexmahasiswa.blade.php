@extends('master3')
@section('judulhalaman', 'Data mahasiswa')

@section('konten')

	<br><br><h2>Data mahasiswa Perguruan Tinggi A</h2>

    <h4>KODE SOAL BB</h4><br><br>

    <p>Cari Data Mahasiswa :</p>
	<form action="/mahasiswa/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Nama mahasiswa .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}"><br>
		<input type="submit" value="Cari" class="btn btn-info">
	</form>
    <br>
    <br>

	<table class="table table-striped table-hover">
        <thead class="thead-dark">
		<tr>
			<th>NRP</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>IPK</th>
			<th>Opsi</th>
		</tr>
        </thead>
		@foreach($mahasiswa as $p)
		<tr>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->jurusan }}</td>
			<td>{{ $p->ipk }}</td>
			<td>
                <a href="/mahasiswa/lihatmahasiswa/{{ $p->NRP }}" class="btn btn-success">View</a>
                |
				<a href="/mahasiswa/editmahasiswa/{{ $p->NRP }}" class="btn btn-warning">Edit</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{-- method untuk membuat pagination otomatis --}}
    {{ $mahasiswa->links()}}
@endsection
