<?php
/** Theme Custom Post Types
 * @package WordPress
 * @subpackage HEELJ
 * @since HEELJ 1.0 Beta
 */

 // Start  CPT Indicadores
 add_action('init', 'indicadores_ibgh');
 function indicadores_ibgh() {
 	$labels = array(
 		'name' => __('Indicadores', 'Tipo de post para incluir os indicadores.'),
 		'singular_name' => __('Indicadores', 'post type singular name'),
 		'all_items' => __('Indicadores'),
 		'add_new' => _x('Novo indicador', 'Novo indicador'),
 		'add_new_item' => __('Add novo indicador'),
 		'edit_item' => __('Editar indicador'),
 		'new_item' => __('Novo indicador Item'),
 		'view_item' => __('Ver item do indicador'),
 		'search_items' => __('Procurar indicador'),
 		'not_found' => __('Nenhum indicador encontrado'),
 		'not_found_in_trash' => __('Nenhum indicador encontrado na lixeira'),
 		'parent_item_colon' => ''
 	);
 	$args   = array(
 		'labels' => $labels,
 		'public' => true,
 		'publicly_queryable' => true,
 		'show_ui' => true,
 		'query_var' => true,
 		'menu_icon' => 'dashicons-chart-pie',
 		'rewrite' => array(
 						'slug' => 'indicadores',
 						'with_front' => false
 		),
 		'capability_type' => 'post',
 		'hierarchical' => false,
 		'menu_position' => 6,
 		'taxonomies' => array(
 						'post_tag'
 		),
 		'supports' => array(
 						'title',
 						'revisions'
 		)
 );
 	register_post_type('indicadores-ibgh', $args);
 	flush_rewrite_rules();
 }
 add_action("admin_init", "campos_personalizados_indicadores_ibgh");
 function campos_personalizados_indicadores_ibgh() {
 	add_meta_box("indicador_heelj", "Indicadores HEELJ", "indicador_heelj", "indicadores-ibgh", "normal", "low");
 }
 function indicador_heelj() {
 	global $post;
 	$custom                  = get_post_meta($post->ID);
 	$label_indicador_heelj_1 = $custom["label_indicador_heelj_1"][0];
 	$value_indicador_heelj_1 = $custom["value_indicador_heelj_1"][0];
 	$label_indicador_heelj_2 = $custom["label_indicador_heelj_2"][0];
 	$value_indicador_heelj_2 = $custom["value_indicador_heelj_2"][0];
 	$label_indicador_heelj_3 = $custom["label_indicador_heelj_3"][0];
 	$value_indicador_heelj_3 = $custom["value_indicador_heelj_3"][0];
 	$label_indicador_heelj_4 = $custom["label_indicador_heelj_4"][0];
 	$value_indicador_heelj_4 = $custom["value_indicador_heelj_4"][0];
 	$label_indicador_heelj_5 = $custom["label_indicador_heelj_5"][0];
 	$value_indicador_heelj_5 = $custom["value_indicador_heelj_5"][0];
 	$label_indicador_heelj_6 = $custom["label_indicador_heelj_6"][0];
 	$value_indicador_heelj_6 = $custom["value_indicador_heelj_6"][0];
 	$data_acumulado_heelj    = $custom["data_acumulado_heelj"][0];
 	$frase_heelj             = $custom["frase_heelj"][0];
 ?>

 	<label>Informe o label HEELJ 1</label>
 	<input type="text" name="label_indicador_heelj_1" value="<?php echo $label_indicador_heelj_1;
 ?>" />
 	<label>Informe o conteúdo HEELJ 1</label>
 	<input type="text" name="value_indicador_heelj_1" value="<?php echo $value_indicador_heelj_1;
 ?>" />
 	<br />
 	<label>Informe o label HEELJ 2</label>
 	<input type="text" name="label_indicador_heelj_2" value="<?php echo $label_indicador_heelj_2;
 ?>" />
 	<label>Informe o conteúdo HEELJ 2</label>
 	<input type="text" name="value_indicador_heelj_2" value="<?php echo $value_indicador_heelj_2;
 ?>" />
 	<br />
 	<label>Informe o label HEELJ 3</label>
 	<input type="text" name="label_indicador_heelj_3" value="<?php echo $label_indicador_heelj_3;
 ?>" />
 	<label>Informe o conteúdo HEELJ 3</label>
 	<input type="text" name="value_indicador_heelj_3" value="<?php echo $value_indicador_heelj_3;
 ?>" />
 	<br />
 	<label>Informe o label HEELJ 4</label>
 	<input type="text" name="label_indicador_heelj_4" value="<?php echo $label_indicador_heelj_4;
 ?>" />
 	<label>Informe o conteúdo HEELJ 4</label>
 	<input type="text" name="value_indicador_heelj_4" value="<?php echo $value_indicador_heelj_4;
 ?>" />
 	<br />
 	<label>Informe o label HEELJ 5</label>
 	<input type="text" name="label_indicador_heelj_5" value="<?php echo $label_indicador_heelj_5;
 ?>" />
 	<label>Informe o conteúdo HEELJ 5</label>
 	<input type="text" name="value_indicador_heelj_5" value="<?php echo $value_indicador_heelj_5;
 ?>" />
 	<br />
 	<label>Informe o label HEELJ 6</label>
 	<input type="text" name="label_indicador_heelj_6" value="<?php echo $label_indicador_heelj_6;
 ?>" />
 	<label>Informe o conteúdo HEELJ 6</label>
 	<input type="text" name="value_indicador_heelj_6" value="<?php echo $value_indicador_heelj_6;
 ?>" />
 	<br /><br />
 	<label>Informe o período acumulado</label>
 	<input type="text" name="data_acumulado_heelj" value="<?php echo $data_acumulado_heelj;
 ?>" />
 	<br />
 	<label>Informe o frase principal</label>
 	<input type="text" name="frase_heelj" value="<?php echo $frase_heelj;
 ?>" />
 					<?php
 }
 add_action('save_post_indicadores-ibgh', 'save_details_post_indicadores_ibgh');
 function save_details_post_indicadores_ibgh() {
 	global $post;
 	update_post_meta($post->ID, "label_indicador_heelj_1", $_POST["label_indicador_heelj_1"]);
 	update_post_meta($post->ID, "value_indicador_heelj_1", $_POST["value_indicador_heelj_1"]);
 	update_post_meta($post->ID, "label_indicador_heelj_2", $_POST["label_indicador_heelj_2"]);
 	update_post_meta($post->ID, "value_indicador_heelj_2", $_POST["value_indicador_heelj_2"]);
 	update_post_meta($post->ID, "label_indicador_heelj_3", $_POST["label_indicador_heelj_3"]);
 	update_post_meta($post->ID, "value_indicador_heelj_3", $_POST["value_indicador_heelj_3"]);
 	update_post_meta($post->ID, "label_indicador_heelj_4", $_POST["label_indicador_heelj_4"]);
 	update_post_meta($post->ID, "value_indicador_heelj_4", $_POST["value_indicador_heelj_4"]);
 	update_post_meta($post->ID, "label_indicador_heelj_5", $_POST["label_indicador_heelj_5"]);
 	update_post_meta($post->ID, "value_indicador_heelj_5", $_POST["value_indicador_heelj_5"]);
 	update_post_meta($post->ID, "label_indicador_heelj_6", $_POST["label_indicador_heelj_6"]);
 	update_post_meta($post->ID, "value_indicador_heelj_6", $_POST["value_indicador_heelj_6"]);
 	update_post_meta($post->ID, "data_acumulado_heelj", $_POST["data_acumulado_heelj"]);
 	update_post_meta($post->ID, "frase_heelj", $_POST["frase_heelj"]);
 }
 // End CPT Indicadores

 // Start CPT Serviços
 add_action('init', 'servicos_heelj');
 function servicos_heelj() {
 	$labels = array(
 		'name' => __('Serviços HEELJ', 'Tipo de post para incluir os serviços do HEELJ.'),
 		'singular_name' => __('serviços HEELJ', 'post type singular name'),
 		'all_items' => __('Todos os serviços'),
 		'add_new' => _x('Novo serviço', 'Novo serviço'),
 		'add_new_item' => __('Add novo serviço'),
 		'edit_item' => __('Editar serviço'),
 		'new_item' => __('Novo serviço Item'),
 		'view_item' => __('Ver item do serviço'),
 		'search_items' => __('Procurar serviço'),
 		'not_found' => __('Nenhum serviço encontrado'),
 		'not_found_in_trash' => __('Nenhum serviço encontrado na lixeira'),
 		'parent_item_colon' => ''
 	);
 	$args   = array(
 		'labels' => $labels,
 		'public' => true,
 		'publicly_queryable' => true,
 		'show_ui' => true,
 		'query_var' => true,
 		'menu_icon' => 'dashicons-admin-generic',
 		'rewrite' => array(
 			'slug' => 'servicos%',
 			'with_front' => false
 		),
 		'capability_type' => 'post',
 		'hierarchical' => false,
 		'menu_position' => 6,
 		'taxonomies' => array(
 			'post_tag'
 		),
 		'supports' => array(
 			'title',
 			'thumbnail',
 			'editor',
 			'excerpt',
 			'revisions'
 		)
 	);
 	register_post_type('servicos-heelj', $args);
 	flush_rewrite_rules();
 }
 add_action("admin_init", "campos_personalizados_servicos_heelj");
 function campos_personalizados_servicos_heelj() {
 	add_meta_box("botao_servico_heelj", "Informe label para o bot&atilde;o", "botao_servico_heelj", "servicos-heelj", "normal", "low");
 	add_meta_box("link_botao_servico_heelj", "Informe o link para o bot&atilde;o", "link_botao_servico_heelj", "servicos-heelj", "normal", "low");
 	add_meta_box("info_servico_heelj", "Informe o texto de informa&ccedil;&atilde;o", "info_servico_heelj", "servicos-heelj", "normal", "low");
 	add_meta_box("link_info_servico_heelj", "Informe o link para que leva a informa&ccedil;&atilde;o", "link_info_servico_heelj", "servicos-heelj", "normal", "low");
 }
 function botao_servico_heelj() {
 	global $post;
 	$custom              = get_post_meta($post->ID);
 	$botao_servico_heelj = $custom["botao_servico_heelj"][0];
 ?>
 	<input type="text" name="botao_servico_heelj" value="<?php echo $botao_servico_heelj;
 	?>" />
 	<?php
 }
 function link_botao_servico_heelj() {
 	global $post;
 	$custom                   = get_post_meta($post->ID);
 	$link_botao_servico_heelj = $custom["link_botao_servico_heelj"][0];
 ?>
 	<input type="text" name="link_botao_servico_heelj" value="<?php echo $link_botao_servico_heelj;
 	?>" />
 	<?php
 }
 function info_servico_heelj()
 {
 	global $post;
 	$custom             = get_post_meta($post->ID);
 	$info_servico_heelj = $custom["info_servico_heelj"][0];
 ?>
 	<input type="text" name="info_servico_heelj" value="<?php echo $info_servico_heelj;
 	?>" />
 	<?php
 }
 function link_info_servico_heelj()
 {
 	global $post;
 	$custom                  = get_post_meta($post->ID);
 	$link_info_servico_heelj = $custom["link_info_servico_heelj"][0];
 ?>
 	<input type="text" name="link_info_servico_heelj" value="<?php echo $link_info_servico_heelj;
 ?>" />
 	<?php
 }
 add_action('save_post_servicos-heelj', 'save_details_post_servicos_heelj');
 function save_details_post_servicos_heelj()
 {
 	global $post;
 	update_post_meta($post->ID, "botao_servico_heelj", $_POST["botao_servico_heelj"]);
 	update_post_meta($post->ID, "link_botao_servico_heelj", $_POST["link_botao_servico_heelj"]);
 	update_post_meta($post->ID, "info_servico_heelj", $_POST["info_servico_heelj"]);
 	update_post_meta($post->ID, "link_info_servico_heelj", $_POST["link_info_servico_heelj"]);
 }
 // End CPT Serviços

 // Start CPT Corpo Clínico
 add_action('init', 'corpo_clinico_heelj_register');
 function corpo_clinico_heelj_register() {
 	$labels = array(
 		'name' => __('Corpo Cl&iacute;nico HEELJ', 'Tipo de post para incluir os profissionais do HEELJ.'),
 		'singular_name' => __('Corpo Cl&iacute;nico', 'post type singular name'),
 		'all_items' => __('Todos profissionais'),
 		'add_new' => _x('Novo profissional', 'Novo profissional'),
 		'add_new_item' => __('Add novo item'),
 		'edit_item' => __('Editar profissional'),
 		'new_item' => __('Novo profissional Item'),
 		'view_item' => __('Ver item do profissional'),
 		'search_items' => __('Procurar profissional'),
 		'not_found' => __('Nenhum profissional encontrado'),
 		'not_found_in_trash' => __('Nenhum profissional encontrado na lixeira'),
 		'parent_item_colon' => ''
 	);
 	$args   = array(
 		'labels' => $labels,
 		'public' => true,
 		'publicly_queryable' => true,
 		'show_ui' => true,
 		'query_var' => true,
 		'menu_icon' => 'dashicons-id',
 		'capability_type' => 'post',
 		'hierarchical' => false,
 		'menu_position' => 6,
 		'taxonomies' => array(
 			'post_tag'
 			),
 		'supports' => array(
 			'title',
 			'thumbnail',
 			'tags'
 			)
 	);
 register_post_type('corpo_clinico_heelj', $args);
 	flush_rewrite_rules();
 }
 register_taxonomy("Especialidades", array(
 	"corpo_clinico_heelj"
 	), array(
 	"hierarchical" => true,
 	"label" => "Especialidades",
 	"singular_label" => "edital",
 	"rewrite" => array(
 		'slug' => 'edital'
 		),
 	"public" => true,
 	"show_ui" => true,
 	"_builtin" => true
 	));
 add_action("admin_init", "campos_personalizados_corpo_clinico_heelj");
 function campos_personalizados_corpo_clinico_heelj() {
 	add_meta_box("corpo_crm", "Informe o CRM", "corpo_crm", "corpo_clinico_heelj", "normal", "low");
 }
 function corpo_crm() {
 	global $post;
 	$custom    = get_post_meta($post->ID);
 	$corpo_crm = $custom["corpo_crm"][0];
 ?>
 	<input type="text" name="corpo_crm" value='<?php echo $corpo_crm;
 	?>' /></p>
 <?php
 }
 add_action('save_post_corpo_clinico_heelj', 'save_details_post_corpo_clinico_heelj');
 function save_details_post_corpo_clinico_heelj() {
 	global $post;
 	update_post_meta($post->ID, "corpo_crm", $_POST["corpo_crm"]);
 }
 // End CPT Corpo Clínico

// Start CPT Trabalhe Conosco
add_action('init', 'trabalhe_register');
function trabalhe_register()
{
				$product_permalink = 'trabalhe/%Unidades%/';
				$labels            = array(
								'name' => __('Editais', 'Tipo de post para incluir os cursos da escola.'),
								'singular_name' => __('Editais', 'post type singular name'),
								'all_items' => __('Todos editais'),
								'add_new' => _x('Novo edital', 'Novo edital'),
								'add_new_item' => __('Add novo item ao edital'),
								'edit_item' => __('Editar edital'),
								'new_item' => __('Novo edital Item'),
								'view_item' => __('Ver item do edital'),
								'search_items' => __('Procurar edital'),
								'not_found' => __('Nenhum edital encontrado'),
								'not_found_in_trash' => __('Nenhum edital encontrado na lixeira'),
								'parent_item_colon' => ''
				);
				$args              = array(
								'labels' => $labels,
								'public' => true,
								'publicly_queryable' => true,
								'show_ui' => true,
								'query_var' => true,
								'menu_icon' => 'dashicons-calendar',
								'rewrite' => array(
												'slug' => 'trabalhe/%Unidades%',
												'with_front' => false
								),
								'capability_type' => 'post',
								'hierarchical' => false,
								'menu_position' => 6,
								'taxonomies' => array(
												'post_tag'
								),
								'supports' => array(
												'title',
												'thumbnail',
												'editor',
												'excerpt',
												'tags'
								)
				);
				register_post_type('trabalhe', $args);
				flush_rewrite_rules();
}
register_taxonomy("Unidades", array(
				"trabalhe"
), array(
				"hierarchical" => true,
				"label" => "Unidades",
				"singular_label" => "edital",
				"rewrite" => array(
								'slug' => 'edital'
				),
				"public" => true,
				"show_ui" => true,
				"_builtin" => true
));
/*Filtro per modificare il permalink*/
add_filter('post_link', 'editais_permalink', 1, 3);
add_filter('post_type_link', 'editais_permalink', 1, 3);
function editais_permalink($permalink, $post_id, $leavename)
{
				//con %brand% catturo il rewrite del Custom Post Type
				if (strpos($permalink, '%Unidades%') === FALSE)
								return $permalink;
				// Get post
				$post = get_post($post_id);
				if (!$post)
								return $permalink;
				// Get taxonomy terms
				$terms = wp_get_object_terms($post->ID, 'Unidades');
				if (!is_wp_error($terms) && !empty($terms) && is_object($terms[0]))
								$taxonomy_slug = $terms[0]->slug;
				else
								$taxonomy_slug = 'no-brand';
				return str_replace('%Unidades%', $taxonomy_slug, $permalink);
}
add_action("admin_init", "campos_personalizados_trabalhe");
function campos_personalizados_trabalhe()
{
				add_meta_box("periodo_edital", "período do edital", "periodo_edital", "trabalhe", "normal", "low");
				add_meta_box("disponibilidade_trabalhe", "Informe a disponibilidade do edital", "disponibilidade_trabalhe", "trabalhe", "normal", "low");
				add_meta_box("link_inscricao", "Informe o shortcode do formulario de inscri&ccedil;&atilde;o", "link_inscricao", "trabalhe", "normal", "low");
				add_meta_box(WYSIWYG_META_BOX_ID_DATA, __('Cargos e Sal&aacute;rios', 'wysiwyg'), 'cargos_salarios', 'trabalhe', "normal", "low");
				add_meta_box(WYSIWYG_META_BOX_ID_CARGA, __('Prazos', 'wysiwyg'), 'carga_horaria_trabalhe', 'trabalhe', "normal", "low");
				add_meta_box(WYSIWYG_META_BOX_ID_INVESTIMENTO, __('Convoca&ccedil;&otilde;es', 'wysiwyg'), 'investimento_trabalhe', 'trabalhe', "normal", "low");
}
function periodo_edital()
{
				global $post;
				$custom      = get_post_meta($post->ID);
				$data_inicio = $custom["data_inicio"][0];
				$data_fim    = $custom["data_fim"][0];
?>
  <label>Informe a data in&iacute;cio:</label>
  <input type="date" name="data_inicio" value="<?php
				echo $data_inicio;
?>" />

  <label>Informe a data fim:</label>
  <input type="date" name="data_fim" value="<?php
				echo $data_fim;
?>" />
  <?php
}
function disponibilidade_trabalhe()
{
				global $post;
				$custom         = get_post_custom($post->ID);
				$disponiblidade = $custom["btn-green-fill"][0];
				$indisponivel   = $custom["btn-grey-fill"][0];
?>
		<input type="radio" name="btn-green-fill" value="1" <?php
				if ($disponiblidade == '1')
								echo "checked=1";
?>>Dispon&iacute;vel
		<input type="radio" name="btn-green-fill" value="2" <?php
				if ($disponiblidade == '2')
								echo "checked=2";
?>>Indisponivel

	<?php
}
function data_detalhada()
{
				global $post;
				$content = get_post_meta($post->ID, 'data_detalhada', true);
				wp_editor(htmlspecialchars_decode($content), 'data_detalhada', array(
								"media_buttons" => true,
								"editor_height" => 30
				));
}
function link_inscricao()
{
				global $post;
				$custom         = get_post_meta($post->ID);
				$link_inscricao = $custom["link_inscricao"][0];
?>
  <p><label>Informe o link:</label><br />
  <input type="text" name="link_inscricao" value='<?php
				echo $link_inscricao;
?>' /></p>
<?php
}
function cargos_salarios()
{
				global $post;
				$content = get_post_meta($post->ID, 'cargos_salarios', true);
				wp_editor(htmlspecialchars_decode($content), 'cargos_salarios', array(
								"media_buttons" => true,
								"editor_height" => 30
				));
}
function carga_horaria_trabalhe()
{
				global $post;
				$content = get_post_meta($post->ID, 'carga_horaria_trabalhe', true);
				wp_editor(htmlspecialchars_decode($content), 'carga_horaria_trabalhe', array(
								"media_buttons" => true,
								"editor_height" => 30
				));
}
function investimento_trabalhe()
{
				global $post;
				$content = get_post_meta($post->ID, 'investimento_trabalhe', true);
				wp_editor(htmlspecialchars_decode($content), 'investimento_trabalhe', array(
								"media_buttons" => true,
								"editor_height" => 30
				));
}
add_action('save_post_trabalhe', 'save_details_post_trabalhe');
function save_details_post_trabalhe()
{
				global $post;
				update_post_meta($post->ID, "data_inicio", $_POST["data_inicio"]);
				update_post_meta($post->ID, "data_fim", $_POST["data_fim"]);
				if (!empty($_POST['data_detalhada'])) {
								$data = htmlspecialchars($_POST['data_detalhada']);
								update_post_meta($post->ID, 'data_detalhada', $data);
				}
				update_post_meta($post->ID, "btn-green-fill", $_POST["btn-green-fill"]);
				update_post_meta($post->ID, "link_inscricao", $_POST["link_inscricao"]);
				if (!empty($_POST['cargos_salarios'])) {
								$cargos_salarios = htmlspecialchars($_POST['cargos_salarios']);
								update_post_meta($post->ID, 'cargos_salarios', $cargos_salarios);
				}
				if (!empty($_POST['carga_horaria_trabalhe'])) {
								$data_carga_horaria_trabalhe = htmlspecialchars($_POST['carga_horaria_trabalhe']);
								update_post_meta($post->ID, 'carga_horaria_trabalhe', $data_carga_horaria_trabalhe);
				}
				if (!empty($_POST['investimento_trabalhe'])) {
								$data_investimento_trabalhe = htmlspecialchars($_POST['investimento_trabalhe']);
								update_post_meta($post->ID, 'investimento_trabalhe', $data_investimento_trabalhe);
				}
				update_post_meta($post->ID, "upload_banner_trabalhe", $_POST["upload_banner_trabalhe"]);
}
add_filter("manage_edit-trabalhe_columns", "trabalhe_edit_columns");
function trabalhe_edit_columns($columns)
{
				$columns = array(
								"cb" => "<input type=\"checkbox\" />",
								"title" => "Edital",
								"unidade" => "Unidade",
								"periodo_edital" => "período"
				);
				return $columns;
}
add_action("manage_posts_custom_column", "trabalhe_custom_columns");
function trabalhe_custom_columns($column)
{
				global $post;
				switch ($column) {
								case "title":
												the_title();
												break;
								case "unidade":
												echo get_the_term_list($post->ID, 'Unidades', '', ', ', '');
												break;
								case "periodo_edital":
												$custom      = get_post_meta($post->ID);
												$data_inicio = $custom["data_inicio"][0];
												$data_fim    = $custom["data_fim"][0];
												echo date('d/m/Y', strtotime($data_inicio));
												echo " a ";
												echo date('d/m/Y', strtotime($data_fim));
												break;
				}
}
// End CPT Trabalhe Conosco

// Start Excerpt Lenght
function the_excerpt_lenght($before = '', $after = '', $echo = true, $length = false)
{
				$excerpt = get_the_excerpt();
				if ($length && is_numeric($length)) {
								$excerpt = substr($excerpt, 0, $length);
				}
				if (strlen($excerpt) > 0) {
								$excerpt = apply_filters('the_excerpt_lenght', $before . $excerpt . $after, $before, $after);
								if ($echo)
												echo $excerpt;
								else
												return $excerpt;
				}
}
