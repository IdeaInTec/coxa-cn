<?php 
/*Template Name: Fees*/
get_header(); 
$thisID = get_the_ID();
get_template_part('templates/page', 'banner');
?>


<div class="fees-page-con-cntlr">
	<?php 
		$intro = get_field('intro', $thisID);
		$description = $intro['description'];
		$fees = $intro['fees'];
	?>
      <section class="fees-sec">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="fees-sec-cntlr">
                <div class="fees-sec-entry-hdr">                
                  <?php if(!empty($description)) echo wpautop($description); ?>
                </div>
                <div class="fees-cntlr">
                  <div class="fees-tab">
                    <div class="fees-tab-hdr show-sm">
                      <h6 class="fl-h6 fees-tab-title">Navigate to...</h6>
                    </div>
                    <div class="fees-tab-inr">
                      <div class="fees-tab-button show-sm">
                        <span>Select treatment fees</span>
                      </div>
                      <ul class="reset-list">
                        <li><a href="#fees-scrool-btn-1">Examination Fees</a></li>
                        <li><a href="#fees-scrool-btn-2">Assessment & Scan Fees</a></li>
                        <li><a href="#fees-scrool-btn-3">General Dentistry Fees</a></li>
                        <li><a href="#fees-scrool-btn-4">Treatment Fees</a></li>
                      </ul>
                    </div>
                  </div>
                  	<?php 
                  		$i = 1;
                  		foreach( $fees as $fee ): 
	                  		$title = $fee['title'];
	                  		$items = $fee['items'];
                  	?>
          					<div class="fees-module-cntlr" id="fees-scrool-btn-<?php echo $i; ?>">
          						<?php if(!empty($title)) echo('<h3 class="fl-h4 fees-module-title">' .$title. '</h3>'); ?>
          						<div class="fees-module">
          						  <ul class="reset-list">
          						  	<?php 
          						  		foreach( $items as $item ):
          						  			$title = $item['title'];
          						  			$value = $item['value'];
          						  	?>
          						    <li>
          						      <div class="fees-module-item">
          						        <span class="fees-module-item-name"><?php echo $title; ?></span>
          						        <strong class="fees-module-item-prize"><?php echo $value; ?></strong>
          						      </div>
          						    </li>
          							<?php endforeach; ?>
          						  </ul>
          						</div>
          					</div>
              		<?php $i++; endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
<div class="gap-70"></div>
<?php 
$showhidetreatment = get_field('showhidetreatment', $thisID);
if($showhidetreatment):
$chtreatment = get_field('chtreatment', $thisID);
$link = $chtreatment['link'];
?>
<section class="treatment-sec">
  <div class="treatment-cntlr">
    <div class="treatment-lft">
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
      <?php if(!empty($chtreatment['title'])) echo('<h2 class="fl-h4 treatment-title">'.$chtreatment['title'].'</h2>'); ?>
      <?php if(!empty($chtreatment['description'])) echo('<div class="treatment-desc hide-md">'.wpautop($chtreatment['description']).'</div>'); ?>
      <?php if(is_array($link) && !empty($link['url'])): ?>
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
            $image_url = !empty($thumbID)? cbv_get_image_src($thumbID):treatment_placeholder();
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