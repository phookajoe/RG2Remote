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
	
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings2.css" media="screen" />

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
	<!-- / Top wrapper -->

	<!-- Blue background -->
	<div class="mtslide2 sliderbg2"></div>
	<!-- / Blue background -->

    <!-- WRAP -->
	<div class="wrap ctup" >
		
		<div class="slideup">
			<div class="container z-index100">		
				<div class="slidercontainer">
				
					<div class="row">
						<div class="col-md-4 scolleft">
							
						
							<div class="w50percent">
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
									<span class="hotel-ico"></span> Hotels
								  </label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
									<span class="flight-ico"></span> Flights
								  </label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadios" id="optionsRadios3" value="option2">
									<span class="suitcase-ico"></span> Vacations
								  </label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadios" id="optionsRadios4" value="option2">
									<span class="car-ico"></span> Cars
								  </label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadios" id="optionsRadios5" value="option2">
									<span class="cruise-ico"></span>Cruises
								  </label>
								</div>
							</div>
							
							<div class="w50percentlast">
								<p class="cstyle08">Packages:</p>
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadios" id="optionsRadios6" value="option2">
									Flight + Hotel + Car
								  </label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadios" id="optionsRadios7" value="option2">
									Flight + Hotel
								  </label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadios" id="optionsRadios8" value="option2">
									Flight + Car
								  </label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadios" id="optionsRadios9" value="option2">
									Hotel + Car
								  </label>
								</div>
							</div>	
							
							<div class="clearfix"></div><br/>
							
							<!-- HOTELS TAB -->
							<div class="hotelstab none">
								<span class="opensans size18">Where do you want to go?</span>
								<input type="text" class="form-control" placeholder="Greece">
								
								<br/>
								
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Check in date</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker" placeholder="mm/dd/yyyy"/>
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>Check in date</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker2" placeholder="mm/dd/yyyy"/>
									</div>
								</div>
								
								<div class="clearfix"></div>
								
								<div class="room1 margtop15">
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>ROOM 1</b></span><br/>
											
											<div class="addroom1 block"><a href="#room2" onclick="addroom2()" class="grey">+ Add room</a></div>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right ohidden">
											<div class="w50percent">
												<div class="wh90percent textleft left">
													<span class="opensans size13"><b>Adult</b></span>
													<select class="form-control mySelectBoxClass">
													  <option>1</option>
													  <option selected>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>							
											<div class="w50percentlast">
												<div class="wh90percent textleft right ohidden">
												<span class="opensans size13"><b>Child</b></span>
													<select class="form-control mySelectBoxClass">
													  <option>0</option>
													  <option selected>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="room2 none">
									<div class="clearfix"></div><div class="line1"></div>
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>ROOM 2</b></span><br/>
											<div class="addroom2 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom2()" class="orange"><img src="images/delete.png" alt="delete"/></a></div>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right">
											<div class="w50percent">
												<div class="wh90percent textleft left">
													<span class="opensans size13"><b>Adult</b></span>
													<select class="form-control mySelectBoxClass">
													  <option>1</option>
													  <option>2</option>
													  <option selected>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>							
											<div class="w50percentlast">
												<div class="wh90percent textleft right">
												<span class="opensans size13"><b>Child</b></span>
													<select class="form-control mySelectBoxClass">
													  <option selected>0</option>
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>		

								<div class="room3 none">
									<div class="clearfix"></div><div class="line1"></div>
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>ROOM 3</b></span><br/>
											<div class="addroom3 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom3()" class="orange"><img src="images/delete.png" alt="delete"/></a></div>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right">
											<div class="w50percent">
												<div class="wh90percent textleft left">
													<span class="opensans size13"><b>Adult</b></span>
													<select class="form-control mySelectBoxClass">
													  <option selected>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>							
											<div class="w50percentlast">
												<div class="wh90percent textleft right">
												<span class="opensans size13"><b>Child</b></span>
													<select class="form-control mySelectBoxClass">
													  <option selected>0</option>
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div><div class="clearfix"></div>
								<form action="list4.php">
									<button type="submit" class="btn-search3">Search</button>
								</form>
							</div>
							<!-- END OF HOTELS TAB -->
							
							<!-- FLIGHTS TAB -->
							<div class="flightstab none">
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Flying from</b></span>
										<input type="text" class="form-control" placeholder="City or airport">
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>To</b></span>
										<input type="text" class="form-control" placeholder="City or airport">
									</div>
								</div>
								
								
								<div class="clearfix"></div><br/>
								
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Departing</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker3" placeholder="mm/dd/yyyy"/>
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>Returning</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker4" placeholder="mm/dd/yyyy"/>
									</div>
								</div>
								
								<div class="clearfix"></div>
								
								<div class="room1 margtop15">
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>Adult</b></span>
											<select class="form-control mySelectBoxClass">
											  <option>1</option>
											  <option selected>2</option>
											  <option>3</option>
											  <option>4</option>
											  <option>5</option>
											</select>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right">
											<span class="opensans size13"><b>Child</b></span>
											<select class="form-control mySelectBoxClass">
											  <option>0</option>
											  <option selected>1</option>
											  <option>2</option>
											  <option>3</option>
											  <option>4</option>
											  <option>5</option>
											</select>
										</div>
									</div>
								</div><div class="clearfix"></div>
								<form action="list4.php">
									<button type="submit" class="btn-search3">Search</button>
								</form>
							</div>
							<!-- END OF FLIGHTS TAB -->
							
							<!-- VACATIONS TAB -->
							<div class="vacationstab none">
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Flying from</b></span>
										<input type="text" class="form-control" placeholder="City or airport">
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>To</b></span>
										<input type="text" class="form-control" placeholder="City or airport">
									</div>
								</div>
								
								<div class="clearfix"></div><br/>
								
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Check in date</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker7" placeholder="mm/dd/yyyy"/>
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>Check in date</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker8" placeholder="mm/dd/yyyy"/>
									</div>
								</div>
								
								<div class="clearfix"></div>
								
								<div class="room1 margtop15">
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>ROOM 1</b></span><br/>
											
											<div class="addroom1 block"><a href="#room2" onclick="addroom2()" class="grey">+ Add room</a></div>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right">
											<div class="w50percent">
												<div class="wh90percent textleft left">
													<span class="opensans size13"><b>Adult</b></span>
													<select class="form-control mySelectBoxClass">
													  <option>1</option>
													  <option selected>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>							
											<div class="w50percentlast">
												<div class="wh90percent textleft right">
												<span class="opensans size13"><b>Child</b></span>
													<select class="form-control mySelectBoxClass">
													  <option>0</option>
													  <option selected>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="room2 none">
									<div class="clearfix"></div><div class="line1"></div>
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>ROOM 2</b></span><br/>
											<div class="addroom2 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom2()" class="orange"><img src="images/delete.png" alt="delete"/></a></div>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right">
											<div class="w50percent">
												<div class="wh90percent textleft left">
													<span class="opensans size13"><b>Adult</b></span>
													<select class="form-control mySelectBoxClass">
													  <option>1</option>
													  <option>2</option>
													  <option selected>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>							
											<div class="w50percentlast">
												<div class="wh90percent textleft right">
												<span class="opensans size13"><b>Child</b></span>
													<select class="form-control mySelectBoxClass">
													  <option selected>0</option>
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>		

								<div class="room3 none">
									<div class="clearfix"></div><div class="line1"></div>
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>ROOM 3</b></span><br/>
											<div class="addroom3 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom3()" class="orange"><img src="images/delete.png" alt="delete"/></a></div>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right">
											<div class="w50percent">
												<div class="wh90percent textleft left">
													<span class="opensans size13"><b>Adult</b></span>
													<select class="form-control mySelectBoxClass">
													  <option selected>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>							
											<div class="w50percentlast">
												<div class="wh90percent textleft right">
												<span class="opensans size13"><b>Child</b></span>
													<select class="form-control mySelectBoxClass">
													  <option selected>0</option>
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div><div class="clearfix"></div>
								<form action="list4.php">
									<button type="submit" class="btn-search3">Search</button>
								</form>
							</div>
							<!-- END OF VACATIONS TAB -->
							
							<!-- CARS TAB -->
							<div class="carstab none">
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Picking up</b></span>
										<input type="text" class="form-control" placeholder="Airport, address">
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>Dropping off</b></span>
										<input type="text" class="form-control" placeholder="Airport, address">
									</div>
								</div>
								
								
								<div class="clearfix"></div><br/>
								
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Pick up date</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker5" placeholder="mm/dd/yyyy"/>
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>Hour</b></span>
										<select class="form-control mySelectBoxClass">
										  <option>12:00 AM</option>
										  <option>12:30 AM</option>
										  <option>01:00 AM</option>
										  <option>01:30 AM</option>
										  <option>02:00 AM</option>
										  <option>02:30 AM</option>
										  <option>03:00 AM</option>
										  <option>03:30 AM</option>
										  <option>04:00 AM</option>
										  <option>04:30 AM</option>
										  <option>05:00 AM</option>
										  <option>05:30 AM</option>
										  <option>06:00 AM</option>
										  <option>06:30 AM</option>
										  <option>07:00 AM</option>
										  <option>07:30 AM</option>
										  <option>08:00 AM</option>
										  <option>08:30 AM</option>
										  <option>09:00 AM</option>
										  <option>09:30 AM</option>
										  <option>10:00 AM</option>
										  <option selected>10:30 AM</option>
										  <option>11:00 AM</option>
										  <option>11:30 AM</option>
										  <option>12:00 PM</option>
										  <option>12:30 PM</option>								  
										  <option>01:00 PM</option>
										  <option>01:30 PM</option>
										  <option>02:00 PM</option>
										  <option>02:30 PM</option>
										  <option>03:00 PM</option>
										  <option>03:30 PM</option>
										  <option>04:00 PM</option>
										  <option>04:30 PM</option>
										  <option>05:00 PM</option>
										  <option>05:30 PM</option>
										  <option>06:00 PM</option>
										  <option>06:30 PM</option>
										  <option>07:00 PM</option>
										  <option>07:30 PM</option>
										  <option>08:00 PM</option>
										  <option>08:30 PM</option>
										  <option>09:00 PM</option>
										  <option>09:30 PM</option>
										  <option>10:00 PM</option>
										  <option>10:30 PM</option>
										  <option>11:00 PM</option>
										  <option>11:30 PM</option>								  
										</select>
									</div>
								</div>
								
								<div class="clearfix"></div>
								
								<div class="room1 margtop15">
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>Drop off date</b></span>
											<input type="text" class="form-control mySelectCalendar" id="datepicker6" placeholder="mm/dd/yyyy"/>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right">
											<span class="opensans size13"><b>Hour</b></span>
											<select class="form-control mySelectBoxClass">
											  <option>12:00 AM</option>
											  <option>12:30 AM</option>
											  <option>01:00 AM</option>
											  <option>01:30 AM</option>
											  <option>02:00 AM</option>
											  <option>02:30 AM</option>
											  <option>03:00 AM</option>
											  <option>03:30 AM</option>
											  <option>04:00 AM</option>
											  <option>04:30 AM</option>
											  <option>05:00 AM</option>
											  <option>05:30 AM</option>
											  <option>06:00 AM</option>
											  <option>06:30 AM</option>
											  <option>07:00 AM</option>
											  <option>07:30 AM</option>
											  <option>08:00 AM</option>
											  <option>08:30 AM</option>
											  <option>09:00 AM</option>
											  <option>09:30 AM</option>
											  <option>10:00 AM</option>
											  <option selected>10:30 AM</option>
											  <option>11:00 AM</option>
											  <option>11:30 AM</option>
											  <option>12:00 PM</option>
											  <option>12:30 PM</option>								  
											  <option>01:00 PM</option>
											  <option>01:30 PM</option>
											  <option>02:00 PM</option>
											  <option>02:30 PM</option>
											  <option>03:00 PM</option>
											  <option>03:30 PM</option>
											  <option>04:00 PM</option>
											  <option>04:30 PM</option>
											  <option>05:00 PM</option>
											  <option>05:30 PM</option>
											  <option>06:00 PM</option>
											  <option>06:30 PM</option>
											  <option>07:00 PM</option>
											  <option>07:30 PM</option>
											  <option>08:00 PM</option>
											  <option>08:30 PM</option>
											  <option>09:00 PM</option>
											  <option>09:30 PM</option>
											  <option>10:00 PM</option>
											  <option>10:30 PM</option>
											  <option>11:00 PM</option>
											  <option>11:30 PM</option>		
											</select>
										</div>
									</div>
								</div><div class="clearfix"></div>
								<form action="list4.php">
									<button type="submit" class="btn-search3">Search</button>
								</form>
							</div>
							<!-- END OF CARS TAB -->
							
							<!-- CRUISE TAB -->
							<div class="cruisestab none">
								<div class="fullwidth">
									<span class="opensans size13"><b>Going to</b></span>
									<select class="form-control mySelectBoxClass">
									  <option selected>Show all</option>
									  <optgroup label="Most Popular">
										  <option>Caribbean</option>
										  <option>Bahamas</option>
										  <option>Mexico</option>
										  <option>Alaska</option>
										  <option>Europe</option>
										  <option>Bermuda</option>
										  <option>Hawaii</option>
									  </optgroup>
									  <optgroup label="Other Destinations">
										  <option>Africa</option>
										  <option>Arctic/Antartctic</option>
										  <option>Asia</option>
										  <option>Australia/New Zealand</option>
										  <option>Central America</option>
										  <option>Cruise to Nowhere</option>
										  <option>Galapagos</option>
										  <option>Greenland/Iceland</option>
										  <option>Middle East</option>
										  <option>Pacific Coastal</option>
										  <option>Panama Canal</option>
										  <option>South Africa</option>
										  <option>South Pacific</option>
										  <option>Tahiti</option>
										  <option>Transatlantic</option>
										  <option>World Cruises</option>
									  </optgroup>
									</select>

									<br/>
									<br/>
									
									<span class="opensans size13"><b>Departure</b></span>
									<select class="form-control mySelectBoxClass">
									  <option selected>Show all</option>
									  <option>October 2013</option>
									  <option>November 2013</option>
									  <option>December 2013</option>
									  <option>January 2014</option>
									  <option>February 2014</option>
									  <option>March 2014</option>
									  <option>April 2014</option>
									  <option>May 2014</option>
									  <option>June 2014</option>
									  <option>July 2014</option>
									  <option>August 2014</option>
									  <option>September 2014</option>
									  <option>October 2014</option>
									  <option>November 2014</option>
									  <option>December 2014</option>
									</select>
								</div><div class="clearfix"></div>
								<form action="list4.php">
									<button type="submit" class="btn-search3">Search</button>
								</form>
							</div>
							<!-- END OF CRUISE TAB -->					
							
							
							<!-- FLIGHT+HOTEL+CAR TAB -->					
							<div class="flighthotelcartab none">
									
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Flying from</b></span>
										<input type="text" class="form-control" placeholder="City or airport">
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>To</b></span>
										<input type="text" class="form-control" placeholder="City or airport">
									</div>
								</div>
									
								<div class="clearfix"></div><br/>
									
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Departing</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker13" placeholder="mm/dd/yyyy"/>
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>Returning</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker14" placeholder="mm/dd/yyyy"/>
									</div>
								</div>

								<div class="clearfix"></div><br/>
								
								<div class="room1" >
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>ROOM 1</b></span><br/>
											
											<div class="addroom1 block"><a href="#room2" onclick="addroom2()" class="grey">+ Add room</a></div>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right ohidden">
											<div class="w50percent">
												<div class="wh90percent textleft left">
													<span class="opensans size13"><b>Adult</b></span>
													<select class="form-control mySelectBoxClass">
													  <option>1</option>
													  <option selected>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>							
											<div class="w50percentlast">
												<div class="wh90percent textleft right ohidden">
												<span class="opensans size13"><b>Child</b></span>
													<select class="form-control mySelectBoxClass">
													  <option>0</option>
													  <option selected>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="room2 none">
									<div class="clearfix"></div><div class="line1"></div>
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>ROOM 2</b></span><br/>
											<div class="addroom2 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom2()" class="orange"><img src="images/delete.png" alt="delete"/></a></div>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right">
											<div class="w50percent">
												<div class="wh90percent textleft left">
													<span class="opensans size13"><b>Adult</b></span>
													<select class="form-control mySelectBoxClass">
													  <option>1</option>
													  <option>2</option>
													  <option selected>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>							
											<div class="w50percentlast">
												<div class="wh90percent textleft right">
												<span class="opensans size13"><b>Child</b></span>
													<select class="form-control mySelectBoxClass">
													  <option selected>0</option>
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>		

								<div class="room3 none">
									<div class="clearfix"></div><div class="line1"></div>
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>ROOM 3</b></span><br/>
											<div class="addroom3 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom3()" class="orange"><img src="images/delete.png" alt="delete"/></a></div>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right">
											<div class="w50percent">
												<div class="wh90percent textleft left">
													<span class="opensans size13"><b>Adult</b></span>
													<select class="form-control mySelectBoxClass">
													  <option selected>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>							
											<div class="w50percentlast">
												<div class="wh90percent textleft right">
												<span class="opensans size13"><b>Child</b></span>
													<select class="form-control mySelectBoxClass">
													  <option selected>0</option>
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div><div class="clearfix"></div>
								<div class="center size10 ca03">! An economy car will be added to your search. (You may change your car options later.)</div>							
								<form action="list4.php">
									<button type="submit" class="btn-search3">Search</button>
								</form>
							</div>
							<!-- END OF FLIGHT+HOTE+CAR TAB -->
							
							
							<!-- FLIGHT+HOTEL TAB -->					
							<div class="flighthoteltab none">
							
								
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Flying from</b></span>
										<input type="text" class="form-control" placeholder="City or airport">
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>To</b></span>
										<input type="text" class="form-control" placeholder="City or airport">
									</div>
								</div>
								
								<div class="clearfix"></div><br/>
								

								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Departing</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker10" placeholder="mm/dd/yyyy"/>
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>Returning</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker9" placeholder="mm/dd/yyyy"/>
									</div>
								</div>
								
								<div class="clearfix"></div><br/>
								
								<div class="room1" >
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>ROOM 1</b></span><br/>
											
											<div class="addroom1 block"><a href="#room2" onclick="addroom2()" class="grey">+ Add room</a></div>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right ohidden">
											<div class="w50percent">
												<div class="wh90percent textleft left">
													<span class="opensans size13"><b>Adult</b></span>
													<select class="form-control mySelectBoxClass">
													  <option>1</option>
													  <option selected>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>							
											<div class="w50percentlast">
												<div class="wh90percent textleft right ohidden">
												<span class="opensans size13"><b>Child</b></span>
													<select class="form-control mySelectBoxClass">
													  <option>0</option>
													  <option selected>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="room2 none">
									<div class="clearfix"></div><div class="line1"></div>
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>ROOM 2</b></span><br/>
											<div class="addroom2 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom2()" class="orange"><img src="images/delete.png" alt="delete"/></a></div>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right">
											<div class="w50percent">
												<div class="wh90percent textleft left">
													<span class="opensans size13"><b>Adult</b></span>
													<select class="form-control mySelectBoxClass">
													  <option>1</option>
													  <option>2</option>
													  <option selected>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>							
											<div class="w50percentlast">
												<div class="wh90percent textleft right">
												<span class="opensans size13"><b>Child</b></span>
													<select class="form-control mySelectBoxClass">
													  <option selected>0</option>
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>		

								<div class="room3 none">
									<div class="clearfix"></div><div class="line1"></div>
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>ROOM 3</b></span><br/>
											<div class="addroom3 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom3()" class="orange"><img src="images/delete.png" alt="delete"/></a></div>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right">
											<div class="w50percent">
												<div class="wh90percent textleft left">
													<span class="opensans size13"><b>Adult</b></span>
													<select class="form-control mySelectBoxClass">
													  <option selected>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>							
											<div class="w50percentlast">
												<div class="wh90percent textleft right">
												<span class="opensans size13"><b>Child</b></span>
													<select class="form-control mySelectBoxClass">
													  <option selected>0</option>
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="clearfix"></div>
								<form action="list4.php">
									<button type="submit" class="btn-search3">Search</button>
								</form>				
							</div>
							<!-- END OF FLIGHT+HOTE TAB -->					
							
							<!-- FLIGHT+CAR TAB -->					
							<div class="flightcartab none">
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Flying from</b></span>
										<input type="text" class="form-control" placeholder="City or airport">
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>To</b></span>
										<input type="text" class="form-control" placeholder="City or airport">
									</div>
								</div>
								
								<div class="clearfix"></div><br/>
								

								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Departing</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker11" placeholder="mm/dd/yyyy"/>
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>Returning</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker12" placeholder="mm/dd/yyyy"/>
									</div>
								</div>
								
								<div class="clearfix"></div><br/>
								
								<div class="center size10 ca03">! An economy car will be added to your search. (You may change your car options later.)</div>
								<div class="clearfix"></div>
								<form action="list4.php">
									<button type="submit" class="btn-search3">Search</button>
								</form>									
							</div>
							<!-- END OF FLIGHT+CAR TAB -->		
							
							<!-- HOTEL+CAR TAB -->					
							<div class="hotelcartab none">
								
								<span class="opensans size18">Where do you want to go?</span>
								<input type="text" class="form-control" placeholder="Greece">
								
								<br/>
								
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Check in date</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker15" placeholder="mm/dd/yyyy"/>
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>Check in date</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker16" placeholder="mm/dd/yyyy"/>
									</div>
								</div>
								
								<div class="clearfix"></div>
								
								<div class="room1 margtop15">
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>ROOM 1</b></span><br/>
											
											<div class="addroom1 block"><a href="#room2" onclick="addroom2()" class="grey">+ Add room</a></div>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right ohidden">
											<div class="w50percent">
												<div class="wh90percent textleft left">
													<span class="opensans size13"><b>Adult</b></span>
													<select class="form-control mySelectBoxClass">
													  <option>1</option>
													  <option selected>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>							
											<div class="w50percentlast">
												<div class="wh90percent textleft right ohidden">
												<span class="opensans size13"><b>Child</b></span>
													<select class="form-control mySelectBoxClass">
													  <option>0</option>
													  <option selected>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="room2 none">
									<div class="clearfix"></div><div class="line1"></div>
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>ROOM 2</b></span><br/>
											<div class="addroom2 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom2()" class="orange"><img src="images/delete.png" alt="delete"/></a></div>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right">
											<div class="w50percent">
												<div class="wh90percent textleft left">
													<span class="opensans size13"><b>Adult</b></span>
													<select class="form-control mySelectBoxClass">
													  <option>1</option>
													  <option>2</option>
													  <option selected>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>							
											<div class="w50percentlast">
												<div class="wh90percent textleft right">
												<span class="opensans size13"><b>Child</b></span>
													<select class="form-control mySelectBoxClass">
													  <option selected>0</option>
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>		

								<div class="room3 none">
									<div class="clearfix"></div><div class="line1"></div>
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>ROOM 3</b></span><br/>
											<div class="addroom3 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom3()" class="orange"><img src="images/delete.png" alt="delete"/></a></div>
										</div>
									</div>

									<div class="w50percentlast">	
										<div class="wh90percent textleft right">
											<div class="w50percent">
												<div class="wh90percent textleft left">
													<span class="opensans size13"><b>Adult</b></span>
													<select class="form-control mySelectBoxClass">
													  <option selected>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>							
											<div class="w50percentlast">
												<div class="wh90percent textleft right">
												<span class="opensans size13"><b>Child</b></span>
													<select class="form-control mySelectBoxClass">
													  <option selected>0</option>
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div><div class="clearfix"></div><br/>
								<div class="center size10 ca03">! An economy car will be added to your search. (You may change your car options later.)</div>
								<form action="list4.php">
									<button type="submit" class="btn-search3">Search</button>
								</form>					
							</div>
							<!-- END OF HOTEL+CAR TAB -->	
							
						</div>
						<div class="col-md-8 scolright">
						
							<!--
							#################################
								- THEMEPUNCH BANNER -
							#################################
							-->

							<div class="fullwidthbanner">
								<ul >

									<!-- papercut fade turnoff flyin slideright slideleft slideup slidedown-->
									
									<!-- FADE -->
									<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
										<img src="images/slider/bahamas.jpg" alt=""/>
										<div class="tp-caption  sfl"
											 data-x="0"
											 data-y="10"
											 data-speed="1000"
											 data-start="800"
											 data-easing="easeOutExpo"  >
											<div class="slidecouple"></div>
										</div>	
										<div class="tp-caption sfb"
											 data-x="left"
											 data-y="371"
											 data-speed="1000"
											 data-start="800"
											 data-easing="easeOutExpo"  >
											<div class="blacklable">
											<h4 class="lato bold white">Bahamas from <span class="green">$1.500</span> per week</h4>
											<h5 class="lato grey mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut egestas ligula</h5>
											</div>
										</div>
										<div class="tp-caption scrolleffect sfr"
											 data-x="right"
											 data-y="100"
											 data-speed="1000"
											 data-start="800"
											 data-easing="easeOutExpo"  >
											 <div class="sboxpurple textcenter">
												<span class="lato size18 slim caps white">Islands</span><br/><br/><br/>
												<span class="lato size65 slim caps white">Bahamas</span><br/>
												<span class="lato size13 normal caps white">from</span><br/><br/>
												<span class="lato size40 slim caps yellow">$1500</span><br/>
											 </div>
										</div>	
									</li>
								
									<!-- FADE -->
									<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
										<img src="images/slider/rome.jpg" alt=""/>
										<div class="tp-caption scrolleffect sft"
											 data-x="center"
											 data-y="100"
											 data-speed="1000"
											 data-start="800"
											 data-easing="easeOutExpo"  >
											 <div class="sboxpurple textcenter">
												<span class="lato size28 slim caps white">Italy</span><br/><br/><br/>
												<span class="lato size100 slim caps white">Rome</span><br/>
												<span class="lato size20 normal caps white">from</span><br/><br/>
												<span class="lato size48 slim uppercase yellow">$1500</span><br/>
											 </div>
										</div>	
										<div class="tp-caption sfb"
											 data-x="left"
											 data-y="371"
											 data-speed="1000"
											 data-start="800"
											 data-easing="easeOutExpo"  >
											<div class="blacklable">
											<h4 class="lato bold white">Rome from <span class="green">$1.500</span> per week</h4>
											<h5 class="lato grey mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut egestas ligula</h5>
											</div>
										</div>	
									</li>	

									<!-- FADE -->
									<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
										
										<img src="images/slider/paris.jpg" alt=""/>
										<div class="tp-caption scrolleffect sft"
											 data-x="center"
											 data-y="100"
											 data-speed="1000"
											 data-start="800"
											 data-easing="easeOutExpo"  >
											 <div class="sboxpurple textcenter">
												<span class="lato size28 slim caps white">France</span><br/><br/><br/>
												<span class="lato size100 slim caps white">Paris</span><br/>
												<span class="lato size20 normal caps white">from</span><br/><br/>
												<span class="lato size48 slim uppercase yellow">$1500</span><br/>
											 </div>
										</div>	
										<div class="tp-caption sfb"
											 data-x="left"
											 data-y="371"
											 data-speed="1000"
											 data-start="800"
											 data-easing="easeOutExpo" >
											<div class="blacklable">
											<h4 class="lato bold white">Paris from <span class="green">$1.500</span> per week</h4>
											<h5 class="lato grey mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut egestas ligula</h5>
											</div>
										</div>	
									</li>	
									
									<!-- FADE -->
									<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
										<img src="images/slider/zakynthos.jpg" alt=""/>
										<div class="tp-caption scrolleffect sft"
											 data-x="center"
											 data-y="100"
											 data-speed="1000"
											 data-start="800"
											 data-easing="easeOutExpo"  >
											 <div class="sboxpurple textcenter">
												<span class="lato size28 slim caps white">Greece</span><br/><br/><br/>
												<span class="lato size100 slim caps white">Zakynthos</span><br/>
												<span class="lato size20 normal caps white">from</span><br/><br/>
												<span class="lato size48 slim uppercase yellow">$1500</span><br/>
											 </div>
										</div>	
										<div class="tp-caption sfb"
											 data-x="left"
											 data-y="371"
											 data-speed="1000"
											 data-start="800"
											 data-easing="easeOutExpo"  >
											<div class="blacklable">
											<h4 class="lato bold white">Zakynthos from <span class="green">$1.500</span> per week</h4>
											<h5 class="lato grey mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut egestas ligula</h5>
											</div>
										</div>	
									</li>
								
									<!-- FADE -->
									<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
										<img src="images/slider/santorini.jpg" alt=""/>
										<div class="tp-caption scrolleffect sft"
											 data-x="center"
											 data-y="100"
											 data-speed="1000"
											 data-start="800"
											 data-easing="easeOutExpo"  >
											 <div class="sboxpurple textcenter">
												<span class="lato size28 slim caps white">Greece</span><br/><br/><br/>
												<span class="lato size100 slim caps white">Santorini</span><br/>
												<span class="lato size20 normal caps white">from</span><br/><br/>
												<span class="lato size48 slim uppercase yellow">$1500</span><br/>
											 </div>
										</div>	
										<div class="tp-caption sfb"
											 data-x="left"
											 data-y="371"
											 data-speed="1000"
											 data-start="800"
											 data-easing="easeOutExpo"  >
											<div class="blacklable">
											<h4 class="lato bold white">Santorini from <span class="green">$1.500</span> per week</h4>
											<h5 class="lato grey mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut egestas ligula</h5>
											</div>
										</div>	
									</li>
									
								</ul>
								<div class="tp-bannertimer none"></div>
							</div>
						
						<!--
						##############################
						 - ACTIVATE THE BANNER HERE -
						##############################
						-->
						<script type="text/javascript">

							var tpj=jQuery;
							tpj.noConflict();

							tpj(document).ready(function() {

							if (tpj.fn.cssOriginal!=undefined)
								tpj.fn.css = tpj.fn.cssOriginal;

								var api = tpj('.fullwidthbanner').revolution(
									{
										delay:9000,
										startwidth:960,
										startheight:446,

										onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

										thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
										thumbHeight:50,
										thumbAmount:3,

										hideThumbs:0,
										navigationType:"bullet",				// bullet, thumb, none
										navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

										navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


										navigationHAlign:"right",				// Vertical Align top,center,bottom
										navigationVAlign:"bottom",					// Horizontal Align left,center,right
										navigationHOffset:30,
										navigationVOffset:30,

										soloArrowLeftHalign:"left",
										soloArrowLeftValign:"center",
										soloArrowLeftHOffset:20,
										soloArrowLeftVOffset:0,

										soloArrowRightHalign:"right",
										soloArrowRightValign:"center",
										soloArrowRightHOffset:20,
										soloArrowRightVOffset:0,

										touchenabled:"on",						// Enable Swipe Function : on/off


										stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
										stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

										hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
										hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
										hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


										fullWidth:"on",

										shadow:1								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

									});

									
									
									
									

									// TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
									// YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
										api.bind("revolution.slide.onloaded",function (e) {


											jQuery('.tparrows').each(function() {
												var arrows=jQuery(this);

												var timer = setInterval(function() {

													if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
													  arrows.fadeOut(300);
												},3000);
											})

											jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
												jQuery('.tp-simpleresponsive').addClass("mouseisover");
												jQuery('body').find('.tparrows').each(function() {
													jQuery(this).fadeIn(300);
												});
											}, function() {
												if (!jQuery(this).hasClass("tparrows"))
													jQuery('.tp-simpleresponsive').removeClass("mouseisover");
											})
										});
									// END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS

						});
						
						
						
						
						jQuery(document).ready(function($){
							// gets the width of black bar at the bottom of the slider
							var $gwsr = $('.scolright').outerWidth();
							$('.blacklable').css({'width' : $gwsr +'px'});
						});
						jQuery(window).resize(function() {
							jQuery(document).ready(function($){

								// gets the width of black bar at the bottom of the slider
								var $gwsr = $('.scolright').outerWidth();
								$('.blacklable').css({'width' : $gwsr +'px'});

							});
						});
						
						




						</script>
					
					
						</div>			
					
					</div><!-- end of row -->
				</div>
			</div>
		</div>
		
		<div class="deals4">
			<div class="container">	
				<div class="row">
					<div class="col-md-4">
						<div class="lbl">
							<a href="list4.php"><img src="images/egypt-thumb.jpg" alt="" class="fwimg"/></a>
							<div class="smallblacklabel">Last Minute</div>
						</div>
						<div class="deal">
							<a href="details.php"><img src="images/thumb-img.jpg" alt="" class="dealthumb"/></a>
							<div class="dealtitle">
								<p><a href="details.php" class="dark">Diana Hotel</a></p>
								<img src="images/smallrating-4.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
							</div>
							<div class="dealprice">
								<p class="size12 grey lh2">from<span class="price">$35</span><br/>per night</p>
							</div>					
						</div>
						<div class="deal">
							<a href="details.php"><img src="images/thumb-img.jpg" alt="" class="dealthumb"/></a>
							<div class="dealtitle">
								<p><a href="details.php" class="dark">Village Inn Studios & Family Apartments</a></p>
								<img src="images/smallrating-3.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
							</div>
							<div class="dealprice">
								<p class="size12 grey lh2">from<span class="price">$49</span><br/>per night</p>
							</div>					
						</div>	
						<div class="deal">
							<a href="details.php"><img src="images/thumb-img.jpg" alt="" class="dealthumb"/></a>
							<div class="dealtitle">
								<p><a href="details.php" class="dark">Palatino Hotel</a></p>
								<img src="images/smallrating-4.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
							</div>
							<div class="dealprice">
								<p class="size12 grey lh2">from<span class="price">$90</span><br/>per night</p>
							</div>					
						</div>				
					</div>
					<!-- End of first row-->
					
					<div class="col-md-4">
						<div class="lbl">
							<a href="list4.php"><img src="images/rome-thumb.jpg" alt="" class="fwimg"/></a>
							<div class="smallblacklabel">Early Booking</div>
						</div>
						<div class="deal">
							<a href="details.php"><img src="images/thumb-img.jpg" alt="" class="dealthumb"/></a>
							<div class="dealtitle">
								<p><a href="details.php" class="dark">Comfort Suites Paradise Island</a></p>
								<img src="images/smallrating-4.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Bahamas</span>
							</div>
							<div class="dealprice">
								<p class="size12 grey lh2">from<span class="price">$29</span><br/>per night</p>
							</div>					
						</div>
						<div class="deal">
							<a href="details.php"><img src="images/thumb-img.jpg" alt="" class="dealthumb"/></a>
							<div class="dealtitle">
								<p><a href="details.php" class="dark">Barcelo Malaga</a></p>
								<img src="images/smallrating-3.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Spain</span>
							</div>
							<div class="dealprice">
								<p class="size12 grey lh2">from<span class="price">$32</span><br/>per night</p>
							</div>					
						</div>	
						<div class="deal">
							<a href="details.php"><img src="images/thumb-img.jpg" alt="" class="dealthumb"/></a>
							<div class="dealtitle">
								<p><a href="details.php" class="dark">Palatino Hotel</a></p>
								<img src="images/smallrating-3.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
							</div>
							<div class="dealprice">
								<p class="size12 grey lh2">from<span class="price">$90</span><br/>per night</p>
							</div>					
						</div>					
					</div>
					<!-- End of first row-->
					
					<div class="col-md-4">
						<div class="lbl">
							<a href="list4.php"><img src="images/surfer-thumb.jpg" alt="" class="fwimg"/></a>
							<div class="smallblacklabel">Hot Deals</div>
						</div>
						<div class="deal">
							<a href="details.php"><img src="images/thumb-img.jpg" alt="" class="dealthumb"/></a>
							<div class="dealtitle">
								<p><a href="details.php" class="dark">Parayso Hotel And Spa</a></p>
								<img src="images/smallrating-4.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
							</div>
							<div class="dealprice">
								<p class="size12 grey lh2">from<span class="price">$49</span><br/>per night</p>
							</div>					
						</div>
						<div class="deal">
							<a href="details.php"><img src="images/thumb-img.jpg" alt="" class="dealthumb"/></a>
							<div class="dealtitle">
								<p><a href="details.php" class="dark">Village Inn Studios & Family Apartments</a></p>
								<img src="images/smallrating-3.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
							</div>
							<div class="dealprice">
								<p class="size12 grey lh2">from<span class="price">$79</span><br/>per night</p>
							</div>					
						</div>	
						<div class="deal">
							<a href="details.php"><img src="images/thumb-img.jpg" alt="" class="dealthumb"/></a>
							<div class="dealtitle">
								<p><a href="details.php" class="dark">Diana Hotel</a></p>
								<img src="images/smallrating-3.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
							</div>
							<div class="dealprice">
								<p class="size12 grey lh2">from<span class="price">$299</span><br/>per night</p>
							</div>					
						</div>				
					</div>
					<!-- End of first row-->			
				</div>
			</div>
		</div>
		
		<div class="lastminute4">
			<div class="container">	
				<img src="images/rating-4.png" alt=""/><br/>
				LAST MINUTE: <b>Barcelona</b> - 2 nights - Flight+4* Hotel, Dep 27h Aug from $209/person<br/>
				<form action="details.php">
					<button class="btn iosbtn" type="submit">Read more</button>
				</form>
			</div>
		</div>	
		
		<div class="container cstyle06">	

			<div class="row anim2">
			  <div class="col-md-3">
				<h2>Today's Top<br/>Deals</h2><br/>
				Start your search with a look at the best rates on our site. 
			  </div>
			  <div class="col-md-9">
			  
			  
			  
				<!-- Carousel -->
				<div class="wrapper">
					<div class="list_carousel">
						<ul id="foo">
							<li>
								<a href="list.php"><img src="images/thumb-hawaii.jpg" alt=""/></a>
								<div class="m1">
									<h6 class="lh1 dark"><b>Visit the Hawaii Beaches</b></h6>
									<h6 class="lh1 green">Save up to 30%</h6>							
								</div>
							</li>
							<li>
								<a href="list.php"><img src="images/thumb-santorini.jpg" alt=""/></a>
								<div class="m1">
									<h6 class="lh1 dark"><b>Santorini - Greece</b></h6>
									<h6 class="lh1 green">Save up to 30%</h6>							
								</div>							
							</li>
							<li>
								<a href="list.php"><img src="images/thumb-dubai.jpg" alt=""/></a>
								<div class="m1">
									<h6 class="lh1 dark"><b>Dubai</b></h6>
									<h6 class="lh1 green">Save up to 30%</h6>							
								</div>							
							</li>
							<li>
								<a href="list.php"><img src="images/thumb-hawaii.jpg" alt=""/></a>
								<div class="m1">
									<h6 class="lh1 dark"><b>Visit the Hawaii Beaches</b></h6>
									<h6 class="lh1 green">Save up to 30%</h6>							
								</div>
							</li>
							<li>
								<a href="list.php"><img src="images/thumb-santorini.jpg" alt=""/></a>
								<div class="m1">
									<h6 class="lh1 dark"><b>Santorini - Greece</b></h6>
									<h6 class="lh1 green">Save up to 30%</h6>							
								</div>							
							</li>
							<li>
								<a href="list.php"><img src="images/thumb-dubai.jpg" alt=""/></a>
								<div class="m1">
									<h6 class="lh1 dark"><b>Dubai</b></h6>
									<h6 class="lh1 green">Save up to 30%</h6>							
								</div>							
							</li>
						</ul>
						<div class="clearfix"></div>
						<a id="prev_btn" class="prev" href="#"><img src="images/spacer.png" alt=""/></a>
						<a id="next_btn" class="next" href="#"><img src="images/spacer.png" alt=""/></a>
					</div>
				</div>

			  
			  </div>
			</div>	
		
			<hr class="featurette-divider2">

			<div class="row anim3">
			  <div class="col-md-3">
				<h2>Featured<br/>Offers</h2><br/>
				Start your search with a look at the best rates on our site. 
			  </div>
			  <div class="col-md-9">
			  
				<!-- Carousel -->
				<div class="wrapper">
					<div class="list_carousel">		
						<ul id="foo2">
							<li>
								<a href="list2.php"><img src="images/thumb-africa.jpg" alt=""/></a>
								<div class="m1">
									<h6 class="lh1 dark"><b>South Africa Adventures</b></h6>
									<h6 class="lh1 green">Save up to 30%</h6>							
								</div>							
							</li>
							<li>
								<a href="list2.php"><img src="images/thumb-egipt.jpg" alt=""/></a>
								<div class="m1">
									<h6 class="lh1 dark"><b>Egipt</b></h6>
									<h6 class="lh1 green">Save up to 30%</h6>							
								</div>							
							</li>
							<li>
								<a href="list2.php"><img src="images/thumb-machupicchu.jpg" alt=""/></a>
								<div class="m1">
									<h6 class="lh1 dark"><b>Machu Picchu</b></h6>
									<h6 class="lh1 green">Save up to 30%</h6>							
								</div>	
							</li>	
							<li>
								<a href="list2.php"><img src="images/thumb-africa.jpg" alt=""/></a>
								<div class="m1">
									<h6 class="lh1 dark"><b>South Africa Adventures</b></h6>
									<h6 class="lh1 green">Save up to 30%</h6>							
								</div>							
							</li>
							<li>
								<a href="list2.php"><img src="images/thumb-egipt.jpg" alt=""/></a>
								<div class="m1">
									<h6 class="lh1 dark"><b>Egipt</b></h6>
									<h6 class="lh1 green">Save up to 30%</h6>							
								</div>							
							</li>
							<li>
								<a href="list2.php"><img src="images/thumb-machupicchu.jpg" alt=""/></a>
								<div class="m1">
									<h6 class="lh1 dark"><b>Machu Picchu</b></h6>
									<h6 class="lh1 green">Save up to 30%</h6>							
								</div>	
							</li>						
						</ul>
						<div class="clearfix"></div>
						<a id="prev_btn2" class="prev" href="#"><img src="images/spacer.png" alt=""/></a>
						<a id="next_btn2" class="next" href="#"><img src="images/spacer.png" alt=""/></a>
					</div>
				</div>
			  
			  </div>
			</div>			

		</div>
		


		<!-- FOOTER -->
		<div class="container none">		
			<footer>
			<p class="pull-right"><a href="#">Back to top</a></p>
			<p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
			</footer>
		</div>		
		
		<div class="footerbg">
			<div class="container">		
				
				<div class="col-md-3">
					<span class="ftitle">Let's socialize</span>
					<div class="scont">
						<a href="#" class="social1b"><img src="images/icon-facebook.png" alt=""/></a>
						<a href="#" class="social2b"><img src="images/icon-twitter.png" alt=""/></a>
						<a href="#" class="social3b"><img src="images/icon-gplus.png" alt=""/></a>
						<a href="#" class="social4b"><img src="images/icon-youtube.png" alt=""/></a>
						<br/><br/><br/>
						<img src="images/logosmal.png" alt="" /><br/>
						&copy; 2013  |  <a href="#">Privacy Policy</a><br/>
						All Rights Reserved 
						<br/><br/>
						
					</div>
				</div>
				<!-- End of column 1-->
				
				<div class="col-md-3">
					<span class="ftitle">Travel Specialists</span>
					<br/><br/>
					<ul class="footerlist">
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
					<span class="ftitle">Travel Specialists</span>
					<br/><br/>
					<ul class="footerlist">
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
					<span class="ftitle">Newsletter</span>
					<div class="relative">
						<input type="email" class="form-control fccustom2" id="exampleInputEmail1" placeholder="Enter email">
						<button type="submit" class="btn btn-default btncustom">Submit<img src="images/arrow.png" alt=""/></button>
					</div>
					<br/><br/>
					<span class="ftitle">Customer support</span><br/>
					<span class="pnr">1-866-599-6674</span><br/>
					office@travel.com
				</div>			
				<!-- End of column 4-->			
			
			

				
				
			</div>	
		</div>
		
		<div class="footerbg3">
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
		

		
	</div>
	<!-- WRAP -->
	
	
    <!-- Javascript -->
	
    <!-- This page JS -->
	<script src="assets/js/js-index7.js"></script>	
	
    <!-- Custom functions -->
    <script src="assets/js/functions.js"></script>
	
    <!-- Picker UI-->	
	<script src="assets/js/jquery-ui.js"></script>		
	
	<!-- Easing -->
    <script src="assets/js/jquery.easing.js"></script>
	
    <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	
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
