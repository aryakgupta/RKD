<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "archi_option";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'archi_option',
        'use_cdn' => TRUE,
        'display_name'     => $theme->get('Name'),
        'display_version'  => $theme->get('Version'),
        'page_title' => 'Archi Options',
        'update_notice' => FALSE,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Archi Options',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'dev_mode'   => false,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_color' => 'lightgray',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => esc_html__( 'Theme Information 1', 'archi' ),
            'content' => esc_html__( 'This is the tab content, HTML is allowed.', 'archi' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => esc_html__( 'Theme Information 2', 'archi' ),
            'content' => esc_html__( 'This is the tab content, HTML is allowed.', 'archi' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = esc_html__( 'This is the sidebar content, HTML is allowed.', 'archi' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    // ACTUAL DECLARATION OF SECTIONS
    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-stackoverflow',
        'title' => __('Miscellaneous Settings', 'archi'),
        'fields' => array(   
            array(
                'id'       => 'animate-switch',
                'type'     => 'switch', 
                'title'    => __('Animation Off?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'default'  => true,
            ),              
            array(
                'id'       => 'footer-landing',
                'type'     => 'switch', 
                'title'    => __('Footer Widget Landing Page On?', 'archi'),
                'subtitle' => __('Look, it\'s off!', 'archi'),
                'default'  => false,
            ),                                      
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-repeat',
        'title' => __('Preload Settings', 'archi'),
        'fields' => array(            
            array(
                'id'       => 'preload-switch',
                'type'     => 'switch', 
                'title'    => __('Preload Off?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'default'  => true,
            ),  
            array(
                'id' => 'preload-text-color',
                'type' => 'color',
                'title' => __('Preload Text Color', 'archi'),
                'subtitle' => __('Pick the preload text color (default: #111111).', 'archi'),
                'default' => '#111111',
                'validate' => 'color',
            ), 
            array(
                'id' => 'preload-background-color',
                'type' => 'color',
                'title' => __('Preload Background Color', 'archi'),
                'subtitle' => __('Pick the preload background color (default: #000000).', 'archi'),
                'default' => '#000000',
                'validate' => 'color',
            ),                            
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-picture',
        'title' => __('Logo & Favicon Settings', 'archi'),
        'fields' => array(
            array(
                'id' => 'favicon',
                'type' => 'media',
                'url' => true,
                'title' => __('Favicon', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('Favicon.', 'archi'),
                'subtitle' => __('Favicon', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/favicon.png'),                     
            ),
            array(
                'id' => 'logo',
                'type' => 'media',
                'url' => true,
                'title' => __('Logo static on header normal', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('logo for header normal, logo for header side navigation on mobile.', 'archi'),
                'subtitle' => __('Logo static', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/logo.png'),                     
            ),
            array(
                'id' => 'logo_scroll',
                'type' => 'media',
                'url' => true,
                'title' => __('Logo scroll on header normal', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('logo for header normal when scroll down page and use this logo.', 'archi'),
                'subtitle' => __('Logo scroll is empty then will use Logo static to instead', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/logo.png'),                     
            ),    
            array(
                'id' => 'logo2',
                'type' => 'media',
                'url' => true,
                'title' => __('Logo on Header Side Navigation', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('logo for header side navigation on desktop.', 'archi'),
                'subtitle' => __('Logo', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/logo-2.png'),                     
            ),                                              
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-credit-card',
        'title' => __('Topbar Header Settings', 'archi'),
        'fields' => array(
            array(
                'id'       => 'topbar-onepage',
                'type'     => 'switch', 
                'title'    => __('Topbar One-Page Off?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'default'  => true,
            ), 
            array(
                'id'       => 'topbar-allpage',
                'type'     => 'switch', 
                'title'    => __('Topbar All Page Off?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'default'  => true,
            ), 
            array(
                'id' => 'topbar-text-color',
                'type' => 'color',
                'title' => __('Topbar Text Color', 'archi'),
                'subtitle' => __('Pick the topbar text color (default: #ffffff).', 'archi'),
                'default' => '#ffffff',
                'validate' => 'color',
            ),   
            array(
                'id' => 'topbar-border-color',
                'type' => 'color_rgba',
                'title' => __('Topbar Border Bottom Color', 'archi'),
                'subtitle' => __('Pick the topbar border bottom color, default: rgba(255, 255, 255, 0.2)', 'archi'),
                'default'  => array(
                    'color' => '#ffffff',
                    'alpha' => '0.2'
                ),
            ),  
            array(
                'id' => 'info_list_text',
                'type' => 'editor',
                'title' => __('Topbar info text.', 'archi'),
                'subtitle' => __('Add topbar info html text.', 'archi'),
                'default' => '',
            ),                              
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-qrcode',
        'title' => __('Header Settings', 'archi'),
        'fields' => array(
            array(
                'id'       => 'header-wideboxed',
                'type'     => 'switch', 
                'title'    => __('Header Wide (FullWidth) On?', 'archi'),
                'subtitle' => __('Look, it\'s off!', 'archi'),
                'default'  => false,
            ),  
            array(
                'id' => 'header_position',
                'type' => 'select',
                'title' => __('Header Position', 'archi'),
                'subtitle' => __('Header position use for Header layout with Header Normal.', 'archi'),
                'desc' => __('Header position : select header on top page or header on bottom page.', 'archi'),
                'options'  => array(
                    'ontop_page' => 'Header on top',                    
                    'onbottom_page' => 'Header on bottom',                                                                 
                ),
                'default' => 'ontop_page',
            ),
            array(
                'id' => 'header_layout',
                'type' => 'select',
                'title' => __('Header Layouts', 'archi'),
                'subtitle' => __('Header layout', 'archi'),
                'desc' => __('Header layout : select header on top page or header on side left.', 'archi'),
                'options'  => array(
                    'htop_page' => 'Header Normal',                    
                    'hleft_side' => 'Side Navigation Dark', 
                    'hleft_side_light' => 'Side Navigation Light',                                                                
                ),
                'default' => 'htop_page',
            ),
            array(
                'id' => 'header_style',
                'type' => 'select',
                'title' => __('Header Style', 'archi'),
                'subtitle' => __('Use with Header Layouts : Header Normal', 'archi'),
                'desc' => __('Select header style : Dark or Light or Overlay or Transparent.', 'archi'),
                'options'  => array(
                    'header_dark' => 'Header Dark',
                    'header_light' => 'Header Light', 
                    'header_overlay' => 'Header Overlay', 
                    'header_transparent' => 'Header Transparent'                          
                ),
                'default' => 'header_dark',
            ),  
            array(
                'id'       => 'hideshow_header',
                'type'     => 'switch', 
                'title'    => __('Header hide before scroll to show On?', 'archi'),
                'subtitle' => __('Look, it\'s off! , But just use for Header Position: Header on top and Header Layouts: Header Normal.', 'archi'),
                'default'  => false,
            ),   
            array(
                'id'       => 'desktop-sticky',
                'type'     => 'switch', 
                'title'    => __('Desktop Header Sticky Off?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'default'  => true,
            ), 
            array(
                'id'       => 'mobile-sticky',
                'type'     => 'switch', 
                'title'    => __('Mobile Header Sticky On?', 'archi'),
                'subtitle' => __('Look, it\'s off!', 'archi'),
                'default'  => false,
            ),                 
            array(
                'id' => 'header-background-color',
                'type' => 'color',
                'title' => __('Header Static Background Color', 'archi'),
                'subtitle' => __('Pick the header static background color for the theme (default: rgba(0,0,0,0.5)).', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),                    
            array(
                'id' => 'header-small-background-color',
                'type' => 'color',
                'title' => __('Header Scroll Background Color', 'archi'),
                'subtitle' => __('Pick the header scroll background color for the theme (default: #18191b).', 'archi'),
                'default' => '#18191b',
                'validate' => 'color',
            ),
            array(
                'id' => 'header-small-border-bottom-color',
                'type' => 'color',
                'title' => __('Header Scroll Border Bottom Color', 'archi'),
                'subtitle' => __('Pick the header scroll Border Bottom color for the theme (default: #333333).', 'archi'),
                'default' => '#333333',
                'validate' => 'color',
            ),                    
            array(
                'id' => 'header-text-color',
                'type' => 'color',
                'title' => __('Header Static Text Color', 'archi'),
                'subtitle' => __('Pick the header static text color for the theme (default: #fff).', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),  
            array(
                'id' => 'header-scroll-text-color',
                'type' => 'color',
                'title' => __('Header Scroll Text Color', 'archi'),
                'subtitle' => __('Pick the header scroll text color for the theme (default: #606060).', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),           
            array(
                'id' => 'menu_type',
                'type' => 'select',
                'title' => __('Menu style', 'archi'),
                'subtitle' => __('Icon Menu Style', 'archi'),
                'desc' => __('Menu Style', 'archi'),
                'options'  => array(
                    'dotted' => 'Dotted Separator',
                    'line' => 'Line Separator',
                    'circle' => 'Circle Separator',
                    'square' => 'Square Separator',
                    'plus' => 'Plus Separator',
                    'strip' => 'Strip Separator',
                    'no' => 'No Separator',
                ),
                'default' => 'archi',
            ),                                   
        )
    ) );
    
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Header Mobile Styling', 'archi' ),
        'id'         => 'mobile-styling',
        'subsection' => true,
        'fields'     => array(
            array(
                'id' => 'hm-background-color',
                'type' => 'color',
                'title' => __('Header Mobile Background Color', 'archi'),
                'subtitle' => __('Pick the header background color for the theme.', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),
            array(
                'id' => 'hm-text-color',
                'type' => 'color',
                'title' => __('Header Mobile Text Color', 'archi'),
                'subtitle' => __('Pick the header text color for the theme.', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),
            array(
                'id' => 'hm-border-color',
                'type' => 'color',
                'title' => __('Header Mobile Border Menu Item Color', 'archi'),
                'subtitle' => __('Pick the header mobile border bottom menu item color.', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),
        ),        
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Header Side Navigation', 'archi' ),
        'id'         => 'side-navigation-styling',
        'subsection' => true,
        'fields'     => array(                        
            array(
                'id' => 'header-border-color',
                'type' => 'color',
                'title' => __('Header Border Menu Item Color', 'archi'),
                'subtitle' => __('Use for Header Side Navigation(default: #1b1b1b).', 'archi'),
                'default' => '#1b1b1b',
                'validate' => 'color',
            ),
            array(
                'id' => 'sidenav_contactinfo_extend',
                'type' => 'editor',
                'title' => __('Add your contact info extend on bottom header.', 'archi'),
                'subtitle' => __('Add your contact info html code here.', 'archi'),
                'default' => '',
            ),  
        ),        
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-credit-card',
        'title' => __('Sub-Header Settings', 'archi'),
        'fields' => array( 
            array(
                'id'       => 'subpage-switch',
                'type'     => 'switch', 
                'title'    => __('Sub-Pages Off?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'default'  => true,
            ),     
            array(
                'id'       => 'archicrumb-switch',
                'type'     => 'switch', 
                'title'    => __('Breadcrumb on Sub-Pages Off?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'default'  => true,
            ),       
            array(
                'id' => 'bg_allpage',
                'type' => 'media',
                'url' => true,
                'title' => __('Background Header All Pages', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('Background Header on All Pages', 'archi'),
                'subtitle' => __('Background Header All Pages', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/subheader-1.jpg'),                     
            ),            
            array(
                'id' => 'subpage-textcolor',
                'type' => 'color',
                'title' => __('Sub-Pages Text Color', 'archi'),
                'subtitle' => __('Pick the topbar text color (default: #eceff3).', 'archi'),
                'default' => '#eceff3',
                'validate' => 'color',
            ),   
            array(
                'id' => 'subpage-bgcolor',
                'type' => 'color',
                'title' => __('Sub-Pages Background Color', 'archi'),
                'subtitle' => __('Pick the topbar border bottom color, default: #222', 'archi'),
                'default' => '#222',
                'validate' => 'color',
            ),                                          
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-font',
        'title' => __('Typography', 'archi'),
        'fields' => array(
            array(
                'id' => 'h1-typography',
                'type' => 'typography',
                'output' => array('h1'),
                'title' => __('Heading 1', 'archi'),
                'subtitle' => __('Specify the heading 1 font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ),   
            array(
                'id' => 'h2-typography',
                'type' => 'typography',
                'output' => array('h2'),
                'title' => __('Heading 2', 'archi'),
                'subtitle' => __('Specify the heading 2 font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ), 
            array(
                'id' => 'h3-typography',
                'type' => 'typography',
                'output' => array('h3'),
                'title' => __('Heading 3', 'archi'),
                'subtitle' => __('Specify the heading 3 font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ), 
            array(
                'id' => 'h4-typography',
                'type' => 'typography',
                'output' => array('h4'),
                'title' => __('Heading 4', 'archi'),
                'subtitle' => __('Specify the heading 4 font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ), 
            array(
                'id' => 'h5-typography',
                'type' => 'typography',
                'output' => array('h5'),
                'title' => __('Heading 5', 'archi'),
                'subtitle' => __('Specify the heading 5 font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ), 
            array(
                'id' => 'h6-typography',
                'type' => 'typography',
                'output' => array('h6'),
                'title' => __('Heading 6', 'archi'),
                'subtitle' => __('Specify the heading 6 font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ),    
            array(
                'id' => 'menu-typography',
                'type' => 'typography',
                'output' => array('#mainmenu a, .mainmenu li a'),
                'title' => __('Menu item', 'archi'),
                'subtitle' => __('Specify the Menu item font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => '',
                ),
            ),                                   
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-briefcase',
        'title' => __('Portfolio Settings', 'archi'),
        'fields' => array(
            array(
                'id' => 'ajax_work',
                'type' => 'switch',
                'title' => __('Portfolio Ajax Load content on page?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'desc' => __('Use for Portfolio in home page, Load Ajax Content or Link out single Portfolio.', 'archi'),
                'default'  => true,
            ),    
            array(
                'id' => 'single_navigation',
                'type' => 'select',
                'title' => __('Previous/next post navigation', 'archi'),
                'subtitle' => __('Select navigation style single portfolio.', 'archi'),
                'desc' => __('Default navigation on top single page.', 'archi'),
                'options'  => array(
                    'navontop' => 'Previous/next on Top',
                    'navonbottom' => 'Previous/next on bottom',
                ),
                'default' => 'navontop',
            ),    
            array(
                'id' => 'project_sharing',
                'type' => 'switch',
                'title' => __('Social Share button Off?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'desc' => __('Social Share button on single portfolio', 'archi'),
                'default'  => true,
            ),                  
            array(
                'id' => 'portfolio_title',
                'type' => 'text',
                'title' => __('Title in Portfolio Archive Page ', 'archi'),
                'subtitle' => '',                                              
                'default' => 'Portfolio'
            ),
            array(
                'id' => 'portfolio_show',
                'type' => 'text',
                'title' => __('Show Posts', 'archi'),
                'subtitle' => 'Show number posts in portfolio archive page',                                              
                'default' => '8'
            ),  
            array(
                'id' => 'portfolio_thumbnail',
                'type' => 'media',
                'title' => __('Background Main Portfolio Top Page', 'archi'),
                'subtitle' => __('Background Portfolio Archive and Portfolio Category page.', 'archi'),                        
                'default' => array('url' => get_template_directory_uri().'/images/subheader-1.jpg'),
            ),   
            array(
                'id' => 'portfolio_columns',
                'type' => 'select',
                'title' => __('Portfolio Columns style', 'archi'),
                'subtitle' => __('Select Portfolio Columns style.', 'archi'),
                'desc' => __('Default show portfolio archive page is grid 4 columns.', 'archi'),
                'options'  => array(
                    '6' => 'Columns 6',
                    '5' => 'Columns 5',
                    '4' => 'Columns 4',
                    '3' => 'Columns 3',
                    '2' => 'Columns 2',
                ),
                'default' => '4',
            ),    
            array(
                'id' => 'portfolio_link',
                'type' => 'text',
                'title' => __('Link to list portfolio page', 'archi'),
                'subtitle' => 'Add link to portfolio page',                                              
                'default' => ''
            ),            
         )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-blogger',
        'title' => __('Blog Settings', 'archi'),
        'fields' => array(
            array(
                'id'       => 'blog-layout',
                'type'     => 'image_select',
                'title'    => __( 'Blog Layout', 'archi' ),
                'subtitle' => __( 'Click on image layout to chooise', 'archi' ),
                'desc'     => __( 'Select layout you want use for all your blog page.', 'archi' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => get_template_directory_uri().'/images/theme-options/1c.png'
                    ),                    
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => get_template_directory_uri().'/images/theme-options/2cl.png'
                    ),    
                    '3' => array(
                        'alt' => '2 Column Right',
                        'img' => get_template_directory_uri().'/images/theme-options/2cr.png'
                    ),                                 
                ),
                'default'  => '3'
            ),
            array(
                'id' => 'blog_excerpt',
                'type' => 'text',
                'title' => __('Blog custom excerpt lenght', 'archi'),
                'subtitle' => __('Input Blog custom excerpt lenght', 'archi'),
                'desc' => __('Blog custom excerpt lenght', 'archi'),
                'default' => '30'
            ),
            array(
                'id' => 'the_blog_single',
                'type' => 'text',
                'title' => __('The Blog Single Title', 'archi'),
                'subtitle' => __('Input blog single', 'archi'),
                'desc' => __('The Blog Single Title', 'archi'),
                'default' => 'The Blog Single'
            ),      
            array(
                'id' => 'single_sharing',
                'type' => 'switch',
                'title' => __('Social Share button Off?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'desc' => __('Social Share button on single blog', 'archi'),
                'default'  => true,
            ),  
            array(
                'id'   => 'opt-divide',
                'type' => 'divide'
            ),
            array(
                'id'       => 'post-slide-autoplay',
                'type'     => 'switch', 
                'title'    => __('Slide Auto Play Off?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'default'  => true,
            ), 
            array(
                'id'       => 'post-slide-transition',
                'type'     => 'switch', 
                'title'    => __('Slide Transition Fade On?', 'archi'),
                'subtitle' => __('Look, it\'s off!', 'archi'),
                'default'  => false,
            ), 
            array(
                'id'            => 'post-slide-speed',
                'type'          => 'slider',
                'title'         => __( 'Slide Speed', 'archi' ),
                'subtitle'      => __( 'This slide displays the value as a speed.', 'archi' ),
                'desc'          => __( 'Slider description. Min: 100, max: 3000, step: 200, default value: 200', 'archi' ),
                'default'       => 200,
                'min'           => 0,
                'step'          => 100,
                'max'           => 3000,
                'display_value' => 'label'
            ),   
            array(
                'id'            => 'post-slide-pagination-speed',
                'type'          => 'slider',
                'title'         => __( 'Slide Pagination Speed', 'archi' ),
                'subtitle'      => __( 'This slide displays the value as a pagination speed.', 'archi' ),
                'desc'          => __( 'Slider description. Min: 100, max: 3000, step: 500, default value: 800', 'archi' ),
                'default'       => 800,
                'min'           => 0,
                'step'          => 100,
                'max'           => 3000,
                'display_value' => 'label'
            ), 
            array(
                'id'            => 'post-slide-rewind-speed',
                'type'          => 'slider',
                'title'         => __( 'Slide Rewind Speed', 'archi' ),
                'subtitle'      => __( 'This slide displays the value as a rewind speed.', 'archi' ),
                'desc'          => __( 'Slider description. Min: 100, max: 3000, step: 500, default value: 1000', 'archi' ),
                'default'       => 1000,
                'min'           => 0,
                'step'          => 100,
                'max'           => 3000,
                'display_value' => 'label'
            ),            
         )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-cogs',
        'title' => __('Services Settings', 'archi'),
        'fields' => array(
            array(
                'id'       => 'single-service-layout',
                'type'     => 'image_select',
                'title'    => __( 'Single service option layout', 'archi' ),
                'subtitle' => __( 'Select option: page fullwidth or page left sidebar.', 'archi' ),
                'desc'     => __( 'Select option: page fullwidth or page left sidebar, default: page left sidebar.', 'archi' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    '3' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),
                ),
                'default'  => '2'
            ),  
            array(
                'id' => 'archive_service_title',
                'type' => 'text',
                'title' => __('Archive Service Page Title', 'archi'),
                'subtitle' => __('Input Archive Service Page Title', 'archi'),
                'desc' => __('Archive Service Page Title', 'archi'),
                'default' => 'SERVICES'
            ), 
            array(
                'id' => 'archive_service_read',
                'type' => 'text',
                'title' => __('Archive Service Page Button Text', 'archi'),
                'subtitle' => __('Input Archive Service Page Button Text', 'archi'),
                'desc' => __('Archive Service Page Button Text', 'archi'),
                'default' => 'Read More'
            ), 
            array(
                'id' => 'archive_service_style',
                'type' => 'select',
                'title' => __('Archive Service Page Style', 'archi'),
                'subtitle' => __('Select Archive Service Style', 'archi'),
                'desc' => __('Default archive service grid.', 'archi'),
                'options'  => array(
                    'sgrid' => 'Style Grid',
                    'slist' => 'Style List',
                ),
                'default' => 'sgrid',
            ),                    
         )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-shopping-cart-sign',
        'title' => __('Shop Settings', 'biss'),
        'fields' => array(   
            array(
                'id' => 'shop_thumbnail',
                'type' => 'media',
                'title' => __('Background Main Shop Top Page', 'archi'),
                'subtitle' => __('Background Shop', 'archi'),                        
                'default' => array('url' => get_template_directory_uri().'/images/subheader-1.jpg'),
            ),
            array(
                'id' => 'product_thumbnail',
                'type' => 'media',
                'title' => __('Background Single Product Top Page', 'archi'),
                'subtitle' => __('Background Single Product', 'archi'),                        
                'default' => array('url' => get_template_directory_uri().'/images/subheader-1.jpg'),
            ),            
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-graph',
        'title' => __('404 Settings', 'archi'),
        'fields' => array(
             array(
                'id' => '404_title',
                'type' => 'text',
                'title' => __('404 Title', 'archi'),
                'subtitle' => __('Input 404 Title', 'archi'),
                'desc' => __('404 Title', 'archi'),
                'default' => '404'
            ),                              
            array(
                'id' => '404_content',
                'type' => 'editor',
                'title' => __('404 Content', 'archi'),
                'subtitle' => __('Enter 404 Content', 'archi'),
                'desc' => __('404 Content', 'archi'),
                'default' => 'The page you are looking for no longer exists. Perhaps you can return back to the sites homepage see you can find what you are looking for.'
            ),      
            array(
                'id' => 'back_404',
                'type' => 'text',
                'title' => __('Button Back Home', 'archi'),                        
                'desc' => __('Text Button Go To Home.', 'archi'),
                'subtitle' => __('Button Back Home', 'archi'),
                'default' => 'Back To Home',
            ),                  
         )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-group',
        'title' => __('Social Settings', 'archi'),
        'fields' => array(
            array(
                'id' => 'facebook',
                'type' => 'text',
                'title' => __('Facebook Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://www.facebook.com/',
            ),
            array(
                'id' => 'google',
                'type' => 'text',
                'title' => __('Google+ Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://plus.google.com',
            ),
            array(
                'id' => 'rss',
                'type' => 'text',
                'title' => __('RSS Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '#',
            ),
            array(
                'id' => 'twitter',
                'type' => 'text',
                'title' => __('Twitter Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://twitter.com/',
            ),
            array(
                'id' => 'github',
                'type' => 'text',
                'title' => __('Github Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '#'
            ),
            array(
                'id' => 'youtube',
                'type' => 'text',
                'title' => __('Youtube Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ),
            array(
                'id' => 'linkedin',
                'type' => 'text',
                'title' => __('Linkedin Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ),
            array(
                'id' => 'dribbble',
                'type' => 'text',
                'title' => __('Dribbble Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ),
            array(
                'id' => 'behance',
                'type' => 'text',
                'title' => __('Behance Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),
            array(
                'id' => 'instagram',
                'type' => 'text',
                'title' => __('Instagram Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),
            array(
                'id' => 'skype',
                'type' => 'text',
                'title' => __('Skype Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),  
            array(
                'id' => 'pinterest',
                'type' => 'text',
                'title' => __('pinterest Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ), 
            array(
                'id' => 'vimeo',
                'type' => 'text',
                'title' => __('vimeo Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ), 
            array(
                'id' => 'tumblr',
                'type' => 'text',
                'title' => __('tumblr Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ), 
            array(
                'id' => 'soundcloud',
                'type' => 'text',
                'title' => __('soundcloud Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ), 
            array(
                'id' => 'lastfm',
                'type' => 'text',
                'title' => __('lastfm Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ), 
            array(
                'id' => 'social_extend',
                'type' => 'editor',
                'title' => __('Add your social extend', 'archi'),
                'subtitle' => __('Add your social html code here, if your social network not have on list social above.', 'archi'),
                'default' => '',
            ),             
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-credit-card',
        'title' => __('Footer Settings', 'archi'),
        'fields' => array(
            array(
                'id' => 'footer_layout',
                'type' => 'select',
                'title' => __('Footer Layouts', 'archi'),
                'subtitle' => __('', 'archi'),
                'desc' => __('', 'archi'),
                'options'  => array(
                    'footer1' => 'Footer Layout 1',                    
                    'footer2' => 'Footer Layout 2',                                                                
                ),
                'default' => 'footer1',
            ), 
            array(
                'id' => 'logo_footer',
                'type' => 'media',
                'title' => __('Logo on footer layout 2', 'archi'),
                'subtitle' => __('Add your logo.', 'archi'),                        
                'default' => array('url' => get_template_directory_uri().'/images/logo.png'),
            ), 
            array(
                'id' => 'footer_textcolor',
                'type' => 'color',
                'title' => __('Footer Text Color', 'archi'),
                'subtitle' => __('Pick the Footer Text color for the theme (default: #cccccc).', 'archi'),
                'default' => '#cccccc',
                'validate' => 'color',
            ),
            array(
                'id' => 'footer_bgcolor',
                'type' => 'color',
                'title' => __('Footer Background Color', 'archi'),
                'subtitle' => __('Pick the Footer Background color for the theme (default: #111111).', 'archi'),
                'default' => '#111111',
                'validate' => 'color',
            ),
            array(
                'id' => 'footer_bottom_bgcolor',
                'type' => 'color',
                'title' => __('Footer Bottom Background Color', 'archi'),
                'subtitle' => __('Pick the Footer Bottom Background color for the theme (default: #0b0b0b).', 'archi'),
                'default' => '#0b0b0b',
                'validate' => 'color',
            ),
            array(
                'id' => 'footer_text',
                'type' => 'editor',
                'title' => __('Footer Text', 'archi'),
                'subtitle' => __('Copyright Text', 'archi'),
                'default' => '© Copyright 2017 - Archi Develop by OceanThemes',
            ),                    
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-hourglass',
        'title' => __('Coming Soon Settings', 'archi'),
        'fields' => array(
           array(
                'id' => 'cms_logo',
                'type' => 'media',
                'url' => true,
                'title' => __('Logo', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('Upload your logo.', 'archi'),
                'subtitle' => __('Recommended size: Height: auto and Width: 120px', 'archi'),
                'default' => array('url' => get_template_directory_uri().'/images/logo-border.png'),
            ),                 
           array(
                'id'          => 'cmsoon_date',
                'type'        => 'date',
                'title'       => __('Date Option', 'archi'), 
                'subtitle'    => __('No validation can be done on this field type', 'archi'),
                'desc'        => __('This is the description field, again good for additional info.', 'archi'),
                'placeholder' => 'Click to enter a date',
                'default' => '12/23/2017'
            ),
            array(
                'id' => 'cs_bg',
                'type' => 'media',
                'title' => __('Background Image', 'archi'),
                'subtitle' => __('Background Image', 'archi'),
                'desc' => __('Use For Coming Soon Page', 'archi'),
                'default' => array('url' => get_template_directory_uri().'/images/bg-6.jpg')
            ), 
            array(
                'id' => 'link_video_mp4',
                'type' => 'text',
                'title' => __('Link Video MP4', 'archi'),
                'subtitle' => __('Link Video MP4', 'archi'),
                'desc' => __('Use For Coming Soon Video', 'archi'),
                'default' => 'http://www.themenesia.com/video/sample.mp4'
            ),
            array(
                'id' => 'link_video_webm',
                'type' => 'text',
                'title' => __('Link Video Webm', 'archi'),
                'subtitle' => __('Link Video Webm', 'archi'),
                'desc' => __('Use For Coming Soon Video', 'archi'),
                'default' => 'http://www.themenesia.com/video/sample.webm'
            ),
            array(
                'id' => 'cs_title',
                'type' => 'text',
                'title' => __('Coming Soon Title', 'archi'),
                'subtitle' => __('Coming Soon Title', 'archi'),
                'desc' => __('Coming Soon Title', 'archi'),
                'default' => 'Our Website Coming Soon'
            ),                              
            array(
                'id' => 'cs_stitle',
                'type' => 'text',
                'title' => __('Coming Soon Subtitle', 'archi'),
                'subtitle' => __('Coming Soon Subtitle', 'archi'),
                'desc' => __('Coming Soon Subtitle', 'archi'),
                'default' => 'Time left until launching',
            ),                                     
        )    
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-hourglass',
        'title' => __('Hide Content Coming Soon Settings', 'archi'),
        'fields' => array(            
            array(
                'id' => 'hc_title',
                'type' => 'text',
                'title' => __('Coming Soon Title', 'archi'),
                'subtitle' => __('Coming Soon Title', 'archi'),
                'desc' => __('Coming Soon Title', 'archi'),
                'default' => 'Award Winning Interior Design'
            ),                              
            array(
                'id' => 'hc_stitle',
                'type' => 'editor',
                'title' => __('Coming Soon Subtitle', 'archi'),
                'subtitle' => __('Coming Soon Subtitle', 'archi'),
                'desc' => __('Coming Soon Subtitle', 'archi'),
                'default' => '',
            ),  
            array(
                'id' => 'hc_contact',
                'type' => 'editor',
                'title' => __('Contact Form Shortcode', 'archi'),
                'subtitle' => __('Contact Form Shortcode', 'archi'),
                'desc' => __('Ex: [contact-form-7 id="283" title="Contact form 1"]', 'archi'),
                'default' => '',
            ),                                   
        )    
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-website',
        'title' => __('Styling Options', 'archi'),
        'fields' => array(
            array(
                'id' => 'version_type',
                'type' => 'select',
                'title' => __('Theme Version', 'archi'),
                'subtitle' => __('Dark or White', 'archi'),
                'desc' => __('Dark or White', 'archi'),
                'options'  => array(
                    'dark' => 'Dark Version',
                    'light' => 'Light Version',
                ),
                'default' => 'dark',
            ),                    
            array(
                'id' => 'main-color',
                'type' => 'color',
                'title' => __('Theme Main Color', 'archi'),
                'subtitle' => __('Pick the main color for the theme (default: #FAB207).', 'archi'),
                'default' => '#FAB207',
                'validate' => 'color',
            ),              
            array(
                'id' => 'body-font2',
                'type' => 'typography',
                'output' => array('body'),
                'title' => __('Body Font', 'archi'),
                'subtitle' => __('Specify the body font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color' => '',
                    'font-size' => '',
                    'line-height' => '',
                    'font-family' => '',
                    'font-weight' => ''
                ),
            ),
             array(
                'id' => 'custom-css',
                'type' => 'ace_editor',
                'title' => __('CSS Code', 'archi'),
                'subtitle' => __('Paste your CSS code here.', 'archi'),
                'mode' => 'css',
                'theme' => 'monokai',
                'desc' => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default' => "#header{\nmargin: 0 auto;\n}"
            ),
        )
    ) );    

    /*
     * <--- END SECTIONS
     */
