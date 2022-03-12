<!-- TOP HEADER Start
    ================================================== -->
@extends('layouts.main')
<!-- End of /Section -->

@section('li')
@foreach ($katego as $data)
<li><a href="/beranda/{{$data->slug}}">{{ $data->nama_kategori }} </a></li>
@endforeach
@endsection

<!-- SLIDER Start
    ================================================== -->
@section('content')
{{-- <section id="slider-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="slider" class="nivoSlider">
                    @foreach($artikel as $data)
                    @if($data->slider == "Ya")
                    <a href="/{{ $data->slug }}/selengkapnya"><img src=" {{ $data->cover() }}"
                            style="width:1180px; height:500px;" alt="Cover"></a>
                    @endif
                    @endforeach
                </div> <!-- End of /.nivoslider -->
            </div> <!-- End of /.col-md-12 -->
        </div> <!-- End of /.row -->
    </div> <!-- End of /.container -->
</section> <!-- End of Section --> --}}

<!-- CATAGORIE Start
    ================================================== -->
    
    <section id="catagorie">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <a href="javascript:history.back()" class="btn btn-lg btn-default text-black"><i class="fa fa-arrow-left"></i>
                            Kembali </a>
                        <div class="block-heading">
                          <h2><i>Wisata Rekomendasi Di Bandung</i></h2>
                        </div>
                        <br>
                        <div class="row">
                            @foreach($wisata as $data)
                            @if($data->status == "Rekomendasi")
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <a class="catagotie-head" href="/{{ $data->slug }}/detail">
                                        <img src=" {{ $data->cover() }}" style="width:350px; height:220px;" alt="Cover">
                                      <b>  <h3>{{$data->nama_wisata}}</h3></b>
                                        
                                    </a>
                                    ({{$data->kategori->nama_kategori}})<hr>
                                    <div class="caption">
                                        <br>
                                        <p>Lokasi : {{ $data->lokasi }}</p>
                                        <p><b>Harga Tiket</b> : @if($data->harga_tiket == "Gratis") {{ $data->harga_tiket }}
                                            @else {{ number_format($data->harga_tiket) }}
                                            @endif</p>
                                       <hr>
                                    </div> <!-- End of /.caption -->
                                </div> <!-- End of /.thumbnail -->
                            </div> <!-- End of /.col-sm-6 col-md-4 -->
                            @endif
                            @endforeach
                        </div> <!-- End of /.row -->
                    </div> <!-- End of /.block -->
                </div> <!-- End of /.col-md-12 -->
            </div> <!-- End of /.row -->
        </div> <!-- End of /.container -->
    </section>
<!-- End of Section -->

<section id="catagorie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="block-heading">
                      <h2><i>Wisata Populer Di Bandung</i></h2>
                    </div>
                    <br>
                    <div class="row">
                        @foreach($wisata as $data)
                        @if($data->status == "Populer")
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <a class="catagotie-head" href="/{{ $data->slug }}/detail">
                                    <img src=" {{ $data->cover() }}" style="width:350px; height:220px;" alt="Cover">
                                   <b><h3>{{$data->nama_wisata}}</h3></b>
                                    
                                </a>
                                ({{$data->kategori->nama_kategori}})<hr>
                                <div class="caption">
                                    <br>
                                    <p>Lokasi : {{ $data->lokasi }}</p>
                                    <p><b>Harga Tiket</b> : @if($data->harga_tiket == "Gratis") {{ $data->harga_tiket }}
                                        @else {{ number_format($data->harga_tiket) }}
                                        @endif</p>
                                    <hr>
                                </div> <!-- End of /.caption -->
                            </div> <!-- End of /.thumbnail -->
                        </div> <!-- End of /.col-sm-6 col-md-4 -->
                        @endif
                        @endforeach
                    </div> <!-- End of /.row -->
                </div> <!-- End of /.block -->
            </div> <!-- End of /.col-md-12 -->
        </div> <!-- End of /.row -->
    </div> <!-- End of /.container -->
</section><!-- End of Section -->

<section id="catagorie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="block-heading">
                    </div>
                </div> 
                <!-- End of /.block -->
            </div> <!-- End of /.col-md-12 -->
        </div> <!-- End of /.row -->
    </div> <!-- End of /.container -->
</section> <!-- End of Section -->
@endsection