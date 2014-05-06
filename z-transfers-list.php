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
	
	
	
	<div class="container breadcrub">
	    <div>
			<a class="homebtn left" href="#"></a>
			<div class="left">
				<ul class="bcrumbs">
					<li>/</li>
					<li><a href="#">Transfers</a></li>
					<li>/</li>
					<li><a href="#">Airports</a></li>
					<li>/</li>			
					<li><a href="#">United Kingdom</a></li>
					<li>/</li>								
					<li><a href="#" class="active">London</a></li>					
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
						<p class="size13"><b>9</b> vehicles found</p>
						<p class="size30 bold"><span class="size13 normal darkblue">Starting</span> $<span class="countprice"></span>.78 <span class="size13 normal darkblue">/way</span></p>
						
					</div>
					<div class="tip-arrow"></div>
				</div>
				
	
				<div class="bookfilters hpadding20">
					
				
				<div class="size30 dark">Transfers</div>				
					<!-- CARS TAB -->
					<div class="">
					
						<table class="wh100percent margtop7">
							<tr>
								<td>
									<div class="radio radiomargin0">
									  <label>
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										Airports&nbsp;&nbsp;&nbsp;
									  </label>
									</div>
								</td>
								<td>
									<div class="radio radiomargin0">
									  <label>
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										Ports
									  </label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="radio radiomargin0">
									  <label>
										<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
										Ski
									  </label>
									</div>
								</td>
								<td>
									<div class="radio radiomargin0">
									  <label>
										<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
										Trains
									  </label>
									</div>
								</td>
							</tr>							
						</table>
					
						<select class="form-control mySelectBoxClass margtop20">
						  <option selected>From the airport</option>
						  <option>To the airport</option>
						</select>
						<div class="margtop10">
							<span class="opensans size13">Picking up location</span>
							<input type="text" class="form-control" placeholder="Enter airport">
						</div>
						<select class="form-control mySelectBoxClass margtop10">
						  <option selected>Drop off location</option>
						  <option>Cambridge</option>
						</select>
						
						<div class="clearfix pbottom15"></div>
						
						<div class="w50percent">
							<div class="wh90percent textleft">
								<span class="opensans size13">Date</span>
								<input type="text" class="form-control mySelectCalendar" id="datepicker5" placeholder="mm/dd/yyyy"/>
							</div>
						</div>

						<div class="w50percentlast">
							<div class="wh90percent textleft right">
								<span class="opensans size13">Nr. of persons</span>
								<input type="text" class="form-control" placeholder="2">
							</div>
						</div>
						
						<div class="clearfix pbottom15"></div>
						
						<div class="room1" >
							<div class="w50percent">
								<div class="wh90percent textleft">
									<span class="opensans size13">Hour</span>
									<select class="form-control mySelectBoxClass">
									  <option>00</option>
									  <option>01</option>
									  <option>02</option>
									  <option>03</option>
									  <option>04</option>
									  <option>05</option>
									  <option>06</option>
									  <option>07</option>
									  <option>08</option>
									  <option>09</option>
									  <option>10</option>
									  <option>11</option>
									  <option selected="yes">12</option>
									  <option>13</option>
									  <option>14</option>
									  <option>15</option>
									  <option>16</option>
									  <option>17</option>
									  <option>18</option>
									  <option>19</option>
									  <option>20</option>
									  <option>21</option>
									  <option>22</option>
									  <option>23</option>
									</select>
								</div>
							</div>

							<div class="w50percentlast">	
								<div class="wh90percent textleft right">
									<span class="opensans size13">Minutes</span>
									<select class="form-control mySelectBoxClass">
									  <option selected="yes">00</option>
									  <option>10</option>
									  <option>20</option>
									  <option>30</option>
									  <option>40</option>
									  <option>50</option>
									</select>
								</div>
							</div>
						</div><div class="clearfix"></div><br/>
						<button type="submit" class="btn-search3">Search</button>
					</div>
					<!-- END OF CARS TAB -->

						
						
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
				
				<!-- Car type -->
				<button type="button" class="collapsebtn last" data-toggle="collapse" data-target="#collapse3">
				 Vehicle <span class="collapsearrow"></span>
				</button>	
				<div id="collapse3" class="collapse in">
					<div class="hpadding20">
						<div class="checkbox">
							<label>
							  <input type="checkbox">Buss (2)
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Mini buss (6)
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Private car (11)
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox">Supercar (3)
							</label>
						</div>




					</div>
					<div class="clearfix"></div>						
				</div>	
				<!-- End of Car type -->
				
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
									  <option selected>Name</option>
									  <option>A to Z</option>
									  <option>Z to A</option>
									</select>
								</div>

						</div>			
						<div class="col-md-4">
							<div class="w50percent">
								<div class="wh90percent">
									<select class="form-control mySelectBoxClass ">
									  <option selected>Price</option>
									  <option>Ascending</option>
									  <option>Descending</option>
									</select>
								</div>
							</div>
							<div class="w50percentlast">
								<div class="wh90percent none">
									<select class="form-control mySelectBoxClass ">
									  <option selected>Price</option>
									  <option>Ascending</option>
									  <option>Descending</option>
									</select>
								</div>
							</div>					
						</div>
						<div class="col-md-4 offset-0">
							<div class="wh50percent left none">
								<select class="form-control mySelectBoxClass ">
								  <option selected>Fuel type</option>
								  <option>Diesel</option>
								  <option>Petrol</option>
								  <option>Hibrid</option>
								  <option>Electric</option>
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

				
					<div class="hpadding20">
					<!-- GOING TO -->
					<div>
						<div class="wh33percent left size12 bold dark">
							AIRPORT &nbsp;&nbsp;<span class="grey normal">04:05 PM</span>
						</div>
						<div class="wh33percent right textright size12 bold dark">
							<span class="grey normal">07:35 PM</span> 
							&nbsp;&nbsp; DESTINATION
						</div>
						<div class="clearfix"></div>
						
						<div class="wh33percent left">
							<div class="fcircle">
								<span class="fcaricon"></span>
							</div>
						</div>
						<div class="wh33percent right">
							<div class="fcircle right">
								<span class="fhotelicon"></span>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="fline2px"></div>
						
						<div class="wh33percent left size12 grey">
							United Kingdom - London City (LCY) 
						</div>
						<div class="wh33percent right textright size12 grey">
							Resort/City Information - CAMBRIDGE
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- END OF GOING TO -->
					</div>
				
					<br/>
				
				
					<script>
					//Popover tooltips
					  $(function (){
						 $("#username").popover({placement:'top', trigger:'hover'});
					  });
					</script>
					<div class="col-md-4 border">
						<!-- CONTAINER-->
						<div class="carscontainer">
							<div class="center">
								<a href=""><img src="updates/update1/img/cars/car01.jpg" alt=""/></a>
							</div>
							<div class="hpadding20">
								<span class="glyphicon glyphicon-info-sign right lblue cpointer" rel="popover" id="username" data-content="This field is mandatory" data-original-title="Here you can add additional information about the car"></span>
	  
								<span class="size14 bold dark">Shared Transfer</span><br/>
								<span class="size13 grey">
								
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								
								</span>
							</div>
							<div class="purchasecontainer">
								<span class="size18 bold green mt5">$54.74</span><br/>
								<span class="size12 mt-3 grey"><i>per way</i></span>
								<button class="bookbtn right margtop-20">Book</button>	
							</div>
						</div>
						<!-- END OF CONTAINER-->
					</div>
					<div class="col-md-4">
						<!-- CONTAINER-->
						<div class="carscontainer">
							<div class="center">
								<a href=""><img src="updates/update1/img/cars/car02.jpg" alt=""/></a>
							</div>
							<div class="hpadding20">
								<span class="size14 bold dark">Private Transfer</span><br/>
								<span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
							</div>
							<div class="purchasecontainer">
								<span class="size18 bold green mt5">$75.00</span><br/>
								<span class="size12 mt-3 grey"><i>per way</i></span>
								<button class="bookbtn right margtop-20">Book</button>	
							</div>
						</div>
						<!-- END OF CONTAINER-->
					</div>
					<div class="col-md-4">
						<!-- CONTAINER-->
						<div class="carscontainer">
							<div class="center">
								<a href=""><img src="updates/update1/img/cars/car03.jpg" alt=""/></a>
							</div>
							<div class="hpadding20">
								<span class="size14 bold dark">Luxury Vehicle</span><br/>
								<span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
							</div>
							<div class="purchasecontainer">
								<span class="size18 bold green mt5">$95.75</span><br/>
								<span class="size12 mt-3 grey"><i>per way</i></span>
								<button class="bookbtn right margtop-20">Book</button>	
							</div>
						</div>
						<!-- END OF CONTAINER-->
					</div>

					<div class="clearfix"></div><br/>
				
					<div class="col-md-4 border">
						<!-- CONTAINER-->
						<div class="carscontainer">
							<div class="center">
								<a href=""><img src="updates/update1/img/cars/car10.jpg" alt=""/></a>
							</div>
							<div class="hpadding20">
								<span class="size14 bold dark">Shared Transfer</span><br/>
								<span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
							</div>
							<div class="purchasecontainer">
								<span class="size18 bold green mt5">$120.00</span><br/>
								<span class="size12 mt-3 grey"><i>per way</i></span>
								<button class="bookbtn right margtop-20">Book</button>	
							</div>
						</div>
						<!-- END OF CONTAINER-->
					</div>
					<div class="col-md-4">
						<!-- CONTAINER-->
						<div class="carscontainer">
							<div class="center">
								<a href=""><img src="updates/update1/img/cars/car05.jpg" alt=""/></a>
							</div>
							<div class="hpadding20">
								<span class="size14 bold dark">Luxury Vehicle</span><br/>
								<span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
							</div>
							<div class="purchasecontainer">
								<span class="size18 bold green mt5">$100.00</span><br/>
								<span class="size12 mt-3 grey"><i>per way</i></span>
								<button class="bookbtn right margtop-20">Book</button>	
							</div>
						</div>
						<!-- END OF CONTAINER-->
					</div>
					<div class="col-md-4">
						<!-- CONTAINER-->
						<div class="carscontainer">
							<div class="center">
								<a href=""><img src="updates/update1/img/cars/car06.jpg" alt=""/></a>
							</div>
							<div class="hpadding20">
								<span class="size14 bold dark">Luxury Vehicle</span><br/>
								<span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
							</div>
							<div class="purchasecontainer">
								<span class="size18 bold green mt5">$120.00 </span><br/>
								<span class="size12 mt-3 grey"><i>per way</i></span>
								<button class="bookbtn right margtop-20">Book</button>	
							</div>
						</div>
						<!-- END OF CONTAINER-->
					</div>

					<div class="clearfix"></div><br/>
					
					<div class="col-md-4 border">
						<!-- CONTAINER-->
						<div class="carscontainer">
							<div class="center">
								<a href=""><img src="updates/update1/img/cars/car07.jpg" alt=""/></a>
							</div>
							<div class="hpadding20">
								<span class="size14 bold dark">Supercar vehicle</span><br/>
								<span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
							</div>
							<div class="purchasecontainer">
								<span class="size18 bold green mt5">$2500.00 </span><br/>
								<span class="size12 mt-3 grey"><i>per way</i></span>
								<button class="bookbtn right margtop-20">Book</button>	
							</div>
						</div>
						<!-- END OF CONTAINER-->
					</div>
					<div class="col-md-4">
						<!-- CONTAINER-->
						<div class="carscontainer">
							<div class="center">
								<a href=""><img src="updates/update1/img/cars/car08.jpg" alt=""/></a>
							</div>
							<div class="hpadding20">
								<span class="size14 bold dark">Supercar vehicle</span><br/>
								<span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
							</div>
							<div class="purchasecontainer">
								<span class="size18 bold green mt5">$500.00 </span><br/>
								<span class="size12 mt-3 grey"><i>per way</i></span>
								<button class="bookbtn right margtop-20">Book</button>	
							</div>
						</div>
						<!-- END OF CONTAINER-->
					</div>
					<div class="col-md-4">
						<!-- CONTAINER-->
						<div class="carscontainer">
							<div class="center">
								<a href=""><img src="updates/update1/img/cars/car09.jpg" alt=""/></a>
							</div>
							<div class="hpadding20">
								<span class="size14 bold dark">Supercar vehicle</span><br/>
								<span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
							</div>
							<div class="purchasecontainer">
								<span class="size18 bold green mt5">$1500.00 </span><br/>
								<span class="size12 mt-3 grey"><i>per way</i></span>
								<button class="bookbtn right margtop-20">Book</button>	
							</div>
						</div>
						<!-- END OF CONTAINER-->
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
    <script src="assets/js/js-list.js"></script>	

    <!-- Custom Select -->
	<script type='text/javascript' src='assets/js/jquery.customSelect.js'></script>
	
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
