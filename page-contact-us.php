
<?php
include 'header.php';
?>
<!-- Mirrored from unlockdesizn.com/html/nonprofit/be-ahand/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jul 2024 05:33:53 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Be aHand Charity Foundation, Fundraise And Donation HTML Template"/>
<meta name="keywords" content="Causes, charity, charity agency, charity html template, church, donation, food, foundation, help, ngo, non-profit organization, organization, social, volunteer, welfare">
<meta name="author" content="unlockdesign">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all-plugins.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/theme-color.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Be aHand Charity Foundation, Fundraise And Donation HTML Template</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<div class="wrapper">
	<div id="preloader" class="preloader">
		<div id="pre" class="preloader_container"><div class="preloader_disabler btn btn-default">Disable Preloader</div></div>
	</div>
	<!-- Modal -->
	<div id="Donation-form-modal" class="modal fade bs-example-modal-default text-left" role="dialog">
		<div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		    	<div class="modal-header text-center">
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		        	<h3> <span class="flaticon-make-a-donation text-thm2"></span> DONATION FORM</h3>
		        	<p>Your Donation Can Save Lot's Of Life</p>
		    	</div>
		    	<div class="modal-body">
			      	<div class="row">
			      		<div class="col-sm-6 col-md-6 donation-form-samount">
			      			<h4>Select Your Amount</h4>
			      			<ul class="list-inline selected-amount">
			      				<li class="amount-box">
				      				<input id="radio-one" type="radio" name="payment-group">
			      					<label for="radio-one"> $10</label>
			      				</li>
			      				<li class="amount-box">
				      				<input id="radio-two" type="radio" name="payment-group">
			      					<label for="radio-two"> $20</label>
			      				</li>
			      				<li class="amount-box">
				      				<input id="radio-three" type="radio" name="payment-group">
			      					<label for="radio-three"> $30</label>
			      				</li>
			      				<li class="amount-box">
				      				<input id="radio-four" type="radio" name="payment-group">
			      					<label for="radio-four"> $50</label>
			      				</li>
			      				<li class="amount-box">
				      				<input id="radio-five" type="radio" name="payment-group">
			      					<label for="radio-five"> $100</label>
			      				</li>
			      			</ul>
			      			<h5>Would you like to make regular donations?</h5>
			      			<ul class="list-inline">
			      				<li><p>I would like to make </p></li>
			      				<li>
			      					<select name="pts" class="payment-time-selection">
										<option value="0">a one time</option>
										<option value="W">weekly</option>
										<option value="M">monthly</option>
										<option value="Y">yearly</option>
									</select>
			      				</li>
			      				<li> Donations</li>
			      			</ul>
			      		</div>
			      		<div class="col-sm-6 col-md-6 donation-form-samount">
			      			<form class="form-inline">
					        	<h4>Custom Amount</h4>
							    <div class="form-group">
								    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
								    <div class="input-group">
								    	<div class="input-group-addon">$</div>
								    	<input type="number" class="form-control" id="exampleInputAmount" placeholder="Amount">
								    	<div class="input-group-addon">.00</div>
								    </div>
							    </div>
							</form>
			      		</div>
			      		<div class="col-sm-12 col-md-12">
					        <form class="donation-form donor-details">
					        	<h4>Donor Information</h4>
				        		<div class="row">
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="text" class="form-control required" id="exampleInputNamex" placeholder="First Name">
        								</div>
				        			</div>
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="text" class="form-control required" id="exampleInputNamexx" placeholder="Last Name">
        								</div>
				        			</div>
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="email" class="form-control required" id="exampleInputEmailxy" placeholder="Email">
        								</div>
				        			</div>
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="text" class="form-control required" id="exampleInputPhone" placeholder="Phone">
        								</div>
				        			</div>
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="text" class="form-control required" id="exampleInputAddress" placeholder="Address line 1">
        								</div>
				        			</div>
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="text" class="form-control required" id="exampleInputAddress2" placeholder="Address line 2">
        								</div>
				        			</div>
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="text" class="form-control required" id="exampleInputCity" placeholder="City/State">
        								</div>
				        			</div>
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="text" class="form-control required" id="exampleInputZip" placeholder="Zipcode/Postcode">
        								</div>
				        			</div>
				        		</div>
	                            <div class="form-group">
	                                <textarea id="form_message" name="form_message" class="form-control required" rows="4" placeholder="Additional Note" ></textarea>
	                            </div>
								<div class="form-group text-center">
						        	<button type="submit" class="btn btn-lg btn-block ulockd-btn-thm2" data-toggle="modal" data-target=".bs-example-modal-default">Donate now</button>
								</div>
					        </form>
			      		</div>
			      	</div>
		    	</div>
		    	<div class="modal-footer">
		        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		    	</div>
		    </div>
		</div>
	</div>
  	
  	

	
	
	<!-- Home Design Inner Pages -->
	<div class="ulockd-inner-home">
		<div class="container text-center">
			<div class="row">
				<div class="ulockd-inner-conraimer-details">
					<div class="col-md-12">
						<h1 class="text-uppercase">CONTACT US</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Home Design Inner Pages -->
	<div class="ulockd-inner-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ulockd-icd-layer">
						<ul class="list-inline ulockd-icd-sub-menu">
							<li><a href="#"> HOME </a></li>
							<li><a href="#"> > </a></li>
							<li> <a href="#"> CONTACT US </a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Inner Pages Main Section -->
	<section class="ulockd-contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<div class="ulockd-cp-title">
						<h2 class="text-uppercase">CONTACT DETAILS</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="contact-info">
						<div class="contact-details one">
							<ul class="contact-place one">
								<li><span class="flaticon-black-back-closed-envelope-shape" title="beahand@email.com"> <small>beahand@email.com </small></span></li>
								<li><span class="flaticon-old-handphone" title="99 55 66 88 526"> <small> +99 55 66 88 526 </small></span></li>
								<li><span class="flaticon-map-marker" title="Victoria 8007 Australia Envato HQ 121 King Street, Melbourne"> <small>Victoria 8007 Australia Envato  </small></span></li>
								<li><span class="flaticon-checkbox-pen-outline" title="Written Your Message"> <small>Left Some Word </small></span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="ulockd-contact-form">
                        <form id="contact_form" name="contact_form" class="contact-form" action="#" method="post" novalidate="novalidate">
                            <div class="messages"></div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_name" name="form_name" class="form-control ulockd-form-fg required" placeholder="Your name" required="required" data-error="Name is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_email" name="form_email" class="form-control ulockd-form-fg required email" placeholder="Your email" required="required" data-error="Email is required." type="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
	                            <div class="col-md-3">
	                                <div class="form-group">
	                                    <input id="form_phone" name="form_phone" class="form-control ulockd-form-fg required" placeholder="Phone" required="required" data-error="Phone Number is required." type="text">
	                                    <div class="help-block with-errors"></div>
	                                </div>
	                            </div>
	                            <div class="col-md-3">
	                                <div class="form-group">
	                                    <input id="form_subject" name="form_subject" class="form-control ulockd-form-fg required" placeholder="Subject" required="required" data-error="Subject is required." type="text">
	                                    <div class="help-block with-errors"></div>
	                                </div>
	                            </div>
                                <div class="col-md-12">
		                            <div class="form-group">
		                                <textarea id="form_message" name="form_message" class="form-control ulockd-form-tb required" rows="12" placeholder="Your massage" required="required" data-error="Message is required."></textarea>
		                                <div class="help-block with-errors"></div>
		                            </div>
		                            <div class="form-group ulockd-contact-btn">
		                                <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
		                                <button type="submit" class="btn btn-default ulockd-btn-thm2" data-loading-text="Getting Few Sec...">SUBMIT</button>
		                            </div>
                                </div> 
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid ulockd-padz">
			<div class="row">
				<div class="col-md-12">
					<div class="ulockd-google-map">
		                <div class="h300" id="map-location"></div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php
include 'footer.php';
?>
<a class="scrollToHome" href="#"><i class="fa fa-home"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootsnav.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/gallery.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/video-player.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
<script type="text/javascript" src="js/tweetie.js"></script>
<!-- Google Map Javascript Codes -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyABqK-5ngi3F1hrEsk7-mCcBPsjHM5_Gj0"></script>
<script src="js/googlemaps.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
</body>

<!-- Mirrored from unlockdesizn.com/html/nonprofit/be-ahand/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jul 2024 05:33:53 GMT -->
</html>