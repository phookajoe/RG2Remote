<!DOCTYPE html>
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travel Agency - HTML5 Booking template</title>
	
	<!-- Bootstrap -->
    <link href="dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="assets/css/custom.css" rel="stylesheet" media="screen">    
<!-- Updates -->
    <link href="updates/update1/css/style01.css" rel="stylesheet" media="screen">
	
	
	
	<!-- Animo css-->
	<link href="plugins/animo/animate+animo.css" rel="stylesheet" media="screen">
	
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
	
	<!-- Load jQuery -->
	<script src="assets/js/jquery.v2.0.3.js"></script>


	

  </head>
  <body>
	<!-- 100% Width & Height container  -->
	<div class="login-fullwidith">
		
		<!-- Login Wrap  -->
		<div class="login-wrap2">
			<div class="center">
				<img src="images/logo.png" class="search-logo" alt="logo"/><br/><br/>
				<span class="opensans size18 caps bold blue">We're on it! Searching the BEST PRICES.</span><br/>
				<span class="opensans size18 grey xsmall">In a few moments, you'll be celebrating flight options galore!</span>
				<br/><br/>
				<img src="updates/update1/img/loading.gif" alt=""/>
				<br/><br/>

			</div>
			<div class="searchingbg">
				<ul class="leftatr">
					<li>From</li>
					<li>To</li>
					<li>Depart</li>
					<li>Return</li>
					<li>Traveler</li>
				</ul>
				<ul class="rightatr">
					<li>United kingdom - London</li>
					<li>U.S.A. - New York</li>
					<li>02.03.2014</li>
					<li>02.04.2014</li>
					<li>2</li>
				</ul>
			</div>
		</div>
		<!-- End of Login Wrap  -->
	
	</div>	
	<!-- End of Container  -->

	<!-- Javascript  -->
	<script src="updates/update1/js/initialize-wearesearching.js"></script>
	<script src="assets/js/jquery.easing.js"></script>
	<!-- Load Animo -->
	<script src="plugins/animo/animo.js"></script>
	<script>
	function errorMessage(){
		$('.login-wrap').animo( { animation: 'tada' } );
	}
	</script>
	
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>