<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */


     
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "avs";

    // This line is only for altering the demo. Can be easily removed.
    //$opt_name = apply_filters( 'avs_singlepage/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

  


    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    

    $args = array(
    'opt_name' => $opt_name,
    'display_name' => $theme->get('Name') ,
    'display_version' => $theme->get('Version') ,
    'menu_type' => 'submenu',
    'allow_sub_menu' => true,
    'menu_title' => esc_html__('Theme Options', 'avssinglepage'),
    'page_title'           => esc_html__('Theme Options', 'avssinglepage') ,
    'google_api_key' => '',
    'google_update_weekly' => false,
    'async_typography' => true,
    'admin_bar' => true,
    'admin_bar_icon' => '',
    'admin_bar_priority' => 50,
    'global_variable' => $opt_name,
    'dev_mode' => false,
    'update_notice' => false,
    'customizer' => true,
    'page_priority' => null,
    'page_parent' => 'avs',
    'page_slug' => 'avs',
   'page_permissions' => 'manage_options',
    'menu_icon' => '',
    'last_tab' => '',
  //  'page_icon' => 'icon-themes',
    'page_slug' => 'avs_options',
    'save_defaults' => true,
    'default_show' => false,
    'default_mark' => '',
    'show_import_export' => true
);

   

    
    Redux::setArgs( $opt_name, $args );


    //Layout Starts

    Redux::setSection($opt_name, array(
        'title' => esc_html__('Layout', 'avssinglepage') ,
        'id' => esc_html__('avs_layout', ' avssinglepage') ,
        'icon' => 'el-icon-website',
        'fields' => array(

            array(
                'id'           => 'layout_type',
                'type'         => 'button_set',
                'title'        => esc_html__( 'Layout', 'avssinglepage' ),
                'options'      => array(
                    'boxed'  => esc_html__( 'Boxed', 'avssinglepage' ),
                    'wide'  => esc_html__( 'Wide', 'avssinglepage' ),
                ),
                'default'      => 'boxed',
            ),
    
        )
    ));

    //Layout Ends


    //Header Starts

    Redux::setSection($opt_name, array(
        'title' => esc_html__('Header', 'avssinglepage') ,
        'id' => esc_html__('avs_header', ' avssinglepage') ,
     //   'icon' => 'icon-name',
        'fields' => array()
    ));
    

    //Header Ends



    //Logo Starts

    Redux::setSection($opt_name, array(
        'title' => esc_html__('Logo', 'avssinglepage') ,
        'id' => esc_html__('avs_logo', ' avssinglepage') ,
      'icon' => 'el-icon-plus-sign',
      'fields' => array(

        array(
            'id'           => 'logo_alignment',
            'type'         => 'button_set',
            'title'        => esc_html__( 'Logo Alignment', 'avssinglepage' ),
            'subtitle'     => esc_html__( 'Controls the logo alignment.', 'avssinglepage' ),
            'options'      => array(
                'left'  => esc_html__( 'Left', 'avssinglepage' ),
                'center'  => esc_html__( 'Center', 'avssinglepage' ),
                'right'  => esc_html__( 'Right', 'avssinglepage' ),
            ),
            'default'      => 'left',
        ),

        array(            
            'id'             => 'logo_margin',
                'type'           => 'spacing',
                'output'         => array('.site-header'),
                
                'units_extended' => 'true',
                'mode'           => 'margin',
                'title'          => __('Logo Margin', 'avssinglepage'),
                'subtitle'       => __('Allow your users to choose the spacing or margin they want.', 'avssinglepage'),
                'desc'           => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'avssinglepage'),
                'default'            => array(
                    'margin-top'     => '1px', 
                    'margin-right'   => '2px', 
                    'margin-bottom'  => '3px', 
                    'margin-left'    => '4px',
                    
                ),
        ),

        array(
            'id'       => 'logo',
            'type'     => 'media',
            'title'    => esc_html__('Logo', 'avssinglepage'),
             'default' => array(
                'url'=> get_template_directory_uri().'/dist/asset/images/canvasone.png'
            )
        ),
        array(
            'id'       => 'logo_maxh',
            'type'     => 'dimensions',
            'title'    => esc_html__('Logo Max height', 'avssinglepage'),
            'subtitle' => esc_html__('Set maximum height for your logo, just in case the logo is too large.', 'raworganic'),
            'width'    => false,
            'unit'     => 'px'
        ),
        array(
            'id'       => 'logo_maxh_sm',
            'type'     => 'dimensions',
            'title'    => esc_html__('Logo Max height Tablet & Mobile', 'raworganic'),
            'width'    => false,
            'unit'     => 'px'
        ),
    


    )
    ));
    


    //Logo Ends

    