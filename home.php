<?php
	/* Template Name: Página Padrão */
?>
<div id="pagina-interna-heelj">
		<?php get_header(); ?>
</div>
<section class="title-page">
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
		<div class="col-md-12">
			<div class="breadcrumb">
				<?php wp_custom_breadcrumbs(); ?>
			</div>
            <?php while ( have_posts() ) : the_post();
            	the_content();
            	endwhile; // End of the loop.
            	?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
