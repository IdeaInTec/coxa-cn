<?php 
$ftrlogoID = get_field('footer_logo', 'options');
$ftr_description = get_field('ftr_description', 'options');
$link_1 = get_field('link_1', 'options');
$link_2 = get_field('link_2', 'options');
$title_col_01 = get_field('title_col_01', 'options');
$title_col_02 = get_field('title_col_02', 'options');
$title_col_03 = get_field('title_col_03', 'options');
?>

<footer class="footer-wrp">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-top-cntlr">
            <div class="ftr-top-col ftr-top-col-01">
              <?php if( !empty($ftrlogoID) ): ?>
                <div class="ftr-logo">
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo cbv_get_image_tag($ftrlogoID); ?>
                  </a>
                </div>
              <?php endif; ?>
              <?php if( !empty($ftr_description) ): ?>
              <div class="ftr-desc">
                <?php echo wpautop($ftr_description); ?>
              </div>
              <?php endif; ?>
              <div class="massage-review-cntlr">
                <?php if(!empty($link_1)): ?>
                <div class="massage-col">
                  <a href="<?php echo $link_1; ?>">
                    <i>
                      <svg class="ftr-massage-icon" width="24" height="22" viewBox="0 0 24 22" fill="#FF5C26">
                        <use xlink:href="#ftr-massage-icon"></use>
                      </svg>
                    </i> 
                    <span>Send a message</span>
                  </a>
                </div>
               <?php endif; if(!empty($link_2)): ?>
                <div class="review-col">
                  <a href="<?php echo $link_2; ?>">
                    <i>
                      <svg class="ftr-review-icon" width="23" height="25" viewBox="0 0 23 25" fill="#FF5C26">
                        <use xlink:href="#ftr-review-icon"></use> 
                      </svg>
                    </i>
                    <span>Leave a Review</span>
                  </a>
                </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="ftr-top-col ftr-top-col-02">
              <?php if($title_col_01) echo('<h6 class="fl-h6 ftr-top-col-title">'.$title_col_01.'</h6>'); ?>
              <div class="ftr-top-menu xs-toggle-menu">
                <?php 
                $footer_menu_1 = array( 
                  'theme_location' => 'cbv_footer_menu_1', 
                  'menu_class' => 'clearfix reset-list',
                  'container' => '',
                  'container_class' => ''
                );
                wp_nav_menu( $footer_menu_1 ); 
                ?>
              </div>
            </div>
            <div class="ftr-top-col ftr-top-col-03">
              <?php if($title_col_02) echo('<h6 class="fl-h6 ftr-top-col-title">'.$title_col_02.'</h6>'); ?>
              <div class="ftr-top-menu xs-toggle-menu">
                <?php 
                $footer_menu_2 = array( 
                  'theme_location' => 'cbv_footer_menu_2', 
                  'menu_class' => 'clearfix reset-list',
                  'container' => '',
                  'container_class' => ''
                );
                wp_nav_menu( $footer_menu_2 ); 
                ?>
              </div>
            </div>
            <div class="ftr-top-col ftr-top-col-04">
              <?php if($title_col_03) echo('<h6 class="fl-h6 ftr-top-col-title">'.$title_col_03.'</h6>'); ?>
              <div class="ftr-top-menu xs-toggle-menu">
                <?php 
                $footer_menu_3 = array( 
                  'theme_location' => 'cbv_footer_menu_3', 
                  'menu_class' => 'clearfix reset-list',
                  'container' => '',
                  'container_class' => ''
                );
                wp_nav_menu( $footer_menu_3 ); 
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
  <?php $copyright = get_field('copyright', 'options'); ?>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-btm-cntlr">
            <?php if(!empty($copyright)): ?>
            <div class="ftr-copyright">
              <?php echo wpautop($copyright); ?>
            </div>
            <?php endif; ?>
            <div class="ftr-btm-menu">
              <?php 
              $copyright_menu = array( 
                'theme_location' => 'cbv_copyright_menu', 
                'menu_class' => 'clearfix reset-list',
                'container' => '',
                'container_class' => ''
              );
              wp_nav_menu( $copyright_menu ); 
              ?>
            </div>
            <div class="ftr-designby">
              <p>Website by <a href="#" target="_blank">Thomas Fide Design</a></p>
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