<?php


function papanek_fse_styles() {

    wp_enqueue_style(

        'fse-style',

        get_stylesheet_uri(),

        array(),

        wp_get_theme()->get( 'Version' )

    );

}

add_action( 'wp_enqueue_scripts', 'papanek_fse_styles' );


if ( ! function_exists( 'papanek_fse_setup' ) ) {

    function papanek_fse_setup() {

        add_theme_support( 'wp-block-styles' );

        add_editor_style( 'style.css' );

    }

}

add_action( 'after_setup_theme', 'papanek_fse_setup' );


remove_theme_support( 'core-block-patterns' );


add_filter( 'should_load_remote_block_patterns', '__return_false' );


function papanek_register_block_styles() {

    /* BLOCK: COVER */

    register_block_style( 'core/cover', array(

        'name'  	=> 'papanek-rounded-borders',

        'label' 	=> esc_html__( 'Rounded Borders', 'papanek' ),

    ) );

}

add_action( 'init', 'papanek_register_block_styles' );


function papanek_register_pattern_categories() {

    if ( function_exists( 'register_block_pattern_category' ) ) {

        register_block_pattern_category(

            'how-we-work',

            array(

                'label' => __( 'How We Work', 'papanek' ),

                'description' => __( 'Patterns about how we work', 'papanek' ),

            )

        );

        register_block_pattern_category(

            'full-page',

            array(

                'label' => __( 'Full Page', 'papanek' ),

                'description' => __( 'Full page patterns', 'papanek' ),

            )

        );

    }

}

add_action( 'init', 'papanek_register_pattern_categories' );



function papanek_setup_notice() {
    $notice_option_name = 'papanek_setup_notice_dismissed';
    $is_dismissed = get_option( $notice_option_name );

    if ( ! $is_dismissed ) {
        $image_url = '/wp-content/themes/papanek/assets/img/me.png';
        $notice_text = '<img src="' . $image_url . '" style="max-width: 100%;" /><div class="papanek-notice-text"><h3>Hi, I\'m Roman Fink, a developer of the Papanek theme. I hope this theme helps you build your great website 😉</h3>
        👉 If you enjoy using this theme, please take a moment to rate it on the WordPress repository: <a href="https://wordpress.org/support/theme/papanek/reviews/#new-post">Rate theme.</a><br>
        ☕ Buy me a coffee: <a href="https://ko-fi.com/romanfink">https://ko-fi.com/romanfink</a><br>
        💬 If you need any help with your website, feel free to email me at <i>finkromanspb@gmail.com</i><br>
        🔗 Visit my website: <a href="https://romanfink.com">https://romanfink.com</a></div>';
        echo '<div id="papanek-notice" class="notice notice-info is-dismissible">' . wp_kses_post( $notice_text ) . '</div>';
    }
}
add_action( 'admin_notices', 'papanek_setup_notice' );


function papanek_notice_script() {
    if ( ! wp_script_is( 'jquery', 'done' ) ) {
        wp_enqueue_script( 'jquery' );
    }

    wp_enqueue_script( 'papanek-notice-script', get_template_directory_uri() . '/assets/js/admin-notice.js', array( 'jquery' ), '', true );
}
add_action( 'admin_enqueue_scripts', 'papanek_notice_script' );


function enqueue_custom_admin_styles() {
    if ( ! $is_dismissed ) {
        wp_enqueue_style( 'papanek-admin-notice', get_template_directory_uri() . '/assets/css/admin-notice.css' );
    }
}
add_action( 'admin_enqueue_scripts', 'enqueue_custom_admin_styles' );


function papanek_dismiss_notice() {
    update_option( 'papanek_setup_notice_dismissed', true );
    wp_die();
}
add_action( 'wp_ajax_papanek_dismiss_notice', 'papanek_dismiss_notice' );