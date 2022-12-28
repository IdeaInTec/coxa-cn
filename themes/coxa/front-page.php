<?php 
get_header(); 
$thisID = get_the_ID();
$banner = get_field('banner', HOMEID);
$banner_bg = $banner['gallery'];
$custom_titel = $banner['title'];
$page_titel = !empty($custom_titel)?$custom_titel:get_the_title($thisID);
$link_1 = $banner['link_1'];
$link_2 = $banner['link_2'];

?>
<?php if(is_array($banner_bg) && !empty($banner_bg) ): ?>
<section class="banner <?php echo (!empty($banner['description'])? '': 'diamond-module-none'); ?>">
  <div class="banner-black-bg"></div>
  	
	  <div class="banner-bg-cntlr bannerBgSlider">
	  	<?php foreach ($banner_bg as $banner_item_bg): ?>
	    <div class="bannerBgSlider-item">
	      <div class="banner-bg bnrparallaxie parallaxie-bg-Size_auto" style="background-image: url(<?php echo cbv_get_image_src($banner_item_bg); ?>);"></div>
	    </div>
	  	<?php endforeach; ?>
	  </div>
	  
  <div class="bnr-prev-next-cntlr">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="bnr-prev-next">
            <div class="bnr-prev">
              <span class="bnr-left">
                <svg class="bnr-left-arrow" width="16" height="50" viewBox="0 0 16 50" fill="#fff">
                  <use xlink:href="#bnr-left-arrow"></use> 
                </svg>
              </span>
            </div>
            <div class="bnr-next">
              <span class="bnr-right">
                <svg class="bnr-right-arrow" width="16" height="50" viewBox="0 0 16 50" fill="#fff">
                  <use xlink:href="#bnr-right-arrow"></use> 
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="banner-desc-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="banner-cntlr">
            <div class="banner-desc-cntlr">
              <h2 class="banner-title fl-h1"><?php echo($page_titel); ?></h2>
              <div class="diamond-module">
                <ul class="reset-list">
                  <li>
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
                  </li>
                  <li>
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
                  </li>
                  <li>
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
                  </li>
                </ul>
              </div> 
              <?php if(!empty($banner['description'])) echo ('<div class="banner-desc">'.wpautop($banner['description']).'</div>'); ?>
              <div class="banner-btns">
              	<?php if(is_array($link_1) && !empty($link_1['url'])): ?>
                <div class="banner-btn banner-btn-01">
                  <?php printf('<a class="cdc-btn" href="%s">%s</a>',$link_1['url'],$link_1['title'] ); ?>
                </div>
                <?php endif; if(is_array($link_2) && !empty($link_2['url'])):?>
                <div class="banner-btn banner-btn-02 hide-sm">
                  <?php printf('<a class="cdc-trnsprnt-btn" href="%s">%s</a>',$link_2['url'],$link_2['title'] ); ?>
                </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="bnr-recommended">
              <div class="start-module">
                <ul class="reset-list">
                  <li>
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                  </li>
                  <li>
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                  </li>
                  <li>
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                  </li>
                  <li>
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                  </li>
                  <li>
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                  </li>
                </ul>
              </div>
              <span>Recommended by our <a target="_blank" href="#">patients</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif;?>
<?php 
$showhidetreatment = get_field('showhidetreatment', HOMEID);
if($showhidetreatment):
$chtreatment = get_field('chtreatment', HOMEID);
$link = $chtreatment['link'];
?>
<section class="treatment-sec">
	<div class="treatment-cntlr">
		<div class="treatment-lft">
			<div class="hide-md">
				<div class="diamond-module">
					<ul class="reset-list">
						<li>
							<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
						</li>
						<li>
							<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
						</li>
						<li>
							<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
						</li>
					</ul>
				</div> 
			</div>
			<?php if(!empty($chtreatment['title'])) echo('<h2 class="fl-h4 treatment-title">'. $chtreatment['title'] .'</h2>'); ?>
			<?php if(!empty($chtreatment['description'])) echo('<div class="treatment-desc hide-md">'. wpautop($chtreatment['description']) .'</div>'); ?>
			<?php if(is_array($link) && !empty($link['url'])): ?>
			<div class="treatment-btn hide-md">
				<?php printf('<a class="cdc-btn" href="%s">%s</a>',$link['url'],$link['title'] ); ?>
			</div>
			<?php endif; ?>
		</div>
		<div class="treatment-rgt">
			<div class="custom-prev-next-cntlr">
				<div class="custom-prev">
					<span class="arrow-left prv-nxt-btn">
						<svg class="prev-line" width="66" height="20" viewBox="0 0 66 20" fill="#29467D">
							<use xlink:href="#prev-line"></use> 
						</svg>
					</span>
				</div>
				<div class="custom-next">
					<span class="arrow-right prv-nxt-btn">
						<svg class="next-line" width="66" height="20" viewBox="0 0 66 20" fill="#29467D">
							<use xlink:href="#next-line"></use> 
						</svg>
					</span>
				</div>
			</div>
			<div class="treatment-grids treatmentSlider">
				<div class="trtmnt-grd-cntlr">
					<div class="trtmnt-grd">
						<div class="trtmnt-grd-img-cntlr">
							<div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-01.jpg);"></div>
							<a href="#" class="overlay-link"></a>
						</div>
						<h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Dental Implants</a></h3>
						<div class="trtmnt-grd-desc">
							<p>Viverra morbi massa eu, dolor. Praesent sit elit porttitor morbi fringilla in eget sed elementum. Blandit lacus eu sit integer vel. Quis tincidunt sapien consequat malesuada egestas tempor nunc, et. Ut imperdiet ullamcorper arcu enim, porttitor donec. </p>
						</div>
					</div>
				</div>
				<div class="trtmnt-grd-cntlr">
					<div class="trtmnt-grd">
						<div class="trtmnt-grd-img-cntlr">
							<div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-02.jpg);"></div>
							<a href="#" class="overlay-link"></a>
						</div>
						<h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Cosnetic Dentistry</a></h3>
						<div class="trtmnt-grd-desc">
							<p>Et pellentesque netus tempus in pharetra rhoncus, sit. Gravida ornare viverra ac at egestas. Viverra lectus in praesent vitae.</p>
						</div>
					</div>
				</div>
				<div class="trtmnt-grd-cntlr">
					<div class="trtmnt-grd">
						<div class="trtmnt-grd-img-cntlr">
							<div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-03.jpg);"></div>
							<a href="#" class="overlay-link"></a>
						</div>
						<h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Private Dentistry</a></h3>
						<div class="trtmnt-grd-desc">
							<p>Et gravida tempus, diam non. Cras pulvinar pulvinar amet, at feugiat lorem quis magna. Mi cras praesent in tellus consectetur varius id tristique. Malesuada id enim gravida cras duis.</p>
						</div>
					</div>
				</div>
				<div class="trtmnt-grd-cntlr">
					<div class="trtmnt-grd">
						<div class="trtmnt-grd-img-cntlr">
							<div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-01.jpg);"></div>
							<a href="#" class="overlay-link"></a>
						</div>
						<h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Teeth Whitening</a></h3>
						<div class="trtmnt-grd-desc">
							<p>Enim maecenas ipsum malesuada ultrices arcu risus lacus tempus pretium. Urna, cursus sapien, tristique sed sed condimentum fusce nisi. Id sit duis viverra orci nisi molestie viverra nisl, neque. Suspendisse sed vehicula arcu cras et. Dignissim sed semper leo sollicitudin malesuada adipiscing faucibus euismod.</p>
						</div>
					</div>
				</div>
				<div class="trtmnt-grd-cntlr">
					<div class="trtmnt-grd">
						<div class="trtmnt-grd-img-cntlr">
							<div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-01.jpg);"></div>
							<a href="#" class="overlay-link"></a>
						</div>
						<h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Dental Implants</a></h3>
						<div class="trtmnt-grd-desc">
							<p>Viverra morbi massa eu, dolor. Praesent sit elit porttitor morbi fringilla in eget sed elementum. Blandit lacus eu sit integer vel. Quis tincidunt sapien consequat malesuada egestas tempor nunc, et. Ut imperdiet ullamcorper arcu enim, porttitor donec. </p>
						</div>
					</div>
				</div>
				<div class="trtmnt-grd-cntlr">
					<div class="trtmnt-grd">
						<div class="trtmnt-grd-img-cntlr">
							<div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-02.jpg);"></div>
							<a href="#" class="overlay-link"></a>
						</div>
						<h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Cosnetic Dentistry</a></h3>
						<div class="trtmnt-grd-desc">
							<p>Et pellentesque netus tempus in pharetra rhoncus, sit. Gravida ornare viverra ac at egestas. Viverra lectus in praesent vitae.</p>
						</div>
					</div>
				</div>
				<div class="trtmnt-grd-cntlr">
					<div class="trtmnt-grd">
						<div class="trtmnt-grd-img-cntlr">
							<div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-03.jpg);"></div>
							<a href="#" class="overlay-link"></a>
						</div>
						<h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Private Dentistry</a></h3>
						<div class="trtmnt-grd-desc">
							<p>Et gravida tempus, diam non. Cras pulvinar pulvinar amet, at feugiat lorem quis magna. Mi cras praesent in tellus consectetur varius id tristique. Malesuada id enim gravida cras duis.</p>
						</div>
					</div>
				</div>
				<div class="trtmnt-grd-cntlr">
					<div class="trtmnt-grd">
						<div class="trtmnt-grd-img-cntlr">
							<div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-01.jpg);"></div>
							<a href="#" class="overlay-link"></a>
						</div>
						<h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Teeth Whitening</a></h3>
						<div class="trtmnt-grd-desc">
							<p>Enim maecenas ipsum malesuada ultrices arcu risus lacus tempus pretium. Urna, cursus sapien, tristique sed sed condimentum fusce nisi. Id sit duis viverra orci nisi molestie viverra nisl, neque. Suspendisse sed vehicula arcu cras et. Dignissim sed semper leo sollicitudin malesuada adipiscing faucibus euismod.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
endif; 
$intro = get_field('intro', HOMEID);
$intro_link_1 = $intro['link_1'];
$intro_link_2 = $intro['link_2'];
if(!empty($intro['title']) && !empty($intro['description'])):
?>
<section class="intro-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="intro-cntlr">
					<div class="sec-entry-hdr-cntlr">
						<div class="sec-entry-hdr">
							<?php if(!empty($intro['title'])) echo('<h2 class="sec-entry-hdr-title fl-h3">'. $intro['title'] .'</h2>'); ?>
							<div class="diamond-module">
								<ul class="reset-list">
									<li>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
									</li>
									<li>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
									</li>
									<li>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
									</li>
								</ul>
							</div>                
							<?php echo wpautop($intro['description']); ?>
						</div>
					</div>
					<div class="intro-btns">
						<?php if(is_array($intro_link_1) && !empty($intro_link_1['url'])): ?>
						<div class="intro-btn intro-btn-01">
							<?php printf('<a class="cdc-btn" href="%s">%s</a>',$intro_link_1['url'],$intro_link_1['title'] ); ?>
						</div>
						<?php endif; if(is_array($intro_link_2) && !empty($intro_link_2['url'])): ?>
						<div class="intro-btn intro-btn-02">
							<?php printf('<a class="cdc-trnsprnt-btn" href="%s">%s</a>',$intro_link_2['url'],$intro_link_2['title'] ); ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
endif;
$showhidewch = get_field('showhidewch', HOMEID);
if($showhidewch):
$why_choose = get_field('why_choose', HOMEID);
$wch_link = $why_choose['link'];
?>

<section class="why-choose-sec parallaxie" style="background-image: url(<?php echo cbv_get_image_src($why_choose['background_image']); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="sec-entry-hdr-cntlr">
					<div class="sec-entry-hdr">
						<?php if(!empty($why_choose['title'])) echo('<h2 class="sec-entry-hdr-title fl-h4">'. $why_choose['title'] .'</h2>'); ?>
						<div class="diamond-module">
							<ul class="reset-list">
								<li>
									<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
								</li>
								<li>
									<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
								</li>
								<li>
									<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
								</li>
							</ul>
						</div>                
						<?php echo wpautop($why_choose['description']); ?>
					</div>
				</div>
				<div class="why-choose-grids-cntlr">
					<div class="why-choose-grids">
						<?php 
						$features = $why_choose['features'];
						if(!empty($features)):
						foreach ($features as $feature):
						?>
						<div class="why-choose-grid-col">
							<div class="why-choose-grid-item">
								<?php if(!empty($feature['icon'])): ?>
								<div class="why-choose-grid-img">
									<i>
										<?php echo cbv_get_image_tag($feature['icon']); ?>
									</i>
								</div>
								<?php endif; ?>
								<div class="why-choose-grid-des mHc">
									<?php if(!empty($feature['title'])) echo('<h4 class="why-choose-grid-title fl-h5 mHc1">'. $feature['title'] .'</h4>'); ?>
									<?php echo wpautop($feature['description']); ?>
								</div>
							</div>
						</div>
						<?php  endforeach; endif; ?>
					</div>
						<?php if(is_array($wch_link) && !empty($wch_link['url'])): ?>
						<div class="why-choose-grid-btn hide-sm">
							<?php printf('<a class="cdc-btn" href="%s">%s</a>',$wch_link['url'],$wch_link['title'] ); ?>
						</div>
						<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
endif; 
$showhidepr = get_field('showhidepr', HOMEID);
if($showhidepr):
$previews = get_field('previews', HOMEID);
?>
<section class="review-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="sec-entry-hdr-cntlr">
					<div class="sec-entry-hdr">
						<?php if(!empty($previews['title'])) echo('<h2 class="sec-entry-hdr-title fl-h4">'. $previews['title'] .'</h2>'); ?>
						<div class="diamond-module">
							<ul class="reset-list">
								<li>
									<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
								</li>
								<li>
									<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
								</li>
								<li>
									<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
								</li>
							</ul>
						</div>                
						<?php echo wpautop($previews['description']); ?>
					</div>
				</div>
				<div class="review-grids-cntlr">
					<div class="review-grids reviewSlider">

						<div class="review-grid-col">
							<div class="review-grid-item">
								<div class="review-pro-img">
									<i>
										<img src="<?php echo THEME_URI; ?>/assets/images/review-pro-img-1.jpg" alt="">
									</i>
								</div>
								<div class="review-pro-rating">
									<span>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
									</span>
								</div>
								<h4 class="review-tstmnl-mgs fl-h5 mHc">“Very kind and friendly staff as well a <br> highly qualified skilled dentists!”</h4>
								<div class="review-pro-des testimonial-text mHc1"data-status="closed">
									<p>Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis. Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis</p>
								</div>
								<div class="review-pro-des-btn review-pro-des-btn-col">
									<button id="rdmore_bnt" data-text-closed="read more" data-text-open="read less">Read more</button>
								</div>
								<div class="review-pro-name">
									<strong class="review-pro-title">Chloe Jones</strong>
									<span>Cardiff</span>
								</div>
							</div>
						</div> 
						<div class="review-grid-col">
							<div class="review-grid-item">
								<div class="review-pro-img">
									<i>
										<img src="<?php echo THEME_URI; ?>/assets/images/review-pro-img-2.jpg" alt="">
									</i>
								</div>
								<div class="review-pro-rating">
									<span>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
									</span>
								</div>
								<h4 class="review-tstmnl-mgs fl-h5 mHc">“Best experience I have ever had with <br> a dentist in Newport”</h4>
								<div class="review-pro-des testimonial-text mHc1"data-status="closed">
									<p>Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis. Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis</p>
								</div>
								<div class="review-pro-des-btn review-pro-des-btn-col">
									<button id="rdmore_bnt" data-text-closed="read more" data-text-open="read less">Read more</button>
								</div>
								<div class="review-pro-name">
									<strong class="review-pro-title">Bob Ross</strong>
									<span>Newport</span>
								</div>
							</div>
						</div> 
						<div class="review-grid-col">
							<div class="review-grid-item">
								<div class="review-pro-img">
									<i>
										<img src="<?php echo THEME_URI; ?>/assets/images/review-pro-img-2.jpg" alt="">
									</i>
								</div>
								<div class="review-pro-rating">
									<span>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
									</span>
								</div>
								<h4 class="review-tstmnl-mgs fl-h5 mHc">“Very kind and friendly staff as well a <br> highly qualified skilled dentists!”</h4>
								<div class="review-pro-des testimonial-text mHc1"data-status="closed">
									<p>Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis. Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis</p>
								</div>
								<div class="review-pro-des-btn review-pro-des-btn-col">
									<button id="rdmore_bnt" data-text-closed="read more" data-text-open="read less">Read more</button>
								</div>
								<div class="review-pro-name">
									<strong class="review-pro-title">Chloe Jones</strong>
									<span>Cardiff</span>
								</div>
							</div>
						</div>   

					</div>
					<div class="review-prev-next">
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
				<div class="review-grid-btns hide-sm">
					<ul class="reset-list">
						<li>
							<a href="#" class="cdc-btn">See Patient Reviews</a>
						</li>
						<li>
							<a href="#" class="cdc-trnsprnt-btn">See Dentist Reviews</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
endif; 
$showhidepromo = get_field('showhidepromo', HOMEID);
if($showhidepromo):
$hpromo = get_field('hpromo', HOMEID);
$hpromo_link = $hpromo['link'];
?>
<section class="cta-section">
	<div class="container-lg">
		<div class="row">
			<div class="col-md-12">
				<div class="cta-module-cntlr">
					<div class="cta-module-wrp parallaxie" style="background-image: url(<?php echo cbv_get_image_src($hpromo['bg_image']); ?>);">
						<div class="cta-module">
							<div class="cta-module-des-ctlr">
								<div class="diamond-module">
									<ul class="reset-list">
										<li>
											<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
										</li>
										<li>
											<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
										</li>
										<li>
											<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
										</li>
									</ul>
								</div>
								<div class="cta-module-des">
									<?php if(!empty($hpromo['title'])) echo('<h2 class="cta-module-des-title fl-h2">'. $hpromo['title'] .'</h2>'); ?>
									<?php echo wpautop($hpromo['description']); ?>
								</div>
							</div>
							<div class="cta-btn-ctlr">
								<?php if(is_array($hpromo_link) && !empty($hpromo_link['url'])): ?>
								<div class="cta-btn">
									<?php printf('<a class="cdc-btn" href="%s">%s</a>',$hpromo_link['url'],$hpromo_link['title'] ); ?>
								</div>
								<?php endif; ?>
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
$showhidefaq = get_field('showhidefaq', HOMEID);
if($showhidefaq):
$faqs = get_field('faqs', HOMEID);
?>
<section class="faq-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="sec-entry-hdr-cntlr">
					<div class="sec-entry-hdr">
						<?php if(!empty($faqs['title'])) echo('<h2 class="sec-entry-hdr-title fl-h4">'. $faqs['title'] .'</h2>'); ?>
						<div class="diamond-module">
							<ul class="reset-list">
								<li>
									<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
								</li>
								<li>
									<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
								</li>
								<li>
									<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
								</li>
							</ul>
						</div>                
						<?php echo wpautop($faqs['description']); ?>
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
<?php 
endif; 
$showhideloc = get_field('showhideloc', HOMEID);
if($showhideloc):
$ourloc = get_field('ourloc', HOMEID);
?>
<section class="locations-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="sec-entry-hdr-cntlr">
					<div class="sec-entry-hdr">
						<?php if(!empty($ourloc['title'])) echo('<h2 class="sec-entry-hdr-title fl-h4">'. $ourloc['title'] .'</h2>'); ?>
						<div class="diamond-module">
							<ul class="reset-list">
								<li>
									<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
								</li>
								<li>
									<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
								</li>
								<li>
									<i><img src="<?php echo THEME_URI; ?>/assets/images/sec-title-diamond.svg" alt=""></i>
								</li>
							</ul>
						</div>                
						<?php echo wpautop($ourloc['title']); ?>
					</div>
				</div>
				<div class="locations-sec-inner">
					<div class="locations-sec-grids locationSlider">
						<div class="locations-sec-grid-item mHc">
							<div class="locations-sec-grid-item-inner">
								<div class="locations-area">
									<img src="<?php echo THEME_URI; ?>/assets/images/locations-image.jpg" alt="">
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
									<img src="<?php echo THEME_URI; ?>/assets/images/locations-image.jpg" alt="">
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
									<img src="<?php echo THEME_URI; ?>/assets/images/locations-image.jpg" alt="">
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
									<img src="<?php echo THEME_URI; ?>/assets/images/locations-image.jpg" alt="">
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
<?php endif; ?>

<?php get_footer(); ?>