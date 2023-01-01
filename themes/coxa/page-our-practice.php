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
								<?php if(!empty($experttreatment['title'])) echo('<h2 class="sec-entry-hdr-title fl-h4">'. $experttreatment['title'] .'</h2>'); ?>        
								<?php if(!empty($experttreatment['description'])) echo wpautop($experttreatment['description']); ?>
							</div>
						</div>
						<?php
						  $treatmentIDs = $experttreatment['select_treatments'];
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
						      'posts_per_page' => -1,
						      'orderby' => 'rand'
						    );
						  }
						  $loop = new WP_Query($args);
						  if($loop->have_posts()):
						?>
						<div class="expert-treatment-grds">
					        <?php 
					          while($loop->have_posts()):$loop->the_post();
					            global $post;
					            $thumbID = get_post_thumbnail_id(get_the_ID());
					            $image_url = !empty($thumbID)? cbv_get_image_src($thumbID) : treatment_placeholder();
					        ?>
							<div class="ex-trmnt-grd-item-col">
								<div class="ex-trmnt-grd-item">
									<div class="ex-trmnt-grd-item-img-cntlr">
										<a href="<?php the_permalink(); ?>" class="overlay-link"></a>
										<div class="ex-trmnt-grd-item-img inline-bg" style="background: url('<?php echo $image_url; ?>');"></div>
									</div>
									<div class="ex-trmnt-grd-item-des">
										<h3 class="ex-trmnt-grd-des-title fl-h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									</div>
								</div>
							</div>
							<?php endwhile; ?>
						</div>
						<?php wp_reset_postdata();endif;?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php 
endif;
$showhideblock = get_field('showhideblock', $thisID);
if($showhideblock):
$blocks = get_field('blocks', $thisID);
$i = 1;
foreach ($blocks as $block):
$link = $block['link'];
?>
<section class="about-intro-sec has-inline-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="abtis-img-text-row <?php echo ($i%2 == 1)? 'abtis-lft-img-row': null; ?>">
					<div class="abtis-img-text-row-inr">
						<?php if(!empty($block['image']) && isset($block['image'])): ?>
						<div class="abtis-img-txt-col abtis-row-img">
							<div class="abtis-row-img-inner">
								<div class="abtis-row-main-img-cntrl">
									<div class="abtis-row-main-img inline-bg" style="background-image: url(<?php echo cbv_get_image_src($block['image']); ?>);">
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
					<div class="abtis-img-txt-col abtis-row-text">
						<div class="abtis-row-text-inr">
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
							<?php if(!empty($block['title'])) echo('<h2 class="fl-h4">'.$block['title'].'</h2>'); ?>
							<?php if(!empty($block['description'])) echo wpautop($block['description']); ?>
							<?php if(is_array($link) && !empty($link['url'])) printf('<div class="abtis-intro-des-btn"><a class="cdc-btn" href="%s">%s</a></div>',$link['url'],$link['title']); ?>
						</div>                          
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<?php $i++; endforeach; endif; ?>
<?php 
$showhidegallery = get_field('showhidegallery', $thisID);
if($showhidegallery):
$gallery = get_field('gallery', $thisID);
$link = $gallery['link']
?>
<section class="practice-gallery why-choose-sec  parallaxie parallaxie-bg-Size_auto" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/why-choose-bg-img.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="sec-entry-hdr-cntlr">
					<div class="sec-entry-hdr">
						<?php if(!empty($gallery['title'])) echo('<h2 class="sec-entry-hdr-title fl-h4">'.$gallery['title'].'</h2>'); ?>
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
						<?php if(!empty($gallery['description'])) echo wpautop($gallery['description']); ?>
					</div>
				</div>
				<div class="practice-gallery-grids-cntlr">
					<div class="practice-gallery-grids">
						<div class="practice-gallery-grid-col">
							<div class="practice-gallery-grid-item">
								<div class="practice-gallery-grid-img-cntlr">
									<a href="<?php echo THEME_URI; ?>/assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
									<div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/practice-gallery-01.jpg);"></div>
								</div>
								<div class="practice-gallery-grid-des">
									<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Teatment Room</a></h3>
								</div>
							</div>
						</div>
						<div class="practice-gallery-grid-col">
							<div class="practice-gallery-grid-item">
								<div class="practice-gallery-grid-img-cntlr">
									<a href="<?php echo THEME_URI; ?>/assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
									<div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/practice-gallery-02.jpg);"></div>
								</div>
								<div class="practice-gallery-grid-des">
									<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Dental Implant Room</a></h3>
								</div>
							</div>
						</div>
						<div class="practice-gallery-grid-col">
							<div class="practice-gallery-grid-item">
								<div class="practice-gallery-grid-img-cntlr">
									<a href="<?php echo THEME_URI; ?>/assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
									<div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/practice-gallery-03.jpg);"></div>
								</div>
								<div class="practice-gallery-grid-des">
									<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Cosmetic Dentistry Room</a></h3>
								</div>
							</div>
						</div>
						<div class="practice-gallery-grid-col">
							<div class="practice-gallery-grid-item">
								<div class="practice-gallery-grid-img-cntlr">
									<a href="<?php echo THEME_URI; ?>/assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
									<div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/practice-gallery-04.jpg);"></div>
								</div>
								<div class="practice-gallery-grid-des">
									<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Specialist Chair</a></h3>
								</div>
							</div>
						</div>
						<div class="practice-gallery-grid-col">
							<div class="practice-gallery-grid-item">
								<div class="practice-gallery-grid-img-cntlr">
									<a href="<?php echo THEME_URI; ?>/assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
									<div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/practice-gallery-11.jpg);"></div>
								</div>
								<div class="practice-gallery-grid-des">
									<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Teatment Room</a></h3>
								</div>
							</div>
						</div>
						<div class="practice-gallery-grid-col">
							<div class="practice-gallery-grid-item">
								<div class="practice-gallery-grid-img-cntlr">
									<a href="<?php echo THEME_URI; ?>/assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
									<div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/practice-gallery-05.jpg);"></div>
								</div>
								<div class="practice-gallery-grid-des">
									<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Dental Implant Room</a></h3>
								</div>
							</div>
						</div>
						<div class="practice-gallery-grid-col">
							<div class="practice-gallery-grid-item">
								<div class="practice-gallery-grid-img-cntlr">
									<a href="<?php echo THEME_URI; ?>/assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
									<div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/practice-gallery-12.jpg);"></div>
								</div>
								<div class="practice-gallery-grid-des">
									<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Cosmetic Dentistry Room</a></h3>
								</div>
							</div>
						</div>
						<div class="practice-gallery-grid-col">
							<div class="practice-gallery-grid-item">
								<div class="practice-gallery-grid-img-cntlr">
									<a href="<?php echo THEME_URI; ?>/assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
									<div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/practice-gallery-06.jpg);"></div>
								</div>
								<div class="practice-gallery-grid-des">
									<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Specialist Chair</a></h3>
								</div>
							</div>
						</div>
						<div class="practice-gallery-grid-col">
							<div class="practice-gallery-grid-item">
								<div class="practice-gallery-grid-img-cntlr">
									<a href="<?php echo THEME_URI; ?>/assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
									<div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/practice-gallery-07.jpg);"></div>
								</div>
								<div class="practice-gallery-grid-des">
									<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Teatment Room</a></h3>
								</div>
							</div>
						</div>
						<div class="practice-gallery-grid-col">
							<div class="practice-gallery-grid-item">
								<div class="practice-gallery-grid-img-cntlr">
									<a href="<?php echo THEME_URI; ?>/assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
									<div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/practice-gallery-08.jpg);"></div>
								</div>
								<div class="practice-gallery-grid-des">
									<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Dental Implant Room</a></h3>
								</div>
							</div>
						</div>
						<div class="practice-gallery-grid-col">
							<div class="practice-gallery-grid-item">
								<div class="practice-gallery-grid-img-cntlr">
									<a href="<?php echo THEME_URI; ?>/assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
									<div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/practice-gallery-09.jpg);"></div>
								</div>
								<div class="practice-gallery-grid-des">
									<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Cosmetic Dentistry Room</a></h3>
								</div>
							</div>
						</div>
						<div class="practice-gallery-grid-col">
							<div class="practice-gallery-grid-item">
								<div class="practice-gallery-grid-img-cntlr">
									<a href="<?php echo THEME_URI; ?>/assets/images/practice-gallery-01.jpg" class="overlay-link" data-fancybox="images"></a>
									<div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/practice-gallery-10.jpg);"></div>
								</div>
								<div class="practice-gallery-grid-des">
									<h3 class="practice-gallery-grid-title fl-h6"><a href="#">Specialist Chair</a></h3>
								</div>
							</div>
						</div>
					</div>
					<?php if(is_array($link) && !empty($link['url'])): ?>
					<div class="practice-gallery-grid-btn">
						<?php printf('<a class="cdc-btn" href="%s">%s</a>',$link['url'],$link['title']); ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
endif; 
$showhideloc = get_field('showhideloc', $thisID);
if($showhideloc):
	$locations = get_field('locations', $thisID);
	?>
	<section class="locations-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-entry-hdr-cntlr">
						<div class="sec-entry-hdr">
							<?php if(!empty($locations['title'])) echo('<h3 class="sec-entry-hdr-title fl-h4">'.$locations['title'].'</h3>'); ?>
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
							<?php if(!empty($locations['description'])) echo wpautop($locations['description']); ?>
						</div>
					</div>
					<?php
						$locIDs = $locations['select_locations'];
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
$showhideteam = get_field('showhideteam', $thisID); 
if($showhideteam):
$team = get_field('team', $thisID); 
$link = $team['link'];
?>
	<section class="wco-team-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-entry-hdr-cntlr">
						<div class="sec-entry-hdr">
							<?php if(!empty($team['title'])) echo('<h2 class="sec-entry-hdr-title fl-h4">'.$team['title'].'</h2>'); ?>
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
							<?php if(!empty($team['description'])) echo wpautop($team['description']); ?>
						</div>
					</div>
			        <?php
			          $teamIDs = $team['select_team'];
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
			              'posts_per_page' => 3,
			              'orderby' => 'rand'
			            );
			          }
			          $loop = new WP_Query($args);
			          if($loop->have_posts()):
			        ?>
					<div class="profile-module">
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
						<?php if(is_array($link) && !empty($link['url'])): ?>
						<div class="wco-team-btn">
							<?php printf('<a class="cdc-btn" href="%s">%s</a>',$link['url'],$link['title'] ); ?>
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
							<?php if(!empty($faqs['title'])) echo('<h2 class="sec-entry-hdr-title fl-h4">'.$faqs['title'].'</h2>'); ?>
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
							<?php if(!empty($faqs['description'])) echo wpautop($faqs['description']); ?>
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
</div>
<?php get_template_part('templates/team', 'modal'); ?>
<?php get_footer(); ?>