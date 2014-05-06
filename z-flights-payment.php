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
	
	<!-- Animo css-->
	<link href="plugins/animo/animate+animo.css" rel="stylesheet" media="screen">

    <!-- Picker -->	
	<link rel="stylesheet" href="assets/css/jquery-ui.css" />	
	
    <!-- jQuery -->		
    <script src="assets/js/jquery.v2.0.3.js"></script>	

	
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
					<li><a href="#">Hotels</a></li>
					<li>/</li>
					<li><a href="#">U.S.A.</a></li>
					<li>/</li>					
					<li><a href="#" class="active">New York</a></li>					
				</ul>				
			</div>
			<a class="backbtn right" href="#"></a>
		</div>
		<div class="clearfix"></div>
		<div class="brlines"></div>
	</div>	

	<!-- CONTENT -->
	<div class="container">

		
		<div class="container mt25 offset-0">
			
			
			<!-- LEFT CONTENT -->
			<div class="col-md-8 pagecontainer2 offset-0">

				<div class="padding30 grey">
				
				
					<span class="size16px bold dark left">Passengers</span>
					<div class="roundstep active right">1</div>
					<div class="clearfix"></div>
					<div class="line4"></div>
					
					<!-- ROW -->
					<div class="row">
					
						<div class="col-md-4">
							<span class="size13 dark">Surname*</span>
							<input type="text" class="form-control " placeholder="">
						</div>
						<div class="col-md-4">
							<span class="size13 dark">Name*</span>
							<input type="text" class="form-control " placeholder="">
						</div>
						<div class="col-md-4">
							<div class="w50percent">
								<span class="size13 dark">Date of birth*</span>
								<input type="text" class="form-control mySelectCalendar" id="datepicker3" placeholder="mm/dd/yyyy"/>
							</div>
							<div class="w50percentlast">
								<div class="w90percentlast right">
									&nbsp;<br/>
									<div class="radio radiomargin0">
									  <label>
										<input type="radio" checked="" name="optionsRadios2" id="optionsRadios2" value="option2">
										Male
									  </label>
									</div>
									<div class="radio radiomargin0">
									  <label>
										<input type="radio" name="optionsRadios2" id="optionsRadios2" value="option2">
										Female
									  </label>
									</div>
								</div>
							</div>						
						</div>
						
						<div class="clearfix"></div><br/>
						
						<div class="col-md-4">
							<span class="size13 dark">Citizenship*</span>
							<select class="form-control mySelectBoxClass">
							  <option selected>United States of America</option>
							  <option>United Kingdom</option>
							</select>
						</div>
						<div class="col-md-4">
							<span class="size13 dark">Document series and number*</span>
							<input type="text" class="form-control " placeholder="">
						</div>
						<div class="col-md-4">
							<span class="size13 dark">Expiry date (if specified)*</span>
							<input type="text" class="form-control mySelectCalendar" id="datepicker3" placeholder="mm/dd/yyyy"/>
						</div>
						
						<div class="clearfix"></div><br/>
						
						<div class="col-md-4">
							<div class="checkbox mt-5">
								<label>
								  <input type="checkbox">Bonus card OneWorld 
								</label>
							</div>
						</div>
						<div class="col-md-4">
							<fieldset disabled="">
								<select class="form-control mySelectBoxClass">
								  <option selected>Air Berlin</option>
								  <option>Air Berlin</option>
								</select>
							</fieldset>						
						</div>
						<div class="col-md-4">
							<fieldset disabled="">
								<select class="form-control mySelectBoxClass" id="disabledSelect">
								  <option selected>Card number</option>
								  <option>xxx-xxx-xxx-732</option>
								</select>
							</fieldset>
						</div>
						<div class="clearfix"></div>

					</div>
					<!-- END OF ROW -->
					
					
					<br/>
					<div class="fdash"></div>
					<br/>
					
					
					<!-- ROW -->
					<div class="row">
					
						<div class="col-md-4">
							<span class="size13 dark">Surname*</span>
							<input type="text" class="form-control " placeholder="">
						</div>
						<div class="col-md-4">
							<span class="size13 dark">Name*</span>
							<input type="text" class="form-control " placeholder="">
						</div>
						<div class="col-md-4">
							<div class="w50percent">
								<span class="size13 dark">Date of birth*</span>
								<input type="text" class="form-control mySelectCalendar" id="datepicker3" placeholder="mm/dd/yyyy"/>
							</div>
							<div class="w50percentlast">
								<div class="w90percentlast right">
									&nbsp;<br/>
									<div class="radio radiomargin0">
									  <label>
										<input type="radio" checked="" name="optionsRadios" id="optionsRadios3" value="option3">
										Male
									  </label>
									</div>
									<div class="radio radiomargin0">
									  <label>
										<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
										Female
									  </label>
									</div>
								</div>
							</div>						
						</div>
						
						<div class="clearfix"></div><br/>
						
						<div class="col-md-4">
							<span class="size13 dark">Citizenship*</span>
							<select class="form-control mySelectBoxClass">
							  <option selected>United States of America</option>
							  <option>United Kingdom</option>
							</select>
						</div>
						<div class="col-md-4">
							<span class="size13 dark">Document series and number*</span>
							<input type="text" class="form-control " placeholder="">
						</div>
						<div class="col-md-4">
							<span class="size13 dark">Expiry date (if specified)*</span>
							<input type="text" class="form-control mySelectCalendar" id="datepicker3" placeholder="mm/dd/yyyy"/>
						</div>
						
						<div class="clearfix"></div><br/>
						
						<div class="col-md-4">
							<div class="checkbox mt-5">
								<label>
								  <input type="checkbox">Bonus card OneWorld 
								</label>
							</div>
						</div>
						<div class="col-md-4">
							<fieldset disabled="">
								<select class="form-control mySelectBoxClass">
								  <option selected>Air Berlin</option>
								  <option>Air Berlin</option>
								</select>
							</fieldset>						
						</div>
						<div class="col-md-4">
							<fieldset disabled="">
								<select class="form-control mySelectBoxClass" id="disabledSelect">
								  <option selected>Card number</option>
								  <option>xxx-xxx-xxx-732</option>
								</select>
							</fieldset>
						</div>
						<div class="clearfix"></div>

					</div>
					<!-- END OF ROW -->
					
					
					
					
					
					
					
					
					
					

					<br/>
					<br/>
					
					
				
					<span class="size16px bold dark left">Customer </span>
					<div class="roundstep right">2</div>
					<div class="clearfix"></div>
					<div class="line4"></div>
					Please tell us who will be checking in. Must be 18 or older. <br/><br/>
					
					<div class="col-md-4 textright">
						<div class="margtop15"><span class="dark">Contact Name:</span><span class="red">*</span></div>
					</div>
					<div class="col-md-4">
						<span class="size12">First and Last Name*</span>
						<input type="text" class="form-control " placeholder="">
					</div>
					<div class="col-md-4 textleft margtop15">
					</div>
					<div class="clearfix"></div>
					
					<br/>
					<div class="col-md-4 textright">
						<div class="margtop7"><span class="dark">Phone Number:</span><span class="red">*</span></div>
					</div>
					<div class="col-md-4">
						<span class="size12">Country code*</span>						
						<select class="form-control mySelectBoxClass">
						  <option selected>xxx-xxx-xxx-772</option>
						  <option>xxx-xxx-xxx-039</option>
						</select>
					</div>
					<div class="col-md-4 textleft">
						<span class="size12">Preferred Phone Number*</span>	
						<input type="text" class="form-control" placeholder="">
					</div>
					<div class="clearfix"></div>

					<br/>
					<div class="col-md-4">
					</div>
					<div class="col-md-8 textleft">
						Special Requests (optional)
						<!-- Collapse 3 -->	
						<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse3"></button>
						<div id="collapse3" class="collapse">
							<textarea rows="3" class="form-control margtop10"></textarea>
						</div>
						<!-- End of collapse 3 -->
						<div class="clearfix"></div>				

						
					</div>
					<div class="clearfix"></div>
					
					
					<br/>
					<br/>
					<span class="size16px bold dark left">How would you like to pay?</span>
					<div class="roundstep right">3</div>
					<div class="clearfix"></div>
					<div class="line4"></div>		
				
					
					
					<br/>
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						Enter a coupon code
						<!-- Collapse 5 -->	
						<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse5"></button>
						<div id="collapse5" class="collapse">
							<input type="text" class="form-control margtop10" placeholder="">
						</div>
						<!-- End of collapse 5 -->
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 textleft">
					</div>
					<div class="clearfix"></div>
					

					<br/>
					<!-- Nav tabs -->
					<ul class="nav navigation-tabs">
					  <li class="active"><a href="#card" data-toggle="tab">Credit/Debit card</a></li>
					  <li><a href="#paypal" data-toggle="tab">Paypal</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content4">
					
					  <!-- Tab 1 -->
					  <div class="tab-pane active" id="card">
					  
							<div class="col-md-4 textright">
								<div class="margtop15"><span class="dark">Debit/Credit Card Number:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control margtop10" placeholder="">
							</div>
							<div class="col-md-4 textleft">
							</div>
							<div class="clearfix"></div>
							
							<br/>
							<div class="col-md-4 textright">
								<div class="margtop7"><span class="dark">Card Type:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">
								<select class="form-control mySelectBoxClass">
								  <option selected>xxx-xxx-xxx-772</option>
								  <option>xxx-xxx-xxx-039</option>
								</select>
							</div>
							<div class="col-md-4 textleft">
							</div>
							<div class="clearfix"></div>
							
							<br/>
							<div class="col-md-4 textright">
								<div class="margtop7"><span class="dark">Expiration Date:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">
								
								<div class="w50percent">
									<div class="wh90percent">
										<select class="form-control mySelectBoxClass">
										  <option selected>01 JAN</option>
										  <option>02 FEB</option>
										  <option>03 MAR</option>
										  <option>04 APR</option>
										  <option>05 MAY</option>
										  <option>06 JUN</option>
										  <option>07 JUL</option>
										  <option>08 AUG</option>
										  <option>09 SEP</option>
										  <option>10 OCT</option>
										  <option>11 NOV</option>
										  <option>12 DEC</option>
										</select>						
									</div>
								</div>
								<div class="w50percentlast">
									<div class="wh90percent right">
										<select class="form-control mySelectBoxClass">
										  <option selected>14</option>
										  <option>15</option>
										  <option>16</option>
										  <option>17</option>
										  <option>18</option>
										  <option>19</option>
										  <option>20</option>
										  <option>21</option>
										  <option>22</option>
										  <option>23</option>
										  <option>24</option>
										  <option>25</option>
										  <option>26</option>
										</select>						
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="col-md-4 textleft">
							</div>
							<div class="clearfix"></div>
							

							<br/>
							<div class="col-md-4 textright">
								<div class="margtop15"><span class="dark">Card Identification Number:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control margtop10" placeholder="">
							</div>
							<div class="col-md-4 textleft margtop15">What's this?
							</div>
							<div class="clearfix"></div>

							
							<div class="col-md-4 textright">
								<div class="margtop15"><span class="dark">Billing ZIP Code:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control margtop10" placeholder="">
							</div>
							<div class="col-md-4 textleft margtop15">
							</div>
							<div class="clearfix"></div>
							
							
							<div class="col-md-4 textright">
								<div class="margtop15"><span class="dark"> Cardholder Name:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control margtop10" placeholder="">
							</div>
							<div class="col-md-4 textleft margtop15">(as it appears on the card)
							</div>
							<div class="clearfix"></div>
					  
					  </div>
					  <!-- End of Tab 1 -->					  
					  
					  <!-- Tab 2 -->					  
					  <div class="tab-pane" id="paypal">
						
						<div class="alert alert-warning fade in">
							<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
							<strong>Important:</strong> You will be redirected to PayPal's website to securely complete your payment. 
						</div>

						<button type="submit" class="btn-search5">Proceed to paypal</button>

					  </div>
					  <!-- End of Tab 2 -->	
					</div>

					
					<br/>
					<br/>
					<span class="size16px bold dark left">Where should we send your confirmation?</span>
					<div class="roundstep right">4</div>
					<div class="clearfix"></div>
					<div class="line4"></div>		
					Please enter the email address where you would like to receive your confirmation.<br/> 
					
					
					<div class="col-md-4 textright">
						<div class="mt15"><span class="dark">Email Address:</span><span class="red">*</span></div>
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control margtop10" placeholder="">
					</div>
					<div class="col-md-4 textleft">
					</div>
					<div class="clearfix"></div>
					
					<br/>
					<br/>
					<span class="size16px bold dark left">Review and book your trip</span>
					<div class="roundstep right">5</div>
					<div class="clearfix"></div>
					<div class="line4"></div>		
					
					<div class="alert alert-info">
					Attention! Please read important flight information!<br/>
					<p class="size12">• You have chosen the version offered by foreign partners. In case of visa issue refusal, disease, etc. the 
refund without penalty provisions is impossible! The ticket will refunded according to the airline rules.</p>
					</div>		
					By selecting to complete this booking I acknowledge that I have read and accept the <a href="#" class="clblue">rules & 
					restrictions</a> <a href="#" class="clblue">terms & conditions</a> , and <a href="#" class="clblue">privacy policy</a>.	<br/>		
					
					<button type="submit" class="bluebtn margtop20">Complete booking</button>	
					
			
				</div>
		
			</div>
			<!-- END OF LEFT CONTENT -->			
			
			<!-- RIGHT CONTENT -->
			<div class="col-md-4" >
				
				<div class="pagecontainer2 paymentbox grey">
					<div class="padding20">
						<span class="opensans size18 dark bold">Trip Summary</span>
					</div>
					<div class="line3"></div>
					
					<div class="hpadding30 margtop30">
					
					
					<!-- GOING TO -->
					<div>
						<div class="wh33percent left size12 bold dark">
							BUC
						</div>
						<div class="wh33percent left center size12 bold dark">
							FRA
						</div>
						<div class="wh33percent right textright size12 bold dark">
							DUB
						</div>
						<div class="clearfix"></div>
						
						<div class="wh33percent left">
							<div class="fcircle">
								<span class="fdeparture"></span>
							</div>
						</div>
						<div class="wh33percent left">
							<div class="fcircle center">
								<span class="fstop"></span>
							</div>
						</div>
						<div class="wh33percent right">
							<div class="fcircle right">
								<span class="farrival"></span>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="fline2px"></div>
						
						<div class="wh33percent left size12">
							04:05 PM
						</div>
						<div class="wh33percent left center size12">
							1 h 20 m
						</div>
						<div class="wh33percent right textright size12">
							07:35 PM
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- END OF GOING TO -->
					
					<br/>
					
					<!-- RETURNING -->
					<div>
						<div class="wh33percent left size12 bold dark">
							DUB
						</div>
						<div class="wh33percent left center size12 bold dark">
							FRA
						</div>
						<div class="wh33percent right textright size12 bold dark">
							BUC
						</div>
						<div class="clearfix"></div>
						
						<div class="wh33percent left">
							<div class="fcircle">
								<span class="fdeparture"></span>
							</div>
						</div>
						<div class="wh33percent left">
							<div class="fcircle center">
								<span class="fstop"></span>
							</div>
						</div>
						<div class="wh33percent right">
							<div class="fcircle right">
								<span class="farrival"></span>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="fline2px"></div>
						
						<div class="wh33percent left size12">
							17:00 PM
						</div>
						<div class="wh33percent left center size12">
							1 h 00 m
						</div>
						<div class="wh33percent right textright size12">
							21:35 PM
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- END OF RETURNING -->
					
					
					<br/>
					

    
					<span class="dark">2 Tickets: Roundtrip</span>
					<div class="fdash mt10"></div><br/>
					Traveler 1: Adult <span class="right bold green">$787.25</span>
					<!-- Collapse 1 -->	
					<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse1"></button>
					<div id="collapse1" class="collapse in">
						<div class="left size14">
							Flight<br/>
							Taxes & Fees 
						</div>
						<div class="right size14">
							$458.00<br/>
							$329.25
						</div><div class="clearfix"></div>	
					</div>
					<!-- End of collapse 1 -->
					
					<div class="fdash mt10"></div><br/>
					
					Traveler 2: Adult <span class="right bold green">$787.25</span>
					<!-- Collapse 1 -->	
					<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse2"></button>
					<div id="collapse2" class="collapse">
						<div class="left size14">
							Flight<br/>
							Taxes & Fees 
						</div>
						<div class="right size14">
							$458.00<br/>
							$329.25
						</div><div class="clearfix"></div>	
					</div>
					<!-- End of collapse 1 -->
					
					

					<br/>
					<br/>

					
					
					</div>	
					<div class="line3"></div>
					<div class="padding30">					
						<span class="left size14 dark">Trip Total:</span>
						<span class="right lred2 bold size18">$1,574.50</span>
						<div class="clearfix"></div>
					</div>


				</div><br/>
				
				<div class="pagecontainer2 needassistancebox">
					<div class="cpadding1">
						<span class="icon-help"></span>
						<h3 class="opensans">Need Assistance?</h3>
						<p class="size14 grey">Our team is 24/7 at your service to help you with your booking issues or answer any related questions</p>
						<p class="opensans size30 lblue xslim">1-866-599-6674</p>
					</div>
				</div><br/>
				
				<div class="pagecontainer2 loginbox">
					<div class="cpadding1">
						<span class="icon-lockk"></span>
						<h3 class="opensans">Log in</h3>
						<input type="text" class="form-control logpadding" placeholder="Username">
						<br/>
						<input type="text" class="form-control logpadding" placeholder="Password">
						<div class="margtop20">
							<div class="left">
								<div class="checkbox padding0">
									<label>
									  <input type="checkbox">Remember
									</label>
								</div>
								<a href="#" class="greylink">Lost password?</a><br/>
							</div>
							<div class="right">
								<button class="btn-search5" type="submit" onclick="errorMessage()">Login</button>	
							</div>
						</div>
						<div class="clearfix"></div><br/>
					</div>
				</div><br/>
			
			</div>
			<!-- END OF RIGHT CONTENT -->
			
			
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
	
	
	<!-- Javascript  -->
	<script src="assets/js/js-payment.js"></script>
	
    <!-- Nicescroll  -->	
	<script src="assets/js/jquery.nicescroll.min.js"></script>
	
    <!-- Custom functions -->
    <script src="assets/js/functions.js"></script>
	
    <!-- Custom Select -->
	<script type='text/javascript' src='assets/js/jquery.customSelect.js'></script>
	
	<!-- Load Animo -->
	<script src="plugins/animo/animo.js"></script>

    <!-- Picker -->	
	<script src="assets/js/jquery-ui.js"></script>	

    <!-- Picker -->	
    <script src="assets/js/jquery.easing.js"></script>	
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
