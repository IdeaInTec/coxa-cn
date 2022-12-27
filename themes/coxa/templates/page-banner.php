<?php 
$thisID = get_the_ID();
$banner = get_field('banner', $thisID);
$banner_bg = !empty($banner['image'])?cbv_get_image_src($banner['image']):banner_placeholder();
$custom_titel = $banner['title'];
$page_titel = !empty($custom_titel)?$custom_titel:get_the_title($thisID);
$link_1 = $banner['link_1'];
$link_2 = $banner['link_2'];

?>
<section class="page-banner">
  <div class="banner-black-bg"></div>
  <?php if( !empty($banner['video']) ): ?>
      <div class="bnr-vdo">
        <video id="bt-vdo" autoplay="true" muted="" loop>
          <source src="<?php echo $banner['video']; ?>" type="video/mp4">
          </video>
      </div>
    <?php else: ?>
      <?php if( !empty($banner_bg) ): ?>
      <div class="page-bnr-bg parallaxie" style="background-image: url('<?php echo $banner_bg; ?>')"></div>
      <?php endif;?>
    <?php endif; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pg-banner-cntlr">
            <div class="pg-banner-desc-cntlr">
              <?php if(!empty($banner['title'])) echo ('<h1 class="pg-banner-title fl-h3">'.$banner['title'].'</h1>'); ?>
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
              <div class="pg-banner-btns">
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>