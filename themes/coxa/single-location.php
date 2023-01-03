<?php 
get_header(); 
$thisID = get_the_ID();
get_template_part('templates/page', 'banner');
?>

<div class="lt-page-con-cntlr">
<?php
$intro = get_field('intro', $thisID);
if($intro):
$overview = get_field('overview', $thisID);
$introImg1 = !empty($intro['image_1'])?cbv_get_image_src($intro['image_1']):'';
$introImg2 = !empty($intro['image_2'])?cbv_get_image_src($intro['image_2']):'';
?>
<section class="about-intro-sec has-inline-bg double-image-module">
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <div class="abtis-img-text-row abtis-lft-img-row">
          <div class="abtis-img-text-row-inr">
            <div class="abtis-img-txt-col abtis-row-img">
              <div class="abtis-row-img-inner">                
                <?php if( !empty($introImg1) ): ?>
                <div class="abtis-row-main-img-cntrl">
                  <div class="abtis-row-main-img inline-bg" style="background-image: url(<?php echo $introImg1; ?>);">
                  </div>
                </div>
            	<?php endif; if( !empty($introImg2) ):?>
                <div class="abtis-row-sub-img-cntlr">
                  <div class="abtis-row-sub-img inline-bg" style="background-image: url(<?php echo $introImg2; ?>);">
                  </div>
                </div>
            	<?php endif;?>
              </div>
            </div>
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
                <?php 
	                if(!empty($intro['title'])) printf('<h2 class="fl-h4">%s</h2>', $intro['title']);
	                if(!empty($intro['description'])) echo wpautop($intro['description']);
                ?>
                <?php if( $overview ): ?>
                <div class="locations-des mHc1">
                  <?php if( !empty($overview['opening_hours'] ) ): ?>
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
$ourteam = get_field('team', $thisID);
?>
<section class="tl-team-sec">
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
              'posts_per_page' => 9,
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
                   if( !empty(get_the_excerpt()) ): 
                  ?>
                  <div class="pm-grd-desc">
                    <p><?php echo get_the_excerpt(); ?>...</p>
                  </div>
                  <?php endif; ?>
                <div class="pm-grd-btns-cntlr">
                  <div class="pm-grd-btn pm-grd-btn-02">
                    <a class="cdc-trnsprnt-btn" href="#" onclick="getTeamDetailsById(<?php echo $post->ID; ?>)" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
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
      </div>
      <?php wp_reset_postdata();endif;?> 
    </div>
  </div>
</div>
</section>
<?php 
endif;
$showhidepr = get_field('showhidereviews', $thisID);
if($showhidepr):
$previews = get_field('previews', $thisID);
$bgimgURL = !empty($previews['bg_image'])?cbv_get_image_src($previews['bg_image']):'';
?>
<section class="tl-review-sec review-color parallaxie parallaxie-bg-Size_auto" style="background: url('<?php echo $bgimgURL; ?>');">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="sec-entry-hdr-cntlr">
        <div class="sec-entry-hdr">
          <?php if(!empty($previews['title'])): printf('<h2 class="sec-entry-hdr-title fl-h4">%s</h2>', $previews['title']); ?>
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
            <?php if(!empty($quote_text)) printf('<h3 class="review-tstmnl-mgs fl-h5 mHc">%s</h4>', $quote_text); if(!empty(get_the_content())): ?>
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
<?php 
endif; 
$showhidegallery = get_field('showhidegallery', $thisID);
if($showhidegallery):
$pgallery = get_field('pgallery', $thisID);
$glink = $pgallery['link'];
?>
<section class="practice-gallery tl-practice-gallery practice-gallery-bgwhite">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="sec-entry-hdr-cntlr">
        <div class="sec-entry-hdr">
        <?php if(!empty($pgallery['title'])): printf('<h2 class="sec-entry-hdr-title fl-h4">%s</h2>', $pgallery['title']); ?>
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
        <?php if(is_array($glink) && !empty($glink['url'])): ?>            
        <div class="practice-gallery-grid-btn">
          <?php printf('<a class="cdc-btn" href="%s">%s</a>',$glink['url'],$glink['title']); ?>
        </div> 
        <?php endif; ?>  
      </div>
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
<section class="faq-sec tl-faq-sec">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="sec-entry-hdr-cntlr">
        <div class="sec-entry-hdr">
          <?php if(!empty($faqs['title'])) printf('<h3 class="sec-entry-hdr-title fl-h4">%s</h3>', $faqs['title']); ?>
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
          <img src="<?php echo THEME_URI; ?>/assets/images/map-des.jpg">
        </div>
        <div class="map-item-info-des">
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
</div>
</section>
</div>
<?php get_template_part('templates/team', 'modal'); ?>
<?php get_footer(); ?>