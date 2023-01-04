<?php 
	get_header(); 
  while( have_posts()): the_post();
  $thisID = get_the_ID();
	$banner = get_field('banner', $thisID);
$banner_bg = !empty($banner['image'])?cbv_get_image_src($banner['image']):banner_placeholder();
$page_titel = !empty($banner['title'])?$banner['title']:get_the_title($thisID);
?>

<section class="page-banner <?php echo (!empty($banner['description'])? '': 'diamond-module-none'); ?>">
  <div class="banner-black-bg"></div>
      <?php if( !empty($banner_bg) ): ?>
      <div class="page-bnr-bg parallaxie" style="background-image: url('<?php echo $banner_bg; ?>')"></div>
      <?php endif;?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pg-banner-cntlr">
            <div class="pg-banner-desc-cntlr">
              <h1 class="pg-banner-title fl-h3"><?php echo ($page_titel); ?></h1>
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
              <?php if(!empty($banner['description'])) echo ('<div class="pg-banner-desc">'.wpautop($banner['description']).'</div>'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>


<div class="default-page-con-cntlr">
  <section class="privacy-policy-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="privacy-plcy-sec-inr">
            <div class="privacy-plcy-sec-cntlr">
              <div class="privacy-plcy-des">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


<?php endwhile; get_footer(); ?>
