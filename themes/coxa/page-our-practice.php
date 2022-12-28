<?php 
/*Template Name: Our Practice*/
get_header(); 
$thisID = get_the_ID();
?>
<?php get_template_part('templates/page', 'banner'); ?>

<div class="pratice-pg-con-cntlr">
	<?php 
	$showhideexpertt = get_field('showhideexpertt', $thisID);
	if($showhideexpertt):
	$experttreatment = get_field('experttreatment', $thisID);
	?>
	<section class="expert-treatment-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="expert-treatment-sec-inr">
						<div class="sec-entry-hdr-cntlr">
							<div class="sec-entry-hdr">
								<div class="diamond-module">
									<ul class="reset-list">
										<li>
											<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
										</li>
										<li>
											<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
										</li>
										<li>
											<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
										</li>
									</ul>
								</div>
								<h2 class="sec-entry-hdr-title fl-h4">Expert Treatments</h2>           
								<p>Nunc sollicitudin diam ante vitae quis ac. Morbi sapien, blandit et cursus suspendisse accumsan. Odio erat etiam purus bibendum fusce tristique aliquam non. </p>
							</div>
						</div>
						<div class="expert-treatment-grds">
							<div class="ex-trmnt-grd-item-col">
								<div class="ex-trmnt-grd-item">
									<div class="ex-trmnt-grd-item-img-cntlr">
										<a href="#" class="overlay-link"></a>
										<div class="ex-trmnt-grd-item-img inline-bg" style="background: url('assets/images/ex-trmnt-img-01.jpg');"></div>
									</div>
									<div class="ex-trmnt-grd-item-des">
										<h3 class="ex-trmnt-grd-des-title fl-h5"><a href="#">Cosmetic Dentistry</a></h3>
									</div>
								</div>
							</div>
							<div class="ex-trmnt-grd-item-col">
								<div class="ex-trmnt-grd-item">
									<div class="ex-trmnt-grd-item-img-cntlr">
										<a href="#" class="overlay-link"></a>
										<div class="ex-trmnt-grd-item-img inline-bg" style="background: url('assets/images/gallery-04.jpg');"></div>
									</div>
									<div class="ex-trmnt-grd-item-des">
										<h3 class="ex-trmnt-grd-des-title fl-h5"><a href="#">Cosmetic Dentistry</a></h3>
									</div>
								</div>
							</div>
							<div class="ex-trmnt-grd-item-col">
								<div class="ex-trmnt-grd-item">
									<div class="ex-trmnt-grd-item-img-cntlr">
										<a href="#" class="overlay-link"></a>
										<div class="ex-trmnt-grd-item-img inline-bg" style="background: url('assets/images/ex-trmnt-img-04.jpg');"></div>
									</div>
									<div class="ex-trmnt-grd-item-des">
										<h3 class="ex-trmnt-grd-des-title fl-h5"><a href="#">Cosmetic Dentistry</a></h3>
									</div>
								</div>
							</div>
							<div class="ex-trmnt-grd-item-col">
								<div class="ex-trmnt-grd-item">
									<div class="ex-trmnt-grd-item-img-cntlr">
										<a href="#" class="overlay-link"></a>
										<div class="ex-trmnt-grd-item-img inline-bg" style="background: url('assets/images/ex-trmnt-img-03.jpg');"></div>
									</div>
									<div class="ex-trmnt-grd-item-des">
										<h3 class="ex-trmnt-grd-des-title fl-h5"><a href="#">Cosmetic Dentistry</a></h3>
									</div>
								</div>
							</div>
							<div class="ex-trmnt-grd-item-col">
								<div class="ex-trmnt-grd-item">
									<div class="ex-trmnt-grd-item-img-cntlr">
										<a href="#" class="overlay-link"></a>
										<div class="ex-trmnt-grd-item-img inline-bg" style="background: url('assets/images/ex-trmnt-img-05.jpg');"></div>
									</div>
									<div class="ex-trmnt-grd-item-des">
										<h3 class="ex-trmnt-grd-des-title fl-h5"><a href="#">Cosmetic Dentistry</a></h3>
									</div>
								</div>
							</div>
							<div class="ex-trmnt-grd-item-col">
								<div class="ex-trmnt-grd-item">
									<div class="ex-trmnt-grd-item-img-cntlr">
										<a href="#" class="overlay-link"></a>
										<div class="ex-trmnt-grd-item-img inline-bg" style="background: url('assets/images/ex-trmnt-img-06.jpg');"></div>
									</div>
									<div class="ex-trmnt-grd-item-des">
										<h3 class="ex-trmnt-grd-des-title fl-h5"><a href="#">Cosmetic Dentistry</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php 
	endif;
	?>
	<section class="about-intro-sec has-inline-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="abtis-img-text-row abtis-lft-img-row">
						<div class="abtis-img-text-row-inr">
							<div class="abtis-img-txt-col abtis-row-img">
								<div class="abtis-row-img-inner">
									<img class="single-image"src="assets/images/about-us-intro-img-02.jpg" alt="">
									<div class="double-image">
										<img class="double-image-main" src="assets/images/about-us-intro-img-02.png" alt="">
										<img class="double-image-sub" src="assets/images/about-us-intro-img-03.png" alt="">
									</div>
									<div class="abtis-row-main-img-cntrl">
										<div class="abtis-row-main-img inline-bg" style="background-image: url(assets/images/tremnt-main-img-01.jpg);">
										</div>
									</div>
									<div class="abtis-row-sub-img-cntlr">
										<div class="abtis-row-sub-img inline-bg" style="background-image: url(assets/images/about-us-intro-sub-img-01.jpg);">
										</div>
									</div>
								</div>
							</div>
							<div class="abtis-img-txt-col abtis-row-text">
								<div class="abtis-row-text-inr">
									<div class="diamond-module">
										<ul class="reset-list">
											<li>
												<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
											</li>
											<li>
												<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
											</li>
											<li>
												<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
											</li>
										</ul>
									</div>
									<h2 class="fl-h4">Open to New Patients</h2>
									<p>Fermentum et tristique dictumst ipsum dolor turpis arcu nibh integer. Mauris volutpat dictum cras sagittis leo platea tincidunt. Scelerisque turpis tortor, purus nec eget mauris tempor lacus. Varius amet egestas cursus quam proin magna varius sit. Dui ut in massa nibh ut. Commodo et sapien semper imperdiet dolor nunc id sit consectetur. Fames amet, turpis in at in senectus, in felis amet euismod vitae potenti praesents.</p>
									<p>Aenean in sed mi malesuada quis purus facilisis vel senectus. Purus aliquet consequat dignissim aliquam bibendum pulvinar faucibus et enim. Sapien faucibus mattis quis nunc vulputate habitant scelerisque. Non tincidunt enim adipiscing lectus euismod turpis vel non massa, ultricies condimentum dui.</p>
									<div class="abtis-intro-des-btn">
										<a class="cdc-btn" href="#">Find Out More</a>
									</div>
								</div>                          
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about-intro-sec has-inline-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="abtis-img-text-row">
						<div class="abtis-img-text-row-inr">
							<div class="abtis-img-txt-col abtis-row-img">
								<div class="abtis-row-img-inner">
									<img class="single-image"src="assets/images/about-us-intro-img-02.png" alt="">
									<div class="double-image">
										<img class="double-image-main" src="assets/images/about-us-intro-img-02.png" alt="">
										<img class="double-image-sub" src="assets/images/about-us-intro-img-03.png" alt="">
									</div>
									<div class="abtis-row-main-img-cntrl">
										<div class="abtis-row-main-img inline-bg" style="background-image: url(assets/images/practice-intro-img-01.jpg);">
										</div>
									</div>
									<div class="abtis-row-sub-img-cntlr">
										<div class="abtis-row-sub-img inline-bg" style="background-image: url(assets/images/about-us-intro-img-03.png);">
										</div>
									</div>
								</div>
							</div>
							<div class="abtis-img-txt-col abtis-row-text">
								<div class="abtis-row-text-inr">
									<div class="diamond-module">
										<ul class="reset-list">
											<li>
												<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
											</li>
											<li>
												<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
											</li>
											<li>
												<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
											</li>
										</ul>
									</div>
									<h2 class="fl-h4">Modern Equipment</h2>
									<p>Fermentum et tristique dictumst ipsum dolor turpis arcu nibh integer. Mauris volutpat dictum cras sagittis leo platea tincidunt. Scelerisque turpis tortor, purus nec eget mauris tempor lacus. Varius amet egestas cursus quam proin magna varius sit. Dui ut in massa nibh ut. Commodo et sapien semper imperdiet dolor nunc id sit consectetur. Fames amet, turpis in at in senectus, in felis amet euismod vitae potenti praesents.</p> 
									<p>Aenean in sed mi malesuada quis purus facilisis vel senectus. Purus aliquet consequat dignissim aliquam bibendum pulvinar faucibus et enim. Sapien faucibus mattis quis nunc vulputate habitant scelerisque. Non tincidunt enim adipiscing lectus euismod turpis vel non massa, ultricies condimentum dui.</p>
									<div class="abtis-intro-des-btn">
										<a class="cdc-btn" href="#">See Our Equipment</a>
									</div>
								</div>                          
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="practice-gallery why-choose-sec  parallaxie parallaxie-bg-Size_auto" style="background-image: url(assets/images/why-choose-bg-img.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-entry-hdr-cntlr">
						<div class="sec-entry-hdr">
							<h2 class="sec-entry-hdr-title fl-h4">Practice Gallery</h2>
							<div class="diamond-module">
								<ul class="reset-list">
									<li>
										<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
									</li>
									<li>
										<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
									</li>
									<li>
										<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
									</li>
								</ul>
							</div>                
							<p>Amet a aliquam tellus, ut. Fringilla sagittis ut a pellentesque accumsan.<br> Ipsum malesuada vitae fusce semper nec scelerisque a.</p>
						</div>
					</div>
					<div class="practice-gallery-grids-cntlr">
						<div class="practice-gallery-grids">
							<div class="practice-gallery-grid-col">
								<div class="practice-gallery-grid-item">
									<div class="practice-gallery-grid-img-cntlr">
										<a href="assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
										<div class="practice-gallery-grid-img inline-bg" style="background-image: url(assets/images/practice-gallery-01.jpg);"></div>
									</div>
									<div class="practice-gallery-grid-des">
										<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Teatment Room</a></h3>
									</div>
								</div>
							</div>
							<div class="practice-gallery-grid-col">
								<div class="practice-gallery-grid-item">
									<div class="practice-gallery-grid-img-cntlr">
										<a href="assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
										<div class="practice-gallery-grid-img inline-bg" style="background-image: url(assets/images/practice-gallery-02.jpg);"></div>
									</div>
									<div class="practice-gallery-grid-des">
										<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Dental Implant Room</a></h3>
									</div>
								</div>
							</div>
							<div class="practice-gallery-grid-col">
								<div class="practice-gallery-grid-item">
									<div class="practice-gallery-grid-img-cntlr">
										<a href="assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
										<div class="practice-gallery-grid-img inline-bg" style="background-image: url(assets/images/practice-gallery-03.jpg);"></div>
									</div>
									<div class="practice-gallery-grid-des">
										<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Cosmetic Dentistry Room</a></h3>
									</div>
								</div>
							</div>
							<div class="practice-gallery-grid-col">
								<div class="practice-gallery-grid-item">
									<div class="practice-gallery-grid-img-cntlr">
										<a href="assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
										<div class="practice-gallery-grid-img inline-bg" style="background-image: url(assets/images/practice-gallery-04.jpg);"></div>
									</div>
									<div class="practice-gallery-grid-des">
										<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Specialist Chair</a></h3>
									</div>
								</div>
							</div>
							<div class="practice-gallery-grid-col">
								<div class="practice-gallery-grid-item">
									<div class="practice-gallery-grid-img-cntlr">
										<a href="assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
										<div class="practice-gallery-grid-img inline-bg" style="background-image: url(assets/images/practice-gallery-11.jpg);"></div>
									</div>
									<div class="practice-gallery-grid-des">
										<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Teatment Room</a></h3>
									</div>
								</div>
							</div>
							<div class="practice-gallery-grid-col">
								<div class="practice-gallery-grid-item">
									<div class="practice-gallery-grid-img-cntlr">
										<a href="assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
										<div class="practice-gallery-grid-img inline-bg" style="background-image: url(assets/images/practice-gallery-05.jpg);"></div>
									</div>
									<div class="practice-gallery-grid-des">
										<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Dental Implant Room</a></h3>
									</div>
								</div>
							</div>
							<div class="practice-gallery-grid-col">
								<div class="practice-gallery-grid-item">
									<div class="practice-gallery-grid-img-cntlr">
										<a href="assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
										<div class="practice-gallery-grid-img inline-bg" style="background-image: url(assets/images/practice-gallery-12.jpg);"></div>
									</div>
									<div class="practice-gallery-grid-des">
										<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Cosmetic Dentistry Room</a></h3>
									</div>
								</div>
							</div>
							<div class="practice-gallery-grid-col">
								<div class="practice-gallery-grid-item">
									<div class="practice-gallery-grid-img-cntlr">
										<a href="assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
										<div class="practice-gallery-grid-img inline-bg" style="background-image: url(assets/images/practice-gallery-06.jpg);"></div>
									</div>
									<div class="practice-gallery-grid-des">
										<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Specialist Chair</a></h3>
									</div>
								</div>
							</div>
							<div class="practice-gallery-grid-col">
								<div class="practice-gallery-grid-item">
									<div class="practice-gallery-grid-img-cntlr">
										<a href="assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
										<div class="practice-gallery-grid-img inline-bg" style="background-image: url(assets/images/practice-gallery-07.jpg);"></div>
									</div>
									<div class="practice-gallery-grid-des">
										<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Teatment Room</a></h3>
									</div>
								</div>
							</div>
							<div class="practice-gallery-grid-col">
								<div class="practice-gallery-grid-item">
									<div class="practice-gallery-grid-img-cntlr">
										<a href="assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
										<div class="practice-gallery-grid-img inline-bg" style="background-image: url(assets/images/practice-gallery-08.jpg);"></div>
									</div>
									<div class="practice-gallery-grid-des">
										<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Dental Implant Room</a></h3>
									</div>
								</div>
							</div>
							<div class="practice-gallery-grid-col">
								<div class="practice-gallery-grid-item">
									<div class="practice-gallery-grid-img-cntlr">
										<a href="assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
										<div class="practice-gallery-grid-img inline-bg" style="background-image: url(assets/images/practice-gallery-09.jpg);"></div>
									</div>
									<div class="practice-gallery-grid-des">
										<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Cosmetic Dentistry Room</a></h3>
									</div>
								</div>
							</div>
							<div class="practice-gallery-grid-col">
								<div class="practice-gallery-grid-item">
									<div class="practice-gallery-grid-img-cntlr">
										<a href="assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
										<div class="practice-gallery-grid-img inline-bg" style="background-image: url(assets/images/practice-gallery-10.jpg);"></div>
									</div>
									<div class="practice-gallery-grid-des">
										<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Specialist Chair</a></h3>
									</div>
								</div>
							</div>
						</div>
						<div class="practice-gallery-grid-btn">
							<a href="#" class="cdc-btn">See the full gallery</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="locations-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-entry-hdr-cntlr">
						<div class="sec-entry-hdr">
							<h3 class="sec-entry-hdr-title fl-h4">Discover Our Dental Practices</h3>
							<div class="diamond-module">
								<ul class="reset-list">
									<li>
										<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
									</li>
									<li>
										<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
									</li>
									<li>
										<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
									</li>
								</ul>
							</div>                
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec, sed amet eget dui. Pharetra, magnis lacus tellus, nunc. Hendrerit sit consequat et sem eget scelerisque nunc ac lobortis. Consequat, velit hac vulputate non suspendisse arcu blandit lorem aliquam. Fermentum, etiam risus vestibulum a vel. Scelerisque diam facilisi morbi justo, ultrices amet. Et sociis dui facilisis sociis elit scelerisque metus ut. Elit amet nunc, tristique sit in.</p>
						</div>
					</div>
					<div class="locations-sec-inner">
						<div class="locations-sec-grids locationSlider">
							<div class="locations-sec-grid-item mHc">
								<div class="locations-sec-grid-item-inner">
									<div class="locations-area">
										<img src="assets/images/locations-image.jpg" alt="">
									</div>
									<div class="locations-des mHc1">
										<div class="locations-title-cntrl">
											<h4 class="locations-des-title fl-h5"><a href="#">9 Rhyd Y Penau Road <br> Cyncoed, Cardiff, CF23 6PX</a></h4>
											<a href="#" class="cdc-btn">See Practice</a>
											<a href="#" class="cdc-trnsprnt-btn">Get Directions</a>
										</div>
										<div class="office-time-zoon mHc2">
											<h5 class="office-des-title">Opening Hours:</h5>
											<span>Mon : 8.30am - 7.00pm</span>
											<span>Tues - Fri: 8.30am - 5.00pm</span>
											<span>Sat - Sun: Closed </span>
										</div>
										<div class="office-contact mHc3">
											<h5 class="office-des-title">Phone:</h5>
											<a href="tel:02920761100">02920 761100</a>
										</div>
										<div class="office-social">
											<h5 class="office-des-title">Say hello:</h5>
											<ul class="reset-list">
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="facebook-icon" width="10" height="18" viewBox="0 0 10 18" fill="#707070">
																<use xlink:href="#facebook-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="twitter-icon" width="24" height="20" viewBox="0 0 24 20" fill="#707070">
																<use xlink:href="#twitter-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="instagram-icon" width="22" height="22" viewBox="0 0 22 22" fill="#707070">
																<use xlink:href="#instagram-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="likedin-icon" width="20" height="20" viewBox="0 0 20 20" fill="#707070">
																<use xlink:href="#likedin-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="locations-sec-grid-item mHc">
								<div class="locations-sec-grid-item-inner">
									<div class="locations-area">
										<img src="assets/images/locations-image.jpg" alt="">
									</div>
									<div class="locations-des mHc1">
										<div class="locations-title-cntrl">
											<h4 class="locations-des-title fl-h5"><a href="#">2 Llanthewy Road <br>Newport, Gwent, NP20 4JR</a></h4>
											<a href="#" class="cdc-btn">See Practice</a>
											<a href="#" class="cdc-trnsprnt-btn">Get Directions</a>
										</div>
										<div class="office-time-zoon mHc2">
											<h5 class="office-des-title">Opening Hours:</h5>
											<span>Mon : 8.30am - 7.00pm</span>
											<span>Sat - Sun: Closed </span>
										</div>
										<div class="office-contact mHc3">
											<h5 class="office-des-title">Phone:</h5>
											<a href="tel:02920761100">02920 761100</a>
										</div>
										<div class="office-social">
											<h5 class="office-des-title">Say hello:</h5>
											<ul class="reset-list">
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="facebook-icon" width="10" height="18" viewBox="0 0 10 18" fill="#707070">
																<use xlink:href="#facebook-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="twitter-icon" width="24" height="20" viewBox="0 0 24 20" fill="#707070">
																<use xlink:href="#twitter-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="instagram-icon" width="22" height="22" viewBox="0 0 22 22" fill="#707070">
																<use xlink:href="#instagram-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="likedin-icon" width="20" height="20" viewBox="0 0 20 20" fill="#707070">
																<use xlink:href="#likedin-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="locations-sec-grid-item mHc">
								<div class="locations-sec-grid-item-inner">
									<div class="locations-area">
										<img src="assets/images/locations-image.jpg" alt="">
									</div>
									<div class="locations-des mHc1">
										<div class="locations-title-cntrl">
											<h4 class="locations-des-title fl-h5"><a href="#">67 Cardiff Road <br> Newport, Gwent, NP20 2EN</a></h4>
											<a href="#" class="cdc-btn">See Practice</a>
											<a href="#" class="cdc-trnsprnt-btn">Get Directions</a>
										</div>
										<div class="office-time-zoon mHc2">
											<h5 class="office-des-title">Opening Hours:</h5>
											<span>Mon : 8.30am - 7.00pm</span>
											<span>Sat - Sun: Closed </span>
										</div>
										<div class="office-contact mHc3">
											<h5 class="office-des-title">Phone:</h5>
											<a href="tel:02920761100">02920 761100</a>
										</div>
										<div class="office-social">
											<h5 class="office-des-title">Say hello:</h5>
											<ul class="reset-list">
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="facebook-icon" width="10" height="18" viewBox="0 0 10 18" fill="#707070">
																<use xlink:href="#facebook-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="twitter-icon" width="24" height="20" viewBox="0 0 24 20"fill="#707070">
																<use xlink:href="#twitter-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="instagram-icon" width="22" height="22" viewBox="0 0 22 22"fill="#707070">
																<use xlink:href="#instagram-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="likedin-icon" width="20" height="20" viewBox="0 0 20 20"fill="#707070">
																<use xlink:href="#likedin-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="locations-sec-grid-item mHc">
								<div class="locations-sec-grid-item-inner">
									<div class="locations-area">
										<img src="assets/images/locations-image.jpg" alt="">
									</div>
									<div class="locations-des mHc1">
										<div class="locations-title-cntrl">
											<h4 class="locations-des-title fl-h5"><a href="#">67 Cardiff Road <br> Newport, Gwent, NP20 2EN</a></h4>
											<a href="#" class="cdc-btn">See Practice</a>
											<a href="#" class="cdc-trnsprnt-btn">Get Directions</a>
										</div>
										<div class="office-time-zoon mHc2">
											<h5 class="office-des-title">Opening Hours:</h5>
											<span>Mon : 8.30am - 7.00pm</span>
											<span>Sat - Sun: Closed </span>
										</div>
										<div class="office-contact mHc3">
											<h5 class="office-des-title">Phone:</h5>
											<a href="tel:02920761100">02920 761100</a>
										</div>
										<div class="office-social">
											<h5 class="office-des-title">Say hello:</h5>
											<ul class="reset-list">
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="facebook-icon" width="10" height="18" viewBox="0 0 10 18" fill="#707070">
																<use xlink:href="#facebook-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="twitter-icon" width="24" height="20" viewBox="0 0 24 20"fill="#707070">
																<use xlink:href="#twitter-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="instagram-icon" width="22" height="22" viewBox="0 0 22 22"fill="#707070">
																<use xlink:href="#instagram-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
												<li>
													<a href="#" target="_blank">
														<i>
															<svg class="likedin-icon" width="20" height="20" viewBox="0 0 20 20"fill="#707070">
																<use xlink:href="#likedin-icon"></use> 
															</svg>
														</i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="location-prev-next">
							<div class="revw-prev">
								<span class="revw-left">
									<svg class="revw-left-arrow" width="11" height="34" viewBox="0 0 11 34" fill="#29467D">
										<use xlink:href="#revw-left-arrow"></use> 
									</svg>
								</span>
							</div>
							<div class="revw-next">
								<span class="revw-right">
									<svg class="revw-right-arrow" width="11" height="34" viewBox="0 0 11 34" fill="#29467D">
										<use xlink:href="#revw-right-arrow"></use> 
									</svg>
								</span>
							</div>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="cta-section">
		<div class="container-lg">
			<div class="row">
				<div class="col-md-12">
					<div class="cta-module-cntlr">
						<div class="cta-module-wrp parallaxie" style="background-image: url(assets/images/cta-sec-bg2.jpg);">
							<div class="cta-module">
								<div class="cta-module-des-ctlr">
									<div class="diamond-module">
										<ul class="reset-list">
											<li>
												<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
											</li>
											<li>
												<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
											</li>
											<li>
												<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
											</li>
										</ul>
									</div>
									<div class="cta-module-des">
										<h2 class="cta-module-des-title fl-h2"><strong>Welcoming </strong>New Patients</h2>
										<p>If you’ve recently moved to Cardiff and need a dentist, or simply fancy changing, get in touch. <br> We are more than happy to talk to you about how we can help.</p>
									</div>
								</div>
								<div class="cta-btn-ctlr">
									<div class="cta-btn">
										<a href="#" class="cdc-btn">Contact Us</a>                     
									</div>
								</div>
							</div>
						</div>
					</div>            
				</div>
			</div>
		</div>
	</section>

	<section class="wco-team-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-entry-hdr-cntlr">
						<div class="sec-entry-hdr">
							<h2 class="sec-entry-hdr-title fl-h4">Meet Our Friendly Team</h2>
							<div class="diamond-module">
								<ul class="reset-list">
									<li>
										<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
									</li>
									<li>
										<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
									</li>
									<li>
										<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
									</li>
								</ul>
							</div>                
							<p>Amet a aliquam tellus, ut. Fringilla sagittis ut a pellentesque accumsan.<br> Ipsum malesuada vitae fusce semper nec scelerisque a.</p>
						</div>
					</div>
					<div class="profile-module">
						<div class="team-grds teamGrdSlider">
							<div class="team-grd-item-col">
								<div class="pro-mdul-grd">
									<div class="pm-grd-img-cntlr">
										<div class="pm-grd-img inline-bg" style="background-image: url(assets/images/pm-grd-img-01.jpg);"></div>
									</div>
									<div class="pm-grd-desc-cntlr mHc">
										<h5 class="fl-h5 pm-grd-title mHc1"><a href="#">David Cox</a></h5>
										<div class="pm-grd-assist mHc2">
											<span class="pm-grd-assist-name">Practice Principal<span class="pm-grd-assist-no">GDC No: 65106</span></span>
										</div>
										<span class="pm-grd-addr mHc3">BDS (Wales, 1990), MSc (Dental Implantology, 2014)</span>
										<div class="pm-grd-desc">
											<p>Id donec nulla nunc, netus aliquet feugiat amet ultrices. Urna sed vel velit aenean enim volutpat risus blandit. Pellentesque semper id feugiat tortor volutpat volutpat...</p>
										</div>
										<div class="pm-grd-btns-cntlr">
											<div class="pm-grd-btn">
												<a class="" href="#" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="team-grd-item-col">
								<div class="pro-mdul-grd">
									<div class="pm-grd-img-cntlr">
										<div class="pm-grd-img inline-bg" style="background-image: url(assets/images/pm-grd-img-02.jpg);"></div>
									</div>
									<div class="pm-grd-desc-cntlr mHc">
										<h5 class="fl-h5 pm-grd-title mHc1"><a href="#">Robert Hitchcock</a></h5>
										<div class="pm-grd-assist mHc2">
											<span class="pm-grd-assist-name">Practice Principal<span class="pm-grd-assist-no">GDC No: 69354</span></span>
										</div>
										<span class="pm-grd-addr mHc3">BDS (Newcastle, 1993)</span>
										<div class="pm-grd-desc">
											<p>Id donec nulla nunc, netus aliquet feugiat amet ultrices. Urna sed vel velit aenean enim volutpat risus blandit. Pellentesque semper id feugiat tortor volutpat volutpat...</p>
										</div>
										<div class="pm-grd-btns-cntlr">
											<div class="pm-grd-btn">
												<a class="" href="#">Read Full Profile </a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="team-grd-item-col">
								<div class="pro-mdul-grd">
									<div class="pm-grd-img-cntlr">
										<div class="pm-grd-img inline-bg" style="background-image: url(assets/images/pm-grd-img-07.jpg);"></div>
									</div>
									<div class="pm-grd-desc-cntlr mHc">
										<h5 class="fl-h5 pm-grd-title mHc1"><a href="#">Katy Robinson</a></h5>
										<div class="pm-grd-assist mHc2">
											<span class="pm-grd-assist-name">Practice Principal<span class="pm-grd-assist-no">GDC No: 114378</span></span>
										</div>
										<span class="pm-grd-addr mHc3">BDS (Cardiff Dental School, 2007), MJDF RCS (Eng)</span>
										<div class="pm-grd-desc">
											<p>Id donec nulla nunc, netus aliquet feugiat amet ultrices. Urna sed vel velit aenean enim volutpat risus blandit. Pellentesque semper id feugiat tortor volutpat volutpat...</p>
										</div>
										<div class="pm-grd-btns-cntlr">
											<div class="pm-grd-btn">
												<a class="" href="#">Read Full Profile </a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="team-grd-item-col">
								<div class="pro-mdul-grd">
									<div class="pm-grd-img-cntlr">
										<div class="pm-grd-img inline-bg" style="background-image: url(assets/images/pm-grd-img-01.jpg);"></div>
									</div>
									<div class="pm-grd-desc-cntlr mHc">
										<h5 class="fl-h5 pm-grd-title mHc1"><a href="#">David Cox</a></h5>
										<div class="pm-grd-assist mHc2">
											<span class="pm-grd-assist-name">Dental Implant Specialist<span class="pm-grd-assist-no">GDC No: 65106</span></span>
										</div>
										<span class="pm-grd-addr mHc3">BDS (Wales, 1990), MSc (Dental Implantology, 2014)</span>
										<div class="pm-grd-desc">
											<p>Id donec nulla nunc, netus aliquet feugiat amet ultrices. Urna sed vel velit aenean enim volutpat risus blandit. Pellentesque semper id feugiat tortor volutpat volutpat...</p>
										</div>
										<div class="pm-grd-btns-cntlr">
											<div class="pm-grd-btn">
												<a class="" href="#" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="team-grd-item-col">
								<div class="pro-mdul-grd">
									<div class="pm-grd-img-cntlr">
										<div class="pm-grd-img inline-bg" style="background-image: url(assets/images/pm-grd-img-02.jpg);"></div>
									</div>
									<div class="pm-grd-desc-cntlr mHc">
										<h5 class="fl-h5 pm-grd-title mHc1"><a href="#">Robert Hitchcock</a></h5>
										<div class="pm-grd-assist mHc2">
											<span class="pm-grd-assist-name">Associate Dentist<span class="pm-grd-assist-no">GDC No: 69354</span></span>
										</div>
										<span class="pm-grd-addr mHc3">BDS (Newcastle, 1993)</span>
										<div class="pm-grd-desc">
											<p>Id donec nulla nunc, netus aliquet feugiat amet ultrices. Urna sed vel velit aenean enim volutpat risus blandit. Pellentesque semper id feugiat tortor volutpat volutpat...</p>
										</div>
										<div class="pm-grd-btns-cntlr">
											<div class="pm-grd-btn">
												<a class="" href="#">Read Full Profile </a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="team-grd-item-col">
								<div class="pro-mdul-grd">
									<div class="pm-grd-img-cntlr">
										<div class="pm-grd-img inline-bg" style="background-image: url(assets/images/pm-grd-img-07.jpg);"></div>
									</div>
									<div class="pm-grd-desc-cntlr mHc">
										<h5 class="fl-h5 pm-grd-title mHc1"><a href="#">Katy Robinson</a></h5>
										<div class="pm-grd-assist mHc2">
											<span class="pm-grd-assist-name">Dental Implant Specialist<span class="pm-grd-assist-no">GDC No: 114378</span></span>
										</div>
										<span class="pm-grd-addr mHc3">BDS (Cardiff Dental School, 2007), MJDF RCS (Eng)</span>
										<div class="pm-grd-desc">
											<p>Id donec nulla nunc, netus aliquet feugiat amet ultrices. Urna sed vel velit aenean enim volutpat risus blandit. Pellentesque semper id feugiat tortor volutpat volutpat...</p>
										</div>
										<div class="pm-grd-btns-cntlr">
											<div class="pm-grd-btn">
												<a class="" href="#">Read Full Profile </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="wco-team-btn">
							<a class="cdc-btn" href="#">Meet all the team</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>      

	<section class="faq-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-entry-hdr-cntlr">
						<div class="sec-entry-hdr">
							<h3 class="sec-entry-hdr-title fl-h4">Frequently Asked Questions</h3>
							<div class="diamond-module">
								<ul class="reset-list">
									<li>
										<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
									</li>
									<li>
										<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
									</li>
									<li>
										<i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
									</li>
								</ul>
							</div>                
							<p>Amet a aliquam tellus, ut. Fringilla sagittis ut a pellentesque accumsan.<br> Ipsum malesuada vitae fusce semper nec scelerisque a.</p>
						</div>
					</div>
					<div class="faq-sec-inner">
						<div class="faq-grds">
							<div class="faq-grd">
								<div class="faq-grd-item">
									<div class="faq-accordion-menu active">
										<div class="faq-accordion-hdr">
											<h4 class="faq-accordion-title fl-h6">Where are the Cox & Hitchock is the practices?</h4>
											<div class="faq-accordion-icon-box">
												<i class="faq-icon">
													<svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
														<use xlink:href="#faq-list-icon-svg"></use> 
													</svg>
												</i>
												<i class="faq-active-icon">
													<svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
														<use xlink:href="#faq-list-icon-active-svg"></use> 
													</svg>
												</i>
											</div>
										</div>
										<div class="faq-accordion-des active">
											<p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
											<a href="#" class="cdc-btn">Find Out More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="faq-grd">
								<div class="faq-grd-item">
									<div class="faq-accordion-menu">
										<div class="faq-accordion-hdr">
											<h4 class="faq-accordion-title fl-h6">What is the difference between NHS and Private dentistry? </h4>
											<div class="faq-accordion-icon-box">
												<i class="faq-icon">
													<svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
														<use xlink:href="#faq-list-icon-svg"></use> 
													</svg>
												</i>
												<i class="faq-active-icon">
													<svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
														<use xlink:href="#faq-list-icon-active-svg"></use> 
													</svg>
												</i>
											</div>
										</div>
										<div class="faq-accordion-des">
											<p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
											<a href="#" class="cdc-btn">Find Out More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="faq-grd">
								<div class="faq-grd-item">
									<div class="faq-accordion-menu">
										<div class="faq-accordion-hdr">
											<h4 class="faq-accordion-title fl-h6">How do I make an appointment?</h4>
											<div class="faq-accordion-icon-box">
												<i class="faq-icon">
													<svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
														<use xlink:href="#faq-list-icon-svg"></use> 
													</svg>
												</i>
												<i class="faq-active-icon">
													<svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
														<use xlink:href="#faq-list-icon-active-svg"></use> 
													</svg>
												</i>
											</div>
										</div>
										<div class="faq-accordion-des">
											<p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
											<a href="#" class="cdc-btn">Find Out More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="faq-grd">
								<div class="faq-grd-item">
									<div class="faq-accordion-menu">
										<div class="faq-accordion-hdr">
											<h4 class="faq-accordion-title fl-h6">Do you offer dentistry for children?</h4>
											<div class="faq-accordion-icon-box">
												<i class="faq-icon">
													<svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
														<use xlink:href="#faq-list-icon-svg"></use> 
													</svg>
												</i>
												<i class="faq-active-icon">
													<svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
														<use xlink:href="#faq-list-icon-active-svg"></use> 
													</svg>
												</i>
											</div>
										</div>
										<div class="faq-accordion-des">
											<p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
											<a href="#" class="cdc-btn">Find Out More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="faq-grd">
								<div class="faq-grd-item">
									<div class="faq-accordion-menu">
										<div class="faq-accordion-hdr">
											<h4 class="faq-accordion-title fl-h6">Are you accepting new patients?</h4>
											<div class="faq-accordion-icon-box">
												<i class="faq-icon">
													<svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
														<use xlink:href="#faq-list-icon-svg"></use> 
													</svg>
												</i>
												<i class="faq-active-icon">
													<svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
														<use xlink:href="#faq-list-icon-active-svg"></use> 
													</svg>
												</i>
											</div>
										</div>
										<div class="faq-accordion-des">
											<p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
											<a href="#" class="cdc-btn">Find Out More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="faq-grd">
								<div class="faq-grd-item">
									<div class="faq-accordion-menu">
										<div class="faq-accordion-hdr">
											<h4 class="faq-accordion-title fl-h6">What are the fees for your treatments?</h4>
											<div class="faq-accordion-icon-box">
												<i class="faq-icon">
													<svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
														<use xlink:href="#faq-list-icon-svg"></use> 
													</svg>
												</i>
												<i class="faq-active-icon">
													<svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
														<use xlink:href="#faq-list-icon-active-svg"></use> 
													</svg>
												</i>
											</div>
										</div>
										<div class="faq-accordion-des">
											<p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
											<a href="#" class="cdc-btn">Find Out More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="faq-grd">
								<div class="faq-grd-item">
									<div class="faq-accordion-menu">
										<div class="faq-accordion-hdr">
											<h4 class="faq-accordion-title fl-h6">What are the locations of your dentist practices?</h4>
											<div class="faq-accordion-icon-box">
												<i class="faq-icon">
													<svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
														<use xlink:href="#faq-list-icon-svg"></use> 
													</svg>
												</i>
												<i class="faq-active-icon">
													<svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
														<use xlink:href="#faq-list-icon-active-svg"></use> 
													</svg>
												</i>
											</div>
										</div>
										<div class="faq-accordion-des">
											<p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
											<a href="#" class="cdc-btn">Find Out More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> 

</div>





<?php get_footer(); ?>