<?php

/*
@package avs-singlepage

=========================
       ADMIN PAGE
=========================

*/


function avssinglepage_add_admin_page()
{
    //Generate Admin Main page
    add_menu_page( 'Avs Theme Options', 'AVS', 'manage_options', 'avs', 'avssinglepage_create_admin_page', get_template_directory_uri(  ).'/dist/asset/images/iconfinder_Avengers.png', 1 );
   
    //Generate Sub Menu page
    add_submenu_page( 'avs', 'Avs Theme Options', 'Welcome', 'manage_options', 'avs', 'avssinglepage_create_admin_page' );
  //  add_submenu_page( 'avs', 'Avs Theme Options', 'Theme Options', 'manage_options', 'avs_options', 'avssinglepage_theme_option_page' );
 
}

add_action( 'admin_menu', 'avssinglepage_add_admin_page' );
//add_action( 'admin_menu', 'avssinglepage_add_theme_option_page' );
avssinglepage_theme_option_page();

function avssinglepage_create_admin_page()
{ ?>

    <div class="row" style="margin-top:30px;margin-left:30px">
            <div class="col-md-9 avs-admin">
                
                    <h1>Welcome to AVS!</h1>
                <p>
                    AVS is now installed and ready to use! Get ready to build something beautiful.
                Please register your purchase to get automatic theme updates, import Avada demos and install premium plugins. 
                Check out the Support tab to learn how to receive product support. We hope you enjoy it!
                </p>
                </div>
                
                <div class="col-md-3">
                    <div class="avs-logo">
                        <span class="avs-welcome-version"><?php 
    $theme = wp_get_theme( );

    echo 'Version '.$theme->version; ?></span>
                </div>
</div>
            
    </div>
    
            
        

    


<?php 
}


function avssinglepage_theme_option_page()
{
   
    $theme = wp_get_theme( );


    if (!class_exists('ReduxFramework'))
    {
     
    require_once ('ReduxCore/framework.php');


    }
 
if (!isset($redux_demo))
    {
  
    require_once ('admin/config.php');


 
}

    

   
  
}


   

?>