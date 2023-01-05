<?php 
$thisID = get_the_ID();
$banner = get_field('banner', $thisID);
$banner_bg = !empty($banner['image'])?cbv_get_image_src($banner['image']):banner_placeholder();
$page_titel = !empty($banner['title'])?$banner['title']:get_the_title($thisID);
$link_1 = isset($banner['link_1'])?$banner['link_1']:array();
$link_2 = isset($banner['link_2'])?$banner['link_2']:array();
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
              <?php if(!empty($link_2['url']) || !empty($link_1['url'])): ?>
              <div class="pg-banner-btns">
                <?php if(is_array($link_1) && !empty($link_1['url'])): ?>
                <div class="pg-banner-btn pg-banner-btn-01">
                  <?php printf('<a class="cdc-btn" href="%s">%s</a>',$link_1['url'],$link_1['title'] ); ?>
                </div>
                <?php endif; if(is_array($link_2) && !empty($link_2['url'])):?>
                <div class="pg-banner-btn pg-banner-btn-02">
                  <?php printf('<a class="cdc-trnsprnt-btn" href="%s">%s</a>',$link_2['url'],$link_2['title'] ); ?>
                </div>
                <?php endif; ?>
              </div>
             <?php endif; ?> 
          </div>
        </div>
      </div>
    </div>
  </section>