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
	
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="css/fullscreen.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
	
    <!-- Picker UI-->	
	<link rel="stylesheet" href="assets/css/jquery-ui.css" />	
	
	<!-- bin/jquery.slider.min.css -->
	<link rel="stylesheet" href="plugins/jslider/css/jslider.css" type="text/css">
	<link rel="stylesheet" href="plugins/jslider/css/jslider.round-blue.css" type="text/css">
	
    <!-- jQuery-->	
    <script src="assets/js/jquery.v2.0.3.js"></script>
	<script src="assets/js/jquery-ui.js"></script>	
	
	<!-- bin/jquery.slider.min.js -->
	<script type="text/javascript" src="plugins/jslider/js/jshashtable-2.1_src.js"></script>
	<script type="text/javascript" src="plugins/jslider/js/jquery.numberformatter-1.2.3.js"></script>
	<script type="text/javascript" src="plugins/jslider/js/tmpl.js"></script>
	<script type="text/javascript" src="plugins/jslider/js/jquery.dependClass-0.1.js"></script>
	<script type="text/javascript" src="plugins/jslider/js/draggable-0.1.js"></script>
	<script type="text/javascript" src="plugins/jslider/js/jquery.slider.js"></script>
	<!-- end -->

  </head>
  <body id="top" class="thebg" >
    
	
	
	<div class="navbar-wrapper2 navbar-fixed-top">
      <div class="container">
		<div class="navbar mtnav">

			<div class="container offset-3"> 

<?php include("nav-include.php"); ?>

</div>
		
        </div>
      </div>
    </div>
	
	
	
	<div class="container breadcrub">
	    <div>
			<a class="homebtn left" href="#"></a>
			<div class="left">
				<ul class="bcrumbs">
					<li>/</li>
					<li><a href="#">Activities</a></li>
					<li>/</li>
					<li><a href="#">U.A.E.</a></li>
					<li>/</li>					
					<li><a href="#" class="active">Dubai</a></li>					
				</ul>				
			</div>
			<a class="backbtn right" href="#"></a>
		</div>
		<div class="clearfix"></div>
		<div class="brlines"></div>
	</div>	

	<!-- CONTENT -->
	<div class="container">
		<div class="container pagecontainer offset-0">	

			<!-- SLIDER -->
			<div class="col-md-8 details-slider">
			
				<div id="c-carousel">
				<div id="wrapper">
				<div id="inner">
					<div id="caroufredsel_wrapper2">
						<div id="carousel">
							<img src="updates/update1/img/details-slider/slide1.jpg" alt=""/>
							<img src="updates/update1/img/details-slider/slide2.jpg" alt=""/>
							<img src="updates/update1/img/details-slider/slide3.jpg" alt=""/>
							<img src="updates/update1/img/details-slider/slide4.jpg" alt=""/>
							<img src="updates/update1/img/details-slider/slide5.jpg" alt=""/>
							<img src="updates/update1/img/details-slider/slide6.jpg" alt=""/>						
						</div>
					</div>
					<div id="pager-wrapper">
						<div id="pager">
							<img src="updates/update1/img/details-slider/slide1.jpg" width="120" height="68" alt=""/>
							<img src="updates/update1/img/details-slider/slide2.jpg" width="120" height="68" alt=""/>
							<img src="updates/update1/img/details-slider/slide3.jpg" width="120" height="68" alt=""/>
							<img src="updates/update1/img/details-slider/slide4.jpg" width="120" height="68" alt=""/>
							<img src="updates/update1/img/details-slider/slide5.jpg" width="120" height="68" alt=""/>
							<img src="updates/update1/img/details-slider/slide6.jpg" width="120" height="68" alt=""/>						
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<button id="prev_btn2" class="prev2"><img src="images/spacer.png" alt=""/></button>
				<button id="next_btn2" class="next2"><img src="images/spacer.png" alt=""/></button>		
					
		</div>
		</div> <!-- /c-carousel -->
			
			
			
			
			
			</div>
			<!-- END OF SLIDER -->			
			
			<!-- RIGHT INFO -->
			<div class="col-md-4 detailsright offset-0">
				<div class="padding20">
					<span class="size20 bold">Aquaventure Waterpark and<br/> The Lost Chambers Aquarium</span><br/>
					<img src="images/smallrating-5.png" alt=""/>
				</div>
				
				<div class="line3"></div>
				
				<div class="hpadding20">
					<h2 class="opensans slim green2">Wonderful!</h2>
				</div>
				
				<div class="line3 margtop20"></div>
				
				<div class="col-md-6 bordertype1 padding20">
					<span class="opensans size30 bold grey2">97%</span><br/>
					of guests<br/>recommend
				</div>
				<div class="col-md-6 bordertype2 padding20">
					<span class="opensans size30 bold grey2">4.5</span>/5<br/>
					guest ratings
				</div>
				
				<div class="col-md-6 bordertype3">
					<img src="images/user-rating-4.png" alt=""/><br/>
					18 reviews
				</div>
				<div class="col-md-6 bordertype3">
					<a href="#" class="grey">+Add review</a>
				</div>
				<div class="clearfix"></div><br/>
				
				<div class="hpadding20">
					<a href="#" class="booknow margtop20 btnmarg">Book now</a>
				</div>
			</div>
			<!-- END OF RIGHT INFO -->

		</div>
		<!-- END OF container-->
		
		<div class="container mt25 offset-0">

			<div class="col-md-8 pagecontainer2 offset-0">
				<div class="cstyle10"></div>
		
				<ul class="nav nav-tabs" id="myTab">
					<li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#summary"><span class="summary"></span><span class="hidetext">Details</span>&nbsp;</a></li>
					<li onclick="mySelectUpdate()" class="active"><a data-toggle="tab" href="#roomrates"><span class="rates"></span><span class="hidetext">Rates</span>&nbsp;</a></li>
					<li onclick="loadScript()" class=""><a data-toggle="tab" href="#maps"><span class="maps"></span><span class="hidetext">Location</span>&nbsp;</a></li>
					<li onclick="mySelectUpdate(); trigerJslider(); trigerJslider2(); trigerJslider3(); trigerJslider4(); trigerJslider5(); trigerJslider6();" class=""><a data-toggle="tab" href="#reviews"><span class="reviews"></span><span class="hidetext">Reviews</span>&nbsp;</a></li>
				</ul>			
				<div class="tab-content4" >
					<!-- TAB 1 -->				
					<div id="summary" class="tab-pane fade ">
						<p class="hpadding20">
							Have a fun filled adventure in Atlantis, The Palm. Blast off our water coasters, be catapulted into shark filled lagoon, and relax on our private beach in the Aquaventure, No.1 waterpark in the Middle East and Europe. Then wander off to explore The Lost Chambers Aquarium, while coming face to face with over 65,000 animals. Explore the mystery of the lost city of Atlantis through 20 unique exhibits, including touch tank and Aquatheatre show.						
						</p>
						<div class="line4"></div>
						
						<!-- Collapse 1 -->	
						<button type="button" class="collapsebtn2" data-toggle="collapse" data-target="#collapse1">
						  Inclusions <span class="collapsearrow"></span>
						</button>
						
						<div id="collapse1" class="collapse in">
							<div class="hpadding20">
								Same-day admission to Aquaventure Waterpark and The Lost Chambers Aquarium
							</div>
							<div class="clearfix"></div>
						</div>
						<!-- End of collapse 1 -->	
						
						<div class="line4"></div>						
						
						<!-- Collapse 2 -->	
						<button type="button" class="collapsebtn2" data-toggle="collapse" data-target="#collapse2">
								Hours of operation <span class="collapsearrow"></span>
						</button>
						
						<div id="collapse2" class="collapse in">
							<div class="hpadding20">
								Aquaventure Waterpark 10 am - sunset, daily<br/>
								The Lost Chambers Aquarium 10 am – 10 pm, daily
							</div>
							<div class="clearfix"></div>
						</div>
						<!-- End of collapse 2 -->	
						
						<div class="line4"></div>						
						
						<!-- Collapse 3 -->	
						<button type="button" class="collapsebtn2 collapsed" data-toggle="collapse" data-target="#collapse3">
						  Location <span class="collapsearrow"></span>
						</button>
						
						<div id="collapse3" class="collapse">
							<div class="hpadding20">
								Address
							</div>
							<div class="clearfix"></div>
						</div>
						<!-- End of collapse 3 -->	
						
						<div class="line4"></div>							
						
						<!-- Collapse 4 -->	
						<button type="button" class="collapsebtn2 collapsed" data-toggle="collapse" data-target="#collapse4">
						  How it works <span class="collapsearrow"></span>
						</button>
						
						<div id="collapse4" class="collapse">
							<div class="hpadding20">
								Text
							</div>
							<div class="clearfix"></div>
						</div>
						<!-- End of collapse 4 -->		

						<div class="line4"></div>								

						<!-- Collapse 5 -->	
						<button type="button" class="collapsebtn2 collapsed" data-toggle="collapse" data-target="#collapse5">
						  Redemption instructions <span class="collapsearrow"></span>
						</button>
						
						<div id="collapse5" class="collapse">
							<div class="hpadding20">
								Text
							</div>
							<div class="clearfix"></div>
						</div>
						<!-- End of collapse 5 -->				

						<div class="line4"></div>								

						<!-- Collapse 6 -->	
						<button type="button" class="collapsebtn2" data-toggle="collapse" data-target="#collapse6">
						  Terms and conditions <span class="collapsearrow"></span>
						</button>
						
						<div id="collapse6" class="collapse in">
							<div class="hpadding20">
								Lorem ipsum dolr sit amet
							</div>
							<div class="clearfix"></div>
						</div>
						<!-- End of collapse 6 -->								
				
					</div>
					<!-- TAB 2 -->
					<div id="roomrates" class="tab-pane fade active in">
					    <div class="hpadding20">
							<p class="dark bold">Pricing and availability</p>
							Trip dates: Wed Mar-5-2014 to Sat Mar-8-2014  (<a href="#" class="lblue">Select new trip dates</a>)
						</div>
						<br/>
						
						<div class="line2"></div>
						
						<div class="padding20">
							
							<div class="col-md-2">
								<span class="green bold">$81.68</span> /each
							</div>
							<div class="col-md-8">
								<div class="wh50percent left">
									<select class="form-control mySelectBoxClass">
									  <option>1 Person</option>
									  <option selected>2 Person</option>
									  <option>3 Person</option>
									  <option>4 Person</option>
									  <option>5 Person</option>
									</select>
								</div>
								<div class="wh45percent right">
									over 42 inches 								
								</div>								
							</div>
							<div class="col-md-2 text-right">
								<button class="updatebtn">Book</button>
							</div>							
							<div class="clearfix"></div>
							
						</div>
						
						
						<div class="line2"></div>		

						<div class="padding20">
							
							<div class="col-md-2">
								<span class="green bold">$81.68</span> /each
							</div>
							<div class="col-md-8">
								<div class="wh50percent left">
									<select class="form-control mySelectBoxClass">
									  <option>1 Person</option>
									  <option selected>2 Person</option>
									  <option>3 Person</option>
									  <option>4 Person</option>
									  <option>5 Person</option>
									</select>
								</div>
								<div class="wh45percent right">
									under 42 inches, (3 to 11) * 							
								</div>								
							</div>
							<div class="col-md-2 text-right">
								<button class="updatebtn">Book</button>
							</div>							
							<div class="clearfix"></div>
							
						</div>
						<div class="line2"></div>	

						<div class="padding20">
							*specify age at day of event 
						</div>
						
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
					
						
					</div>

					<!-- TAB 4 -->					
					<div id="maps" class="tab-pane fade">
						<div class="hpadding20">
							<div id="map-canvas"></div>
						</div>
					</div>
					
					<!-- TAB 5 -->					
					<div id="reviews" class="tab-pane fade ">
						<div class="hpadding20">
							<div class="col-md-4 offset-0">
								<span class="opensans dark size60 slim lh3 ">4.5/5</span><br/>
								<img src="images/user-rating-4.png" alt=""/>
							</div>
							<div class="col-md-8 offset-0">
								<div class="progress progress-striped">
								  <div class="progress-bar progress-bar-success wh75percent" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
									<span class="sr-only">4.5 out of 5</span>
								  </div>
								</div>		
								<div class="progress progress-striped">
								  <div class="progress-bar progress-bar-success wh100percent" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
									<span class="sr-only">100% of guests recommend</span>
								  </div>
								</div>
								<div class="clearfix"></div>
								Ratings based on 5 Verified Reviews
							</div>			
							<div class="clearfix"></div>
							<br/>
							<span class="opensans dark size16 bold">Average ratings</span>
						</div>
						

						

						<div class="line2"></div>
						
						<div class="hpadding20">							
							<div class="col-md-4 offset-0 center">
								<div class="padding20">
									<div class="bordertype5">
										<div class="circlewrap">
											<img src="images/user-avatar.jpg" class="circleimg" alt=""/>
											<span>4.5</span>
										</div>
										<span class="dark">by Sena</span><br/>
										from London, UK<br/>
										<img src="images/check.png" alt=""/><br/>
										<span class="green">Recommended<br/>for Everyone</span>
									</div>
									
								</div>
							</div>
							<div class="col-md-8 offset-0">
								<div class="padding20">
									<span class="opensans size16 dark">Great experience</span><br/>
									<span class="opensans size13 lgrey">Posted Jun 02, 2013</span><br/>
									<p>Excellent hotel, friendly staff would def go there again</p>	
									<ul class="circle-list">
										<li>4.5</li>
										<li>3.8</li>
										<li>4.2</li>
										<li>5.0</li>
										<li>4.6</li>
										<li>4.8</li>
									</ul>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
							
						<div class="line2"></div>
						
						<div class="hpadding20">	
							<div class="col-md-4 offset-0 center">
								<div class="padding20">
									<div class="bordertype5">
										<div class="circlewrap">
											<img src="images/user-avatar.jpg" class="circleimg" alt=""/>
											<span>4.5</span>
										</div>
										<span class="dark">by Sena</span><br/>
										from London, UK<br/>
										<img src="images/check.png" alt=""/><br/>
										<span class="green">Recommended<br/>for Everyone</span>
									</div>
									
								</div>
							</div>
							<div class="col-md-8 offset-0">
								<div class="padding20">
									<span class="opensans size16 dark">Great experience</span><br/>
									<span class="opensans size13 lgrey">Posted Jun 02, 2013</span><br/>
									<p>The view from our balcony in room # 409, was terrific. It was centrally located to everything on and around the port area. Wonderful service and everything was very clean. The breakfast was below average, although not bad. If back in Zante Town we would stay there again.</p>	
									<ul class="circle-list">
										<li>4.5</li>
										<li>3.8</li>
										<li>4.2</li>
										<li>5.0</li>
										<li>4.6</li>
										<li>4.8</li>
									</ul>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
							
						<div class="line2"></div>
							
						<div class="hpadding20">	
							<div class="col-md-4 offset-0 center">
								<div class="padding20">
									<div class="bordertype5">
										<div class="circlewrap">
											<img src="images/user-avatar.jpg" class="circleimg" alt=""/>
											<span>4.5</span>
										</div>
										<span class="dark">by Sena</span><br/>
										from London, UK<br/>
										<img src="images/check.png" alt=""/><br/>
										<span class="green">Recommended<br/>for Everyone</span>
									</div>
									
								</div>
							</div>
							<div class="col-md-8 offset-0">
								<div class="padding20">
									<span class="opensans size16 dark">Great experience</span><br/>
									<span class="opensans size13 lgrey">Posted Jun 02, 2013</span><br/>
									<p>It is close to everything but if you go in the lower season the pool won't be ready even though the temperature was quiet high already.</p>	
									<ul class="circle-list">
										<li>4.5</li>
										<li>3.8</li>
										<li>4.2</li>
										<li>5.0</li>
										<li>4.6</li>
										<li>4.8</li>
									</ul>
								</div>
							</div>
							<div class="clearfix"></div>							
						</div>	
						
						<div class="line2"></div>
						<br/>
						<br/>
						<div class="hpadding20">
							<span class="opensans dark size16 bold">Reviews</span>
						</div>
						
						<div class="line2"></div>

						<div class="wh33percent left center">

							<br/>
							<ul class="jslidetext2">
								<li>Username</li>
								<li>Evaluation</li>
								<li>Title</li>
								<li>Comment</li>
							</ul>
						</div>
						<div class="wh66percent right offset-0">
							<script>
								//This is a fix for when the slider is used in a hidden div
								function testTriger(){
									setTimeout(function (){
										$(".cstyle01").resize();
									}, 500);	
								}
							</script>
							<div class="padding20 relative wh70percent">
								
								<input type="text" class="form-control margtop10" placeholder="">
								<select class="form-control mySelectBoxClass margtop10">
								  <option selected>Wonderful!</option>
								  <option>Nice</option>
								  <option>Neutral</option>
								  <option>Don't recommend</option>
								</select>
								<input type="text" class="form-control margtop10" placeholder="">
								
								<textarea class="form-control margtop10" rows="3"></textarea>
								
								<div class="clearfix"></div>
								<button type="submit" class="btn-search4 margtop20">Submit</button>	

								<br/>
								<br/>
								<br/>
								<br/>
								
							</div>							
						</div>
						<div class="clearfix"></div>

					</div>		

			</div>
			</div>
			
			<div class="col-md-4" >
				
				<div class="pagecontainer2 testimonialbox">
					<div class="cpadding0 mt-10">
						<span class="icon-quote"></span>
						<p class="opensans size16 grey2">I've had the time of my life!!! Can wait the next vacation, definitely i will return here.<br/>
						<span class="lato lblue bold size13"><i>by Ellison from United Kingdom</i></span></p> 
					</div>
				</div>
				
				<div class="pagecontainer2 mt20 needassistancebox">
					<div class="cpadding1">
						<span class="icon-help"></span>
						<h3 class="opensans">Need Assistance?</h3>
						<p class="size14 grey">Our team is 24/7 at your service to help you with your booking issues or answer any related questions</p>
						<p class="opensans size30 lblue xslim">1-866-599-6674</p>
					</div>
				</div><br/>
				
				<div class="pagecontainer2 mt20 alsolikebox">
					<div class="cpadding1">
						<span class="icon-location"></span>
						<h3 class="opensans">You May Also Like</h3>
						<div class="clearfix"></div>
					</div>
					<div class="cpadding1 ">
						<div class="wh30percent left">
							<a href="#"><img src="updates/update1/img/activities/act01.jpg" width="80" class="left mr20" alt=""/></a>
						</div>
						<div class="wh65percent right">
							<a href="#" class="dark"><b>4x4 Sunset Desert Safari and Dhow Cruise Dinner</b></a><br/>
							<span class="opensans green bold size14">$36-$160</span> <span class="grey">/person</span><br/>
							<img src="images/filter-rating-5.png" alt=""/>
						</div>	
						<div class="clearfix"></div>
					</div>
					<div class="line5"></div>
					<div class="cpadding1 ">
						<div class="wh30percent left">
							<a href="#"><img src="updates/update1/img/activities/act02.jpg" width="80" class="left mr20" alt=""/></a>
						</div>
						<div class="wh65percent right">
							<a href="#" class="dark"><b>Aquaventure Waterpark and The Lost Chambers Aquarium</b></a><br/>
							<span class="opensans green bold size14">$36-$160</span> <span class="grey">/person</span><br/>
							<img src="images/filter-rating-5.png" alt=""/>
						</div>	
						<div class="clearfix"></div>
					</div>
					<div class="line5"></div>			
					<div class="cpadding1 ">
						<div class="wh30percent left">
							<a href="#"><img src="updates/update1/img/activities/act03.jpg" width="80" class="left mr20" alt=""/></a>
						</div>
						<div class="wh65percent right">
							<a href="#" class="dark"><b>Yas Waterworld and Ferrari World Abu Dhabi</b></a><br/>
							<span class="opensans green bold size14">$36-$160</span> <span class="grey">/person</span><br/>
							<img src="images/filter-rating-5.png" alt=""/>
						</div>	
						<div class="clearfix"></div>

					</div>
					<br/>
				
					
				</div>				
			
			</div>
		</div>
		
		
		
	</div>
	<!-- END OF CONTENT -->
	
	
	


	
	
	<!-- FOOTER -->

	<div class="footerbgblack">
		<div class="container">		
			
			<div class="col-md-3">
				<span class="ftitleblack">Let's socialize</span>
				<div class="scont">
					<a href="#" class="social1b"><img src="images/icon-facebook.png" alt=""/></a>
					<a href="#" class="social2b"><img src="images/icon-twitter.png" alt=""/></a>
					<a href="#" class="social3b"><img src="images/icon-gplus.png" alt=""/></a>
					<a href="#" class="social4b"><img src="images/icon-youtube.png" alt=""/></a>
					<br/><br/><br/>
					<a href="#"><img src="images/logosmal2.png" alt="" /></a><br/>
					<span class="grey2">&copy; 2013  |  <a href="#">Privacy Policy</a><br/>
					All Rights Reserved </span>
					<br/><br/>
					
				</div>
			</div>
			<!-- End of column 1-->
			
			<div class="col-md-3">
				<span class="ftitleblack">Travel Specialists</span>
				<br/><br/>
				<ul class="footerlistblack">
					<li><a href="#">Golf Vacations</a></li>
					<li><a href="#">Ski & Snowboarding</a></li>
					<li><a href="#">Disney Parks Vacations</a></li>
					<li><a href="#">Disneyland Vacations</a></li>
					<li><a href="#">Disney World Vacations</a></li>
					<li><a href="#">Vacations As Advertised</a></li>
				</ul>
			</div>
			<!-- End of column 2-->		
			
			<div class="col-md-3">
				<span class="ftitleblack">Travel Specialists</span>
				<br/><br/>
				<ul class="footerlistblack">
					<li><a href="#">Weddings</a></li>
					<li><a href="#">Accessible Travel</a></li>
					<li><a href="#">Disney Parks</a></li>
					<li><a href="#">Cruises</a></li>
					<li><a href="#">Round the World</a></li>
					<li><a href="#">First Class Flights</a></li>
				</ul>				
			</div>
			<!-- End of column 3-->		
			
			<div class="col-md-3 grey">
				<span class="ftitleblack">Newsletter</span>
				<div class="relative">
					<input type="email" class="form-control fccustom2black" id="exampleInputEmail1" placeholder="Enter email">
					<button type="submit" class="btn btn-default btncustom">Submit<img src="images/arrow.png" alt=""/></button>
				</div>
				<br/><br/>
				<span class="ftitleblack">Customer support</span><br/>
				<span class="pnr">1-866-599-6674</span><br/>
				<span class="grey2">office@travel.com</span>
			</div>			
			<!-- End of column 4-->			
		
			
		</div>	
	</div>
	
	<div class="footerbg3black">
		<div class="container center grey"> 
		<a href="#">Home</a> | 
		<a href="#">About</a> | 
		<a href="#">Last minute</a> | 
		<a href="#">Early booking</a> | 
		<a href="#">Special offers</a> | 
		<a href="#">Blog</a> | 
		<a href="#">Contact</a>
		<a href="#top" class="gotop scroll"><img src="images/spacer.png" alt=""/></a>
		</div>
	</div>
	
	
	<!-- Javascript -->	
	<script src="assets/js/js-details.js"></script>
	
	<!-- Googlemap -->	
	<script src="assets/js/initialize-google-map.js"></script>
	
    <!-- Custom Select -->
	<script type='text/javascript' src='assets/js/jquery.customSelect.js'></script>
	
    <!-- Custom functions -->
    <script src="assets/js/functions.js"></script>

    <!-- Nicescroll  -->	
	<script src="assets/js/jquery.nicescroll.min.js"></script>
	
    <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	
    <!-- CarouFredSel -->
    <script src="assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="assets/js/helper-plugins/jquery.touchSwipe.min.js"></script>
	
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.transit.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>

    <!-- Counter -->	
    <script src="assets/js/counter.js"></script>	
	
    <!-- Carousel-->	
    <script src="assets/js/initialize-carousel-detailspage.js"></script>		
	
    <!-- Js Easing-->	
    <script src="assets/js/jquery.easing.js"></script>

	
    <!-- Bootstrap-->	
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
