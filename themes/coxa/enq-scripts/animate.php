<?php
wp_enqueue_script('aos.js', get_template_directory_uri() . '/assets/animation/aos.js', array('jquery'), '1.0.0', true);
wp_enqueue_style('aos', get_template_directory_uri() . '/assets/animation/aos.css', array(), null);