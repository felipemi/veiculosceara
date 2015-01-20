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

    <div class="entry-content">
        <div class="contact-left">
            <h3>
                Endereço<br />Rua: Marechal Deodoro, 1864, União da Vitória - PR <br />
                Telefone: (042) 3523-3451
            </h3>
        </div>
        <div class="formulario">
             <?php echo do_shortcode('[contact-form-7 id="27" title="Formulário de Contato"]'); ?>  
        </div>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.3601837797078!2d-51.09173885967857!3d-26.24997114850296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e68a039bd5cb19%3A0x19f350184f0230fd!2sR.+Mal.+Deodoro%2C+1864%2C+Porto+Uni%C3%A3o+-+PR%2C+84600-000!5e0!3m2!1spt-BR!2sbr!4v1418415816051" width="450" height="300" frameborder="0" style="border:0"></iframe>
        </div>
    </div><!-- .entry-content -->
</article><!-- #post -->
