@include('layouts.partials.header')
<title>Penentuan Wisata</title>
<div class="container">
    <div class="products-heading">

    </div>
    <a href="javascript:history.back()" class="btn btn-lg btn-default text-black"><i class="fa fa-arrow-left"></i>
        Kembali </a>
    <br>
    <br><br>
    <br><br>
    <br><br>


    <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-lg-6 text-center wow fadeInUp"><img src=" {{ $artikel->cover() }}" style="width:500px; hei5ht:350px;" alt="Cover" >
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
              <div class="box-width-lg-470">
                  <hr>
                <h5>{{ $artikel->judul }}</h5> <br>
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                  <!-- Nav tabs-->
                
                  <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-7-1" data-toggle="tab">Tentang</a></li>
                    
                  </ul>
                  <!-- Tab panes-->
                  <div class="tab-content">
                        <p> {!! $artikel->konten !!} </p> 
                         
                        <br><br>
                        <br><br>
                        <hr>
                        <small class="text-muted" style="float: right;">Last updated {{ $artikel->created_at->diffForHumans()
                        }}</small>            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


    
    {{-- <div class="container">
        <div class="col-md-12 text-center">
           <center> <!-- End of /.container -->
 <h5>{{ $artikel->judul }}</h5> <br></center>
            <img src=" {{ $artikel->cover() }}" style="width:800px; height:400px;" alt="Cover">
            
        </div> <!-- End of /.col-md-12 -->
    </div>
    
    <div class="container">
        <div class="col-md-12">
            <br><br>
            <p> {!! $artikel->konten !!} </p>
            <br><br>
            <br><br>
            <small class="text-muted" style="float: right;">Last updated {{ $artikel->created_at->diffForHumans()
                }}</small>
        </div> <!-- End of /.col-md-12 -->
    </div> <!-- End of /.container -->


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
    </section> <!-- End of Section --> --}}