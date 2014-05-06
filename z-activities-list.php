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

    <!-- Picker -->	
	<link rel="stylesheet" href="assets/css/jquery-ui.css" />	
	
	
	<!-- bin/jquery.slider.min.css -->
	<link rel="stylesheet" href="plugins/jslider/css/jslider.css" type="text/css">
	<link rel="stylesheet" href="plugins/jslider/css/jslider.round.css" type="text/css">	
	

	
    <!-- jQuery -->	
    <script src="assets/js/jquery.v2.0.3.js"></script>
	
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

			<!-- FILTERS -->
			<div class="col-md-3 filters offset-0">
			
				
				<!-- TOP TIP -->
				<div class="filtertip">
					<div class="padding20">
						<p class="size13"><b>9</b> Activities found</p>
						<p class="size30 bold"><span class="size13 normal darkblue">from</span> $<span class="countprice"></span>.78 <span class="size13 normal darkblue">/adult</span></p>
						
					</div>
					<div class="tip-arrow"></div>
				</div>
				
	
				<div class="padding20title"><h3 class="opensans dark">Activities</h3></div>
	
	
				<div class="bookfilters hpadding20">
					
				
						

						
						<!-- HOTELS TAB -->
						<div class="hotelstab2 none">
						
							<div>
								<span class="opensans size13">Country</span>
								<select class="form-control mySelectBoxClass">
								  <option selected="yes">U.A.E.</option>
								  <option>U.S.A.</option>
								  <option>France</option>
								  <option>Germany</option>
								  <option>Italy</option>
								  <option>...</option>
								</select>
							</div>
							
							<div class="margtop10">
								<span class="opensans size13">City</span>
								<select class="form-control mySelectBoxClass">
								  <option selected="yes">Dubay</option>
								  <option>Abu Dhabi</option>
								  <option>Sharjah</option>
								  <option>Al Ain</option>
								  <option>Ajman</option>
								  <option>...</option>
								</select>
							</div>
							
							<div class="margtop10">
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13">From</span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker" placeholder="mm/dd/yyyy"/>
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13">To</span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker2" placeholder="mm/dd/yyyy"/>
									</div>
								</div>
							</div>
							
							<div class="clearfix pbottom15"></div>
							
							
							<button type="submit" class="btn-search3">Search</button>
						</div>
						<!-- END OF HOTELS TAB -->
						

						
						
				</div>
				<!-- END OF BOOK FILTERS -->	
				
				<div class="line2"></div>
				
				<div class="padding20title"><h3 class="opensans dark">Filter by</h3></div>
				<div class="line2"></div>
				
				<!-- Price range -->					
				<button type="button" class="collapsebtn" data-toggle="collapse" data-target="#collapse2">
				  Price range <span class="collapsearrow"></span>
				</button>
					
				<div id="collapse2" class="collapse in">
					<div class="padding20">
						<div class="layout-slider wh100percent">
						<span class="cstyle09"><input id="Slider1" type="slider" name="price" value="400;700" /></span>
						</div>
						<script type="text/javascript" >
						  jQuery("#Slider1").slider({ from: 100, to: 1000, step: 5, smooth: true, round: 0, dimension: "&nbsp;$", skin: "round" });
						</script>
					</div>
				</div>
				<!-- End of Price range -->	
				
				<div class="line2"></div>
				
				<!-- Star ratings -->	
				<button type="button" class="collapsebtn" data-toggle="collapse" data-target="#collapse1">
				  Star rating <span class="collapsearrow"></span>
				</button>

				<div id="collapse1" class="collapse in">
					<div class="hpadding20">
						<div class="checkbox">
							<label>
							  <input type="checkbox"><img src="images/filter-rating-5.png" class="imgpos1" alt=""/> 5 Stars
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><img src="images/filter-rating-4.png" class="imgpos1" alt=""/> 4 Stars
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><img src="images/filter-rating-3.png" class="imgpos1" alt=""/> 3 Stars
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><img src="images/filter-rating-2.png" class="imgpos1" alt=""/> 2 Stars
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><img src="images/filter-rating-1.png" class="imgpos1" alt=""/> 1 Star
							</label>
						</div>	
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- End of Star ratings -->	
				
				
				<div class="line2"></div>
				
				<!-- Activities type -->
				<button type="button" class="collapsebtn last" data-toggle="collapse" data-target="#collapse4">
				  Type <span class="collapsearrow"></span>
				</button>	
				<div id="collapse4" class="collapse in">
					<div class="hpadding20">
						<div class="checkbox">
							<label>
							  <input type="checkbox">Special Offers
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Tours and Sightseeing
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Theme Parks
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Ski Offerings
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Tours and Sightseeing
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Overnight Excursions
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Air and Land Adventures
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Water Activities and Cruises
							</label>
						</div>						
						<div class="checkbox">
							<label>
							  <input type="checkbox">Attractions
							</label>
						</div>			
						<div class="checkbox">
							<label>
							  <input type="checkbox">Restaurants and Nightlife
							</label>
						</div>			
						<div class="checkbox">
							<label>
							  <input type="checkbox">Ground Transportation
							</label>
						</div>			


					
						

					</div>
					<div class="clearfix"></div>						
				</div>	
				<!-- End of Activities type  -->
				
				<div class="line2"></div>
				<div class="clearfix"></div>
				<br/>
				<br/>
				<br/>
				
				
			</div>
			<!-- END OF FILTERS -->
			
			<!-- LIST CONTENT-->
			<div class="rightcontent col-md-9 offset-0">
			
				<div class="hpadding20">
					<!-- Top filters -->
					<div class="topsortby">
						<div class="col-md-4 offset-0">
								
								<div class="left mt7"><b>Sort by:</b></div>
								
								<div class="right wh70percent">
									<select class="form-control mySelectBoxClass ">
									  <option selected>Guest rating</option>
									  <option>5 stars</option>
									  <option>4 stars</option>
									  <option>3 stars</option>
									  <option>2 stars</option>
									  <option>1 stars</option>
									</select>
								</div>

						</div>			
						<div class="col-md-4">
							<div class="w50percent">
								<div class="wh90percent">
									<select class="form-control mySelectBoxClass ">
									  <option selected>Name</option>
									  <option>A to Z</option>
									  <option>Z to A</option>
									</select>
								</div>
							</div>
							<div class="w50percentlast">
								<div class="wh90percent">
									<select class="form-control mySelectBoxClass ">
									  <option selected>Price</option>
									  <option>Ascending</option>
									  <option>Descending</option>
									</select>
								</div>
							</div>					
						</div>
						<div class="col-md-4 offset-0">
							<button class="popularbtn left">Most Popular</button>
							<div class="right">
								<button class="gridbtn" onClick="window.open('list2.php','_self');">&nbsp;</button>
								<button class="listbtn active">&nbsp;</button>
								<button class="grid2btn" onClick="window.open('list3.php','_self');">&nbsp;</button>
							</div>
						</div>
					</div>
					<!-- End of topfilters-->
				</div>
				<!-- End of padding -->
				
				<br/><br/>
				<div class="clearfix"></div>
				

				<div class="itemscontainer offset-1">
			
					<div class="hpadding20 center">
						<span class="opensans normal dark size24 textcenter">Find Dubai Activities & Family Fun Things to Do in Dubai</span>
					</div>
					
					<br/>
					<br/>
	
					<div class="offset-2">
						<div class="col-md-4 offset-0">
							<div class="listitem2">
								<a href="updates/update1/img/activities/act01.jpg" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><img src="updates/update1/img/activities/act01.jpg" alt=""/></a>
								<div class="liover"></div>
								<a class="fav-icon" href="#"></a>
								<a class="book-icon" href="details.php"></a>
							</div>
						</div>
						<div class="col-md-8 offset-0">
							<div class="itemlabel4">
								<div class="labelright">
									<br/><span class="green size18"><b>$36.00</b></span><br/>
									<span class="size11 grey">/person</span><br/><br/><br/>
									<img src="images/filter-rating-5.png" width="60" alt=""/><br/>
									<img src="images/user-rating-5.png" width="60" alt=""/><br/>
									<span class="size11 grey">18 Reviews</span><br/><br/><br/>
									<form action="details.php">
									 <button class="bookbtn mt1" type="submit">Book</button>	
									</form>			
								</div>
								<div class="labelleft2">			
									<span class="size16"><b>4x4 Sunset Desert Safari and Dhow Cruise Dinner</b></span><br/>
									<div class="line4 wh80percent"></div>
									
									<p class="grey size14 lh6">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec semper lectus. Suspendisse placerat enim mauris, eget lobortis nisi egestas et.
									Donec elementum metus et mi aliquam eleifend. Suspendisse volutpat egestas rhoncus.</p><br/>
								
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
					<div class="offset-2"><hr class="featurette-divider3"></div>
					
					<div class="offset-2">
						<div class="col-md-4 offset-0">
							<div class="listitem2">
								<a href="updates/update1/img/activities/act02.jpg" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><img src="updates/update1/img/activities/act02.jpg" alt=""/></a>
								<div class="liover"></div>
								<a class="fav-icon" href="#"></a>
								<a class="book-icon" href="details.php"></a>
							</div>
						</div>
						<div class="col-md-8 offset-0">
							<div class="itemlabel4">
								<div class="labelright">
									<br/><span class="green size18"><b>$39.00</b></span><br/>
									<span class="size11 grey">/person</span><br/><br/><br/>
									<img src="images/filter-rating-5.png" width="60" alt=""/><br/>
									<img src="images/user-rating-5.png" width="60" alt=""/><br/>
									<span class="size11 grey">18 Reviews</span><br/><br/><br/>
									<form action="details.php">
									 <button class="bookbtn mt1" type="submit">Book</button>	
									</form>			
								</div>
								<div class="labelleft2">			
									<span class="size16"><b>Aquaventure Waterpark and The Lost Chambers Aquarium</b></span><br/>
									<div class="line4 wh80percent"></div>									
									<p class="grey size14 lh6">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec semper lectus. Suspendisse placerat enim mauris, eget lobortis nisi egestas et.
									Donec elementum metus et mi aliquam eleifend. Suspendisse volutpat egestas rhoncus.</p><br/>
								
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
					<div class="offset-2"><hr class="featurette-divider3"></div>
					
					<div class="offset-2">
						<div class="col-md-4 offset-0">
							<div class="listitem2">
								<a href="updates/update1/img/activities/act03.jpg" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><img src="updates/update1/img/activities/act03.jpg" alt=""/></a>
								<div class="liover"></div>
								<a class="fav-icon" href="#"></a>
								<a class="book-icon" href="details.php"></a>
							</div>
						</div>
						<div class="col-md-8 offset-0">
							<div class="itemlabel4">
								<div class="labelright">
									<br/><span class="green size18"><b>$45.00</b></span><br/>
									<span class="size11 grey">/person</span><br/><br/><br/>
									<img src="images/filter-rating-5.png" width="60" alt=""/><br/>
									<img src="images/user-rating-5.png" width="60" alt=""/><br/>
									<span class="size11 grey">18 Reviews</span><br/><br/><br/>
									<form action="details.php">
									 <button class="bookbtn mt1" type="submit">Book</button>	
									</form>			
								</div>
								<div class="labelleft2">			
									<span class="size16"><b>Yas Waterworld and Ferrari World Abu Dhabi</b></span><br/>
									<div class="line4 wh80percent"></div>									
									<p class="grey size14 lh6">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec semper lectus. Suspendisse placerat enim mauris, eget lobortis nisi egestas et.
									Donec elementum metus et mi aliquam eleifend. Suspendisse volutpat egestas rhoncus.</p><br/>
								
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
					<div class="offset-2"><hr class="featurette-divider3"></div>
					
					<div class="offset-2">
						<div class="col-md-4 offset-0">
							<div class="listitem2">
								<a href="updates/update1/img/activities/act04.jpg" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><img src="updates/update1/img/activities/act04.jpg" alt=""/></a>
								<div class="liover"></div>
								<a class="fav-icon" href="#"></a>
								<a class="book-icon" href="details.php"></a>
							</div>
						</div>
						<div class="col-md-8 offset-0">
							<div class="itemlabel4">
								<div class="labelright">
									<br/><span class="green size18"><b>$49.00</b></span><br/>
									<span class="size11 grey">/person</span><br/><br/><br/>
									<img src="images/filter-rating-5.png" width="60" alt=""/><br/>
									<img src="images/user-rating-5.png" width="60" alt=""/><br/>
									<span class="size11 grey">18 Reviews</span><br/><br/><br/>
									<form action="details.php">
									 <button class="bookbtn mt1" type="submit">Book</button>	
									</form>			
								</div>
								<div class="labelleft2">			
									<span class="size16"><b>Dubai Half-Day City Tour</b></span><br/>
									<div class="line4 wh80percent"></div>									
									<p class="grey size14 lh6">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec semper lectus. Suspendisse placerat enim mauris, eget lobortis nisi egestas et.
									Donec elementum metus et mi aliquam eleifend. Suspendisse volutpat egestas rhoncus.</p><br/>
								
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
					<div class="offset-2"><hr class="featurette-divider3"></div>
					
					<div class="offset-2">
						<div class="col-md-4 offset-0">
							<div class="listitem2">
								<a href="updates/update1/img/activities/act05.jpg" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><img src="updates/update1/img/activities/act05.jpg" alt=""/></a>
								<div class="liover"></div>
								<a class="fav-icon" href="#"></a>
								<a class="book-icon" href="details.php"></a>
							</div>
						</div>
						<div class="col-md-8 offset-0">
							<div class="itemlabel4">
								<div class="labelright">
									<br/><span class="green size18"><b>$49.00</b></span><br/>
									<span class="size11 grey">/person</span><br/><br/><br/>
									<img src="images/filter-rating-5.png" width="60" alt=""/><br/>
									<img src="images/user-rating-5.png" width="60" alt=""/><br/>
									<span class="size11 grey">18 Reviews</span><br/><br/><br/>
									<form action="details.php">
									 <button class="bookbtn mt1" type="submit">Book</button>	
									</form>									
								</div>
								<div class="labelleft2">			
									<span class="size16"><b>Ski Dubai Ski Slope Access</b></span><br/>
									<div class="line4 wh80percent"></div>									
									<p class="grey size14 lh6">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec semper lectus. Suspendisse placerat enim mauris, eget lobortis nisi egestas et.
									Donec elementum metus et mi aliquam eleifend. Suspendisse volutpat egestas rhoncus.</p><br/>
								
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
					<div class="offset-2"><hr class="featurette-divider3"></div>
					

					<div class="offset-2">
						<div class="col-md-4 offset-0">
							<div class="listitem2">
								<a href="updates/update1/img/activities/act06.jpg" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><img src="updates/update1/img/activities/act06.jpg" alt=""/></a>
								<div class="liover"></div>
								<a class="fav-icon" href="#"></a>
								<a class="book-icon" href="details.php"></a>
							</div>
						</div>
						<div class="col-md-8 offset-0">
							<div class="itemlabel4">
								<div class="labelright">
									<br/><span class="green size18"><b>$49.00</b></span><br/>
									<span class="size11 grey">/person</span><br/><br/><br/>
									<img src="images/filter-rating-5.png" width="60" alt=""/><br/>
									<img src="images/user-rating-5.png" width="60" alt=""/><br/>
									<span class="size11 grey">18 Reviews</span><br/><br/><br/>
									<form action="details.php">
									 <button class="bookbtn mt1" type="submit">Book</button>	
									</form>									
								</div>
								<div class="labelleft2">			
									<span class="size16"><b>Dubai Skydiving</b></span><br/>
									<div class="line4 wh80percent"></div>									
									<p class="grey size14 lh6">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec semper lectus. Suspendisse placerat enim mauris, eget lobortis nisi egestas et.
									Donec elementum metus et mi aliquam eleifend. Suspendisse volutpat egestas rhoncus.</p><br/>
								
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
					<div class="offset-2"><hr class="featurette-divider3"></div>
					
					
					
				</div>	
				<!-- End of offset1-->		

				<div class="hpadding20">
				
					<ul class="pagination right paddingbtm20">
					  <li class="disabled"><a href="#">&laquo;</a></li>
					  <li><a href="#">1</a></li>
					  <li><a href="#">2</a></li>
					  <li><a href="#">3</a></li>
					  <li><a href="#">4</a></li>
					  <li><a href="#">5</a></li>
					  <li><a href="#">&raquo;</a></li>
					</ul>

				</div>

			</div>
			<!-- END OF LIST CONTENT-->
			
		

		</div>
		<!-- END OF container-->
		
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
    <script src="assets/js/js-list4.js"></script>	
	
    <!-- Custom Select -->
	<script type='text/javascript' src='assets/js/jquery.customSelect.js'></script>
	
    <!-- Custom Select -->
	<script type='text/javascript' src='js/lightbox.js'></script>	
	
    <!-- JS Ease -->	
    <script src="assets/js/jquery.easing.js"></script>
	
    <!-- Custom functions -->
    <script src="assets/js/functions.js"></script>
	
    <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Counter -->	
    <script src="assets/js/counter.js"></script>	
	
    <!-- Nicescroll  -->	
	<script src="assets/js/jquery.nicescroll.min.js"></script>
	
    <!-- Picker -->	
	<script src="assets/js/jquery-ui.js"></script>
	
    <!-- Bootstrap -->	
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
