<!DOCTYPE html>
<html>

	<head>
	<title>BCCUK</title>
	<meta name="description" content="The Buddhist community centre in UK">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- <link href="http://fonts.googleapis.com/css?family=" rel="stylesheet" type="text/css"> -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="owl-carousel/owl.theme.css">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/slideshow.css" rel="stylesheet">


</head>
	<body>

		<nav>
			<div class="navbar navbar-inverse navbar-fixed-top">	
		<!-- 		<ul class="line-bar">
			    <li></li>
			    <li></li>
			    <li></li>
			    <li></li>
			    <li></li>
			  </ul> -->
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" 
						data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="/bccuk"><img src="images/logo.png"
						class="img-responsive nav-logo" alt="Touchretail Logo"></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="col-1"><span>&nbsp;</span><a href="about">About</a></li>
							<li class="col-2"><span>&nbsp;</span><a href="services.php">Services</a></li>
							<li class="col-3"><span>&nbsp;</span><a href="news.html">News</a></li>
							<li class="col-4"><span>&nbsp;</span><a href="constitution.html">Constitution</a></li>
							<li class="col-1"><span>&nbsp;</span><a href="executive-members">Members</a></li>
							<li class="col-5"><span>&nbsp;</span><a href="contact.html">Contact</a></li>

						</ul>

					</div><!--/.navbar-collapse -->
				</div>
			</div>
		</nav>

		<?php 
		if ($page == 'home') {
		?>
		<header>
			<div class="sct-banner sct-banner-full">
				<div class="sct-banner-back">
					<ul class="cb-slideshow">
				  		<li><span class="img-1">Image 01</span></li>
				  		<li><span class="img-2">Image 02</span></li>
				  		<li><span class="img-3">Image 03</span></li>
				  		<li><span class="img-1">Image 01</span></li>
				  		<li><span class="img-2">Image 02</span></li>
				  		<li><span class="img-3">Image 03</span></li>
					</ul>
				</div>
				<div class="sct-banner-front" style="">
					<div class="container" style="display: one;">

						<div class="row">

							<div class="col-md-10 colbg1 fade-in one">

								<h1 class="sct-banner-h1" style="text-align:left">
								Enhancing &amp; supporting <br> the <strong>Buddhist</strong> community in UK</h1>
							</div>	
						</div>
					</div>
				</div>
			</div>

		</header>
		<?php 
		} else {
		?>
			<header>
				<div class="sct-banner sct-banner-full">
					<div class="static-img about">
						&nbsp;
				  	</div>
				</div>
			</header>
		<?php
		}
		?>
		<section class="meta">
			<div class="container">	
				<div class="col-md-12">
					<div class="flexslider metaSlider">
						<ul class="slides" style="width: 1000%; -webkit-transition: 0.6s; transition: 0.6s; -webkit-transform: translate3d(-2880px, 0px, 0px);">
							<li class="clone" aria-hidden="true" style="width: 960px; float: left; display: block;">
								<a href="" title="">
								<p><strong>Dashami Puja</strong> - Tuesday, 5 August</p>
								</a>
							</li>

							<li class="">
								<a href="" title="">
								<p><strong>Krishna Panchami Puja</strong> - Friday, 15 August</p>
							</a>
							</li>

							<li class="">
								<a href="" title="">
								<p><strong>Dharma Teaching</strong> - Sunday, 17 August</p>
							</a>
							</li>						
						</ul>
					</div><!--div-->
				</div>
							
			</div><!--container-->
		</section>