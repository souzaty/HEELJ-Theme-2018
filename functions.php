<?php
/**
* @package WordPress
* @subpackage HEELJ
* @since HEELJ 1.0
*/

// Funtion load scripts (Carrega scripts do bootstrap e font Awesome)
function load_scripts() {
    // bootstrap scripts
        wp_enqueue_style( 'Bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all' );
        wp_enqueue_script( 'Bootstrap JS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);
    // Theme scripts
        wp_enqueue_style( 'custom', get_template_directory_uri(). '/css/custom.css', array(), '1.0', 'all' );
        wp_enqueue_script( 'template', get_template_directory_uri(). '/js/template.js', array(), null, true);
    // Font awesome
        wp_enqueue_style( 'FontAwesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), '', 'all' );
    }
    add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Add Functions
require_once 'functions/heelj.php';
require_once 'functions/menu.php';
require_once 'functions/cpt.php';
require_once 'functions/shortcodes.php';

// Pagination
require_once('wp_bootstrap_pagination.php');

// Start Theme Supports
/***** Custom Logo *****/
function themename_custom_logo_setup() {
$defaults = array(
    'height'      => 90,
    'width'       => 160,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
);
add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/***** Enable feed *****/
add_theme_support('automatic-feed-links');

/***** Config Thumbs Size  *****/
add_theme_support('post-thumbnails');
add_filter('jpeg_quality', create_function('', 'return 100;'));
set_post_thumbnail_size(825, 510, true);
add_image_size('membros-conselho', 283, 250, true);
add_image_size('unidades', 110, 56, true);
add_image_size('servicos-heelj', 80, 80, true);
add_image_size('noticias-home-heelj', 366, 232, true);
add_image_size('corpo-clinico', 115, 115, true);

/****** Enable HTML5 *****/
add_theme_support('html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
));

/****** Add Post Formats *****/
add_theme_support('post-formats', array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'status',
				'audio',
				'chat'
));
// End Theme Support

// Start Custom Excerpt
/** Changing excerpt length to 20 words
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 120 );
// End Custom Excerpt

// Start Nav menu
add_filter('wp_nav_menu_items', 'add_search_box_to_menu', 10, 2);
function add_search_box_to_menu($items, $args)
{
if ($args->theme_location == 'menu_topo_ibgh')
				return $items . "<li class='menu-header-search'><a href='https://www.facebook.com/ibgh.os/?fref=ts' target='_blank'><span class='fa fa-facebook'></span></a></li><li class='menu-item menu-item-type-custom menu-item-object-custom menu-item-31'><form role='search' method='get' class='search-form' action='" . esc_url(home_url('/')) . "'><div class='box box-header'>  <div class='container-2'><span class='icon'><i class='fa fa-search'></i></span><input type='search' id='search' placeholder='pesquisar...' value='" . get_search_query() . "' name='s' /></div></div></form></li>";
return $items;
}
// End Nav menu

// Enable the use of shortcodes in text widgets.
add_filter('widget_text', 'do_shortcode');

// Start  CPT Indicadores
add_action('init', 'indicadores_ibgh');
function indicadores_ibgh() {
	$labels = array(
		'name' => __('Indicadores IBGH', 'Tipo de post para incluir os indicadores.'),
		'singular_name' => __('Indicadores IBGH', 'post type singular name'),
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

// Start WP Breadcrumbs
function wp_custom_breadcrumbs()
{
				$showOnHome  = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
				$delimiter   = '>'; // delimiter between crumbs
				$home        = 'Voc&ecirc; est&aacute; em'; // text for the 'Home' link
				$showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
				$before      = '<span class="current">'; // tag before the current crumb
				$after       = '</span>'; // tag after the current crumb
				global $post;
				$homeLink = get_bloginfo('url');
				if (is_home() || is_front_page()) {
								if ($showOnHome == 1)
												echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
				} else {
								echo '<div id="crumbs">' . $home . ' ';
								if (is_category()) {
												$thisCat = get_category(get_query_var('cat'), false);
												if ($thisCat->parent != 0)
																echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
												echo $before . 'categoria "' . single_cat_title('', false) . '"' . $after;
								} elseif (is_search()) {
												echo $before . 'Resultados encontrados para "' . get_search_query() . '"' . $after;
								} elseif (is_day()) {
												echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
												echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
												echo $before . get_the_time('d') . $after;
								} elseif (is_month()) {
												echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
												echo $before . get_the_time('F') . $after;
								} elseif (is_year()) {
												echo $before . get_the_time('Y') . $after;
								} elseif (is_single() && !is_attachment()) {
												if (get_post_type() != 'post') {
																$post_type = get_post_type_object(get_post_type());
																$slug      = $post_type->rewrite;
																echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
																if ($showCurrent == 1)
																				echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
												} else {
																$cat  = get_the_category();
																$cat  = $cat[0];
																$cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
																if ($showCurrent == 0)
																				$cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
																echo $cats;
																if ($showCurrent == 1)
																				echo $before . get_the_title() . $after;
												}
								} elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
												$post_type = get_post_type_object(get_post_type());
												echo $before . $post_type->labels->singular_name . $after;
								} elseif (is_attachment()) {
												$parent = get_post($post->post_parent);
												$cat    = get_the_category($parent->ID);
												$cat    = $cat[0];
												echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
												echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
												if ($showCurrent == 1)
																echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
								} elseif (is_page() && !$post->post_parent) {
												if ($showCurrent == 1)
																echo $before . get_the_title() . $after;
								} elseif (is_page() && $post->post_parent) {
												$parent_id   = $post->post_parent;
												$breadcrumbs = array();
												while ($parent_id) {
																$page          = get_page($parent_id);
																$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
																$parent_id     = $page->post_parent;
												}
												$breadcrumbs = array_reverse($breadcrumbs);
												for ($i = 0; $i < count($breadcrumbs); $i++) {
																echo $breadcrumbs[$i];
																if ($i != count($breadcrumbs) - 1)
																				echo ' ' . $delimiter . ' ';
												}
												if ($showCurrent == 1)
																echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
								} elseif (is_tag()) {
												echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
								} elseif (is_author()) {
												global $author;
												$userdata = get_userdata($author);
												echo $before . 'Articles posted by ' . $userdata->display_name . $after;
								} elseif (is_404()) {
												echo $before . 'Error 404' . $after;
								}
								if (get_query_var('paged')) {
												if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
																echo ' (';
												echo __('Page') . ' ' . get_query_var('paged');
												if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
																echo ')';
								}
								echo '</div>';
				}
}
// End WP Breadcrumbs

// Start Customize wp-login Page
function login_styles() { ?>
 <style type="text/css">
 body {
     background: #21b9eb !important; /* Old browsers */
     background: -moz-linear-gradient(45deg, #21b9eb 0%, #4048b4 100%) !important; /* FF3.6-15 */
     background: -webkit-linear-gradient(45deg, #21b9eb 0%, #4048b4 100%) !important;
     /* Chrome10-25,Safari5.1-6 */
     background: linear-gradient(45deg, #21b9eb 0%, #4048b4 100%) !important; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
     filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#21b9eb', endColorstr='#4048b4', GradientType=1); /* IE6-9 fallback on horizontal gradient */
     background-attachment: fixed !important;

 }
 #wp-submit {
     border: none !important;
     box-shadow: none !important;
     background: #21b9eb !important;
     text-shadow: none !important;
     border-radius: 4px !important;
     -webkit-border-radius: 4px !important;
     color: #fff !important;
     display: block;
     width: 100% !important;
     margin: 30px 0 0 0 !important;
     font-size: 16px;
     padding: 5px 0 !important;
     height: auto !important;
     transition: all 0.5s;
 }
 #wp-submit:hover {
     background: #009ee4 !important;
 }
 .login h1 a {
     background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/heelj-logo-login.svg') !important;
     background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/heelj-logo-login.svg') !important;
     background-size: 100% !important;
     background-position: center center !important;
     background-repeat: no-repeat;
     height: 90px !important;
     width: 320px !important;
 }
 .login #backtoblog a,
 .login #nav a {
     color: #fff !important;
 }
 </style>
<?php }

add_action('login_enqueue_scripts', 'login_styles', 10);

/***** URL Logo Login *****/
function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

/***** Change Alt Attribute *****/
function my_login_logo_url_title() {
    return 'HEELJ - Hospital Estadual Ernestina Lopes Jaime.';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
// End Customize wp-login Page
?>
