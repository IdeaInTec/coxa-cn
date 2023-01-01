<?php 
/*Template Name: Our Equionment*/
get_header(); 
$thisID = get_the_ID();
?>
<?php get_template_part('templates/page', 'banner'); ?>
<div class="our-equionment-page-con-cntlr"> 
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
  $showhideequpments = get_field('showhideequpments', $thisID);
  if($showhideequpments):
    $equipments = get_field('equipments', $thisID);
?>
<section class="treatments-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="treatments-sec-inr">
          
          <div class="treatment-grds">
            <?php foreach($equipments as $equipment):?>
              <div class="treatment-grd-item-col">
                <div class="treatment-grd-item">
                  <div class="treatment-grd-img-cntlr">
                    <?php if(!empty($equipment['image'])):?>
                    <div class="treatment-grd-img">
                      <?php echo cbv_get_image_tag($equipment['image']);?>
                    </div>
                  <?php endif;?>
                  </div>
                  <div class="treatment-grd-des">
                    <?php 
                    if(!empty($equipment['title'])) echo '<h3 class="treatment-grd-des-title fl-h5">'.$equipment['title'].'</h3>';
                    if(!empty($equipment['image_subtitle'])) echo '<h6 class="treatment-grd-des-subtitle">'. $equipment['image_subtitle'] .'</h6>';
                    echo wpautop($equipment['description']);?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif;?>

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
<?php endif; 
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
<?php endif;
  $showhidetreatment = get_field('showhidetreatment', $thisID);
  if($showhidetreatment):
    $chtreatment = get_field('chtreatments', $thisID);
    $link = $chtreatment['link'];
?>
  <section class="treatment-sec">
    <div class="treatment-cntlr">
      <div class="treatment-lft">
        <?php if(!empty($chtreatment['title'])): ?>
        <div class="hide-md">
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
        </div>
        <?php 
          echo('<h2 class="fl-h4 treatment-title">'.$chtreatment['title'].'</h2>'); 
          endif;
          if(!empty($chtreatment['description'])) echo('<div class="treatment-desc hide-md">'.wpautop($chtreatment['description']).'</div>'); 
          if(is_array($link) && !empty($link['url'])): 
        ?>
        <div class="treatment-btn hide-md">
          <?php printf('<a class="cdc-btn" href="%s">%s</a>',$link['url'],$link['title']); ?>
        </div>
        <?php endif; ?>
      </div>
      <?php
        $treatmentIDs = $chtreatment['select_treatment'];
        if( !empty($treatmentIDs) ){
          $treatmentIDs = is_array($treatmentIDs)?$treatmentIDs : array($treatmentIDs);
          $args = array(
            'post_type' => 'treatment',
            'orderby' => 'rand',
            'post__in' => $treatmentIDs,
          );
        }else{
          $args = array(
            'post_type' => 'treatment',
            'posts_per_page' => 4,
            'orderby' => 'rand'
          );
        }
        $loop = new WP_Query($args);
        if($loop->have_posts()):
      ?>
      <div class="treatment-rgt">
        <div class="custom-prev-next-cntlr">
          <div class="custom-prev">
            <span class="arrow-left prv-nxt-btn">
              <svg class="prev-line" width="66" height="20" viewBox="0 0 66 20" fill="#29467D">
                <use xlink:href="#prev-line"></use> 
              </svg>
            </span>
          </div>
          <div class="custom-next">
            <span class="arrow-right prv-nxt-btn">
              <svg class="next-line" width="66" height="20" viewBox="0 0 66 20" fill="#29467D">
                <use xlink:href="#next-line"></use> 
              </svg>
            </span>
          </div>
        </div>
        <div class="treatment-grids treatmentSlider">
          <?php 
            while($loop->have_posts()):$loop->the_post();
              global $post;
              $thumbID = get_post_thumbnail_id(get_the_ID());
              $image_url = !empty($thumbID)?cbv_get_image_src($thumbID):treatment_placeholder();
          ?>
          <div class="trtmnt-grd-cntlr">
            <div class="trtmnt-grd">
              <div class="trtmnt-grd-img-cntlr">
                <div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo $image_url; ?>);"></div>
                <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
              </div>
              <h3 class="fl-h5 trtmnt-grd-title mHc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="trtmnt-grd-desc">
                <?php the_excerpt(); ?>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
      <?php wp_reset_postdata();endif;?>
    </div>
  </section>
  <?php endif; ?>
</div>

<?php get_footer(); ?>