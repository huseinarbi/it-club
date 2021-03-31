<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Pelatihan IT CLUB HIMANIFO 2021
* TEMA: WEB PROGRAMMING
* PENGAJAR: Aji, Dwi, Ryan dan Husein
* SITUS: 
* https://himanifo.my.id/
* https://himanifo.my.id/category/programming/
*/

/**
* Penamaan File:
* 1. Diawali huruf Kapital
* 2. Diawali huruf alfabet
* 3. Hanya dibolehkan huruf alfabet (A-Za-z), 
* 	numerik (0-9), dan garis bawah (_)
*
* Penamaan Class:
* 1. Nama class == Nama file
*
*/
class Login extends CI_Controller {

    public function __construct() {
		parent::__construct();
        $this->load->model( 'm_login' );
	}

    /**
    * Menampilkan function utama class ini
    */
    public function index() {
        // memanggil function lain di class ini
        $this->login();
	}
    
    /**
    * Menampilkan view dashboard
    */
    public function login() {
        $this->load->view( 'login' );
    }

    /**
    * Menampilkan view dashboard
    */
    public function login_proses() {
        // get input
        $email      = $_POST['email'];          // ajiwahyu@gmail.com
        $password   = $_POST['pwd'];     // password

        $exists = $this->m_login->checking_user_login( $email, $password );

        // cek user exists
        if ( $exists ) {
            redirect( 'admin/dashboard' );
        } else {
            redirect( '/login' );
        }
    }
	
}