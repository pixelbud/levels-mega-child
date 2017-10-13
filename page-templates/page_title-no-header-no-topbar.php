<?php
/**
 * Template Name: MM - Slim with Title - Hide Page Header and Top Bar
 * @package levels
 */

function levels_hide_topbar() {
	return true;
}

get_header(); ?>

	<div id="primary" class="container container--normal">
		<main id="main" class="site-main" role="main">

			<div class="break">
				<header class="header header--wp header--mm-slim">
					<div class="container container--widened" style="position: relative !important;">
						<a href="<?php bloginfo('url'); ?>"><img class="mm-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/mm_logo.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/mm_logo.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/images/mm_logo@2x.png 2x" alt="<?php bloginfo('name'); ?>" border="0"></a>
						<a class="button mm-button large--lightest large--lightest-right-header">Book a Consultation</a>
					</div>
				</header>
			</div>

			<h1><?php the_title(); ?></h1>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'title-no-header' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
