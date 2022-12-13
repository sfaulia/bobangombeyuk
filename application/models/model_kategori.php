<?php

class Model_kategori extends CI_Model{
	
	public function data_Boba_Milk_Tea(){
	return $this->db->get_where("products",array('category' => 'Boba Milk Tea'));
	}
	
	
	public function data_Boba_Fruit(){
	return $this->db->get_where("products",array('category' => 'Boba Fruit'));
	}
	
	
	public function data_Boba_Milk(){
	return $this->db->get_where("products",array('category' => 'Boba Milk'));
	}
	
	
	public function data_Boba_Mix(){
	return $this->db->get_where("products",array('category' => 'Boba Mix'));
	}
}
