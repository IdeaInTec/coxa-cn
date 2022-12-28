<?php 
	get_header(); 
	get_template_part('templates/page', 'banner');
?>

<?php
	$description = get_field('description');
?>

<section class="privacy-policy-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="privacy-plcy-sec-inr">
          <div class="privacy-plcy-sec-cntlr">
            <div class="privacy-plcy-des">
              <?php if(!empty($description)) echo $description; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>