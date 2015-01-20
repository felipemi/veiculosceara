<?php
/**
 * The template for displaying posts in the Aside post format
 *
 * @package WordPress
 * @subpackage Ceará Veículos
 * @since Ceará Veículos
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="aside">
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <div class="entry-content">
            <?php the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'cearaveiculos')); ?>
        </div><!-- .entry-content -->
    </div><!-- .aside -->
</article><!-- #post -->
