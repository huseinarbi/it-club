<?php


function get_database_data( $table, $args ) {
    $cic        = new CI_Controller();
    $defaults   = array(
        'select'    => '',
        'where'     => array()
    );

    $args   = array_merge( $defaults, $args );

    $query  = 'SELECT ';

    if ( ! empty( $args['select'] ) ) {
        $query .= $args['select'];
    } else {
        $query .= '*';
    }

    $query .= ' FROM '.$table;
    
    if ( ! empty( $args['where'] ) ) {

        $where  = $args['where'];
        $_where = [];

        if ( is_array( $where ) ) {
            foreach ( $where as $field => $value ) {
                $_where[] = $field. '=' . "'" . $value . "'";
            }
        }

        $query .= ' WHERE ' . implode( ' AND ', $_where );

    }

    // get data di database
    $get = $cic->db->query($query)->result_array();

    // mengembalikkan nilai
    return $get;
}

function add_database_data( $table, $data ) {
    $cic    = new CI_Controller();
    $result = $cic->db->insert_string( $table, $data );

    if ( $result ) {
        return true;
    }

    return false;
}

function update_database_data( $table, $data, $where ) {
    $cic    = new CI_Controller();
    $result = $cic->db->update_string( $table, $data, $where );

    if ( $result ) {
        return true;
    }

    return false;
}

function delete_database_data( $table, $args ) {
    $cic    = new CI_Controller();
    $result = $cic->db->delete( $table, $args );

    if ( $result ) {
        return true;
    }

    return false;

}


?>