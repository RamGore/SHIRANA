<?php
include 'header.php';
?>
	<!-- Home Design Inner Pages -->
	<div class="ulockd-inner-home">
		<div class="container text-center">
			<div class="row">
				<div class="ulockd-inner-conraimer-details">
					<div class="col-md-12">
						<h1 class="text-uppercase">JOIN US</h1>
					</div>
                    <div class="col-md-12">
						<div class="ulockd-icd-layer">
							<ul class="list-inline ulockd-icd-sub-menu">
								<li><a href="index.php"> HOME </a></li>
								<li><a href="#"> > </a></li>
								<li> <a href="#">JOIN US</a></li>
							</ul>
						</div>
					</div>          
				</div>
			</div>
		</div>
	</div>

	<!-- Home Design Inner Pages -->
	

	<!-- Our About -->
	<section class="ulockd-about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-md-offset-3">
					<div class="booking_form_style1 text-center">
		                <!-- Booking Form Sart-->
			            <form id="booking_form" class="booking_form text-center" name="booking_form" action="#" method="post" novalidate="novalidate">
			                <div class="messages"></div>
							<div class="row">
				                <div class="col-sm-12">
				                	<h3>Join Us</h3>
				                </div>
				                <div class="col-sm-12">
				                    <div class="form-group">
										<input id="form_name" name="form_name" class="form-control form_control" placeholder="enter a name" required="required" data-error="Name is required." type="text">
										<div class="help-block with-errors"></div>
									</div>
				                </div>
				                <div class="col-sm-12">
				                    <div class="form-group">
				                    	<input id="form_email" name="form_email" class="form-control form_control required email" placeholder="enter an email" required="required" data-error="Email is required." type="email">
										<div class="help-block with-errors"></div>
				                    </div>
				                </div>
				                <div class="col-sm-6">
				                    <div class="form-group">
					                    <input id="form_phone" name="form_phone" class="form-control form_control required" placeholder="enter a phone" required="required" data-error="Phone Number is required." type="text">
										<div class="help-block with-errors"></div>
									</div>
				                </div>
				                <div class="col-sm-6">
				                    <div class="form-group">
										<input id="form_date" name="form_date" class="form-control form_control required datepicker" placeholder="schedule time" required="required" data-error="Schedule Time is required." type="text">
										<div class="help-block with-errors"></div>
									</div>
				                </div>
				                
				                <div class="col-sm-12">
				                    <div class="form-group">
					                    <input name="form-botcheck" class="form-control" type="hidden" value="">
					                    <button type="submit" class="btn btn-lg ulockd-btn-thm2 btn-block ">Join Now</button>
				                    </div>
				                </div>
			                </div>
			            </form>
					</div>
				</div>
			</div>
		</div>
	</section>

	

	<?php
include 'footer.php';
?>