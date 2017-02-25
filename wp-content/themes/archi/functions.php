<?php
global $archi_option;
/**
 * Redux Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package archi
 */

if ( ! class_exists( 'ReduxFramewrk' ) ) {
    require_once( get_template_directory() . '/framework/sample-config.php' );
    function removeDemoModeLink() { // Be sure to rename this function to something more unique
        if ( class_exists('ReduxFrameworkPlugin') ) {
            remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
        }
        if ( class_exists('ReduxFrameworkPlugin') ) {
            remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
        }
    }
    add_action('init', 'removeDemoModeLink');
}

//Theme Set up:
function archi_theme_setup() {

    /** Set Content width **/
    if ( ! isset( $content_width ) ) {
        $content_width = 900;
    }

   /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on cubic, use a find and replace
     * to change 'cubic' to the name of your theme in all the template files
     */
	load_theme_textdomain( 'archi', get_template_directory() . '/languages' );

    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );
	add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    // Add Image Size Function customize image    
    add_image_size( 'thumb-blog', 540, 300, true ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode
    add_image_size( 'thumb-portfolio', 700, 466, true ); // 220 pixels wide by 180 pixels tall, hard crop mode
    add_image_size( 'thumb-service', 700, 358, true ); // Hard crop left top
    
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    //Post formats
    add_theme_support( 'post-formats', array(
        'audio',  'gallery', 'image', 'video',
    ) );
	//Tags
	add_theme_support( 'title-tag' );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'   => __('Primary Menu', 'archi'),
        'onepage'   => __('One Page Menu', 'archi'),
        'landing'   => __('Landing Page Menu', 'archi'),
		'service-menu'   => __('Service Page Menu', 'archi'),
	) );
}
add_action( 'after_setup_theme', 'archi_theme_setup' );

function archi_load_custom_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/framework/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'archi_load_custom_wp_admin_style' );

function archi_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $dosis = _x( 'on', 'Dosis font: on or off', 'archi' );
 
    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $open_sans = _x( 'on', 'Open Sans font: on or off', 'archi' );

    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $allura = _x( 'on', 'Allura font: on or off', 'archi' );  

    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $raleway = _x( 'on', 'Raleway font: on or off', 'archi' );   
 
    if ( 'off' !== $dosis || 'off' !== $open_sans || 'off' !== $allura ) {
        $font_families = array();
 
        if ( 'off' !== $dosis ) {
            $font_families[] = 'Dosis:400,200,300,500,600,700,800,900';
        }
 
        if ( 'off' !== $open_sans ) {
            $font_families[] = 'Open Sans:300,500,600,700,900,400';
        }

        if ( 'off' !== $raleway ) {
            $font_families[] = 'Raleway:400,200,200italic,300,300italic,400italic,500italic,500,600,600italic,700,700italic';
        }   

        if ( 'off' !== $allura ) {
            $font_families[] = 'Allura';
        }        
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
 
    return esc_url_raw( $fonts_url );
}

function archi_theme_scripts_styles() {
	global $archi_option;
	$protocol = is_ssl() ? 'https' : 'http';
    
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style( 'archi-fonts', archi_fonts_url(), array(), null );
	
    /** All frontend css files **/ 
    wp_enqueue_style( 'archi-bootstrap', get_template_directory_uri().'/css/bootstrap.css');
    if($archi_option['preload-switch']!=false){
    	wp_enqueue_style( 'archi-jpreloader', get_template_directory_uri().'/css/jpreloader.css');
    }
    if($archi_option['animate-switch']!=false){
    	wp_enqueue_style( 'archi-animate', get_template_directory_uri().'/css/animate.css');
    }
	wp_enqueue_style( 'archi-plugin', get_template_directory_uri().'/css/plugin.css');    

    /** load fonts **/
    wp_enqueue_style( 'archi-css-font-awesome', get_template_directory_uri().'/fonts/font-awesome/css/font-awesome.css');    
    wp_enqueue_style( 'archi-et-line-font_font', get_template_directory_uri().'/fonts/et-line-font/style.css');	

    wp_enqueue_style( 'archi-YTPlayer', get_template_directory_uri().'/css/jquery.mb.YTPlayer.min.css');

    /** Theme main style **/
	wp_enqueue_style( 'archi-style', get_stylesheet_uri(), array(), '25-10-2016' );
    
    if(isset($archi_option['header_layout']) and $archi_option['header_layout']=="hleft_side" ){
        wp_enqueue_style( 'archi-header-sidenav', get_template_directory_uri().'/css/header-sidenav.css');
    }elseif (isset($archi_option['header_layout']) and $archi_option['header_layout']=="hleft_side_light") {
        wp_enqueue_style( 'archi-header-sidenav-light', get_template_directory_uri().'/css/header-sidenav-light.css');
    }else{}
    

    if (class_exists('Woocommerce')) {
        wp_enqueue_style( 'archi-woocommerce', get_template_directory_uri().'/css/woocommerce.css');  
    }
    
    if($archi_option['version_type']=='light'){
        wp_enqueue_style( 'archi-style-light', get_template_directory_uri().'/css/light.css');        
    }    

    /** theme option for color **/
    wp_enqueue_style( 'archi-color', get_template_directory_uri() .'/framework/color.php');


    /** Js for comment on single post **/    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
    	wp_enqueue_script( 'comment-reply' );
	}

    /** All frontend js files **/    

    if($archi_option['preload-switch']==true){
        wp_enqueue_script("archi-jpreLoader", get_template_directory_uri()."/js/jpreLoader.js",array(),false,true);
    }
	wp_enqueue_script("archi-map-api", "$protocol://maps.googleapis.com/maps/api/js?key=AIzaSyAvpnlHRidMIU374bKM5-sx8ruc01OvDjI",array(),false,false);
	wp_enqueue_script("archi-bootstrap-js", get_template_directory_uri()."/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("isotope", get_template_directory_uri()."/js/jquery.isotope.min.js",array(),false,true);	
    wp_enqueue_script("archi-total", get_template_directory_uri()."/js/total1.js",array(),false,true);
    
	if(!is_page_template('page-templates/template-coming-soon-page.php') || !is_page_template('page-templates/template-coming-soon-video.php')){ 
        wp_enqueue_script("archi-classie", get_template_directory_uri()."/js/classie.js",array(),false,true);
	}

    if($archi_option['animate-switch']==true){
        wp_enqueue_script("archi-wow-js", get_template_directory_uri()."/js/wow.min.js",array(),false,true);
    }
	wp_enqueue_script("archi-magnific-popup", get_template_directory_uri()."/js/jquery.magnific-popup.min.js",array(),false,true);
	wp_enqueue_script("archi-enquire", get_template_directory_uri()."/js/enquire.min.js",array(),false,true);
    wp_enqueue_script("archi-PageScroll2id", get_template_directory_uri()."/js/jquery.malihu.PageScroll2id.js",array(),false,false);
    wp_enqueue_script("archi-YTPlayer", get_template_directory_uri()."/js/jquery.mb.YTPlayer.min.js",array(),false,true);	
    wp_enqueue_script("archi-typed", get_template_directory_uri()."/js/typed.js",array(),false,true);
    wp_enqueue_script("archi-let-it-snow", get_template_directory_uri()."/js/let-it-snow.min.js",array(),false,true);
    wp_enqueue_script("archi-custom", get_template_directory_uri()."/js/designesia.js",array(),false,true);
}
add_action( 'wp_enqueue_scripts', 'archi_theme_scripts_styles');

if(!function_exists('archi_custom_frontend_scripts')){
    function archi_custom_frontend_scripts(){
        global $archi_option; 
    ?>
        <script type="text/javascript">
            window.jQuery = window.$ = jQuery;  
            (function($) { "use strict";
                <?php if(isset($archi_option['header_layout']) and $archi_option['header_layout']!="htop_page" ){ ?>
                    /* Page Scroll to id fn call */ 
                    jQuery(".mainmenu li a,a[href='#'], a.scroll-to").mPageScroll2id({
                        highlightSelector:".mainmenu li a",
                        offset: 0,
                        scrollSpeed:750,
                        scrollEasing: "easeInOutCubic"
                    });
                <?php }else{ ?>
                    /* Page Scroll to id fn call */ 
                    jQuery("#mainmenu li a,a[href='#'], a.scroll-to").mPageScroll2id({
                        highlightSelector:"#mainmenu li a",
                        offset: 68,
                        scrollSpeed:750,
                        scrollEasing: "easeInOutCubic"
                    }); 
                <?php } ?>  
            })(jQuery);
        </script>
    <?php        
    }
}
add_action('wp_footer', 'archi_custom_frontend_scripts');

if(!function_exists('archi_custom_frontend_style')){
    function archi_custom_frontend_style(){
        global $archi_option;
        echo '<style type="text/css">'.$archi_option['custom-css'].'</style>';
    }
}
add_action('wp_head', 'archi_custom_frontend_style');

// Add specific CSS class by filter
add_filter( 'body_class', 'archi_body_class_names' );
function archi_body_class_names( $classes ) {
    global $archi_option;
	$theme = wp_get_theme();

    // add 'class-name' to the $classes array
    if($archi_option['version_type']=='light'){
        $classes[] = 'de_light';
    }

    if($archi_option['subpage-switch']==false && !is_page_template('page-templates/template-canvas.php') && !is_page_template('page-templates/template-landing.php') && !is_page_template('page-templates/template-onepage.php') ){ 
        $classes[] = 'no-subheader';
    }

    if($archi_option['topbar-allpage']==true && $archi_option['header_layout']=="htop_page"){
        $classes[] = 'has-topbar';
    } 

    if(isset($archi_option['header_layout']) and $archi_option['header_layout']!="htop_page" ){
        $classes[] = 'de-navbar-left';
    } 
	
	$classes[] = 'archi-theme-ver-'.$theme->version;
	
    $classes[] = 'wordpress-version-'.get_bloginfo( 'version' );
    
    // return the $classes array
    return $classes;
}

// Add specific CSS class by filter
function archi_header_class() {
    global $archi_option;

    $header_classes = array();

    if(($archi_option['topbar-onepage']==true and is_page_template('page-templates/template-onepage.php')) || ($archi_option['topbar-allpage']==true and !is_page_template('page-templates/template-onepage.php'))){ 
        $header_classes[] = 'de_header_2';
    }

    if(!is_page_template('page-templates/template-canvas.php')){
        $header_classes[] = 'header-bg';
    }

    if ($archi_option['mobile-sticky']==true) {
        $header_classes[] = 'header-mobile-sticky';
    }  

    if ($archi_option['desktop-sticky']==false) {
        $header_classes[] = 'header-desktop-nosticky';
    }   

    if(isset($archi_option['header_style']) and $archi_option['header_style']=="header_light" and is_page_template('page-templates/template-canvas.php') ){
        $header_classes[] = 'header-light';
    }elseif (isset($archi_option['header_style']) and $archi_option['header_style']=="header_overlay" and is_page_template('page-templates/template-canvas.php') ) {
        $header_classes[] = 'header-bg';
    }elseif (isset($archi_option['header_style']) and $archi_option['header_style']=="header_transparent" and is_page_template('page-templates/template-canvas.php') ) {
        $header_classes[] = 'transparent';
    }else{
        $header_classes[] = '';
    }

    if(isset($archi_option['header_position']) and $archi_option['header_position']=="onbottom_page" and is_page_template('page-templates/template-canvas.php') ){
        $header_classes[] = 'header-bottom';
    }    

    if ($archi_option['hideshow_header']==true and $archi_option['header_position']!="onbottom_page" and $archi_option['header_layout']=="htop_page" and is_page_template('page-templates/template-canvas.php') ) {
        $header_classes[] = 'autoshow scrollOff';
    } 
    
    // return the $classes array
    echo implode( ' ', $header_classes );
}

// Widget Sidebar
function archi_widgets_init() {
	register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'archi' ),
        'id'            => 'sidebar-1',        
		'description'   => __( 'Appears in the sidebar section of the site.', 'archi' ),        
		'before_widget' => '<div id="%1$s" class="widget %2$s">',        
		'after_widget'  => '</div>',        
		'before_title'  => '<h4>',        
		'after_title'   => '</h4><div class="small-border"></div>'
    ) );
	register_sidebar( array(
        'name'          => __( 'Shop Sidebar', 'archi' ),
        'id'            => 'shop-sidebar',        
        'description'   => __( 'Appears in the sidebar section of the site.', 'archi' ),        
        'before_widget' => '<div id="%1$s" class="widget %2$s">',        
        'after_widget'  => '</div>',        
        'before_title'  => '<h4>',        
        'after_title'   => '</h4><div class="small-border"></div>'
    ) );
    register_sidebar( array(
		'name'          => __( 'Footer One Widget Area', 'archi' ),
		'id'            => 'footer-area-1',
		'description'   => __( 'Footer Widget that appears on the Footer.', 'archi' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Two Widget Area', 'archi' ),
		'id'            => 'footer-area-2',
		'description'   => __( 'Footer Widget that appears on the Footer.', 'archi' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Three Widget Area', 'archi' ),
		'id'            => 'footer-area-3',
		'description'   => __( 'Footer Widget that appears on the Footer.', 'archi' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Fourth Widget Area', 'archi' ),
		'id'            => 'footer-area-4',
		'description'   => __( 'Footer Widget that appears on the Footer.', 'archi' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );    
}
add_action( 'widgets_init', 'archi_widgets_init' );

function archi_breadcrumbs() {
    $text['home']     = __('Home', 'archi'); // text for the 'Home' link
    $text['category'] = '%s'; // text for a category page
    $text['tax']      = '%s'; // text for a taxonomy page
    $text['search']   = '%s'; // text for a search results page
    $text['tag']      = '%s'; // text for a tag page
    $text['author']   = '%s'; // text for an author page
    $text['404']      = '404'; // text for the 404 page
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $showOnHome  = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter   = ' <b>/</b> '; // delimiter between crumbs
    $before      = '<li class="active">'; // tag before the current crumb
    $after       = '</li>'; // tag after the current crumb
    
    global $post;
    $homeLink = esc_url(home_url('/')) . '';
    $linkBefore = '<li>';
    $linkAfter = '</li>';
    $linkAttr = ' rel="v:url" property="v:title"';
    $link = $linkBefore . '<a' . $linkAttr . ' href="%1$s">%2$s</a>' . $linkAfter;
 
    if (is_home() || is_front_page()) {
 
        if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $text['home'] . '</a></div>';
 
    } else {
 
        echo '<ul class="crumb">' . sprintf($link, $homeLink, $text['home']) . $delimiter;
 
        
        if ( is_category() ) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                $cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
                $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                echo htmlspecialchars_decode( $cats );
            }
            echo htmlspecialchars_decode( $before ) . sprintf($text['category'], single_cat_title('', false)) . htmlspecialchars_decode( $after );
 
        } elseif( is_tax() ){
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                $cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
                $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                echo htmlspecialchars_decode( $cats );
            }
            echo htmlspecialchars_decode( $before ) . sprintf($text['tax'], single_cat_title('', false)) . htmlspecialchars_decode( $after );
        
        }elseif ( is_search() ) {
            echo htmlspecialchars_decode( $before ) . sprintf($text['search'], get_search_query()) . htmlspecialchars_decode( $after );
 
        } elseif ( is_day() ) {
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
            echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;
            echo htmlspecialchars_decode( $before ) . get_the_time('d') . htmlspecialchars_decode( $after );
 
        } elseif ( is_month() ) {
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
            echo htmlspecialchars_decode( $before ) . get_the_time('F') . htmlspecialchars_decode( $after );
 
        } elseif ( is_year() ) {
            echo htmlspecialchars_decode( $before ) . get_the_time('Y') . htmlspecialchars_decode( $after );
 
        } elseif ( is_single() && !is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;                
                if ( get_post_type() == 'portfolio' ) {
                    printf($link, $homeLink . '' . $slug['slug'] . '/', 'portfolio'); //Translate portfolio breadcrumb.
                }elseif (get_post_type() == 'service') {
                    printf($link, $homeLink . '' . $slug['slug'] . '/', 'service'); //Translate service breadcrumb.
                }else{
                    printf($link, $homeLink . '' . $slug['slug'] . '/', $post_type->labels->singular_name);
                }
                if ($showCurrent == 1) echo htmlspecialchars_decode( $delimiter ) . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category(); $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $delimiter);
                if ($showCurrent == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                echo htmlspecialchars_decode( $cats );
                if ($showCurrent == 1) echo htmlspecialchars_decode( $before ) . get_the_title() . $after;
            }
 
        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
            $post_type = get_post_type_object(get_post_type());
            echo htmlspecialchars_decode( $before ) . $post_type->labels->singular_name . htmlspecialchars_decode( $after );
 
        } elseif ( is_attachment() ) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID); $cat = $cat[0];
            $cats = get_category_parents($cat, TRUE, $delimiter);
            $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
            $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
            echo htmlspecialchars_decode( $cats );
            printf($link, get_permalink($parent), $parent->post_title);
            if ($showCurrent == 1) echo htmlspecialchars_decode( $delimiter ) . $before . get_the_title() . $after;
 
        } elseif ( is_page() && !$post->post_parent ) {
            if ($showCurrent == 1) echo htmlspecialchars_decode( $before ) . get_the_title() . $after;
 
        } elseif ( is_page() && $post->post_parent ) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo htmlspecialchars_decode( $breadcrumbs[$i] );
                if ($i != count($breadcrumbs)-1) echo htmlspecialchars_decode( $delimiter );
            }
            if ($showCurrent == 1) echo htmlspecialchars_decode( $delimiter ) . $before . get_the_title() . $after;
 
        } elseif ( is_tag() ) {
            echo htmlspecialchars_decode( $before ) . sprintf($text['tag'], single_tag_title('', false)) . $after;
 
        } elseif ( is_author() ) {
             global $author;
            $userdata = get_userdata($author);
            echo htmlspecialchars_decode( $before ) . sprintf($text['author'], $userdata->display_name) . $after;
 
        } elseif ( is_404() ) {
            echo htmlspecialchars_decode( $before ) . $text['404'] . $after;
        }
 
        if ( get_query_var('paged') ) {
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() );
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
        }
 
        echo '</ul>';
 
    }
}

/**custom function tag widgets**/
function archi_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = ''; //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'archi_tag_cloud_widget' );

/** Custom theme option post excerpt **/
function archi_excerpt() {
  global $archi_option;
  if(isset($archi_option['blog_excerpt'])){
    $limit = $archi_option['blog_excerpt'];
  }else{
    $limit = 15;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

/** Excerpt Section Blog Post **/
function archi_blog_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

//pagination
function archi_pagination($prev = '<i class="fa fa-angle-double-left"></i>', $next = '<i class="fa fa-angle-double-right"></i>', $pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
		'base' 			=> str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
		'format' 		=> '',
		'current' 		=> max( 1, get_query_var('paged') ),
		'total' 		=> $pages,
		'prev_text' => $prev,
        'next_text' => $next,		
        'type'			=> 'list',
		'end_size'		=> 3,
		'mid_size'		=> 3
    );
    $return =  paginate_links( $pagination );
	echo str_replace( "<ul class='page-numbers'>", '', $return );
}

/* Custom form search */
function archi_search_form( $form ) {
    $form = '<form role="search" method="get" action="' . esc_url(home_url( '/' )) . '" >  
    	<input type="search" id="search" class="search-field form-control" value="' . get_search_query() . '" name="s" placeholder="'.__('type to search&hellip;', 'archi').'" />
    	<button id="btn-search" type="submit"></button>
        <div class="clearfix"></div>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'archi_search_form' );

/* Custom comment List: */
function archi_theme_comment($comment, $args, $depth) {    
   $GLOBALS['comment'] = $comment; ?>
   <li class="post-content-comment grey-section">
   		<div class="img">
		<?php echo get_avatar($comment,$size='70',$default='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=70' ); ?>
		</div>
		<div class="comment-content">
			<h6><?php printf(__('%s','archi'), get_comment_author()) ?></h6>
		</div>		
		<div class="date">
			<span class="c_date"><?php the_time('dS M Y'); ?></span>
            <span class="c_reply"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
		</div>
		<div class="comment-content">
		<?php if ($comment->comment_approved == '0'){ ?>
			 <p><em><?php _e('Your comment is awaiting moderation.','archi') ?></em></p>
		<?php }else{ ?>
            <?php comment_text() ?>
         <?php } ?>
		</div>		
	   <div class="clearfix"></div>	
	</li> 
<?php
}

/**** WooCommerce ****/
if (class_exists('Woocommerce')) {
    add_theme_support( 'woocommerce' );    

    // Display 12 products per page. Goes in functions.php
    add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );

    // breadcrumb woocommerce
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
    add_action('breadcrumb_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

    remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

    if (  ! function_exists( 'woocommerce_template_loop_product_title' ) ) {
        /**
         * Show the product title in the product loop. By default this is an H3.
         */
        function woocommerce_template_loop_product_title() {
            echo get_the_title();
        }
    }
}


//Code Visual Composer.
require_once get_template_directory() . '/vc_shortcode.php';
//if(class_exists('WPBakeryVisualComposerSetup')){
// Add new Param in Row
if(function_exists('vc_add_param')){
    vc_add_param(
        'vc_row',
        array(
            "type" => "dropdown",
            "heading" => __('Fullwidth', 'archi'),
            "param_name" => "fullwidth",
            "value" => array(   
                            __('No', 'archi') => 'no',  
                            __('Yes', 'archi') => 'yes',                                                                                
                          ),
            "description" => __("Select Fullwidth or not, Default: No fullwidth", "archi"),      
        ) 
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'checkbox',
            'heading' => __( 'Full height?', 'archi' ),
            'param_name' => 'archi_fullheight',
            'description' => __( 'If checked row will be set to full height.', 'archi' ),
            'value' => array( __( 'Yes', 'archi' ) => 'yes' ),
        )
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'checkbox',
            'heading' => __( 'Parallax row?', 'archi' ),
            'param_name' => 'archi_parallax',
            'description' => __( 'If checked row will be set to parallax and you need add background parallax in Design Options Tab.', 'archi' ),
            'value' => array( __( 'Yes', 'archi' ) => 'yes' ),
        )
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'checkbox',
            'heading' => esc_html__( 'Put a pictures on the half Row?', 'archi' ),
            'param_name' => 'img_halfrow',
            'description' => esc_html__( 'If checked row will be set to full height.', 'archi' ),
            'value' => array( esc_html__( 'Yes', 'archi' ) => 'yes' ),
        )
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'attach_image',
            'heading' => esc_html__( 'Image', 'archi' ),
            'param_name' => 'halfrow_image',
            'value' => '',
            'description' => esc_html__( 'Select image from media library.', 'archi' ),
            'dependency' => array(
                'element' => 'img_halfrow',
                'not_empty' => true,
            ),
        )
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Columns image', 'archi' ),
            'param_name' => 'img_columns',
            'value' => array(
                esc_html__( 'Default', 'archi' ) => '',
                esc_html__( 'Image on 4 Columns', 'archi' ) => '4columns',
                esc_html__( 'Image on 5 Columns', 'archi' ) => '5columns',
                esc_html__( 'Image on 6 Columns', 'archi' ) => '6columns',
                esc_html__( 'Image on 7 Columns', 'archi' ) => '7columns',
            ),
            'description' => esc_html__( 'Select columns position within row.', 'archi' ),
            'dependency' => array(
                'element' => 'img_halfrow',
                'not_empty' => true,
            ),
        )
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Image position', 'archi' ),
            'param_name' => 'img_position',
            'value' => array(
                esc_html__( 'Default', 'archi' ) => '',
                esc_html__( 'Image on Left Row', 'archi' ) => 'imgleft',
                esc_html__( 'Image on Right Row', 'archi' ) => 'imgright',                
            ),
            'description' => esc_html__( 'Select Image position within row.', 'archi' ),
            'dependency' => array(
                'element' => 'img_halfrow',
                'not_empty' => true,
            ),
        )
    );
	
    // Add new Param in Column	
    vc_add_param('vc_column',array(
		  "type" => "dropdown",
		  "heading" => __('CSS Animation', 'archi'),
		  "param_name" => "animate",
		  "value" => array(   
							__('None', 'archi') => 'none', 
							__('Fade In Up', 'archi') => 'fadeinup', 
							__('Fade In Down', 'archi') => 'fadeindown', 
							__('Fade In', 'archi') => 'fadein', 
							__('Fade In Left', 'archi') => 'fadeinleft',  
							__('Fade In Right', 'archi') => 'fadinright',
						  ),
		  "description" => __("Select Animate , Default: None", 'archi'),      
		) 
    );
    vc_add_param('vc_column',array(
          "type" => "textfield",
          "heading" => esc_html__('Animation time delay number', 'archi'),
          "param_name" => "delay",
          "value" => "",
          "description" => esc_html__("Example : 0.2, 0.6, 1, etc", 'archi'), 
          "dependency"  => array( 'element' => 'animate', 'value' => array( 'fadeinup', 'fadeindown', 'fadein', 'fadeinleft', 'fadinright' ) ),     
        ) 
    );
    vc_add_param('vc_column',array(
          "type" => "textfield",
          "heading" => esc_html__('Animation time duration number', 'archi'),
          "param_name" => "duration",
          "value" => "",
          "description" => esc_html__("Example : 0.2, 0.6, 1, etc", 'archi'),   
          "dependency"  => array( 'element' => 'animate', 'value' => array( 'fadeinup', 'fadeindown', 'fadein', 'fadeinleft', 'fadinright' ) ),   
        ) 
    );

    // Add new Param in Column inner
    vc_add_param('vc_column_inner',array(
          "type" => "dropdown",
          "heading" => __('CSS Animation', 'archi'),
          "param_name" => "animate",
          "value" => array(   
                            __('None', 'archi') => 'none', 
                            __('Fade In Up', 'archi') => 'fadeinup', 
                            __('Fade In Down', 'archi') => 'fadeindown', 
                            __('Fade In', 'archi') => 'fadein', 
                            __('Fade In Left', 'archi') => 'fadeinleft',  
                            __('Fade In Right', 'archi') => 'fadeinright',
                          ),
          "description" => __("Select Animate , Default: None", 'archi'),      
        ) 
    );
    vc_add_param('vc_column_inner',array(
          "type" => "textfield",
          "heading" => esc_html__('Animation time delay number', 'archi'),
          "param_name" => "delay",
          "value" => "",
          "description" => esc_html__("Example : 0.2, 0.6, 1, etc", 'archi'), 
          "dependency"  => array( 'element' => 'animate', 'value' => array( 'fadeinup', 'fadeindown', 'fadein', 'fadeinleft', 'fadeinright' ) ),     
        ) 
    );
    vc_add_param('vc_column_inner',array(
          "type" => "textfield",
          "heading" => esc_html__('Animation time duration number', 'archi'),
          "param_name" => "duration",
          "value" => "",
          "description" => esc_html__("Example : 0.2, 0.6, 1, etc", 'archi'),   
          "dependency"  => array( 'element' => 'animate', 'value' => array( 'fadeinup', 'fadeindown', 'fadein', 'fadeinleft', 'fadeinright' ) ),   
        ) 
    );
	
    vc_remove_param( "vc_row", "parallax" );
    vc_remove_param( "vc_row", "parallax_image" );
    vc_remove_param( "vc_row", "full_width" );
    vc_remove_param( "vc_row", "full_height" );
    vc_remove_param( "vc_row", "video_bg" );
    vc_remove_param( "vc_row", "video_bg_parallax" );
    vc_remove_param( "vc_row", "video_bg_url" );
	vc_remove_param( "vc_row", "parallax_speed_bg" );
	vc_remove_param( "vc_row", "parallax_speed_video" );
	vc_remove_param( "vc_row", "columns_placement" );
	vc_remove_param( "vc_row", "gap" );
    vc_remove_param( "vc_column", "css_animation" );    
    
}
//}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'archi_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function archi_theme_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'               => 'Meta Box',
            'slug'               => 'meta-box',
            'required'           => true,
            'force_activation'   => false,
            'force_deactivation' => false,
        ),
        array(
            'name'      => 'Redux Framework',
            'slug'      => 'redux-framework',
            'required'           => true,
            'force_activation'   => false,
            'force_deactivation' => false,
        ),
        array(
            'name'                     => 'Contact Form 7', // The plugin name
            'slug'                     => 'contact-form-7', // The plugin slug (typically the folder name)
            'required'                 => false, // If false, the plugin is only 'recommended' instead of required
        ),
        array(
            'name'                     => 'Woocommerce', // The plugin name
            'slug'                     => 'woocommerce', // The plugin slug (typically the folder name)
            'required'                 => false, // If false, the plugin is only 'recommended' instead of required
        ),

        // This is an example of how to include a plugin from an arbitrary external source in your theme.
        array(
			'name'               => 'WPBakery Visual Composer', // The plugin name.
			'slug'               => 'js_composer', // The plugin slug (typically the folder name).
			'source'             => 'http://oceanthemes.net/plugins-required/js_composer.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '5.0.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
        array(
            'name'               => 'Revolution Slider', // The plugin name.
            'slug'               => 'revslider', // The plugin slug (typically the folder name).            
            'source'             => 'http://oceanthemes.net/plugins-required/revslider.zip', // The plugin source.            
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '5.3.1.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),          
        array(            
            'name'               => 'OT Themes One Click Import Demo', // The plugin name.
            'slug'               => 'ot-themes-one-click-import', // The plugin slug (typically the folder name).
            'source'             => 'http://oceanthemes.net/plugins-required/archi/ot-themes-one-click-import.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),                  
        array(            
            'name'               => 'OT Portfolios', // The plugin name.
            'slug'               => 'ot_portfolio', // The plugin slug (typically the folder name).
            'source'             => 'http://oceanthemes.net/plugins-required/archi/ot_portfolio.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(            
            'name'               => 'OT Testimonial', // The plugin name.
            'slug'               => 'ot_testimonial', // The plugin slug (typically the folder name).
            'source'             => 'http://oceanthemes.net/plugins-required/archi/ot_testimonial.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(            
            'name'               => 'OT Process', // The plugin name.
            'slug'               => 'ot_process', // The plugin slug (typically the folder name).
            'source'             => 'http://oceanthemes.net/plugins-required/archi/ot_process.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(            
            'name'               => 'OT Services', // The plugin name.
            'slug'               => 'ot_service', // The plugin slug (typically the folder name).
            'source'             => 'http://oceanthemes.net/plugins-required/archi/ot_service.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(            
            'name'               => 'OT Gallery', // The plugin name.
            'slug'               => 'ot_gallery', // The plugin slug (typically the folder name).
            'source'             => 'http://oceanthemes.net/plugins-required/archi/ot_gallery.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),
    );

    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
    $config = array(
        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.  
    );

    tgmpa( $plugins, $config );
}

/**
 * Implement the Custom Meta Boxs.
 */
require_once get_template_directory() . '/framework/meta-boxes.php';
/**
 * Customizer shortcode.
 */
require_once get_template_directory() . '/shortcodes.php';
/**
 * Customizer menu item.
 */
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
/**
 * Customizer images.
 */
require_once get_template_directory() . '/framework/BFI_Thumb.php';

?>