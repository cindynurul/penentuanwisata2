
<!-- TOP HEADER Start
    ================================================== -->
    @extends('layouts.main')
<!-- End of /Section -->


	<!-- SLIDER Start
    ================================================== -->
        @section('content')
	<section id="slider-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="slider" class="nivoSlider">
				    	<img src="front/images/slider.jpg" alt="" />
				    	<img src="front/images/slider1.jpg" alt=""/>
				    	<img src="front/images/slider2.jpg" alt="" />
					</div>	<!-- End of /.nivoslider -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section> <!-- End of Section -->

	<!-- CATAGORIE Start
    ================================================== -->

	<section id="catagorie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>Rekomendasi</h2>
						</div>
						<div class="row">
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="blog-single.html">
										<img src="front/images/category-image-1.jpg" alt="...">
										<h3>Beef Steak</h3>
									</a>
							      	<div class="caption">
							        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, aut, esse, laborum placeat id illo a expedita aperiam...</p>
							        	<p>
							        		<a href="blog-single.html" class="btn btn-default btn-transparent" role="button">
							        			<span>Check Items</span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="blog-single.html">
										<img src="front/images/category-image-2.jpg" alt="...">
										<h3>Miscellaneous</h3>
									</a>
							      	<div class="caption">
							        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, aut, esse, laborum placeat id illo a expedita aperiam...</p>
							        	<p>
							        		<a href="blog-single.html" class="btn btn-default btn-transparent" role="button">
							        			<span>Check Items</span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a cla<!DOCTYPE html>
<html lang="en">

<head>

	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Classimax</title>

	<!-- FAVICON -->
	<link href="{{ asset('frontend/img/favicon.png') }}" rel="shortcut icon">
	<!-- PLUGINS CSS STYLE -->
	<!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/css/bootstrap-slider.css') }}">
	<!-- Font Awesome -->
	<link href="{{ asset('frontend/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Owl Carousel -->
	<link href="{{ asset('frontend/plugins/slick-carousel/slick/slick.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/plugins/slick-carousel/slick/slick-theme.css') }}" rel="stylesheet">
	<!-- Fancy Box -->
	<link href="{{ asset('frontend/plugins/fancybox/jquery.fancybox.pack.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
	<!-- CUSTOM CSS -->
	<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">




	<!--===============================
=            Hero Area            =
================================-->

	<section class="hero-area bg-1 text-center overly">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Header Contetnt -->
					<div class="content-block">
						<h1>Selamat Datang <br> </h1>


					</div>
					<!-- Advance Search -->


				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>

	<!--===================================
=            Client Slider            =
====================================-->


	<!--===========================================
=            Popular deals section            =
============================================-->

	<section class="popular-deals section bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Trending Adds</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- offer 01 -->
				<div class="col-lg-12">
					<div class="trending-ads-slide">
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid"
												src="{{ asset('frontend/images/products/products-1.jpg')}}"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">11inch Macbook Air</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Electronics</a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-calendar"></i>26th December</a>
											</li>
										</ul>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											Explicabo, aliquam!</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>



						</div>
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid"
												src="{{ asset('frontend/images/products/products-2.jpg')}}"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">Full Study Table Combo</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Furnitures</a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-calendar"></i>26th December</a>
											</li>
										</ul>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											Explicabo, aliquam!</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>



						</div>
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid"
												src="{{ asset('frontend/images/products/products-3.jpg')}}"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">11inch Macbook Air</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Electronics</a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-calendar"></i>26th December</a>
											</li>
										</ul>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											Explicabo, aliquam!</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>



						</div>
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid"
												src="{{ asset('frontend/images/products/products-2.jpg')}}"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">Full Study Table Combo</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Furnitures</a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-calendar"></i>26th December</a>
											</li>
										</ul>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											Explicabo, aliquam!</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>



						</div>
					</div>
				</div>


			</div>
		</div>
	</section>



	<!--==========================================
=            All Category Section            =
===========================================-->

	<section class=" section">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Section title -->
					<div class="section-title">
						<h2>All Categories</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
					</div>
					<div class="row">
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-laptop icon-bg-1"></i>
									<h4>Electronics</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Laptops <span>93</span></a></li>
									<li><a href="category.html">Iphone <span>233</span></a></li>
									<li><a href="category.html">Microsoft <span>183</span></a></li>
									<li><a href="category.html">Monitors <span>343</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-apple icon-bg-2"></i>
									<h4>Restaurants</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Cafe <span>393</span></a></li>
									<li><a href="category.html">Fast food <span>23</span></a></li>
									<li><a href="category.html">Restaurants <span>13</span></a></li>
									<li><a href="category.html">Food Track<span>43</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-home icon-bg-3"></i>
									<h4>Real Estate</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Farms <span>93</span></a></li>
									<li><a href="category.html">Gym <span>23</span></a></li>
									<li><a href="category.html">Hospitals <span>83</span></a></li>
									<li><a href="category.html">Parolurs <span>33</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-shopping-basket icon-bg-4"></i>
									<h4>Shoppings</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Mens Wears <span>53</span></a></li>
									<li><a href="category.html">Accessories <span>212</span></a></li>
									<li><a href="category.html">Kids Wears <span>133</span></a></li>
									<li><a href="category.html">It & Software <span>143</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-briefcase icon-bg-5"></i>
									<h4>Jobs</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">It Jobs <span>93</span></a></li>
									<li><a href="category.html">Cleaning & Washing <span>233</span></a></li>
									<li><a href="category.html">Management <span>183</span></a></li>
									<li><a href="category.html">Voluntary Works <span>343</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-car icon-bg-6"></i>
									<h4>Vehicles</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Bus <span>193</span></a></li>
									<li><a href="category.html">Cars <span>23</span></a></li>
									<li><a href="category.html">Motobike <span>33</span></a></li>
									<li><a href="category.html">Rent a car <span>73</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-paw icon-bg-7"></i>
									<h4>Pets</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Cats <span>65</span></a></li>
									<li><a href="category.html">Dogs <span>23</span></a></li>
									<li><a href="category.html">Birds <span>113</span></a></li>
									<li><a href="category.html">Others <span>43</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
							<div class="category-block">

								<div class="header">
									<i class="fa fa-laptop icon-bg-8"></i>
									<h4>Services</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Cleaning <span>93</span></a></li>
									<li><a href="category.html">Car Washing <span>233</span></a></li>
									<li><a href="category.html">Clothing <span>183</span></a></li>
									<li><a href="category.html">Business <span>343</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->


					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>


	<!--====================================
=            Call to Action            =
=====================================-->

	<section class="call-to-action overly bg-3 section-sm">
		<!-- Container Start -->
		<div class="container">
			<div class="row justify-content-md-center text-center">
				<div class="col-md-8">
					<div class="content-holder">
						<h2>Start today to get more exposure and
							grow your business</h2>
						<ul class="list-inline mt-30">
							<li class="list-inline-item"><a class="btn btn-main" href="ad-listing.html">Add Listing</a>
							</li>
							<li class="list-inline-item"><a class="btn btn-secondary" href="category.html">Browser
									Listing</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>

	<!--============================
=            Footer            =
=============================-->

	<footer class="footer section section-sm">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
					<!-- About -->
					<div class="block about">
						<!-- footer logo -->
						<img src="images/logo-footer.png" alt="">
						<!-- description -->
						<p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor
							incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
							exercitation ullamco
							laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<!-- Link list -->
				<div class="col-lg-2 offset-lg-1 col-md-3">
					<div class="block">
						<h4>Site Pages</h4>
						<ul>
							<li><a href="#">Boston</a></li>
							<li><a href="#">How It works</a></li>
							<li><a href="#">Deals & Coupons</a></li>
							<li><a href="#">Articls & Tips</a></li>
							<li><a href="terms-condition.html">Terms & Conditions</a></li>
						</ul>
					</div>
				</div>
				<!-- Link list -->
				<div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
					<div class="block">
						<h4>Admin Pages</h4>
						<ul>
							<li><a href="category.html">Category</a></li>
							<li><a href="single.html">Single Page</a></li>
							<li><a href="store.html">Store Single</a></li>
							<li><a href="single-blog.html">Single Post</a>
							</li>
							<li><a href="blog.html">Blog</a></li>



						</ul>
					</div>
				</div>
				<!-- Promotion -->
				<div class="col-lg-4 col-md-7">
					<!-- App promotion -->
					<div class="block-2 app-promotion">
						<div class="mobile d-flex">
							<a href="">
								<!-- Icon -->
								<img src="images/footer/phone-icon.png" alt="mobile-icon">
							</a>
							<p>Get the Dealsy Mobile App and Save more</p>
						</div>
						<div class="download-btn d-flex my-3">
							<a href="#"><img src="{{ asset('frontend/images/apps/google-play-store.png')}}"
									class="img-fluid" alt=""></a>
							<a href="#" class=" ml-3"><img src="{{ asset('frontend/images/apps/apple-app-store.png')}}"
									class="img-fluid" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</footer>
	<!-- Footer Bottom -->
	<footer class="footer-bottom">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-12">
					<!-- Copyright -->
					<div class="copyright">
						<p>Copyright © <script>
								var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
							</script>. All Rights Reserved, theme by <a class="text-primary"
								href="https://themefisher.com" target="_blank">themefisher.com</a></p>
					</div>
				</div>
				<div class="col-sm-6 col-12">
					<!-- Social Icons -->
					<ul class="social-media-icons text-right">
						<li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a>
						</li>
						<li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a>
						</li>
						<li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher"
								target="_blank"></a></li>
						<li><a class="fa fa-vimeo" href=""></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Container End -->
		<!-- To Top -->
		<div class="top-to">
			<a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
		</div>
	</footer>

	<!-- JAVASCRIPTS -->
	<script src="{{ asset('frontend/plugins/jQuery/jquery.min.js')}}"></script>
	<script src="{{ asset('frontend/plugins/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap-slider.js')}}"></script>
	<!-- tether js -->
	<script src="{{ asset('frontend/plugins/tether/js/tether.min.js')}}"></script>
	<script src="{{ asset('frontend/plugins/raty/jquery.raty-fa.js')}}"></script>
	<script src="{{ asset('frontend/plugins/slick-carousel/slick/slick.min.js')}}"></script>
	<script src="{{ asset('frontend/plugins/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
	<script src="{{ asset('frontend/plugins/smoothscroll/SmoothScroll.min.js')}}"></script>
	<!-- google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places">
	</script>
	<script src="{{ asset('frontend/plugins/google-map/gmap.js')}}"></script>
	<script src="{{ asset('frontend/js/script.js')}}"></script>

</body>

</html>ss="catagotie-head" href="blog-single.html">
										<img src="front/images/category-image-3.jpg" alt="...">
										<h3>Elegant Apparel</h3>
									</a>
							      	<div class="caption">
								        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, aut, esse, laborum placeat id illo a expedita aperiam...</p>
								        <p>
								        	<a href="blog-single.html" class="btn btn-default btn-transparent" role="button">
								        		<span>Check Items</span>
								        	</a>
								        </p>
								    </div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						</div>	<!-- End of /.row -->
					</div>	<!-- End of /.block -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->

    <section id="catagorie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>Populer</h2>
						</div>
						<div class="row">
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="blog-single.html">
										<img src="front/images/category-image-1.jpg" alt="...">
										<h3>Beef Steak</h3>
									</a>
							      	<div class="caption">
							        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, aut, esse, laborum placeat id illo a expedita aperiam...</p>
							        	<p>
							        		<a href="blog-single.html" class="btn btn-default btn-transparent" role="button">
							        			<span>Check Items</span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="blog-single.html">
										<img src="front/images/category-image-2.jpg" alt="...">
										<h3>Miscellaneous</h3>
									</a>
							      	<div class="caption">
							        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, aut, esse, laborum placeat id illo a expedita aperiam...</p>
							        	<p>
							        		<a href="blog-single.html" class="btn btn-default btn-transparent" role="button">
							        			<span>Check Items</span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="blog-single.html">
										<img src="front/images/category-image-3.jpg" alt="...">
										<h3>Elegant Apparel</h3>
									</a>
							      	<div class="caption">
								        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, aut, esse, laborum placeat id illo a expedita aperiam...</p>
								        <p>
								        	<a href="blog-single.html" class="btn btn-default btn-transparent" role="button">
								        		<span>Check Items</span>
								        	</a>
								        </p>
								    </div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						</div>	<!-- End of /.row -->
					</div>	<!-- End of /.block -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->

    <section id="catagorie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
						</div>
                    </div>	<!-- End of /.block -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->
    @endsection

		<!-- PRODUCTS Start
    ================================================== -->

	{{-- <section id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="products-heading">
						<h2>NEW PRODUCTS</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="front/images/product-image.jpg" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
					</div>	<!-- End of /.products -->
				</div>	<!-- End of /.col-md-3 -->
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="front/images/product-image-2.jpg" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
					</div>	<!-- End of /.products -->
				</div> <!-- End Of Col-md-3 -->
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="front/images/product-image-3.jpg" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
					</div>	<!-- End of /.products -->
				</div> <!-- End Of /.Col-md-3 -->
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="front/images/product-image-4.jpg" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
					</div>	<!-- End of /.products -->
				</div> <!-- End Of /.Col-md-3 -->
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="front/images/product-image-5.jpg" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
					</div>	<!-- End of /.products -->
				</div> <!-- End Of /.Col-md-3 -->
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="front/images/product-image-6.jpg" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
					</div>	<!-- End of /.products -->
				</div> <!-- End Of /.Col-md-3 -->
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="front/images/product-image-7.jpg" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
					</div>	<!-- End of /.products -->
				</div> <!-- End Of /.Col-md-3 -->
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="front/images/product-image-8.jpg" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<div >
							<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
						</div>
					</div>	<!-- End of /.products -->
				</div> <!-- End Of /.Col-md-3 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section --> --}}
