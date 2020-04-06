<?php

    // theme support

    function adv_theme_support(){
        //featured Image
        add_theme_support( 'post-thumbnails' );
        //nav menus
        register_nav_menus( array(
            'primary' => __('primary menu'),
            'footer'  => __('footer menu'),
        ));
        // post formats
        add_theme_support('post-formats', array('aside', 'gallary', 'link', 'video', 'audio', 'chat'));
    };

    add_action( 'after_setup_theme', 'adv_theme_support' );

    // change exerpt length

    function adv_excerpit_length(){
        return 25;
    }

    add_filter( 'excerpt_length', 'adv_excerpit_length' );


    // register widget

    function adv_init_widget(){
        register_sidebar( array(
            'name'          => 'sidebar',
            'id'            => 'sidebar',
            'description'   => '',
            'before_widget' => '<div class="block side-widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
    }
    add_action( 'widgets_init', 'adv_init_widget' );