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
                            if( !empty($intro['title']) ) printf('<h2 class="individual-intro-des-title fl-h1">%s</h2>', $intro['title']); 
                            if( !empty($intro['description']) ) echo wpautop($intro['description']); 
                          ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section class="full-width-img-des-sec">
      <div class="lft-img-rgt-des-row" style="background: #ffede6;">
        <div class="lft-img-col">
          <div class="lft-img-cntlr">
            <div class="inline-bg lft-img-bg" style="background-image: url('<?php echo THEME_URI ?>/assets/images/full-width-img-1.png');"></div>
          </div>
        </div>
        <div class="rgt-des-col">
          <div class="rgt-des-cntlr">
            <h4 class="des-sub-title fl-h6">Individual</h4>
            <h3 class="des-title fl-h2">We All have Strengths & Weaknesses. What can you improve for Your Best Life?</h3>
            <ul>
              <li>Self Care, Health & Fitness</li>
              <li>Education</li>
              <li>Friends, Family, Community & Children</li>
              <li>Self Awareness</li>
              <li>Self Esteem & Confidence</li>
              <li>Leadership</li>
              <li>Communication</li>
              <li>Balancing, Boundaries and Prioritising.</li>
            </ul>
            <div class="rgt-des-btn-cntlr">
              <a href="#" class="fl-btn">Contact us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="individual-gallery-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="individual-gallery-sec-inr">
              <div class="individual-grids-sec-entry-hdr">
                <h2 class="fl-h6 individual-grids-sec-entry-hdr-title">Gallery</h2>
              </div>
              <div class="gallery-wrap clearfix">
                <div class="gallery gallery-columns-4">
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
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI ?>/assets/images/gallery-img-05.jpg');"></div>
                      <img src="<?php echo THEME_URI ?>/assets/images/gallery-img-05.jpg">
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
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI ?>/assets/images/gallery-img-06.jpg');"></div>
                      <img src="<?php echo THEME_URI ?>/assets/images/gallery-img-06.jpg">
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
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI ?>/assets/images/gallery-img-07.jpg');"></div>
                      <img src="<?php echo THEME_URI ?>/assets/images/gallery-img-07.jpg">
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
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI ?>/assets/images/gallery-img-08.jpg');"></div>
                      <img src="<?php echo THEME_URI ?>/assets/images/gallery-img-08.jpg">
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
    <?php 
    $intro_in = get_field('intro_in', $thisID);
    if( $intro_in ):
    ?>
    <section class="cmnty-intro-sec">
        <div class="cmnty-intro-top-skew" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/individual-sec-bg2.png');"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cmnty-intr-sec-inr">
                        <div class="cmnty-intro-des">
                          <?php 
                            if( !empty($intro['title']) ) printf('<h2 class="cmnty-intro-des-title fl-h1">%s</h2>', $intro['title']); 
                            if( !empty($intro['description']) ) echo wpautop($intro['description']); 
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