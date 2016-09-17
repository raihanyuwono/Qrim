@extends('layouts.master')

@section('head')
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/chocolat.css">
        <link href="css/style3.css" rel='stylesheet' type='text/css'/>  
        <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' type='text/css'>
@endsection

@section('title', 'Home')

@section('content')
	
	<!-- Header -->
	<div class="header" id="home">

		<div class="slider-info">
			<div class="logo">
				<a href="#">HITECH INFO</a>
			</div>
		</div>

		<div class="slider">
			<!-- Slider1 -->
			<div class="slider-1">
				<ul class="rslides" id="slider1">
					<li>
						<img src="images/slide-1.jpg" alt="Hitech Info">
					</li>
					<li>
						<img src="images/slide-2.jpg" alt="Hitech Info">
					</li>
					<li>
						<img src="images/slide-3.jpg" alt="Hitech Info">
					</li>
					<li>
						<img src="images/slide-4.jpg" alt="Hitech Info">
					</li>
					<li>
						<img src="images/slide-5.jpg" alt="Hitech Info">
					</li>
				</ul>
			</div>
			<!-- //Slider1 -->
		</div>
		<div class="clearfix"></div>

	</div>
	<!-- //Header -->



	<!-- About -->
	<div class="about" id="about">
		<div class="container">

			<h1>ABOUT US</h1>
			<div class="heading-underline">
				<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
			</div>

			<div class="col-md-6 col-sm-6 about-details">
				<div class="about-image">
					<img src="images/mac.png" alt="Hitech Info">
				</div>
				<div class="about-info">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="clearfix"></div>
			</div>

			<!-- Skills -->
			<div class="col-md-6 col-sm-6 skills">

				<div id="about-us" class="parallax">
					<h2>OUR SKILLS</h2>
				<div class="heading-underline">
					<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
				</div>
					<div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<p class="lead">LOREM IPSUM</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="90">90%</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
							<p class="lead">DOLORES AMET</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="80">80%</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
							<p class="lead">CONSECTETUR</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="70">70%</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
							<p class="lead">ADIPISICING</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="75">75%</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
							<p class="lead">EXERCITATION</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="85">85%</div>
							</div>
						</div>
					</div>

				</div>

			</div>
			<!-- //Skills -->
			<div class="clearfix"></div>

		</div>
	</div>
	<!-- //About -->



	<!-- Services -->
	<div class="services" id="services">
		<div class="container">

			<h3>SERVICES</h3>
			<div class="heading-underline">
				<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
			</div>

			<div class="service-grids">
				<div class="col-md-4 col-sm-4 service-grid service-grid-1">
					<img src="images/service-1.png" alt="Hitech Info">
					<h4>LOREM IPSUM</h4>
					<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				</div>
				<div class="col-md-4 col-sm-4 service-grid service-grid-2">
					<img src="images/service-2.png" alt="Hitech Info">
					<h4>DOLORES AMET</h4>
					<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				</div>
				<div class="col-md-4 col-sm-4 service-grid service-grid-3">
					<img src="images/service-3.png" alt="Hitech Info">
					<h4>CONSECTETURS</h4>
					<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!-- //Services -->



				<!-- Popup-Box -->
				<div id="popup">
					<div id="small-dialog" class="mfp-hide">
						<div class="pop_up">
							<div class="payment-online-form-left">
								<form>
									<h4><span class="shipping"> </span>Customer Details</h4>
									<ul>
										<li><input class="text-box-dark" type="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"></li>
										<li><input class="text-box-dark" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
									</ul>
									<ul>
										<li><input class="text-box-dark" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
										<li><input class="text-box-dark" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
									</ul>
									<div class="clear"></div>
									<h4 class="paymenthead"><span class="payment"></span>Payment Details</h4>
									<div class="clear"></div>
									<ul class="payment-type">
										<li><span class="col_checkbox">
												<input id="3" class="css-checkbox1" type="checkbox">
												<label for="3" class="css-label1"></label>
												<a class="visa" href="#"></a>
											</span>
										</li>
										<li>
											<span class="col_checkbox">
												<input id="4" class="css-checkbox2" type="checkbox">
												<label for="4" class="css-label2"></label>
												<a class="paypal" href="#"></a>
											</span>
										</li>
									</ul>
									<ul>
										<li><input class="text-box-dark" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
										<li><input class="text-box-dark" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
									</ul>
									<ul>
										<li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
										<li><input class="text-box-dark" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
									</ul>
									<ul class="payment-sendbtns">
										<li><input type="reset" value="Reset"></li>
										<li><a href="#" class="order">Process order</a></li>
									</ul>
									<div class="clear"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<button title="Close (Esc)" type="button" class="mfp-close">×</button>
				<!-- //Popup-Box -->

			</div>
			
		</div>
	</div>
	<!-- //Pricing -->



	<!-- Team -->
	<div class="team" id="team">
		<div class="container">

			<h3>BEHIND OUR SUCCESS</h3>
			<div class="heading-underline">
				<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
			</div>
			<p class="team-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<div class="team-grids">			
				<div class="ch-grid">
					<div class="col-md-3 col-sm-3 team-grid team-grid1">
						<div class="ch-item ch-img-1">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<h4>RICHARD HAMMOND</h4>
										<p>CEO</p>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 team-grid team-grid2">
						<div class="ch-item ch-img-2">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-2"></div>
									<div class="ch-info-back">
										<h4>RACHEL JONES</h4>
										<p>CTO</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 team-grid team-grid3">
						<div class="ch-item ch-img-3">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3"></div>
									<div class="ch-info-back">
										<h4>KRISTEN BELL</h4>
										<p>CFO</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 team-grid team-grid4">
						<div class="ch-item ch-img-4">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-4"></div>
									<div class="ch-info-back">
										<h4>WILLIAM HANNAH</h4>
										<p>CSO</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- //Team -->



	<!-- Projects -->
	<div class="projects" id="projects">

		<h3>OUR LATEST PROJECTS</h3>
		<div class="heading-underline">
			<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
		</div>

		<div class="gallery-items">
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-1">
				<a class="example-image-link" href="images/gallery-1-big.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-1.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-2">
				<a class="example-image-link" href="images/gallery-2-big.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-2.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-3">
				<a class="example-image-link" href="images/gallery-3-big.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-3.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-4">
				<a class="example-image-link" href="images/gallery-4-big.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-4.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-5">
				<a class="example-image-link" href="images/gallery-5-big.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-5.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-6">
				<a class="example-image-link" href="images/gallery-6-big.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-6.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-7">
				<a class="example-image-link" href="images/gallery-7-big.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-7.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-8">
				<a class="example-image-link" href="images/gallery-8-big.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-8.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-9">
				<a class="example-image-link" href="images/gallery-9-big.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-9.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-10">
				<a class="example-image-link" href="images/gallery-10-big.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-10.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-11">
				<a class="example-image-link" href="images/gallery-11-big.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-11.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-12">
				<a class="example-image-link" href="images/gallery-12-big.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-12.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="clearfix"></div>
		</div>
		
	</div>
	<!-- //Projects -->



	<!-- Testimonial -->
	<div class="testimonial" id="testimonial">
		<div class="container">

			<h3>TESTIMONIALS</h3>
			<div class="heading-underline">
				<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
			</div>

			<!-- Slider2 -->
			<div class="slider2">
				<ul class="rslides" id="slider2">
					<li>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
						<h4>John Doe</h4>
					</li>
					<li>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
						<h4>Jane Doe</h4>
					</li>
					<li>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
						<h4>Jack Doe</h4>
					</li>
					<li>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
						<h4>Jill Doe</h4>
					</li>
					<li>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
						<h4>James Doe</h4>
					</li>
				</ul>
			</div>
			<!-- //Slider2 -->
			
		</div>
	</div>
	<!-- //Testimonial -->



	<!-- Hitech Infosletter -->
	<div class="newsletter" id="newsletter">
		<div class="container">
			<div class="new-grids">
				<div class="col-md-6 col-sm-6 subscribe">
					<p>Subscribe to our Newsletter</p>
				</div>
				<div class="col-md-6 col-sm-6 email-form">
					<form action="#" method="post">
						<input class="email" type="email" name="Email" placeholder="Email Address" required="">
						<input type="submit" class="submit" value="SEND">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //Hitech Infosletter -->



	<!-- Follow -->
	<div class="follow">
		<div class="container">

			<!-- Slider3 -->
			<div class="slider3">
				<ul class="rslides" id="slider3">
					<li>
						<img src="images/follow-1.png" alt="Hitech Info">
						<p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit. Lorem ipsum dolor sit amet, consectetur adipi.</p>
						<a href="#">Follow Us : @example_company</a>
					</li>
					<li>
						<img src="images/follow-2.png" alt="Hitech Info">
						<p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit. Lorem ipsum dolor sit amet, consectetur adipi.</p>
						<a href="#">Follow Us : @example_company</a>
					</li>
					<li>
						<img src="images/follow-3.png" alt="Hitech Info">
						<p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit. Lorem ipsum dolor sit amet, consectetur adipi.</p>
						<a href="#">Follow Us : @example_company</a>
					</li>
					<li>
						<img src="images/follow-4.png" alt="Hitech Info">
						<p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit. Lorem ipsum dolor sit amet, consectetur adipi.</p>
						<a href="#">Follow Us : @example_company</a>
					</li>
					<li>
						<img src="images/follow-5.png" alt="Hitech Info">
						<p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit. Lorem ipsum dolor sit amet, consectetur adipi.</p>
						<a href="#">Follow Us : @example_company</a>
					</li>
				</ul>
			</div>
			<!-- //Slider3 -->
			
		</div>
	</div>
	<!-- //Follow -->



	<!-- Social -->
	<div class="social">

		<p>Follow Us On</p>

		<!-- Social-Icons -->
		<ul class="social-icons">
			<li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
			<li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
			<li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
			<li><a href="#" class="instagram" title="Go to Our Instagram Account"></a></li>
			<li><a href="#" class="youtube" title="Go to Our Youtube Channel"></a></li>
		</ul>
		<!-- //Social-Icons -->

	</div>
	<!-- //Social -->



	<!-- Copyright -->
	<div class="copyright">
		<p>&copy; 2016 Hitech Info. All Rights Reserved.</p>
	</div>
	<!-- //Copyright -->



	<!-- Custom-JavaScript-File-Links -->
		<!-- Slider-JavaScript -->
			<script src="js/responsiveslides.min.js"></script>
			<script>
				jQuery(function ($) {
					$("#slider1, #slider2, #slider3").responsiveSlides({
						auto: true,
						nav: true,
						speed: 1500,
						namespace: "callbacks",
						pager: true,
					});
				});
			</script>
		<!-- //Slider-JavaScript -->

		<!-- Sliding-Menu-JavaScript -->
			<script src="js/ytmenu.js"></script>
		<!-- //Sliding-Menu-JavaScript -->

		<!-- Skills-Bar-Animation-JavaScript -->
			<script type="text/javascript" src="js/jquery.inview.min.js"></script>
			<script type="text/javascript" src="js/wow.min.js"></script>
			<script type="text/javascript" src="js/mousescroll.js"></script>
			<script type="text/javascript" src="js/main.js"></script>
		<!-- //Skills-Animation-JavaScript -->

		<!-- Pricing-Popup-Box-JavaScript -->
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<script>
				$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});
				});
			</script>
		<!-- //Pricing-Popup-Box-JavaScript -->

		<!-- Projects-Popup-Box-JavaScript -->
			<script src="js/modernizr.custom.97074.js"></script>
			<script src="js/jquery.chocolat.js"></script>
			<script type="text/javascript">
				$(function() {
					$('.gallery-item a').Chocolat();
				});
			</script>
		<!-- //Projects-Popup-Box-JavaScript -->

		<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
			<script type="text/javascript">
				$(document).ready(function() {
					var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 100,
						easingType: 'linear'
					};
					$().UItoTop({ easingType: 'easeOutQuart' });
				});
			</script>
			<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
		<!-- //Slide-To-Top JavaScript -->

		<!-- Smooth-Scrolling-JavaScript -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll, .navbar li a, .footer li a").click(function(event){
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
			</script>
		<!-- //Smooth-Scrolling-JavaScript -->

	<!-- //Custom-JavaScript-File-Links -->

@endsection