<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_karyawan extends CI_Controller 
{

	function __construct()
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
		$this->template->load('template', 'data_karyawan_v');
	}	
	
	public function tampil()
	{
		// $user = $this->db_model->get_where('karyawan', array('id' => $this->session->userdata("id")))->row();
		if ($this->session->userdata("rule")==1) {
			// redirect("login");
			echo json_encode($this->db_model->all_data("karyawan")->result());
		}else{
			echo json_encode($this->db_model->get_where("karyawan", array('id' => $this->session->userdata("id")))->result());
		}
		
	}

	public function str_sip()
	{
		echo json_encode($this->db_model->all_data("v_bulan_ini")->result());
	}

	public function berkala()
	{
		echo json_encode($this->db_model->all_data("v_berkala_bulan_ini")->result());
	}

	public function reguler()
	{
		echo json_encode($this->db_model->all_data("v_reguler_bulan_ini")->result());
	}

	public function fungsional()
	{
		echo json_encode($this->db_model->all_data("v_fungsional_bulan_ini")->result());
	}

	public function pensiun()
	{
		echo json_encode($this->db_model->all_data("v_pensiun")->result());
	}

	function upload_pernyataan()
	{
		$user = $this->db_model->get_where('karyawan', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = $user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['upload_path'] = './assets/foto_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_foto')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"foto" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_sd()
	{
		$user = $this->db_model->get_where('karyawan', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "Ijazah SD_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_sd')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_sd" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_smp()
	{
		$user = $this->db_model->get_where('karyawan', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "Ijazah SMP_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_smp')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_smp" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_sma()
	{
		$user = $this->db_model->get_where('karyawan', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "Ijazah SMA_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_sma')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_sma" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_s1()
	{
		$user = $this->db_model->get_where('karyawan', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "Ijazah S1_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_s1')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_s1" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_s2()
	{
		$user = $this->db_model->get_where('karyawan', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "Ijazah S2_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_s2')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_s2" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_s3()
	{
		$user = $this->db_model->get_where('karyawan', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "Ijazah S3_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_s3')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_s3" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_sk()
	{
		$user = $this->db_model->get_where('karyawan', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "SK_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_sk')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_sk" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_penempatan()
	{
		$user = $this->db_model->get_where('karyawan', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "SK_PENEMPATAN_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_penempatan')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_penempatan" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_skp()
	{
		$user = $this->db_model->get_where('karyawan', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "SKP_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_skp')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_skp" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_profesi()
	{
		$user = $this->db_model->get_where('karyawan', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "Ijazah Profesi_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_profesi')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_profesi" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_str()
	{
		$user = $this->db_model->get_where('karyawan', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "STR_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_str')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_str" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_sip()
	{
		$user = $this->db_model->get_where('karyawan', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "SIP_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_sip')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_sip" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}




	function upload_arsip()
	{
		$user = $this->db_model->get_where('karyawan', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = $user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'jpg';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_foto')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"foto" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	// public function tambah()
	// {
	// 	$config['upload_path'] ='.assets/foto_karyawan';
	// 	$config['allowed_types'] = 'jpg|jpeg|png|gif';
	// 	$config['encrypt_name'] = TRUE;
		 
	// 	$this->load->library('upload', $config);
	// 	if($this->upload->do_upload('foto'))
	// 	{
	// 		$data = array('upload_data' => $this->upload->data());

	// 		$id_karyawan = $this->$this->input->post("id_karyawan", TRUE);
	// 		$nama = $this->input->post("nama", TRUE);
	// 		$email = $this->input->post("email", TRUE);
	// 		$password = $this->spin(password_hash($this->enkripsi($this->input->post("password")), PASSWORD_DEFAULT));
	// 		$rule = $this->input->post("rule", TRUE);
	// 		$foto = $data['upload_data']['foto'];
	// 		$status = 1;

	// 		$result =$this->db_model->save_upload($id_karyawan,$nama,$email,$password,$rule,$foto,$status);

	// 		echo json_decode($result);
			
	// 	}
	// }


	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[karyawan.email]', [
			"is_unique" => "Alamat email ini sudah terdaftar.",
			"required" => "Email tidak boleh kosong.",
			"valid_email" => "Email tidak valid."
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]', [
			"required" => "Password tidak boleh kosong.",
			"min_length" => "Pasword minimal 5 karakter."
		]);
		if ($this->form_validation->run() == false) {
			if (form_error("nama")) {
				$error = "Nama tidak boleh kosong.";
			} else if (form_error("email")) {
				$error = form_error("email");
			} else if (form_error("password")) {
				$error = form_error("password");
			} else {
				$error = form_error("rule");
			}
			echo json_encode($error);
		} else {
			$data = [
				"id_karyawan" => $this->input->post("id_karyawan", TRUE),
				"nama" => $this->input->post("nama", TRUE),
				"email" => $this->input->post("email", TRUE),
				"password" =>  $this->spin(password_hash($this->enkripsi($this->input->post("password")), PASSWORD_DEFAULT)),
				"rule" => $this->input->post("rule", TRUE),
				// "foto" => $this->input->post("foto", TRUE),
				"status" => 1
			];
			$this->db_model->insert('karyawan', $data);
			echo json_encode("");
		}
	}

	public function dataById($id)
	{

		$query = "select * from karyawan where id=".($id);	
		$data ['karyawan'] = $this->db_model->get_query($query)->row_array();
		$this->load->view('form', $data);
	}
	function edit_id()
	{
		echo json_encode($this->db_model->get_where($this->input->post("target"), ["id" => $this->input->post('id', TRUE)])->row_array());
	}
	
	public function exel(){
		$data = $this->db_model->dataKaryawan();
		$this->load->view('laporan/excel' , ['data'=>$data]);
	}

	public function edit()
	{
		$data = [
			"nama" => $this->input->post("nama", TRUE),
			"nik" => $this->input->post("nik", TRUE),
			"nip" => $this->input->post("nip", TRUE),
			"no_hp" => $this->input->post("no_hp", TRUE),
			"email" => $this->input->post("email", TRUE),
			"foto" => $this->input->post("foto", TRUE),
			"alamat" => $this->input->post("alamat", TRUE),
			"prov" => $this->input->post("prov", TRUE),
			"kab" => $this->input->post("kab", TRUE),
			"kec" => $this->input->post("kec", TRUE),
			"kelu" => $this->input->post("kelu", TRUE),
			"rt_rw" => $this->input->post("rt_rw", TRUE),
			"kode_pos" => $this->input->post("kode_pos", TRUE),
			"tempat_lahir" => $this->input->post("tempat_lahir", TRUE),
			"tanggal_lahir" => $this->input->post("tanggal_lahir", TRUE),
			"jk" => $this->input->post("jk", TRUE),
			"agama" => $this->input->post("agama", TRUE),
			"status_pernikahan" => $this->input->post("status_pernikahan", TRUE),
			"goldar" => $this->input->post("goldar", TRUE),
			"suku" => $this->input->post("suku", TRUE),
			"sd" => $this->input->post("sd", TRUE),
			"no_sd" => $this->input->post("no_sd", TRUE),
			"file_sd" => $this->input->post("file_sd", TRUE),
			"smp" => $this->input->post("smp", TRUE),
			"no_smp" => $this->input->post("no_smp", TRUE),
			"file_smp" => $this->input->post("file_smp", TRUE),
			"sma" => $this->input->post("sma", TRUE),
			"no_sma" => $this->input->post("no_sma", TRUE),
			"file_sma" => $this->input->post("file_sma", TRUE),
			"s1" => $this->input->post("s1", TRUE),
			"no_s1" => $this->input->post("no_s1", TRUE),
			"file_s1" => $this->input->post("file_s1", TRUE),
			"s2" => $this->input->post("s2", TRUE),
			"no_s2" => $this->input->post("no_s2", TRUE),
			"file_s2" => $this->input->post("file_s2", TRUE),
			"s3" => $this->input->post("s3", TRUE),
			"no_s3" => $this->input->post("no_s3", TRUE),
			"file_s3" => $this->input->post("file_s3", TRUE),
			"profesi" => $this->input->post("profesi", TRUE),
			"no_profesi" => $this->input->post("no_profesi", TRUE),
			"file_profesi" => $this->input->post("file_profesi", TRUE),
			"jabatan" => $this->input->post("jabatan", TRUE),
			"status_karyawan" => $this->input->post("status_karyawan", TRUE),
			"jenis_tenaga" => $this->input->post("jenis_tenaga", TRUE),
			"jenis_detail_tenaga" => $this->input->post("jenis_detail_tenaga", TRUE),
			"jenis_pendidikan" => $this->input->post("jenis_pendidikan", TRUE),
			"golongan" => $this->input->post("golongan", TRUE),
			"jenis_jabatan" => $this->input->post("jenis_jabatan", TRUE),
			"pangkat_golongan" => $this->input->post("pangkat_golongan", TRUE),
			"pensiun" => $this->input->post("pensiun", TRUE),
			"gaji" => $this->input->post("gaji", TRUE),
			"ruangan" => $this->input->post("ruangan", TRUE),
			"no_sk" => $this->input->post("no_sk", TRUE),
			"file_sk" => $this->input->post("file_sk", TRUE),
			"file_penempatan" => $this->input->post("file_penempatan", TRUE),
			"no_str" => $this->input->post("no_str", TRUE),
			"file_str" => $this->input->post("file_str", TRUE),
			"no_sip" => $this->input->post("no_sip", TRUE),
			"file_sip" => $this->input->post("file_sip", TRUE),
			"masa_sip" => $this->input->post("masa_sip", TRUE)
		];
		$this->db_model->update('karyawan', $data, ["id" => $this->input->post("id")]);
		echo json_encode("");
		
	}

	public function arsip()
	{
		$data = [
			"file_sd" => $this->input->post("file_sd", TRUE),
			"file_smp" => $this->input->post("file_smp", TRUE),
			"file_sma" => $this->input->post("file_sma", TRUE),
			"file_s1" => $this->input->post("file_s1", TRUE),
			"file_s2" => $this->input->post("file_s2", TRUE),
			"file_s3" => $this->input->post("file_s3", TRUE),
			"file_profesi" => $this->input->post("file_profesi", TRUE),
			"file_sk" => $this->input->post("file_sk", TRUE),
			"file_penempatan" => $this->input->post("file_penempatan", TRUE),
			"file_str" => $this->input->post("file_str", TRUE),
			"file_sip" => $this->input->post("file_sip", TRUE),
			"file_skp" => $this->input->post("file_skp", TRUE)
		];
		$this->db_model->update('karyawan', $data, ["id" => $this->input->post("id")]);
		echo json_encode("");
		
	}

	public function hapus()
	{
		echo json_encode($this->db_model->delete('karyawan', array('id' => $this->input->post('id', TRUE))));
		
	}



	function enkripsi($data)
	{
		$kode =  array("", "~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "s-", "d+", "9=", "=|", ")}", "{", "-[", "[]", ";", ":", "?", ">", ".", "<k", "67", "05=", "2e", "8q", "9a", "2=", "3", "8", "9", "0", "A", "3", "s", "s", "E", "F", "G", "l", "o", "J", "K", "L", "M", "a", "sf", "Pa", "w$", "ar", "Sj", "sa", "sf", "V", "W", "s", "Y", "Z", "~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "-", "+", "=", "|", "}", "{", "[", "]", ";", ":", "?", ">", ".", "<", "3", "5", "2", "8", "-", "as", "3", "8", "9", "0", "A", "3", "d", "<k", "67", "05=", "2e", "a", "gd",  "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "Fa", "df", "a", "sf", "Jh", "Ks", "L", "M", "05=", "2e", "8q", "9a", "Mj", "gOf", "qw", "w", "ht", ".S", "a", "p[", "dg", "W0", "Xia", "asY", "dZ", "M", "a", "sf", "Pa", "w$", "ar", "Sj", "sa", "sf", "V");

		$terjemah = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

		$data = str_split($data);
		$hasil = '';
		for ($i = 0; $i < count($data); $i++) {
			$index = array_search($data[$i], $terjemah);
			$index = $index + (count($data) * $i);
			while ($index >= count($kode)) {
				$index -= count($kode);
			}
			if ($index == 0) {
				$index = count($data) + $i;
			}

			$hasil .= $kode[$index];
		}
		return $hasil;
	}

	function spin($data)
	{
		$data = str_split($data);
		$hasil = '';
		$index = 0;
		$penampung = '';
		for ($i = 0; $i < count($data); $i++) {
			$index += $i;
			for ($j = $index; $j < ($index + $i + 1); $j++) {
				if ($j >= count($data)) break;
				$penampung = $data[$j] . $penampung;
			}
			$hasil .= $penampung;
			$penampung = "";
			if ($i >= count($data)) break;
		}
		return $hasil;
	}



}