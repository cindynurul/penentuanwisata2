 @include('layouts.atas')
      <!-- Swiper-->
      
      <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
        <div class="swiper-wrapper text-left">
          <div class="swiper-slide context-dark" data-slide-bg="{{ asset('site/images/slider-4-slide-1-2.jpg')}}">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Mau Liburan Kemana Nih ???</h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>BANDUNGIN</span><span class="font-weight-bold"> Aja YUK</span></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="{{ asset('site/images/slider-4-slide-2-cinta.jpg')}}">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Silahkan </h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Cari</span><span class="font-weight-bold">Referensi Liburan Mu</span></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="{{ asset('site/images/slider-4-slide-3-kawah.jpg')}}">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Yang Menarik</h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Pastinya</span><span class="font-weight-bold">Di Bandung</span></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        <!-- Swiper Pagination-->
       
      </section>
      <!-- Section Box Categories-->
      <section class="section section-lg section-top-1 bg-gray-4">
        <div class="container offset-negative-1">
          <div class="box-categories cta-box-wrap">
            <div class="box-categories-content">
              <div class="row justify-content-center">
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                  </ul>

                </div>
              </div>
            </div>
          </div>
          <article class="box-icon-classic">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="block">
                    <div class="row">
                      @foreach($kategori as $data)
                      <center> <a href="beranda/{{$data->slug}}"
                          class="btn btn-lg btn-default btn-block text-black">{{$data->nama_kategori}}</a>
                      </center> <br>
                      @endforeach
                     </center>
                    </div> <!-- End of /.row -->
                  </div> <!-- End of /.block -->
                </div> <!-- End of /.col-md-12 -->
              </div> 
            </div>
          </article>
          <!-- Owl Carousel-->
        </div>
      </section>
 

      <!-- Discover New Horizons-->
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-lg-6 text-center wow fadeInUp"><img src="{{ asset('site/images/index-3-kuku.jpg')}}" alt="" width="556" height="382"/>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
              <div class="box-width-lg-470">
                <h3>Wisata DI Bandung</h3>
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                  <!-- Nav tabs-->
                  <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-7-1" data-toggle="tab">Tentang</a></li>
                    
                  </ul>
                  <!-- Tab panes-->
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-7-1">
                      <p>Destinasi wisata yang menawarkan pemandangan alam yang hijau serta udara yang segar. Terletak di tengah hutan pinus Rahong, area wisata Kampung Singkur dilengkapi dengan berbagai macam kegiatan outdoor seperti camping, rafting, outbound, paintball, offroad, dll. </p>
                     
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--	Our Services-->



      {{-- <section class="section section-lg section-top-1 bg-gray-4">
        <div class="container offset-negative-1">
          <div class="box-categories cta-box-wrap">
            <div class="box-categories-content">
              <div class="row justify-content-center">
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="#"><img src="{{ asset('site/images/cta-1-368x420.jpg')}}" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">Balloon Flights</h5>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="#"><img src="{{ asset('site/images/cta-2-368x420.jpg')}}" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">Mountain Holiday</h5>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="#"><img src="{{ asset('site/images/cta-3-368x420.jpg')}}" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">Beach Holidays</h5>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div><a class="link-classic wow fadeInUp" href="#">Other Tours<span></span></a>
          <!-- Owl Carousel-->
        </div>
      </section> --}}

      
      <section id="catagorie">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="block-heading">
                            
                        </div>
                        @foreach($artikel as $data)
                        <br><br><br>
                        <div class="card mb-6">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a class="catagotie-head" href="/{{ $data->slug }}/selengkapnya">
                                        <img src=" {{ $data->cover() }}" style="width:350px; height:220px;" alt="Cover">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$data->judul}}</h5>
                                        </a>
                                        <br>
                                        <br>
                                        <a href="/{{ $data->slug }}/selengkapnya" class="btn btn-default btn-transparent"
                                            role="button">
                                            <span>Lihat Selengkapnya...</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div> <!-- End of /.block -->
                </div> <!-- End of /.col-md-12 -->
            </div> <!-- End of /.row -->
        </div> <!-- End of /.container -->
    </section>
      <!-- Hot tours-->
      {{-- <section class="section section-sm bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Wisata Rekomendasi Di Bandung</span></h3>
          <div class="row row-sm row-40 row-md-50">
            <div class="col-sm-6 col-md-12 wow fadeInRight">
              <!-- Product Big-->
              <article class="product-big">
                <div class="unit flex-column flex-md-row align-items-md-stretch">
                  
                  @foreach($wisata as $data)
                  @if($data->status == "Rekomendasi")
                  <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                              <a class="catagotie-head" href="/{{ $data->slug }}/detail">
                              <img src=" {{ $data->cover() }}" style="width:350px; height:220px;" alt="Cover">
                              <h3>{{$data->nama_wisata}}</h3>
                              </a>
                              ({{$data->kategori->nama_kategori}})
                              <div class="caption">
                              <br>
                              <p>Lokasi : {{ $data->lokasi }}</p>
                              <p><b>Harga Tiket</b> : @if($data->harga_tiket == "Gratis") {{ $data->harga_tiket }}
                                  @else {{ number_format($data->harga_tiket) }}
                                  @endif</p>
                                 <p>
                                 <div class="col-sm-11 col-md-7 col-lg-5 col-xl-12">
                                 <div class="oh-desktop">
                                 <div class="wow slideInLeft" data-wow-delay="0s">
                                 <div class="group-md group-middle justify-content-sm-start"><a class="button button-lg button-primary button-ujarak" href="/{{ $data->slug }}/detail">Lihat Detail</a></div>
                                 </div>
                                 </div>
                                 </div>
                                 </p>
                                 </div> <!-- End of /.caption -->
                                 </div> <!-- End of /.thumbnail -->
                                 </div> <!-- End of /.col-sm-6 col-md-4 -->
                                 @endif
                                 @endforeach

                </div>
              </article>
            </div>
           
          </div>
        </div>
      </section> --}}
<br>
<br>
      <section id="catagorie">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="block-heading">
                          <hr>
                          <br>
                            <h2><i>Wisata Rekomendasi Di Bandung</i></h2>
                            <br>
                            <hr>
                        </div>
                        <div class="row">
                            @foreach($wisata as $data)
                            @if($data->status == "Rekomendasi")
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <a class="catagotie-head" href="/{{ $data->slug }}/detail">
                                        <img src=" {{ $data->cover() }}" style="width:350px; height:220px;" alt="Cover">
                                        <br>
                                        <hr>
                                        <h3>{{$data->nama_wisata}}</h3>
                                    </a>
                                    ({{$data->kategori->nama_kategori}})
                                    <hr>
                                    <div class="caption">
                                        <br>
                                        <p>Lokasi : {{ $data->lokasi }}</p>
                                        <p><b>Harga Tiket</b> : @if($data->harga_tiket == "Gratis") {{ $data->harga_tiket }}
                                            @else {{ number_format($data->harga_tiket) }}
                                            @endif</p>
                                        <p>
                                          <div class="col-sm-11 col-md-7 col-lg-5 col-xl-12">
                                            <div class="oh-desktop">
                                            <div class="wow slideInLeft" data-wow-delay="0s">
                                            <div class="group-md group-middle justify-content-sm-start"><a class="button button-lg button-primary button-ujarak" href="/{{ $data->slug }}/detail">Lihat Detail</a></div>
                                            </div>
                                            </div>
                                            </div>
                                        </p>
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
    

<br>
<br>



    <section id="catagorie">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="block">
                      <div class="block-heading">
                        <hr>
                        <br>
                        <h2><i>Wisata Populer Di Bandung</i></h2>
                        <br>
                        <hr>
                        
                      </div>
                      <br>
                      <div class="row">
                          @foreach($wisata as $data)
                          @if($data->status == "Populer")
                          <div class="col-sm-6 col-md-3">
                              <div class="thumbnail">
                                  <a class="catagotie-head" href="/{{ $data->slug }}/detail">
                                      <img src=" {{ $data->cover() }}" style="width:350px; height:220px;" alt="Cover">
                                      <h3>{{$data->nama_wisata}}</h3>
                                  </a>
                                  ({{$data->kategori->nama_kategori}})
                                  <hr>
                                  <div class="caption">
                                      <br>
                                      <p>Lokasi : {{ $data->lokasi }}</p>
                                      <p><b>Harga Tiket</b> : @if($data->harga_tiket == "Gratis") {{ $data->harga_tiket }}
                                          @else {{ number_format($data->harga_tiket) }}
                                          @endif</p>
                                      <p>
                                        <div class="col-sm-11 col-md-7 col-lg-5 col-xl-12">
                                          <div class="oh-desktop">
                                          <div class="wow slideInLeft" data-wow-delay="0s">
                                          <div class="group-md group-middle justify-content-sm-start"><a class="button button-lg button-primary button-ujarak" href="/{{ $data->slug }}/detail">Lihat Detail</a></div>
                                          </div>
                                          </div>
                                          </div>
                                      </p>
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
      <!-- Different People-->
     
      <!-- Section Subscribe-->
      <section class="section bg-default text-center offset-top-50">
        <div class="parallax-container" data-parallax-img="{{ asset('site/images/parallax-1-1921.jpg')}}">
          <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
            <div class="container">
              <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold">Gimana ???</span><span class="d-block font-weight-light">Tertarik ???</span></h2>
              <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">ingin pergi wisata ke Bandung Dan Menguningi Berbagai Wisata Di Sini? Kami Menyediakan Berbagai Rekomendasi Yang Populer Dan Rekomendasi Di Bandung  Untuk Kamu Liburan Bareng Keluarga, Teman, Satu Kelas, Hingga Honeymoon </a>
            </div>
          </div>
        </div>
      </section>
      <!--	Instagrram wondertour-->
      <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
        <div class="container-fluid">
          <h2 class="gallery-title">Gallery</h2>
          <!-- Owl Carousel-->
          <div class="row">
            @foreach($galeri as $data)
            <div class="col-sm-6 col-md-4"><br><br>
                <div class="thumbnail">
                    <img src=" {{ $data->galeri() }}" style="width:350px; height:220px;" alt="Galeri">
                </div>
            </div>
            @endforeach
    
        </div>
        </div>
      </section>
      <!-- Page Footer-->
      @include('layouts.bawah')
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{ asset('site/js/core.min.js')}}"></script>
    <script src="{{ asset('site/js/script.js')}}"></script>
  </body>
</html>