<?php 
$thisID = get_the_ID();
$banner = get_field('banner', $thisID);
$desktop_banner = !empty($banner['afbeelding'])?cbv_get_image_src($banner['afbeelding']):banner_placeholder();
$mobiel_banner = !empty($banner['mobiel_afbeelding'])?cbv_get_image_src($banner['mobiel_afbeelding']):banner_placeholder();
$custom_titel = get_field('custom_page_titel', $thisID);
$page_titel = !empty($custom_titel)?$custom_titel:get_the_title($thisID);

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