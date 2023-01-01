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

function treatment_placeholder($format = 'src'){
  $placehoder = get_field('treatment', 'options');
  if( !empty($placehoder) ){
      if( $format == 'src' ){
        $placeholder = !empty($placehoder)? cbv_get_image_src($placehoder):'';
      }else{
        $placeholder = !empty($placehoder)? cbv_get_image_tag($placehoder):'';
      }
      return $placeholder;
  }
  return '';

}

function banner_placeholder($format = 'src'){
  $placehoder = get_field('banner', 'options');
  if( !empty($placehoder) ){
      if( $format == 'src' ){
        $placeholder = !empty($placehoder)? cbv_get_image_src($placehoder):'';
      }else{
        $placeholder = !empty($placehoder)? cbv_get_image_tag($placehoder):'';
      }
      return $placeholder;
  }
  return '';

}


function get_team_detail_by_id(){
    $data = array();
    if (isset( $_POST["port"] ) && $_POST["port"] == '01' && isset($_POST["team_id"]) && !empty($_POST["team_id"]) ) {
      $teamID = $_POST["team_id"];
        $output = '';
        $args = array(
          'post_type' => 'team',
          'posts_per_page' => 1,
          'post__in' => array($teamID)
        );
        $loop = new WP_Query($args);
        if($loop->have_posts()){
          while($loop->have_posts()){ $loop->the_post();
          global $post;
          $thumbID = get_post_thumbnail_id($post->ID);
          $image_tag = !empty($thumbID)? cbv_get_image_tag($thumbID) : '';
          $designation = get_field('designation', $post->ID);
          $gdc_no = get_field('gdc_no', $post->ID);
          $experience = get_field('experience', $post->ID);
          $link = get_field('link', $post->ID);
          $output .='<div class="pro-modal-con-cntlr">';
            if( !empty($image_tag) ){
            $output .='<div class="pro-modal-con-lft">';
              $output .='<div class="pro-modal-img-cntlr">';
                $output .= $image_tag;
              $output .='</div>';
            $output .='</div>';
            }
            $output .='<div class="pro-modal-con-rgt">';
              $output .='<div class="pro-modal-des-cntlr">';
                $output .='<h2 class="pro-modal-title fl-h3">'.get_the_title().'</h2>';
                if( !empty($designation) || !empty($gdc_no) ){
                $output .='<h2 class="pro-modal-assist-name fl-h5">';
                $output .= $designation;
                if( !empty($gdc_no) ) $output .= '<span>GDC No: '.$gdc_no.'</span>';
                $output .='</h2>';
                }
                if( !empty($experience) ){
                  $output .='<div class="pro-modal-addr">';
                    $output .='<span>'.$experience.'</span>';
                  $output .='</div>';
                }
                if( get_the_content() ){
                  $output .='<div class="pro-modal-des">';
                  $output .= wpautop(get_the_content());
                  $output .='</div>';
                }
              $output .='</div>';
              if( is_array($link) && !empty($link['url']) ){
              $output .='<div class="pro-modal-btn">';
                $link_title = !empty($link['title'])?$link['title']: __('Book Private Consultation', 'coxa');
                $output .='<a class="cdc-btn" href="'.$link['url'].'" target="'.$link['target'].'">'.$link_title.'</a>';
              $output .='</div>';
              }
            $output .='</div>';
          $output .='</div>';
          }
        }
    }
    wp_reset_postdata();
    $data['team'] = $output;
    echo json_encode($data);
    wp_die();
}

add_action('wp_ajax_get_team_detail_by_id', 'get_team_detail_by_id');
add_action('wp_ajax_nopriv_get_team_detail_by_id', 'get_team_detail_by_id');