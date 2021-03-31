<?php
class M_users extends CI_Model {

    /** 
    * Gerbang untuk mengelola routing user
    * $method => "add/update/delete/view"
    */
    public function user_render( $method , $id ) {

        switch( $method ) {
            case 'add' :
            case 'update' :
                $this->update_data( $method, $id );
                break;
            case 'delete' :
                echo 'delete';
                break;
            default :
                $this->view();
        }

    }

    /**
    * Function untuk menambah data user
    */
    public function update_data( $method, $id ) {

        if ( $id && $method == 'update' ) {
            echo 'update'.$id;
        } else {
            echo 'add';
        }

    }

    /**
    * Function untuk menampilkan data user
    */
    public function view() {
        echo 'view';
    }

}