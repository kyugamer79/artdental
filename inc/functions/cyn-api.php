<?php

add_action('rest_api_init', function () {
    register_rest_route(
        'cyn-api/v1',
        '/search',
        [
            'methods' => 'POST',
            'callback' => 'cyn_handle_search_posts',
            'permission_callback' => '__return_true'

        ]
    );

    register_rest_route(
        'cyn-api/v1',
        '/form',
        [
            'methods' => 'POST',
            'callback' => 'cyn_handle_contact_form',
            'permission_callback' => '__return_true'

        ]
    );
    register_rest_route(
        'cyn-api/v1',
        '/reserve_pop_up',
        [
            'methods' => 'POST',
            'callback' => 'cyn_handle_reserve_popUp_form',
            'permission_callback' => '__return_true'

        ]
    );
});

function cyn_handle_search_posts(WP_REST_Request $request)
{

    $post_type = sanitize_text_field($request->get_param('postType'));
    $search_input = sanitize_text_field($request->get_param('s'));


    if ($post_type === 'all') {
        $query = new WP_Query([
            's' => $search_input,
        ]);
    } else {
        $query = new WP_Query([
            'post_type' => $post_type,
            's' => $search_input,
        ]);
    }


    $html = cyn_render_by_query($query, 'search-result');



    $res = new WP_REST_Response([
        'found_posts' => $query->found_posts,
        'html' => $html
    ]);
    return $res;
}



function cyn_handle_contact_form(WP_REST_Request $request)
{


    $body_params = $request->get_body_params();

    $name = sanitize_text_field($body_params['name']);
    $email = sanitize_email($body_params['email']);
    $message = sanitize_textarea_field($body_params['message']);

    $post_id = wp_insert_post([
        'post_type' => 'form',
        'post_title' => $name,
        'post_content' => $message,
        'meta_input' => [
            'email' => $email,
        ]
    ]);


    if ($post_id === 0 || is_wp_error($post_id)) {
        $response = new WP_REST_Response(['post_created' => false], 500);
    } else {
        $response = new WP_REST_Response(['post_created' => true, 'post_id' => $post_id], 200);
    }

    return $response;
}


function cyn_render_by_query($query, $post_type, array $args = [])
{
    ob_start();
    if ($query->have_posts()) {
        while ($query->have_posts()) :
            $query->the_post();
            cyn_get_card($post_type, $args);
        endwhile;
    } else {
        get_template_part('/templates/archive/not-found');
    }
    wp_reset_postdata();
    return ob_get_clean();
}

// copy by fateme 
function cyn_handle_reserve_popUp_form(WP_REST_Request $request)
{

    $body_params = $request->get_body_params();

    $name = sanitize_text_field($body_params['name']);
    $gender = sanitize_text_field($body_params['gender']);
    $services = sanitize_text_field($body_params['services']);
    // $reservation_time = sanitize_text_field($body_params['reservation_time']);
    $phone_number = sanitize_text_field($body_params['phone_number']);
    $email = sanitize_email($body_params['email']);
    $message = sanitize_textarea_field($body_params['message']);

    $post_id = wp_insert_post([
        'post_type' => 'form',
        'post_title' => $name,
        'post_content' => $phone_number,
        'meta_input' => [
            'email' => $email,
            'gender' => $gender,
            'services' => $services,
            // 'reservation_time' => $reservation_time,
            'message' =>  $message,
        ]
    ]);


    if ($post_id === 0 || is_wp_error($post_id)) {
        $response = new WP_REST_Response(['post_created' => false], 500);
    } else {
        $response = new WP_REST_Response(['post_created' => true, 'post_id' => $post_id], 200);
    }

    return $response;
}
