<?php
/**
 * Enqueue scripts and styles.
 */

add_action('wp_enqueue_scripts', 'chicandsmooth_theme_scripts');
add_action('wp_enqueue_scripts', 'chicandsmooth_theme_styles');

add_filter( 'style_loader_src',  'sdt_remove_ver_css_js', 9999, 2 );
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999, 2 );

function chicandsmooth_theme_scripts()
{
	$ver = wp_get_theme()->get( 'Version' );

   // wp_enqueue_script( 'api-yandex', 'https://api-maps.yandex.ru/2.1/?load=package.standard,package.geoObjects&lang=ru-RU', array(), $ver, true);
   // wp_enqueue_script( 'map-yandex', get_template_directory_uri() . '/map/yos.js', array(), $ver, true);
   // wp_enqueue_script( 'input-mask', get_template_directory_uri() . '/assets/dist/js/plugins/jquery.maskedinput.min.js', array(), $ver, true);
   // wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/dist/js/app.js', array(), $ver, true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function chicandsmooth_theme_styles()
{
	$ver = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'chicandsmooth-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style('app', get_template_directory_uri() . '/assets/dist/css/app.css', array(), $ver, 'all');
}

function sdt_remove_ver_css_js( $src, $handle )
{
	$handles_with_version = [ 'style' ]; // <-- Adjust to your needs!
	if ( strpos( $src, 'ver=' ) && ! in_array( $handle, $handles_with_version, true ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

/**
 * SET AJAX URL
 */
function chicandsmooth_ajax_script() {
    ?>
    <script>
        let ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
    <?php
}
add_action('wp_head', 'chicandsmooth_ajax_script');

