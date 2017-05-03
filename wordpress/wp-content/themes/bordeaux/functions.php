<?php
    function bordeaux_enqueue_styles() {
        $parent_style = 'mh-magazine-lite-style';
        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style',
            get_stylesheet_directory_uri() . '/style.css',
            array( $parent_style ),
            wp_get_theme()->get('Version')
        );
    }
    add_action( 'wp_enqueue_scripts', 'bordeaux_enqueue_styles' );
    add_theme_support( 'post-thumbnails' );
?>
<?php
if (!function_exists('mh_magazine_lite_custom_header')) {
    function mh_magazine_lite_custom_header() {
        echo '<div class="mh-custom-header clearfix">' . "\n";
        if (get_header_image()) {
            echo '<a class="mh-header-image-link" href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home">' . "\n";
            echo '<img class="mh-header-image" src="' . esc_url(get_header_image()) . '" height="' . esc_attr(get_custom_header()->height) . '" width="' . esc_attr(get_custom_header()->width) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\n";
            echo '</a>' . "\n";
        }
        if (function_exists('has_custom_logo') && has_custom_logo() || display_header_text()) {
            echo '<div class="mh-site-identity">' . "\n";
            echo '<div class="mh-site-logo" role="banner" itemscope="itemscope" itemtype="http://schema.org/Brand">' . "\n";
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            if (display_header_text()) {
                if (get_header_textcolor() != get_theme_support('custom-header', 'default-text-color')) {
                    echo '<style type="text/css" id="mh-header-css">';
                    echo '.mh-header-title, .mh-header-tagline { color: #' . esc_attr(get_header_textcolor()) . '; }';
                    echo '</style>' . "\n";
                }
                echo '<div class="mh-header-text">' . "\n";
                if (is_front_page()) {
                    $header_title_before = '<h1 class="mh-header-title">';
                    $header_title_after = '</h1>' . "\n";
                    $header_tagline_before = '<h2 class="mh-header-tagline">';
                    $header_tagline_after = '</h2>' . "\n";
                } else {
                    $header_title_before = '<h2 class="mh-header-title">';
                    $header_title_after = '</h2>' . "\n";
                    $header_tagline_before = '<h3 class="mh-header-tagline">';
                    $header_tagline_after = '</h3>' . "\n";
                }
                echo '<a class="mh-header-text-link" href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home">' . "\n";
                if (get_bloginfo('name')) {
                    echo $header_title_before . esc_attr(get_bloginfo('name')) . $header_title_after;
                }
                if (get_bloginfo('description')) {
                    echo $header_tagline_before . esc_attr(get_bloginfo('description')) . $header_tagline_after;
                }
                echo '</a>' . "\n";
                echo '<div class ="aheader">';
                echo '<a href="#">Quartiers</a>';
                echo '<a href="#">Plans</a>';
                echo '</div>';
                echo '<div class ="aheader">';
                echo '<ul class ="submenu">
                <li><a href="#">Aller au contenu |</a></li>
                <li><a href="#">Accessibilité | </a></li>
                <li><a href="#">Plan du site</a></li>
                </ul>';
                get_search_form();
                echo '</div>';
                echo '</div>' . "\n";
            }
            echo '</div>' . "\n";
            echo '</div>' . "\n";
        }
        echo '</div>' . "\n";
    }
}


if ( ! function_exists("save_my_post")) {
    function save_my_post() {
        error_log("nigga nigga");
    };
    add_action( 'save_post', 'save_my_post');
};
