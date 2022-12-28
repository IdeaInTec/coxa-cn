<?php 
/*Template Name: Why Choose Us*/
get_header(); 
$thisID = get_the_ID();
get_template_part('templates/page', 'banner');
?>

<div class="why-choose-us-page-cntlr">
	<?php 
	$intro = get_field('intro', $thisID);
	?>
    <section class="counter-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="sec-entry-hdr-cntlr wd-890">
              <div class="sec-entry-hdr">
                <?php if(!empty($intro['title'])) echo('<h2 class="sec-entry-hdr-title fl-h4">'.$intro['title'].'</h2>'); ?>
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
            <div class="counter-cntlr">
            	<?php 
            	$key_points = $intro['key_points']; 
            	foreach ($key_points as $key_point):
            		?>
            		<div class="counter-col-01 counter-col" >
            			<?php if(!empty($key_point['value'])) echo('<h2 class="fl-h1 counter-number-title"><span class="counter-number">'.$key_point['value'].'</span>'.$key_point['suffix'].'</h2>'); ?>

            			<?php echo wpautop($key_point['title']); ?>
            		</div> 
            	<?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>

      <?php 
      $showhidewch = get_field('showhidewch', $thisID); 
      if ($showhidewch):
      	$why_choose = get_field('why_choose', HOMEID);
      	$wch_link = $why_choose['link'];
      	?>

      	<section class="why-choose-sec parallaxie" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/why-choose-bg-img.png);">
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
      							<?php endforeach; ?>
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
		$showhideteam = get_field('showhideteam', $thisID); 
    if ($showhideteam):
    $ourteam = get_field('ourteam', $thisID); 
    $ourteam_link = $ourteam['link']
		?>
      <section class="wco-team-sec">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="sec-entry-hdr-cntlr">
                <div class="sec-entry-hdr">
                  <?php if(!empty($ourteam['title'])) echo('<h2 class="sec-entry-hdr-title fl-h4">'.$ourteam['title'].'</h2>'); ?>
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
                  <?php echo wpautop($ourteam['description']); ?>
                </div>
              </div>
              <div class="profile-module">
                <div class="team-grds teamGrdSlider">
                  <div class="team-grd-item-col">
                    <div class="pro-mdul-grd">
                      <div class="pm-grd-img-cntlr">
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-01.jpg);"></div>
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
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-02.jpg);"></div>
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
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-07.jpg);"></div>
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
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-01.jpg);"></div>
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
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-02.jpg);"></div>
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
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-07.jpg);"></div>
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
                <?php if(is_array($ourteam_link) && !empty($ourteam_link['url'])): ?>
                <div class="wco-team-btn">
                  <?php printf('<a class="cdc-btn" href="%s">%s</a>',$ourteam_link['url'],$ourteam_link['title'] ); ?>
                </div>
              	<?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php 
    endif; 
    $showhidepromo = get_field('showhidepromo', $thisID); 
    if($showhidepromo):
    	$promo = get_field('promo', $thisID); 
    	$promo_link = $promo['link'];
    	?>
    	<section class="cta-section">
    		<div class="container-lg">
    			<div class="row">
    				<div class="col-md-12">
    					<div class="cta-module-cntlr">
    						<div class="cta-module-wrp parallaxie" style="background-image: url(<?php echo cbv_get_image_src($promo['bg_image']); ?>);">
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
    										<?php if(!empty($promo['title'])) echo('<h2 class="cta-module-des-title fl-h2">'. $promo['title'] .'</h2>'); ?>
    										<?php echo wpautop($promo['description']); ?>
    									</div>
    								</div>
    								<div class="cta-btn-ctlr">
    									<?php if(is_array($promo_link) && !empty($promo_link['url'])): ?>
    									<div class="cta-btn">
    										<?php printf('<a class="cdc-btn" href="%s">%s</a>',$promo_link['url'],$promo_link['title'] ); ?>
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
  $showhidepr = get_field('showhidepr', $thisID); 
  if($showhidepr):
  $previews = get_field('previews', $thisID);
  $link_1 = $previews['link_1'];
  $link_2 = $previews['link_2'];
  	?>
      <section class="review-sec">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="sec-entry-hdr-cntlr">
                <div class="sec-entry-hdr">
                  <?php if(!empty($previews['title'])) echo('<h2 class="sec-entry-hdr-title fl-h4">'.$previews['title'].'</h2>'); ?>
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
              <div class="review-grids-cntlr full-width-review">
                <div class="review-grids tlPatientReviewSlider2 review-pro-des-btn-fullwidth-cntlr"> 
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
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                        </span>
                      </div>
                      <h3 class="review-tstmnl-mgs fl-h5 mHc">“Very kind and friendly staff as well a <br> highly qualified skilled dentists!”</h3>
                      <div class="review-pro-des mHc1"data-status="closed">
                        <p>Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis...<br>
                        Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis</p>
                      </div>
                      <div class="review-pro-des-btn review-pro-des-btn-fullwidth">
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
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                        </span>
                      </div>
                      <h3 class="review-tstmnl-mgs fl-h5 mHc">“Best experience I have ever had with a <br> dentist in Newport”</h3>
                      <div class="review-pro-des mHc1"data-status="closed">
                        <p>Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis....<br> Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis....</p>
                      </div>
                      <div class="review-pro-des-btn review-pro-des-btn-fullwidth">
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
                          <img src="<?php echo THEME_URI; ?>/assets/images/review-pro-img-1.jpg" alt="">
                        </i>
                      </div>
                      <div class="review-pro-rating">
                        <span>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                        </span>
                      </div>
                      <h3 class="review-tstmnl-mgs fl-h5 mHc">“Very kind and friendly staff as well a <br> highly qualified skilled dentists!”</h3>
                      <div class="review-pro-des mHc1"data-status="closed">
                        <p>Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis....<br> Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis....</p>
                      </div>
                      <div class="review-pro-des-btn review-pro-des-btn-fullwidth">
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
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                        </span>
                      </div>
                      <h3 class="review-tstmnl-mgs fl-h5 mHc">“Best experience I have ever had with a <br> dentist in Newport”</h3>
                      <div class="review-pro-des mHc1"data-status="closed">
                        <p>Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis....<br> Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis....</p>
                      </div>
                      <div class="review-pro-des-btn review-pro-des-btn-fullwidth">
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
                          <img src="<?php echo THEME_URI; ?>/assets/images/review-pro-img-1.jpg" alt="">
                        </i>
                      </div>
                      <div class="review-pro-rating">
                        <span>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                        </span>
                      </div>
                      <h3 class="review-tstmnl-mgs fl-h5 mHc">“Very kind and friendly staff as well a <br> highly qualified skilled dentists!”</h3>
                      <div class="review-pro-des mHc1"data-status="closed">
                        <p>Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis....<br> Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis....</p>
                      </div>
                      <div class="review-pro-des-btn review-pro-des-btn-fullwidth">
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
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                          <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                        </span>
                      </div>
                      <h3 class="review-tstmnl-mgs fl-h5 mHc">“Best experience I have ever had with a <br> dentist in Newport”</h3>
                      <div class="review-pro-des mHc1"data-status="closed">
                        <p>Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis....<br> Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis....</p>
                      </div>
                      <div class="review-pro-des-btn review-pro-des-btn-fullwidth">
                        <button id="rdmore_bnt" data-text-closed="read more" data-text-open="read less">Read more</button>
                      </div>
                      <div class="review-pro-name">
                        <strong class="review-pro-title">Bob Ross</strong>
                        <span>Newport</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="review-prev-next">
                  <div class="revw-prev">
                    <span class="revw-left">
                      <svg class="revw-left-arrow" width="11" height="34" viewBox="0 0 11 34" fill="#EACC95">
                        <use xlink:href="#revw-left-arrow"></use> 
                      </svg>
                    </span>
                  </div>
                  <div class="revw-next">
                    <span class="revw-right">
                      <svg class="revw-right-arrow" width="11" height="34" viewBox="0 0 11 34" fill="#EACC95">
                        <use xlink:href="#revw-right-arrow"></use> 
                      </svg>
                    </span>
                  </div>
                </div>              
              </div>
              <div class="review-grid-btns hide-sm">
                <ul class="reset-list">
                	<?php if(is_array($link_1) && !empty($link_1['url'])) printf('<li><a class="cdc-btn" href="%s">%s</a></li>',$link_1['url'],$link_1['title'] ); ?>
                  <?php if(is_array($link_2) && !empty($link_2['url'])) printf('<li><a class="cdc-trnsprnt-btn" href="%s">%s</a></li>',$link_2['url'],$link_2['title'] ); ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    	<?php endif; ?>

    	<?php 
    	$showhidetreatment = get_field('showhidetreatment', $thisID);
    	if($showhidetreatment):
    		$chtreatment = get_field('chtreatment', $thisID);
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
      <?php if(!empty($chtreatment['title'])) echo('<h2 class="fl-h4 treatment-title">'.$chtreatment['title'].'</h2>'); ?>
      <?php if(!empty($chtreatment['description'])) echo('<div class="treatment-desc hide-md">'.wpautop($chtreatment['description']).'</div>'); ?>
      <?php if(is_array($link) && !empty($link['url'])): ?>
      <div class="treatment-btn hide-md">
        <?php printf('<a class="cdc-btn" href="%s">%s</a>',$link['url'],$link['title']); ?>
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
<?php endif; ?>
  </div>






<?php get_footer(); ?>