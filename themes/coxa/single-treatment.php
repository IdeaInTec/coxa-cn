<?php get_header(); 
$thisID = get_the_ID();
get_template_part('templates/page', 'banner');
?>

<div class="treatment-page-con-cntlr">
  <?php 
  $intro = get_field('intro', $thisID); 
  $ti_link = $intro['link'];
  ?>
  <section class="about-intro-sec has-inline-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="abtis-img-text-row abtis-lft-img-row">
              <div class="abtis-img-text-row-inr">
                <div class="abtis-img-txt-col abtis-row-img">
                  <div class="abtis-row-img-inner">
                    <?php if(!empty($intro['image'])): ?>
                    <div class="abtis-row-main-img-cntrl">
                      <div class="abtis-row-main-img inline-bg" style="background-image: url(<?php echo cbv_get_image_src($intro['image']); ?>);">
                      </div>
                    </div>
                    <?php endif; ?>
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
                    <?php if(!empty($intro['title'])) printf('<h2 class="fl-h4">%s</h2>',$intro['title']);?>
                    <?php if(!empty($intro['description'])) echo wpautop($intro['description']); ?>
                    <?php if(is_array($ti_link) && !empty($ti_link['url'])) printf('<div class="abtis-intro-des-btn"><a class="cdc-btn" href="%s">%s</a></div>',$ti_link['url'],$ti_link['title']); ?>
                  </div>                          
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <?php 
  $showhidewchtreat = get_field('showhidewchtreat', $thisID);
  if($showhidewchtreat):
  $treatments = get_field('treatments', $thisID);
  ?>
  <section class="treatments-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="treatments-sec-inr">
            <div class="sec-entry-hdr-cntlr">
              <div class="sec-entry-hdr">
                <?php if(!empty($treatments['title'])) printf('<h3 class="sec-entry-hdr-title fl-h4">%s</h3>',$treatments['title']);?>
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
            <div class="treatment-grds">
              <?php 
              $treatments = $treatments['treatments'];
              foreach($treatments as $treatment):
              $tr_link = $treatment['link'];
              ?>
              <div class="treatment-grd-item-col">
                <div class="treatment-grd-item">
                  <?php if(!empty($treatment['image'])): ?>
                  <div class="treatment-grd-img-cntlr">
                    <div class="treatment-grd-img">
                      <?php echo cbv_get_image_tag($treatment['image']); ?>
                    </div>
                  </div>
                  <?php endif; ?>
                  <div class="treatment-grd-des">
                    <?php if(!empty($treatment['title'])) printf('<h4 class="treatment-grd-des-title fl-h5">%s</h4>',$treatment['title']);?>
                    <?php if(!empty($treatment['subtitle'])) printf('<h5 class="treatment-grd-des-subtitle">%s</h5>',$treatment['subtitle']);?>
                    <?php if(!empty($treatment['description'])) echo wpautop($treatment['description']); ?>
                    <?php if(is_array($tr_link) && !empty($tr_link['url'])) printf('<div class="abtis-intro-des-btn"><a class="cdc-btn" href="%s">%s</a></div>',$tr_link['url'],$tr_link['title']); ?>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php 
endif; 
$showhideblock = get_field('showhideblock', $thisID);
if($showhideblock):
$block = get_field('block', $thisID);
$blink = $block['link'];
?>

  <section class="about-intro-sec has-inline-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="abtis-img-text-row">
              <div class="abtis-img-text-row-inr">
                <div class="abtis-img-txt-col abtis-row-img">
                  <div class="abtis-row-img-inner">
                    <div class="abtis-row-main-img-cntrl">
                      <div class="abtis-row-main-img inline-bg" style="background-image: url(<?php echo cbv_get_image_src($block['image']); ?>);">
                      </div>
                    </div>
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
                    <?php if(!empty($block['subtitle'])) printf('<h2 class="fl-h4">%s</h2>',$block['subtitle']);?>
                    <?php if(!empty($block['description'])) echo wpautop($block['description']); ?>
                    <?php if(is_array($blink) && !empty($blink['url'])) printf('<div class="abtis-intro-des-btn"><a class="cdc-btn" href="%s">%s</a></div>',$blink['url'],$blink['title']); ?>
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
<?php
endif; 
$showhideteam = get_field('showhideteam', $thisID);
if($showhideteam):
$ourteam = get_field('ourteam', $thisID);
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
<?php 
endif;
$treatments = get_field('treatments', 'options');
if($treatments):
?>
<section class="referral-sec referral-sec-bg-color  treatment-sec">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="sec-entry-hdr-cntlr">
        <div class="sec-entry-hdr">
          <?php 
            if(!empty($treatments['title'])) printf('<h2 class="sec-entry-hdr-title fl-h4">%s</h2>', $treatments['title']); 
            if(!empty($treatments['description'])) echo wpautop($treatments['description']); 
          ?>               
        </div>
      </div>
      <?php if( !empty($treatments['form_sortcode']) ): ?>
      <div class="treatment-sec-cntlr">
        <div class="refferal-sec-contlr">
          <div class="contact-form-wrp clearfix">
            <?php echo do_shortcode($treatments['form_sortcode']); ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>
</section>
<?php
endif;
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