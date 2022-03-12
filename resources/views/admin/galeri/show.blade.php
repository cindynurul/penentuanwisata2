@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Kategori</div>
                <div class="card-body">
                    <div class="form-group">
                            <label for="">Nama Wisata</label>
                            <div class="input-group input-group-outline">
                            <input type="text" value="{{ $galeri->wisata->nama_wisata }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Gambar</label>
                            <div class="input-group input-group-outline">
                            <input type="text" name="gambar" value="{{ $galeri->gambar }}" class="form-control" readonly>
                            </div>
                        </div>
                    <div class="form-group mt-4">
                        <a href="{{ url('/admin/galeri') }}" class="btn btn-block btn-info form-control text-white">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
