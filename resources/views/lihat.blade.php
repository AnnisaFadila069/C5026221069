@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Lihat Data Pegawai</h3>
    <br />
    <br />


    @foreach ($pegawai as $p)
        <div class="row">
            <div class="col-6 border">
            </div>
            <div class="col-6">
                <form action="/pegawai/lihat" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
                    <div class="form-group row">
                        <div class="col-2">
                            <label for="nama">Nama</label>
                        </div>
                        <div class="col-9">
                            <p name="umur" readonly>: {{ $p->pegawai_nama }} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2">
                            <label for="jabatan">Jabatan</label>
                        </div>
                        <div class="col-9">
                            <p name="umur" readonly>: {{ $p->pegawai_jabatan }} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2">
                            <label for="umur">Umur</label>
                        </div>
                        <div class="col-9 ">
                            <p name="umur" readonly>: {{ $p->pegawai_umur }} </p>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-2">
                            <label for="alamat">Alamat</label>
                        </div>
                        <div class="col-9">
                            <p name="alamat" readonly>: {{ $p->pegawai_alamat }}</p>
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
