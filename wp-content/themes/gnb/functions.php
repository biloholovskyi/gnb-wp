<?php
add_action('wp_enqueue_scripts', 'style_them');
add_action('wp_footer', 'script_them');
add_action('after_setup_theme', 'menu');

remove_filter( 'the_excerpt', 'wpautop' );

function menu()
{
  register_nav_menu('header', 'Меню в шапке');
  register_nav_menu('footer', 'Меню в подвале');
  add_theme_support('post-thumbnails', array('services', 'cases'));
  add_filter('excerpt_more', function ($more) {
    return '';
  });
}

function style_them()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('owl_default', get_template_directory_uri() . '/css/owl.theme.default.min.css');
  wp_enqueue_style('owl', get_template_directory_uri() . '/css/owl.carousel.min.css');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
}

function script_them()
{
  wp_enqueue_script('carousel', get_template_directory_uri() . '/buildjs/owl.carousel.min.js');
  wp_enqueue_script('script', get_template_directory_uri() . '/buildjs/index.js');

  add_filter('script_loader_tag', 'codeless_remove_type_attr', 10, 2);
  function codeless_remove_type_attr($tag, $handle)
  {
    return preg_replace("/type=['\"]text\/(javascript|css)['\"]/", '', $tag);
  }
}

add_action('init', 'register_post_types');
function register_post_types()
{
  register_post_type('services', array(
    'label' => null,
    'labels' => array(
      'name' => 'Услуги', // основное название для типа записи
      'singular_name' => 'Услуга', // название для одной записи этого типа
      'add_new' => 'Добавить Услугу', // для добавления новой записи
      'add_new_item' => 'Добавление Услуги', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item' => 'Редактирование Услуги', // для редактирования типа записи
      'new_item' => 'Новая Услуга', // текст новой записи
      'view_item' => 'Смотреть Услугу', // для просмотра записи этого типа.
      'search_items' => 'Искать Услугу', // для поиска по этим типам записи
      'not_found' => 'Не найдена Услуга', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдена Услуга в корзине', // если не было найдено в корзине
      'parent_item_colon' => '', // для родителей (у древовидных типов)
      'menu_name' => 'Услуги', // название меню
    ),
    'description' => '',
    'public' => true,
    'publicly_queryable' => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui' => true, // зависит от public
    'show_in_menu' => true, // показывать ли в меню адмнки
    'show_in_admin_bar' => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus' => true, // зависит от public
    'show_in_rest' => null, // добавить в REST API. C WP 4.7
    'rest_base' => null, // $post_type. C WP 4.7
    'menu_position' => 2,
    'menu_icon' => 'dashicons-analytics',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical' => false,
    'supports' => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies' => array(),
    'has_archive' => false,
    'rewrite' => true,
    'query_var' => true,
  ));

  register_post_type('cases', array(
    'label' => null,
    'labels' => array(
      'name' => 'Проекты', // основное название для типа записи
      'singular_name' => 'Проект', // название для одной записи этого типа
      'add_new' => 'Добавить Проект', // для добавления новой записи
      'add_new_item' => 'Добавление Проекта', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item' => 'Редактирование Проекта', // для редактирования типа записи
      'new_item' => 'Новый Проект', // текст новой записи
      'view_item' => 'Смотреть Проект', // для просмотра записи этого типа.
      'search_items' => 'Искать Проект', // для поиска по этим типам записи
      'not_found' => 'Не найден Проект', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найден Проект в корзине', // если не было найдено в корзине
      'parent_item_colon' => '', // для родителей (у древовидных типов)
      'menu_name' => 'Проекты', // название меню
    ),
    'description' => '',
    'public' => true,
    'publicly_queryable' => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui' => true, // зависит от public
    'show_in_menu' => true, // показывать ли в меню адмнки
    'show_in_admin_bar' => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus' => true, // зависит от public
    'show_in_rest' => null, // добавить в REST API. C WP 4.7
    'rest_base' => null, // $post_type. C WP 4.7
    'menu_position' => 3,
    'menu_icon' => 'dashicons-excerpt-view',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical' => false,
    'supports' => array('title', 'thumbnail', 'editor', 'excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies' => array(),
    'has_archive' => false,
    'rewrite' => true,
    'query_var' => true,
  ));

  register_post_type('main_contacts', array(
    'label' => null,
    'labels' => array(
      'name' => 'Основные Контакты', // основное название для типа записи
      'singular_name' => 'Контакт', // название для одной записи этого типа
      'add_new' => 'Добавить Контакт', // для добавления новой записи
      'add_new_item' => 'Добавление Контакта', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item' => 'Редактирование Контакта', // для редактирования типа записи
      'new_item' => 'Новый Контакт', // текст новой записи
      'view_item' => 'Смотреть Контакт', // для просмотра записи этого типа.
      'search_items' => 'Искать Контакт', // для поиска по этим типам записи
      'not_found' => 'Не найден Контакт', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найден Контакт в корзине', // если не было найдено в корзине
      'parent_item_colon' => '', // для родителей (у древовидных типов)
      'menu_name' => 'Основные Контакты', // название меню
    ),
    'description' => '',
    'public' => true,
    'publicly_queryable' => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui' => true, // зависит от public
    'show_in_menu' => true, // показывать ли в меню адмнки
    'show_in_admin_bar' => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus' => true, // зависит от public
    'show_in_rest' => null, // добавить в REST API. C WP 4.7
    'rest_base' => null, // $post_type. C WP 4.7
    'menu_position' => 1,
    'menu_icon' => 'dashicons-share',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical' => false,
    'supports' => array('title'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies' => array(),
    'has_archive' => false,
    'rewrite' => true,
    'query_var' => true,
  ));
}


function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');