<?php
  /* Shortcodes for the Tactics Dashboard
   * Dependant on the WPcomplete plugin, which has to be activated.
   */

   // [course-contain] shortcode
   function shortcode_course_contain( $atts, $content = null ) {

     // create course container
     return
        '<div class="course-contain">' . do_shortcode($content) . '</div>';
   }
   add_shortcode('course-contain', 'shortcode_course_contain');

   // [mm-header] shortcode
   function shortcode_mm_header( $atts, $content = null ) {

     // create course
     return

       '<div class="break"><header class="header header--wp header--centered header--mm"><div class="container container--widened">' . do_shortcode($content) . '</div></header></div>';
   }
   add_shortcode('mm-header', 'shortcode_mm_header');

   // [mm-button] shortcode
   function shortcode_mm_button( $atts, $content = null ) {
     $atts = shortcode_atts(
        array(
            'style' => '',
            'link' => '#',
            'width' => '100%'
        ), $atts, 'mm-button'
      );
     // create course
     return
       '<a class="button ' . $atts[style] . '" href="' . $atts[link] . '" style="width:' . $atts[width] . ';">' . do_shortcode($content) . '</a>';
   }
   add_shortcode('mm-button', 'shortcode_mm_button');
 ?>
