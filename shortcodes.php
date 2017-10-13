<?php
  /* Shortcodes
   */

   // [mm-header] shortcode
   function shortcode_mm_header( $atts, $content = null ) {

     // create expanded header for page template
     return

       '<div class="break"><header class="header header--wp header--centered header--mm"><div class="container container--widened">' . do_shortcode($content) . '</div></header></div>';
   }
   add_shortcode('mm-header', 'shortcode_mm_header');

   // [mm-header] shortcode
   function shortcode_mm_slim_header( $atts, $content = null ) {

     // create expanded header for page template
     return

       '<div class="break"><header class="header header--wp header--mm-slim"><div class="container container--widened" style="position: relative;">' . do_shortcode($content) . '</div></header></div>';
   }
   add_shortcode('mm-slim-header', 'shortcode_mm_slim_header');

   // [mm-button] shortcode
   function shortcode_mm_button( $atts, $content = null ) {
     $atts = shortcode_atts(
        array(
            'style' => '',
            'link' => '#',
            'width' => '100%'
        ), $atts, 'mm-button'
      );
     // create button
     return
       '<a class="button ' . $atts[style] . '" href="' . $atts[link] . '" style="width:' . $atts[width] . ';">' . do_shortcode($content) . '</a>';
   }
   add_shortcode('mm-button', 'shortcode_mm_button');

   // [u-highlight] shortcode
   function shortcode_mm_uhighlight( $atts, $content = null ) {
     return
      '<div class="container container--normal u-highlight">' . do_shortcode($content) . '</div>';
   }
   add_shortcode('u-highlight', 'shortcode_mm_uhighlight');

   // [mm-callout] shortcode
   function shortcode_mm_callout( $atts, $content = null ) {
     $atts = shortcode_atts(
        array(
            'header' => '',
            'ptext' => '',
            'action' => '',
            'btn_class' => 'large--default-outline',
            'btn_text' => '100%'
        ), $atts, 'mm-callout'
      );
     // create callout
     return
      '<div class="callout-box callout-box--spaced mm-callout-box">' .
      '<div class="callout-box__content-left"><h2>' . $atts[header] . '</h2>' .
      '<p class="u-center">' . $atts[ptext] . '</p></div>' .
      '<div class="callout-box__content-right">' .
      '<form class="form-vertical" action="'. $atts[action] . '">' .
      '<div class="form-vertical__row"><label class="form-vertical__label" for="name">First Name</label>' .
      '<input class="form-input-text" name="name" type="text" /></div>' .
      '<div class="form-vertical__row"><label class="form-vertical__label" for="name">Email</label>' .
      '<input class="form-input-text" name="email" type="email" /></div>' .
      '<div class="form-vertical__row--submit">' .
      '<button class="' . $atts[btn_class] . '" type="submit">' . $atts[btn_text] . '</button>' . do_shortcode($content) . '</div></form></div></div>';
   }
   add_shortcode('mm-callout', 'shortcode_mm_callout');
 ?>
