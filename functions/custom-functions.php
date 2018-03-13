<?php
/** HEELJ Theme Functions
 * @package WordPress
 * @subpackage HEELJ
 * @since HEELJ 1.0 Beta
 */

add_filter('wp_nav_menu_items', 'add_search_box_to_menu_heelj', 10, 2);
function add_search_box_to_menu_heelj($items, $args) {
	if ($args->theme_location == 'menu_topo_heelj')
		return $items . "<li class='menu-header-search navbar-custom-hospital clearColor'><a href='https://www.facebook.com/ibgh.os/?fref=ts' target='_blank'><span class='fa fa-facebook'></span></a></li><li class='menu-item menu-item-type-custom menu-item-object-custom menu-item-31 navbar-custom-hospital clearColor'><form role='search' method='get' class='search-form' action='" . esc_url(home_url('/')) . "'><div class='box box-header navbar-custom-hospital clearColor'>  <div class='container-2'><span class='icon'><i class='fa fa-search'></i></span><input class='navbar-custom-hospital clearColor' type='search' id='search' placeholder='pesquisar...' value='" . get_search_query() . "' name='s' /></div></div></form></li>";
	return $items;
}

// Start Widgets
register_sidebar(array(
	'name' => 'Sidebar Geral',
	'id' => 'eventos-treinamentos-heelj',
	'description' => 'Exibido nas páginas com modelo "Página de Notícias".',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>'
));
register_sidebar(array(
	'name' => 'Sidebar Contato',
	'id' => 'sidebar-contato',
	'description' => 'Exibido nas páginas com modelo "Página de Contato".',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>'
));
register_sidebar(array(
	'name' => 'Sala de Imprensa',
	'id' => 'sala-impresa',
	'description' => 'Exibido nas páginas com modelo "Página Sala de Imprensa".',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>'
));
register_sidebar(array(
	'name' => 'HEELJ Footer 1',
	'id' => 'heelj-footer-sidebar-1',
	'description' => 'Exibido no rodapé do tema na coluna 1',
	'before_widget' => '<aside id="%1$s" class="widget %2$s footer-menu">',
	'after_widget' => '</aside>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>'
));
register_sidebar(array(
	'name' => 'HEELJ Footer 2',
	'id' => 'heelj-footer-sidebar-2',
	'description' => 'Exibido no rodapé do tema na coluna 2',
	'before_widget' => '<aside id="%1$s" class="widget %2$s footer-menu">',
	'after_widget' => '</aside>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>'
));
register_sidebar(array(
	'name' => 'HEELJ Footer 3',
	'id' => 'heelj-footer-sidebar-3',
	'description' => 'Exibido no rodapé do tema na coluna 3',
	'before_widget' => '<aside id="%1$s" class="widget %2$s footer-menu">',
	'after_widget' => '</aside>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>'
));
register_sidebar(array(
	'name' => 'HEELJ Footer 4',
	'id' => 'heelj-footer-sidebar-4',
	'description' => 'Exibido no rodapé do tema na coluna 4',
	'before_widget' => '<aside id="%1$s" class="widget %2$s footer-menu">',
	'after_widget' => '</aside>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>'
));
// End Widgets
