<?php 
/**
* Get the image tag with alt/title tag
*/
function cbv_get_image_tag( $id, $size = 'full', $title = false ){
  if( isset( $id ) ){
    $output = '';
    $image_title = get_the_title($id);
    $image_alt = get_post_meta( $id, '_wp_attachment_image_alt', true);
    if( empty( $image_alt ) ){
      $image_alt = $image_title;
    }
    $image_src = wp_get_attachment_image_src( $id, $size, false );

    if( $title ){
      $output = '<img src="'.$image_src[0].'" alt="'.$image_alt.'" title="'.$image_title.'">';
    }else{
      $output = '<img src="'.$image_src[0].'" alt="'.$image_alt.'">';
    }

    return $output;
  }
  return false;
}

/**
* Get the image src url by attachement it
*/
function cbv_get_image_src( $id, $size = 'full' ){
  if( isset( $id ) ){
    $afbeelding = wp_get_attachment_image_src($id, $size, false );
    if( is_array( $afbeelding ) && isset( $afbeelding[0] ) ){
      return $afbeelding[0];
    }
  }
  return false;
}
/**
* Get the image tag with alt/title tag
*/
function cbv_get_image_alt( $url ){
  if( isset( $url ) ){
    $output = '';
    $id = attachment_url_to_postid($url);
    $image_title = get_the_title($id);
    $image_alt = get_post_meta( $id, '_wp_attachment_image_alt', true);
    if( empty( $image_alt ) ){
      $image_alt = $image_title;
    }
    $image_alt = str_replace('-', ' ', $image_alt);
    $output = $image_alt;

    return $output;
  }
  return false;
}

function cbv_get_image_alt_by_id( $id ){
  if( isset( $id ) ){
    $output = '';
    $image_title = get_the_title($id);
    $image_alt = get_post_meta( $id, '_wp_attachment_image_alt', true);
    if( empty( $image_alt ) ){
      $image_alt = $image_title;
    }
    $image_alt = str_replace('-', ' ', $image_alt);
    $output = $image_alt;

    return $output;
  }
  return false;
}
function cbv_imagegrid( $image, $desc, $position = 'left' ){
  $output = '';
  if( !empty( $image ) && !empty( $desc ) ){
    $output = ( $position == 'left' ) ? 
      "<div class='df-text-rgt-img-grd-2 clearfix'>" : 
      "<div class='df-text-lft-img-grd-2 clearfix'>";
    $output .= '<div>' .cbv_get_image_tag( $image ). '</div>';
    $output .= '<div>' .wpautop( $desc ). '</div>';
    $output .= "</div>";
  }
  return $output;
}
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function phone_preg( $show_telefoon ){
  $replaceArray = '';
  $spacialArry = array(".", "/", " ", ")", "(");
  $show_telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  return $show_telefoon;
}

function array_insert(&$array, $position, $insert_arr)
{
    if (is_int($position)) {
        return array_merge(array_slice($array, 0, $position), $insert_arr, array_slice($array, $position));
    }
    return false;
}


function wpmu_role_based_style() {
  
    if( isset($_GET['taxonomy']) && $_GET['taxonomy'] == 'product_cat' ){
    ?>
    <style>
      .taxonomy-product_cat .form-field.term-description-wrap{display:none;}
    </style>
    <?php 
    }
}

// for back-end; comment out if you don't want to hide in back-end
add_action( 'admin_footer', 'wpmu_role_based_style', 99 );
function cbv_table( $table, $title =''){
  if ( ! empty ( $table ) ) {
    echo '<div class="dft-tbl-wrap">';
    if( !empty($title) ) printf('<h6 class="fl-h6">%s</h6>', $title);
    echo '<div class="table-dsc" data-aos="fade-up" data-aos-delay="200">
    <table>';
    if ( ! empty( $table['caption'] ) ) {
      echo '<caption>' . $table['caption'] . '</caption>';
    }
    if ( ! empty( $table['header'] ) ) {
      echo "<thead class='dfp-thead'>";
      echo '<tr>';
      echo '<th><span>#</span></th>';
      foreach ( $table['header'] as $th ) {
        echo '<th><span>';
        echo $th['c'];
        echo '</span></th>';
      }
      echo '</tr>';
      echo '</thead>';
    }
    echo '<tbody>';
    $i = 1;
    foreach ( $table['body'] as $tr ) {
      echo '<tr>';
      echo '<td><span class="mHc">'.$i.'</span></td>';
      foreach ( $tr as $td ) {
        echo '<td>';
        if(!empty($td['c'])){
          echo $td['c'];
        }else{
          echo '-';
        }
        echo '</td>';
      }
      echo '</tr>';
      $i++;
    }
    echo '</tbody>';
    echo '</table></div>';
    echo '</div>';
  }  
}
function get_link_by_page_template( $pagetemplate ){
    $pagelink = '#';
    if( !empty($pagetemplate) ){
      $page_details = get_pages( array(
       'post_type' => 'page',
       'meta_key' => '_wp_page_template',
       'hierarchical' => 0,
       'meta_value' => $pagetemplate
      ));
      if($page_details){
        foreach($page_details as $page_detail){
          $pagelink = get_permalink($page_detail->ID);
        }
      }
    }
  return $pagelink;
}
function get_id_by_page_template( $pagetemplate ){
    $pageID = '';
    if( !empty($pagetemplate) ){
      $page_details = get_pages( array(
       'post_type' => 'page',
       'meta_key' => '_wp_page_template',
       'hierarchical' => 0,
       'meta_value' => $pagetemplate
      ));
      if($page_details){
        foreach($page_details as $page_detail){
          $pageID = $page_detail->ID;
        }
      }
    }
  return $pageID;
}
function get_title_by_page_template( $pagetemplate ){
    $post_title = '';
    if( !empty($pagetemplate) ){
      $page_details = get_pages( array(
       'post_type' => 'page',
       'meta_key' => '_wp_page_template',
       'hierarchical' => 0,
       'meta_value' => $pagetemplate
      ));
      if($page_details){
        foreach($page_details as $page_detail){
          $post_title = $page_detail->post_title;
        }
      }
    }
  return $post_title;
}


function product_placeholder($format = 'src'){
  $placehoder = get_field('placeholder', 'options');
  if( !empty($placehoder) ){
      if( $format == 'src' ){
        $placeholder = !empty($placehoder['product'])? cbv_get_image_src($placehoder['product']):'';
      }else{
        $placeholder = !empty($placehoder['product'])? cbv_get_image_tag($placehoder['product']):'';
      }
      return $placeholder;
  }
  return '';

}

function blog_placeholder($format = 'src'){
  $placehoder = get_field('placeholder', 'options');
  if( !empty($placehoder) ){
      if( $format == 'src' ){
        $placeholder = !empty($placehoder['blog'])? cbv_get_image_src($placehoder['blog']):'';
      }else{
        $placeholder = !empty($placehoder['blog'])? cbv_get_image_tag($placehoder['blog']):'';
      }
      return $placeholder;
  }
  return '';

}

function banner_placeholder($format = 'src'){
  $placehoder = get_field('placeholder', 'options');
  if( !empty($placehoder) ){
      if( $format == 'src' ){
        $placeholder = !empty($placehoder['banner'])? cbv_get_image_src($placehoder['banner']):'';
      }else{
        $placeholder = !empty($placehoder['banner'])? cbv_get_image_tag($placehoder['banner']):'';
      }
      return $placeholder;
  }
  return '';

}

function no_result_text(){
  $no_results = get_field('no_results', 'options');
  if( !empty($no_results) ){
    $text = $no_results;
  }else{
    $text = __( 'Geen resultaat', 'printout' );
  }
  return $text;

}
function bv_get_current_year(){
    return date('Y');
}
add_shortcode( 'cyear', 'bv_get_current_year' );

function cbv_get_excerpt(){
  global $post;
  $link = '<a href="'. get_permalink($post->ID) . '">'.__(' ....more', 'printout').'</a>';
  $excerpt = explode(' ', get_the_excerpt());
  //array_pop($excerpt);
  $excerpt = implode(" ",$excerpt);
  $excerpt .= $link;
  return wpautop($excerpt);
}

function cbv_site_url(){
  echo esc_url( home_url('/') );
}

function get_team_members( $ids = array() ){

  if( !empty($ids) ){
    $args = array(
      'post_type' => 'team',
      'post__in' => $ids,
      'orderby' => 'rand'
    );
  }else{
    $args = array(
      'post_type' => 'team',
      'posts_per_page' => 4,
      'orderby' => 'rand'
    ); 
  }

  $query = new WP_Query($args);

  $output = '';
  if( $query->have_posts() ){
    $output .= '<div class="team-grid teamSlider">';
    $i = 1;
    while( $query->have_posts() ): $query->the_post();
      $imgID = get_post_thumbnail_id(get_the_ID());
      $pos = get_field('positie', get_the_ID());
      if( $i == 2 ) {
        $delay = '300';
      }
      elseif( $i == 3 ){
        $delay = '400';
      }
      elseif( $i == 4 ){
        $delay = '500'; $i = 0;
      }
      else{
        $delay = '200';
      }
        $output .= '<div class="team-grid-item-col" data-aos="fade-up4" data-aos-delay="'.$delay.'">';
        $output .= '<div class="team-grid-item">';
          $output .= '<div class="team-grd-item-inner">';
            if( !empty($imgID) ){
              $output .= '<div class="team-grd-item-img has-inline-bg">';
                $output .= cbv_get_image_tag($imgID);
                $output .= '<div class="team-grd-img inline-bg" style="background-image: url('.cbv_get_image_src($imgID).');"></div>';
                $output .= '<div class="sec-btm-bdr">
                  <ul class="reset-list">
                    <li style="background: #FF4989;"></li>
                    <li style="background: #FF9B4C;"></li>
                    <li style="background: #39B76B;"></li>
                    <li style="background: #339F95;"></li>
                    <li style="background: #8E3EFC;"></li>
                  </ul>';
                $output .= '</div>';
              $output .= '</div>';
            }
            $output .= '<div class="team-grd-item-des">';
              $output .= '<h3 class="fl-h5 team-grd-item-des-title mHc">'.get_the_title().'</h3>';
              if( !empty($pos) ) $output .= '<span>'.$pos.'</span>';
            $output .= '</div>';
          $output .= '</div>';
        $output .= '</div>';
      $output .= '</div>';
    $i++;
    endwhile;
    $output .= '</div>';
  }
  wp_reset_postdata();
  if( !empty($output) )
    return $output;
  else
    return false;

}

function get_faqs( $ids = array() ){
  if( !empty($ids) ){
    $args = array(
      'post_type' => 'faqs',
      'post__in' => $ids,
      'orderby' => 'rand'
    );
  }else{
    $args = array(
      'post_type' => 'faqs',
      'posts_per_page' => 3,
      'orderby' => 'rand'
    ); 
  }

  $query = new WP_Query($args);

  $output = '';
  if( $query->have_posts() ){
    $output .= '<div class="faq-accordion-grd">';
    while( $query->have_posts() ): $query->the_post();
        $output .= '<div class="faq-accordion-grd-item-col" data-aos="fade-up4" data-aos-delay="400">';
          $output .= '<div class="faq-accordion-grd-item">';
            $output .= '<div class="faq-accordion-menu">';
              $output .= '<div class="faq-accordion-hdr">';
                $output .= '<h3 class="faq-accordion-title fl-h4">'.get_the_title().'</h3>';  
              $output .= '</div>';
              $output .= '<div class="faq-accordion-des">';
                $output .= get_the_content();
              $output .= '</div>';
            $output .= '</div>';
          $output .= '</div>';
        $output .= '</div>';

    endwhile;
    $output .= '</div>';
  }
  wp_reset_postdata();
  if( !empty($output) )
    return $output;
  else
    return false;
}

function get_producten_by_term_id($term_id = ''){
  
  if( empty($term_id) ) return;
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => -1,
      'orderby' => 'rand',
      'tax_query' => array(
        array(
          'taxonomy' => 'product_cat',
          'field' => 'term_id',
          'terms' => array($term_id)
        )
      )
    ); 

  $query = new WP_Query($args);

  $output = '';
  if( $query->have_posts() ){
    while( $query->have_posts() ): $query->the_post();
        global $product;
        $imgID = get_post_thumbnail_id($product->get_id());
        $img_url = ( !empty($imgID) )?cbv_get_image_src($imgID):product_placeholder();
        $output .= '<div class="pro-grd-item-col">';
        $output .= '<div class="pro-grd-item">';
        $output .= '<div class="pro-grd-img-cntlr">';
        $output .= '<a href="'.get_permalink( $product->get_id() ).'" class="overlay-link"></a>';
        $output .= '<div class="pro-img inline-bg" style="background-image: url('.$img_url.');"></div>';
        $output .= '</div>';
        $output .= '<div class="pro-grd-des mHc">';
        $output .= '<h3 class="pro-des-title fl-h5 mHc1"><a href="'.get_permalink( $product->get_id() ).'">'.$product->get_title().'</a></h3>';
        $output .= '<div class="pro-des-inr mHc2">';
        $output .= $product->get_short_description();
        $output .= '</div>';
        $output .= '<div class="pro-price">';
        $output .= '<span>'.__('Vanaf', 'woocommerce').'</span>';
        $output .= $product->get_price_html();
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</div>';

    endwhile;
  }
  wp_reset_postdata();
  if( !empty($output) )
    return $output;
  else
    return false;
}


function get_producten_by_ids($ids = array()){
  
  if( !empty($ids) ){
    $args = array(
      'post_type' => 'product',
      'post__in' => $ids,
      'orderby' => 'rand'
    );
  }else{
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 4,
      'orderby' => 'rand'
    ); 
  } 

  $query = new WP_Query($args);

  $output = '';
  if( $query->have_posts() ){
    while( $query->have_posts() ): $query->the_post();
        global $product;
        $imgID = get_post_thumbnail_id($product->get_id());
        $img_url = ( !empty($imgID) )?cbv_get_image_src($imgID):product_placeholder();
        $output .= '<div class="surprise-slide-item">';
        $output .= '<div class="surprise-slide-item-inr">';
        $output .= '<div class="surprise-slide-fea-img img-div-scale-hover">';
        $output .= '<div class="inline-bg" style="background: url('.$img_url.');"></div>';
        $output .= '<a href="'.get_permalink( $product->get_id() ).'" class="overlay-link"></a>';
        $output .= '</div>';
        $output .= '<div class="surprise-slide-des mHc">';
        $output .= '<h3 class="fl-h5 ssd-title mHc1"><a href="'.get_permalink( $product->get_id() ).'">'.$product->get_title().'</a></h3>';
        $output .= '<div class="mHc2">';
        $output .= wpautop($product->get_short_description());
        $output .= '</div>';
        $output .= '<div class="po-price">';
        $output .= '<span>'.__('Vanaf', 'woocommerce').'</span>';
        $output .= $product->get_price_html();
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</div>';
    endwhile;
  }
  wp_reset_postdata();
  if( !empty($output) )
    return $output;
  else
    return false;
}