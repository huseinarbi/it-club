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
class Matematika extends CI_Controller {

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
		echo "5 + 3 = ... ? <br>";
		$x = 5;
		$y = 3;
		// Memanggil function lain
		$this->penjumlahan($x, $y);
	}

	// function penjumlahan
	public function penjumlahan($x="",$y="")
	{
		// Silahkan menulis skrip di sini
		$jumlah = $x + $y;
		echo $jumlah;
	}
}


