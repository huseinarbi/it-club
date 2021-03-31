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
class Latihan extends CI_Controller {

	// function __construct
	// pertama kali dieksekusi ketika class diakses 
	public function __construct()
	{
		parent::__construct();
		// contoh
		echo "Construct <br>";
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
		echo "Hello World";
		echo "<br>";
		// Memanggil function lain
		$this->hallo();
	}

	// function hallo
	public function hallo()
	{
		// Silahkan menulis skrip di sini
		echo "Hallo";
		echo "<br>";
	}

	// function nama
	public function nama($x="",$y="")
	{
		// Silahkan menulis skrip di sini
		echo "Hallo " . $x . "_" . $y;
	}
}


