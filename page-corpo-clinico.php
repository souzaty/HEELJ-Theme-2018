<?php
	/* Template Name: CORPO CLINICO HEELJ */
?>
<div id="pagina-interna-heelj">
	<?php get_header(); ?>
</div>
<section class="interna-unidades title-page">
	<div class="container">
		<div class="row">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</section>
<div class="container interna-padrao">
	<div class="row">
		<div class="col-md-12">
			<div class="breadcrumb">
				<?php wp_custom_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>
<!-- Section Corpo Clinico -->
<div id="corpo-clinico">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form class="busca-transparencia" role="search" id="busca-transparencia" method="get" action="<?php echo get_site_url(); ?>/corpo-clinico-resultado-busca/">
				<div class="input-group">
					<div class="">
						<?php
							$select  = wp_dropdown_categories('show_option_none=Filtrar por especialidade&hide_empty=0&echo=0&id=unidadeSelect&class=form-control input-label&post_type=corpo-clinico-heelj&value_field=slug&taxonomy=Especialidades&orderby=taxonomy_slug=Especialidades&order=ASC');
							$replace = "<select$1>";
							$select  = preg_replace( '#<select([^>]*)>#', $replace, $select );
							echo $select;
							?>
					</div>
					<span class="input-group-btn">
					<button class="btn btn-default pesquisa-label" type="submit">Pesquisar</button>
					</span>
				</div>
			</form>
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$wp_query = new WP_Query();
				$wp_query->query('post_type=corpo_clinico_heelj&posts_per_page=-1&paged=' . $paged);
				?>
			<?php if ($wp_query->have_posts()) : ?>
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<?php $link_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'corpo-clinico'  ); ?>
			<div class="col-md-3 resultato-corpo-clinico">
				<p class="center">
					<img class="img-responsive avatar" src="<?php echo $link_img; ?>">
				</p>
                <h4 class="darkblue name-corpo-clinico center"><?php the_title(); ?></h4>
				<?php $categorias = $categories = get_the_terms( $post_id, 'Especialidades' ); ?>
				<p class="especialidade center"><?php foreach( $categorias as $categoria ) { echo $categoria->name; }?></p>
				<p class="crm green center">CRM <?php $corpo_crm = get_post_meta($post->ID, 'corpo_crm', true); echo $corpo_crm; ?></p>

			</div>
			<?php endwhile;?><?php endif; ?><?php wp_reset_query(); ?>
		</div>
		<!-- End row -->
	</div>
	<!-- End container -->
</div>
<?php get_footer(); ?>
