<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Ceará Veículos
 * @since Ceará Veículos
 */
get_header();
?>

<section id="primary" class="site-content">
    <div id="content" role="main">

        <?php if (have_posts()) : ?>
            <div class="pagina-carros">
                <div class="busca-carros">
                    <?php
                    get_search_form();
                    ?>
                </div>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div style="clear: both"></div>
                    <header class="entry-header">
                        <h2 class="entry-title">
                            <?php _e('Resultados de: ', 'cearaveiculos'); ?><span><?php the_search_query(); ?></span>
                        </h2>
                    </header>
                    <?php
                    global $wp_query;
                    $total_pages = $wp_query->max_num_pages;
                    if ($total_pages > 1) {
                        ?>
                        <div id="nav-above" class="navigation">
                            <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">«</span> Veja mais Veículos', 'cearaveiculos')) ?></div>
                            <div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">»</span>', 'cearaveiculos')) ?></div>
                        </div><!-- #nav-above -->
                    <?php } ?>   
                    <?php while (have_posts()) : the_post(); ?>

                        <div class="box-busca">
                            <header>
                                <h3>
                                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="link-busca"><?php the_title(); ?></a>
                                    <?php the_excerpt(); ?>
                                </h3>
                            </header>
                        </div> 
                    <?php endwhile; ?>
                </article><!-- #post -->
                <?php wp_pagenavi(); ?>
            </div>

        <?php else : ?>

            <article id="post-0" class="post no-results not-found">
                <header class="entry-header">
                    <h2 class="entry-title"><?php _e('Nada Encontrado', 'cearaveiculos'); ?></h2>
                </header>

                <div class="entry-content">
                    <p><?php _e('Desculpe. Mas nada foi encontrado', 'cearaveiculos'); ?></p>
                    <div class="busca-carros busca-pagina">
                        <?php
                        get_search_form();
                        ?>
                    </div>

                </div><!-- .entry-content -->
            </article><!-- #post-0 -->

        <?php endif; ?>

    </div><!-- #content -->
</section><!-- #primary -->
<?php get_footer(); ?>