<?php
/**
 * The main template file.
 *
 * @package Genesis Block Theme
 */

get_header(); ?>


TEST TEST TEST
    
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div id="post-wrap">
				<?php
				if ( have_posts() ) :

					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content' );
					endwhile;

				else :

					get_template_part( 'template-parts/content-none' );

				endif;
				?>
			</div>

			<?php the_posts_pagination(); ?>
		</main><!-- #main -->
			</div><!-- #primary -->

<?php get_footer(); ?>
