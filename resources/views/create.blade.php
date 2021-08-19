@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-left">
                        Tambah Data
                    </div>
                    <div class="card-body">
                        <form action="/store" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group"><label for="nama" class="form-control-label">Nama </label><input
                                    type="text" name="nama" id="nama" placeholder="nama" class="form-control"></div>
                            {{-- <div class="form-group"><label for="alamat" class="form-control-label">Alamat</label><input
                                    type="text" name="alamat" id="alamat" placeholder="Alamat" class="form-control">
                            </div> --}}

                            {{-- <div class="form-group"><label for="nama" class="form-control-label">Foto</label><input type="file" name="foto" id="foto" placeholder="foto" class="form-control"></div> --}}
                            <div class="form-group"><label for="nama" class="form-control-label">Nomor HP</label><input
                                    type="text" name="nohp" id="nohp" placeholder="nohp" class="form-control"></div>
                            {{-- <div class="form-group"><label for="nama" class="form-control-label">Prodi</label><input type="text"
                                    name="prodi" id="prodi" placeholder="prodi" class="form-control"></div> --}}
                            <div class="form-group"><label for="nama" class="form-control-label">Tempat
                                    Lahir</label><input type="text" name="tempat_lahir" id="tempat_lahir"
                                    placeholder="tempat_lahir" class="form-control"></div>
                            <div class="form-group"><label for="nama" class="form-control-label">Tanggal
                                    Lahir</label><input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                    placeholder="tanggal lahir" class="form-control"></div>

                            <div class="footer">
                                <a href="/" type="button" class="btn btn-secondary">kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
