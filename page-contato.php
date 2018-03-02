<?php
    /* Template Name: Página de Contato */
?>
<div id="pagina-interna-heelj">
	<?php get_header(); ?>
</div>
<section class="interna-unidades title-page">
	<div class="container">
		<div class="row">
			<h1 class="white"><?php the_title(); ?></h1>
		</div>
	</div>
</section>
<section id="posts">
	<div class="container gutter-0">
		<div class="">
			<div class="col-md-9">
				<div class="row">
					<div class="col-lg-12">
						<!-- Content -->
                        <?php while
                            ( have_posts() ) : the_post();
                        	the_content();
                        	endwhile; // End of the loop.
                        ?>
						<!-- End Content -->
					</div>
                </div>
            </div>
			<!-- End col-md-9 -->
			<div class="col-md-3">
				<?php if(is_active_sidebar('sidebar-contato')){
					dynamic_sidebar('sidebar-contato');
					}
					?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
