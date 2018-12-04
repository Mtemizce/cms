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
	public function Kaydet() {
		$insert = $this->mahalle_model->add(
			array(
				"isim" 			=> $this->input->post("isim"),
				"soyisim" 		=> $this->input->post("soyisim"),
				//"mahalle" 	=>$this->input->post("mahalle_id"),
				"tel_no" 		=> $this->input->post("cepno"),
				"tc_no" 		=> $this->input->post("tcno"),
				"bolge" 		=> $this->input->post("bolge"),
				"gorev" 		=> $this->input->post("gorev"),
				"durum" 		=> $this->input->post("durum"),
				"sandik_no" 	=> $this->input->post("sandikno"),
				"adres" 		=> $this->input->post("sandikadres")

			));
			if($insert){
				redirect(base_url("GorevliList"));
			}else {
				redirect(base_url("GorevliList/gorevliEkle"));
			}
	}
	public function Duzenle($id){
		
		$viewData = new stdClass();

		/*-- Alakalı Veriyi çekme --*/
		$gorevli = $this->mahalle_model->get(
			array(
				"id"	=> $id

			)
		);
		
		$viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = "Update";
		$viewData->gorevli = $gorevli;
		
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);






	}
}
