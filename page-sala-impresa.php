<?php
    /* Template Name: Página Sala de Imprensa */
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
				<!-- Breadcrumb -->
				<div class="breadcrumb">
					<?php wp_custom_breadcrumbs(); ?>
				</div>
				<!-- End Breadcrumb -->
				<div class="row">
					<div class="col-lg-12">
						<!-- SEARCH -->
						<?php include 'includes/search-sala_imprensa.php'; ?>
						<!-- /input-group -->
					</div>
				</div>
				<!-- Main Blog Content -->
				<?php global $post; $pesquisa_imprensa = trim($_GET['pesquisa_imprensa']);
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$wp_query = new WP_Query();
					$wp_query->query('s='. $pesquisa_imprensa.'&post_type=post&cat=36&orderby=date&order=DESC&posts_per_page=8&paged=' . $paged);
					 ?>
				<?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();?>
				<div class="postResume">
					<div class="col-md-12 gutter-30 resultado">
						<div class="postMeta">
							<abbr class="published updated" title="<?php the_time('j/m/Y'); ?>"><span class="clock"></span><?php the_time('j/m/Y'); ?></abbr> <span class="tag"></span>
							<?php the_category( ', ' ); ?>
						</div>
						<h3 class="result-post-title entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
				</div>
				<?php endwhile; ?>
				<!-- Pagination -->
				<?php
					if ( function_exists('wp_bootstrap_pagination') )
					  wp_bootstrap_pagination();
					?>
				<?php endif; wp_reset_query(); ?>
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
</section>
<?php get_footer(); ?>
