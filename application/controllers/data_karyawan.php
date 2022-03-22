<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_karyawan extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("id_user")) {
			redirect("login");
		}
		$this->load->model('db_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->template->load('template', 'data_karyawan_v');
	}	
	
	public function tampil()
	{
		echo json_encode($this->db_model->all_data("hrd_user")->result());
	}


	// public function dataById($id)
	// {

	// 	$query = "select * from swab_syamrabu where id=".($id);	
	// 	$data ['pasien'] = $this->db_model->get_query($query)->row_array();
	// 	$this->load->view('form', $data);
	// }

	public function dataById($id)
	{

		$query = "select * from swab_syamrabu where id=".($id);	
		$data ['pasien'] = $this->db_model->get_query($query)->row_array();
		$this->load->view('form', $data);
	}
	function edit_id()
	{
		echo json_encode($this->db_model->get_where($this->input->post("target"), ["id" => $this->input->post('id', TRUE)])->row_array());
	}
	

	function open_form(){
		$this->load->view('form');
	}


	public function edit()
	{
		$data = [
			"status" => $this->input->post("status", TRUE),
			"tgl_sudah_dilayani" => $this->input->post("tgl_sudah_dilayani", TRUE)
		];
		$this->db_model->update('swab_syamrabu', $data, ["id" => $this->input->post("id")]);
		echo json_encode("");
		
	}

	public function hapus()
	{
		echo json_encode($this->db_model->delete('swab_syamrabu', array('id' => $this->input->post('id', TRUE))));
		
	}



}