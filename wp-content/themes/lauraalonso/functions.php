<?php
define('THEME_URL', get_template_directory_uri());
define('SITE_URL', home_url());

add_action('after_setup_theme', 'theme_setup');

require_once get_template_directory() . '/resourse/class-wp-bootstrap-navwalker.php';

function theme_setup() {
    add_theme_support('post-thumbnails');
}


add_action('init', 'cpt_prensa', 1);
function cpt_prensa() {
	$labels = array(
			'name' => _x('Prensa', 'post type general name'),
			'singular_name' => _x('Prensa', 'post type singular name'),
			'add_new' => _x('A&ntilde;adir Nuevo', 'prensa'),
			'add_new_item' => __('A&ntilde;adir Nuevo'),
			'edit_item' => __('Editar'),
			'new_item' => __('Nuevo'),
			'view_item' => __('Ver'),
			'search_items' => __('Buscar'),
			'not_found' => __('No se han encontrado ningun resultado'),
			'not_found_in_trash' => __('No se han encontrado ningun resultado en la papelera'),
			'featured_image'     => 'Imagen prensa',
    		'set_featured_image' => 'Agregar Imagen prensa'
	);
	$args = array(
			'labels' => $labels,
			'public' => true,
			'hierarchical' => false,
			'menu_position' => 4,
			'has_archive' => true,
			'query_var' => true,
			'supports' => array('title','thumbnail'),
			'rewrite' => array('slug' => 'prensa'),
	);
	register_post_type( 'prensa', $args );
}


add_action('init', 'cpt_cursos', 1);
function cpt_cursos() {
	$labels = array(
			'name' => _x('Cursos', 'post type general name'),
			'singular_name' => _x('Cursos', 'post type singular name'),
			'add_new' => _x('A&ntilde;adir Nuevo', 'cursos'),
			'add_new_item' => __('A&ntilde;adir Nuevo'),
			'edit_item' => __('Editar'),
			'new_item' => __('Nuevo'),
			'view_item' => __('Ver'),
			'search_items' => __('Buscar'),
			'not_found' => __('No se han encontrado ningun resultado'),
			'not_found_in_trash' => __('No se han encontrado ningun resultado en la papelera'),
			'featured_image'     => 'Imagen cursos',
    		'set_featured_image' => 'Agregar Imagen cursos'
	);
	$args = array(
			'labels' => $labels,
			'public' => true,
			'hierarchical' => false,
			'menu_position' => 4,
			'has_archive' => true,
			'query_var' => true,
			'supports' => array('title','thumbnail'),
			'rewrite' => array('slug' => 'cursos'),
	);
	register_post_type( 'cursos', $args );
}


?>
