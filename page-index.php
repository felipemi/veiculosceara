<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Ceará Veículos
 * @since Ceará Veículos
 * Template Name: Pagina Index
 */
get_header();
?>
<div id="wowslider-container1">
    <div class="ws_images">
        <ul>
            <li><img src="<?php bloginfo('template_url'); ?>/data1/images/banner1.jpg" alt="" title="" id="wows1_0"/></li>
            <li><img src="<?php bloginfo('template_url'); ?>/data1/images/banner2.jpg" alt="banner2" title="banner2" id="wows1_1"/></li>
            <li><img src="<?php bloginfo('template_url'); ?>/data1/images/banner3.jpg" alt="full screen slider" title="banner3" id="wows1_2"/></li>
            <li><img src="<?php bloginfo('template_url'); ?>/data1/images/banner4.jpg" alt="banner4" title="banner4" id="wows1_3"/></li>
        </ul>
    </div>
    <div class="ws_shadow"></div>
</div>	
<div id="primary">
    <div id="content" role="main">
        <div class="clear"></div> 
        <div class="content-middle">
            <div class="wrap">
                <div class="section group example">
                    <div class="col_1_of_2 span_1_of_2">
                        <div class="thumb-pad3">
                            <figure>
                                <img src="<?php bloginfo('template_url'); ?>/img/img-nissan-frontier.jpg" alt="Imagem Nissan Frontier SV Ceará Veículos"/>
                                <em class="sp1"></em>
                            </figure>
                        </div>
                    </div>
                    <div class="col_1_of_2 span_1_of_2">
                        <p class="title1">Carros</p>
                        <p class="title2">Nissan Frontier SV Attack 4x4</p>
                        <a href="<?php echo get_page_link(7); ?>" class="btn" title="Confira os nossos outros veículos">Confira nossos outros veículos</a>
                    </div>
                    <div class="clear"></div> 
                </div>
            </div>
        </div>
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>