<?php
    /*Template Name: Erro 404	*/
?>
<div id="pagina-interna-heelj" style="height:auto;">
    <?php get_header(); ?>
</div>
<section class="error-wrapper">
    <div class="error-title" data-content="404">404</div>
        <div class="error-subtitle">Opa, a página que você procura não existe.</div>
            <div class="error-buttons">
                <a class="error-button" href="<?php echo esc_url( home_url( '/' ) ); ?>">Voltar a Página Inicial</a>
            </div>
</section>
<?php get_footer(); ?>
