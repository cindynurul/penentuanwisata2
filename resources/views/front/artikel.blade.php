<!-- TOP HEADER Start
    ================================================== -->
    @extends('layouts.main')
    <!-- End of /Section -->
    
    <!-- SLIDER Start
        ================================================== -->
    @section('content') <!-- End of Section -->
    
    <!-- CATAGORIE Start
        ================================================== -->
    

        
    <section id="catagorie">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="block-heading">
                            <h2>Artikel</h2>
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
                                        <h2 class="card-title">{{$data->judul}}</h2>
                                        </a>
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
    </section> <!-- End of Section -->
    
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
    @endsection