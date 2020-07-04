<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Berita</title>

<link href="<?= base_url("assets/berita/"); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url("assets/berita/"); ?>css/style.css" rel='stylesheet' type='text/css' />

<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="<?= base_url("assets/berita/");?>js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link rel="stylesheet" type="text/css" href="<?= base_url("assets/berita/"); ?>css/common.css" />
<link rel="stylesheet" type="text/css" href="<?= base_url("assets/berita/"); ?>css/style4.css" />
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Titillium+Web:400,600,700,300' rel='stylesheet' type='text/css'>
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Video Gaming News  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url("assets/"); ?>css/style.css" rel="stylesheet">
  
</head>
<body>
<!-- header -->
<div class="banner banner2">
	 <div class="container">
		 <div class="headr-right">
				<div class="details">
					<ul>
						<li><a style="color: white" href="https://mail.google.com/mail/u/0/#inbox"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>KUAsukakarya@gmail.com</a></li>
						<li><span style="color: white" class="glyphicon glyphicon-earphone" aria-hidden="true"></span><a style="color: white" href="tel:+62226015723">(022) 6015723</a></li>
					</ul>
			  </div>
		 </div>
		 <div class="banner_head_top">
			  <div class="logo">
					<h1><a href="index.html">KUA <span>KECAMATAN </span>SUKAKARYA</a></h1>
			 </div>	
			 <div class="top-menu">	 
			     <div class="content white">
					 <nav class="navbar navbar-default">
						 <div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				
						 </div>
						 <!--/navbar header-->		
						 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav">
								 <li><a href="<?= base_url("Home/"); ?>">Home</a></li>
								 <li class="active"><a href="<?= base_url("Home/#about"); ?>">About</a></li>			
								 <li><a href="<?= base_url("Home/#contact"); ?>">Contact</a></li>
							 </ul>
							</div>
						  <!--/navbar collapse-->
					 </nav>
					  <!--/navbar-->
				 </div>
					 <div class="clearfix"></div>
					<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
			  </div>
				 <div class="clearfix"></div>
		  </div>
	 </div>	 
</div>
<!---->
<div class="about"> 
		<div class="container">
			<h2 style="color: red"><?=$data['nomor'] ?></h2>
			<div class="about-text">
				<div class="col-md-6 about-text-left">
					<img src="<?= base_url("foto/"); ?><?=$data['foto'] ?>" class="img-responsive" alt=""/>
				</div>
				<div class="col-md-6 about-text-right">
					<h2> <?=$data['title'] ?> </h2>
					<p style="color: black"><?=$data['isi'] ?></p>
				</div>
				<div class="clearfix"> </div>
			<div class="team">
					<div class="team-top">
						<br>
					</div>
			</div>
			<!--teamend--> 

		</div>
</div>
<!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p> © 2020 KUA KECAMATAN SUKAKARYA  . All rights reserved | Design by <a href="http://w3layouts.com/">Miftahul Jannah</a></p>
	 </div>
</div>
<!---->

</body>
</html>