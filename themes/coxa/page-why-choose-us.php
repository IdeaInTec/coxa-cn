<?php 
/*Template Name: Why Choose Us*/
get_header(); 
$thisID = get_the_ID();
get_template_part('templates/page', 'banner');
?>

<div class="why-choose-us-page-cntlr">
	<?php 
	$intro = get_field('intro', $thisID);
  if(!empty($intro)):
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
                <?php if(!empty($intro['description'])) echo wpautop($intro['description']); ?>
              </div>
            </div>
            <div class="counter-cntlr">
            	<?php 
            	$key_points = $intro['key_points']; 
              if(!empty($key_points)):
            	foreach ($key_points as $key_point):
            		?>
            		<div class="counter-col-01 counter-col" >
            			<?php if(!empty($key_point['value'])) echo('<h2 class="fl-h1 counter-number-title"><span class="counter-number">'.$key_point['value'].'</span>'.$key_point['suffix'].'</h2>'); ?>

            			<?php echo wpautop($key_point['title']); ?>
            		</div> 
            	<?php endforeach; endif; ?>
            </div>
          </div>
        </div>
      </section>
      <?php 
      endif;
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
              <?php
                $teamIDs = $ourteam['select_team'];
                if( !empty($teamIDs) ){
                  $teamIDs = is_array($teamIDs)?$teamIDs : array($teamIDs);
                  $args = array(
                    'post_type' => 'team',
                    'orderby' => 'rand',
                    'post__in' => $teamIDs,
                  );
                }else{
                  $args = array(
                    'post_type' => 'team',
                    'posts_per_page' => 6,
                    'orderby' => 'rand'
                  );
                }
                $loop = new WP_Query($args);
                if($loop->have_posts()):
              ?>
              <div class="profile-module">
                <div class="profile-module-inr">
                <div class="team-grds teamGrdSlider">
                  <?php 
                    while($loop->have_posts()):$loop->the_post();
                      global $post;
                      $thumbID = get_post_thumbnail_id($post->ID);
                      $image_url = !empty($thumbID)? cbv_get_image_src($thumbID) : '';
                      $designation = get_field('designation', $post->ID);
                      $gdc_no = get_field('gdc_no', $post->ID);
                      $experience = get_field('experience', $post->ID);
                  ?>
                  <div class="team-grd-item-col">
                    <div class="pro-mdul-grd">
                      <div class="pm-grd-img-cntlr">
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo $image_url; ?>);"></div>
                      </div>
                      <div class="pm-grd-desc-cntlr mHc">
                        <h5 class="fl-h5 pm-grd-title mHc1"><a href="#" onclick="getTeamDetailsById(<?php echo $post->ID; ?>)" data-bs-toggle="modal" data-bs-target="#profile-modal"><?php the_title(); ?></a></h5>
                        <?php if( !empty($designation) || !empty($gdc_no) ): ?>
                        <div class="pm-grd-assist mHc2">
                          <span class="pm-grd-assist-name"><?php if( !empty($designation) ) printf('%s', $designation); if( !empty($gdc_no) ) printf('<span class="pm-grd-assist-no">GDC No: %s</span>', $gdc_no); ?></span>
                        </div>
                        <?php endif; 
                          if( !empty($experience) ) printf('<span class="pm-grd-addr mHc3">%s</span>', $experience);
                        ?>
                        
                        <?php if( !empty(get_the_excerpt()) ): ?>
                        <div class="pm-grd-desc">
                          <p><?php echo get_the_excerpt(); ?>...</p>
                        </div>
                        <?php endif; ?>
                        <div class="pm-grd-btns-cntlr">
                          <div class="pm-grd-btn">
                            <a class="" href="#" onclick="getTeamDetailsById(<?php echo $post->ID; ?>)" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endwhile; ?>
                </div>
                <div class="team-prev-next">
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
                <div class="xs-team-prev-next">
                  <div class="revw-prev">
                    <span class="revw-left">
                      <svg class="prev-line" width="66" height="20" viewBox="0 0 66 20" fill="#29467D">
                        <use xlink:href="#prev-line"></use> 
                      </svg>
                    </span>
                  </div>
                  <div class="revw-next">
                    <span class="revw-right">
                      <svg class="next-line" width="66" height="20" viewBox="0 0 66 20" fill="#29467D">
                        <use xlink:href="#next-line"></use> 
                      </svg>
                    </span>
                  </div>
                </div> 
                </div>
                <?php if(is_array($ourteam_link) && !empty($ourteam_link['url'])): ?>
                <div class="wco-team-btn">
                  <?php printf('<a class="cdc-btn" href="%s">%s</a>',$ourteam_link['url'],$ourteam_link['title'] ); ?>
                </div>
              	<?php endif; ?>
              </div>
              <?php wp_reset_postdata();endif;?> 
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
              <?php
                $previewIDs = $previews['select_reviews'];
                $previewTaxID = $previews['select_category'];
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
                <div class="review-grids tlPatientReviewSlider2 review-pro-des-btn-fullwidth-cntlr"> 
                  <?php
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
                        <i>
                          <?php echo $image_tag; ?>
                        </i>
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
                      <div class="review-pro-des mHc1"data-status="closed">
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
                	<?php if(is_array($link_1) && !empty($link_1['url'])) printf('<li><a class="cdc-btn" href="%s">%s</a></li>',$link_1['url'],$link_1['title'] ); ?>
                  <?php if(is_array($link_2) && !empty($link_2['url'])) printf('<li><a class="cdc-trnsprnt-btn" href="%s">%s</a></li>',$link_2['url'],$link_2['title'] ); ?>
                </ul>
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
<?php get_template_part('templates/team', 'modal'); ?>
<?php get_footer(); ?>