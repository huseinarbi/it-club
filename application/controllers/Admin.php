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

    public function __construct() {
		parent::__construct();
        $this->load->model( 'users' );
	}

    public function index() {
        $this->dashboard();
	}
    
    public function dashboard() {

        $data = array(
            'menu' => array(
                array(
                    'url'   => 'dashboard',
                    'label' => 'Dashboard'
                ),
                array(
                    'url'   => 'users',
                    'label' => 'Menu User'
                ),
            ),
            'title' => 'Himanifo'
                
        );

        $this->load->view( 'dashboard', $data );
    }

    public function user( $method = false , $id = false, $where = false ) {
        return $this->users->user_render( $method, $id );
    }

}