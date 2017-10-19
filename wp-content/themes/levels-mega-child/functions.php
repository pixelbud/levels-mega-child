<?php
/* Pull in the parent theme's CSS and enqueue the child theme's CSS. */

function levels_child_enqueue_styles() {

    $parent_style = 'levels-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    /* Font Awesome too */
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );
}

add_action( 'wp_enqueue_scripts', 'levels_child_enqueue_styles' );

// Display CSS inside of Visual Editor in the Admin
function levels_child_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'levels_child_theme_add_editor_styles' );


/* SHORTCODES */
/* Add some delicious shortcodes. */
include('shortcodes.php');

// Remove unwanted paragraphs from shortcodes

add_filter( 'the_content', 'levels_child_shortcode_empty_paragraph_fix' );
/**
 * @param string $content  String of HTML content.
 * @return string $content Amended string of HTML content.
 */
function levels_child_shortcode_empty_paragraph_fix( $content ) {

    $array = array(
        '<p>['    => '[',
        ']</p>'   => ']',
        ']<br />' => ']'
    );
    return strtr( $content, $array );

}

?>
