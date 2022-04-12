<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("id")) {
			redirect("login");
		}
		$this->load->model('db_model');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data["total_pns"] = $this->db_model->get("v_total_pns")->num_rows();
		$data["total_cpns"] = $this->db_model->get("v_total_cpns")->num_rows();
		$data["total_pppk"] = $this->db_model->get("v_total_pppk")->num_rows();
		// $this->load->view('dashboard_v');
		$this->template->load('template','dashboard_v',$data);
	}

	public function pns(){
		$data = $this->db_model->datapns();
		$this->load->view('laporan/pns' , ['data'=>$data]);
	}

	public function cpns(){
		$data = $this->db_model->datacpns();
		$this->load->view('laporan/cpns' , ['data'=>$data]);
	}

	public function pppk(){
		$data = $this->db_model->datapppk();
		$this->load->view('laporan/pppk' , ['data'=>$data]);
	}

}
