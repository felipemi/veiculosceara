<?php
/**
 * The template for displaying posts in the Image post format
 *
* @package WordPress
 * @subpackage Ceará Veículos
 * @since Ceará Veículos
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
		</div><!-- .entry-content -->
	</article><!-- #post -->
