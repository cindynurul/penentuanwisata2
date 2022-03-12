@include('layouts.partials.header')
<title>Penentuan Wisata</title>
<div class="container">
    <div class="products-heading">
        <h2 style="text-transform:uppercase;"><b>Detail Wisata {{ $wisata->nama_wisata }}</b></h2>
    </div>
    <a href="javascript:history.back()" class="btn btn-lg btn-default text-white"><i class="fa fa-arrow-left"></i>
        Kembali </a>
    <a href="/{{ $wisata->slug }}/galeriwisata" class="btn btn-lg btn-default text-white"><i class="fa fa-image"></i>
        Galeri </a> <br><br>

    <div class="card mb-6">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src=" {{ $wisata->cover() }}" style="width:350px; height:250px;" alt="Cover">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <ul class="nav nav-tabs">
                    </ul>
                    <h2 class="card-title"><i>{{$wisata->nama_wisata}}</h2>
                    <ul class="nav nav-tabs">
                    </ul>
                    <h6 class="card-text"><b><i>Kategori :</i></b> {{ $wisata->kategori->nama_kategori }}</h6>
                    <br>
                    <p class="card-text"><b><i>Lokasi : </i></b>{{ $wisata->lokasi }}</p> <br>
                    <h5><b><i>Deskripsi :</i></b></h5>
                    <p class="card-text"><p>{!! $wisata->deskripsi_wisata !!}</p></p><br>
                    <ul class="nav nav-tabs">
                    </ul>
              <br><br><h6><b> Harga Tiket :<i> @if($wisata->harga_tiket == "Gratis") {{ $wisata->harga_tiket }}
            @else {{ number_format($wisata->harga_tiket) }}
            @endif</i></h6></b>
            <ul class="nav nav-tabs">
            </ul>
                </div>
            </div>
        </div>
        <br><br><br>
        
    </div>
</div>

<section id="catagorie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="block-heading">
                    </div>
                </div> <!-- End of /.block -->
            </div> <!-- End of /.col-md-12 -->
        </div> <!-- End of /.row -->
    </div> <!-- End of /.container -->
</section> <!-- End of Section -->