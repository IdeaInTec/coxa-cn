<?php 
/*Template Name: Team*/
get_header(); 
$thisID = get_the_ID();
$banner = get_field('banner', $thisID);
$bg_image = cbv_get_image_src($banner['image']);
$custom_titel = $banner['title'];
$page_titel = !empty($custom_titel)?$custom_titel:get_the_title($thisID);
$description = $banner['description'];
$link_1 = $banner['link_1'];
$link_2 = $banner['link_2'];
?>
<section class="page-banner">
  <div class="banner-black-bg"></div>
  <?php if(!empty($bg_image)) echo('<div class="page-bnr-bg parallaxie" style="background-image: url('.$bg_image.')"></div>'); ?>
  <?php if( !empty($banner['video']) ): ?>
    <div class="bnr-vdo">
      <video id="bt-vdo" autoplay="true" muted="" loop>
        <source src="<?php echo $banner['video']; ?>" type="video/mp4">
        </video>
      </div>
    <?php endif; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pg-banner-cntlr">
            <div class="pg-banner-desc-cntlr">
              <h1 class="pg-banner-title fl-h3"><?php echo $page_titel; ?></h1>
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
              <?php if(!empty($description)): ?>
                <div class="pg-banner-desc">
                  <?php echo wpautop($description); ?>
                </div>
              <?php endif; ?>
              <div class="pg-banner-btns">
                <?php if(is_array($link_1) && !empty($link_1['url'])): ?>
                <div class="pg-banner-btn pg-banner-btn-01">
                  <?php printf('<a class="cdc-btn" href="%s">%s</a>',$link_1['url'],$link_1['title'] ); ?>
                </div>
              <?php endif; if(is_array($link_2) && !empty($link_2['url'])):?>
              <div class="pg-banner-btn pg-banner-btn-02">
                <?php printf('<a class="cdc-trnsprnt-btn" href="%s">%s</a>',$link_2['url'],$link_2['title'] ); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section> 

<div class="team-pg-content-cntlr">

  <section class="counter-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="counter-cntlr">
            <?php 
            $team_states = get_field('team_states', $thisID); 
            foreach ($team_states as $team_state):
            ?>
            <div class="counter-col-01 counter-col" >
              <?php if(!empty($team_state['value'])) echo('<h2 class="fl-h1 counter-number-title"><span class="counter-number">'.$team_state['value'].'</span>'.$team_state['sufix'].'</h2>'); ?>
              
             <?php echo wpautop($team_state['title']); ?>
            </div> 
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="profile-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="profile-cntlr">
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
                <h4 class="fl-h4 pro-mdul-hdr-title">Principal Dentists </h4>
              </div>
              <div class="profile-module">
                <ul class="reset-list">
                  <li>
                    <div class="pro-mdul-grd">
                      <div class="pm-grd-img-cntlr">
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-01.jpg);"></div>
                      </div>
                      <div class="pm-grd-desc-cntlr mHc">
                        <h5 class="fl-h5 pm-grd-title mHc1"><a href="#">David Cox</a></h5>
                        <div class="pm-grd-assist mHc2">
                          <span class="pm-grd-assist-name">Practice Principal<span class="pm-grd-assist-no">GDC No: 65106</span></span>
                        </div>
                        <span class="pm-grd-addr mHc3">BDS (Wales, 1990), MSc (Dental Implantology, 2014)</span>
                        <div class="pm-grd-desc">
                          <p></p>
                        </div>
                        <div class="pm-grd-btns-cntlr">
                          <div class="pm-grd-btn pm-grd-btn-02">
                            <a class="cdc-trnsprnt-btn" href="#" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-mdul-grd">
                      <div class="pm-grd-img-cntlr">
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-02.jpg);"></div>
                      </div>
                      <div class="pm-grd-desc-cntlr mHc">
                        <h5 class="fl-h5 pm-grd-title mHc1"><a href="#">Robert Hitchcock</a></h5>
                        <div class="pm-grd-assist mHc2">
                          <span class="pm-grd-assist-name">Practice Principal<span class="pm-grd-assist-no">GDC No: 69354</span></span>
                        </div>
                        <span class="pm-grd-addr mHc3">BDS (Newcastle, 1993)</span>
                        <div class="pm-grd-desc">
                          <p></p>
                        </div>
                        <div class="pm-grd-btns-cntlr">
                          <div class="pm-grd-btn pm-grd-btn-02">
                            <a class="cdc-trnsprnt-btn" href="#" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="profile-module-cntlr specialists-profile-module">
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
                <h4 class="fl-h4 pro-mdul-hdr-title">Dental Implant Specialists</h4>
              </div>
              <div class="profile-module">
                <ul class="reset-list">
                  <li>
                    <div class="pro-mdul-grd">
                      <div class="pm-grd-img-cntlr">
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-03.jpg);"></div>
                      </div>
                      <div class="pm-grd-desc-cntlr mHc">
                        <h5 class="fl-h5 pm-grd-title mHc1"><a href="#">Vinny Vaithianathan</a></h5>
                        <div class="pm-grd-assist mHc2">
                          <span class="pm-grd-assist-name">Associate Dentist<span class="pm-grd-assist-no">GDC No: 65106</span></span>
                        </div>
                        <span class="pm-grd-addr mHc3">BDS (University of Bristol, 2007), DipImp</span>
                        <div class="pm-grd-desc">
                          <p></p>
                        </div>
                        <div class="pm-grd-btns-cntlr">
                          <div class="pm-grd-btn pm-grd-btn-02">
                            <a class="cdc-trnsprnt-btn" href="#" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-mdul-grd">
                      <div class="pm-grd-img-cntlr">
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-04.jpg);"></div>
                      </div>
                      <div class="pm-grd-desc-cntlr mHc">
                        <h5 class="fl-h5 pm-grd-title mHc1"><a href="#">Robert Hitchcock</a></h5>
                        <div class="pm-grd-assist mHc2">
                          <span class="pm-grd-assist-name">Associate Dentist<span class="pm-grd-assist-no">GDC No: 69354</span></span>
                        </div>
                        <span class="pm-grd-addr mHc3">BDS (Newcastle, 1993)</span>
                        <div class="pm-grd-desc">
                          <p></p>
                        </div>
                        <div class="pm-grd-btns-cntlr">
                          <div class="pm-grd-btn pm-grd-btn-02">
                            <a class="cdc-trnsprnt-btn" href="#" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-mdul-grd">
                      <div class="pm-grd-img-cntlr">
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-05.jpg);"></div>
                      </div>
                      <div class="pm-grd-desc-cntlr mHc">
                        <h5 class="fl-h5 pm-grd-title mHc1"><a href="#">Joe Broad</a></h5>
                        <div class="pm-grd-assist mHc2">
                          <span class="pm-grd-assist-name">Associate Dentist<span class="pm-grd-assist-no">GDC No: 114378</span></span>
                        </div>
                        <span class="pm-grd-addr mHc3">BDS (Cardiff Dental School, 2007), MJDF RCS (Eng)</span>
                        <div class="pm-grd-desc">
                          <p></p>
                        </div>
                        <div class="pm-grd-btns-cntlr">
                          <div class="pm-grd-btn pm-grd-btn-02">
                            <a class="cdc-trnsprnt-btn" href="#" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-mdul-grd">
                      <div class="pm-grd-img-cntlr">
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-06.jpg);"></div>
                      </div>
                      <div class="pm-grd-desc-cntlr mHc">
                        <h5 class="fl-h5 pm-grd-title mHc1"><a href="#">Mays Mahdi</a></h5>
                        <div class="pm-grd-assist mHc2">
                          <span class="pm-grd-assist-name">Associate Dentist<span class="pm-grd-assist-no">GDC No: 65106</span></span>
                        </div>
                        <span class="pm-grd-addr mHc3">BDS (Wales, 1990), MSc (Dental Implantology, 2014)</span>
                        <div class="pm-grd-desc">
                          <p></p>
                        </div>
                        <div class="pm-grd-btns-cntlr">
                          <div class="pm-grd-btn pm-grd-btn-02">
                            <a class="cdc-trnsprnt-btn" href="#" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-mdul-grd">
                      <div class="pm-grd-img-cntlr">
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-07.jpg);"></div>
                      </div>
                      <div class="pm-grd-desc-cntlr mHc">
                        <h5 class="fl-h5 pm-grd-title mHc1"><a href="#">Katy Robinson</a></h5>
                        <div class="pm-grd-assist mHc2">
                          <span class="pm-grd-assist-name">Associate Dentist<span class="pm-grd-assist-no">GDC No: 69354</span></span>
                        </div>
                        <span class="pm-grd-addr mHc3">BDS (Newcastle, 1993)</span>
                        <div class="pm-grd-desc">
                          <p></p>
                        </div>
                        <div class="pm-grd-btns-cntlr">
                          <div class="pm-grd-btn pm-grd-btn-02">
                            <a class="cdc-trnsprnt-btn" href="#" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-mdul-grd">
                      <div class="pm-grd-img-cntlr">
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-08.jpg);"></div>
                      </div>
                      <div class="pm-grd-desc-cntlr mHc">
                        <h5 class="fl-h5 pm-grd-title mHc1"><a href="#">Kevin Burford</a></h5>
                        <div class="pm-grd-assist mHc2">
                          <span class="pm-grd-assist-name">Associate Dentist<span class="pm-grd-assist-no">GDC No: 114378</span></span>
                        </div>
                        <span class="pm-grd-addr mHc3">BDS (Cardiff Dental School, 1998), BSc (Hons) Basic Dental Science (Wales)</span>
                        <div class="pm-grd-desc">
                          <p></p>
                        </div>
                        <div class="pm-grd-btns-cntlr">
                          <div class="pm-grd-btn pm-grd-btn-02">
                            <a class="cdc-trnsprnt-btn" href="#" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="profile-module-cntlr cosmetic-profile-module">
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
                <h4 class="fl-h4 pro-mdul-hdr-title">Cosmetic Dentristy Specialists</h4>
              </div>
              <div class="profile-module">
                <ul class="reset-list">
                  <li>
                    <div class="pro-mdul-grd">
                      <div class="pm-grd-img-cntlr">
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-09.jpg);"></div>
                      </div>
                      <div class="pm-grd-desc-cntlr mHc">
                        <h5 class="fl-h5 pm-grd-title mHc1"><a href="#">Ernish Patel</a></h5>
                        <div class="pm-grd-assist mHc2">
                          <span class="pm-grd-assist-name">Associate Dentist<span class="pm-grd-assist-no">GDC No: 65106</span></span>
                        </div>
                        <span class="pm-grd-addr mHc3">BDS (Wales, 1990), MSc (Dental Implantology, 2014)</span>
                        <div class="pm-grd-desc">
                          <p></p>
                        </div>
                        <div class="pm-grd-btns-cntlr">
                          <div class="pm-grd-btn pm-grd-btn-02">
                            <a class="cdc-trnsprnt-btn" href="#" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-mdul-grd">
                      <div class="pm-grd-img-cntlr">
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-10.jpg);"></div>
                      </div>
                      <div class="pm-grd-desc-cntlr mHc">
                        <h5 class="fl-h5 pm-grd-title mHc1"><a href="#">Catherine Colley-Preist</a></h5>
                        <div class="pm-grd-assist mHc2">
                          <span class="pm-grd-assist-name">Associate Dentist<span class="pm-grd-assist-no">GDC No: 69354</span></span>
                        </div>
                        <span class="pm-grd-addr mHc3">BDS (Newcastle, 1993)</span>
                        <div class="pm-grd-desc">
                          <p></p>
                        </div>
                        <div class="pm-grd-btns-cntlr">
                          <div class="pm-grd-btn pm-grd-btn-02">
                            <a class="cdc-trnsprnt-btn" href="#" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-mdul-grd">
                      <div class="pm-grd-img-cntlr">
                        <div class="pm-grd-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/pm-grd-img-11.jpg);"></div>
                      </div>
                      <div class="pm-grd-desc-cntlr mHc">
                        <h5 class="fl-h5 pm-grd-title mHc1"><a href="#">Rose-Marie Davies</a></h5>
                        <div class="pm-grd-assist mHc2">
                          <span class="pm-grd-assist-name">Associate Dentist<span class="pm-grd-assist-no">GDC No: 114378</span></span>
                        </div>
                        <span class="pm-grd-addr mHc3">BDS (Cardiff Dental School, 2007), MJDF RCS (Eng)</span>
                        <div class="pm-grd-desc">
                          <p></p>
                        </div>
                        <div class="pm-grd-btns-cntlr">
                          <div class="pm-grd-btn pm-grd-btn-02">
                            <a class="cdc-trnsprnt-btn" href="#" data-bs-toggle="modal" data-bs-target="#profile-modal">Read Full Profile </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
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
          <div class="modal-body">
            <div class="pro-modal-con-cntlr">
              <div class="pro-modal-con-lft">
                <div class="pro-modal-img-cntlr">
                  <img src="<?php echo THEME_URI; ?>/assets/images/modal-pro-img.jpg" alt="">
                </div>
              </div>
              <div class="pro-modal-con-rgt">
                <div class="pro-modal-des-cntlr">
                  <h2 class="pro-modal-title fl-h3">David Cox</h2>
                  <h2 class="pro-modal-assist-name fl-h5">Practice Principal <span>GDC No: 65106</span></h2>
                  <div class="pro-modal-addr">
                    <span>BDS (Wales, 1990), MSc (Dental Implantology, 2014)</span>
                  </div>
                  <div class="pro-modal-des">
                    <p>Following graduation from The University Hospital of Wales in 1990, David initially pursued a career in Cardiff Dental Hospital with house officer posts in General Anaesthesia and Maxillofacial Surgery, later moving to a General Practice position. After a short three years as an associate, he moved to Llanthewy Road, becoming the Principal in 1995. Following the opening of the Rhyd – y- Penau Road surgery in 1999, he was joined by Bob Hitchcock, forming the Cox & Hitchcock Partnership.</p>
                    <p>His initial interest in Implantology stemmed from undergraduate research at Otago University in New Zealand. He has extensive post-graduate training in Dental Implantology and is a committed member of the ITI (International Team for Implantology) and ADI (Association of Dental Implantology). Quality post-graduate education is essential for professional development. Keeping abreast of the latest techniques and applying an evidence-based approach has resulted in extensive travels nationwide, throughout Europe and the USA, seeking education to broaden his knowledge base from leading clinicians, institutions and companies.</p>
                    <p>In 2014, he completed with distinction an MSc in Dental Implantology at Bristol University.</p>
                    <p>He works closely with Straumann Implant systems, but also has extensive experience with many other manufacturers, ensuring he provides scientifically proven care serving the best interest of his patients.</p>
                    <p>Having thoroughly researched Peri-implant disease as part of his dissertation, he has a keen interest in this field, and often treats patients referred to him with compromised diseased implants, as well as treating individuals with periodontal (Gum) disease, often with the adjunctive use of laser technology (WATERLASE IPLUS®).</p>
                    <p>As well as a previous member of the Dental panel at SmithKline Beecham (later GlaxoSmithKline), he has lectured post-graduate dentists, mentors, Implantologists, and annually holds discussion groups/seminars with undergraduate Dental students.</p>
                  </div>
                </div>
                <div class="pro-modal-btn">
                  <a class="cdc-btn" href="#">Book Private Consultation</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="cta-section">
    <div class="container-lg">
      <div class="row">
        <div class="col-md-12">
          <div class="cta-module-cntlr">
            <div class="cta-module-wrp parallaxie" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/cta-sec-bg.jpg);">
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
                    <h2 class="cta-module-des-title fl-h2"><em>Book</em> Appointment Online</h2>
                    <p>Praesent imperdiet leo in odio in bibendum aliquet. Est consectetur amet, porttitor turpis. Scelerisque sed eu auctor fringilla nunc.</p>
                  </div>
                </div>
                <div class="cta-btn-ctlr">
                  <div class="cta-btn">
                    <a href="#" class="cdc-btn">Book Appointment</a>                     
                  </div>
                </div>
              </div>
            </div>
          </div>            
        </div>
      </div>
    </div>
  </section>

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
<?php get_footer(); ?>