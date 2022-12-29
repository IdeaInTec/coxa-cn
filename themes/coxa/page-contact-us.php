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
		          'posts_per_page' => 4,
		          'orderby' => 'rand',
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
										<a href="#" class="cdc-trnsprnt-btn">Get Directions</a>
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
<?php endif; ?>


</div>

<?php get_footer(); ?>