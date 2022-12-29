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
                        <li><a href="#examination">Examination Fees</a></li>
                        <li><a href="#assessment">Assessment & Scan Fees</a></li>
                        <li><a href="#dentistry">General Dentistry Fees</a></li>
                        <li><a href="#treatment">Treatment Fees</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="fees-module-cntlr" id="examination">
                    <h3 class="fl-h4 fees-module-title">Examination Fees</h3>
                    <div class="fees-module">
                      <ul class="reset-list">
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">Regular Patient Examination</span>
                            <strong class="fees-module-item-prize">from £39</strong>
                          </div>
                        </li>
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">New Patient Examination</span>
                            <strong class="fees-module-item-prize">from £49</strong>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="fees-module-cntlr" id="assessment">
                    <h3 class="fl-h4 fees-module-title">Assessment & Scan Fees</h3>
                    <div class="fees-module">
                      <ul class="reset-list">
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">Full Periodontal Case Assessment</span>
                            <strong class="fees-module-item-prize">from £82</strong>
                          </div>
                        </li>
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">Implant Case Assessment</span>
                            <strong class="fees-module-item-prize">from £85</strong>
                          </div>
                        </li>
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">3D CBCT Scan</span>
                            <strong class="fees-module-item-prize">from £125</strong>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="fees-module-cntlr" id="dentistry">
                    <h3 class="fl-h4 fees-module-title">General Dentistry Fees</h3>
                    <div class="fees-module">
                      <ul class="reset-list">
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">White Fillings</span>
                            <strong class="fees-module-item-prize">from £46</strong>
                          </div>
                        </li>
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">Root Canal Treatment</span>
                            <strong class="fees-module-item-prize">from £260</strong>
                          </div>
                        </li>
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">Tooth Coloured Crowns</span>
                            <strong class="fees-module-item-prize">from £325</strong>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="fees-module-cntlr" id="treatment">
                    <h3 class="fl-h4 fees-module-title">Treatment Fees</h3>
                    <div class="fees-module">
                      <ul class="reset-list">
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">Dental Implants</span>
                            <strong class="fees-module-item-prize">from £1390</strong>
                          </div>
                        </li>
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">Implant retained Crown</span>
                            <strong class="fees-module-item-prize">from £780</strong>
                          </div>
                        </li>
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">Implant Retained Lower Denture</span>
                            <strong class="fees-module-item-prize">from £3800</strong>
                          </div>
                        </li>
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">Implant retained Full Upper Denture</span>
                            <strong class="fees-module-item-prize">from £6800</strong>
                          </div>
                        </li>
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">Teeth Whitening</span>
                            <strong class="fees-module-item-prize">from £325</strong>
                          </div>
                        </li>
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">Orthodontic Tooth Alignment</span>
                            <strong class="fees-module-item-prize">from £1520</strong>
                          </div>
                        </li>
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">Laser Soft Tissue Treatments</span>
                            <strong class="fees-module-item-prize">from £76</strong>
                          </div>
                        </li>
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">Anti Wrinkle Treatment</span>
                            <strong class="fees-module-item-prize">from £200</strong>
                          </div>
                        </li>
                        <li>
                          <div class="fees-module-item">
                            <span class="fees-module-item-name">Hygienist Appointments</span>
                            <strong class="fees-module-item-prize">from £56</strong>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
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
        <div class="trtmnt-grd-cntlr">
          <div class="trtmnt-grd">
            <div class="trtmnt-grd-img-cntlr">
              <div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-01.jpg);"></div>
              <a href="#" class="overlay-link"></a>
            </div>
            <h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Dental Implants</a></h3>
            <div class="trtmnt-grd-desc">
              <p>Viverra morbi massa eu, dolor. Praesent sit elit porttitor morbi fringilla in eget sed elementum. Blandit lacus eu sit integer vel. Quis tincidunt sapien consequat malesuada egestas tempor nunc, et. Ut imperdiet ullamcorper arcu enim, porttitor donec. </p>
            </div>
          </div>
        </div>
        <div class="trtmnt-grd-cntlr">
          <div class="trtmnt-grd">
            <div class="trtmnt-grd-img-cntlr">
              <div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-02.jpg);"></div>
              <a href="#" class="overlay-link"></a>
            </div>
            <h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Cosnetic Dentistry</a></h3>
            <div class="trtmnt-grd-desc">
              <p>Et pellentesque netus tempus in pharetra rhoncus, sit. Gravida ornare viverra ac at egestas. Viverra lectus in praesent vitae.</p>
            </div>
          </div>
        </div>
        <div class="trtmnt-grd-cntlr">
          <div class="trtmnt-grd">
            <div class="trtmnt-grd-img-cntlr">
              <div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-03.jpg);"></div>
              <a href="#" class="overlay-link"></a>
            </div>
            <h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Private Dentistry</a></h3>
            <div class="trtmnt-grd-desc">
              <p>Et gravida tempus, diam non. Cras pulvinar pulvinar amet, at feugiat lorem quis magna. Mi cras praesent in tellus consectetur varius id tristique. Malesuada id enim gravida cras duis.</p>
            </div>
          </div>
        </div>
        <div class="trtmnt-grd-cntlr">
          <div class="trtmnt-grd">
            <div class="trtmnt-grd-img-cntlr">
              <div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-01.jpg);"></div>
              <a href="#" class="overlay-link"></a>
            </div>
            <h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Teeth Whitening</a></h3>
            <div class="trtmnt-grd-desc">
              <p>Enim maecenas ipsum malesuada ultrices arcu risus lacus tempus pretium. Urna, cursus sapien, tristique sed sed condimentum fusce nisi. Id sit duis viverra orci nisi molestie viverra nisl, neque. Suspendisse sed vehicula arcu cras et. Dignissim sed semper leo sollicitudin malesuada adipiscing faucibus euismod.</p>
            </div>
          </div>
        </div>
        <div class="trtmnt-grd-cntlr">
          <div class="trtmnt-grd">
            <div class="trtmnt-grd-img-cntlr">
              <div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-01.jpg);"></div>
              <a href="#" class="overlay-link"></a>
            </div>
            <h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Dental Implants</a></h3>
            <div class="trtmnt-grd-desc">
              <p>Viverra morbi massa eu, dolor. Praesent sit elit porttitor morbi fringilla in eget sed elementum. Blandit lacus eu sit integer vel. Quis tincidunt sapien consequat malesuada egestas tempor nunc, et. Ut imperdiet ullamcorper arcu enim, porttitor donec. </p>
            </div>
          </div>
        </div>
        <div class="trtmnt-grd-cntlr">
          <div class="trtmnt-grd">
            <div class="trtmnt-grd-img-cntlr">
              <div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-02.jpg);"></div>
              <a href="#" class="overlay-link"></a>
            </div>
            <h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Cosnetic Dentistry</a></h3>
            <div class="trtmnt-grd-desc">
              <p>Et pellentesque netus tempus in pharetra rhoncus, sit. Gravida ornare viverra ac at egestas. Viverra lectus in praesent vitae.</p>
            </div>
          </div>
        </div>
        <div class="trtmnt-grd-cntlr">
          <div class="trtmnt-grd">
            <div class="trtmnt-grd-img-cntlr">
              <div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-03.jpg);"></div>
              <a href="#" class="overlay-link"></a>
            </div>
            <h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Private Dentistry</a></h3>
            <div class="trtmnt-grd-desc">
              <p>Et gravida tempus, diam non. Cras pulvinar pulvinar amet, at feugiat lorem quis magna. Mi cras praesent in tellus consectetur varius id tristique. Malesuada id enim gravida cras duis.</p>
            </div>
          </div>
        </div>
        <div class="trtmnt-grd-cntlr">
          <div class="trtmnt-grd">
            <div class="trtmnt-grd-img-cntlr">
              <div class="trtmnt-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/trtmnt-grd-img-01.jpg);"></div>
              <a href="#" class="overlay-link"></a>
            </div>
            <h3 class="fl-h5 trtmnt-grd-title mHc"><a href="#">Teeth Whitening</a></h3>
            <div class="trtmnt-grd-desc">
              <p>Enim maecenas ipsum malesuada ultrices arcu risus lacus tempus pretium. Urna, cursus sapien, tristique sed sed condimentum fusce nisi. Id sit duis viverra orci nisi molestie viverra nisl, neque. Suspendisse sed vehicula arcu cras et. Dignissim sed semper leo sollicitudin malesuada adipiscing faucibus euismod.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
</div>






<?php get_footer(); ?>