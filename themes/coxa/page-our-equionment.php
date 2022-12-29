<?php 
/*Template Name: Our Equionment*/
get_header(); 
$thisID = get_the_ID();
?>
<?php get_template_part('templates/page', 'banner'); ?>
<div class="about-page-con-cntlr"> 
<?php 
$intro = get_field('intro', $thisID);
$link = $intro['link'];
?>     
  <section class="about-intro-sec has-inline-bg double-image-module">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="abtis-img-text-row">
            <div class="abtis-img-text-row-inr">
              <div class="abtis-img-txt-col abtis-row-img">
                <div class="abtis-row-img-inner">
                  <?php if(!empty($intro['image_1'])): ?>
                    <div class="abtis-row-main-img-cntrl">
                      <div class="abtis-row-main-img inline-bg" style="background-image: url(<?php echo cbv_get_image_src($intro['image_1']); ?>);">
                      </div>
                    </div>
                  <?php endif; if(!empty($intro['image_2'])): ?>
                  <div class="abtis-row-sub-img-cntlr">
                    <div class="abtis-row-sub-img inline-bg" style="background-image: url(<?php echo cbv_get_image_src($intro['image_2']); ?>);">
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="abtis-img-txt-col abtis-row-text">
              <div class="abtis-row-text-inr">
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
                <?php if(!empty($intro['title'])) echo('<h2 class="fl-h4">'.$intro['title'].'</h2>'); ?>
                <?php echo wpautop($intro['description']); ?>
                <?php if(is_array($link) && !empty($link['url'])): ?>
                <div class="abtis-intro-des-btn">
                  <?php printf('<a class="cdc-btn" href="%s">%s</a>',$link['url'],$link['title'] ); ?>
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
  $showhidewch = get_field('showhidewch', $thisID); 
  if ($showhidewch):
  	$why_choose = get_field('why_choose', HOMEID);
  	$wch_link = $why_choose['link'];
  	?>

  	<section class="why-choose-sec parallaxie" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/why-choose-bg-img.png);">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-12">
  					<div class="sec-entry-hdr-cntlr">
  						<div class="sec-entry-hdr">
  							<?php if(!empty($why_choose['title'])) echo('<h2 class="sec-entry-hdr-title fl-h4">'. $why_choose['title'] .'</h2>'); ?>
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
  							<?php echo wpautop($why_choose['description']); ?>
  						</div>
  					</div>
  					<div class="why-choose-grids-cntlr">
  						<div class="why-choose-grids">
  							<?php 
  							$features = $why_choose['features'];
  							foreach ($features as $feature):
  								?>
  								<div class="why-choose-grid-col">
  									<div class="why-choose-grid-item">
  										<?php if(!empty($feature['icon'])): ?>
  											<div class="why-choose-grid-img">
  												<i>
  													<?php echo cbv_get_image_tag($feature['icon']); ?>
  												</i>
  											</div>
  										<?php endif; ?>
  										<div class="why-choose-grid-des mHc">
  											<?php if(!empty($feature['title'])) echo('<h4 class="why-choose-grid-title fl-h5 mHc1">'. $feature['title'] .'</h4>'); ?>
  											<?php echo wpautop($feature['description']); ?>
  										</div>
  									</div>
  								</div>
  							<?php endforeach; ?>
  						</div>
  						<?php if(is_array($wch_link) && !empty($wch_link['url'])): ?>
  						<div class="why-choose-grid-btn hide-sm">
  							<?php printf('<a class="cdc-btn" href="%s">%s</a>',$wch_link['url'],$wch_link['title'] ); ?>
  						</div>

  					<?php endif; ?>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
<?php endif; ?>

<?php 
$showhidepractice = get_field('showhidepractice', $thisID);
if($showhidepractice):
$ourpractice = get_field('ourpractice', $thisID);
$link_1 = $ourpractice['link_1'];
$link_2 = $ourpractice['link_2'];
?>
<section class="about-intro-sec has-inline-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="abtis-img-text-row abtis-lft-img-row">
          <div class="abtis-img-text-row-inr">
            <?php if(!empty($ourpractice['image'])): ?>
              <div class="abtis-img-txt-col abtis-row-img">
                <div class="abtis-row-img-inner">
                  <div class="abtis-row-main-img-cntrl">
                    <div class="abtis-row-main-img inline-bg" style="background-image: url(<?php echo cbv_get_image_src($ourpractice['image']); ?>);">
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
            <div class="abtis-img-txt-col abtis-row-text">
              <div class="abtis-row-text-inr">
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
                <?php if(!empty($ourpractice['title'])) echo('<h2 class="fl-h4">'.$ourpractice['title'].'</h2>'); ?>
                <?php echo wpautop($ourpractice['description']); ?>
              
                <div class="pm-grd-btns-cntlr">
                  <?php if(is_array($link_1) && !empty($link_1['url'])): ?>
                  <div class="pm-grd-btn pm-grd-btn-01">
                    <?php printf('<a class="cdc-btn" href="%s">%s</a>',$link_1['url'],$link_1['title'] ); ?>
                  </div>
                <?php endif; if(is_array($link_2) && !empty($link_2['url'])): ?>
                  <div class="pm-grd-btn pm-grd-btn-02">
                    <?php printf('<a class="cdc-btn" href="%s">%s</a>',$link_2['url'],$link_2['title'] ); ?>
                  </div>
                <?php endif;?>
                </div>
            </div>                          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section> 
<?php endif; ?>

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
                        <?php printf('<a class="cdc-btn" href="%s">%s</a>',$promo_link['url'],$promo_link['title'] ); ?>
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
<?php endif; ?>





<?php get_footer(); ?>