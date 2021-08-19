@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group"><label for="nama" class="form-control-label">Nama </label><input
                                type="text" name="nama" id="nama" placeholder="nama" class="form-control"
                                value="{{$ujian->nama}}"></div>
                        {{-- <div class="form-group"><label for="nama" class="form-control-label">Alamat</label><input
                                type="text" name="alamat" id="alamat" placeholder="alamat" class="form-control"
                                value="{{$ujian->alamat}}">
                </div> --}}

                {{-- <div class="form-group"><label for="nama" class="form-control-label">Foto</label><input type="file" name="foto" id="foto" placeholder="foto" class="form-control" value="{{$ujian->foto}}">
            </div> --}}
            <div class="form-group"><label for="nama" class="form-control-label">No hp</label><input type="text"
                    name="nohp" id="nohp" placeholder="nohp" class="form-control" value="{{$ujian->nohp}}">
            </div>
            <div class="form-group"><label for="nama" class="form-control-label">Prodi</label><input type="text"
                    name="tempat_lahir" id="tempat_lahir" placeholder="tempat_lahir" class="form-control"
                    value="{{$ujian->tempat_lahir}}">
            </div>
            <div class="form-group"><label for="nama" class="form-control-label">Fakultas</label><input type="date"
                    name="tanggal_lahir" id="tanggal_lahir" placeholder="tanggal_lahir" class="form-control"
                    value="{{$ujian->tanggal_lahir}}"></div>
        </div>
        <div class="modal-footer">
            <a href="/" type="button" class="btn btn-secondary" data-dismiss="modal">Batal</a>
            <button type="submit" class="btn btn-primary">ubah data</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
