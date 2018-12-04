<?php

/**
 * 
 */
class Mahalle_model extends CI_Model
{

	public $tableName = "mahalle_gorevli"; //Seçim Görevlilerinin yer aldığı tablo
	public $tableName2 = "mahalleler"; //Seçim Görevlilerinin yer aldığı tablo

	public function __construct()
	{
		parent:: __construct();
	}
	public function get($where = array()){
		return $this->db->where($where)->get($this->tableName)->row();
	}
	public function get_mahalle() {
		return $this->db->get($this->tableName2)->result();
	}
	public function get_all($where = array()) {
		return $this->db->where($where)->get($this->tableName)->result();
	}
	public function add($data = array()){
		return $this->db->insert($this->tableName, $data);
	}
}