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
          	<?php if( !empty($refimage) ): ?>
            <div class="abtis-row-img-inner">
              <div class="abtis-row-main-img-cntrl">
                <div class="abtis-row-main-img inline-bg" style="background-image: url(<?php echo cbv_get_image_src($refimage); ?>);">
                </div>
              </div>
            </div>
        	<?php endif; ?>
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
	$showhiderform = get_field('showhiderform', $thisID);
	if($showhiderform):
		$refform = get_field('referralform', $thisID);
?>
<section class="referral-sec">
	<div class="container">
	  <div class="row">
	    <div class="col-md-12">
	      <div class="sec-entry-hdr-cntlr">
	        <div class="sec-entry-hdr">
	        <?php 
	        	if(!empty($refform['title'])):
	        	printf('<h2 class="sec-entry-hdr-title fl-h4">%s</h2>', $refform['title']); 
	        ?>
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
	          <?php endif; ?>                
	        </div>
	      </div>
	      <?php if( !empty($refform['shortcode']) ): ?>
	      <div class="refferal-sec-contlr">
	        <div class="contact-form-wrp clearfix">
	          <?php echo do_shortcode($refform['shortcode']); ?>
	        </div>
	      </div>
	      <?php endif; ?>
	    </div>
	  </div>
	</div>
</section>
<?php 
endif;
$showhidepr = get_field('showhidepr', $thisID);
if($showhidepr):
$previews = get_field('previews', $thisID);
?>
<section class="tl-review-sec review-color parallaxie parallaxie-bg-Size_auto" style="background: url('<?php echo THEME_URI; ?>/assets/images/patient-review-bg.jpg');">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="sec-entry-hdr-cntlr">
        <div class="sec-entry-hdr">
	        <?php 
	        	if(!empty($previews['title'])):
	        	printf('<h2 class="sec-entry-hdr-title fl-h4">%s</h2>', $previews['title']); 
	        ?>
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
          <?php endif; ?>               
        </div>
      </div>
    <?php
      $previewIDs = $previews['select_reviews'];
      $previewTaxID = $previews['selectcategory'];
      $review_tax = array();
      if( !empty($previewTaxID) ){
        $review_tax = array(
          array(
            'taxonomy'  => 'testimonial_cat',
            'field' => 'term_id',
            'terms' => $previewTaxID
          )
        );
      }
      
      if( !empty($previewIDs) ){
        $previewIDs = is_array($previewIDs)?$previewIDs : array($previewIDs);
        $targs = array(
          'post_type' => 'testimonial',
          'orderby' => 'rand',
          'post__in' => $previewIDs,
          'tax_query' => $review_tax
        );
      }else{
        $targs = array(
          'post_type' => 'testimonial',
          'posts_per_page' => 4,
          'orderby' => 'rand',
          'tax_query' => $review_tax
        );
      }
      $tloop = new WP_Query($targs);
      if($tloop->have_posts()):
    ?>
      <div class="review-grids-cntlr full-width-review">
        <div class="review-grids tlPatientReviewSlider2 review-pro-des-btn-fullwidth-cntlr"><?php
          while($tloop->have_posts()):$tloop->the_post();
            global $post;
            $thumbID = get_post_thumbnail_id(get_the_ID());
            $image_tag = !empty($thumbID)? cbv_get_image_tag($thumbID) : '';
            $name = get_field('name', $post->ID);
            $position = get_field('position', $post->ID);
            $quote_text = get_field('quote_text', $post->ID);
        ?>
          <div class="review-grid-col">
            <div class="review-grid-item">
				<?php if( !empty($image_tag) ): ?>
				<div class="review-pro-img">
					<i><?php echo $image_tag; ?></i>
				</div>
				<?php endif; ?>
              <div class="review-pro-rating">
                <span>
                  <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                  <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                  <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                  <i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
                  <i><img src="<?php echo THEME_URI; ?>/assets/images/rating-star-icon.svg" alt=""></i>
                </span>
              </div>
                <?php if(!empty($quote_text)) printf('<h3 class="review-tstmnl-mgs fl-h5 mHc">%s</h4>', $quote_text); if(!empty(get_the_content())): ?>
                <div class="review-pro-des testimonial-text mHc1"data-status="closed">
                  <?php the_content(); ?>
                </div>
                <?php endif; ?>
              <div class="review-pro-des-btn review-pro-des-btn-fullwidth">
                <button id="rdmore_bnt" data-text-closed="read more" data-text-open="read less">Read more</button>
              </div>
              <div class="review-pro-name">
              <?php 
                if(!empty($name)) printf('<strong class="review-pro-title">%s</strong>', $name); 
                if(!empty($position)) printf('<span>%s</span>', $position); 
              ?>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
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
      <?php wp_reset_postdata();endif;?>
    </div>
  </div>
</div>
</section>
<?php endif; 
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
    <?php
      $treatmentIDs = $chtreatment['select_treatment'];
      if( !empty($treatmentIDs) ){
        $treatmentIDs = is_array($treatmentIDs)?$treatmentIDs : array($treatmentIDs);
        $args = array(
          'post_type' => 'treatment',
          'orderby' => 'rand',
          'post__in' => $treatmentIDs,
        );
      }else{
        $args = array(
          'post_type' => 'treatment',
          'posts_per_page' => 4,
          'orderby' => 'rand'
        );
      }
      $loop = new WP_Query($args);
      if($loop->have_posts()):
    ?>
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
        <?php 
          while($loop->have_posts()):$loop->the_post();
            global $post;
            $thumbID = get_post_thumbnail_id(get_the_ID());
            $image_url = !empty($thumbID)? cbv_get_image_src($thumbID):treatment_placeholder();
        ?>
        <div class="trtmnt-grd-cntlr">
          <div class="trtmnt-grd">
            <div class="trtmnt-grd-img-cntlr">
              <div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo $image_url; ?>);"></div>
              <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
            </div>
            <h3 class="fl-h5 trtmnt-grd-title mHc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="trtmnt-grd-desc">
              <?php the_excerpt(); ?>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php wp_reset_postdata();endif;?>
  </div>
</section>
<?php endif; ?>
</div>
<?php get_footer(); ?>