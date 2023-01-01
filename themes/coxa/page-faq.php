<?php 
/*Template Name: FAQ Overview*/
get_header(); 
$thisID = get_the_ID();
?>
<?php get_template_part('templates/page', 'banner'); ?>
<div class="faq-page-con-cntlr">
  <?php 
  $intro = get_field('intro', $thisID);
  ?>
  <section class="faq-content-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="faq-content-sec-inr">
            <div class="sec-entry-hdr-cntlr">
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
              <?php 
                $terms = get_field('select_category', $thisID);
                if( empty($terms) ){
                  $terms = get_terms( array(
                      'taxonomy' => 'faq_cat',
                      'hide_empty' => true,
                  ) );
                }
              ?>                    
              </div>
              <?php if( !empty($terms) ): ?>
              <div class="fees-tab">
                <div class="fees-tab-hdr show-sm">
                  <h6 class="fl-h6 fees-tab-title">Navigate to...</h6>
                </div>
                <div class="fees-tab-inr">
                  <div class="fees-tab-button show-sm">
                    <span>Select faq</span>
                  </div>
                  <ul class="reset-list">
                    <?php foreach( $terms as $term ): ?>
                    <li><a href="#<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            <?php endif; ?>
            </div>
            <div class="faq-grids">
              <?php if( !empty($terms) ): $x = 0; foreach( $terms as $term ): $x++; ?>
              <div class="faq-grid-item-col" id="<?php echo $term->slug; ?>">
                <h3 class="faq-grd-title fl-h5"><?php echo $term->name; ?></h3>
                <?php
                  $args = array(
                    'post_type' => 'faq',
                    'tax_query' => array(
                      array(
                        'taxonomy'  => 'faq_cat',
                        'field' => 'term_id',
                        'terms' => $term->term_id
                      )
                    )
                  );
                  $faq_loop = new WP_Query($args);
                  if($faq_loop->have_posts()):
                ?>
                <div class="faq-grd-cntlr">
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
                <?php endif; wp_reset_postdata();?> 
              </div>
              <?php if( $x == 3 ): ?>
                <?php 
                  $promo1 = get_field('promo1', $thisID); 
                  $promo1_link = $promo1['link'];
                  if(!empty($promo1['title']) && !empty($promo1['description']) && !empty($promo1_link['url'])):
                  ?>
                  <div class="faq-grid-item-col" >
                    <div class="cta-module-cntlr">
                      <div class="cta-module-wrp parallaxie" style="background-image: url(<?php echo cbv_get_image_src($promo1['bg_image']); ?>);">
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
                              <?php if(!empty($promo1['title'])) echo('<h2 class="cta-module-des-title fl-h2">'. $promo1['title'] .'</h2>'); ?>
                              <?php echo wpautop($promo1['description']); ?>
                            </div>
                          </div>
                          <div class="cta-btn-ctlr">
                            <?php if(is_array($promo1_link) && !empty($promo1_link['url'])): ?>
                            <div class="cta-btn">
                              <?php printf('<a class="cdc-btn" href="%s">%s</a>',$promo1_link['url'],$promo1_link['title'] ); ?>
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endif; 
                  endif; 
                  endforeach;                
                  $promo2 = get_field('promo2', $thisID); 
                  $promo2_link = $promo2['link'];
                  if(!empty($promo2['title']) && !empty($promo2['description']) && !empty($promo2_link['url'])):
              ?>
                <div class="faq-grid-item-col" >
                  <div class="cta-module-cntlr">
                    <div class="cta-module-wrp parallaxie" style="background-image: url(<?php echo cbv_get_image_src($promo2['bg_image']); ?>);">
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
                            <?php if(!empty($promo2['title'])) echo('<h2 class="cta-module-des-title fl-h2">'. $promo2['title'] .'</h2>'); ?>
                            <?php echo wpautop($promo2['description']); ?>
                          </div>
                        </div>
                        <?php if(is_array($promo2_link) && !empty($promo2_link['url'])): ?>
                        <div class="cta-btn-ctlr">
                          <div class="cta-btn">
                            <?php printf('<a class="cdc-btn" href="%s">%s</a>',$promo2_link['url'],$promo2_link['title'] ); ?>
                          </div>
                      </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
              <?php else: ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php 
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
<?php get_footer(); ?>