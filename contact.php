<?
ini_set('display_errors',1);
error_reporting(E_ALL);

$title = 'Contact Us - AST 24 Customer Support | Florida';
$meta_descr = 'Contact ATS 24 today and speak to one of our experts. We would be delighted to provide quotes and explain how our quality services will help you.';
include 'inc_header.php'; ?>

	<section class="section-intro bg-img bg03 stellar" data-stellar-background-ratio="0.4">
		<div class="bg-overlay op6"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-8">
					<h1 class="intro-title mb20">Get in Touch</h1>
					<p class="intro-p mb30"></p>
				</div>
			</div>
		</div>
	</section>


	<section class="section mt30 page-contact mb30">
		<div class="container">
			<div class="row mb80">
				<!--<div class="col-md-5 sm-box2">
					 <h3 class="title-small br-bottom">Headquarters</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, magni autem nesciunt? Deserunt atque, quibusdam distinctio saepe est aliquam eum nemo a iure at. Ipsum nihil assumenda nostrum itaque rerum?</p>
					<p>
						<a href="#" class="btn btn-b mr10">London</a>
						<a href="#" class="btn btn-b mr10">Dublin</a>
						<a href="#" class="btn btn-b mr10">Los Angeles</a>
					</p>
				</div>-->
				<div class="col-md-12">
					<div class="contact-map-wrapper">
						<div class="contact-map">
							<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.716603271061!2d-80.12852898496791!3d26.303285683393856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x94d47c601cf2ce34!2sAdvance+Technology+Supply!5e0!3m2!1sen!2sus!4v1558466236838!5m2!1sen!2sus"></iframe>
						</div>
					</div>
				</div>
			</div>

			<div class="row col-p0 mb80 max_height xs_max_height">
				<div class="col-sm-6 col-md-3">
					<div class="box-services-dc box-services-e el_max_height">
						<div class="bg-overlay"></div>
						<div class="row col-p0">
							<div class="col-sm-12">
								<p class="mb0 ">1001 W. Newport Center Drive<br>Deerfield Beach, FL 33442</p>
								<i class="far fa-map-marker-alt"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="box-services-dc box-services-e dark el_max_height">
						<div class="bg-overlay"></div>
						<div class="row col-p0">
							<div class="col-sm-12">
								<p class="mb0"><a href="mailto:sales@ats24.com" class="anchor-1">sales@ats24.com</a><br>&nbsp;</p>
								<i class="far fa-envelope"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="box-services-dc box-services-e green el_max_height">
						<div class="bg-overlay"></div>
						<div class="row col-p0">
							<div class="col-sm-12">
								<p class="mb0 "><a href="tel:800-793-6307" class="anchor-1">800.793.6307</a><br><a href="tel:800-793-6307" class="anchor-1">407.880.2022</a></p>
								<i class="far fa-phone"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="box-services-dc box-services-e orange el_max_height">
						<div class="bg-overlay"></div>
						<div class="row col-p0">
							<div class="col-sm-12">
								<p class="mb0 ">Mon - Fri: 9:00 - 18:00 <br> Sat - Sun: Closed</p>
								<i class="far fa-clock"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 xs-box3">
					<div class="alert alert-success hidden" id="contact-success">
						<span class="glyphicon glyphicon-ok "></span> &nbsp;
						<strong>Success!</strong> Thank you for your message.
					</div>
					<div class="alert alert-danger hidden" id="contact-error">
						<span class="glyphicon glyphicon-remove "></span> &nbsp;
						<strong>Error!</strong> Oops, something went wrong.
					</div>
					<form class="form ajax-contact-form" method="post" action="php/contact.php">
						<div class="row col-p10">
							<div class="col-sm-6">
		 						<label class="mb10"><input type="text" name="val_fname" id="val_fname" class="form-control" placeholder=" First Name"></label>
							</div>
							<div class="col-sm-6">
		 						<label class="mb10"><input type="text" name="val_lname" id="val_lname" class="form-control" placeholder=" Last Name"></label>
							</div>
						</div>
						<div class="row col-p10">
							<div class="col-sm-6">
		 						<label class="mb10"><input type="text" name="val_subject" id="val_subject" required class="form-control" placeholder=" Subject"></label>
							</div>
							<div class="col-sm-6">
		 						<label class="mb10"><input type="email" name="val_email" id="val_email" required class="form-control" placeholder=" Email Address"></label>
							</div>
						</div>
						<label>
		 					<textarea name="val_message" id="val_message"  cols="30" rows="10" required class="form-control" placeholder=" Message"></textarea>
		 				</label>
		 				<div class="mt20 clearfix">
							<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
							<input type="hidden" name="action" value="validate_captcha">
		 					<div class="mb30"></div>
	 						<button type="submit" class="btn btn-d">Submit</button>
				 		</div>
					</form>
				</div>
				<!--<div class="col-sm-4">
					 <h3 class="title-small br-bottom">Having issues?</h3>
					<p class="mb30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus aliquid reprehenderit magnam vel repellat cupiditate iste est beatae error, maiores.</p>
					<ul class="unstyled">
						<li><i class="fa fa-chevron-right fs-small color-main mr10"></i> &nbsp; Maps</li>
						<li><i class="fa fa-chevron-right fs-small color-main mr10"></i> &nbsp; Sliders</li>
						<li><i class="fa fa-chevron-right fs-small color-main mr10"></i> &nbsp; Tabs</li>
						<li><i class="fa fa-chevron-right fs-small color-main mr10"></i> &nbsp; Accordions</li>
						<li><i class="fa fa-chevron-right fs-small color-main mr10"></i> &nbsp; Toggles</li>
					</ul>
				</div>-->
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

<?php $footer_more = '
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


				var $form = $(".ajax-contact-form");

				$form.validate({
					submitHandler: function(form) {
						var myForm = $(form);
						var formData = $(form).serialize();
						// Loading Button
						var btn = $(this.submitButton);
						btn.button("loading");

						// Ajax Submit
						$.ajax({
							type: "POST",
							url: $form.attr("action"),
							data: formData,
							dataType: "json",
							success: function(data) {

								var $success = $("#contact-success"),
									$error = $("#contact-error");

								if (data.response == "success") {

									$success.removeClass("hidden");
									$error.addClass("hidden");

									// Reset Form
									$form.find(".form-control")
										.val("")
										.blur()
										.parent()
										.removeClass("has-success")
										.removeClass("has-error")
										.find("label.error")
										.remove();
									$error.html(\'<span class="glyphicon glyphicon-remove "></span>&nbsp;<strong>Error!</strong> Oops, something went wrong.\');
									myForm.fadeOut(0);

								} else {
									$error.append(data.message);
									$error.removeClass("hidden");
									$success.addClass("hidden");
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
						val_subject: {
							required: true
						},
						val_message: {
							required: true
						}
					},
					messages: {
						val_fname: {
							required:"<span class=\'form-message-error\'>This field is required!</span>"
						},
						val_lname: {
							required:"<span class=\'form-message-error\'>This field is required!</span>"
						},
						val_email: {
							required:"<span class=\'form-message-error\'>Please enter your email address!</span>",
							email:"<span class=\'form-message-error\'>Please enter a valid email address!</span>"
						},
						val_subject: {
							required:"<span class=\'form-message-error\'>This field is required!</span>"
						},
						val_message: {
							required: "<span class=\'form-message-error\'>This field is required!</span>"
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

</script>';
include 'inc_footer.php'; ?>
