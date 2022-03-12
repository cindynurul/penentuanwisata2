@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Kategori</div>
                <div class="card-body">
                    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nama Wisata</label>
                            <div class="input-group input-group-outline">
                            <select name="id_wisata" class="form-control @error('id_wisata') is-invalid @enderror">
                                @foreach($wisata as $data)
                                    <option value="{{$data->id}}" {{$data->id == $galeri->id_wisata ? 'selected="selected"' : ''}}>{{$data->nama_wisata}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">gambar</label>
                            <div class="input-group input-group-outline">
                            <input type="text" name="gambar" value="{{ $galeri->gambar }}" class="form-control @error('gambar') is-invalid @enderror">
                            @error('gambar')
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
