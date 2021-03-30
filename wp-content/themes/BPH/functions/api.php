<?php

function permit_public_route () {
    return true;
}


function add_routes () {
    // add endpoints here via register_rest_route
}


add_action('rest_api_init', 'add_routes');
