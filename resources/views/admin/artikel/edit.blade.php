@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Kategori</div>
                <div class="card-body">
                    <form action="{{ route('artikel.update', $artikel->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Judul</label>
                            <div class="input-group input-group-outline">
                            <input type="text" name="judul" value="{{ $artikel->judul }}" class="form-control @error('judul') is-invalid @enderror">
                            @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Konten</label>
                            <div class="input-group input-group-outline">
                            <input type="text" name="konten" value="{{ $artikel->konten }}" class="form-control @error('konten') is-invalid @enderror">
                            @error('konten')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <button type="reset" class="btn btn-danger text-white">Reset</button>
                            <button type="submit" class="btn btn-info text-white">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
