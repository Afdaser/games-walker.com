<?php
/**
 * CNN Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CNN_Theme
 */

if ( ! function_exists( 'cnn_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cnn_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CNN Theme, use a find and replace
		 * to change 'cnn-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cnn-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-horizontal' => esc_html__( 'Horizontal', 'cnn-theme' ),
			'menu-dropdown' => esc_html__( 'Dropdown', 'cnn-theme' ),
			'menu-international' => esc_html__( 'International', 'cnn-theme' ),
			'menu-footer' => esc_html__( 'Footer',  'cnn-theme' ),
			'menu-links' => esc_html__( 'Links', 'cnn-theme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'post-formats', array( 'image', 'gallery', 'video', 'audio' ) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cnn_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cnn_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cnn_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cnn_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'cnn_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cnn_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cnn-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cnn-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Header News', 'cnn-theme' ),
		'id'            => 'header-news',
		'description'   => esc_html__( 'Add widgets here.', 'cnn-theme' ),
		'before_widget' => '<div class="header-news"><div class="container flex-none padd-none">',
		'after_widget'  => '<div class="close"></div></div></div>',
		'before_title'  => '<div class="title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'for zapis', 'cnn-theme' ),
		'id'            => 'for_zapis',
		'description'   => esc_html__( 'Add widgets here.', 'cnn-theme' ),
		'before_widget' => '<div><div class="container flex-none padd-none">',
		'after_widget'  => '<div class="close"></div></div></div>',
		'before_title'  => '<div class="title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'for page', 'cnn-theme' ),
		'id'            => 'for_page',
		'description'   => esc_html__( 'Add widgets here.', 'cnn-theme' ),
		'before_widget' => '<div><div class="container flex-none padd-none">',
		'after_widget'  => '<div class="close"></div></div></div>',
		'before_title'  => '<div class="title">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'cnn_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cnn_theme_scripts() {
	wp_enqueue_style( 'cnn-theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'cnn-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cnn-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cnn_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
}

/**
 * Disable the emoji's
 */
/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param    array  $plugins
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

class True_Walker_Nav_Menu_Dropdown extends Walker_Nav_Menu {
	/*
	 * Позволяет перезаписать <ul class="sub-menu">
	 */
	function start_lvl(&$output, $depth = 0, $args = array() ) {
		/*
		 * $depth – уровень вложенности, например 2,3 и т д
		 */
		$output .= '<ul>';
	}
}

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 просмотров";
    }
    return $count.' просмотров';
}
function twitter(){
	global $post;
    $twitter = get_the_author_meta( 'twitter', $post->post_author );
       if(!empty($twitter))
	   {
		   
       ?>
         <a href = '<?php echo $twitter; ?>' class = 'fab fa-twitter'></a>
       <?php 
	   }
}
function facebook(){
	global $post;
	$facebook = get_the_author_meta( 'facebook', $post->post_author );
       if(!empty($facebook))
	   {
		   
       ?>
         <a href = '<?php echo $facebook; ?>' class = 'fab fa-facebook'></a>
       <?php 
	   }
}
function instagram(){
	global $post;
	$instagram = get_the_author_meta( 'instagram', $post->post_author );
       if(!empty($instagram))
	   {
		   
       ?>
         <a href = '<?php echo $instagram; ?>' class = 'fab fa-instagram'></a>
       <?php 
	   }
}
function url(){
	global $post;
	$url = get_the_author_meta( 'url', $post->post_author );
       if(!empty($url))
	   {
		   
       ?>
         <a href = '<?php echo $url; ?>' class = 'fab fa-vk'></a>
       <?php 
	   }
}
function youtube(){
	global $post;
	$youtube = get_the_author_meta( 'youtube', $post->post_author );
       if(!empty($youtube))
	   {
		   
       ?>
         <a href = '<?php echo $youtube; ?>' class = 'fab fa-youtube'></a>
       <?php 
	   }
}
function linkedin(){
	global $post;
	$linkedin = get_the_author_meta( 'linkedin', $post->post_author );
       if(!empty($linkedin))
	   {
		   
       ?>
         <p><?php echo $linkedin; ?></p> 
       <?php 
	   }
}
function pinterest(){
	global $post;
	$pinterest = get_the_author_meta( 'pinterest', $post->post_author );
       if(!empty($pinterest))
	   {
		   
       ?>
         <p><?php echo $pinterest; ?></p> 
       <?php 
	   }
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
function get_first_paragraph(){
global $post;

$str = wpautop( get_the_content() );
$str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
$str = strip_tags($str, '<a><strong><em>');
return '<p>' . $str . '</p>';
}
add_filter( 'embed_defaults', 'bigger_embed_size' );

function bigger_embed_size()
{
return array( 'width' => 750, 'height' => 410 );
}
function get_post_images() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $images = $matches [0];
  return $images;
}
function get_post_images_count() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $images = $matches [0];
  return count($images);
}
function the_post_image_captions() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('~<\s*figure[^>]*>(.*?)<\s*/\s*figure>~i', trim($post->post_content), $matche);
  $captions = $matche [0];
  print_r($captions);
}

add_filter('the_content', function($content) {
	return str_replace(array("<iframe", "</iframe>"), array('<div class="iframe-container"><iframe', "</iframe></div>"), $content);
});

add_filter('embed_oembed_html', function ($html, $url, $attr, $post_id) {
	if(strpos($html, 'youtube.com') !== false || strpos($html, 'youtu.be') !== false){
  		return '<div class="embed-responsive embed-responsive-16by9">' . $html . '</div>';
	} else {
	 return $html;
	}
}, 10, 4);


add_filter('embed_oembed_html', function($code) {
  return str_replace('<iframe', '<iframe class="embed-responsive-item" ', $code);
});

// початок оптимізаціїї адсенс коду
function enqueue_adsense_script() {
    ?>
    <script type="text/javascript" async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <?php
}
add_action('wp_head', 'enqueue_adsense_script');
// кінець оптимізаціїї адсенс коду


function add_in_focus_meta_box() {
    add_meta_box(
        'in_focus_meta_box',      // ID метабокса
        'В Фокусе',               // Заголовок метабокса
        'in_focus_meta_box_callback', // Callback функция для отображения содержимого метабокса
        'post',                   // Тип поста, к которому добавляется метабокс
        'side'                    // Позиция, где должен отображаться метабокс
    );
}
add_action('add_meta_boxes', 'add_in_focus_meta_box');

function in_focus_meta_box_callback($post) {
    // Добавляем nonce для безопасности
    wp_nonce_field(basename(__FILE__), 'in_focus_nonce');

    // Получаем текущее значение мета-поля
    $in_focus_value = get_post_meta($post->ID, 'in_focus', true);

    // Поля формы для ввода
    echo '<label for="in_focus_field">Отметить как "в фокусе":</label> ';
    echo '<input type="checkbox" id="in_focus_field" name="in_focus_field" value="1" ' . checked(1, $in_focus_value, false) . '>';
}

function save_in_focus_meta_box($post_id) {
    // Проверяем nonce
    if (!isset($_POST['in_focus_nonce']) || !wp_verify_nonce($_POST['in_focus_nonce'], basename(__FILE__)))
        return $post_id;

    // Проверяем разрешения
    if ('post' !== $_POST['post_type'] || !current_user_can('edit_post', $post_id))
        return $post_id;

    // Сохраняем значение мета-поля
    $in_focus_value = isset($_POST['in_focus_field']) ? 1 : 0;
    update_post_meta($post_id, 'in_focus', $in_focus_value);
}
add_action('save_post', 'save_in_focus_meta_box');

function list_child_pages_shortcode($atts) {
    // Витягуємо атрибут id із шорткоду
    $atts = shortcode_atts(array('id' => ''), $atts);
    $parent_id = $atts['id'];

    // Якщо ID не вказано, використовуємо ID поточної сторінки
    if(empty($parent_id)) {
        global $post;
        $parent_id = $post->ID;
    }

    // Аргументи для WP_Query
    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => $parent_id,
        'order'          => 'ASC',
        'orderby'        => 'menu_order'
    );

    $child_pages = new WP_Query($args);

    // Початок виводу
    $output = '<ul class="child-pages-list">';
    
    if ($child_pages->have_posts()) : while ($child_pages->have_posts()) : $child_pages->the_post();
        $output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
    endwhile; endif;

    // Повертаємося до основного циклу WordPress
    wp_reset_postdata();

    // Закінчення виводу
    $output .= '</ul>';

    return $output;
}

// Додаємо шорткод
add_shortcode('child_pages', 'list_child_pages_shortcode');

function display_related_posts() {
    // Получаем ID текущего поста
    $current_post_id = get_the_ID();

    // Получаем категории текущего поста
    $categories = get_the_category($current_post_id);

    if ($categories) {
        // Предполагаем, что главная категория - это первая возвращенная категория
        $primary_category_id = $categories[0]->term_id;

        // Параметры для WP_Query
        $args = array(
            'category__in'   => array($primary_category_id), // Посты из главной категории
            'post__not_in'   => array($current_post_id),     // Исключаем текущий пост
            'posts_per_page' => 10,                          // Ограничиваем количество постов до 10
            'post_status'    => 'publish',                   // Только опубликованные посты
        );

        $related_posts = new WP_Query($args);

        // Проверяем, есть ли посты
        if ($related_posts->have_posts()) {
            echo '<ul>';
            while ($related_posts->have_posts()) {
                $related_posts->the_post();
                echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
            }
            echo '</ul>';
        }

        // Сброс данных запроса
        wp_reset_postdata();
    }
}

function enable_comments_support() {
    add_theme_support('comments');
    add_theme_support('comment_form');
}

add_action('after_setup_theme', 'enable_comments_support');


// Фільтр для перевірки коментарів на наявність посилань
function prevent_comment_links($comment_content) {
    // Видаляємо HTML-теги та залишаємо тільки текст
    $comment_text = strip_tags($comment_content);

    // Якщо коментар має посилання, то виводимо повідомлення і завершуємо виконання
    if (preg_match('/http|www|href/', $comment_text)) {
        wp_die('Извините, но в комментариях запрещено использование ссылок.');
    }

    // Повертаємо вміст коментаря, якщо він не має посилань
    return $comment_content;
}

// Додаємо фільтр до хука pre_comment_content
add_filter('pre_comment_content', 'prevent_comment_links');

// Фільтр для зміни полів форми коментарів
function remove_comment_website_field($fields) {
    // Видаляємо поле сайту з форми
    unset($fields['url']);
    return $fields;
}

// Додаємо фільтр до хука comment_form_default_fields
add_filter('comment_form_default_fields', 'remove_comment_website_field');


// Додаємо поле для автора
add_action( 'show_user_profile', 'add_user_bio_editor' );
add_action( 'edit_user_profile', 'add_user_bio_editor' );

function add_user_bio_editor( $user ) { ?>
    <h3>Додати повний опис</h3>
    <table class="form-table">
        <tr>
            <th><label for="full_bio">Повний опис</label></th>
            <td>
                <?php 
                $description = get_user_meta( $user->ID, 'full_bio', true );
                wp_editor( $description, 'full_bio', array(
                    'wpautop'       => true,
                    'media_buttons' => true,
                    'textarea_name' => 'full_bio',
                    'textarea_rows' => 10,
                    'teeny'         => false,
                    'quicktags'     => true
                ) ); 
                ?>
            </td>
        </tr>
    </table>
<?php }

// Зберігаємо поле опису
add_action( 'personal_options_update', 'save_user_bio_editor' );
add_action( 'edit_user_profile_update', 'save_user_bio_editor' );

function save_user_bio_editor( $user_id ) {
    if ( current_user_can( 'edit_user', $user_id ) ) {
        update_user_meta( $user_id, 'full_bio', $_POST['full_bio'] );
    }
}

// кінець поля для автора
// 
function remove_yoast_json_ld_for_author_pages($data) {
    if (is_author()) {
        // Повертаємо порожній масив, щоб видалити JSON-LD розмітку
        return [];
    }
    return $data;
}
add_filter('wpseo_json_ld_output', 'remove_yoast_json_ld_for_author_pages', 10, 1);


function get_post_date_iso() {
    return get_the_date('c');
}

function get_post_date_display() {
    return get_the_date();
}
function get_post_modified_date_iso() {
    return get_the_modified_date('c');
}