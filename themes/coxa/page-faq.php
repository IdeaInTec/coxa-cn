<?php 
/*Template Name: FAQ Overview*/
get_header(); 
$thisID = get_the_ID();
?>
<?php get_template_part('templates/page', 'banner'); ?>
<div class="faq-page-con-cntlr">
  <?php 
  $intro = get_field('intro', $thisID);

  ?>
  <section class="faq-content-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="faq-content-sec-inr">
            <div class="sec-entry-hdr-cntlr">
              <div class="sec-entry-hdr">
                <?php if(!empty($intro['title'])) echo('<h2 class="sec-entry-hdr-title fl-h4">'.$intro['title'].'</h2>'); ?>
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
               <?php echo wpautop($intro['description']); ?>                    
              </div>
              <div class="fees-tab">
                <div class="fees-tab-hdr show-sm">
                  <h6 class="fl-h6 fees-tab-title">Navigate to...</h6>
                </div>
                <div class="fees-tab-inr">
                  <div class="fees-tab-button show-sm">
                    <span>Select faq</span>
                  </div>
                  <ul class="reset-list">
                    <li><a href="#general-questions">General Questions</a></li>
                    <li><a href="#treatment-questions">Treatment Questions</a></li>
                    <li><a href="#our-practice-questions">Our Practice Questions</a></li>
                    <li><a href="#new-patient-questions">New Patient Questions</a></li>
                    <li><a href="#private-dentistry-questions">Private Dentistry Questions</a></li>
                    <li><a href="#fees-questions">Fees Questions</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="faq-grids">
              <div class="faq-grid-item-col" id="general-questions">
                <h3 class="faq-grd-title fl-h5">General Questions</h3>
                <div class="faq-grd-cntlr">
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu active">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">Where are the Cox & Hitchock is the practices?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des active">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What is the difference between NHS and Private dentistry? </h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">How do I make an appointment?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">Do you offer dentistry for children?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">Are you accepting new patients?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What are the fees for your treatments?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What are the locations of your dentist practices?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-grid-item-col" id="treatment-questions">
                <h3 class="faq-grd-title fl-h5">Treatment Questions</h3>
                <div class="faq-grd-cntlr">
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What is the difference between NHS and Private dentistry? </h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">How do I make an appointment?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">Do you offer dentistry for children?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">Are you accepting new patients?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What are the fees for your treatments?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What are the locations of your dentist practices?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-grid-item-col" id="our-practice-questions">
                <h3 class="faq-grd-title fl-h5">Our Practice Questions</h3>
                <div class="faq-grd-cntlr">
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What is the difference between NHS and Private dentistry? </h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">How do I make an appointment?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">Do you offer dentistry for children?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">Are you accepting new patients?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What are the fees for your treatments?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What are the locations of your dentist practices?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-grid-item-col" >
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
                          <h2 class="cta-module-des-title fl-h2"><strong>New </strong>to the area?</h2>
                          <p>If you’ve recently moved to Cardiff and need a dentist, or simply fancy changing, get in touch. We are more than happy to talk to you about how we can help.</p>
                        </div>
                      </div>
                      <div class="cta-btn-ctlr">
                        <div class="cta-btn">
                          <a href="#" class="cdc-btn">See Our Locaitons</a>                     
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-grid-item-col" id="new-patient-questions">
                <h3 class="faq-grd-title fl-h5">New Patient Questions</h3>
                <div class="faq-grd-cntlr">
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What is the difference between NHS and Private dentistry? </h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">How do I make an appointment?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">Do you offer dentistry for children?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">Are you accepting new patients?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What are the fees for your treatments?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What are the locations of your dentist practices?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-grid-item-col" id="private-dentistry-questions">
                <h3 class="faq-grd-title fl-h5">Private Dentistry Questions</h3>
                <div class="faq-grd-cntlr">
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What is the difference between NHS and Private dentistry? </h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">How do I make an appointment?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">Do you offer dentistry for children?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">Are you accepting new patients?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What are the fees for your treatments?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What are the locations of your dentist practices?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-grid-item-col"id="fees-questions">
                <h3 class="faq-grd-title fl-h5">Fees Questions</h3>
                <div class="faq-grd-cntlr">
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What is the difference between NHS and Private dentistry? </h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">How do I make an appointment?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">Do you offer dentistry for children?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">Are you accepting new patients?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What are the fees for your treatments?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-grd">
                    <div class="faq-grd-item">
                      <div class="faq-accordion-menu">
                        <div class="faq-accordion-hdr">
                          <h3 class="faq-accordion-title fl-h6">What are the locations of your dentist practices?</h3>
                          <div class="faq-accordion-icon-box">
                            <i class="faq-icon">
                              <svg class="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-svg"></use> 
                              </svg>
                            </i>
                            <i class="faq-active-icon">
                              <svg class="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                                <use xlink:href="#faq-list-icon-active-svg"></use> 
                              </svg>
                            </i>
                          </div>
                        </div>
                        <div class="faq-accordion-des">
                          <p>Cras tortor tellus at sed id cras. Curabitur et lacus ante tortor dui euismod quam nisl. Montes, eget sed consectetur ultrices vestibulum pellentesque faucibus. Dolor neque sed eget turpis sed. Iaculis velit suscipit tellus pulvinar justo, habitant lectus pellentesque imperdiet. Dignissim congue pretium, nulla nulla gravida vitae at. Orci orci laoreet sit lacus sit nisi, sodales.</p>
                          <a href="#" class="cdc-btn">Find Out More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-grid-item-col">
                <div class="cta-module-cntlr">
                  <div class="cta-module-wrp parallaxie" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/faq-cta-sec-bg.jpg);">
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
                          <h2 class="cta-module-des-title fl-h2"><strong>Contact </strong>Us</h2>
                          <p>Praesent imperdiet leo in odio in bibendum aliquet. Est consectetur amet, porttitor turpis. Scelerisque sed eu auctor fringilla nunc.</p>
                        </div>
                      </div>
                      <div class="cta-btn-ctlr">
                        <div class="cta-btn">
                          <a href="#" class="cdc-btn">Contact Us</a>                     
                        </div>
                      </div>
                    </div>
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