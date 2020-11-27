<?php
/**
 * The main template file
 *
 * @package WordPress/ClassicPress
 * @subpackage Courtney_Theme
 * @since 1.0.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" itemscope itemprop="mainContentOfPage">

		<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content/content', get_post_type() );

			endwhile;

		else :

			get_template_part( 'template-parts/content/content', 'none' );

		endif; ?>

		</main>
	</div>

<?php get_footer();
