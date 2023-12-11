@extends('master3')
@section('judulhalaman', 'Data mahasiswa')

@section('konten')

    <br><br>
    <h2>Lihat Data mahasiswa</h2>
    <br />
    <br />


    @foreach ($mahasiswa as $p)
        <div class="row">
            <div class="col-6 border">
            </div>
            <div class="col-6">
                <form action="/mahasiswa/lihatmahasiswa" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="NRP" value="{{ $p->NRP }}"> <br />
                    <div class="form-group row">
                        <div class="col-2">
                            <label for="NRP">NRP</label>
                        </div>
                        <div class="col-9">
                            <p name="NRP" readonly>: {{ $p->NRP }} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2">
                            <label for="nama">Nama</label>
                        </div>
                        <div class="col-9">
                            <p name="nama" readonly>: {{ $p->nama }} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2">
                            <label for="jurusan">Jurusan</label>
                        </div>
                        <div class="col-9 ">
                            <p name="jurusan" readonly>: {{ $p->jurusan }} </p>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-2">
                            <label for="ipk">IPK</label>
                        </div>
                        <div class="col-9">
                            <p name="ipk" readonly>: {{ $p->ipk }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2"></div>
                        <div class="col-9">
                            <a href="{{ url()->previous() }}" class="btn btn-primary"> OK </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
