<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Ceará Veículos
 * @since Ceará Veículos
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
        <header class="entry-header">
            <h2 class="entry-title">
                <?php the_title(); ?>
            </h2>
        </header><!-- .entry-header -->
        <?php if (is_search()) : // Only display Excerpts for Search ?>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
        <?php else : ?>
            <div class="box-veiculos">
                <div class="informacoes-veiculo">
                    <span><strong>Ano do Veículo:</strong> <?php echo get_post_meta($post->ID, "_ano_car", true); ?></span><br />
                    <span><strong>Exterior do Veículo:</strong> <?php echo get_post_meta($post->ID, "_exterior_car", true); ?></span><br />
                    <span><strong>Portas do Veículo:</strong> <?php echo get_post_meta($post->ID, "_portas_car", true); ?></span><br />
                    <span><strong>Quilometragem:</strong> <?php echo get_post_meta($post->ID, "_quilometragem_car", true); ?></span><br />
                    <span><strong>Transmissão:</strong> <?php echo get_post_meta($post->ID, "_transmissao_car", true); ?></span><br />
                    <span><strong>Marca / Modelo:</strong> <?php echo get_post_meta($post->ID, "_marca_car", true); ?></span>
                </div>
                <div class="descricao-completa">
                    <header>
                        <h3>Descrição do Veículo</h3>
                    </header>
                    <p>
                        <?php echo get_post_meta($post->ID, "_descricao_car", true); ?>
                    </p>
                </div>
            </div>
            <div class="entry-content">
                <p>
                    <?php echo the_content(); ?>
                </p>
            </div><!-- .entry-content -->
        <?php endif; ?>
</article><!-- #post -->
