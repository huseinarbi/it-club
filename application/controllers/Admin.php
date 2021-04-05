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
class Admin extends CI_Controller {

    /**
    * Function __construct
    * Script yg dieksekusi ketika class ini diakses
    */
    public function __construct() {
		parent::__construct();
        $this->load->model( 'm_users' );
	}

    /**
    * Function index
    * Menampilkan halaman utama
    */
    public function index() {
        $this->dashboard();
	}
    
    /**
    * Function index
    * Menampilkan halaman dashboard
    */
    public function dashboard() {

        // var untuk sidemenu
        $data = get_item_menu('Himanifo');
        // view page
        $this->load->view( 'dashboard', $data );
    }

    /** 
    * Gerbang untuk mengelola routing user
    * $method => "add/update/delete/view"
    */
    public function user( $method = false , $id = false ) {
        $this->m_users->user_render( $method, $id );
    }

}