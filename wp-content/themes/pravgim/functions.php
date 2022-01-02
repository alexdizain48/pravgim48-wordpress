<?php

add_action('after_setup_theme', 'prav_setup');
add_action('wp_enqueue_scripts', 'prav_register_style');
add_action('wp_enqueue_scripts', 'prav_register_script');
add_action('widgets_init', 'prav_register_widgets');
//add_filter('widget_text', 'do_shortcode');

add_filter('show_admin_bar', '__return_false');
add_filter('fallback_intermediate_image_sizes', 'wpb_disable_pdf_previews');

//удаление не нужных превьюх при звгрузки изображений
add_filter('intermediate_image_sizes', 'delete_intermediate_image_sizes');
function delete_intermediate_image_sizes($sizes)
{
    return array_diff($sizes, [
        'medium_large',
        'large',
        '1536x1536',
        '2048x2048'
    ]);
}

//костыль для настроек плагина хлебных крошек
function add_bcn_manage_options_to_admin() {
    $role = get_role( 'administrator' );
    $role->add_cap( 'bcn_manage_options' );
}
add_action( 'admin_init', 'add_bcn_manage_options_to_admin');

//паттерны в новостях
add_action('init', 'news_with_two_columns');
function news_with_two_columns()
{
    register_block_pattern_category(
        'news-with-two-columns-patterns',
        [
            'label' => esc_html__('Новости с двумя колонками', 'textdomain'),
            esc_html__('Новости с одним видео из YouTube', 'textdomain')
        ]
    );
    register_block_pattern(
        'news-with-two-columns-patterns/intro-with-two-columns',
        [
            'title' => esc_html__('News with two columns', 'textdomain'),
            'categories' => ['news-with-two-columns-patterns'],
            'content' => file_get_contents(plugin_dir_path(__FILE__) . 'patterns/news-with-two-columns.html'),
        ]
    );
}

//новости с видео из YouTube
/*add_action( 'init', 'news_with_one_youtube' );
function news_with_one_youtube() {
    register_block_pattern_category(
        'news_with_one_youtube-patterns',
        [
            'label' => esc_html__( 'Новости с одним видео из YouTube', 'textdomain' )
        ]
    );
    register_block_pattern(
        'demo-patterns/intro-with-two-columns',
        [
            'title'      => esc_html__( 'News with one YouTube', 'textdomain' ),
            'categories' => ['news_with_one_youtube-patterns'],
            'content'    => file_get_contents( plugin_dir_path( __FILE__ ) . 'patterns/news-with-one-youtube.html' ),
        ]
    );
}*/

//пагинация в записях
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2);
function my_navigation_template($template, $class)
{
    return '
        <div class="pagins">
          <ul class="pagination pagination-sm">
            <li>%3$s</li>
          </ul>
        </div>
	';
}

// отключаем миниатюры при загрузке PDF
function wpb_disable_pdf_previews()
{
    $fallbacksizes = array();
    return $fallbacksizes;
}

function prav_setup()
{
    register_nav_menu('menu-header', 'Верхнее меню');
    add_theme_support('custom-logo');//фавикон
    add_theme_support('title-tag');
}

function _prav_assets_path($path)
{
    return get_template_directory_uri() . '/assets/' . $path;
}

function _prav_path_img_header_footer($path)
{
    return get_template_directory_uri() . '/assets/uploads/' . $path;
}

function prav_register_style()
{
    wp_enqueue_style('bootstrap_style',
        _prav_assets_path('css/bootstrap.css'),
        [], 3.0, 'all');

    wp_enqueue_style('font-awesome_style',
        _prav_assets_path('font-awesome/css/font-awesome.min.css'),
        [], 4.2, 'all');

    wp_enqueue_style('custom_scrollbar_style',
        _prav_assets_path('css/jquery.mCustomScrollbar.css'),
        [], 1.0, 'all');

    wp_enqueue_style('owl_carousel_style',
        _prav_assets_path('css/owl.carousel.css'),
        [], 1.3, 'all');

    wp_enqueue_style('responsiveslides_style',
        _prav_assets_path('css/responsiveslides.css'),
        [], 1.3, 'all');

    wp_enqueue_style('main_style',
        get_template_directory_uri() . "/style.css",
        //_prav_assets_path('css/style.css'),
        [], 1.0, 'all');

    wp_enqueue_style('jquery_fancybox_style',
        _prav_assets_path('css/jquery.fancybox.css'),
        [], 2.1, 'all');
}

function prav_register_script()
{
    wp_deregister_script('jquery');

    wp_register_script('jquery',
        _prav_assets_path('js/jquery.min.js'),
        [], '1.1', false);

    wp_enqueue_script('jquery');

    /*wp_enqueue_script('jquery_js',
        _prav_assets_path('js/jquery.min.js') ,
        [], '1.11', false);*/

    wp_enqueue_script('uhpv_full_js',
        _prav_assets_path('uhpv-full.min.js'),
        [], '1.0', false);

    wp_enqueue_script('bootstrap_js',
        _prav_assets_path('js/bootstrap.js'),
        [], '3.1', false);

    wp_enqueue_script('mCustomScrollbar_js',
        _prav_assets_path('js/jquery.mCustomScrollbar.concat.min.js'),
        [], '3.1', false);

    wp_enqueue_script('owl_carousel_js',
        _prav_assets_path('js/owl.carousel.js'),
        [], '1.3', false);

    wp_enqueue_script('responsiveslides_js',
        _prav_assets_path('js/responsiveslides.min.js'),
        [], '1.5', false);

    wp_enqueue_script('jquery_fancybox_js',
        _prav_assets_path('js/jquery.fancybox.pack.js'),
        [], '2.1', false);

    wp_enqueue_script('allScript_js',
        _prav_assets_path('js/allScript.js'),
        [], '1.0', false);

    wp_enqueue_script('toTop_js',
        _prav_assets_path('js/toTop.js'),
        [], '1.0', true);

    wp_enqueue_script('modernizr_custom_js',
        _prav_assets_path('js/modernizr.custom.js'),
        [], '2.6', true);
}

function prav_register_widgets()
{
    register_sidebar([
        'name' => 'Контакты',
        'id' => 'prav-contacts',
        'description' => 'Информация о контактах',
        'before_widget' => null,
        'after_widget' => null
    ]);
    register_sidebar([
        'name' => 'Праздничное оформление',
        'id' => 'prav-holiday',
        'before_widget' => null,
        'after_widget' => null
    ]);
}

//custom_dir---
add_filter('wp_handle_upload_prefilter', 'tp_handle_upload_prefilter');
add_filter('wp_handle_upload', 'tp_handle_upload');
function tp_handle_upload_prefilter($file)
{
    add_filter('upload_dir', 'tp_custom_upload_dir');
    return $file;
}

function tp_handle_upload($fileinfo)
{
    remove_filter('upload_dir', 'tp_custom_upload_dir');
    return $fileinfo;
}

function tp_custom_upload_dir($path)
{
    $use_default_dir = (isset($_REQUEST['post_id']) && $_REQUEST['post_id'] == 0) ? true : false;
    if (!empty($path['error']) || $use_default_dir)
        return $path;
    $extension = substr(strrchr($_POST['name'], '.'), 1);
    switch ($extension) {
        case 'jpg':
        case 'jpeg':
        case 'JPG':
        case 'JPEG':
        case 'png':
        case 'PNG':
        case 'gif':
            $customdir = '/images';
            break;

        case 'zip':
        case 'rar':
            $customdir = '/arcives';
            break;

        case 'pdf':
            $customdir = '/pdf';
            break;

        case 'txt':
        case 'doc':
        case 'docx':
        case 'xlsx':
            $customdir = '/documents';
            break;

        default:
            $customdir = '/others';
            break;
    }
    $path['path'] = str_replace($path['subdir'], '', $path['path']);
    $path['url'] = str_replace($path['subdir'], '', $path['url']);
    $path['subdir'] = $customdir;
    $path['path'] .= $customdir;
    $path['url'] .= $customdir;
    return $path;
}
//-----