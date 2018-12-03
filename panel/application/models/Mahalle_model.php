<?php

/**
 * 
 */
class Mahalle_model extends CI_Model
{

	public $tableName = "mahalle_gorevli";

	public function __construct()
	{
		parent:: __construct();
	}


	public function get_all() {
		return $this->db->get($this->tableName)->result();
	}
}