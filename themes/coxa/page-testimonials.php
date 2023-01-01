<?php 
/*Template Name: Testimonials*/
get_header(); 
$thisID = get_the_ID();
get_template_part('templates/page', 'banner');

$previewIDs = get_field('select_reviews', $thisID);
if( !empty($previewIDs) ){
  $previewIDs = is_array($previewIDs)?$previewIDs : array($previewIDs);
  $targs = array(
    'post_type' => 'testimonial',
    'post__in' => $previewIDs,
    'orderby' => 'menu_order',
    'order' => 'asc'
  );
}else{
  $targs = array(
    'post_type' => 'testimonial',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'asc'
  );
}
$tloop = new WP_Query($targs);
?>
<div class="testimonials-pg-content-cntlr">
  <section class="review-grids-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="review-grids-cntlr full-width-review">
            <?php if($tloop->have_posts()): ?>
            <div class="review-grids tmreviewSlider review-pro-des-btn-fullwidth-cntlr"> 
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
                      <i><img src="<?php echo THEME_URI;?>/assets/images/star-icon.svg" alt=""></i>
                      <i><img src="<?php echo THEME_URI;?>/assets/images/star-icon.svg" alt=""></i>
                      <i><img src="<?php echo THEME_URI;?>/assets/images/star-icon.svg" alt=""></i>
                      <i><img src="<?php echo THEME_URI;?>/assets/images/star-icon.svg" alt=""></i>
                      <i><img src="<?php echo THEME_URI;?>/assets/images/rating-star-icon.svg" alt=""></i>
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
            <?php else: ?>

            <?php endif; ?>       
          </div>
        </div>
      </div>
    </div>
  </section>

<?php 
	$showhidegallery = get_field('showhidegallery', $thisID);
	if($showhidegallery):
		$gallery = get_field('gallery', $thisID);
		$link = $gallery['link'];
?>
<section class="practice-gallery practice-gallery-bgwhite">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sec-entry-hdr-cntlr">
          <div class="sec-entry-hdr">
            <?php if($gallery['title']) echo('<h2 class="sec-entry-hdr-title fl-h4">'. $gallery['title'] .'</h2>');?>
            <div class="diamond-module">
              <ul class="reset-list">
                <li>
                  <i><img src="<?php echo THEME_URI;?>/assets/images/sec-title-diamond.svg" alt=""></i>
                </li>
                <li>
                  <i><img src="<?php echo THEME_URI;?>/assets/images/sec-title-diamond.svg" alt=""></i>
                </li>
                <li>
                  <i><img src="<?php echo THEME_URI;?>/assets/images/sec-title-diamond.svg" alt=""></i>
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
                  <a href="<?php echo THEME_URI;?>/assets/images/testi-gallery-img-01.jpg" class="overlay-link" data-fancybox="images"></a>
                  <div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI;?>/assets/images/testi-gallery-img-01.jpg);"></div>
                </div>
                <div class="practice-gallery-grid-des">
                  <h3 class="practice-gallery-grid-title fl-h6"><a href="#">Image Title</a></h3>
                </div>
              </div>
            </div>
            <div class="practice-gallery-grid-col">
              <div class="practice-gallery-grid-item">
                <div class="practice-gallery-grid-img-cntlr">
                  <a href="<?php echo THEME_URI;?>/assets/images/testi-gallery-img-02.jpg" class="overlay-link" data-fancybox="images"></a>
                  <div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI;?>/assets/images/testi-gallery-img-02.jpg);"></div>
                </div>
                <div class="practice-gallery-grid-des">
                  <h3 class="practice-gallery-grid-title fl-h6"><a href="#">Image Title</a></h3>
                </div>
              </div>
            </div>
            <div class="practice-gallery-grid-col">
              <div class="practice-gallery-grid-item">
                <div class="practice-gallery-grid-img-cntlr">
                  <a href="<?php echo THEME_URI;?>/assets/images/testi-gallery-img-03.jpg" class="overlay-link" data-fancybox="images"></a>
                  <div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI;?>/assets/images/testi-gallery-img-03.jpg);"></div>
                </div>
                <div class="practice-gallery-grid-des">
                  <h3 class="practice-gallery-grid-title fl-h6"><a href="#">Image Title</a></h3>
                </div>
              </div>
            </div>
            <div class="practice-gallery-grid-col">
              <div class="practice-gallery-grid-item">
                <div class="practice-gallery-grid-img-cntlr">
                  <a href="<?php echo THEME_URI;?>/assets/images/testi-gallery-img-04.jpg" class="overlay-link" data-fancybox="images"></a>
                  <div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI;?>/assets/images/testi-gallery-img-04.jpg);"></div>
                </div>
                <div class="practice-gallery-grid-des">
                  <h3 class="practice-gallery-grid-title fl-h6"><a href="#">Image Title</a></h3>
                </div>
              </div>
            </div>
            <div class="practice-gallery-grid-col">
              <div class="practice-gallery-grid-item">
                <div class="practice-gallery-grid-img-cntlr">
                  <a href="<?php echo THEME_URI;?>/assets/images/testi-gallery-img-05.jpg" class="overlay-link" data-fancybox="images"></a>
                  <div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI;?>/assets/images/testi-gallery-img-05.jpg);"></div>
                </div>
                <div class="practice-gallery-grid-des">
                  <h3 class="practice-gallery-grid-title fl-h6"><a href="#">Image Title</a></h3>
                </div>
              </div>
            </div>
            <div class="practice-gallery-grid-col">
              <div class="practice-gallery-grid-item">
                <div class="practice-gallery-grid-img-cntlr">
                  <a href="<?php echo THEME_URI;?>/assets/images/testi-gallery-img-06.jpg" class="overlay-link" data-fancybox="images"></a>
                  <div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI;?>/assets/images/testi-gallery-img-06.jpg);"></div>
                </div>
                <div class="practice-gallery-grid-des">
                  <h3 class="practice-gallery-grid-title fl-h6"><a href="#">Image Title</a></h3>
                </div>
              </div>
            </div>
            <div class="practice-gallery-grid-col">
              <div class="practice-gallery-grid-item">
                <div class="practice-gallery-grid-img-cntlr">
                  <a href="<?php echo THEME_URI;?>/assets/images/testi-gallery-img-07.jpg" class="overlay-link" data-fancybox="images"></a>
                  <div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI;?>/assets/images/testi-gallery-img-07.jpg);"></div>
                </div>
                <div class="practice-gallery-grid-des">
                  <h3 class="practice-gallery-grid-title fl-h6"><a href="#">Image Title</a></h3>
                </div>
              </div>
            </div>
            <div class="practice-gallery-grid-col">
              <div class="practice-gallery-grid-item">
                <div class="practice-gallery-grid-img-cntlr">
                  <a href="<?php echo THEME_URI;?>/assets/images/testi-gallery-img-08.jpg" class="overlay-link" data-fancybox="images"></a>
                  <div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI;?>/assets/images/testi-gallery-img-08.jpg);"></div>
                </div>
                <div class="practice-gallery-grid-des">
                  <h3 class="practice-gallery-grid-title fl-h6"><a href="#">Image Title</a></h3>
                </div>
              </div>
            </div>
            <div class="practice-gallery-grid-col">
              <div class="practice-gallery-grid-item">
                <div class="practice-gallery-grid-img-cntlr">
                  <a href="<?php echo THEME_URI;?>/assets/images/testi-gallery-img-09.jpg" class="overlay-link" data-fancybox="images"></a>
                  <div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI;?>/assets/images/testi-gallery-img-09.jpg);"></div>
                </div>
                <div class="practice-gallery-grid-des">
                  <h3 class="practice-gallery-grid-title fl-h6"><a href="#">Image Title</a></h3>
                </div>
              </div>
            </div>
            <div class="practice-gallery-grid-col">
              <div class="practice-gallery-grid-item">
                <div class="practice-gallery-grid-img-cntlr">
                  <a href="<?php echo THEME_URI;?>/assets/images/testi-gallery-img-10.jpg" class="overlay-link" data-fancybox="images"></a>
                  <div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI;?>/assets/images/testi-gallery-img-10.jpg);"></div>
                </div>
                <div class="practice-gallery-grid-des">
                  <h3 class="practice-gallery-grid-title fl-h6"><a href="#">Image Title</a></h3>
                </div>
              </div>
            </div>
            <div class="practice-gallery-grid-col">
              <div class="practice-gallery-grid-item">
                <div class="practice-gallery-grid-img-cntlr">
                  <a href="<?php echo THEME_URI;?>/assets/images/testi-gallery-img-11.jpg" class="overlay-link" data-fancybox="images"></a>
                  <div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI;?>/assets/images/testi-gallery-img-11.jpg);"></div>
                </div>
                <div class="practice-gallery-grid-des">
                  <h3 class="practice-gallery-grid-title fl-h6"><a href="#">Image Title</a></h3>
                </div>
              </div>
            </div>
            <div class="practice-gallery-grid-col">
              <div class="practice-gallery-grid-item">
                <div class="practice-gallery-grid-img-cntlr">
                  <a href="<?php echo THEME_URI;?>/assets/images/testi-gallery-img-12.jpg" class="overlay-link" data-fancybox="images"></a>
                  <div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo THEME_URI;?>/assets/images/testi-gallery-img-12.jpg);"></div>
                </div>
                <div class="practice-gallery-grid-des">
                  <h3 class="practice-gallery-grid-title fl-h6"><a href="#">Image Title</a></h3>
                </div>
              </div>
            </div>
          </div>
          <?php if(!empty($link)): ?>
          <div class="why-choose-grid-btn">
          	<?php printf('<a class="cdc-btn" href="%s" target="%s">%s</a>',$link['url'],$link['target'],$link['title'] ); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif;
$showhidewch = get_field('showhidewch', $thisID);
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