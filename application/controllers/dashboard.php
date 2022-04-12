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
		$data["total_thl"] = $this->db_model->get("v_total_thl")->num_rows();
		$data["total_kontrak"] = $this->db_model->get("v_total_kontrak")->num_rows();
		$data["total_tenaga_medis"] = $this->db_model->get("v_total_tenaga_medis")->num_rows();
		$data["total_tenaga_keperawatan"] = $this->db_model->get("v_total_tenaga_keperawatan")->num_rows();
		$data["total_pejabat_struktural"] = $this->db_model->get("v_total_pejabat_struktural")->num_rows();
		$data["total_tenaga_kesehatan_lainnya"] = $this->db_model->get("v_total_tenaga_kesehatan_lainnya")->num_rows();
		$data["total_tenaga_umum"] = $this->db_model->get("v_total_tenaga_umum")->num_rows();
		$data["total_laki"] = $this->db_model->get("v_total_laki")->num_rows();
		$data["total_perempuan"] = $this->db_model->get("v_total_perempuan")->num_rows();
		$data["total_fungsional"] = $this->db_model->get("v_total_fungsional")->num_rows();
		$data["total_struktural"] = $this->db_model->get("v_total_struktural")->num_rows();
		$data["total_profesi"] = $this->db_model->get("v_total_profesi")->num_rows();
		$data["total_bukan_pns"] = $this->db_model->get("v_total_bukan_pns")->num_rows();
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

	public function thl(){
		$data = $this->db_model->datathl();
		$this->load->view('laporan/thl' , ['data'=>$data]);
	}

	public function kontrak(){
		$data = $this->db_model->datakontrak();
		$this->load->view('laporan/kontrak' , ['data'=>$data]);
	}

	public function tenaga_medis(){
		$data = $this->db_model->datatenagamedis();
		$this->load->view('laporan/tenaga_medis' , ['data'=>$data]);
	}

	public function tenaga_keperawatan(){
		$data = $this->db_model->datatenagakeperawatan();
		$this->load->view('laporan/tenaga_keperawatan' , ['data'=>$data]);
	}

	public function pejabat_struktural(){
		$data = $this->db_model->datapejabat_struktural();
		$this->load->view('laporan/pejabat_struktural' , ['data'=>$data]);
	}

	public function tenaga_kesehatan_lainnya(){
		$data = $this->db_model->datatenaga_kesehatan_lainnya();
		$this->load->view('laporan/tenaga_kesehatan_lainnya' , ['data'=>$data]);
	}

	public function tenaga_umum(){
		$data = $this->db_model->datatenaga_umum();
		$this->load->view('laporan/tenaga_umum' , ['data'=>$data]);
	}

	public function laki(){
		$data = $this->db_model->datalaki();
		$this->load->view('laporan/laki' , ['data'=>$data]);
	}

	public function perempuan(){
		$data = $this->db_model->dataperempuan();
		$this->load->view('laporan/perempuan' , ['data'=>$data]);
	}

	public function fungsional(){
		$data = $this->db_model->dataKaryawanfungsional();
		$this->load->view('laporan/karyawan_fungsional' , ['data'=>$data]);
	}
	
	public function struktural(){
		$data = $this->db_model->dataKaryawanstruktural();
		$this->load->view('laporan/karyawan_struktural' , ['data'=>$data]);
	}

	public function profesi(){
		$data = $this->db_model->dataKaryawanprofesi();
		$this->load->view('laporan/karyawan_profesi' , ['data'=>$data]);
	}
	public function bukan_pns(){
		$data = $this->db_model->dataKaryawanbukanpns();
		$this->load->view('laporan/karyawan_bukan_pns' , ['data'=>$data]);
	}

}
