<?php 
	get_header(); 
  while( have_posts()): the_post();
  $thisID = get_the_ID();
	get_template_part('templates/page', 'banner');
?>


<div class="default-page-con-cntlr">
  <section class="privacy-policy-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="privacy-plcy-sec-inr">
            <div class="privacy-plcy-sec-cntlr">
              <div class="privacy-plcy-des">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


<?php endwhile; get_footer(); ?>
