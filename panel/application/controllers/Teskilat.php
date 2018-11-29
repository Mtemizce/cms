<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teskilat extends CI_Controller {

	public $viewFolder ="";

	public function __construct ()
	{
		parent::__construct();
		$this->viewFolder = "teskilat-v";
	}

	public function index()
	{
		$this->load->view("{$this->viewFolder}/index");
	}

}
