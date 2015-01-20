<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Ceará Veículos
 * @since Ceará Veículos
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if (!is_page_template('page-templates/front-page.php')) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        <h2 class="entry-title"><?php the_title(); ?></h2>
    </header>
</article><!-- #post -->
