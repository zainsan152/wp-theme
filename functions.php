<?php

function zain_solutions_scripts()
{

//stylesheets
wp_enqueue_style('main_style' , get_stylesheet_uri()); //style.css
wp_enqueue_style('style_file' , get_template_directory_uri().'/css/open-iconic-bootstrap.min.css');
wp_enqueue_style('animate_css' , get_template_directory_uri().'/css/animate.css');
wp_enqueue_style('carsoul_css' ,get_template_directory_uri(). '/css/owl.carousel.min.css');
wp_enqueue_style('owl_css' , get_template_directory_uri().'/css/owl.theme.default.min.css');
wp_enqueue_style('magnific_css' , get_template_directory_uri().'/css/magnific-popup.css');
wp_enqueue_style('aos_css' , get_template_directory_uri().'/css/aos.css');
wp_enqueue_style('ions_css' ,get_template_directory_uri().'/css/ionicons.min.css');
wp_enqueue_style('date_css' ,get_template_directory_uri().'/css/bootstrap-datepicker.css');
wp_enqueue_style('time_css' , get_template_directory_uri().'/css/jquery.timepicker.css');
wp_enqueue_style('falt_css' ,get_template_directory_uri().'/css/flaticon.css');
wp_enqueue_style('icomon_css' ,get_template_directory_uri().'/css/icomoon.css');
wp_enqueue_style('style_css' , get_template_directory_uri().'/css/style.css');
//javascripts

wp_enqueue_script('jquery.min.js' , get_template_directory_uri().'/js/jquery.min.js' ,array() ,'1.1' , true);
wp_enqueue_script('jquery-migrate-3.0.1.min.js' , get_template_directory_uri().'/js/jquery-migrate-3.0.1.min.js' ,array() ,'1.1' , true);
wp_enqueue_script('js/popper.min.js' , get_template_directory_uri().'/js/popper.min.js' ,array() ,'1.1' , true);
wp_enqueue_script('/js/bootstrap.min.js' , get_template_directory_uri().'/js/bootstrap.min.js' ,array() ,'1.1' , true);
wp_enqueue_script('/js/jquery.easing.1.3.js' , get_template_directory_uri().'/js/jquery.easing.1.3.js' ,array() ,'1.1' , true);
wp_enqueue_script('/js/jquery.waypoints.min.js' , get_template_directory_uri().'/js/jquery.waypoints.min.js' ,array() ,'1.1' , true);
wp_enqueue_script('/js/jquery.stellar.min.js' , get_template_directory_uri().'/js/jquery.stellar.min.js' ,array() ,'1.1' , true);
wp_enqueue_script('/js/owl.carousel.min.js' , get_template_directory_uri().'/js/owl.carousel.min.js' ,array() ,'1.1' , true);
wp_enqueue_script('/js/jquery.magnific-popup.min.js' , get_template_directory_uri().'/js/jquery.magnific-popup.min.js' ,array() ,'1.1' , true);
wp_enqueue_script('/js/aos.js' , get_template_directory_uri().'/js/aos.js' ,array() ,'1.1' , true);
wp_enqueue_script('/js/jquery.animateNumber.min.js' , get_template_directory_uri().'/js/jquery.animateNumber.min.js' ,array() ,'1.1' , true);
wp_enqueue_script('/js/bootstrap-datepicker.js' , get_template_directory_uri().'/js/bootstrap-datepicker.js' ,array() ,'1.1' , true);
wp_enqueue_script('/js/jquery.timepicker.min.js' , get_template_directory_uri().'/js/jquery.timepicker.min.js' ,array() ,'1.1' , true);
wp_enqueue_script('/js/scrollax.min.js' , get_template_directory_uri().'/js/scrollax.min.js' ,array() ,'1.1' , true);
wp_enqueue_script('/js/google-map.js' , get_template_directory_uri().'/js/google-map.js' ,array() ,'1.1' , true);
wp_enqueue_script('/js/main.js' , get_template_directory_uri().'/js/main.js' ,array() ,'1.1' , true);

}

// attach with action hooks

add_action("wp_enqueue_scripts" , "zain_solutions_scripts");


function register_zain_theme()
{
    //menu register code
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
            'footer-menu' => __('Footer Menu')
        )
        );
}

// attach with action hooks

add_action("init" , "register_zain_theme");

function themename_custom_logo_setup(){
    $defaults = array(
        'height' => 50,
        'width' => 177,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title' , 'site-description'),
    );
    add_theme_support('custom-logo' , $defaults);
}

add_action('after_setup_theme' , 'themename_custom_logo_setup');


//for regsiter custom post types

function register_my_projects()
{

    register_post_type('custom_projects', array(  //post type in db
        'labels' => array(
            'name' => __('Our Projects'), //name show on admin panel
            'singular_name' => __('custom_projects')   
        ),
        'public' => true,  //post is public
        "show_in_nav_menus" => true,  //showing in menu
        'has_archive' => false,
        'supports' => array('title','editor','excerpt', 'author', 'comments', 'revisions', 'custom-fields') //addtional features
            )
    );

}

add_action("init" , "register_my_projects");

function zain_register_sidebar()
{
     register_sidebar(array(
        'name' => __('Primary Sidebar 1', 'theme_name'),   //register in appreance/widgets
        'id' => 'sidebar-1', //for drag and drop/ show on front end from this id
        'before_widget' => 'aside id="%1$s" class="widget %2$s"',
        'after_widget' => '/aside',
        'before_title' => 'h1 class="widget-title"',
        'after_title' => '/h1',
    ));

     //Primary Sidebar 2 will created
 register_sidebar(array(
        'name' => __('Primary Sidebar 2', 'theme_name'),
        'id' => 'sidebar-2',
        'before_widget' => 'aside id="%1$s" class="widget %2$s"',
        'after_widget' => '/aside',
        'before_title' => 'h1 class="widget-title"',
        'after_title' => '/h1',
    ));
}

add_action("widgets_init" , "zain_register_sidebar");



?>