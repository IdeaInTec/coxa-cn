<?php

wp_enqueue_script('twentytwenty.event.js', get_template_directory_uri() . '/assets/twentytwenty-master/jquery.event.move.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('twentytwenty.js', get_template_directory_uri() . '/assets/twentytwenty-master/jquery.twentytwenty.js', array('jquery'), '1.0.0', true);
wp_enqueue_style('twentytwenty-style', get_template_directory_uri() . '/assets/twentytwenty-master/twentytwenty.css', array(), '1.0.0');