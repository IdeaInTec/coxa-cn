<?php 
/*Template Name: New Patients*/
get_header(); 
$thisID = get_the_ID();
get_template_part('templates/page', 'banner');
?>
<div class="patient-page-con-cntlr">       
  <section class="about-intro-sec has-inline-bg double-image-module">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="abtis-img-text-row abtis-lft-img-row">
              <div class="abtis-img-text-row-inr">
                <div class="abtis-img-txt-col abtis-row-img">
                  <div class="abtis-row-img-inner">
                    <img class="single-image"src="<?php echo THEME_URI; ?>/assets/images/about-us-intro-img-02.png" alt="">
                    <div class="double-image">
                      <img class="double-image-main" src="<?php echo THEME_URI; ?>/assets/images/about-us-intro-img-02.png" alt="">
                      <img class="double-image-sub" src="<?php echo THEME_URI; ?>/assets/images/about-us-intro-img-03.png" alt="">
                    </div>
                    <div class="abtis-row-main-img-cntrl">
                      <div class="abtis-row-main-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/about-us-intro-mn-img-01.jpg);">
                      </div>
                    </div>
                    <div class="abtis-row-sub-img-cntlr">
                      <div class="abtis-row-sub-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images//about-us-intro-img-03.png);">
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
                    <h2 class="fl-h4">New Patients Join Today!</h2>
                    <p>Fermentum et tristique dictumst ipsum dolor turpis arcu nibh integer. Mauris volutpat dictum cras sagittis leo platea tincidunt. Scelerisque turpis tortor, purus nec eget mauris tempor lacus. Varius amet egestas cursus quam proin magna varius sit. Dui ut in massa nibh ut. Commodo et sapien semper imperdiet dolor nunc id sit consectetur. Fames amet, turpis in at in senectus, in felis amet euismod vitae potenti praesents.</p>
                    <p>Aenean in sed mi malesuada quis purus facilisis vel senectus. Purus aliquet consequat dignissim aliquam bibendum pulvinar faucibus et enim. Sapien faucibus mattis quis nunc vulputate habitant scelerisque. Non tincidunt enim adipiscing lectus euismod turpis vel non massa, ultricies condimentum dui.</p>
                    <div class="pm-grd-btns-cntlr">
                      <div class="pm-grd-btn pm-grd-btn-01">
                        <a class="cdc-btn" href="#">Online Registration</a>
                      </div>
                      <div class="pm-grd-btn pm-grd-btn-02">
                        <a class="cdc-trnsprnt-btn" href="#">Meet Our Team</a>
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
<?php 
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
<?php 
endif; 
$showhidepromo = get_field('showhidepromo', $thisID); 
if($showhidepromo):
  $promo = get_field('promo', $thisID); 
  $bg_image = !empty($promo['bg_image'])?cbv_get_image_src($promo['bg_image']):'';
  $promo_link = $promo['link'];
?>
<section class="cta-section">
<div class="container-lg">
  <div class="row">
    <div class="col-md-12">
      <div class="cta-module-cntlr">
        <div class="cta-module-wrp parallaxie" style="background-image: url(<?php echo $bg_image; ?>);">
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
				<?php 
					if(!empty($promo['title'])) printf('<h2 class="cta-module-des-title fl-h2">%s</h2>', $promo['title']); 
					if(!empty($promo['description'])) echo wpautop($promo['description']);
				?>
              </div>
            </div>
            <?php if(is_array($promo_link) && !empty($promo_link['url'])) printf('<div class="cta-btn-ctlr"><div class="cta-btn"><a class="cdc-btn" href="%s">%s</a></div></div>',$promo_link['url'],$promo_link['title'] ); ?>
          </div>
        </div>
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