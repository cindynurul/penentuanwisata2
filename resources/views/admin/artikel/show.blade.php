@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Artikel</div>
                <div class="card-body">
                    <div class="form-group">
                            <label for="">Judul</label>
                            <div class="input-group input-group-outline">
                            <input type="text" name="judul" value="{{ $artikel->judul }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Konten</label>
                            <div class="input-group input-group-outline">
                            <input type="text" name="konten" value="{{ $artikel->konten }}" class="form-control" readonly>
                            </div>
                        </div>
                    <div class="form-group mt-4">
                        <a href="{{ url('/admin/artikel') }}" class="btn btn-block btn-info form-control text-white">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
