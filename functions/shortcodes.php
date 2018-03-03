<?php
/** Theme Shortcodes
 * @package WordPress
 * @subpackage HEELJ
 * @since HEELJ 1.0 Beta
 */

 // Start Shortcode Notícias Home
function noticias_home_heelj_short($atts) { ob_start(); ?>
<section id="noticias">
	<div class="container">
		<div class="row">
			<?php
				global $post;
				$wp_query = new WP_Query();
				$wp_query->query('post_type=post&cat=heelj&posts_per_page=3&orderby=date&order=DESC');
				$count = 0;
			?>
			<?php
				if ($wp_query->have_posts()):
				while ($wp_query->have_posts()):
				$wp_query->the_post();
			?>
  			<div class="col-md-4">
				<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('noticias-home-heelj'); ?></a>
				<div class="borda-meio">
					<p class="category-news center"><span>HEELJ em A&ccedil;&atilde;o</span></p>
				</div>
				<h2 class="title-news"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="resume-news"><?php the_excerpt(); ?></p>
					<a href="<?php echo get_permalink();?>">
						<button type="button" class="btn btn-default btn-blue" aria-label="Left Align">Leia mais</button>
					</a>
			</div>
		<?php
			endwhile;
			endif;
			wp_reset_query();
		?>
		</div>
	</div>
</section>
	<?php
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
}
add_shortcode('noticias_home_heelj', 'noticias_home_heelj_short');
// End Shortcode Notícias Home
// **
// **
// Start Shortcode Contato Sidebar
function contato_sidebar_short($atts, $content = null) { $inicio =
	'<section id="destaque-heelj" style="background:transparent;">
	<div class="gutter-0">
		<div class="text-square-heelj">';
			$fim    = '
		</div>
	</div>
	</section>';
	return ($inicio . do_shortcode($content) . $fim);
}
add_shortcode('contato_sidebar', 'contato_sidebar_short');
function contato_sidebar_mapa_short($atts, $content = null) {
	extract(shortcode_atts(array(
		'class' => '',
		'title' => '',
		'link' => ''
		), $atts));
		$incio_cont =
		'<div class="col-md-12 tel-destaque">
            <div class="box">
            	<a href="' . $link . '"><span class="' . $class . '"></span>
            		<p class="text-box"><b>' . $title . '</b><br />'; $fim_cont   = '</p>
            	</a>
            </div>
        </div>';
        return ($incio_cont . $content . $fim_cont);
}
add_shortcode("contato_sidebar_mapa", "contato_sidebar_mapa_short");
function contato_sidebar_telefone_short($atts, $content = null) {
	extract(shortcode_atts(array(
		'class' => '',
		'title' => '',
		'link' => ''
		), $atts));
		$incio_cont =
		'<div class="col-md-12 local-destaque">
			<div class="box">
				<a href="' . $link . '"><span class="' . $class . '"></span>
					<p class="text-box"><b>' . $title . '</b><br />'; $fim_cont   = '</p>
				</a>
            </div>
        </div>';
		return ($incio_cont . $content . $fim_cont);
}
add_shortcode("contato_sidebar_telefone", "contato_sidebar_telefone_short");
function contato_sidebar_atendimento_short($atts, $content = null)
{
extract(shortcode_atts(array(
		'class' => '',
		'title' => '',
		'link' => ''
		), $atts));
		$incio_cont =
		'<div class="col-md-12 atendimento-destaque">
			<div class="box">
				<a href="' . $link . '"><span class="' . $class . '"></span>
					<p class="text-box"><b>' . $title . '</b><br />'; $fim_cont   = '</p>
				</a>
            </div>
        </div>';
        return ($incio_cont . $content . $fim_cont);
}
add_shortcode("contato_sidebar_atendimento", "contato_sidebar_atendimento_short");
// End Shotcode Contato Sidebar
// **
// **
// Start Shotcode Contato Home
function contato_home_short($atts, $content = null) {
	$inicio =
	'<section id="destaque-heelj">
		<div class="">
			<div class="row text-square-heelj">';
				$fim    =
			'</div>
		</div>
	</section>';
	return ($inicio . do_shortcode($content) . $fim);
}
add_shortcode('contato_home', 'contato_home_short');
function contato_home_mapa_short($atts, $content = null) {
	extract(shortcode_atts(array(
		'class' => '',
		'title' => '',
		'link' => ''
		), $atts));
		$incio_cont =
		'<div class="col-md-4 tel-destaque">
			<div class="box">
				<a href="' . $link . '"><span class="' . $class . '"></span>
					<p class="text-box"><b>' . $title . '</b><br />';
					$fim_cont   = '</p>
				</a>
			</div>
		</div>';
		return ($incio_cont . $content . $fim_cont);
}
add_shortcode("contato_home_mapa", "contato_home_mapa_short");
function contato_home_telefone_short($atts, $content = null) {
	extract(shortcode_atts(array(
		'class' => '',
		'title' => '',
		'link' => ''
		), $atts));
		$incio_cont =
			'<div class="col-md-4 local-destaque">
				<div class="box">
					<a href="' . $link . '"><span class="' . $class . '"></span>
						<p class="text-box"><b>' . $title . '</b><br />';
						$fim_cont   = '</p>
					</a>
               </div>
            </div>';
            return ($incio_cont . $content . $fim_cont);
}
add_shortcode("contato_home_telefone", "contato_home_telefone_short");
function contato_home_atendimento_short($atts, $content = null) {
	extract(shortcode_atts(array(
		'class' => '',
		'title' => '',
		'link' => ''
		), $atts));
		$incio_cont =
			'<div class="col-md-4 atendimento-destaque">
				<div class="box">
					<a href="' . $link . '"><span class="' . $class . '"></span>
						<p class="text-box"><b>' . $title . '</b><br />';
						$fim_cont   = '</p>
					</a>
				</div>
			</div>';
			return ($incio_cont . $content . $fim_cont);
}
add_shortcode("contato_home_atendimento", "contato_home_atendimento_short");
// End Shotcode Contato Home
// **
// **
// Start Shortcode Serviços
function servicos_heelj_short($atts) {
	ob_start();
?>
<!-- Section serviços -->
<section id="services">
	<div class="container">
		<div class="row gutter-0">
			<div class="col-md-3 gutter-0">
				<ul class="nav nav-pills nav-stacked">
					<?php
						global $post;
						$wp_query = new WP_Query();
						$wp_query->query('post_type=servicos-heelj&posts_per_page=-1&orderby=title&order=ASC');
						$count = 0;
					?>
				 	<?php
						if ($wp_query->have_posts()):
							while ($wp_query->have_posts()):
							$wp_query->the_post();
							$count++;
					?>
					<li class="<?php
						if ($count == 1) {
							echo active;
						} else {
						}
					?>">
						<a data-toggle="tab" href="#tab<?php echo $count;
						?>" aria-expanded="true"><?php the_title();
						?></a>
					</li>
		            <?php
		            	endwhile;
	            		endif;
					?>
		        </ul>
		    </div>
			<div class="col-md-9 gutter-0">
				<div class="tab-content">
					<?php
						global $post;
						$wp_query = new WP_Query();
						$wp_query->query('post_type=servicos-heelj&posts_per_page=-1&orderby=title&order=ASC');
						$count = 0;
					?>
					<?php
						if ($wp_query->have_posts()):
							while ($wp_query->have_posts()):
								$wp_query->the_post();
								$count++;
					?>
<!-- #### Conteúdo Urgência e Emergência #### -->
					<div id="tab<?php echo $count;
						?>" class="tab-pane fade <?php
						if ($count == 1) {
							echo "active in";
						} else {
						}
					?>">
						<div class="row box-title gutter-0">
							<div class="col-md-2">
								<p class="text-center"><?php
								if (has_post_thumbnail()) {
									the_post_thumbnail('membros-diretoria', array(
										'class' => '',
										'title' => 'Servicos'
									));
								}
								?>
							</div>
							<div class="col-md-10">
								<h3 style="color:#0072a4"><?php the_title(); ?></h3>
							</div>
						</div>
						<div class="row box-content">
							<div class="col-md-12">
								<p><?php the_excerpt(); ?></p>
							</div>
							<div class="col-md-3">
								<?php $link_botao_servico_heelj = get_post_meta($post->ID, 'link_botao_servico_heelj', true); ?>
									<a href="<?php echo $link_botao_servico_heelj;
								?>" >
									<button type="button" class="btn btn-default btn-blue" aria-label="Left Align">
										<?php $botao_servico_heelj = get_post_meta($post->ID, 'botao_servico_heelj', true);
										?>
										<?php echo $botao_servico_heelj;
										?>
									</button></a>
							</div>
							<div class="col-md-9">
								<p style="margin-top:25px; text-decoration: underline; color: #c6c6c6; font-size: 14px; margin-left: 20px;">
									<?php $link_info_servico_heelj = get_post_meta($post->ID, 'link_info_servico_heelj', true);
									?>
								<span class="glyphicon glyphicon-info-sign"></span>
									<?php $info_servico_heelj = get_post_meta($post->ID, 'info_servico_heelj', true);
									?>
									<?php echo $info_servico_heelj;
									?>
								</p>
							</div>
						</div>
					</div>
					<?php
						endwhile;
						endif;
					?><!-- Fim Emergencia -->
				</div>
			</div>
		</div>
	</div>
</section>
		<?php
				$content = ob_get_contents();
				ob_end_clean();
				return $content;
}
add_shortcode('servicos_heelj', 'servicos_heelj_short');
// End Shortcode Serviços
// **
// **
// Start Shotcode Pesquisa Sidebar
function pesquisa_sidebar_($atts)
{
				ob_start();
?>
			   <div id="imaginary_container">
               <form role="search" method="get" class="search-form" action="<?php
				echo esc_url(home_url('/'));
?>">
                   <div class="input-group stylish-input-group">
                       <input type="text" class="form-control search-widget-text" placeholder="Pesquisar"  value="<?php
				echo get_search_query();
?>" name="s">
                       <span class="input-group-addon">
                           <button type="submit">
                               <span class="glyphicon glyphicon-search"></span>
                           </button>
                       </span>
                   </div>
               </form>
               </div>
				<?php
				$content = ob_get_contents();
				ob_end_clean();
				return $content;
}
add_shortcode('pesquisa_sidebar', 'pesquisa_sidebar_');
// End Shortcode Pesquisa Sidebar
// **
// **
// Start Shortcode Indicadores
function indicadores_heelj_short($atts) {
	ob_start();
?>
<section id="numeros-hospital">
	<div class="container gutter-0">
		<div class="row">
			<?php
				global $post;
				$wp_query = new WP_Query();
				$wp_query->query('post_type=indicadores-ibgh&posts_per_page=1&orderby=title&order=ASC');
				$count = 0;
			?>
			<?php
				if ($wp_query->have_posts()):
					while ($wp_query->have_posts()):
					$wp_query->the_post();
			?>
			<div class="col-md-6"></div>
			<div class="col-md-6">
			<p style="font-style: italic; font-size: 1.2em;">Nossos n&uacute;meros</p>
				<h2><?php $frase_heelj = get_post_meta($post->ID, 'frase_heelj', true);
					?>
					<?php echo $frase_heelj;
					?>
				</h2>
			</div>
		</div>
		<div class="row counter-area" style="padding-top: 20px;">
			<div class="col-md-6"></div>
				<!-- leitos -->
				<div class="col-md-2 margin-right margin-bottom bloco-indicadores">
					<div class="col-md-4">
						<p class="right"><img src="<?php echo esc_url(get_template_directory_uri());
		                  	?>/img/icon_001.png" alt=""></p>
		            </div>
		            <div class="col-md-8 gutter-0">
						<h1 class="number-counter">
						<?php $value_indicador_heelj_1 = get_post_meta($post->ID, 'value_indicador_heelj_1', true); ?>
							<?php echo $value_indicador_heelj_1; ?>
						</h1>
						<p class="text-counter">
							<?php $label_indicador_heelj_1 = get_post_meta($post->ID, 'label_indicador_heelj_1', true); ?>
							<?php echo $label_indicador_heelj_1; ?>
						</p>
					</div>
		            </div>
		            <!-- Centros cirurgicos -->
		            <div class="col-md-2 margin-right margin-bottom bloco-indicadores">
		               <div class="col-md-4">
		               		<p class="right"><img src="<?php echo esc_url(get_template_directory_uri());
		               			?>/img/icon_002.png" alt=""></p>
		               </div>
		               <div class="col-md-8">
		                  <h1 class="number-counter">
		                    <?php $value_indicador_heelj_2 = get_post_meta($post->ID, 'value_indicador_heelj_2', true); ?>
		               		<?php echo $value_indicador_heelj_2; ?>
		               	  </h1>
		                  <p class="text-counter">
		                    <?php $label_indicador_heelj_2 = get_post_meta($post->ID, 'label_indicador_heelj_2', true); ?>
		               		<?php echo $label_indicador_heelj_2; ?>
		                  </p>
		               </div>
		            </div>
		            <!-- Centros colaboradores -->
		            <div class="col-md-2 margin-bottom bloco-indicadores">
		               <div class="col-md-4">
		                  <p class="right"><img src="<?php echo esc_url(get_template_directory_uri());
		                  	?>/img/icon_003.png" alt=""></p>
		               </div>
		               <div class="col-md-8">
		                  <h1 class="number-counter">
		                  	<?php $value_indicador_heelj_3 = get_post_meta($post->ID, 'value_indicador_heelj_3', true);
?>
		               		<?php
												echo $value_indicador_heelj_3;
?>
		                  </h1>
		                  <p class="text-counter">
		                  	<?php
												$label_indicador_heelj_3 = get_post_meta($post->ID, 'label_indicador_heelj_3', true);
?>
		               		<?php
												echo $label_indicador_heelj_3;
?>
		                  </p>
		               </div>
		            </div>
		         </div>
		         <div class="row counter-area">
		            <div class="col-md-6"></div>
		            <!-- procedimentos -->
		            <div class="col-md-2 margin-right bloco-indicadores">
		               <div class="col-md-4">
		                  <p class="right"><img src="<?php
												echo esc_url(get_template_directory_uri());
?>/img/icon_004.png" alt=""></p>
		               </div>
		               <div class="col-md-8">
		                  <h1 class="number-counter">
		                  	<?php
												$value_indicador_heelj_4 = get_post_meta($post->ID, 'value_indicador_heelj_4', true);
?>
		               		<?php
												echo $value_indicador_heelj_4;
?>
		                  </h1>
		                  <p class="text-counter">
		                  	<?php
												$label_indicador_heelj_4 = get_post_meta($post->ID, 'label_indicador_heelj_4', true);
?>
		               		<?php
												echo $label_indicador_heelj_4;
?>
		                  </p>
		               </div>
		            </div>
		            <!-- especialidades -->
		            <div class="col-md-2 margin-right bloco-indicadores">
		               <div class="col-md-4">
		                  <p class="right"><img src="<?php
												echo esc_url(get_template_directory_uri());
?>/img/icon_005.png" alt=""></p>
		               </div>
		               <div class="col-md-8">
		                  <h1 class="number-counter">
		                  	<?php
												$value_indicador_heelj_5 = get_post_meta($post->ID, 'value_indicador_heelj_5', true);
?>
		               		<?php
												echo $value_indicador_heelj_5;
?>
		               	  </h1>
		                  <p class="text-counter">
		                  	<?php
												$label_indicador_heelj_5 = get_post_meta($post->ID, 'label_indicador_heelj_5', true);
?>
		               		<?php
												echo $label_indicador_heelj_5;
?>
		                  </p>
		               </div>
		            </div>
		            <!-- horario -->
		            <div class="col-md-2 bloco-indicadores">
		               <div class="col-md-4">
		                  <p class="right"><img src="<?php
												echo esc_url(get_template_directory_uri());
?>/img/icon_006.png" alt=""></p>
		               </div>
		               <div class="col-md-8">
		                  <h1 class="number-counter">
		                    <?php
												$value_indicador_heelj_6 = get_post_meta($post->ID, 'value_indicador_heelj_6', true);
?>
		               		<?php
												echo $value_indicador_heelj_6;
?>
		                  </h1>
		                  <p class="text-counter">
		                    <?php
												$label_indicador_heelj_6 = get_post_meta($post->ID, 'label_indicador_heelj_6', true);
?>
		               		<?php
												echo $label_indicador_heelj_6;
?>
		                  </p>
		               </div>
		            </div>
		         </div>
		         <?php
								endwhile;
				endif;
?>
		      </div>
		      <div class="row" style="padding-bottom: 20px;">
		         <div class="col-md-6"></div>
		         <div class="col-md-6">
		         <?php
				$data_acumulado_heelj = get_post_meta($post->ID, 'data_acumulado_heelj', true);
?>

		            <p style="font-style: italic; font-size: 1em;"><span class="glyphicon glyphicon-info-sign"></span> O n&uacute;mero de procedimentos realizados &eacute; o valor acumulado desde <?php
				echo $data_acumulado_heelj;
?></p>
		         </div>
		      </div>
		   </section>

			<?php
				$content = ob_get_contents();
				ob_end_clean();
				return $content;
			}
add_shortcode('indicadores_heelj', 'indicadores_heelj_short');
// End Shortcode Indicadores
// **
// **
// Start Indicadores Sidebar
function indicadores_sidebar_($atts)
{
				extract(shortcode_atts(array(
								'unidade' => ''
				), $atts));
				ob_start();
?>
		 		<div class="widgetContainer gutter-30">
                  <h3 class="widgetTitle">Nossos n&uacute;meros</h3>

                  <?php
				global $post;
				$wp_query = new WP_Query();
				$wp_query->query('post_type=indicadores-ibgh&posts_per_page=1&orderby=title&order=ASC');
?>
				 <?php
				if ($wp_query->have_posts()):
								while ($wp_query->have_posts()):
												$wp_query->the_post();
?>
                  <h2>
                  	<?php
												$frase = get_post_meta($post->ID, 'frase_' . $unidade, true);
?>
		          	<?php
												echo $frase;
?>
                  </h2>

                  <table>
                     <tbody>
                       <tr>
                           <td>
                              <!-- ##### Leitos ##### -->
                              <table class="numeros-tabela-widget">
                                 <tbody>
                                    <tr style="margin-left: 10px;     display: block;">
                                       <td width="56">
                                          <p class="left"><img src="<?php
												echo esc_url(get_template_directory_uri());
?>/img/icon_001.png" alt=""></p>
                                       </td>
                                       <td>
                                          <h1 class="number-counter left">
                                           	<?php
												$value_indicador_1 = get_post_meta($post->ID, 'value_indicador_' . $unidade . '_1', true);
?>
		               					  	<?php
												print_r($value_indicador_1);
?>
                                          </h1>
                                          <p class="text-counter left">
                                          	<?php
												$label_indicador_1 = get_post_meta($post->ID, 'label_indicador_' . $unidade . '_1', true);
?>
		               						<?php
												echo $label_indicador_1;
?>
                                          </p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <!-- ##### Centros cirurgicos ##### -->
                              <table class="numeros-tabela-widget">
                                 <tbody>
                                    <tr style="margin-left: 10px;     display: block;">
                                       <td width="56">
                                          <p class="left"><img src="<?php
												echo esc_url(get_template_directory_uri());
?>/img/icon_002.png" alt=""></p>
                                       </td>
                                       <td>
                                          <h1 class="number-counter left">
                                           	<?php
												$value_indicador_2 = get_post_meta($post->ID, 'value_indicador_' . $unidade . '_2', true);
?>
		               					  	<?php
												print_r($value_indicador_2);
?>
                                          </h1>
                                          <p class="text-counter left">
                                          	<?php
												$label_indicador_2 = get_post_meta($post->ID, 'label_indicador_' . $unidade . '_2', true);
?>
		               						<?php
												echo $label_indicador_2;
?>
                                          </p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <!-- ##### Colaboradores ##### -->
                              <table class="numeros-tabela-widget">
                                 <tr style="margin-left: 10px; display: block;">
                                    <td width="56">
                                       <p class="left"><img src="<?php
												echo esc_url(get_template_directory_uri());
?>/img/icon_003.png" alt=""></p>
                                    </td>
                                    <td>
                                       <h1 class="number-counter left">
                                           	<?php
												$value_indicador_3 = get_post_meta($post->ID, 'value_indicador_' . $unidade . '_3', true);
?>
		               					  	<?php
												print_r($value_indicador_3);
?>
                                       </h1>
                                       <p class="text-counter left">
                                          	<?php
												$label_indicador_3 = get_post_meta($post->ID, 'label_indicador_' . $unidade . '_3', true);
?>
		               						<?php
												echo $label_indicador_3;
?>
                                       </p>
                                    </td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <!-- ##### Procedimentos ##### -->
                              <table class="numeros-tabela-widget">
                                 <tbody>
                                    <tr style="margin-left: 10px; display: block;">
                                       <td width="56">
                                          <p class="left"><img src="<?php
												echo esc_url(get_template_directory_uri());
?>/img/icon_004.png" alt=""></p>
                                       </td>
                                       <td>
                                          <h1 class="number-counter left">
                                           	<?php
												$value_indicador_4 = get_post_meta($post->ID, 'value_indicador_' . $unidade . '_4', true);
?>
		               					  	<?php
												print_r($value_indicador_4);
?>
                                       </h1>
                                       <p class="text-counter left">
                                          	<?php
												$label_indicador_4 = get_post_meta($post->ID, 'label_indicador_' . $unidade . '_4', true);
?>
		               						<?php
												echo $label_indicador_4;
?>
                                       </p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <!-- ##### Especialidades ##### -->
                              <table class="numeros-tabela-widget">
                                 <tbody>
                                    <tr style="margin-left: 10px; display: block;">
                                       <td width="56">
                                          <p class="left"><img src="<?php
												echo esc_url(get_template_directory_uri());
?>/img/icon_005.png" alt=""></p>
                                       </td>
                                       <td>
                                          <h1 class="number-counter left">
                                           	<?php
												$value_indicador_5 = get_post_meta($post->ID, 'value_indicador_' . $unidade . '_5', true);
?>
		               					  	<?php
												print_r($value_indicador_5);
?>
                                       </h1>
                                       <p class="text-counter left">
                                          	<?php
												$label_indicador_5 = get_post_meta($post->ID, 'label_indicador_' . $unidade . '_5', true);
?>
		               						<?php
												echo $label_indicador_5;
?>
                                       </p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <!-- horario -->
                              <table class="numeros-tabela-widget">
                                 <tbody>
                                    <tr style="margin-left: 10px; display: block;">
                                       <td width="56" >
                                          <p class="left"><img src="<?php
												echo esc_url(get_template_directory_uri());
?>/img/icon_006.png" alt=""></p>
                                       </td>
                                       <td>
                                       <h1 class="number-counter left">
                                           	<?php
												$value_indicador_6 = get_post_meta($post->ID, 'value_indicador_' . $unidade . '_6', true);
?>
		               					  	<?php
												print_r($value_indicador_6);
?>
                                       </h1>
                                       <p class="text-counter left">
                                          	<?php
												$label_indicador_6 = get_post_meta($post->ID, 'label_indicador_' . $unidade . '_6', true);
?>
		               						<?php
												echo $label_indicador_6;
?>
                                       </p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
			<tr>
                           <td>
                              <!-- horario -->
                              <table class="numeros-tabela-widget">
                                 <tbody>
                                    <tr style="margin-left: 10px; display: block;">
                                       <p class="text-counter periodo left">
                                          	<?php
												$ano = get_post_meta($post->ID, 'data_acumulado_' . $unidade, true);
?>
		          	<i class="fa fa-info-circle" aria-hidden="true"></i> <?php
												echo "O n&uacute;mero de procedimentos realizados &eacute; o valor acumulado desde $ano.";
?>
                                       </p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                        <?php
								endwhile;
				endif;
				wp_reset_query();
?>
                     </tbody>
                  </table>
               </div><!-- End our numbers widget -->
		 	<?php
				$content = ob_get_contents();
				ob_end_clean();
				return $content;
}
add_shortcode('indicadores_sidebar', 'indicadores_sidebar_');
// End Indicadores Sidebar
