<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Halaman1 extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('halaman_utama.php');
		}
		
	public function register(){
	$tampil['konten'] = 'register.php';
	$this->load->view('halaman_utama.php',$tampil);
	
	}
	public function form_alumni(){
	$tampil['konten_alumni'] = 'form_alumni.php';
	$this->load->view('halaman_utama.php',$tampil);
	}
}
