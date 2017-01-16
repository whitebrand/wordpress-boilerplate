<?php

add_action('wp-routes/register_routes', function() {

    respond( '/?', function($request, $response) {
        echo 'home';
    });

});
