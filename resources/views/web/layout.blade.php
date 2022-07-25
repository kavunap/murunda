<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="murunda hospital, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
	<meta name="author" content="murundahospital.com">
	<meta name="format-detection" content="telephone=no">
	<title>Murunda Hospital(Rutsiro district)</title>
	<!-- Stylesheets -->
	<link href="{{ asset('web/vendor/slick/slick.css') }}" rel="stylesheet">
	<link href="{{ asset('web/vendor/animate/animate.min.css') }}" rel="stylesheet">
	<link href="{{ asset('web/icons/style.css') }}" rel="stylesheet">
	<link href="{{ asset('web/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('web/css/style.css') }}" rel="stylesheet">
	<!--Favicon-->
	<link rel="icon" href="{{ asset('web/images/favicon.png') }}" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>
</head>

<body class="shop-page layout-landing">
<!--header-->
<header class="header">
	<div class="header-quickLinks js-header-quickLinks d-lg-none">
		<div class="quickLinks-top js-quickLinks-top"></div>
		<div class="js-quickLinks-wrap-m">
		</div>
	</div>
	<div class="header-topline d-none d-lg-flex">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-auto d-flex align-items-center">
					<div class="header-info"><i class="icon-placeholder2"></i>Murunda Hospital Rutsiro District </div>
					<div class="header-phone"><i class="icon-telephone"></i><a href="tel:078....">+250 788 501 658 </a></div>
					<div class="header-info"><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">murundahospital@gmail.com</a></div>
				</div>
				<div class="col-auto ml-auto d-flex align-items-center">
						<span class="header-social">
                            
							<a href="#" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<a href="#" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<a href="#" class="hovicon"><i class="icon-google-plus-circle"></i></a>
							@if (Auth::check())
							 <a href="/logout" class="hovicon">Logout</a>&emsp;
							 <a href="/admin" class="hovicon">Dashboard</a>
							@else
                            <a href="/login" class="hovicon">Login</a>
							@endif
						</span>
				</div>
			</div>
		</div>
	</div>
	<div class="header-content">
		<div class="container">
			<div class="row align-items-lg-center">
				<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
					<span class="icon-menu"></span>
				</button>
				<div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
					<a href="/" class="header-logo"><img src="web/images/murundalogo.jpg" alt="Murunda hospital" class=""></a>
				</div>
				<div class="col-lg ml-auto header-nav-wrap">
					<div class="header-nav js-header-nav">
						<nav class="navbar navbar-expand-lg btco-hover-menu">
							<div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link link-inside" href="#aboutSection">About Us</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-inside" href="#departmentsSection">Departments</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-inside" href="#servicesSection">Services</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-inside" href="#faqSection">FAQ</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-inside" href="#specialistsSection">Specialists</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-inside" href="#testimonialsSection">Testimonials</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-inside" href="#eventsSection">Events</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-inside" href="#contactSection">Contacts</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
					<div class="header-search">
						<form action="#" class="form-inline">
							<i class="icon-search"></i>
							<input type="text" placeholder="Search">
							<button type="submit"><i class="icon-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--//header-->
<div class="page-content">
	<!--section slider-->
	<div class="section mt-0">
		<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
			<div class="quickLinks js-quickLinks closed">
				<div class="container">
					<div class="row no-gutters">
						<div class="col">
							<a href="#" class="link">
								<i class="icon-placeholder"></i><span>Location</span></a>
							<div class="link-drop p-0">
								<div id="googleMapDrop" class="google-map"></div>
							</div>
						</div>
						<div class="col">
							<a href="#" class="link">
								<i class="icon-clock"></i><span>Working Time</span>
							</a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-clock"></i>Working Time</h5>
								<table class="row-table">
									<tr>
										<td><i>Mon-Thu</i></td>
										<td>08:00 - 20:00</td>
									</tr>
									<tr>
										<td><i>Friday</i></td>
										<td> 07:00 - 22:00</td>
									</tr>
									<tr>
										<td><i>Saturday</i></td>
										<td>08:00 - 18:00</td>
									</tr>
									<tr>
										<td><i>Sunday</i></td>
										<td>Closed</td>
									</tr>
								</table>
							</div>
						</div>
						
						<div class="col">
							<a href="#" class="link">
								<i class="icon-pencil-writing"></i><span>Request Form</span>
							</a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-pencil-writing"></i>Request Form</h5>
								<form id="requestForm" method="post" novalidate>
									<div class="successform">
										<p>Your message was sent successfully!</p>
									</div>
									<div class="errorform">
										<p>Something went wrong, try refreshing and submitting the form again.</p>
									</div>
									<div class="input-group">
											<span>
											<i class="icon-user"></i>
										</span>
										<input name="requestname" type="text" class="form-control" placeholder="Your Name"/>
									</div>
									<div class="row row-sm-space mt-1">
										<div class="col">
											<div class="input-group">
													<span>
													<i class="icon-email2"></i>
												</span>
												<input name="requestemail" type="text" class="form-control" placeholder="Your Email"/>
											</div>
										</div>
										<div class="col">
											<div class="input-group">
													<span>
													<i class="icon-smartphone"></i>
												</span>
												<input name="requestphone" type="text" class="form-control" placeholder="Your Phone"/>
											</div>
										</div>
									</div>
									<div class="selectWrapper input-group mt-1">
											<span>
											<i class="icon-tooth"></i>
										</span>
										<select name="requestservice" class="form-control">
											<option selected="selected" disabled="disabled">Select Service</option>
											<option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
											<option value="General Dentistry">General Dentistry</option>
											<option value="Orthodontics">Orthodontics</option>
											<option value="Children`s Dentistry">Children`s Dentistry</option>
											<option value="Dental Implants">Dental Implants</option>
											<option value="Dental Emergency">Dental Emergency</option>
										</select>
									</div>
									<div class="row row-sm-space mt-1">
										<div class="col-sm-6">
											<div class="input-group flex-nowrap">
													<span>
														<i class="icon-calendar2"></i>
													</span>
												<div class="datepicker-wrap">
													<input name="requestdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
												</div>
											</div>
										</div>
										<div class="col-sm-6 mt-1 mt-sm-0">
											<div class="input-group flex-nowrap">
													<span>
															<i class="icon-clock"></i>
													</span>
												<div class="datepicker-wrap">
													<input name="requesttime" type="text" class="form-control timepicker" placeholder="Time" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="text-right mt-2">
										<button type="submit" class="btn btn-sm btn-hover-fill">Request</button>
									</div>
								</form>
							</div>
						</div>
						<div class="col">
							<a href="#" class="link">
								<i class="icon-calendar"></i><span>Doctors Timetable</span>
							</a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-calendar"></i>Doctors Timetable</h5>
								<p>This simply works as a guide and helps you to connect with dentists of your choice. Please confirm the doctor’s availability before leaving your premises.</p>
								<p class="text-right"><a href="#specialistsSection" class="btn btn-sm btn-hover-fill link-inside">Details</a></p>
							</div>
						</div>
						<div class="col">
							<a href="#" class="link">
								<i class="icon-price-tag"></i><span>Calculator</span>
							</a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-price-tag"></i>Quick Pricing</h5>
								<table class="row-table">
									<tr>
										<td>Initial Consultation</td>
										<td>$10</td>
									</tr>
									<tr>
										<td>Dental check-up</td>
										<td>$15</td>
									</tr>
									<tr>
										<td>Routine Exam (no xrays)</td>
										<td>$50</td>
									</tr>
									<tr>
										<td>Simple Removal of a tooth</td>
										<td>$122</td>
									</tr>
									<tr>
										<td>Teeth cleaning</td>
										<td>$50 - $75</td>
									</tr>
									<tr>
										<td>X-ray image</td>
										<td>$10</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="col">
							<a href="#" class="link">
								<i class="icon-emergency-call"></i><span>Emergency Case</span></a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-emergency-call"></i>Emergency Case</h5>
								<p>Emergency dental care may be needed if you have had a blow to the face, lost a filling, or cracked a tooth. </p>
								<ul class="icn-list">
									<li><i class="icon-telephone"></i><span class="phone">1-800-267-0000<br>1-800-267-0001</span>
									</li>
									<li><i class="icon-black-envelope"></i><a href="mailto:info@besthotel-email.com">info@besthotel-email.com</a></li>
								</ul>
								<p class="text-right mt-2"><a href="#contactForm" class="btn btn-sm btn-hover-fill link-inside">Our Contacts</a></p>
							</div>
						</div>
						<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top" data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
					</div>
				</div>
				<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left" title="Open panel">+</span></div>
			</div>
		</div>
		<div id="mainSliderWrapper">
			<div class="loading-content">
				<div class="inner-circles-loader"></div>
			</div>
			<div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": true}'>
				<div class="slide">
					<div class="img--holder" data-bg="{{ asset('web/images/murunda.jpg') }}"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<div class="container">
									<div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">Quality Healthcare.<br>
										<b>Accessible to Everyone.</b></div>
									<div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">Your good health is our greatest achievement</div>
									<div class="slide-btn"><a href="#aboutSection" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Explore our services</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="img--holder" data-bg="{{ asset('web/images/ambulance.jpg') }}"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<div class="container">
									<div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">We Provide
										<br><b>Full Medical Care!</b></div>
									<div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">Highest standards of customer service</div>
									<div class="slide-btn"><a href="#servicesSection" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="img--holder" data-bg="{{ asset('web/images/murunda2.jpg') }}"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<div class="container">
									<div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">We Provide
										<br><b>Full Medical Care!</b></div>
									<div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">Highest standards of customer service</div>
									<div class="slide-btn"><a href="#faqSection" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section slider-->
	<!--section-->
	<div class="section mt-0 shadow-bot pt-2 pb-0 py-sm-4 mb-2">
		<div class="container">
			<div class="row js-icn-text-alt-carousel">
				<div class="col-md-6 col-lg-4">
					<div class="icn-text-alt">
						<div class="icn-text-alt-icn"><i class="icon-first-aid-kit"></i></div>
						<div>
							<h4 class="icn-text-alt-title">24 Hour Emergency</h4>
							<p>Open round the clock for convenience, quick and easy access</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="icn-text-alt">
						<div class="icn-text-alt-icn"><i class="icon-flask"></i></div>
						<div>
							<h4 class="icn-text-alt-title">Complete Lab Services</h4>
							<p>Cost-efficient, comprehensive and clinical laboratory services</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="icn-text-alt">
						<div class="icn-text-alt-icn"><i class="icon-doctor"></i></div>
						<div>
							<h4 class="icn-text-alt-title">Medical Professionals</h4>
							<p>Qualified and certified physicians for quality medical care</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section about-->
	<div class="section" id="aboutSection">
		<div class="container pt-lg-2">
			<div class="row mt-2 mt-md-3 mt-lg-0">
				<div class="col-md-6">
					<div class="title-wrap text-center text-md-left">
						<div class="h-sub">25 Years of Medical Excellence</div>
						<h2 class="h1">The Heart and Science <span class="theme-color">of Medicine</span></h2>
					</div>
					<div class="pr-xl-1">
						<p>We help your body restore itself by harnessing your own healing potential with a variety of techniques to combat areas of disease, injury or inflammation. This process involves a variety of techniques including a minimally invasive procedure conducted right in our clinic.</p>
						<ul class="marker-list-md">
							<li>Equipped for all stages of care, from prevention to rehabilitation</li>
							<li>Quality assessment program helps ensure smooth, effective operation</li>
							<li>Prepared to treat a high volume of trauma patients 24/7</li>
						</ul>
					</div>
					<div class="text-center text-md-left mt-2 mt-md-3">
						<a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">Booking a visit<i class="icon-right-arrow"></i></a>
					</div>
				</div>
				<div class="col-md-6 mt-4 mt-md-0">
					<div class="video-box">
						<div class="video-box-poster">
							<img src="{{ asset('web/images/murunda2.jpg') }}" alt="" class="img-fluid">
						</div>
						<a href="#" class="video-btn js-video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/uyWt48mWmz0" data-target="#videoModal">
							<span>Watch Video</span>
							<span><i class="icon-play"></i></span>
						</a>
						<div class="video-box-bg"><img src="{{ asset('web/images/murunda2.jpg') }}" alt=""></div>
					</div>
					<!-- Video Modal -->
					<div class="modal fade" id="videoModal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item video" src="" allowscriptaccess="always" allow="autoplay"></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section about-->
	<!--section departments-->
	<div class="section" id="departmentsSection">
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1">Our Departments</h2>
				<div class="h-decor"></div>
			</div>
			<p class="text-center max-500">MedEra Medical Center specializes in different medical services for the convenience of community:</p>
			<div class="row mt-lg-4">
				<div class="col-lg-8 col-xl-9">
					<div class="department-tabs js-department-tabs d-none d-sm-flex">
						<div class="department-tab active">
							<div class="department-tab-icon"><i class="icon-brain"></i></div>
							<div class="department-tab-text">Psychiatry</div>
						</div>
						<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-lab"></i></div>
							<div class="department-tab-text">Laboratory</div>
						</div>
						<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-dental"></i></div>
							<div class="department-tab-text">Dental Medicine</div>
						</div>
						<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-cardiology"></i></div>
							<div class="department-tab-text">Cardiology</div>
						</div>
						<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-gynecology"></i></div>
							<div class="department-tab-text">Gynecology</div>
						</div>
						<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-medicine"></i></div>
							<div class="department-tab-text">Medicine</div>
						</div>
						<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-traumatology"></i></div>
							<div class="department-tab-text">Traumatology</div>
						</div>
						<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-pediatrics"></i></div>
							<div class="department-tab-text">Pediatrics</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-3">
					<div class="department-carousel js-department-carousel">
						<div class="department-item">
							<h3 data-title="Psychiatry"><span>Psychiatry</span></h3>
							<div class="department-tab">
								<div class="department-tab-icon"><i class="icon-brain"></i></div>
								<div class="department-tab-text">Psychiatry</div>
							</div>
							<p>We provide a comprehensive continuum of mental health and substance abuse services that include both inpatient an ambulatory services with varying levels of intensity.</p>
							<p>The treatment programs are designed to meet the needs of dual diagnosis.</p>
						</div>
						<div class="department-item">
							<h3 data-title="Laboratory"><span>Laboratory</span></h3>
							<div class="department-tab">
								<div class="department-tab-icon"><i class="icon-lab"></i></div>
								<div class="department-tab-text">Laboratory</div>
							</div>
							<p>The laboratory has a superior record of high quality performance and is dedicated to provide accurate, timely and cost effective service to our clinicians, their patients and community at large. </p>
							<p>Our Laboratory operates 24 hours a day, seven days a week, providing excellent turn-around times. </p>
						</div>
						<div class="department-item">
							<h3 data-title="Dental Medicine"><span>Dental Medicine</span></h3>
							<div class="department-tab">
								<div class="department-tab-icon"><i class="icon-dental"></i></div>
								<div class="department-tab-text">Dental Medicine</div>
							</div>
							<p>The Department of Dental Medicine offers comprehensive dental, oral surgery and oral health services in the state of the art, modern facility. </p>
							<p>Children and adults are cared for by general and pediatric dentist and Board Certified specialists from the more complex procedures. </p>
						</div>
						<div class="department-item">
							<h3 data-title="Cardiology"><span>Cardiology</span></h3>
							<div class="department-tab">
								<div class="department-tab-icon"><i class="icon-cardiology"></i></div>
								<div class="department-tab-text">Cardiology</div>
							</div>
							<p>The Cardiology Department performs all non-invasive cardiac diagnostic procedures.</p>
							<p>The biggest area of heart disease treated is coronary artery disease e.g. angina. Also treated are abnormal heart rhythms, heart failure, high blood pressure and some rarer conditions.</p>
						</div>
						<div class="department-item">
							<h3 data-title="Gynecology"><span>Gynecology</span></h3>
							<div class="department-tab">
								<div class="department-tab-icon"><i class="icon-gynecology"></i></div>
								<div class="department-tab-text">Gynecology</div>
							</div>
							<p>The Department of Gynecology provides a comprehensive array of services from adolescence through, and beyond menopause. </p>
							<p>Surgical procedures for emergency and other gynecological conditions are being provided by experienced physicians committed to the welfare of the female population.</p>
						</div>
						<div class="department-item">
							<h3 data-title="Medicine"><span>Medicine</span></h3>
							<div class="department-tab">
								<div class="department-tab-icon"><i class="icon-medicine"></i></div>
								<div class="department-tab-text">Medicine</div>
							</div>
							<p>The Department has a large Internal Medicine residency program and sub-specialty whose Residents and Fellows under the close supervision of our skilled Attending Physicians work together to provide comprehensive, up to date, and effective patient care based on the physicians' extensive medical knowledge and clinical experience.</p>
						</div>
						<div class="department-item">
							<h3 data-title="Traumatology"><span>Traumatology</span></h3>
							<div class="department-tab">
								<div class="department-tab-icon"><i class="icon-traumatology"></i></div>
								<div class="department-tab-text">Traumatology</div>
							</div>
							<p>Our department deals with initial treatment as well as further surgical treatment of accident victims and polytrauma patients. Every member of the team contributes to the continuum of quality trauma care.</p>
							<p>In addition to treating adults, we provide complex service in the treatment of pediatric patients.</p>
						</div>
						<div class="department-item">
							<h3 data-title="Pediatrics"><span>Pediatrics</span></h3>
							<div class="department-tab">
								<div class="department-tab-icon"><i class="icon-pediatrics"></i></div>
								<div class="department-tab-text">Pediatrics</div>
							</div>
							<p>In addition to treating adults, we provide complex service in the treatment of pediatric patients.</p>
							<p>Our department deals with initial treatment as well as further surgical treatment of accident victims and polytrauma patients. Every member of the team contributes to the continuum of quality trauma care.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section  departments-->
	<!--section-->
	<div class="section">
		<div class="container-fluid px-0 text-image-block">
			<div class="row no-gutters">
				<div class="col-md-6 image-col"><img src="{{ asset('web/images/murunda2.jpg') }}" alt=""></div>
				<div class="col-md-6 text-col">
					<div class="title-wrap">
						<div class="h-sub theme-color">See the Difference</div>
						<h2 class="h1" data-title="Why Choose Us?"><span>Why Choose Us?</span></h2>
					</div>
					<div class="mt-2 mt-lg-4"></div>
					<ul class="numbered-list-xl">
						<li data-num='01.'>
							<h5>Patient-Centred</h5>
							While our team brings important experience and knowledge, we know that each patient is the expert in their own life.
						</li>
						<li data-num='02.'>
							<h5>Comprehensive</h5>
							We offer comprehensive health care focusing on the whole person, at all ages and stages of life.
						</li>
						<li data-num='03.'>
							<h5>Patient-Centred</h5>
							We have flexible hours and are open on certain evenings and during the weekend, to accommodate your schedule.
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section services-->
	<div class="section" id="servicesSection">
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1">Our Services</h2>
				<div class="h-decor"></div>
			</div>
			<div class="row js-service-card-style2-carousel">
				<div class="col-md-6 col-lg-4">
					<div class="service-card-style2">
						<div class="service-card-icon">
							<i class="icon-doctor"></i>
						</div>
						<h5 class="service-card-name">Primary Care Physicia</h5>
						<p>MedAll Centre provides the following healthcare services:</p>
						<ul class="marker-list-md">
							<li>Complete Family Health Care</li>
							<li>EKG</li>
							<li>X-Ray</li>
							<li>Ultrasound</li>
							<li>Acute and Chronic Care</li>
							<li>Well Woman’s Exam</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="service-card-style2">
						<div class="service-card-icon">
							<i class="icon-genetics"></i>
						</div>
						<h5 class="service-card-name">Allergy and Immunology</h5>
						<p>You should feel your best no matter the season. </p>
						<ul class="marker-list-md">
							<li>Allergy and Immunology Conditions</li>
							<li>Testing for Allergy and Immunology</li>
							<li>Allergy and Immunology Treatments</li>
							<li>Asthma Care</li>
							<li>Dermatology</li>
							<li>Pediatric Allergy and Immunology</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="service-card-style2">
						<div class="service-card-icon">
							<i class="icon-farmalogy"></i>
						</div>
						<h5 class="service-card-name">Holistic Wellness</h5>
						<p>A lifestyle of holistic wellness rewards you with enhanced health</p>
						<ul class="marker-list-md">
							<li>Weight loss</li>
							<li>Therapeutic Medical Massage</li>
							<li>Holistic Skin Care</li>
							<li>K-laser Pain Management</li>
							<li>Ayurveda & Detoxification</li>
							<li>Hormone Replacement Therapy</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section services-->
	<!--section faq-->
	<div class="section bg-grey py-0" id="faqSection">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-xl-6 order-2 order-xl-1">
					<div class="faq-wrap px-15 px-lg-8">
						<div class="title-wrap">
							<h2 class="h1">Patient Information</h2>
						</div>
						<div class="mt-2 mt-lg-4"></div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="true"><span>1.</span><span>How do I make an appointment?</span></a>
							<div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
								<div>
									<p>If you would like to make an appointment with one of our practitioners, please contact our reception staff. Alternatively you may book your appointments online. Every effort will be made to accommodate your preferred time and choice of practitioner. </p>
								</div>
							</div>
						</div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span>2.</span><span>How do I get a copy of my records to another provider? </span></a>
							<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
								<div>
									<p>
										Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
									</p>
								</div>
							</div>
						</div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3" aria-expanded="false" class="collapsed"><span>3.</span><span>Is there a charge for copies of my medical record? </span></a>
							<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
								<div>
									<p>
										Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
									</p>
								</div>
							</div>
						</div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem4" aria-expanded="false" class="collapsed"><span>4.</span><span>How do I assure that my person I designate has access to my medical records? </span></a>
							<div id="faqItem4" class="collapse faq-item-content" role="tabpanel">
								<div>
									<p>
										Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
									</p>
								</div>
							</div>
						</div>
						<a href="#" class="btn mt-15 mt-sm-3" data-toggle="modal" data-target="#modalQuestionForm"><i class="icon-right-arrow"></i><span>Ask Question</span><i class="icon-right-arrow"></i></a>
					</div>
				</div>
				<div class="col-xl-6 banner-left bg-cover order-1 order-xl-2" style="background-image: url(images/content/banner-left.jpg)"></div>
			</div>
		</div>
	</div>
	<!--//section faq-->
	<!--section specialists-->
	<div class="section" id="specialistsSection">
		<div class="container">
			<div class="title-wrap text-center">
				<div class="h-sub theme-color">Meet the Team</div>
				<h1>Our Specialists</h1>
				<div class="h-decor"></div>
			</div>
			<p class="text-center max-600">We offer highly specialised medical care, on one site, from some of the foremost national and international specialists in their fields of medicine.</p>
			<form class="filterCarousel">
				<div class="selectWrapper input-group">
					<select class="form-control">
						<option value="all">All</option>
						<option value=".category1">Psychiatrist</option>
						<option value=".category2">Cardiolog</option>
					</select>
				</div>
			</form>
			<div class="row specialist-carousel js-specialist-carousel">
				<div class="col-sm-6 col-md-4 category1">
					<div class="doctor-box doctor-box-style2 text-center">
						<div class="doctor-box-photo">
							<img src="{{ asset('web/images/murunda2.jpg') }}" class="img-fluid" alt="">
						</div>
						<div class="doctor-box-top">
							<h5 class="doctor-box-name">Dr. William Gardner</h5>
							<div class="doctor-box-position">Psychiatrist</div>
						</div>
						<ul class="doctor-box-shedule">
							<li><span>Mon-Thu</span><span>08:00 - 20:00</span></li>
							<li><span>Friday</span><span>07:00 - 22:00</span></li>
							<li><span>Saturday</span><span>08:00 - 18:00</span></li>
						</ul>
						<div class="doctor-box-booking">
							<a href="#" data-toggle="modal" data-target="#modalBookingForm">Booking a visit <i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 category2">
					<div class="doctor-box doctor-box-style2 text-center">
						<div class="doctor-box-photo">
							<img src="{{ asset('web/images/murunda2.jpg') }}" class="img-fluid" alt="">
						</div>
						<div class="doctor-box-top">
							<h5 class="doctor-box-name">Dr. Terri Williams</h5>
							<div class="doctor-box-position">Cardiolog</div>
						</div>
						<ul class="doctor-box-shedule">
							<li><span>Mon-Thu</span><span>08:00 - 20:00</span></li>
							<li><span>Friday</span><span>07:00 - 22:00</span></li>
							<li><span>Saturday</span><span>08:00 - 18:00</span></li>
						</ul>
						<div class="doctor-box-booking">
							<a href="#" data-toggle="modal" data-target="#modalBookingForm">Booking a visit <i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 category2">
					<div class="doctor-box doctor-box-style2 text-center">
						<div class="doctor-box-photo">
							<img src="{{ asset('web/images/murunda2.jpg') }}" class="img-fluid" alt="">
						</div>
						<div class="doctor-box-top">
							<h5 class="doctor-box-name">Dr. Robert Rush</h5>
							<div class="doctor-box-position">Cardiolog</div>
						</div>
						<ul class="doctor-box-shedule">
							<li><span>Mon-Thu</span><span>08:00 - 20:00</span></li>
							<li><span>Friday</span><span>07:00 - 22:00</span></li>
							<li><span>Saturday</span><span>08:00 - 18:00</span></li>
						</ul>
						<div class="doctor-box-booking">
							<a href="#" data-toggle="modal" data-target="#modalBookingForm">Booking a visit <i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 category1">
					<div class="doctor-box doctor-box-style2 text-center">
						<div class="doctor-box-photo">
							<img src="{{ asset('web/images/murunda2.jpg') }}" class="img-fluid" alt="">
						</div>
						<div class="doctor-box-top">
							<h5 class="doctor-box-name">Dr. Robert Rush</h5>
							<div class="doctor-box-position">Psychiatrist</div>
						</div>
						<ul class="doctor-box-shedule">
							<li><span>Mon-Thu</span><span>08:00 - 20:00</span></li>
							<li><span>Friday</span><span>07:00 - 22:00</span></li>
							<li><span>Saturday</span><span>08:00 - 18:00</span></li>
						</ul>
						<div class="doctor-box-booking">
							<a href="#" data-toggle="modal" data-target="#modalBookingForm">Booking a visit <i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 category1">
					<div class="doctor-box doctor-box-style2 text-center">
						<div class="doctor-box-photo">
							<img src="{{ asset('web/images/murunda2.jpg') }}" class="img-fluid" alt="">
						</div>
						<div class="doctor-box-top">
							<h5 class="doctor-box-name">Dr. Terri Williams</h5>
							<div class="doctor-box-position">Psychiatrist</div>
						</div>
						<ul class="doctor-box-shedule">
							<li><span>Mon-Thu</span><span>08:00 - 20:00</span></li>
							<li><span>Friday</span><span>07:00 - 22:00</span></li>
							<li><span>Saturday</span><span>08:00 - 18:00</span></li>
						</ul>
						<div class="doctor-box-booking">
							<a href="#" data-toggle="modal" data-target="#modalBookingForm">Booking a visit <i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 category2">
					<div class="doctor-box doctor-box-style2 text-center">
						<div class="doctor-box-photo">
							<img src="{{ asset('web/images/murunda2.jpg') }}" class="img-fluid" alt="">
						</div>
						<div class="doctor-box-top">
							<h5 class="doctor-box-name">Dr. Berry Gardner</a></h5>
							<div class="doctor-box-position">Cardiolog</div>
						</div>
						<ul class="doctor-box-shedule">
							<li><span>Mon-Thu</span><span>08:00 - 20:00</span></li>
							<li><span>Friday</span><span>07:00 - 22:00</span></li>
							<li><span>Saturday</span><span>08:00 - 18:00</span></li>
						</ul>
						<div class="doctor-box-booking">
							<a href="#" data-toggle="modal" data-target="#modalBookingForm">Booking a visit <i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section specialists-->
	<!--section testimonials-->
	<div class="section py-0" id="testimonialsSection">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-sm-6 order-1 bg-cover" style="background-image: url('images/content/reviews-bg.jpg');">
					<div class="reviews-wrap reviews-style2 d-flex flex-column justify-content-center">
						<div class="js-reviews-carousel reviews-carousel">
							<div class="review">
								<p class="review-text">I would like to give you a special 'Thank You' to all of you for the care you've given. You were special to a part of our lives for the year we knew you all. You were very caring. Nurses like you are never forgotten. I just can't thank you enough.</p>
								<p><span class="review-author">- Joseph Dunbar,</span> <span class="review-author-position">Carpenter</span></p>
							</div>
							<div class="review">
								<p class="review-text">Today is my last day of infusion. But I know I will be back …not as a patient but a visitor. I have only positive things to say about the nurses at MedEra here in infusion and also on the 4th Floor. They all called me by my name when I walked in the …</p>
								<p><span class="review-author">- Steven Roa,</span> <span class="review-author-position">Businesswoman</span></p>
							</div>
							<div class="review">
								<p class="review-text">Am very impressed with you all as well as being highly proficient is absolutely adorable. I feel so relaxed in her capable hands and hope to be her patient for a very long time! You are a fantastic team and I feel very privileged to come to you all!!!</p>
								<p><span class="review-author">- Wilmer Stevenson,</span> <span class="review-author-position">Creative manager</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 order-0 reviews-photo">
					<img src="{{ asset('web/images/murunda2.jpg') }}" alt="">
				</div>
			</div>
		</div>
	</div>
	<!--//section testimonials-->
	<!--section events-->
	<div class="section" id="eventsSection">
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1">Clinic Events</h2>
				<div class="h-decor"></div>
			</div>
			<div class="row blog-grid-full blog-grid-carousel-full js-blog-grid-carousel-full mt-lg-3">
				<div class="col-md-6 col-lg-4">
					<div class="blog-post blog-post-style2">
						<div class="post-image">
							<img src="{{ asset('web/images/murunda2.jpg') }}" alt="">
						</div>
						<h2 class="post-title">Rice and obesity: Is there a link?</h2>
						<div class="post-teaser">After controlling for a wide range of factors, the team found that the results remained significant.</div>
						<div class="post-date-inline">17 january, 2019</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="blog-post blog-post-style2">
						<div class="post-image">
							<img src="{{ asset('web/images/murunda2.jpg') }}" alt="">
						</div>
						<h2 class="post-title">Blood test may predict cardiovascular disease</h2>
						<div class="post-teaser">New research suggests that a simple blood test, which doctors currently use to diagnose heart attacks, may.</div>
						<div class="post-date-inline">22 february, 2019</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="blog-post blog-post-style2">
						<div class="post-image">
							<img src="{{ asset('web/images/murunda2.jpg') }}" alt="">
						</div>
						<h2 class="post-title">What to know about pimples on the arms</h2>
						<div class="post-teaser">Many things, including infections and blocked pores, can cause a person to develop pimples on the arms.</div>
						<div class="post-date-inline">17 january, 2019</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="blog-post blog-post-style2">
						<div class="post-image">
							<img src="{{ asset('web/images/murunda2.jpg') }}" alt="">
						</div>
						<h2 class="post-title">Rice and obesity: Is there a link?</h2>
						<div class="post-teaser">After controlling for a wide range of factors, the team found that the results remained significant.</div>
						<div class="post-date-inline">5 march, 2019</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="blog-post blog-post-style2">
						<div class="post-image">
							<img src="{{ asset('web/images/murunda2.jpg') }}" alt="">
						</div>
						<h2 class="post-title">Blood test may predict cardiovascular disease</h2>
						<div class="post-teaser">New research suggests that a simple blood test, which doctors currently use to diagnose heart attacks, may.</div>
						<div class="post-date-inline">22 february, 2019</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="blog-post blog-post-style2">
						<div class="post-image">
							<img src="{{ asset('web/images/murunda2.jpg') }}" alt="">
						</div>
						<h2 class="post-title">What to know about pimples on the arms</h2>
						<div class="post-teaser">Many things, including infections and blocked pores, can cause a person to develop pimples on the arms.</div>
						<div class="post-date-inline">17 january, 2019</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section events-->
	<!--section online appointment-->
	<div class="section">
		<div class="container-fluid px-0">
			<div class="block-full-appointment bg-cover" style="background-image: url({{ asset('web/images/hospital2.jpeg') }})">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="box-progress">
								<div class="box-progress-number">150<sup>K</sup></div>
								<div class="box-progress-text"><h5>Cured Patients</h5>
									<p>For over 15 years, we have delighted our customers and provide them with the necessary services.</p></div>
							</div>
							<div class="box-progress">
								<div class="box-progress-number">100<sup>%</sup></div>
								<div class="box-progress-text"><h5>Happy Clients</h5>
									<p>Absolutely all our clients are ready to assure you of the high quality of our services.</p></div>
							</div>
						</div>
						<div class="col-sm-6 mt-5 mt-md-0 text-center text-md-right">
							<h2 class="text1">Online Appointments<br>
								and Prescriptions</h2>
							<div class="text2">You can now book a limited amount of doctors’ appointments online</div>
							<a href="#" class="btn mt-2 mt-sm-3 mt-lg-4" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>Request an appointment</span><i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section online appointment-->
	<!--section contact-->
	<div class="section" id="contactSection">
		<div class="banner-contact-us" style="background-image: url({{ asset('web/images/hospital.jpeg') }})">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-sm-6 col-lg-6 order-2 order-sm-1 mt-3 mt-md-0 text-center text-md-right d-flex align-items-end">
						<img src="images/content/banner-callus.png" alt="" class="shift-left">
					</div>
					<div class="col-sm-6 col-lg-6 order-1 order-sm-2 d-flex">
						<div class="pt-2 pt-lg-6">
							<h2 data-title="Looking for a Certified Doctor?"><span>Looking for <br class="d-lg-none"> a <span class="theme-color">Certified Doctor?</span></span></h2>
							<p>We believe in providing the best possible care to all our existing patients and welcome new patients to sample.</p>
							<form class="contact-form" id="contactForm" method="post" novalidate="novalidate">
								<div class="successform">
									<p>Your message was sent successfully!</p>
								</div>
								<div class="errorform">
									<p>Something went wrong, try refreshing and submitting the form again.</p>
								</div>
								<div>
									<input type="text" class="form-control" name="name" placeholder="Your name*">
								</div>
								<div class="row row-sm-space mt-15">
									<div class="col-sm-6"><input type="text" class="form-control" name="phone" placeholder="Your Phone"></div>
									<div class="col-sm-6 mt-15 mt-sm-0"><input type="text" class="form-control" name="email" placeholder="Email*"></div>
								</div>
								<div class="mt-15">
									<textarea class="form-control" name="message" placeholder="Message"></textarea>
								</div>
								<div class="mt-2 mt-lg-4 text-center text-md-left">
									<button type="submit" class="btn"><i class="icon-right-arrow"></i><span>Send request</span><i class="icon-right-arrow"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section contact-->
</div>
<!--footer-->
<div class="footer mt-0">
	<div class="container">
		<div class="row py-1 py-md-2 px-lg-0">
			<div class="col-lg-4 footer-col1">
				<div class="row flex-column flex-md-row flex-lg-column">
					<div class="col-md col-lg-auto">
						<div class="footer-logo">
							<img src="images/footer-logo.png" alt="" class="img-fluid">
						</div>
						<div class="mt-2 mt-lg-0"></div>
						<div class="footer-social d-none d-md-block d-lg-none">
							<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
							<a href="https://www.twitter.com/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
							<a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
							<a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
						</div>
					</div>
					<div class="col-md">
						<div class="footer-text mt-1 mt-lg-2">
							<p>To receive email releases, simply provide
								<br>us with your email below</p>
							<form action="#" class="footer-subscribe">
								<div class="input-group">
									<input name="subscribe_mail" type="text" class="form-control" placeholder="Your Email"/>
									<span><i class="icon-black-envelope"></i></span>
								</div>
							</form>
						</div>
						<div class="footer-social d-md-none d-lg-block">
							<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
							<a href="https://www.twitter.com/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
							<a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
							<a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<h3>Blog Posts</h3>
				<div class="h-decor"></div>
				<div class="footer-post d-flex">
					<div class="footer-post-photo"><img src="images/content/footer-post-author-03.jpg" alt="" class="img-fluid"></div>
					<div class="footer-post-text">
						<div class="footer-post-title"><a href="#">Medications & Oral Health</a></div>
						<p>September 26, 2018</p>
					</div>
				</div>
				<div class="footer-post d-flex">
					<div class="footer-post-photo"><img src="images/content/footer-post-author-01.jpg" alt="" class="img-fluid"></div>
					<div class="footer-post-text">
						<div class="footer-post-title"><a href="#">Smile For Your Health!</a></div>
						<p>August 22, 2018</p>
					</div>
				</div>
				<div class="footer-post d-flex">
					<div class="footer-post-photo"><img src="images/content/footer-post-author-02.jpg" alt="" class="img-fluid"></div>
					<div class="footer-post-text">
						<div class="footer-post-title"><a href="#">Tooth Fairy Traditions...</a></div>
						<p>Oct 15, 2021</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<h3>Our Contacts</h3>
				<div class="h-decor"></div>
				<ul class="icn-list">
					<li><i class="icon-placeholder2"></i>Rutsiro district
						<br>
						<a href="#" class="btn btn-xs btn-gradient"><i class="icon-placeholder2"></i><span>Get directions on the map</span><i class="icon-right-arrow"></i></a>
					</li>
					<li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap">+250 788 501 658</span>, <span class="text-nowrap">+250 788 501 658</span></span></b>
						<br>(24/7 General inquiry)
					</li>
					<li><i class="icon-black-envelope"></i><a href="mailto:murundahospital@gmail.com">murundahospital@gmail.com</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row text-center text-md-left">
				<div class="col-sm">Copyright © 2021<a href="#">Murunda Hospital</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
					<a href="#">Privacy Policy</a></div>
				<div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">For emergency cases&nbsp;&nbsp;&nbsp;</span><i class="icon-telephone"></i>&nbsp;&nbsp;<b>+250 788 501 658</b></div>
			</div>
		</div>
	</div>
</div>
<!--//footer-->
<div class="backToTop js-backToTop">
	<i class="icon icon-up-arrow"></i>
</div>
<div class="modal modal-form modal-form-sm fade" id="modalQuestionForm">
	<div class="modal-dialog">
		<div class="modal-content">
			<button aria-label='Close' class='close' data-dismiss='modal'>
				<i class="icon-error"></i>
			</button>
			<div class="modal-body">
				<div class="modal-form">
					<h3>Ask a Question</h3>
					<form class="mt-15" id="questionForm" method="post" novalidate>
						<div class="successform">
							<p>Your message was sent successfully!</p>
						</div>
						<div class="errorform">
							<p>Something went wrong, try refreshing and submitting the form again.</p>
						</div>
						<div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
							<input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*"/>
						</div>
						<div class="input-group">
								<span>
									<i class="icon-email2"></i>
								</span>
							<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*"/>
						</div>
						<div class="input-group">
								<span>
									<i class="icon-smartphone"></i>
								</span>
							<input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone"/>
						</div>
						<textarea name="message" class="form-control" placeholder="Your comment*"></textarea>
						<div class="text-right mt-2">
							<button type="submit" class="btn btn-sm btn-hover-fill">Ask Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal modal-form fade" id="modalBookingForm">
	<div class="modal-dialog">
		<div class="modal-content">
			<button aria-label='Close' class='close' data-dismiss='modal'>
				<i class="icon-error"></i>
			</button>
			<div class="modal-body">
				<div class="modal-form">
					<h3>Book an Appointment</h3>
					<form class="mt-15" id="bookingForm" method="post" novalidate>
						<div class="successform">
							<p>Your message was sent successfully!</p>
						</div>
						<div class="errorform">
							<p>Something went wrong, try refreshing and submitting the form again.</p>
						</div>
						<div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
							<input type="text" name="bookingname" class="form-control" autocomplete="off" placeholder="Your Name*"/>
						</div>
						<div class="row row-xs-space mt-1">
							<div class="col-sm-6">
								<div class="input-group">
										<span>
											<i class="icon-email2"></i>
										</span>
									<input type="text" name="bookingemail" class="form-control" autocomplete="off" placeholder="Your Email*"/>
								</div>
							</div>
							<div class="col-sm-6 mt-1 mt-sm-0">
								<div class="input-group">
										<span>
											<i class="icon-smartphone"></i>
										</span>
									<input type="text" name="bookingphone" class="form-control" autocomplete="off" placeholder="Your Phone"/>
								</div>
							</div>
						</div>
						<div class="row row-xs-space mt-1">
							<div class="col-sm-6">
								<div class="input-group">
										<span>
											<i class="icon-birthday"></i>
										</span>
									<input type="text" name="bookingage" class="form-control" autocomplete="off" placeholder="Your age"/>
								</div>
							</div>
						</div>
						<div class="selectWrapper input-group mt-1">
								<span>
									<i class="icon-tooth"></i>
								</span>
							<select name="bookingservice" class="form-control">
								<option selected="selected" disabled="disabled">Select Service</option>
								<option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
								<option value="General Dentistry">General Dentistry</option>
								<option value="Orthodontics">Orthodontics</option>
								<option value="Children`s Dentistry">Children`s Dentistry</option>
								<option value="Dental Implants">Dental Implants</option>
								<option value="Dental Emergency">Dental Emergency</option>
							</select>
						</div>
						<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-calendar2"></i>
								</span>
							<div class="datepicker-wrap">
								<input name="bookingdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
							</div>
						</div>
						<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-clock"></i>
								</span>
							<div class="datepicker-wrap">
								<input name="bookingtime" type="text" class="form-control timepicker" placeholder="Time">
							</div>
						</div>
						<textarea name="bookingmessage" class="form-control" placeholder="Your comment"></textarea>
						<div class="text-right mt-2">
							<button type="submit" class="btn btn-sm btn-hover-fill">Book now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<!-- Vendors -->
<script src="{{ asset('web/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('web/vendor/jquery-migrate/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('web/vendor/cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('web/vendor/bootstrap-datetimepicker/moment.js') }}"></script>
<script src="{{ asset('web/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('web/vendor/popper/popper.min.js') }}"></script>
<script src="{{ asset('web/vendor/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('web/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('web/vendor/waypoints/sticky.min.js') }}"></script>
<script src="{{ asset('web/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('web/vendor/slick/slick.min.js') }}"></script>
<script src="{{ asset('web/vendor/scroll-with-ease/jquery.scroll-with-ease.min.js') }}"></script>
<script src="{{ asset('web/vendor/countTo/jquery.countTo.js') }}"></script>
<script src="{{ asset('web/vendor/form-validation/jquery.form.js') }}"></script>
<script src="{{ asset('web/vendor/form-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('web/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!-- Custom Scripts -->
<script src="{{ asset('web/js/app.js') }}"></script>
<script src="{{ asset('web/js/app-shop.js') }}"></script>
<script src="{{ asset('web/form/forms.js') }}"></script>

</body>

</html>