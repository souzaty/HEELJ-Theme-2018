<?php
	/* Template Name: Página Padrão */
?>
<div id="pagina-interna-heelj">
		<?php get_header(); ?>
</div>
<section class="interna-unidades title-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>
<div class="container interna-padrao">
	<div class="row">
        <div class="col-md-9">
            <?php while ( have_posts() ) : the_post();
            	the_content();
            	endwhile; // End of the loop.
            	?>
        </div>
        <!-- End col-md-9 -->
        <div class="col-md-3">
            <?php if(is_active_sidebar('sala-impresa')){
                dynamic_sidebar('sala-impresa');
                }
                ?>
        </div>
	</div>
</div>
<?php get_footer(); ?>
