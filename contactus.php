<?php include("includes/header.php"); ?>


<!-- Header -->


<!-- Page Content Start -->
<div class="page-content">
    <div class="dz-bnr-inr style-1 text-center">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Contact Us</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
        <img class="bg-shape1" src="images/home-banner/shape1.png" alt="">
        <img class="bg-shape2" src="images/home-banner/shape1.png" alt="">
        <img class="bg-shape3" src="images/home-banner/shape3.png" alt="">
        <img class="bg-shape4" src="images/home-banner/shape3.png" alt="">
    </div>
</div>

	<!-- Page Content Start -->
	<div class="page-content">
	<!-- Contact form sectio starts from here -->
		<section class="content-inner contact-form-wraper style-1">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-5 col-lg-5 m-b30">
						<div class="info-box">
							<div class="info">
								<h2>Contact Information</h2>
								<p class="font-18">Fill up the form and our team will get back to you within 24 hours.</p>
							</div>
							
							<div class="widget widget_about">
								<div class="widget widget_getintuch">
									<ul>
										<li>
											<i class="fa fa-phone"></i>
											<span>1800-123-4567<br>+91 987-654-3210</span> 
										</li>
										<li>
											<i class="fa fa-envelope"></i> 
											<span>info@example.com <br>services@gmail.com</span>
										</li>
										<li>
											<i class="fas fa-map-marker-alt"></i>
											<span>Demo Address #8901 Marmora Road <br>Chi Minh City, Vietnam</span>
										</li>
									</ul>
								</div>
							</div>


							<div class="social-box dz-social-icon style-3">
								<h6>Our Socials</h6>
								<ul class="social-icon">
									<li><a class="social-btn" target="_blank" href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a class="social-btn" target="_blank" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
									<li><a class="social-btn" target="_blank" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
									<li><a class="social-btn" target="_blank" href="https://youtube.com/"><i class="fab fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
						
					<div class="col-xl-7 col-lg-7">
						<div class="contact-box">
							<div class="card">
								<div class="card-body">
									<div class="mb-4">
										<h2 class="mb-0">Get In touch</h2>
										<p class="mb-0 font-18 text-primary">We are here for you. How we can help?</p>
									</div>
									<form class="dzForm" method="POST" action="https://cryptozone.dexignzone.com/frontend/xhtml/script/contact_smtp.php">
										<div class="dzFormMsg"></div>
										<input type="hidden" class="form-control" name="dzToDo" value="Contact" >
										
										<div class="row">
											<div class="col-xl-6 mb-3 mb-md-4">
												<input name="dzFirstName" required type="text" class="form-control" placeholder="First Name">
											</div>
											<div class="col-xl-6 mb-3 mb-md-4">
												<input name="dzLastName" type="text" class="form-control" placeholder="Last Name">
											</div>
											<div class="col-xl-6 mb-3 mb-md-4">
												<input name="dzEmail" required type="text" class="form-control" placeholder="Email Address">
											</div>
											<div class="col-xl-6 mb-3 mb-md-4">
												<input name="dzPhoneNumber" required type="text" class="form-control" placeholder="Phone No.">
											</div>
											<div class="col-xl-12 mb-3 mb-md-4">
												<textarea name="dzMessage" required class="form-control" placeholder="Message"></textarea>
											</div>
											<div class="col-xl-12 mb-3 mb-md-4">
												<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
												<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
											</div>
											<div class="col-xl-12">
												<button name="submit" type="submit" value="Submit" class="btn btn-primary">Submit Now</button>								
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Contact form section ends from here -->


    </div>
	<!-- Page Content End -->

<!-- Footer -->
<?php include("includes/footer.php"); ?>