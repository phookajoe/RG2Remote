<!DOCTYPE html>
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travel Agency - HTML5 Booking template</title>
	
    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="assets/css/custom.css" rel="stylesheet" media="screen">

    <!-- Carousel -->
	<link href="examples/carousel/carousel.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
	
    <!-- Fonts -->	
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet' type='text/css'>	
	<!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="screen" />
    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="assets/css/font-awesome-ie7.css" media="screen" /><![endif]-->
	
    <!-- Picker UI-->	
	<link rel="stylesheet" href="assets/css/jquery-ui.css" />		
	
    <!-- jQuery -->	
    <script src="assets/js/jquery.v2.0.3.js"></script>

	
  </head>
  <body id="top">
    
	<!-- Top wrapper -->			  
	<div class="navbar-wrapper2 navbar-fixed-top">
      <div class="container">
		<div class="navbar mtnav">

			<div class="container offset-3">
			  

<?php include("nav-include.php"); ?>

		  
			</div>
		
        </div>
      </div>
    </div>
	<!-- /Top wrapper -->	


	<div id="dajy" class="mtslide sliderbg fixed cstyle11">	
			<div id="map-canvas2"></div>
	</div>
		



	<!-- WRAP -->
	<div class="wrap cstyle03">
		
		<div class="container mt-200 z-index100">		
		  <div class="row">
			<div class="col-md-12">
				<div class="bs-example bs-example-tabs cstyle04">
				
					<div class="tab-content">

						<div class="col-md-4">
						<form action="#">
							<span class="opensans size24 slim">Contact</span>
							<input type="text" placeholder="Name" class="form-control logpadding margtop10">
							<input type="text" placeholder="Phone" class="form-control logpadding margtop20">
							<input type="text" placeholder="E-mail" class="form-control logpadding margtop20">
						</div>
						<div class="col-md-4">
							<textarea rows="9" class="form-control margtop10"></textarea>
						</div>
						<div class="col-md-4 opensans grey">
							Address:<br/>
							<span class="dark">
								Stephen J. Jessen<br/>
								2 Queen Anne Street<br/>
								London, W1G 9LQ<br/>
							</span>
							<br/>
							Phone<br/>
							<p class="opensans size30 green xslim">1-866-599-6674</p>
							Email<br/>
							<a href="mailto:office@company.com" class="orange">office@company.com</a>
						</div>
					</div>
					
					<div class="searchbg3">
						<button type="submit" class="btn-search right mr20">Send Email</button>
						</form>
					</div>
						
				</div>
			</div>
		  </div>
		</div>
		

		
		<div class="lastminutecontact lcfix">
			<div class="container lmc">	
				<img src="images/rating-4.png" alt=""/><br/>
				LAST MINUTE: <b>Barcelona</b> - 2 nights - Flight+4* Hotel, Dep 27h Aug from $209/person<br/>
				<form action="details.php" >
					<button class="btn iosbtn" type="submit">Read more</button>
				</form>
			</div>
		</div>
		

		
		
		<!-- FOOTER -->
		
		<div class="footerbg sfix3">
			<div class="container">		
				<footer>
					<div class="footer">
						<a href="#" class="social1"><img src="images/icon-facebook.png" alt=""/></a>
						<a href="#" class="social2"><img src="images/icon-twitter.png" alt=""/></a>
						<a href="#" class="social3"><img src="images/icon-gplus.png" alt=""/></a>
						<a href="#" class="social4"><img src="images/icon-youtube.png" alt=""/></a>
						<br/><br/>
						Copyright &copy; 2013 <a href="#">Travel Agency</a> All rights reserved. <a href="http://titanicthemes.com">TitanicThemes.com</a>
						<br/><br/>
						<a href="#top" id="gotop2" class="gotop"><img src="images/spacer.png" alt=""/></a>
					</div>
				</footer>
			</div>	
		</div>
		
		

		
		
	</div>
	<!-- END OF WRAP -->
	
	
	

	
    <!-- This page JS -->
	<script src="assets/js/js-index.js"></script>	
	
	<!-- Googlemap -->	
	<script src="assets/js/initialize-google-map-contact.js"></script>
	
    <!-- Custom functions -->
    <script src="assets/js/functions.js"></script>
	
    <!-- Picker UI-->	
	<script src="assets/js/jquery-ui.js"></script>		
	
	<!-- Easing -->
    <script src="assets/js/jquery.easing.js"></script>
	
    <!-- Nicescroll  -->	
	<script src="assets/js/jquery.nicescroll.min.js"></script>
	
    <!-- CarouFredSel -->
    <script src="assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="assets/js/helper-plugins/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.transit.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
	
    <!-- Custom Select -->
	<script type='text/javascript' src='assets/js/jquery.customSelect.js'></script>	

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
