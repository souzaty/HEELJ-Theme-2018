<?php
/** HEELJ Theme Functions
 * @package WordPress
 * @subpackage HEELJ
 * @since HEELJ 1.0 Beta
 */


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
	'name' => 'Footer 1',
	'id' => 'heelj-footer-sidebar-1',
	'description' => 'Exibido no rodapé do tema na coluna 1',
	'before_widget' => '<aside id="%1$s" class="widget %2$s footer-menu">',
	'after_widget' => '</aside>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>'
));
register_sidebar(array(
	'name' => 'Footer 2',
	'id' => 'heelj-footer-sidebar-2',
	'description' => 'Exibido no rodapé do tema na coluna 2',
	'before_widget' => '<aside id="%1$s" class="widget %2$s footer-menu">',
	'after_widget' => '</aside>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>'
));
register_sidebar(array(
	'name' => 'Footer 3',
	'id' => 'heelj-footer-sidebar-3',
	'description' => 'Exibido no rodapé do tema na coluna 3',
	'before_widget' => '<aside id="%1$s" class="widget %2$s footer-menu">',
	'after_widget' => '</aside>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>'
));
register_sidebar(array(
	'name' => 'Footer 4',
	'id' => 'heelj-footer-sidebar-4',
	'description' => 'Exibido no rodapé do tema na coluna 4',
	'before_widget' => '<aside id="%1$s" class="widget %2$s footer-menu">',
	'after_widget' => '</aside>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>'
));
// End Widgets
