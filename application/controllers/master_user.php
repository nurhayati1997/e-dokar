<?php
defined('BASEPATH') or exit('No direct script access allowed');

class master_user extends CI_Controller
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
		// $this->load->view('dashboard_v');
		//$this->load->view('umum_v', $data);
		// $data["total_today"] = $this->db_model->get("v_today")->num_rows();
		$this->template->load('template', 'master_user_v');
	}	
	
	public function tampil()
	{
		echo json_encode($this->db_model->get_all("karyawan")->result());
		// $data_antrian = $this->db_model->get_all('hrd_user')->result();
		// echo json_encode($data_antrian);
	}
	// public function tampil()
	// {
	// 	$date= date('Y-m-d');
	// 	$this->db->get_where($table, array ('tgl_input'=> $date));
	// 	$data_antrian = $this->db_model->ambil_data('syarefa')->result();
	// 	echo json_encode($data_antrian);
	// 	// echo json_encode($this->db_model->get_where("syarefa", ["status" => $nowDate])->result());
	// }

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[hrd_user.email]', [
			"is_unique" => "Alamat email ini sudah terdaftar.",
			"required" => "Email tidak boleh kosong.",
			"valid_email" => "Email tidak valid."
		]);
		// $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]', [
		// 	"required" => "Password tidak boleh kosong.",
		// 	"matches" => "Password tidak cocok dengan konfirmasi.",
		// 	"min_length" => "Pasword minimal 5 karakter."
		// ]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]');
		if ($this->form_validation->run() == false) {
			if (form_error("nama")) {
				$error = "Nama tidak boleh kosong.";
			// } else if ($this->input->post("rule") == 0) {
			// 	$error = "Harap Memilih jenis user. (admin/dokter)";
			} else if (form_error("email")) {
				$error = form_error("email");
			} else (form_error("password")) {
				$error = form_error("password");
			// } else {
			// 	$error = form_error("konfirPass");
			}
			echo json_encode($error);
		} else {
			$data = [
				"nama" => $this->input->post("nama", TRUE),
				"email" => $this->input->post("email", TRUE),
				"password" =>  $this->spin(password_hash($this->enkripsi($this->input->post("password")), PASSWORD_DEFAULT)),
				"rule" => $this->input->post("rule", TRUE),
				"jabatan" => $this->input->post("jabatan", TRUE),
				"status" => 0
			];
			$this->db_model->insert('hrd_user', $data);
			echo json_encode("");
		}
	}

	public function dataById()
	{
		echo json_encode($this->db_model->get_where($this->input->post("target"), ["id" => $this->input->post('id', TRUE)])->row_array());
	}

	public function edit()
	{
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		if ($this->form_validation->run() == false) {
			$error = "status tidak boleh kosong.";
			echo json_encode($error);
		} else {
			$data = [
				"status" => $this->input->post("status", TRUE)
			];
			$this->db_model->update('syarefa', $data, ["id" => $this->input->post("id")]);
			echo json_encode("");
		}
	}

	public function hapus()
	{
		// $data = [
		// 	"status" => 1
		// ];
		echo json_encode($this->db_model->delete('syarefa', array('id' => $this->input->post('id', TRUE))));
		// echo json_encode($this->db_model->update('tbl_user', $data, array('id_user' => $this->input->post('id', TRUE))));
	}



}
