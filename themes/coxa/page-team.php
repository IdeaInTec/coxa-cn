<?php 
/*Template Name: Team*/
get_header(); 
$thisID = get_the_ID();
?>
<?php get_template_part('templates/page', 'banner'); ?>

<div class="team-pg-content-cntlr">
<?php 
$team_states = get_field('team_states', $thisID); 
if(!empty($team_states)): 
  ?>
  <section class="counter-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="counter-cntlr">
            <?php 
            foreach ($team_states as $team_state):
            ?>
            <div class="counter-col-01 counter-col" >
              <?php if(!empty($team_state['value'])) echo('<h2 class="fl-h1 counter-number-title"><span class="counter-number">'.$team_state['value'].'</span>'.$team_state['sufix'].'</h2>'); ?>
              
             <?php echo wpautop($team_state['title']); ?>
            </div> 
            <?php endforeach;  ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php  endif; 

  $terms = get_field('select_category', $thisID);
  if( empty($terms) ){
    $terms = get_terms( array(
        'taxonomy' => 'team_cat',
        'hide_empty' => true,
    ) );
  }

  ?>
  <section class="profile-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if( !empty($terms) ): ?>
          <div class="profile-cntlr">
            <?php foreach( $terms as $term ): ?>
            <div class="profile-module-cntlr principal-profile-module">
              <div class="pro-mdul-hdr">
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
                <h4 class="fl-h4 pro-mdul-hdr-title"><?php echo $term->name; ?></h4>
              </div>
              <?php
                $args = array(
                  'post_type' => 'team',
                  'tax_query' => array(
                    array(
                      'taxonomy'  => 'team_cat',
                      'field' => 'term_id',
                      'terms' => $term->term_id
                    )
                  )
                );
                $loop = new WP_Query($args);
                if($loop->have_posts()):
              ?>
              <div class="profile-module">
                <ul class="reset-list">
                  <?php 
                    while($loop->have_posts()):$loop->the_post();
                      global $post;
                      $thumbID = get_post_thumbnail_id($post->ID);
                      $image_url = !empty($thumbID)? cbv_get_image_src($thumbID) : '';
                      $designation = get_field('designation', $post->ID);
                      $gdc_no = get_field('gdc_no', $post->ID);
                      $experience = get_field('experience', $post->ID);
                  ?>
                  <li>
                    <div class="pro-mdul-grd">
                      <div class="pm-grd-img-cntlr">
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo $image_url; ?>);"></div>
                      </div>
                      <div class="pm-grd-desc-cntlr mHc">
                        <h5 class="fl-h5 pm-grd-title mHc1"><a href="#" onclick="getTeamDetailsById(<?php echo $post->ID; ?>)" data-bs-toggle="modal" data-bs-target="#profile-modal"><?php the_title(); ?></a></h5>
                        <?php if( !empty($designation) || !empty($gdc_no) ): ?>
                        <div class="pm-grd-assist mHc2">
                          <span class="pm-grd-assist-name"><?php if( !empty($designation) ) printf('%s', $designation); if( !empty($gdc_no) ) printf('<span class="pm-grd-assist-no">GDC No: %s</span>', $gdc_no); ?></span>
                        </div>
                        <?php endif; 
                          if( !empty($experience) ) printf('<span class="pm-grd-addr mHc3">%s</span>', $experience);
                        ?>

                        <?php if( !empty(get_the_excerpt()) ): ?>
                        <div class="pm-grd-desc">
                          <p><?php echo get_the_excerpt(); ?>...</p>
                        </div>
                        <?php endif; ?>
                        <div class="pm-grd-btns-cntlr">
                          <div class="pm-grd-btn pm-grd-btn-02">
                            <a class="cdc-trnsprnt-btn" href="#" onclick="getTeamDetailsById(<?php echo $post->ID; ?>)" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <?php endwhile; ?>
                </ul>
              </div>
              <?php endif; wp_reset_postdata();?> 
            </div>
            <?php endforeach; ?>
          </div>
          <?php else: ?>

          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <div class="cox-profile-modal">
    <div class="modal fade" id="profile-modal" tabindex="-1" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="" data-bs-dismiss="modal" aria-label="Close">
              <i>
                <svg class="modal-close-icon" width="22" height="22" viewBox="0 0 22 22" fill="#29467D">
                  <use xlink:href="#modal-close-icon"></use> 
                </svg>
              </i>
            </button>
          </div>
          <div class="modal-body" id="teamDetail">
          </div>
        </div>
      </div>
    </div>
  </div>
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
                  <?php echo wpautop($promo['description']); ?>
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

<?php 
endif;
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
        $treatmentargs = array(
          'post_type' => 'treatment',
          'orderby' => 'rand',
          'post__in' => $treatmentIDs,
        );
      }else{
        $treatmentargs = array(
          'post_type' => 'treatment',
          'posts_per_page' => 4,
          'orderby' => 'rand'
        );
      }
      $treat_loop = new WP_Query($treatmentargs);
      if($treat_loop->have_posts()):
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
          while($treat_loop->have_posts()):$treat_loop->the_post();
            global $post;
            $thumbID = get_post_thumbnail_id(get_the_ID());
            $image_url = !empty($thumbID)? cbv_get_image_src($thumbID) : treatment_placeholder();
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
    <?php endif; wp_reset_postdata();?>
  </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>