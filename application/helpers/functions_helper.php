<?php

function get_header() {
    $cic    = new CI_Controller();
    $header = $cic->load->view( 'partials/header' );
}

function asset_url( $file ) {
    echo base_url( 'assets/' .$file );
}

function get_item_menu() {
    return array(
        'dashboard',
        'user',
        'setting',
    );
}


?>