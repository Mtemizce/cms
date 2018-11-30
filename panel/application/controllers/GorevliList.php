<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GorevliList extends CI_Controller {

	public $viewFolder ="";

	public function __construct ()
	{
		parent::__construct();
		$this->viewFolder = "secim-gorevli-v";
	}

	public function index()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = "List";
		
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}
	public function gorevliEkle()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = "Add";
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}

}
