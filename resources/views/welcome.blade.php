@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-left">
                        <a href="cetak" class="btn btn-primary" target="_blank"> cetak data</a>
                        <a href="/create" type="button" class="btn btn-info" data-toggle="modal">tambah
                            data</a> </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                {{-- <th scope="col" class="text-center">npm</th> --}}
                                <th scope="col" class="text-center">Nama </th>
                                <th scope="col" class="text-center">no hp</th>
                                <th scope="col" class="text-center">Tempat lahir</th>
                                <th scope="col" class="text-center">Tanggal Lahir</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $data as $u)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                {{-- <td class="text-center">{{$u->npm}}</td> --}}
                                {{-- <td class="text-center"><img src="img/ujian/{{$u->foto}}" width="40"
                                class="rounded-circle"
                                alt="Cinque Terre"></td> --}}
                                <td class="text-center">{{$u->nama}}</td>
                                {{-- <td class="text-center">{{$u->alamat}}</td> --}}
                                <td class="text-center">{{$u->nohp}}</td>
                                <td class="text-center">{{$u->tempat_lahir}}</td>
                                <td class="text-center">{{$u->tanggal_lahir}}</td>
                                <td class="text-center">
                                    <a class="btn btn-info" href="edit/{{$u->id}}">ubah</a>
                                    <a class="btn btn-danger" href="hapus/{{$u->id}}">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group"><label for="nama" class="form-control-label">Nama </label><input type="text"
                            name="nama" id="nama" placeholder="nama" class="form-control"></div>
                    <div class="form-group"><label for="nama" class="form-control-label">Alamat</label><input
                            type="text" name="alamat" id="alamat" placeholder="Alamat" class="form-control"></div>

                    {{-- <div class="form-group"><label for="nama" class="form-control-label">Foto</label><input type="file" name="foto" id="foto" placeholder="foto" class="form-control"></div> --}}
                    <div class="form-group"><label for="nama" class="form-control-label">Nomor HP</label><input
                            type="text" name="nohp" id="nohp" placeholder="nohp" class="form-control"></div>
                    {{-- <div class="form-group"><label for="nama" class="form-control-label">Prodi</label><input type="text"
                            name="prodi" id="prodi" placeholder="prodi" class="form-control"></div> --}}
                    <div class="form-group"><label for="nama" class="form-control-label">Tempat Lahir</label><input
                            type="text" name="tempat_lahir" id="tempat_lahir" placeholder="tempat_lahir"
                            class="form-control"></div>
                    <div class="form-group"><label for="nama" class="form-control-label">Tanggal Lahir</label><input
                            type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="tanggal lahir"
                            class="form-control"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
