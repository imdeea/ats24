<?
ini_set('display_errors',1);
error_reporting(E_ALL);

$title = 'Request A Quote | ATS 24 Products and Cutting Services';
$meta_descr = 'Contact us or click here to request a quote for our high quality, mil-spec approved products and custom cutting services. We will be happy to assist you.';
include 'inc_header.php'; ?>

	<section class="section-intro bg-img bg03 stellar" data-stellar-background-ratio="0.4">
		<div class="bg-overlay op6"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-8">
					<h1 class="intro-title mb20">Request A Quote</h1>
					<p class="intro-p mb30"></p>
				</div>
			</div>
		</div>
	</section>


	<section class="section mt30 page-contact mb30">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 xs-box3">
					<div class="alert alert-success hidden" id="contact-success">
						<span class="glyphicon glyphicon-ok "></span> &nbsp;
						<strong>Success!</strong> Thank you for your message.
					</div>
					<div class="alert alert-danger hidden" id="contact-error">
						<span class="glyphicon glyphicon-remove "></span> &nbsp;
						<strong>Error!</strong> Oops, something went wrong.
					</div>
					<form class="form ajax-quote-form" id="quote_form">
						<div class="row col-p10">
							<div class="col-sm-6">
		 						<label class="mb10"><input type="text" name="val_fname" id="val_fname" class="form-control" placeholder="First Name *"></label>
							</div>
							<div class="col-sm-6">
		 						<label class="mb10"><input type="text" name="val_lname" id="val_lname" class="form-control" placeholder="Last Name *"></label>
							</div>
						</div>
						<div class="row col-p10">
							<div class="col-sm-12">
		 						<label class="mb10"><input type="text" name="val_company" id="val_company" class="form-control" placeholder="Company Name"></label>
							</div>
						</div>
						<div class="row col-p10">
							<div class="col-sm-12">
		 						<label class="mb10"><input type="text" name="val_title" id="val_title" class="form-control" placeholder="Job Title"></label>
							</div>
						</div>
						<div class="row col-p10">
							<div class="col-sm-12">
		 						<label class="mb10"><input type="text" name="val_address" id="val_address" class="form-control" placeholder="Address"></label>
							</div>
						</div>
						<div class="row col-p10">
							<div class="col-sm-12">
		 						<label class="mb10"><input type="text" name="val_city" id="val_city" class="form-control" placeholder="City"></label>
							</div>
						</div>
						<div class="row col-p10">
							<div class="col-sm-12">
								<label class="mb10">
							            <select name="val_state" id="val_state" class="form-control">
							               <option value="" disabled selected>State</option>
							               <option value="" disabled>-----------------------</option>
							               <option value="AL">Alabama</option>
							               <option value="AK">Alaska</option>
							               <option value="AB">Alberta</option>
							               <option value="AZ">Arizona</option>
							               <option value="AR">Arkansas</option>
							               <option value="BC">British Columbia</option>
							               <option value="CA">California</option>
							               <option value="CO">Colorado</option>
							               <option value="CT">Connecticut</option>
							               <option value="DE">Delaware</option>
							               <option value="DC">District of Columbia</option>
							               <option value="FL">Florida</option>
							               <option value="GA">Georgia</option>
							               <option value="HI">Hawaii</option>
							               <option value="ID">Idaho</option>
							               <option value="IL">Illinois</option>
							               <option value="IN">Indiana</option>
							               <option value="IA">Iowa</option>
							               <option value="KS">Kansas</option>
							               <option value="KY">Kentucky</option>
							               <option value="LA">Louisiana</option>
							               <option value="ME">Maine</option>
							               <option value="MB">Manitoba</option>
							               <option value="MD">Maryland</option>
							               <option value="MA">Massachusetts</option>
							               <option value="MI">Michigan</option>
							               <option value="MN">Minnesota</option>
							               <option value="MS">Mississippi</option>
							               <option value="MO">Missouri</option>
							               <option value="MT">Montana</option>
							               <option value="NE">Nebraska</option>
							               <option value="NV">Nevada</option>
							               <option value="NB">New Brunswick</option>
							               <option value="NH">New Hampshire</option>
							               <option value="NJ">New Jersey</option>
							               <option value="NM">New Mexico</option>
							               <option value="NY">New York</option>
							               <option value="NF">Newfoundland</option>
							               <option value="NC">North Carolina</option>
							               <option value="ND">North Dakota</option>
							               <option value="NT">Northwest Territories</option>
							               <option value="NS">Nova Scotia</option>
							               <option value="NU">Nunavut</option>
							               <option value="OH">Ohio</option>
							               <option value="OK">Oklahoma</option>
							               <option value="ON">Ontario</option>
							               <option value="OR">Oregon</option>
							               <option value="PA">Pennsylvania</option>
							               <option value="PE">Prince Edward Island</option>
							               <option value="PR">Puerto Rico</option>
							               <option value="QC">Quebec</option>
							               <option value="RI">Rhode Island</option>
							               <option value="SK">Saskatchewan</option>
							               <option value="SC">South Carolina</option>
							               <option value="SD">South Dakota</option>
							               <option value="TN">Tennessee</option>
							               <option value="TX">Texas</option>
							               <option value="UT">Utah</option>
							               <option value="VT">Vermont</option>
							               <option value="VI">Virgin Islands</option>
							               <option value="VA">Virginia</option>
							               <option value="WA">Washington</option>
							               <option value="WV">West Virginia</option>
							               <option value="WI">Wisconsin</option>
							               <option value="WY">Wyoming</option>
							               <option value="YT">Yukon</option>
							            </select>
								</label>
							</div>
						</div>
						<div class="row col-p10">
							<div class="col-sm-12">
		 						<label class="mb10"><input type="text" name="val_zip" id="val_zip" class="form-control" placeholder="Zip"></label>
							</div>
						</div>
						<div class="row col-p10">
							<div class="col-sm-12">
		 						<label class="mb10"><input type="text" name="val_phone" id="val_phone" class="form-control" placeholder="Phone *"></label>
							</div>
						</div>
						<div class="row col-p10">
							<div class="col-sm-12">
		 						<label class="mb10"><input type="text" name="val_fax" id="val_fax" class="form-control" placeholder="Fax"></label>
							</div>
						</div>
						<div class="row col-p10">
							<div class="col-sm-12">
		 						<label class="mb10"><input type="email" name="val_email" id="val_email" class="form-control" placeholder="Email Address *"></label>
							</div>
						</div>
						<label>
		 					<textarea name="val_message" id="val_message"  cols="30" rows="10" class="form-control" placeholder="Message *"></textarea>
		 				</label>
						<div class="row col-p10">
							<div class="col-sm-12">
		 						<label class="mb10">How would you like us to contact you?</label>
							</div>
							<div class="col-sm-3">
								<div class="checkbox-container">
			 						<label class="mb10">
										Email
			 							<input type="checkbox" name="val_contact[]" id="val_contact_email" value="Email" class="form-control">
										<span class="checkmark"></span>
			 						</label>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="checkbox-container">
			 						<label class="mb10">
										 Mail
			 							<input type="checkbox" name="val_contact[]" id="val_contact_mail" value="Mail" class="form-control">
										<span class="checkmark"></span>
			 						</label>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="checkbox-container">
			 						<label class="mb10">
			 							Phone
										<input type="checkbox" name="val_contact[]" id="val_contact_phone" value="Phone" class="form-control">
										<span class="checkmark"></span>
			 						</label>
								</div>
							</div>
							<div class="col-sm-3 ">
								<div class="checkbox-container">
									<label class="mb10">
										Fax
			 							<input type="checkbox" name="val_contact[]" id="val_contact_fax" value="Fax" class="form-control">
										<span class="checkmark"></span>
			 						</label>
								</div>
							</div>
						</div>
		 				<div class="mt20 clearfix">
							<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
    						<input type="hidden" name="action" value="validate_captcha">
		 					<div class="mb30"></div>
	 						<button type="submit" class="btn btn-d">Submit</button>
				 		</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	 <script src="https://www.google.com/recaptcha/api.js?render=6Lcw1aAUAAAAAPHojMUHBbx-olGvUK5U7m9YA8gg"></script>
	 <script>
	    grecaptcha.ready(function() {
	    // do request for recaptcha token
	    // response is promise with passed token
	        grecaptcha.execute('6Lcw1aAUAAAAAPHojMUHBbx-olGvUK5U7m9YA8gg', {action:'validate_captcha'})
	                  .then(function(token) {
	            // add token value to form
	            document.getElementById('g-recaptcha-response').value = token;
	        });
	    });
	</script>

<?
$footer_more = <<<EOT
	<script type="text/javascript">
	$(function() {

			var form = {

				init: false,

				initialize: function() {

					// if form is already initialized, skip
					if (this.init) {
						return;
					}
					this.init = true;


					var form = $(".ajax-quote-form");

					form.validate({
						submitHandler: function(form) {
							event.preventDefault();
							var myForm = $(form);
							var formData = myForm.serialize();
							// Loading Button
							var btn = $(this.submitButton);
							btn.button("loading");

							// Ajax Submit
							$.ajax({
								type: "POST",
								url: "php/quote.php",
								data: formData,
								dataType: "json",
								success: function(data) {

									var success = $("#contact-success"),
									    error = $("#contact-error");

									if (data.response == "success") {

										success.removeClass("hidden");
										error.addClass("hidden");

										// Reset Form
										$(".form-control")
											.val("")
											.blur()
											.parent()
											.removeClass("has-success")
											.removeClass("has-error")
											.find("label.error")
											.remove();
										error.html('<span class="glyphicon glyphicon-remove "></span>&nbsp;<strong>Error!</strong> Oops, something went wrong.');
										myForm.fadeOut(0);

									} else {
										error.append(data.message);
										error.removeClass("hidden");
										success.addClass("hidden");
									}
								},
								complete: function () {
									btn.button("reset");
								}
							});
						},
						rules: {
							val_fname: {
								required: true
							},
							val_lname: {
								required: true
							},
							val_email: {
								required: true,
								email: true
							},
							val_phone: {
								required: true
							},
							val_message: {
								required: true
							}
						},
						messages: {
							val_email: {
								required:"<span class='form-message-error'>Please enter your email address</span>",
								email:"<span class='form-message-error'>Please enter a valid email address</span>"
							},
							val_phone: {
								required:"<span class='form-message-error'>This field is required</span>"
							},
							val_message: {
								required: "<span class='form-message-error'>This field is required</span>"
							}
						},
						highlight: function (element) {
							$(element)
								.parent()
								.removeClass("has-success")
								.addClass("has-error");
						},
						success: function (element) {
							$(element)
								.parent()
								.removeClass("has-error")
								.addClass("has-success")
								.find("label.error")
								.remove();
						}
					});


				} // END initialize

			}; // END form object

			form.initialize();

	});

	</script>
EOT;

include 'inc_footer.php'; ?>
