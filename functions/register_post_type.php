<?php
/*
add_action('init', function () {
	register_post_type('news', array(
		'labels' => array(
			'name' => 'Новости',
			'singular_name' => 'Новости',
			'menu_name' => 'Новости',
			'name_admin_bar' => 'Новости',
			'add_new' => 'Добавить новость',
			'add_new_item' => 'Добавить новую новость',
			'new_item' => 'Новая новость',
			'edit_item' => 'Редактировать новость',
			'view_item' => 'Посмотреть новость',
			'all_items' => 'Все новости',
			'search_items' => 'Поиск новостей',
			'not_found' => 'Новости не найдены',
			'not_found_in_trash' => 'Новости не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'news',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true, // true
		'hierarchical' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-admin-site-alt3',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
		'show_in_rest' => false, //! редактор гутенберг
	));
});
*/
/*
add_action('init', function () {
	register_post_type('certificates', array(
		'labels' => array(
			'name' => 'Сертификаты и лицензии',
			'singular_name' => 'Сертификат',
			'menu_name' => 'Сертификаты и лицензии',
			'name_admin_bar' => 'Сертификаты и лицензии',
			'add_new' => 'Добавить сертификат',
			'add_new_item' => 'Добавить новый сертификат',
			'new_item' => 'Новый сертификат',
			'edit_item' => 'Редактировать сертификат',
			'view_item' => 'Посмотреть сертификат',
			'all_items' => 'Все сертификаты',
			'search_items' => 'Поиск сертификатов',
			'not_found' => 'Сертификаты не найдены',
			'not_found_in_trash' => 'Сертификаты не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'certificates',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true, // true
		'hierarchical' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-media-document',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
		'show_in_rest' => false, //! редактор гутенберг
	));
});
*/
/*
add_action('init', function () {
	register_post_type('services', array(
		'labels' => array(
			'name' => 'Услуги',
			'singular_name' => 'Услуги',
			'menu_name' => 'Услуги',
			'name_admin_bar' => 'Услуги',
			'add_new' => 'Добавить услугу',
			'add_new_item' => 'Добавить новую услугу',
			'new_item' => 'Новая услугу',
			'edit_item' => 'Редактировать услугу',
			'view_item' => 'Посмотреть услугу',
			'all_items' => 'Все услуги',
			'search_items' => 'Поиск услуг',
			'not_found' => 'Услуги не найдены',
			'not_found_in_trash' => 'Услуги не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'services',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true, // true
		'hierarchical' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-hammer',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
		'show_in_rest' => true, //! редактор гутенберг
	));
});
*/
/*
add_action('init', function () {
	register_post_type('reviews', array(
		'labels' => array(
			'name' => 'Отзывы',
			'singular_name' => 'Отзывы',
			'menu_name' => 'Отзывы',
			'name_admin_bar' => 'Отзывы',
			'add_new' => 'Добавить отзыв',
			'add_new_item' => 'Добавить новый отзыв',
			'new_item' => 'Новый отзыв',
			'edit_item' => 'Редактировать отзыв',
			'view_item' => 'Посмотреть отзыв',
			'all_items' => 'Все отзывы',
			'search_items' => 'Поиск отзывов',
			'not_found' => 'Отзывы не найдены',
			'not_found_in_trash' => 'Отзывы не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'reviews',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-id-alt',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
		'show_in_rest' => false, //! редактор гутенберг
	));
});
*/
/*
add_action('init', function () {
	register_post_type('projects', array(
		'labels' => array(
			'name' => 'Проекты',
			'singular_name' => 'Проекты',
			'menu_name' => 'Проекты',
			'name_admin_bar' => 'Проекты',
			'add_new' => 'Добавить проект',
			'add_new_item' => 'Добавить новый проект',
			'new_item' => 'Новый проект',
			'edit_item' => 'Редактировать проект',
			'view_item' => 'Посмотреть проект',
			'all_items' => 'Все проекты',
			'search_items' => 'Поиск проектов',
			'not_found' => 'Проекты не найдены',
			'not_found_in_trash' => 'Проекты не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'projects',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-building',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
		'show_in_rest' => false, //! редактор гутенберг
	));
});
*/
// таксономия
/*
add_action('init', 'create_taxonomy');
function create_taxonomy()
{

	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('services_category', ['services'], [
		'label' => '',
		'labels' => [
			'name' => 'Категории услуг',
			'singular_name' => 'Категория услуг',
			'search_items' => 'Поиск категории',
			'all_items' => 'Все категории',
			'parent_item' => 'Родительская категория',
			'parent_item_colon' => 'Родительская категория:',
			'edit_item' => 'Редактировать категорию',
			'update_item' => 'Обновить категорию',
			'add_new_item' => 'Добавить новую категорию',
			'new_item_name' => 'Название новой категории',
			'menu_name' => 'Категории',
			'back_to_items' => '← Назад к категориям',
		],
		'description' => '', // описание таксономии
		'public' => true,
		'hierarchical' => true, // для подкатегорий

		'rewrite' => array('slug' => 'services_category'),

		'capabilities' => array(),
		'meta_box_cb' => null,
		'show_admin_column' => false,
		'show_in_rest' => true,
		'rest_base' => null,
	]);
}
*/