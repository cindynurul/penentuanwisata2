@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-1o">
                <h2 class="m-0">Data Galeri</h2>
            </div>
        </div>
    </div>
</div>
@include('layouts._flash')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('galeri.create')}}" class="btn btn-sm btn-info float-right text-white">Tambah Data Galeri</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table" id="galeri">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Wisata</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $no=1; @endphp
                            @foreach($galeri as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->wisata->nama_wisata }}</td>
                                <td><img src="{{$data->galeri()}}" alt="" style="width:150px; height:150px;" alt="gambar"></td>
                                <td>
                                    <form action="{{ route('galeri.destroy', $data->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="{{ route('galeri.edit', $data->id) }}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{ route('galeri.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('DataTables/datatables.min.css')}}">
@endsection



@section('js')
<script src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('#galeri').DataTable();
        });
    </script>
@endsection


