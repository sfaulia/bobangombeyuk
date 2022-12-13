<?php

class Kategori extends CI_Controller{
	public function Boba_Milk_Tea()
	{
		$data['Boba_Milk_Tea'] = $this->model_kategori->data_Boba_Milk_Tea()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Boba_Milk_Tea', $data);
		$this->load->view('templates/footer');
	}
	
	public function Boba_Fruit()
	{
		$data['Boba_Fruit'] = $this->model_kategori->data_Boba_Fruit()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Boba_Fruit', $data);
		$this->load->view('templates/footer');
	}
	
	public function Boba_Milk()
	{
		$data['Boba_Milk'] = $this->model_kategori->data_Boba_Milk()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Boba_Milk', $data);
		$this->load->view('templates/footer');
	}
	
	public function Boba_Mix()
	{
		$data['Boba_Mix'] = $this->model_kategori->data_Boba_Mix()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Boba_Mix', $data);
		$this->load->view('templates/footer');
	}
}