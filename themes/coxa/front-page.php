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
$treatmentIDs = $chtreatment['select_treatment'];
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
		<?php
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
            $image_url = !empty($thumbID)? cbv_get_image_src($thumbID) : treatment_placeholder();
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
$link_1 = $previews['link_1'];
$link_2 = $previews['link_2'];
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
				<?php
					$previewIDs = $previews['select_reviews'];
					$previewTaxID = $previews['select_category'];
					$review_tax = array();
					if( !empty($previewTaxID) ){
						$review_tax = array(
							array(
								'taxonomy'	=> 'testimonial_cat',
								'field' => 'term_id',
								'terms'	=> $previewTaxID
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
				<div class="review-grids-cntlr">
					<div class="review-grids reviewSlider">
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
										<i><img src="<?php echo THEME_URI; ?>/assets/images/star-icon.svg" alt=""></i>
									</span>
								</div>
								
								<?php if(!empty($quote_text)) printf('<h4 class="review-tstmnl-mgs fl-h5 mHc">%s</h4>', $quote_text); if(!empty(get_the_content())): ?>
								<div class="review-pro-des testimonial-text mHc1"data-status="closed">
									<?php the_content(); ?>
								</div>
								<?php endif; ?>
								<div class="review-pro-des-btn review-pro-des-btn-col">
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

				<?php if(!empty($link_1['url']) && !empty($link_2['url'])): ?>
        <div class="review-grid-btns hide-sm">
          <ul class="reset-list">
            <?php if(is_array($link_1) && !empty($link_1['url'])) printf('<li><a href="%s" class="cdc-btn">%s</a></li>',$link_1['url'],$link_1['title']); ?>
            <?php if(is_array($link_2) && !empty($link_2['url'])) printf('<li><a href="%s" class="cdc-trnsprnt-btn">%s</a></li>',$link_2['url'],$link_2['title']); ?>
          </ul>
        </div>
        <?php endif; ?>

        <?php wp_reset_postdata();endif;?>
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
			          'posts_per_page' => 8,
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
						<?php echo wpautop($ourloc['description']); ?>
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
                $direction_link = $overview['direction_url'];
            ?>
						<div class="locations-sec-grid-item mHc">
							<div class="locations-sec-grid-item-inner">
								<div class="locations-area">
									<?php 
										if( !empty($overview['image']) ): 
											echo cbv_get_image_tag($overview['image']);
										else:
											if( $overview['map_type'] == 'embed' ){ 
												if( !empty($overview['map_embed']) ) printf('%s', $overview['map_embed']);
											}else{ 
											if( is_array($overview['map_embed']) && !empty($overview['map_embed']) ) printf('<div id="googleMap_1" data-lat="%s" data-lon="%s"></div>', $overview['map_embed']['lat'], $overview['map_embed']['lon']);
									  } 
										endif;
									?>
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

<?php get_footer(); ?>