<?php 
/*Template Name: Contact Us*/
get_header(); 
$thisID = get_the_ID();
?>
<?php get_template_part('templates/page', 'banner'); ?>
<div class="our-equionment-page-con-cntlr"> 
<?php 
$showhideloc = get_field('showhideloc', $thisID);
if($showhideloc):
$ourloc = get_field('ourloc', $thisID);
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
					</div>
				</div>
				<?php
					$locIDs = $ourloc['select_locations'];
		      if( !empty($locIDs) ){
		        $locIDs = is_array($locIDs)?$locIDs : array($locIDs);
		        $loc_args = array(
		          'post_type' => 'location',
		          'orderby' => 'rand',
		          'post__in' => $locIDs,
		        );
		      }else{
		        $loc_args = array(
		          'post_type' => 'location',
		          'posts_per_page' => 6,
		          'orderby' => 'menu_order',
		          'order'	=> 'asc'
		        );
		      }
		      $loc_loop = new WP_Query($loc_args);
		      if($loc_loop->have_posts()):
				?>
				<div class="locations-sec-inner">
					<div class="locations-sec-grids locationSlider">
					<?php
              while($loc_loop->have_posts()):$loc_loop->the_post();
                global $post;
                $overview = get_field('overview', $post->ID);
                $direction_link = $overview['direction_url'];
            ?>
						<div class="locations-sec-grid-item mHc">
							<div class="locations-sec-grid-item-inner">
								<div class="locations-area">
									<img src="<?php echo THEME_URI; ?>/assets/images/locations-image.jpg" alt="">
								</div>
								<div class="locations-des mHc1">
									<div class="locations-title-cntrl">
										<h4 class="locations-des-title fl-h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<a href="<?php the_permalink(); ?>" class="cdc-btn">See Practice</a>
										<?php if( !empty($direction_link) ) printf('<a href="%s" class="cdc-trnsprnt-btn">Get Directions</a>', $direction_link); ?>
									</div>
									<?php if( $overview ): if( !empty($overview['opening_hours'] ) ): ?>
									<div class="office-time-zoon mHc2">
										<h5 class="office-des-title">Opening Hours:</h5>
										<?php 
											foreach( $overview['opening_hours'] as $open_hour):
												if( !empty($open_hour['text']) ) printf('<span>%s</span>', $open_hour['text']);
											endforeach; 
									  ?>
									</div>
									<?php endif; if( !empty($overview['telephone'] ) ): ?>
									<div class="office-contact mHc3">
										<h5 class="office-des-title">Phone:</h5>
										<?php printf('<a href="tel:+%s">%s</a>', phone_preg($overview['telephone']), $overview['telephone']); ?>
									</div>
									<?php endif; ?>
									<div class="office-social">
										<h5 class="office-des-title">Say hello:</h5>
										<ul class="reset-list">
											<?php if( !empty($overview['facebook_url'] ) ): ?>
											<li>
												<a href="<?php echo $overview['facebook_url']; ?>" target="_blank">
													<i>
														<svg class="facebook-icon" width="10" height="18" viewBox="0 0 10 18" fill="#707070">
															<use xlink:href="#facebook-icon"></use> 
														</svg>
													</i>
												</a>
											</li>
											<?php endif;if( !empty($overview['twitter_url'] ) ): ?>
											<li>
												<a href="<?php echo $overview['twitter_url']; ?>" target="_blank">
													<i>
														<svg class="twitter-icon" width="24" height="20" viewBox="0 0 24 20" fill="#707070">
															<use xlink:href="#twitter-icon"></use> 
														</svg>
													</i>
												</a>
											</li>
											<?php endif;if( !empty($overview['instagram_url'] ) ): ?>
											<li>
												<a href="<?php echo $overview['instagram_url']; ?>" target="_blank">
													<i>
														<svg class="instagram-icon" width="22" height="22" viewBox="0 0 22 22" fill="#707070">
															<use xlink:href="#instagram-icon"></use> 
														</svg>
													</i>
												</a>
											</li>
											<?php endif;if( !empty($overview['linkedin_url'] ) ): ?>
											<li>
												<a href="<?php echo $overview['linkedin_url']; ?>" target="_blank">
													<i>
														<svg class="likedin-icon" width="20" height="20" viewBox="0 0 20 20" fill="#707070">
															<use xlink:href="#likedin-icon"></use> 
														</svg>
													</i>
												</a>
											</li>
											<?php endif; ?>
										</ul>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
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
				<?php wp_reset_postdata();endif;?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php 
$showhidefaq = get_field('showhidefaq', $thisID);
if($showhidefaq):
$faqs = get_field('faqs', $thisID);
?>
<section class="faq-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sec-entry-hdr-cntlr">
          <div class="sec-entry-hdr">
            <?php if(!empty($faqs['title'])) echo('<h3 class="sec-entry-hdr-title fl-h4">'.$faqs['title'].'</h3>'); ?>
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
        <?php
          $faqIDs = $faqs['select_faq'];
          if( !empty($faqIDs) ){
            $faqIDs = is_array($faqIDs)?$faqIDs : array($faqIDs);
            $faq_args = array(
              'post_type' => 'faq',
              'orderby' => 'rand',
              'post__in' => $faqIDs,
            );
          }else{
            $faq_args = array(
              'post_type' => 'faq',
              'posts_per_page' => 7,
              'orderby' => 'rand',
            );
          }
          $faq_loop = new WP_Query($faq_args);
          if($faq_loop->have_posts()):
        ?>
        <div class="faq-sec-inner">
          <div class="faq-grds">
            <?php
              $i = 1;
              while($faq_loop->have_posts()):$faq_loop->the_post();
                global $post;
                $faq_link = get_field('link', $post->ID);
                $active = $i == 1? 'active': '';
            ?>
            <div class="faq-grd">
              <div class="faq-grd-item">
                <div class="faq-accordion-menu <?php echo $active; ?>">
                  <div class="faq-accordion-hdr">
                    <h4 class="faq-accordion-title fl-h6"><?php the_title(); ?></h4>
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
                  <div class="faq-accordion-des <?php echo $active; ?>">
                    <?php 
                      the_content(); 
                      if( is_array($faq_link) && !empty($faq_link['url']) ) printf('<a class="cdc-btn" href="%s" target="%s">%s</a>',$faq_link['url'], $faq_link['target'], $faq_link['title'] );
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <?php $i++; endwhile; ?>
          </div>
        </div>
        <?php wp_reset_postdata();endif;?>
      </div>
    </div>
  </div>
</section> 
<?php endif; ?>

<section class="maps-sec">
	<div class="maps-sec-inr">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.5889072554382!2d-3.180398984262356!3d51.52075757963731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486e1c66ea171f1d%3A0x4b62f04a67e2abdc!2s9%20Rhyd-Y-Penau%20Rd%2C%20Cardiff%20CF23%206PX%2C%20UK!5e0!3m2!1sen!2sbd!4v1667131835577!5m2!1sen!2sbd" width="100%" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<div class="map-loc-desc-inr">
			<div class="map-loc-desc-cntlr">
				<div class="map-loc-desc-item">
					<div class="map-item-img-cntlr">
						<img src="<?php echo THEME_URI; ?>/assets/images/map-cnt-des.jpg">
					</div>
					<div class="map-item-des-cntlr">
						<h5 class="fl-h6 map-loc-title">Cox & Hitchcock Dental Group</h5>
						<div class="map-item-loc-phn">
							<ul class="reset-list">
								<li><a class="map-location" href="#">9 Rhyd Y Penau Road Cyncoed, Cardiff, CF23 6PX</a></li>
								<li><a class="map-phn" href="tel:02920761100">02920 761100</a></li>
							</ul>
						</div>
					</div>
					<div class="map-des-btn">
						<a class="cdc-btn" href="#">Get Directions</a>
					</div>
					<div class="map-des-btm-arrow-cntr">
						<div class="map-des-btm-arrow-img">
							<img src="<?php echo THEME_URI; ?>/assets/images/bottom-arrow.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

</div>

<?php get_footer(); ?>