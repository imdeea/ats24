	<!-- Footer wrapper -->
	<footer class="footer-wrapper footer-gray">
		<div class="container">
			<div class="row col-p30">
				<div class="col-sm-12 col-md-4">
					<div class="footer-widget">
						<h3 class="footer-title">ATS</h3>
						<ul class="footer-links clearfix">
							<li><a href="/">Home</a></li>
							<li><a href="/about.php">About Us</a></li>
							<li><a href="/high-performance-tapes.php">Products</a></li>
							<li><a href="/rewind-slitting.php">Capabilities</a></li>
							<li><a href="/portfolios.php">Portfolios</a></li>
							<li><a href="/aircraft-aerospace-applications.php">Applications</a></li>
							<li><a href="/quality-and-certifications.php">Quality &amp; Certifications</a></li>
							<li><a href="/terms-conditions.php">Terms &amp; Conditions</a></li>
							<li><a href="/privacy-policy.php">Privacy Policy</a></li>
							<li><a href="/contact.php">Contact</a></li>
							<li><a href="/request-quote.php">Request a Quote</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="footer-widget">
						<h3 class="footer-title">Contact</h3>
						Advanced Technology Supply, Inc.<br>
						1001 W. Newport Center Drive, Suite 111<br>
						Deerfield Beach, FL 33442<br>
						<i class="fa fa-phone"></i> &nbsp; <a href="tel:+1-800-793-6307">800.793.6307</a><br>
						<i class="fa fa-print"></i> &nbsp; 407.880.3338<br>
						<i class="fa fa-envelope"></i> &nbsp; <a href="mailto:sales@ats24.com">sales@ats24.com</a>

						<div class="social-media">
							<ul>
								<li><a href="https://www.linkedin.com/company/advanced-technology-supply-inc-of-orlando"><i class="fab fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="footer-widget">
						<h3 class="footer-title">Certifications</h3>
						<div class="sidebar-tweet clearfix">
							<div class="row">
								<div class="col-md-5" style="padding:20px; text-align: center">
									<a href="/pdf/iso-certificate-of-reg-2019.pdf" target="_blank" onclick="LogClick(this);"><img src="/images/nqa_hi_res_logo.png" alt="NNQA - ISO 9001:2015 and AS9100:2016 Certified" title="NQA - ISO 9001:2015 and AS9100:2016 Certified" style="max-width:100%;" width="581" height="519"></a>
									<img src="/images/iso-cert.png" alt="ISO Certified" title="ISO Certified" style="max-width:100%;" width="350" height="131">
								</div>
								<div class="col-md-7"  style="padding:10px; text-align: center">
									<a href="https://anab.ansi.org/"><img src="/images/ANAB_Accredited.png" alt="ANAB Accredited" title="ANAB Accredited" style="max-width:100%" width="860" height="695"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<? /*
				<div class="col-sm-6 col-md-4 col-sm-push-6 col-md-push-4 xs-box">
					<form action="#" class="footer-subscribe">
						<input type="email" placeholder=" Type email and hit enter">
						<button type="submit" class="hidden"></button>
					</form>
				</div>
				*/ ?>
				<div class="col-sm-12 col-md-12">
					<img src="/images/ConverterSelect.png" width="1092" height="297" style="height:50px; width: auto; display: inline-block;" />
					<a id='COCBadgeURL' href='https://www.chamberofcommerce.com/united-states/florida/deerfield-beach/wholesaler/2006473472-advanced-technology-supply-inc?source=memberwebsite' target='_tab'><img style='width:auto;height:80px; margin-left: 10px' id='COCBadgeIMG' src='https://coc.codes/images/badge/2006473472'></a>
					<p class="copyright">&copy; Copyright <?=date('Y')?></p>
				</div>
			</div>
		</div>
	</footer>



</div> <!-- END Global Wrapper -->




	<!-- Javascript files -->
	<script src="/plugins/jquery/jquery-2.1.0.min.js"></script>
	<script src="/plugins/jquery/jquery.validate.min.js"></script>
	<script src="/plugins/jquery/additional-methods.min.js"></script>
	<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>

	<script src="/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script src="/plugins/jquery.appear.js"></script>
	<script src="/plugins/retina.min.js"></script>
	<script src="/plugins/stellar.min.js"></script>
	<script src="/plugins/sticky.min.js"></script>
	<script src="/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.industry-app-gallery').magnificPopup({
		  delegate: 'a', // child items selector, by clicking on it popup will open
		  type: 'image',
		  gallery:{enabled:true}
		  // other options
		});
	</script>

	<!-- Main javascript file -->
	<script src="/js/script.js"></script>



<?
if (isset($footer_more)) echo($footer_more);
?>




</body>
</html>
