<?php
class Users extends CI_Model {

    /** 
    * Gerbang untuk mengelola table user
    * $method => "create/read/update/delete"
    */
    public function user_render( $method=null, $id=null, $where=null ) {

        switch( $method ) {
            case 'create' :

                break;
            case 'read' :
                return $this->read_data($where);
                break;
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
    * Function untuk mengambil/membaca data
    */
    public function read_data($where = null){
        // set data
        $email = $where['email'];
        $password = md5( $where['password'] );
        
        // set query
        $query = "SELECT id, username, email, password FROM users 
            WHERE email = '$email' AND password = '$password'; ";

        // get data di database
        $get = $this->db->query($query)->result_array();

        // mengembalikkan nilai
        return $get;
    }

    /**
    * Function untuk mengubah data
    */
    public function update_data( $method, $id ) {

        if ( $id && $method == 'update' ) {
            echo 'update'.$id;
        } else {
            echo 'add';
        }

    }

    /**
    * Function untuk menampilkan data
    */
    public function view() {
        echo 'view';
    }

}