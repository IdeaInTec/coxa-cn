<?php 
/*Template Name: Gallery*/
get_header();
$thisID = get_the_ID(); 
get_template_part('templates/page', 'banner');
$selectgallery = get_field('select_gallery', $thisID);
if( empty($selectgallery) ){
  $args = array(
    'numberposts' => -1,
    'post_type'   => 'galleries'
  );
  $selectgallery = get_posts( $args );
}
?>
<div class="gallery-page-con-cntlr">
<section class="practice-gallery why-choose-sec galler-sec">
<?php if( $selectgallery ): ?>
<div class="filter-button-cntlr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="filte-button">
          <ul class="reset-list">
            <li class="type-all active"><a href="#" data-filter="all">all</a></li>
            <?php 
            foreach( $selectgallery as $gallery ): 
            $afterbefore_images = get_field('afterbefore_images', $gallery->ID);
            if($afterbefore_images){
            ?>
              <li class="type-before-after"><a href="#" data-filter="<?php echo $gallery->post_name; ?>"><?php echo $gallery->post_title; ?></a></li>
            <?php }else{?>
              <li class="type-normal"><a href="#" data-filter="<?php echo $gallery->post_name; ?>"><?php echo $gallery->post_title; ?></a></li>
            <?php } endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<div class="practice-gallery-grids-cntlr">
  <div class="practice-gallery-grids">
    <?php 
      foreach( $selectgallery as $gallery ):
        $afterbefore_images = get_field('afterbefore_images', $gallery->ID);
        if(!$afterbefore_images){
        $galleries = get_field('gallery', $gallery->ID);
        if( !empty($galleries) ){
        foreach( $galleries as $galID ){
        $gimage_src = cbv_get_image_src($galID);
    ?>
    <div class="practice-gallery-grid-col <?php echo $gallery->post_name; ?>" data-class="<?php echo $gallery->post_name; ?>">
      <div class="practice-gallery-grid-item">
        <div class="practice-gallery-grid-img-cntlr">
          <a href="<?php echo $gimage_src; ?>" class="overlay-link" data-fancybox="images"></a>
          <div class="practice-gallery-grid-img inline-bg" style="background-image: url(<?php echo $gimage_src; ?>);"></div>
        </div>
        <div class="practice-gallery-grid-des">
          <h3 class="practice-gallery-grid-title fl-h6"><a href="#">Image description</a></h3>
        </div>
      </div>
    </div>
    <?php } } } ?>
    <?php endforeach; ?>
  </div>
</div>

<?php 
if( $selectgallery ): 
foreach( $selectgallery as $gallery ): 
$afterbefore_images = get_field('afterbefore_images', $gallery->ID);
if($afterbefore_images){
?>
<div class="after-before-grids-cntlr <?php echo $gallery->post_name; ?>">
  <div class="after-before-grids">
  <?php
      $ab_images = get_field('ab_images', $gallery->ID);
      if( !empty($ab_images) ){
      foreach( $ab_images as $ab_image ){
      $after_image = !empty($ab_image['after_image'])?$ab_image['after_image']:'';
      $before_image = !empty($ab_image['before_image'])?$ab_image['before_image']:'';
  ?>
  <div class="after-before-grd-item-col width-50 <?php echo $gallery->post_name; ?>">
    <div class="after-before-grd-item">
      <div class="after-before-img-cntlr">
        <div class="afterBeforeEffect-bx afterBeforeEffect">
          <?php 
            if( !empty($after_image) ) echo cbv_get_image_tag($after_image); 
            if( !empty($before_image) ) echo cbv_get_image_tag($before_image); 
          ?>
        </div>
      </div>
      <div class="after-before-des">
        <h6 class="after-before-des-title fl-h6"><a href="#">Image description</a></h6>
      </div>
    </div>
  </div>
  <?php } } ?>
  </div>
</div>
  <?php } endforeach; ?>
<?php endif; ?>

</section>

<?php 
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
                    <?php if(!empty($promo['description'])) echo wpautop($promo['description']); ?>
                  </div>
                </div>
                <div class="cta-btn-ctlr">
                  <?php if(is_array($promo_link) && !empty($promo_link['url'])): ?>
                  <div class="cta-btn">
                    <?php printf('<a class="cdc-btn" href="%s" target="%s">%s</a>',$promo_link['url'],$promo_link['target'],$promo_link['title'] ); ?>
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
        <?php printf('<a class="cdc-btn" href="%s" target="%s">%s</a>',$link['url'],$link['target'],$link['title']); ?>
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