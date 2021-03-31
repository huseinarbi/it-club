<?php

class M_login extends CI_Model {
    
    public function checking_user_login( $email, $password ) {

        $where      = array(
            'email'     => $email,
            'password'  => md5( $password )
        );
  
        $user = get_database_data( 'users', array( 'where' => $where ) );

        if ( $user ) {
            return true;
        }

        return false;

    }
}