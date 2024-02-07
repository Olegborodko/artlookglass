<?php

add_action( 'rest_api_init', 'send_message_rest' );

function send_message_rest(){
    register_rest_route(
        'wp/v2',
        '/send_message_rest',
        array(
            'methods' => 'POST',
            'callback' => 'rest_api_send_message',
            'permission_callback' => '__return_true',
        ),
    );
}

function rest_api_send_message( WP_REST_Request $request ) {

    $params = $request->get_params();

    $admin_email = get_option( 'admin_email' );
    $to =  $admin_email;
    $subject = 'ArtLookGlass';

    $body = '<div>';
    foreach ($params as $key => $param) {
        if ( in_array($key, ['check', 'file'])) continue;
        $body .= "<div> <b>" . $key . ":</b> " . $param . " </div>";
    }
    $body .= '</div>';

    $headers = array('Content-Type: text/html; charset=UTF-8');

    $headers[] = 'From: ArtLookGlass Form <info@artlookglass.com>';

    //$headers[] = 'Cc: John Q Codex <jqc@wordpress.org>';
    //$headers[] = 'Cc: iluvwp@wordpress.org'; // note you can just use a simple email address

    wp_mail( $to, $subject, $body, $headers );


   wp_send_json( [
       'text' => 'Your message has been sent!',
   ] );

    die(0);
}