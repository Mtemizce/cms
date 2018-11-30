<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	public $viewFolder ="";

	public function __construct ()
	{
		parent::__construct();
		$this->viewFolder = "panel-dash-v";
	}

	public function index()
	{
		

		$this->load->view("{$this->viewFolder}/index");
	}

}
