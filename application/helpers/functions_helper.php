<?php

/**
* Function untuk memanggil potongan view
* Misal: view untuk <head></head>
*/    
function get_header() {
    $cic    = new CI_Controller();
    $header = $cic->load->view( 'partials/header' );
    
}

function get_footer() {
    $cic    = new CI_Controller();
    $footer = $cic->load->view( 'partials/footer' );
}

/**
* Function untuk setting assets_url
*/    
function asset_url( $file ) {
    echo base_url( 'assets/' .$file );
}

/**
 * to get page uri
 */
function is_page( $page ) {

    if ( current( explode( '/', uri_string() ) ) == $page ) {
        return true;
    }

    return false;
}

/**
* Function untuk set data (list menu)
*/    
function get_item_menu($title) {
    // return array(
    //     'dashboard',
    //     'user',
    //     'setting',
    // );
    $data = array(
            'menu' => array(
                array(
                    'url'   => 'admin/dashboard/',
                    'label' => 'Dashboard'
                ),
                array(
                    'url'   => 'admin/user/',
                    'label' => 'Menu User'
                ),
            ),
            'title' => '$title'
                
        );
    return $data;
}

?>