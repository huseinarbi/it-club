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
class Beranda extends CI_Controller {

	// function __construct
	// pertama kali dieksekusi ketika class diakses 
	public function __construct()
	{
		parent::__construct();
		echo "Construct <br>";
		$this->data['nama'] = "Himanifo";
	}

/**
* Penamaan Function:
* 1. Gunakan "function index()" untuk homepage
* 2. Diawali huruf alfabet
* 3. Hanya dibolehkan huruf alfabet (A-Za-z), 
* 	numerik (0-9), dan garis bawah (_)
*
*/
	// function index
	public function index()
	{
		// Silahkan menulis skrip di sini
		echo "Hello " .  $this->data['nama'];
		echo "<br>";
	}
	
	// function hallo
	public function hallo()
	{
		// Silahkan menulis skrip di sini
		echo "Nama saya: " . $this->data['nama'];
	}
}
