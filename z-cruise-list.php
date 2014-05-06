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
					<li><a href="#">Cruise</a></li>
					<li>/</li>
					<li><a href="#">Caribbean</a></li>
					<li>/</li>					
					<li><a href="#" class="active">Miami</a></li>					
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
						<p class="size13"><b>38</b> Itineraries Found</p>
						<p class="size30 bold"><span class="size13 normal darkblue">starting</span> $<span class="countprice"></span>.78 <span class="size13 normal darkblue">/person</span></p>
						<p class="size13">as little as <b>$93</b> per night</p>
						
					</div>
					<div class="tip-arrow"></div>
				</div>
				
	
				<div class="padding20title"><h3 class="opensans dark">Cruises</h3></div>
	
	
				<div class="bookfilters hpadding20">
					
				
						

						
						<!-- HOTELS TAB -->
						<div class="hotelstab2 none">
						
							<div>
								<span class="opensans size13">Going to</span>
								<select class="form-control mySelectBoxClass">
								  <option selected="yes">Caribbeam</option>
								  <option>...</option>
								</select>
							</div>
							
							<div class="margtop10">
								<span class="opensans size13">Departure</span>
								<select class="form-control mySelectBoxClass">
								  <option selected="yes">Miami,FL</option>
								  <option>...</option>
								</select>
							</div>
							
							<div class="margtop10">
								<div class="wh50percent">
									<span class="opensans size13">Travelers</span>
									<select class="form-control mySelectBoxClass">
									  <option>1</option>								
									  <option selected="yes">2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									  <option>6</option>
									  <option>7</option>
									  <option>8</option>
									  <option>9</option>
									  <option>10</option>
									</select>
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
				
				<!-- Ports type -->
				<button type="button" class="collapsebtn last" data-toggle="collapse" data-target="#collapse4">
				  Departure ports <span class="collapsearrow"></span>
				</button>	
				<div id="collapse4" class="collapse in">
					<div class="hpadding20">
						<div class="checkbox">
							<label>
							  <input type="checkbox">Baltimore, MD
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Barbados
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Charleston, SC
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Fort Lauderdale, FL
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Galveston, TX
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Jacksonville, FL
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Los Angeles, CA
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Miami, FL 
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">New Orleans, LA
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">New York, NY
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Port Canaveral (Orlando), FL
							</label>
						</div>




 


						

					</div>
					<div class="clearfix"></div>						
				</div>	
				<!-- End of Ports  -->
				
				
				<div class="line2"></div>
				
				<!-- Trip type -->
				<button type="button" class="collapsebtn last" data-toggle="collapse" data-target="#collapse5">
				  Trip duration <span class="collapsearrow"></span>
				</button>	
				<div id="collapse5" class="collapse in">
					<div class="hpadding20">
						<div class="checkbox">
							<label>
							  <input type="checkbox">2 - 5 Days
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">6 - 9 Days
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">10+ Days 
							</label>
						</div>


					</div>
					<div class="clearfix"></div>						
				</div>	
				<!-- End of Trip  -->
				
				
				<div class="line2"></div>
				
				<!-- Ships type -->
				<button type="button" class="collapsebtn last" data-toggle="collapse" data-target="#collapse6">
					Ships <span class="collapsearrow"></span>
				</button>	
				<div id="collapse6" class="collapse in">
					<div class="hpadding20">
						<div class="checkbox">
							<label>
							  <input type="checkbox">Carnival Dream
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Carnival Ecstasy
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Carnival Fantasy
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Carnival Fascination
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Carnival Liberty
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Carnival Sensation
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Disney Dream
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Disney Wonder
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Norwegian Sky
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Caribbean Princess
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Enchantment of the Seas
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Grandeur of the Seas
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Majesty of the Seas
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Serenade of the Seas
							</label>
						</div>
						

					</div>
					<div class="clearfix"></div>						
				</div>	
				<!-- End of Ships  -->
				
				
				
				
				
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
									  <option selected>Ships</option>
									  <option>Carnival Fantasy</option>
									  <option>Disney Dream</option>
									  <option>Caribbean Princess</option>
									  <option>Grandeur of the Seas</option>
									  <option>Majesty of the Seas</option>
									</select>
								</div>

						</div>			
						<div class="col-md-4">
							<div class="w50percent">
								<div class="wh90percent">
									<select class="form-control mySelectBoxClass ">
									  <option selected>Duration</option>
									  <option>2 - 5 Days</option>
									  <option>6 - 9 Days</option>
									  <option>10+ Days</option>
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
							<div class="wh50percent left">
								<select class="form-control mySelectBoxClass ">
								  <option selected>Name</option>
								  <option>A to Z</option>
								  <option>Z to A</option>
								</select>
							</div>
							<div class="right">
								<button class="gridbtn active">&nbsp;</button>
								<button class="listbtn active">&nbsp;</button>
								<button class="grid2btn active">&nbsp;</button>
							</div>
						</div>
					</div>
					<!-- End of topfilters-->
				</div>
				<!-- End of padding -->
				
				<br/><br/>
				<div class="clearfix"></div>
				

				<div class="itemscontainer offset-1">
			
					<!-- Cruise -->
					<div class="offset-2">
						<div class="col-md-4 offset-0">
							<div class="listitem2">
								<a href="updates/update1/img/cruises/cruise01.jpg" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><img src="updates/update1/img/cruises/cruise01.jpg" alt=""/></a>
								<div class="liover"></div>
								<a class="fav-icon" href="#"></a>
								<a class="book-icon" href="details.php"></a>
							</div>
						</div>
						<div class="col-md-8 offset-0">
							<div class="itemlabel4">
								<div class="labelright">
									<br/><span class="green size18"><b>$36.00</b></span><br/>
									<span class="size11 grey">avg/person</span><br/><br/><br/><br/><br/>

									<span class="size11 grey">
									as little as<br/>
									<span class="grey2"><b>$93</b></span> /night
									</span><br/><br/>

									 <button class="selectbtn mt1" type="button" data-toggle="collapse" data-target="#collapse10">Details</button>	
		
								</div>
								<div class="labelleft2">			
									<span class="size16"><b>4 Day Wester Caribbean</b></span><br/>
									<span class="opensans size14 grey"><span class="grey2">From:</span> Miami, FL</span><br/>
									<div class="line4 wh80percent"></div>
									
									<p class="grey size14 lh6">
										<span class="opensans size14 grey2">Abroad:</span> Carnival Ecstasy<br/>
										<span class="opensans size14 grey2">Sails to:</span> Key West, FL; Cozumel, Mexico
									</p><br/>
								
								</div>
							</div>
						</div>

						<div class="clearfix"></div>
						<div class="cruisedropd collapse in" id="collapse10">
							<ul class="cruislist">
								<li></li>
								<li>
									<span class="grey2">Jul 7, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
								<li>
									<span class="grey2">Jul 14, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
								<li>
									<span class="grey2">Jul 21, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
								<li>
									<span class="grey2">Jul 28, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Interior</li>
								<li class="crcstm02">$379.00</li>
								<li class="crcstm02">$379.00</li>
								<li class="crcstm02">$369.00</li>
								<li class="crcstm02">$369.00</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Ocean View</li>
								<li class="crcstm02">$439.00</li>
								<li class="crcstm02">$439.00</li>
								<li class="crcstm02">$429.00</li>
								<li class="crcstm02">$429.00</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Balcony</li>
								<li class="crcstm02">$659.00</li>
								<li class="crcstm02">$679.00</li>
								<li class="crcstm02">$659.00</li>
								<li class="crcstm02">$659.00</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Suites</li>
								<li class="crcstm02">$789.00</li>
								<li class="crcstm02">$789.00</li>
								<li class="crcstm02">$789.00</li>
								<li class="crcstm02">$789.00</li>
							</ul>
							<ul class="cruislist">
								<li></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
							</ul>
							<div class="clearfix"></div>
							<div class="crclose">
								<button class="bookbtn crpos right" type="button" data-toggle="collapse" data-target="#collapse10"><span class="glyphicon glyphicon-remove"></span></button>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- End of Cruise -->

					<div class="clearfix"></div>
					<div class="offset-2"><hr class="featurette-divider3"></div>
					

					<!-- Cruise -->
					<div class="offset-2">
						<div class="col-md-4 offset-0">
							<div class="listitem2">
								<a href="updates/update1/img/cruises/cruise02.jpg" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><img src="updates/update1/img/cruises/cruise02.jpg" alt=""/></a>
								<div class="liover"></div>
								<a class="fav-icon" href="#"></a>
								<a class="book-icon" href="details.php"></a>
							</div>
						</div>
						<div class="col-md-8 offset-0">
							<div class="itemlabel4">
								<div class="labelright">
									<br/><span class="green size18"><b>$36.00</b></span><br/>
									<span class="size11 grey">avg/person</span><br/><br/><br/><br/><br/>

									<span class="size11 grey">
									as little as<br/>
									<span class="grey2"><b>$93</b></span> /night
									</span><br/><br/>

									 <button class="selectbtn mt1" type="button" data-toggle="collapse" data-target="#collapse11">Details</button>	
		
								</div>
								<div class="labelleft2">			
									<span class="size16"><b>5 Day Western Caribbean</b></span><br/>
									<span class="opensans size14 grey"><span class="grey2">From:</span> Miami, FL</span><br/>
									<div class="line4 wh80percent"></div>
									
									<p class="grey size14 lh6">
										<span class="opensans size14 grey2">Abroad:</span> Carnival Ecstasy<br/>
										<span class="opensans size14 grey2">Sails to:</span> Key West, FL; Cozumel, Mexico
									</p><br/>
								
								</div>
							</div>
						</div>

						<div class="clearfix"></div>
						<div class="cruisedropd collapse" id="collapse11">
							<ul class="cruislist">
								<li></li>
								<li>
									<span class="grey2">Jul 7, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
								<li>
									<span class="grey2">Jul 14, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
								<li>
									<span class="grey2">Jul 21, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
								<li>
									<span class="grey2">Jul 28, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Interior</li>
								<li class="crcstm02">$379.00</li>
								<li class="crcstm02">$379.00</li>
								<li class="crcstm02">$369.00</li>
								<li class="crcstm02">$369.00</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Ocean View</li>
								<li class="crcstm02">$439.00</li>
								<li class="crcstm02">$439.00</li>
								<li class="crcstm02">$429.00</li>
								<li class="crcstm02">$429.00</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Balcony</li>
								<li class="crcstm02">$659.00</li>
								<li class="crcstm02">$679.00</li>
								<li class="crcstm02">$659.00</li>
								<li class="crcstm02">$659.00</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Suites</li>
								<li class="crcstm02">$789.00</li>
								<li class="crcstm02">$789.00</li>
								<li class="crcstm02">$789.00</li>
								<li class="crcstm02">$789.00</li>
							</ul>
							<ul class="cruislist">
								<li></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
							</ul>
							<div class="clearfix"></div>
							<div class="crclose">
								<button class="bookbtn crpos right" type="button" data-toggle="collapse" data-target="#collapse11"><span class="glyphicon glyphicon-remove"></span></button>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- End of Cruise -->

					<div class="clearfix"></div>
					<div class="offset-2"><hr class="featurette-divider3"></div>
					
					
					<!-- Cruise -->
					<div class="offset-2">
						<div class="col-md-4 offset-0">
							<div class="listitem2">
								<a href="updates/update1/img/cruises/cruise03.jpg" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><img src="updates/update1/img/cruises/cruise03.jpg" alt=""/></a>
								<div class="liover"></div>
								<a class="fav-icon" href="#"></a>
								<a class="book-icon" href="details.php"></a>
							</div>
						</div>
						<div class="col-md-8 offset-0">
							<div class="itemlabel4">
								<div class="labelright">
									<br/><span class="green size18"><b>$36.00</b></span><br/>
									<span class="size11 grey">avg/person</span><br/><br/><br/><br/><br/>

									<span class="size11 grey">
									as little as<br/>
									<span class="grey2"><b>$93</b></span> /night
									</span><br/><br/>

									 <button class="selectbtn mt1" type="button" data-toggle="collapse" data-target="#collapse12">Details</button>	
		
								</div>
								<div class="labelleft2">			
									<span class="size16"><b>7 Night Western Caribbean</b></span><br/>
									<span class="opensans size14 grey"><span class="grey2">From:</span> Miami, FL</span><br/>
									<div class="line4 wh80percent"></div>
									
									<p class="grey size14 lh6">
										<span class="opensans size14 grey2">Abroad:</span> Carnival Ecstasy<br/>
										<span class="opensans size14 grey2">Sails to:</span> Key West, FL; Cozumel, Mexico
									</p><br/>
								
								</div>
							</div>
						</div>

						<div class="clearfix"></div>
						<div class="cruisedropd collapse" id="collapse12">
							<ul class="cruislist">
								<li></li>
								<li>
									<span class="grey2">Jul 7, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
								<li>
									<span class="grey2">Jul 14, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
								<li>
									<span class="grey2">Jul 21, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
								<li>
									<span class="grey2">Jul 28, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Interior</li>
								<li class="crcstm02">$379.00</li>
								<li class="crcstm02">$379.00</li>
								<li class="crcstm02">$369.00</li>
								<li class="crcstm02">$369.00</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Ocean View</li>
								<li class="crcstm02">$439.00</li>
								<li class="crcstm02">$439.00</li>
								<li class="crcstm02">$429.00</li>
								<li class="crcstm02">$429.00</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Balcony</li>
								<li class="crcstm02">$659.00</li>
								<li class="crcstm02">$679.00</li>
								<li class="crcstm02">$659.00</li>
								<li class="crcstm02">$659.00</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Suites</li>
								<li class="crcstm02">$789.00</li>
								<li class="crcstm02">$789.00</li>
								<li class="crcstm02">$789.00</li>
								<li class="crcstm02">$789.00</li>
							</ul>
							<ul class="cruislist">
								<li></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
							</ul>
							<div class="clearfix"></div>
							<div class="crclose">
								<button class="bookbtn crpos right" type="button" data-toggle="collapse" data-target="#collapse12"><span class="glyphicon glyphicon-remove"></span></button>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- End of Cruise -->

					<div class="clearfix"></div>
					<div class="offset-2"><hr class="featurette-divider3"></div>		
					
					
					<!-- Cruise -->
					<div class="offset-2">
						<div class="col-md-4 offset-0">
							<div class="listitem2">
								<a href="updates/update1/img/cruises/cruise04.jpg" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><img src="updates/update1/img/cruises/cruise04.jpg" alt=""/></a>
								<div class="liover"></div>
								<a class="fav-icon" href="#"></a>
								<a class="book-icon" href="details.php"></a>
							</div>
						</div>
						<div class="col-md-8 offset-0">
							<div class="itemlabel4">
								<div class="labelright">
									<br/><span class="green size18"><b>$36.00</b></span><br/>
									<span class="size11 grey">avg/person</span><br/><br/><br/><br/><br/>

									<span class="size11 grey">
									as little as<br/>
									<span class="grey2"><b>$93</b></span> /night
									</span><br/><br/>

									 <button class="selectbtn mt1" type="button" data-toggle="collapse" data-target="#collapse13">Details</button>	
		
								</div>
								<div class="labelleft2">			
									<span class="size16"><b>5 Night Eastern Caribbean</b></span><br/>
									<span class="opensans size14 grey"><span class="grey2">From:</span> Miami, FL</span><br/>
									<div class="line4 wh80percent"></div>
									
									<p class="grey size14 lh6">
										<span class="opensans size14 grey2">Abroad:</span> Carnival Ecstasy<br/>
										<span class="opensans size14 grey2">Sails to:</span> Key West, FL; Cozumel, Mexico
									</p><br/>
								
								</div>
							</div>
						</div>

						<div class="clearfix"></div>
						<div class="cruisedropd collapse" id="collapse13">
							<ul class="cruislist">
								<li></li>
								<li>
									<span class="grey2">Jul 7, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
								<li>
									<span class="grey2">Jul 14, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
								<li>
									<span class="grey2">Jul 21, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
								<li>
									<span class="grey2">Jul 28, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Interior</li>
								<li class="crcstm02">$379.00</li>
								<li class="crcstm02">$379.00</li>
								<li class="crcstm02">$369.00</li>
								<li class="crcstm02">$369.00</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Ocean View</li>
								<li class="crcstm02">$439.00</li>
								<li class="crcstm02">$439.00</li>
								<li class="crcstm02">$429.00</li>
								<li class="crcstm02">$429.00</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Balcony</li>
								<li class="crcstm02">$659.00</li>
								<li class="crcstm02">$679.00</li>
								<li class="crcstm02">$659.00</li>
								<li class="crcstm02">$659.00</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Suites</li>
								<li class="crcstm02">$789.00</li>
								<li class="crcstm02">$789.00</li>
								<li class="crcstm02">$789.00</li>
								<li class="crcstm02">$789.00</li>
							</ul>
							<ul class="cruislist">
								<li></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
							</ul>
							<div class="clearfix"></div>
							<div class="crclose">
								<button class="bookbtn crpos right" type="button" data-toggle="collapse" data-target="#collapse13"><span class="glyphicon glyphicon-remove"></span></button>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- End of Cruise -->

					<div class="clearfix"></div>
					<div class="offset-2"><hr class="featurette-divider3"></div>	
					

					<!-- Cruise -->
					<div class="offset-2">
						<div class="col-md-4 offset-0">
							<div class="listitem2">
								<a href="updates/update1/img/cruises/cruise05.jpg" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><img src="updates/update1/img/cruises/cruise05.jpg" alt=""/></a>
								<div class="liover"></div>
								<a class="fav-icon" href="#"></a>
								<a class="book-icon" href="details.php"></a>
							</div>
						</div>
						<div class="col-md-8 offset-0">
							<div class="itemlabel4">
								<div class="labelright">
									<br/><span class="green size18"><b>$36.00</b></span><br/>
									<span class="size11 grey">avg/person</span><br/><br/><br/><br/><br/>

									<span class="size11 grey">
									as little as<br/>
									<span class="grey2"><b>$93</b></span> /night
									</span><br/><br/>

									 <button class="selectbtn mt1" type="button" data-toggle="collapse" data-target="#collapse14">Details</button>	
		
								</div>
								<div class="labelleft2">			
									<span class="size16"><b>4 Night Eastern Caribbean</b></span><br/>
									<span class="opensans size14 grey"><span class="grey2">From:</span> Miami, FL</span><br/>
									<div class="line4 wh80percent"></div>
									
									<p class="grey size14 lh6">
										<span class="opensans size14 grey2">Abroad:</span> Carnival Ecstasy<br/>
										<span class="opensans size14 grey2">Sails to:</span> Key West, FL; Cozumel, Mexico
									</p><br/>
								
								</div>
							</div>
						</div>

						<div class="clearfix"></div>
						<div class="cruisedropd collapse" id="collapse14">
							<ul class="cruislist">
								<li></li>
								<li>
									<span class="grey2">Jul 7, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
								<li>
									<span class="grey2">Jul 14, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
								<li>
									<span class="grey2">Jul 21, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
								<li>
									<span class="grey2">Jul 28, 2014</span><br/>
									<span class="grey">Mon - Fri</span>
								</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Interior</li>
								<li class="crcstm02">$379.00</li>
								<li class="crcstm02">$379.00</li>
								<li class="crcstm02">$369.00</li>
								<li class="crcstm02">$369.00</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Ocean View</li>
								<li class="crcstm02">$439.00</li>
								<li class="crcstm02">$439.00</li>
								<li class="crcstm02">$429.00</li>
								<li class="crcstm02">$429.00</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Balcony</li>
								<li class="crcstm02">$659.00</li>
								<li class="crcstm02">$679.00</li>
								<li class="crcstm02">$659.00</li>
								<li class="crcstm02">$659.00</li>
							</ul>
							<ul class="cruislist">
								<li class="crcstm01">Suites</li>
								<li class="crcstm02">$789.00</li>
								<li class="crcstm02">$789.00</li>
								<li class="crcstm02">$789.00</li>
								<li class="crcstm02">$789.00</li>
							</ul>
							<ul class="cruislist">
								<li></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
								<li><button class="bookbtn2 crpos" type="submit">Book</button></li>
							</ul>
							<div class="clearfix"></div>
							<div class="crclose">
								<button class="bookbtn crpos right" type="button" data-toggle="collapse" data-target="#collapse14"><span class="glyphicon glyphicon-remove"></span></button>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- End of Cruise -->

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
