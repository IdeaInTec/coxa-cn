<?php
/*Template Name: Work*/
get_header();
$thisID = get_the_ID();
?>
<?php get_template_part('templates/page', 'banner'); ?>
<?php get_template_part('templates/breadcrumbs'); 

$intro = get_field('Intro_sec', $thisID);
?>
<div class="work-page-con-cntlr">
  <?php if( $intro ): ?>
    <section class="work-intro-sec">
        <div class="work-intro-btm-skew" style="background-image: url('https://www.liveplaywork.com.au/redesign/wp-content/themes/lpw/assets/images/work-intro-btm-skew.png');"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="work-intro-sec-inr">
                        <div class="sec-entry-header">
                          <?php 
                            if( !empty($intro['title']) ) printf('<h2 class="sec-entry-header-title fl-h6">%s</h2>', $intro['title']); 
                            if( !empty($intro['description']) ) echo wpautop($intro['description']); 
                          ?>
                        </div>
                        <div class="work-intro-sec-btn">
                            <a class="fl-btn fl-black-transparent-btn" href="#" target="">Individual</a>
                            <a class="fl-btn fl-black-transparent-btn" href="#" target="">Community And Others</a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <?php endif; 
    $intro_in = get_field('intro_in', $thisID);
    if( $intro_in ):
    ?>
    <section class="individual-intro-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="individual-intro-sec-inr">
                        <div class="individual-intro-des">
                          <?php 
                            if( !empty($intro_in['title']) ) printf('<h2 class="individual-intro-des-title fl-h1">%s</h2>', $intro_in['title']); 
                            if( !empty($intro_in['description']) ) echo wpautop($intro_in['description']); 
                          ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php while ( have_rows('individual_content') ) : the_row(); ?>
      <?php 
      if( get_row_layout() == 'image_text' ){ 
      $fc_tagline = get_sub_field('fc_tagline');
      $fc_title = get_sub_field('fc_title');
      $fc_image = get_sub_field('fc_image');
      $imgsrc = cbv_get_image_src($fc_image);
      $fc_text = get_sub_field('fc_description');
      $fc_link = get_sub_field('fc_link');
      $fcdesign_type = get_sub_field('fcdesign_type');
      if( $fcdesign_type == 1 ):
      ?> 
      <section class="full-width-img-des-sec">
        <div class="lft-img-rgt-des-row" style="background: #ffede6;">
          <div class="lft-img-col">
            <?php if( !empty($imgsrc) ): ?>
            <div class="lft-img-cntlr">
              <div class="inline-bg lft-img-bg" style="background-image: url('<?php echo $imgsrc ?>');"></div>
            </div>
            <?php endif; ?>
          </div>
          <div class="rgt-des-col">
            <div class="rgt-des-cntlr">
            <?php 
              if( !empty($fc_tagline) ) printf('<h4 class="des-sub-title fl-h6">%s</h4>', $fc_tagline);
              if( !empty($fc_title) ) printf('<h3 class="des-title fl-h2">%s</h3>', $fc_title); 
              if( !empty($fc_text) ) echo wpautop($fc_text); 
              if( is_array($fc_link) && !empty($fc_link['url']) ) printf('<div class="rgt-des-btn-cntlr"><a href="%s" target="%s" class="fl-btn">%s</a></div>', $fc_link['url'], $fc_link['target'], $fc_link['title']);
            ?>
            </div>
          </div>
        </div>
      </section>
      <?php else: ?>
      <section class="full-width-img-des-sec full-lft-des-rgt-img">
        <div class="lft-img-rgt-des-row" style="background: #c1e8d5;">
          <div class="lft-img-col">
            <?php if( !empty($imgsrc) ): ?>
            <div class="lft-img-cntlr">
              <div class="inline-bg lft-img-bg" style="background-image: url('<?php echo $imgsrc ?>');"></div>
            </div>
            <?php endif; ?>
          </div>
          <div class="rgt-des-col">
            <div class="rgt-des-cntlr list-color-green">
            <?php 
              if( !empty($fc_tagline) ) printf('<h4 class="des-sub-title fl-h6">%s</h4>', $fc_tagline);
              if( !empty($fc_title) ) printf('<h3 class="des-title fl-h2">%s</h3>', $fc_title); 
              if( !empty($fc_text) ) echo wpautop($fc_text); 
              if( is_array($fc_link) && !empty($fc_link['url']) ) printf('<div class="rgt-des-btn-cntlr"><a href="%s" target="%s" class="fl-btn fl-green-btn">%s</a></div>', $fc_link['url'], $fc_link['target'], $fc_link['title']);
            ?>
            </div>
          </div>
        </div>
      </section>
      <?php endif; ?>
      <?php 
      }elseif( get_row_layout() == 'image_video_text' ){ 
      $fc_title = get_sub_field('fc_title');
      $fc_image = get_sub_field('fc_image');
      $imgsrc = cbv_get_image_src($fc_image);
      $fc_text = get_sub_field('fc_description');
      $fc_link = get_sub_field('fc_link');
      ?> 
      <section class="img-des-sec">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="lft-img-rgt-des-row" style="background: #30b371;">
                <div class="lft-img-col">
                  <?php if( !empty($imgsrc) ): ?>
                  <div class="lft-img-cntlr">
                    <div class="inline-bg lft-img-bg" style="background-image: url('<?php echo $imgsrc ?>');"></div>
                  </div>
                  <?php endif; ?>
                </div>
                <div class="rgt-des-col">
                  <div class="rgt-des-cntlr">
                    <?php
                      if( !empty($fc_title) ) printf('<h3 class="des-title fl-h6">%s</h3>', $fc_title); 
                      if( !empty($fc_text) ) echo wpautop($fc_text); 
                      if( is_array($fc_link) && !empty($fc_link['url']) ) printf('<div class="rgt-des-btn-cntlr"><a href="%s" target="%s" class="fl-btn fl-green-btn">%s</a></div>', $fc_link['url'], $fc_link['target'], $fc_link['title']);
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php 
      }elseif( get_row_layout() == 'gallery' ){ 
      $fc_title = get_sub_field('fc_title');
      $gallery_type = get_sub_field('gallery_type');
      $fc_galleries = get_sub_field('fc_gallery');
      if( $gallery_type == 'normal' ):
      ?>
      <section class="individual-gallery-sec">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="individual-gallery-sec-inr">
                <div class="individual-grids-sec-entry-hdr">
                <?php if( !empty($fc_title) ) printf('<h2 class="fl-h6 individual-grids-sec-entry-hdr-title">%s</h2>', $fc_title); ?>
                </div>
                <?php if( !empty($fc_galleries) ): ?>
                <div class="gallery-wrap clearfix">
                  <div class="gallery gallery-columns-4">
                    <?php foreach($fc_galleries as $fc_gallery): ?>
                    <figure class="gallery-item">
                      <div class="gallery-icon portrait">
                        <?php if( !empty($fc_gallery['image']) ): ?>
                        <div class="gallery-icon-img inline-bg" style="background: url('<?php echo cbv_get_image_src($fc_gallery['image']) ?>');"></div>
                        <?php echo cbv_get_image_tag($fc_gallery['image']); ?>
                        <?php endif; if( !empty($fc_gallery['title']) || !empty($fc_gallery['description']) ):?>
                        <div class="gallery-grd-des-cntlr">
                          <div class="gallery-grd-des-inr">
                            <div class="gallery-grd-des">
                              <?php if( !empty($fc_gallery['title']) ) printf('<h4 class="gallery-grd-des-title fl-h6">%s</h4>', $fc_gallery['title']); 
                              <?php if( !empty($fc_gallery['description']) ) echo wpautop($fc_gallery['description']); 
                              ?>
                            </div>                      
                          </div>
                        </div>
                        <?php endif; ?>
                      </div>
                    </figure>
                    <?php endforeach; ?>
                  </div>
                </div>   
                <?php endif; ?>       
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php else: ?>
      <section class="community-gallery-sec">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <?php if( !empty($fc_galleries) ): ?>
              <div class="community-gallery-sec-inr">          
                <div class="gallery-wrap clearfix">
                  <div class="gallery gallerySlider gallery-columns-4">
                    <?php foreach($fc_galleries as $fc_gallery): ?>
                    <figure class="gallery-item">
                      <div class="gallery-icon portrait">
                        <?php if( !empty($fc_gallery['image']) ): ?>
                        <div class="gallery-icon-img inline-bg" style="background: url('<?php echo cbv_get_image_src($fc_gallery['image']) ?>');"></div>
                        <?php echo cbv_get_image_tag($fc_gallery['image']) ?>
                        <?php endif; if( !empty($fc_gallery['title']) || !empty($fc_gallery['description']) ):?>
                        <div class="gallery-grd-des-cntlr">
                          <div class="gallery-grd-des-inr">
                            <div class="gallery-grd-des">
                            <?php 
                              if( !empty($fc_gallery['title']) ) printf('<h4 class="gallery-grd-des-title fl-h6">%s</h4>', $fc_gallery['title']);
                              if( !empty($fc_gallery['description']) ) echo wpautop($fc_gallery['description']); 
                            ?>
                            </div>                      
                          </div>
                        </div>
                        <?php endif; ?>
                      </div>
                    </figure>
                    <?php endforeach; ?>
                  </div>
                </div>
                <hr>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>
      <?php endif; ?>
      <?php 
      }elseif( get_row_layout() == 'testimonial' ){
      $fcdesign_type = get_sub_field('fcdesign_type');
      $fc_testimonials = get_sub_field('fc_testimonials');
      if( $fcdesign_type == '1' ):
        if( !empty($fc_testimonials) )
      ?>
      <section class="mbc-text-slider-ctlr text-color-red">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="mbc-text-slider-wrap">
                          <div class="mbc-text-slider">
                              <div class="mbc-slider-prev-nxt">
                                <span class="mbc-prev slick-arrow"></span>
                                <span class="mbc-nxt slick-arrow"></span>
                              </div>
                              <div class="mbc-text-slider-inr mbcTextSlider">
                                  <?php foreach( $fc_testimonials as $fc_testimonial ): ?>
                                  <div class="mbc-text-slider-item">
                                  <?php 
                                    if( !empty($fc_testimonial['fc_quote_text']) ) printf('<h2 class="mbc-text-slider-title fl-h2">%s</h2>',$fc_testimonial['fc_quote_text']);
                                    if( !empty($fc_testimonial['title']) ) printf('<strong> -%s</strong>',$fc_testimonial['fc_name']);
                                  ?>
                                  </div>
                                  <?php endforeach; ?>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <?php endif; ?>
      <?php else: 
        if( !empty($fc_testimonials) ):
      ?>
      <section class="mbc-text-slider-ctlr text-color-green">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="mbc-text-slider-wrap">
                          <div class="mbc-text-slider">
                              <div class="mbc-slider-prev-nxt">
                                <span class="mbc-prev slick-arrow"></span>
                                <span class="mbc-nxt slick-arrow"></span>
                              </div>
                              <div class="mbc-text-slider-inr mbcTextSlider2">
                              <?php foreach( $fc_testimonials as $fc_testimonial ): ?>
                                <div class="mbc-text-slider-item">
                                <?php 
                                  if( !empty($fc_testimonial['fc_quote_text']) ) printf('<h2 class="mbc-text-slider-title fl-h2">%s</h2>',$fc_testimonial['fc_quote_text']);
                                  if( !empty($fc_testimonial['title']) ) printf('<strong> -%s</strong>',$fc_testimonial['fc_name']);
                                ?>
                                </div>
                                <?php endforeach; ?>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <?php endif; ?>
      <?php endif; ?>
      <?php } ?>
    <?php endwhile; ?>
    <?php 
    $intro_commu = get_field('intro_commu', $thisID);
    if( $intro_commu ):
    ?>
    <section class="cmnty-intro-sec">
        <div class="cmnty-intro-top-skew" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/individual-sec-bg2.png');"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cmnty-intr-sec-inr">
                        <div class="cmnty-intro-des">
                          <?php 
                            if( !empty($intro_commu['title']) ) printf('<h2 class="cmnty-intro-des-title fl-h1">%s</h2>', $intro_commu['title']); 
                            if( !empty($intro_commu['description']) ) echo wpautop($intro_commu['description']); 
                          ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section class="full-width-img-des-sec full-lft-des-rgt-img">
      <div class="lft-img-rgt-des-row" style="background: #c1e8d5;">
        <div class="lft-img-col">
          <div class="lft-img-cntlr">
            <div class="inline-bg lft-img-bg" style="background-image: url('<?php echo THEME_URI ?>/assets/images/full-width-img-1.png');"></div>
          </div>
        </div>
        <div class="rgt-des-col">
          <div class="rgt-des-cntlr list-color-green">
            <h4 class="des-sub-title fl-h6">Community and others</h4>
            <h3 class="des-title fl-h2">What kinds of Work with others is most important for Your Best Life?…</h3>
            <ul>
              <li>Paid Work</li>
              <li>Volunteer Work</li>
              <li>Community Work</li>
              <li>Business & Professional Work</li>
              <li>Educational Work</li>
              <li>Team Work (Large Teams)</li>
              <li>Team Work (Small Teams)</li>
              <li>Leadership & Development</li>
              <li>Love & Relationships</li>
              <li>Social Hobbies</li>
            </ul>
            <div class="rgt-des-btn-cntlr">
              <a href="#" class="fl-btn fl-green-btn">Contact us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="img-des-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="lft-img-rgt-des-row" style="background: #30b371;">
              <div class="lft-img-col">
                <div class="lft-img-cntlr">
                  <div class="inline-bg lft-img-bg" style="background-image: url('<?php echo THEME_URI ?>/assets/images/full-width-img-1.png');"></div>
                </div>
              </div>
              <div class="rgt-des-col">
                <div class="rgt-des-cntlr">
                  <h3 class="des-title fl-h6">Veteran's & Families Sponsoring Disadvantaged Bali School Girls</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia atque omnis impedit quos magni, corrupti doloribus nemo deserunt assumenda ratione nulla fugiat, fuga magnam iste explicabo? Quo autem at molestias ipsum deleniti. Soluta deserunt ratione impedit dolore qui beatae unde.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="community-gallery-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="community-gallery-sec-inr">          
              <div class="gallery-wrap clearfix">
                <div class="gallery gallerySlider gallery-columns-4">
                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI ?>/assets/images/gallery-img-01.jpg');"></div>
                      <img src="<?php echo THEME_URI ?>/assets/images/gallery-img-01.jpg">
                      <div class="gallery-grd-des-cntlr">
                        <div class="gallery-grd-des-inr">
                          <div class="gallery-grd-des">
                            <h4 class="gallery-grd-des-title fl-h6">Image title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eros odio, dignissim ut nisi in, ultrices ipsum vehicula</p>
                          </div>                      
                        </div>
                      </div>
                    </div>
                  </figure>
    
                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI ?>/assets/images/gallery-img-02.jpg');"></div>
                      <img src="<?php echo THEME_URI ?>/assets/images/gallery-img-02.jpg">
                      <div class="gallery-grd-des-cntlr">
                        <div class="gallery-grd-des-inr">
                          <div class="gallery-grd-des">
                            <h4 class="gallery-grd-des-title fl-h6">Image title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eros odio, dignissim ut nisi in, ultrices ipsum vehicula interdum. Aenean maximus aliquam aliquet. Nam egestas purus eu metus pellentesque eleifend a sed augue. In id urna vel magna commodo tempor. Proin quis dictum arcu. Pellentesque ornare felis enim, a varius erat ultrices quis. Suspendisse feugiat congue rutrum. Suspendisse vitae vehicula mauris. In sed tortor ut quam ultrices feugiat.</p>
                          </div>                      
                        </div>
                      </div>
                    </div>
                  </figure>
    
                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI ?>/assets/images/gallery-img-03.jpg');"></div>
                      <img src="<?php echo THEME_URI ?>/assets/images/gallery-img-03.jpg">
                      <div class="gallery-grd-des-cntlr">
                        <div class="gallery-grd-des-inr">
                          <div class="gallery-grd-des">
                            <h4 class="gallery-grd-des-title fl-h6">Image title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eros odio, dignissim ut nisi in, ultrices ipsum vehicula interdum. Aenean maximus aliquam aliquet. Nam egestas purus eu metus pellentesque eleifend a sed augue. In id urna vel magna commodo tempor. Proin quis dictum arcu. Pellentesque ornare felis enim, a varius erat ultrices quis. Suspendisse feugiat congue rutrum. Suspendisse vitae vehicula mauris. In sed tortor ut quam ultrices feugiat.</p>
                          </div>                      
                        </div>
                      </div>
                    </div>
                  </figure>
    
                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI ?>/assets/images/gallery-img-04.jpg');"></div>
                      <img src="<?php echo THEME_URI ?>/assets/images/gallery-img-04.jpg">
                      <div class="gallery-grd-des-cntlr">
                        <div class="gallery-grd-des-inr">
                          <div class="gallery-grd-des">
                            <h4 class="gallery-grd-des-title fl-h6">Image title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eros odio, dignissim ut nisi in, ultrices ipsum vehicula interdum. Aenean maximus aliquam aliquet. Nam egestas purus eu metus pellentesque eleifend a sed augue. In id urna vel magna commodo tempor. Proin quis dictum arcu. Pellentesque ornare felis enim, a varius erat ultrices quis. Suspendisse feugiat congue rutrum. Suspendisse vitae vehicula mauris. In sed tortor ut quam ultrices feugiat.</p>
                          </div>                      
                        </div>
                      </div>
                    </div>
                  </figure>
                  
                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI ?>/assets/images/gallery-img-04.jpg');"></div>
                      <img src="<?php echo THEME_URI ?>/assets/images/gallery-img-04.jpg">
                      <div class="gallery-grd-des-cntlr">
                        <div class="gallery-grd-des-inr">
                          <div class="gallery-grd-des">
                            <h4 class="gallery-grd-des-title fl-h6">Image title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eros odio, dignissim ut nisi in, ultrices ipsum vehicula interdum. Aenean maximus aliquam aliquet. Nam egestas purus eu metus pellentesque eleifend a sed augue. In id urna vel magna commodo tempor. Proin quis dictum arcu. Pellentesque ornare felis enim, a varius erat ultrices quis. Suspendisse feugiat congue rutrum. Suspendisse vitae vehicula mauris. In sed tortor ut quam ultrices feugiat.</p>
                          </div>                      
                        </div>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="img-des-sec img-des-btm-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="lft-img-rgt-des-row" style="background: #30b371;">
              <div class="lft-img-col">
                <div class="lft-img-cntlr">
                  <div class="inline-bg lft-img-bg" style="background-image: url('<?php echo THEME_URI ?>/assets/images/full-width-img-1.png');"></div>
                </div>
              </div>
              <div class="rgt-des-col">
                <div class="rgt-des-cntlr">
                  <h3 class="des-title fl-h6">Veteran's & Families Sponsoring Disadvantaged Bali School Girls</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia atque omnis impedit quos magni, corrupti doloribus nemo deserunt assumenda ratione nulla fugiat, fuga magnam iste explicabo? Quo autem at molestias ipsum deleniti. Soluta deserunt ratione impedit dolore qui beatae unde.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="community-gallery-sec community-btm-gallery-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="community-gallery-sec-inr">          
              <div class="gallery-wrap clearfix">
                <div class="gallery gallerySlider2 gallery-columns-4">
                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI ?>/assets/images/gallery-img-01.jpg');"></div>
                      <img src="<?php echo THEME_URI ?>/assets/images/gallery-img-01.jpg">
                      <div class="gallery-grd-des-cntlr">
                        <div class="gallery-grd-des-inr">
                          <div class="gallery-grd-des">
                            <h4 class="gallery-grd-des-title fl-h6">Image title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eros odio, dignissim ut nisi in, ultrices ipsum vehicula</p>
                          </div>                      
                        </div>
                      </div>
                    </div>
                  </figure>
    
                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI ?>/assets/images/gallery-img-02.jpg');"></div>
                      <img src="<?php echo THEME_URI ?>/assets/images/gallery-img-02.jpg">
                      <div class="gallery-grd-des-cntlr">
                        <div class="gallery-grd-des-inr">
                          <div class="gallery-grd-des">
                            <h4 class="gallery-grd-des-title fl-h6">Image title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eros odio, dignissim ut nisi in, ultrices ipsum vehicula interdum. Aenean maximus aliquam aliquet. Nam egestas purus eu metus pellentesque eleifend a sed augue. In id urna vel magna commodo tempor. Proin quis dictum arcu. Pellentesque ornare felis enim, a varius erat ultrices quis. Suspendisse feugiat congue rutrum. Suspendisse vitae vehicula mauris. In sed tortor ut quam ultrices feugiat.</p>
                          </div>                      
                        </div>
                      </div>
                    </div>
                  </figure>
                  
                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI ?>/assets/images/gallery-img-01.jpg');"></div>
                      <img src="<?php echo THEME_URI ?>/assets/images/gallery-img-01.jpg">
                      <div class="gallery-grd-des-cntlr">
                        <div class="gallery-grd-des-inr">
                          <div class="gallery-grd-des">
                            <h4 class="gallery-grd-des-title fl-h6">Image title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eros odio, dignissim ut nisi in, ultrices ipsum vehicula</p>
                          </div>                      
                        </div>
                      </div>
                    </div>
                  </figure>
    
                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI ?>/assets/images/gallery-img-03.jpg');"></div>
                      <img src="<?php echo THEME_URI ?>/assets/images/gallery-img-03.jpg">
                      <div class="gallery-grd-des-cntlr">
                        <div class="gallery-grd-des-inr">
                          <div class="gallery-grd-des">
                            <h4 class="gallery-grd-des-title fl-h6">Image title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eros odio, dignissim ut nisi in, ultrices ipsum vehicula interdum. Aenean maximus aliquam aliquet. Nam egestas purus eu metus pellentesque eleifend a sed augue. In id urna vel magna commodo tempor. Proin quis dictum arcu. Pellentesque ornare felis enim, a varius erat ultrices quis. Suspendisse feugiat congue rutrum. Suspendisse vitae vehicula mauris. In sed tortor ut quam ultrices feugiat.</p>
                          </div>                      
                        </div>
                      </div>
                    </div>
                  </figure>
    
                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI ?>/assets/images/gallery-img-04.jpg');"></div>
                      <img src="<?php echo THEME_URI ?>/assets/images/gallery-img-04.jpg">
                      <div class="gallery-grd-des-cntlr">
                        <div class="gallery-grd-des-inr">
                          <div class="gallery-grd-des">
                            <h4 class="gallery-grd-des-title fl-h6">Image title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eros odio, dignissim ut nisi in, ultrices ipsum vehicula interdum. Aenean maximus aliquam aliquet. Nam egestas purus eu metus pellentesque eleifend a sed augue. In id urna vel magna commodo tempor. Proin quis dictum arcu. Pellentesque ornare felis enim, a varius erat ultrices quis. Suspendisse feugiat congue rutrum. Suspendisse vitae vehicula mauris. In sed tortor ut quam ultrices feugiat.</p>
                          </div>                      
                        </div>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>          
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="mbc-text-slider-ctlr text-color-green">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mbc-text-slider-wrap">
                        <div class="mbc-text-slider">
                            <div class="mbc-slider-prev-nxt">
                              <span class="mbc-prev slick-arrow"></span>
                              <span class="mbc-nxt slick-arrow"></span>
                            </div>
                            <div class="mbc-text-slider-inr mbcTextSlider2">
                                <div class="mbc-text-slider-item">
                                    <h2 class="mbc-text-slider-title fl-h2">“Regardless of where we operate, we deliver high standards of work that gives our clients the right results the first time.”</h2>
                                    <strong> - cLIENT NAME </strong>
                                </div>
                                <div class="mbc-text-slider-item">
                                    <h2 class="mbc-text-slider-title fl-h2">“Regardless of where we operate, we deliver high standards of work that gives our clients the right results the first time.”</h2>
                                    <strong> - cLIENT NAME </strong>
                                </div>
                                <div class="mbc-text-slider-item">
                                    <h2 class="mbc-text-slider-title fl-h2">“Regardless of where we operate, we deliver high standards of work that gives our clients the right results the first time.”</h2>
                                    <strong> - cLIENT NAME </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>

<?php
$showhide_contact = get_field('showhide_contact', HOMEID);
if($showhide_contact): 
  $contactsec = get_field('contactsec', HOMEID); 
  if($contactsec ): 
?>
<section class="hm-contact-form-sec-wrp">
	<div class="container">
	  <div class="row">
	    <div class="col-md-12">
	      <div class="contact-form-block clearfix">
	        <div class="contact-form-dsc-wrp">
	          <div class="sec-entry-header">
	          	<?php  
	        		if( !empty($contactsec['title']) ) printf('<h2 class="sec-entry-header-title fl-h6">%s</h2>', $contactsec['title']); 
	        	?>
	            <p>
            	<?php 
            		if( !empty($contactsec['description']) ) printf('%s', $contactsec['description']); 
            		$email = get_field('emailaddres', 'options');
            		if( !empty($email) ) printf('<a href="mailto:%s"> e: %s</a>', $email, $email);
            	?>
	            </p>
	          </div>

	          <?php 
	          	$shortcode = $contactsec['shortcode'];
	          	if( !empty($shortcode) ): 
	          ?>
	          <div class="contact-form-wrp clearfix">
	            <div class="wpforms-container">
	              <?php echo do_shortcode($shortcode); ?>
	            </div>
	          </div>
	      	  <?php endif; ?>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</section>
<?php endif; endif;?>

<?php get_footer(); ?>