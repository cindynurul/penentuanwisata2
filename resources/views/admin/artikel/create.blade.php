@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Artikel</div>
                <div class="card-body">
                    <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Judul</label>
                            <div class="input-group input-group-outline">
                            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror">
                            @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Cover</label>
                            <div class="input-group input-group-outline">
                            <input type="file" name="cover" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">konten</label>
                            <div class="input-group input-group-outline">
                            <textarea name="konten" cols="30" rows="10"></textarea>
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
