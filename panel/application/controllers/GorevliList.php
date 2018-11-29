<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GorevliList extends CI_Controller {

	public $viewFolder ="";

	public function __construct ()
	{
		parent::__construct();
		$this->viewFolder = "secim-gorevli-list-v";
	}

	public function index()
	{
		$this->load->view("{$this->viewFolder}/index");
	}

}
