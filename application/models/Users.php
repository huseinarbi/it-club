<?php

class Users extends CI_Model {

    public function user_render( $method, $id ) {

        switch( $method ) {
            case 'add' :
            case 'update' :
                $this->update( $method, $id );
                break;
            case 'delete' :
                echo 'delete';
                break;
            default :
                $this->view();
        }

    }

    public function update( $method, $id ) {

        if ( $id && $method == 'update' ) {
            echo 'update'.$id;
        } else {
            echo 'add';
        }

    }

    public function view() {
        echo 'view';
    }

}