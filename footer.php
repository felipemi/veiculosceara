<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Ceará Veículos
 * @since Ceará Veículos
 */
?>
</div><!-- #main .wrapper -->
<footer id="colophon" role="contentinfo">
    <div class="main">
        <div class="endereco">
            <address>
                <span>Endereço: Marechal Deodoro, 1864 <br />
                    União da Vitória - PR. 89400-000 <br />
                    <p>Telefone: 42 3523-3451</p>
                    <a href="mailto:contato@cearaveiculos.com.br" title="Entre em contato com a Ceará Veículos">
                        E-mail: contato@veiculosceara.com.br
                    </a>
                </span>
            </address>
            <div class="logo-footer">
                <img src="<?php bloginfo('template_url') ?>/img/img-logo-footer-ceara-veiculos.png" alt="Logo Footer Ceará Veículos"/>     
            </div>
        </div><!-- .site-info -->
        <div class="texto-centralizado">
            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fcearaveiculosuv%3Ffref%3Dts&amp;width=500&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; background: #fff; margin-top: 15px; margin-bottom: 15px; overflow:hidden; width:500px; margin-left: 96px; height:290px;" allowTransparency="true"></iframe>
        </div>
    </div>
    <div class="webmail">
        <a href="http://webmail.veiculosceara.com.br" title="Acessar WebMail" target="_blank">WebMail. Ceará Veículos</a>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/engine1/wowslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/engine1/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>