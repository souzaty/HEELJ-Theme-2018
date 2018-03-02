<?php
	/* Template Name: Trabalhe Conosco */
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
<?php
	while ( have_posts() ) : the_post();
		the_content();
	endwhile; // End of the loop.
	?>
<section id="edital">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="dark-blue center" style="margin-bottom: 80px;">Editais</h1>
			</div>
<!-- ############################## Tab ############################## -->
		</div>
		<div class="row">
			<!-- Tab 01 -->
			<div class="col-sm-12">
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

						$curso_tipo = array(
								'post_type' => 'trabalhe',
								'posts_per_page' => 50,
								'tax_query' => array(
										array(
												'taxonomy' => 'Unidades',
												'field'    => 'slug',
												'terms'    => heelj,
										),
								),

								'paged' => $paged
						);
						$wp_query = new WP_Query( $curso_tipo );
					?>
				<?php if ($wp_query->have_posts()) : ?>
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<?php $count_editais++; ?>
				<div class="container-tab">
					<h3 style="color: #666; display: inline-block;"><b><?php the_title(); ?></b></h3>
					<p style="display: inline-block; float: right; margin-top: 25px; margin-left: 10px;">
						<?php
							$data_inicio = get_post_meta($post->ID, 'data_inicio', true);
							echo date('d/m/Y',strtotime($data_inicio));
							?>
						a
						<?php
							$data_fim = get_post_meta($post->ID, 'data_fim', true);
							echo date('d/m/Y',strtotime($data_fim));
							?>
					</p>
					<?php $disponiblidade = get_post_meta($post->ID, 'btn-green-fill', true); ?>
					<?php if($disponiblidade == 1){?>
					<a href="#edital-<?php the_ID(); ?>" data-toggle="modal">
					<button style="display: inline-block; float: right; " type="button" class="btn btn-default btn-green-fill" aria-label="Right Align" ><b>Inscri&ccedil;&otilde;es abertas</b></button>
					</a>
					<div class="modal fade bg-modal-inscricao" id="edital-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="edital-<?php the_ID(); ?>" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content modal-inscricao">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="row row-modal bg-form-modal">
										<div class="container container-inscricao-modal">
											<?php
												$link_inscricao = get_post_meta($post->ID, 'link_inscricao', true);
												echo do_shortcode($link_inscricao);
												?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Modal 1 -->
					<?php }else{?>
					<button style="display: inline-block; float: right; " type="button" class="btn btn-default btn-encerrado" aria-label="Right Align">
					<b>Inscrições encerradas</b>
					</button>
					<?php }?>
					<hr style="margin:0">
					<div class="col-md-3 nav-tab-buttons" style="padding: 0;margin-top: 4px;height: 100%;padding: 10px 5px 50px 5px;background: #fff;height: 500px; overflow: auto;">
						<!-- required for floating -->
						<!-- Nav tabs -->
						<ul class="nav nav-tabs tabs-left edital-menu-tab">
							<li class="active vertical-tab"><a class="menu-tab" href="#cargos-salarios-<?php the_ID(); ?>" data-toggle="tab">Cargos e Sal&aacute;rios</a></li>
							<li class="vertical-tab"><a class="menu-tab" href="#prazos-<?php the_ID(); ?>" data-toggle="tab">Prazos</a></li>
							<li class="vertical-tab"><a class="menu-tab" href="#convocacoes-<?php the_ID(); ?>" data-toggle="tab">Convoca&ccedil;&otilde;es</a></li>
						</ul>
						<!-- Btn edital -->
						<br />
						<?php the_content(); ?>
					</div>
					<div class="col-md-9" style="padding-right: 0;padding-left: 8px;height: 500px;background: #fff;border-left: 5px solid #f2f2f2; overflow: auto">
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="cargos-salarios-<?php the_ID(); ?>">
								<?php
									$cargos_salarios = get_post_meta($post->ID, 'cargos_salarios', true);
									echo htmlspecialchars_decode($cargos_salarios);
									  ?>
							</div>
							<div class="tab-pane" id="prazos-<?php the_ID(); ?>">
								<?php
									$carga_horaria_trabalhe = get_post_meta($post->ID, 'carga_horaria_trabalhe', true);
									echo htmlspecialchars_decode($carga_horaria_trabalhe);
									  ?>
							</div>
							<div class="tab-pane" id="convocacoes-<?php the_ID(); ?>">
								<?php
									$investimento_trabalhe = get_post_meta($post->ID, 'investimento_trabalhe', true);
									echo htmlspecialchars_decode($investimento_trabalhe);
									  ?>
							</div>
						</div>
					</div>
				</div>
				<br />
				<?php endwhile;?>
				<?php endif; ?>
				<!-- end container tab -->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
