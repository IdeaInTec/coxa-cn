<?php 
/*Template Name: Referral*/
get_header();
$thisID = get_the_ID(); 
?>
<?php get_template_part('templates/page', 'banner'); ?>
<div class="referral-page-con-cntlr">
	<?php 
		$showhiderefer = get_field('showhiderefer', $thisID);
		if($showhiderefer):
			$refimage = get_field('image', $thisID);
			$referrals = get_field('referrals', $thisID);
	?>
	<section class="about-intro-sec has-inline-bg referral-about-intro">
	<div class="container">
	  <div class="row">
	    <div class="col-md-12">
	      <div class="abtis-img-text-row">
	        <div class="abtis-img-text-row-inr">
	          <div class="abtis-img-txt-col abtis-row-img">
	            <div class="abtis-row-img-inner">
	              <div class="abtis-row-main-img-cntrl">
	                <div class="abtis-row-main-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/treatment-main-img-022.jpg);">
	                </div>
	              </div>
	            </div>
	          </div>
	          <?php if( !empty($referrals) ): ?>
	          <div class="abtis-img-txt-col abtis-row-text">
	            <div class="faq-cntlr">
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
	              <div class="faq-sec-inner">
	                <div class="faq-grds">
	                  <?php 
	                  	$i = 1; foreach( $referrals as $referral ): 
	                  	$active = $i == 1? ' active':'';
	                  ?>
	                  <div class="faq-grd">
	                    <div class="faq-grd-item">
	                      <div class="faq-accordion-menu<?php echo $active; ?>">
	                        <div class="faq-accordion-hdr">
	                        <?php if(!empty($referral['title'])) printf('<h3 class="faq-accordion-title fl-h5">%s</h3>', $referral['title']); ?>
	                          <div class="faq-accordion-icon-box">
	                            <i class="faq-icon">
	                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
	                                <use xlink:href="#faq-list-icon-svg"></use> 
	                              </svg>
	                            </i>
	                            <i class="faq-active-icon">
	                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
	                                <use xlink:href="#faq-list-icon-svg"></use> 
	                              </svg>
	                            </i>
	                          </div>
	                        </div>
	                        <div class="faq-accordion-des<?php echo $active; ?>">
	                         <?php if(!empty($referral['description'])) echo wpautop($referral['description']); ?>
	                          <a href="#" class="cdc-btn">Referral Form</a>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	              	  <?php $i++; endforeach; ?>
	                </div>
	              </div>
	            </div>                        
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
	?>
	<section class="referral-sec">
	<div class="container">
	  <div class="row">
	    <div class="col-md-12">
	      <div class="sec-entry-hdr-cntlr">
	        <div class="sec-entry-hdr">
	          <h2 class="sec-entry-hdr-title fl-h4">Referral Form</h2>
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
	      </div>
	      <div class="refferal-sec-contlr">
	        <div class="contact-form-wrp clearfix">
	          <div class="wpforms-container">
	            <form class="wpforms-form needs-validation" novalidate>

	              <div class="wpforms-field-container">

	                <div class="wpforms-field FullWidthField wpforms-field-select">

	                  <label class="wpforms-field-label">Referral For Which Treatment? <span class="wpforms-required-label">*</span></label>
	                  <div class="select2-wrapper" id="referral-select2-wrap">
	                    <select name="" id="referral-select2">
	                      <option value="">Please choose a treatment</option>
	                      <option value="">treatment 1</option>
	                      <option value="">treatment 2</option>
	                    </select>
	                  </div>                          
	                </div>
	                <div class="wpforms-field FullWidthField">
	                  <h2 class="fl-h5 referrign-form-title">Referring Dentist Details</h2>
	                </div>
	                <div class="wpforms-field">
	                  <label class="wpforms-field-label">Referring Dentist <span class="wpforms-required-label">*</span></label>
	                  <input type="text" name="Voornaam" placeholder="Thomas Fide">
	                </div>
	                <div class="wpforms-field">
	                  <label class="wpforms-field-label">Practice Name <span class="wpforms-required-label">*</span></label>
	                  <input type="text" name="Familienaam" placeholder="Please enter the practice name">              
	                </div>

	                <div class="wpforms-field">
	                  <label class="wpforms-field-label">Practice Telephone<span class="wpforms-required-label">*</span></label>
	                  <input type="text" name="Voornaam" placeholder="Please enter practice telephone number">
	                </div>
	                <div class="wpforms-field">
	                  <label class="wpforms-field-label">Practice Email Address <span class="wpforms-required-label">*</span></label>
	                  <input type="text" name="Familienaam" placeholder="Please enter the practice email address">              
	                </div>
	                <div class="wpforms-field FullWidthField">
	                  <label class="wpforms-field-label">Practice Address <span class="wpforms-required-label">*</span></label>
	                  <input type="text" name="Familienaam" placeholder="Please enter your practice address">              
	                </div>
	                <div class="wpforms-field FullWidthField">
	                  <h2 class="fl-h5 referrign-form-title">Patient Contact Details</h2>
	                </div>
	                <div class="wpforms-field">
	                  <label class="wpforms-field-label">Patient Name <span class="wpforms-required-label">*</span></label>
	                  <input type="text" name="Voornaam" placeholder="Please enter their name">
	                </div>
	                <div class="wpforms-field">
	                  <label class="wpforms-field-label">Patient Date Of Birth <span class="wpforms-required-label">*</span></label>
	                  <input type="text" name="Familienaam" placeholder="Please enter the patients date of birth">              
	                </div>

	                <div class="wpforms-field">
	                  <label class="wpforms-field-label">Patient Telephone <span class="wpforms-required-label">*</span></label>
	                  <input type="text" name="Voornaam" placeholder="Please enter the practice telephone number">
	                </div>
	                <div class="wpforms-field">
	                  <label class="wpforms-field-label">Patient Email Address <span class="wpforms-required-label">*</span></label>
	                  <input type="text" name="Familienaam" placeholder="Please enter the practice email address">              
	                </div>
	                <div class="wpforms-field FullWidthField">
	                  <label class="wpforms-field-label">Patient Address <span class="wpforms-required-label">*</span></label>
	                  <input type="text" name="telefoon" placeholder="Please enter the patients address">                      
	                </div>

	                <div class="wpforms-field FullWidthField">
	                  <h2 class="fl-h5 referrign-form-title">Patient Referral Details</h2>
	                </div>

	                <div class="wpforms-field wpforms-field-textarea">
	                  <label class="wpforms-field-label">Present Dental Condition <span class="wpforms-required-label">*</span></label>
	                  <textarea name="message" placeholder="Please enter the patients dental condition"></textarea>

	                </div>
	                <div class="wpforms-field wpforms-field-textarea">
	                  <label class="wpforms-field-label">Reason For Referral <span class="wpforms-required-label">*</span></label>
	                  <textarea name="message" placeholder="Please enter the reasons for referring the patient"></textarea>

	                </div>
	                <div class="wpforms-field wpforms-field-textarea">
	                  <label class="wpforms-field-label">Reason For Referral <span class="wpforms-required-label">*</span></label>
	                  <textarea name="message" placeholder="Please enter the reasons for referring the patient"></textarea>

	                </div>
	                <div class="wpforms-field FullWidthField">
	                  <h2 class="fl-h5 referrign-form-title">Optional Uploads</h2>
	                </div>

	                <div class="wpforms-field wpforms-field-file-upload widthField3d">
	                  <input type="file">
	                </div>
	                <div class="wpforms-field wpforms-field-file-upload widthField3d">
	                  <input type="file">
	                </div>
	                <div class="wpforms-field wpforms-field-file-upload widthField3d">
	                  <input type="file">
	                </div>

	                <div class="wpforms-field FullWidthField wpforms-field-checkbox wpforms-field-description">
	                  <label class="wpforms-field-label">Additional Practice Information <span class="wpforms-required-label">*</span></label>
	                  <ul>
	                    <li class="wpforms-selected">
	                      <input type="checkbox" value="" id="checkbox">
	                      <label for="checkbox">Yes I’d like to be informed of other practice information</label>
	                    </li>
	                  </ul>
	                </div>

	                <div class="wpforms-field wpforms-field-textarea">
	                  <label class="wpforms-field-label">Disclaimer <span class="wpforms-required-label">*</span></label>
	                  <div class="wpforms-field-description">
	                    <p>By clicking ‘send’ you are consenting to us replying, and storing your details. in our <a href="#">privacy policy.</a></p> 
	                  </div>
	                </div>

	              </div><!-- end of .wpforms-field-container-->


	              <div class="wpforms-submit-container">
	                <button type="submit" name="submit" class="wpforms-submit">Send Referral</button>
	              </div>

	            </form>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	</section>
	<section class="tl-review-sec review-color parallaxie parallaxie-bg-Size_auto" style="background: url('<?php echo THEME_URI; ?>/assets/images/patient-review-bg.jpg');">
	<div class="container">
	  <div class="row">
	    <div class="col-md-12">
	      <div class="sec-entry-hdr-cntlr">
	        <div class="sec-entry-hdr">
	          <h2 class="sec-entry-hdr-title fl-h4">Dentist Referral Reviews</h2>
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
	              <h4 class="review-tstmnl-mgs fl-h5 mHc">“Very kind and friendly staff as well a <br> highly qualified skilled dentists!”</h4>
	              <div class="review-pro-des mHc1"data-status="closed">
	                <p>Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis. Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis</p>
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
	              <h4 class="review-tstmnl-mgs fl-h5 mHc">“Best experience I have ever had with a <br> dentist in Newport”</h4>
	              <div class="review-pro-des mHc1"data-status="closed">
	                <p>Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis. Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis</p>
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
	              <h4 class="review-tstmnl-mgs fl-h5 mHc">“Very kind and friendly staff as well a <br> highly qualified skilled dentists!”</h4>
	              <div class="review-pro-des mHc1"data-status="closed">
	                <p>Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis. Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis</p>
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
	              <h4 class="review-tstmnl-mgs fl-h5 mHc">“Best experience I have ever had with a <br> dentist in Newport”</h4>
	              <div class="review-pro-des mHc1"data-status="closed">
	                <p>Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis. Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis</p>
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
	              <h4 class="review-tstmnl-mgs fl-h5 mHc">“Very kind and friendly staff as well a <br> highly qualified skilled dentists!”</h4>
	              <div class="review-pro-des mHc1"data-status="closed">
	                <p>Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis. Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis</p>
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
	              <h4 class="review-tstmnl-mgs fl-h5 mHc">“Best experience I have ever had with a <br> dentist in Newport”</h4>
	              <div class="review-pro-des mHc1"data-status="closed">
	                <p>Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis....<br> Malesuada praesent et penatibus eget hac leo facilisis. Consectetur venenatis adipiscing gravida erat odio sodales. Ipsum quis tincidunt neque, ullamcorper sed. Condimentum sed mi non lacus feugiat velit nec nec habitant. Pharetra rhoncus cras id rhoncus quis iaculis</p>
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
	              <svg class="revw-left-arrow" width="11" height="34" viewBox="0 0 11 34" fill="#C5CBE5">
	                <use xlink:href="#revw-left-arrow"></use> 
	              </svg>
	            </span>
	          </div>
	          <div class="revw-next">
	            <span class="revw-right">
	              <svg class="revw-right-arrow" width="11" height="34" viewBox="0 0 11 34" fill="#C5CBE5">
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
	      <h2 class="fl-h4 treatment-title">Choose a Treatment to get started</h2>
	      <div class="treatment-desc hide-md">
	        <p>Nunc sollicitudin diam ante vitae quis ac. Morbi sapien, blandit et cursus suspendisse accumsan. Odio erat etiam purus bibendum fusce tristique aliquam non. </p>
	      </div>
	      <div class="treatment-btn hide-md">
	        <a class="cdc-btn" href="#">Book Appointment Online</a>
	      </div>
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
</div>
<?php get_footer(); ?>