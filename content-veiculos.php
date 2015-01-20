<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Ceará Veículos
 * @since Ceará Veículos
 */
// WP_Query arguments
?>

<div class="pagina-carros">
    <div class="busca-carros">
        <?php
        get_search_form();
        ?>
    </div>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div style="clear: both"></div>
        <ul class="lista-carros">

            <?php
            wp_reset_postdata();
            global $post;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $newsLoop = array(
                'post_type' => 'car',
                'numberposts' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
                'posts_per_page' => 18,
                'paged' => $paged
            );

            $newsLoop = new WP_Query($newsLoop);
            ?>
            <?php
            while ($newsLoop->have_posts()) : $newsLoop->the_post();
                ?>
                <li>
                    <div class="news">  
                        <header>
                            <h2 class="entry-title">
                                <strong><?php the_title(); ?></strong>
                            </h2>
                        </header>              
                        <p>
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>
                            <img src="<?php echo $image[0]; ?>" alt="Imagem Post" width="240" height="200"/>
                        </p>
                        <p class="vermelho-botao">
                            <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                                Veja Mais
                            </a>
                        </p>
                    </div> 
                </li>
            <?php endwhile; ?>
        </ul>
    </article><!-- #post -->
    <div class="navigation">
        <?php
        if ($newsLoop) : wp_reset_query();
            wp_pagenavi(array('query' => $newsLoop));
            wp_reset_postdata();
        endif;
        ?>
    </div>
</div>
