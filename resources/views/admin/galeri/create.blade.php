@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Galeri</div>
                <div class="card-body">
                    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Wisata</label>
                            <div class="input-group input-group-outline">
                            <select name="id_wisata" class="form-control">
                                @foreach($wisata as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_wisata}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Gambar</label>
                            <div class="input-group input-group-outline">
                            <input type="file" name="gambar" class="form-control" >
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
