<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Readit - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('/temp/user/'); ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/temp/user/'); ?>css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url('/temp/user/'); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/temp/user/'); ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/temp/user/'); ?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url('/temp/user/'); ?>css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url('/temp/user/'); ?>css/ionicons.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url('/temp/user/'); ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('/temp/user/'); ?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url('/temp/user/'); ?>css/style.css">
  </head>
  <body>
    
	  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo base_url('home'); ?>">Read<i>it</i>.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo base_url('home'); ?>" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('home'); ?>" class="nav-link">Articles</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('about'); ?>" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('contact'); ?>" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo base_url('/temp/user/'); ?>images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-12 ftco-animate">
          	<h2 class="subheading">Hello! Welcome to</h2>


<?php if($infos) { ?>
          	<h1 class="mb-4 mb-md-0"><?php echo $infos->category; ?></h1>
          	<div class="row">
          		<div class="col-md-7">
          			<div class="text">
	          			<p><?php echo $infos->title; ?></p>
	          			<div class="mouse">
										<a href="#" class="mouse-icon">
											<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
										</a>
									</div>
								</div>
          		</div>
          	</div>
<?php } else {?>
	<h1 class="mb-4 mb-md-0"><?php echo $headinfo; ?></h1>
          	<div class="row">
          		<div class="col-md-7">
          			<div class="text">
	          			<p>Blog site</p>
	          			<div class="mouse">
										<a href="#" class="mouse-icon">
											<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
										</a>
									</div>
								</div>
          		</div>
          	</div>
<?php } ?>


          </div>
        </div>
      </div>
    </div>