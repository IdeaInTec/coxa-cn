<?php if( is_woo() ) echo '</div>'; ?>

<?php 
  $logoID = get_field('ftlogo', 'options');
  $address = get_field('address', 'options');
  $gurl = get_field('gurl', 'options');
  $gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
  $email = get_field('emailadres', 'options');
  $telefoon = get_field('telefoon', 'options');
  $copyright_text = get_field('copyright_text', 'options');
?>
  <footer class="footer-wrp">
    <div class="sec-btm-bdr">
      <ul class="reset-list">
        <li style="background: #FF4989;"></li>
        <li style="background: #FF9B4C;"></li>
        <li style="background: #39B76B;"></li>
        <li style="background: #339F95;"></li>
        <li style="background: #8E3EFC;"></li>
      </ul>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="ftr-top-cntlr">
              <?php if( !empty($logoID) ): ?>
              <div class="ftr-top-col ftr-top-col-01">
                <div class="ftr-logo">
                  <a href="<?php cbv_site_url(); ?>">
                    <?php echo cbv_get_image_tag($logoID); ?>
                  </a>
                </div>
              </div>
              <?php endif; ?>

              <div class="ftr-top-col ftr-top-col-02">
                <h6 class="fl-h6 ftr-top-col-title"><?php echo _e('Navigatie','printout') ?></h6>
                <div class="ftr-top-menu xs-toggle-menu">
                  <?php 
                    $mmenuOptions = array( 
                        'theme_location' => 'cbv_footer_menu_1', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $mmenuOptions ); 
                  ?>
                </div>
              </div>
              <div class="ftr-top-col ftr-top-col-03">
                <h6 class="fl-h6 ftr-top-col-title"><?php echo _e('Shop','printout') ?></h6>
                <div class="ftr-top-menu xs-toggle-menu">
                  <?php 
                    $mmenuOptions = array( 
                        'theme_location' => 'cbv_footer_menu_2', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $mmenuOptions ); 
                  ?>
                </div>
              </div>
              <div class="ftr-top-col ftr-top-col-04">
                <h6 class="fl-h6 ftr-top-col-title"><?php echo _e('Account','printout') ?></h6>
                <div class="ftr-top-menu xs-toggle-menu">
                  <?php 
                    $mmenuOptions = array( 
                        'theme_location' => 'cbv_footer_menu_3', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $mmenuOptions ); 
                  ?>
                </div>
              </div>
              <div class="ftr-top-col ftr-top-col-05">
                <h6 class="fl-h6 ftr-top-col-title"><?php echo _e('Contact','printout') ?></h6>
                <div class="ftr-contacts xs-toggle-menu">
                  <ul class="reset-list">
                    <?php if( !empty($telefoon) ){ ?>
                    <li>
                      <div class="ftr-contact-col ftr-contact-tel">
                        <a href="tel:<?php echo phone_preg($telefoon); ?>">
                          <i>
                            <svg class="ftr-phone-icon" width="16" height="22" viewBox="0 0 16 22" fill="#3F3F3F">
                              <use xlink:href="#ftr-phone-icon"></use>
                            </svg>
                          </i>
                          <span><?php echo $telefoon; ?></span>
                        </a>
                      </div>
                    </li>
                    <?php } if( !empty($email) ){ ?>
                    <li>
                      <div class="ftr-contact-col ftr-contact-mail">
                        <a href="mailto:<?php echo $email ?>">
                          <i>
                            <svg class="ftr-mail-icon" width="24" height="18" viewBox="0 0 24 18" fill="#3F3F3F">
                              <use xlink:href="#ftr-mail-icon"></use>
                            </svg>
                          </i>
                          <span><?php echo $email ?></span>
                        </a>
                      </div>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
              <?php  
                $social_media = get_field('social_media', 'options');
                if($social_media):
              ?>
              <div class="ftr-top-col ftr-top-col-06">
                <div class="ftr-socials">
                  <ul class="reset-list">
                    <?php if( !empty($social_media['facebook_url']) ) { ?>
                    <li>
                      <a href="<?php echo $social_media['facebook_url']; ?>" target="_blank">
                        <i>
                          <svg class="facebook-icon" width="24" height="24" viewBox="0 0 24 24" fill="#3F3F3F">
                            <use xlink:href="#facebook-icon"></use>
                          </svg>
                        </i>
                      </a>
                    </li>
                    <?php } if( !empty($social_media['linkedin_url']) ) { ?>
                    <li>
                      <a href="<?php echo $social_media['linkedin_url']; ?>" target="_blank">
                        <i>
                          <svg class="likedin-icon" width="24" height="24" viewBox="0 0 24 24" fill="#3F3F3F">
                            <use xlink:href="#likedin-icon"></use>
                          </svg>
                        </i>
                      </a>
                    </li>
                    <?php } if( !empty($social_media['instagram_url']) ) { ?>
                    <li>
                      <a href="<?php echo $social_media['instagram_url']; ?>" target="_blank">
                        <i>
                          <svg class="instagram-icon" width="24" height="24" viewBox="0 0 24 24" fill="#3F3F3F">
                            <use xlink:href="#instagram-icon"></use>
                          </svg>
                        </i>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
              <?php endif; ?>
            </div>
            <div class="payment-cntlr">
              <div class="payment-lft">
                <ul class="reset-list">
                  <li>
                    <div class="payment-logo">
                      <img src="<?php echo THEME_URI; ?>/assets/images/payment-logo-01.png" alt="">
                    </div>
                  </li>
                  <li>
                    <div class="payment-logo">
                      <img src="<?php echo THEME_URI; ?>/assets/images/payment-logo-02.png" alt="">
                    </div>
                  </li>
                  <li>
                    <div class="payment-logo">
                      <img src="<?php echo THEME_URI; ?>/assets/images/payment-logo-03.png" alt="">
                    </div>
                  </li>
                  <li>
                    <div class="payment-logo">
                      <img src="<?php echo THEME_URI; ?>/assets/images/payment-logo-04.png" alt="">
                    </div>
                  </li>
                  <li>
                    <div class="payment-logo">
                      <img src="<?php echo THEME_URI; ?>/assets/images/payment-logo-05.png" alt="">
                    </div>
                  </li>
                </ul>
              </div>
              <?php 
              $images = get_field('voettekst_galerij','options');
              if( $images ): ?>
              <div class="payment-rgt">
                <ul class="reset-list">
                  <?php foreach( $images as $image ): ?>
                  <li>
                    <div class="payment-logo">
                      <?php echo cbv_get_image_tag($image); ?>
                    </div>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div> 
    </div>
    <div class="footer-bottom">
      <div class="sec-btm-bdr">
        <ul class="reset-list">
          <li style="background: #FF4989;"></li>
          <li style="background: #FF9B4C;"></li>
          <li style="background: #39B76B;"></li>
          <li style="background: #339F95;"></li>
          <li style="background: #8E3EFC;"></li>
        </ul>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="ftr-btm-cntlr">
              <div class="ftr-copyright">
                <?php if( !empty($copyright_text) ) printf('%s', $copyright_text); ?>
              </div>
              <div class="ftr-btm-menu">
                <?php 
                  $footerMenu = array( 
                      'theme_location' => 'cbv_copyright_menu', 
                      'menu_class' => 'reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                  wp_nav_menu( $footerMenu );
                ?>
              </div>
              <div class="ftr-designby">
                <p><a target="_blank" href="#">webshop laten maken </a>  door Conversal</p>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>