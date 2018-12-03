<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GorevliList extends CI_Controller {

	public $viewFolder ="";

	public function __construct ()
	{
		parent::__construct();
		$this->viewFolder = "secim-gorevli-v";
		$this->load->model("mahalle_model");
		
	}

	public function index()
	{
		$viewData = new stdClass();
				
		$gorevli = $this->mahalle_model->get_all();
		$viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = "List";
		$viewData->gorevli = $gorevli;

		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}
	public function gorevliEkle()
	{
		$viewData = new stdClass();

		$mahname = $this->mahalle_model->get_mahalle();
		$viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = "Add";
		$viewData->mahname = $mahname;
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}

}
