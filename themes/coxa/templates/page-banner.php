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
  <?php get_template_part('templates/banner-social', 'media'); ?>
  <div class="page-banner-wrap">
    <div class="page-bnr-overlay"></div>
    <?php if( !empty($banner['upload_video']) ): ?>
      <div class="bnr-vdo">
        <video id="bt-vdo" autoplay="true" muted="" loop>
          <source src="<?php echo $banner['upload_video']; ?>" type="video/mp4">
          </video>
      </div>
    <?php else: ?>
      <?php if( !empty($desktop_banner) ): ?>
      <div class="page-banner-bg inline-bg hide-xs" style="background-image: url('<?php echo $desktop_banner; ?>')"></div>
      <?php endif; if( !empty($mobiel_banner) ):?>
      <div class="page-banner-bg inline-bg show-xs" style="background-image: url('<?php echo $mobiel_banner; ?>')"></div>
      <?php endif; ?>
    <?php endif; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-banner-cntlr">
            <h1 class="fl-h1-54 page-banner-title" data-aos="fade-up4" data-aos-delay="200"><?php echo $page_titel; ?></h1>
            <div class="breadcrumb-cntlr hide-sm" data-aos="fade-up5" data-aos-delay="300">
              <ul class="reset-list clearfix">
                <li class="home">
                  <a href="<?php cbv_site_url(); ?>">
                    <span class="item"><?php _e('Home', 'printout'); ?></span>
                  </a>
                </li>
                <li class="active">
                  <span><?php the_title(); ?></span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="page-banner">
  <div class="banner-black-bg"></div>
  <div class="page-bnr-bg parallaxie" style="background-image: url(assets/images/about-pg-banner-bg.jpg);"></div>
  <div class="bnr-vdo d-none">
    <video id="bt-vdo" autoplay="true" muted="" loop>
      <source src="assets/images/videos/placeholder-video.mp4" type="video/mp4">
      </video>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pg-banner-cntlr">
            <div class="pg-banner-desc-cntlr">
              <h1 class="pg-banner-title fl-h3">About Us</h1>
              <div class="diamond-module">
                <ul class="reset-list">
                  <li>
                    <i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
                  </li>
                  <li>
                    <i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
                  </li>
                  <li>
                    <i><img src="assets/images/sec-title-diamond.svg" alt=""></i>
                  </li>
                </ul>
              </div> 
              <div class="pg-banner-desc">
                <p>Experts in Dentistry for over 30 years</p>
              </div>
              <div class="pg-banner-btns">
                <div class="pg-banner-btn pg-banner-btn-01">
                  <a class="cdc-btn" href="#">Contact Us</a>
                </div>
                <div class="pg-banner-btn pg-banner-btn-02">
                  <a class="cdc-trnsprnt-btn" href="#">Our Practice</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>