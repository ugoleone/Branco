<?php

    // Add CSS
    function ugo_register_styles(){
        $version = wp_get_theme()->get('version');
        wp_enqueue_style('ugo-main-style', get_template_directory_uri()."/style.css", array(), $version, 'all');
    }
    add_action('wp_enqueue_scripts', 'ugo_register_styles');

    // Add JS
    function ugo_register_scripts(){
        $version = wp_get_theme()->get('version');
        wp_enqueue_script('ugo-main-script', get_template_directory_uri()."/assets/js/index.js", array(), $version, true );

    }
    add_action('wp_enqueue_scripts', 'ugo_register_scripts');
    
    // Theme Options
    function ugo_theme_support(){    
        add_theme_support('title-tag');
        //add_theme_support('menus');
        //add_theme_support( 'post-thumbnails' );
    }
    add_action('after_setup_theme', 'ugo_theme_support');

    // File uppload options
    @ini_set( 'upload_max_size' , '360M' );
    @ini_set( 'post_max_size', '360M');
    @ini_set( 'max_execution_time', '800' );

    //HTTP headers
    function replace_wp_headers($headers) {
        $headers['Strict-Transport-Security'] = 'max-age=31536000; includeSubDomains';
        //$headers['Content-Security-Policy-Report-Only'] = "  default-src 'self' ; style-src-elem https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css https://fonts.googleapis.com/css2 ; script-src 'self'";
        $headers['Content-Security-Policy'] = "default-src https: http: 'unsafe-inline' 'unsafe-eval'";
        $headers['X-Frame-Options'] = "SAMEORIGIN";
        $headers['X-Content-Type-Options'] = "nosniff";
        $headers['Referrer-Policy'] = "no-referrer-when-downgrade";
        $headers['Permissions-Policy'] = "microphone=()";
        $headers['server'] = "-";
        $headers['x-powered-by'] = "-";

        return $headers;
    }
    add_filter('wp_headers', replace_wp_headers);

    // Allow SVG
    add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

            global $wp_version;
            if ( $wp_version !== '4.7.1' ) {
            return $data;
            }
        
            $filetype = wp_check_filetype( $filename, $mimes );
        
            return [
                'ext'             => $filetype['ext'],
                'type'            => $filetype['type'],
                'proper_filename' => $data['proper_filename']
            ];
        
        }, 10, 4 );
    
    function cc_mime_types( $mimes ){
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
    add_filter( 'upload_mimes', 'cc_mime_types' );

    function fix_svg() {
        echo '<style type="text/css">
            .attachment-266x266, .thumbnail img {
                width: 100% !important;
                height: auto !important;
            }
            </style>';
    }
    add_action( 'admin_head', 'fix_svg' );

?>