@extends('masterNilaiKuliah')
@section('JudulHalaman', 'Nilai Kuliah')
@section('konten')
    <br> <br><h2>Nilai Mata Kuliah</h2>

    <a href="/nilaikuliah/tambahNilaiKuliah" class="btn btn-primary"> + Tambah Nilai Kuliah</a>

    <br />
    <br />


    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr>
                <td>{{ $n->id }}</td>
                <td>{{ $n->nrp }}</td>
                <td>{{ $n->nilaiangka }}</td>
                <td>{{ $n->sks }}</td>
                <td>
                    @if ($n->nilaiangka >= 81)
                        A
                    @elseif ($n->nilaiangka >= 61)
                        B
                    @elseif ($n->nilaiangka >= 41)
                        C
                    @else
                        D
                    @endif
                </td>
                <td>{{ ($n->nilaiangka * $n->sks) }}</td>
            </tr>
        @endforeach
    </table>
@endsection
