<?php
function scan_dir($dir) {
    $ignored = array('.', '..', '.svn', '.htaccess');

    $files = array();    
    foreach (scandir($dir) as $file) {
        if (in_array($file, $ignored)) continue;
        $files[$file] = filemtime($dir . '/' . $file);
    }

    arsort($files);
    $files = array_keys($files);

    return ($files) ? $files : false;
}
?>
<!DOCTYPE html>
<html>

	<head>
	<title>The Buddhist community centre UK - BCCUK <?= isset($page) ? " - " . $page : '' ?> </title>
	<meta name="description" content="The Buddhist community centre in UK">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- <link href="http://fonts.googleapis.com/css?family=" rel="stylesheet" type="text/css"> -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="owl-carousel/owl.theme.css">
	
	<link href="css/slideshow.css" rel="stylesheet">
	<!-- <link href="css/flexslider.css" rel="stylesheet"> -->
	<link href="css/colorbox.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">


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
							<li class="col col-1"><span>&nbsp;</span><a href="/">Home</a></li>
							<li class="col col-2"><span>&nbsp;</span><a href="about">About</a></li>
							<li class="col col-3"><span>&nbsp;</span><a href="events">Events</a></li>
							<li class="col col-1"><span>&nbsp;</span><a href="gallery.php">Gallery</a></li>
							<li class="col col-4"><span>&nbsp;</span><a href="news">News</a></li>
							<!-- <li class="col-1"><span>&nbsp;</span><a href="constitution">Constitution</a></li> -->
							<li class="col col-2"><span>&nbsp;</span><a href="executive-members">Members</a></li>
							<li class="col col-3"><span>&nbsp;</span><a href="contact">Contact</a></li>

						</ul>

					</div><!--/.navbar-collapse -->
				</div>
			</div>
		</nav>

		<?php 
		if ($page == 'home' || $page == 'members') {
		?>
		<header>
			<div class="sct-banner sct-banner-full">
				<div class="sct-banner-back">
					<ul class="cb-slideshow">
						<li>
							<div class="static-img <?=$page ?> video-container">
						<iframe width="100%" height="360" src="//www.youtube.com/embed/YiYBal0lVl8?rel=0" frameborder="0" allowfullscreen></iframe>
				  	</div>

						</li>
				  		<li><span class="img-1">Image 01</span><h1 class="sct-banner-h1" style="text-align:left"></h1></li>
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

								<h1 class="sct-banner-h1" style="text-align:left">Enhancing &amp; supporting <br> the <strong>Buddhist</strong> community centre UK(BCCUK)</h1>
							</div>	
						</div>
					</div>
				</div>
			</div>

		</header>
		<?php 
		} elseif ($page == 'contact') {
		?>
			<header>
				<div class="sct-banner sct-banner-full">
					<div class="static-img <?=$page ?>">
						<iframe width="100%" height="380" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=GU11%201TW&key=AIzaSyALwJ1TnLRfib4_zpmnmgh_7XyVGLXPhvY"></iframe>
				  	</div>
				</div>
			</header>
		<?php 
		} elseif ($page == 'events' || $page == 'about') {
		?>
			<header>
				<div class="sct-banner sct-banner-full">
					<div class="static-img <?=$page ?> video-container">
						<iframe width="100%" height="360" src="//www.youtube.com/embed/YiYBal0lVl8?rel=0" frameborder="0" allowfullscreen></iframe>
				  	</div>
				</div>
			</header>
			
		<?php 
		} else {
		?>
			<header>
				<div class="sct-banner sct-banner-full">
					<div class="static-img <?=$page ?>">
						
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
						<ul id="events-slide" class="slides" style="width: 1000%; -webkit-transition: 0.6s; transition: 0.6s; -webkit-transform: translate3d(-2880px, 0px, 0px);">
								
						</ul>
					</div><!--div-->
				</div>
							
			</div><!--container-->
		</section>

		<?php

		$gdir = "activities";
 		$files = scan_dir($gdir);
 		$dir_list = array();

    	foreach ($files as $file):
        	$dir = $gdir . "/" . $file;
        	if (is_dir($dir) && $file != '.' && $file != '..'): 
        		array_push($dir_list, $file);
        	endif; 
		endforeach; 


		?>



