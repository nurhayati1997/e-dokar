<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelatihan_karyawan extends CI_Controller 
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
		$this->template->load('template', 'pelatihan_karyawan_v');
	}	
	
	public function tampil()
	{
		if ($this->session->userdata("rule")==1) {
			// redirect("login");
			echo json_encode($this->db_model->all_data("v_pelatihan_karyawan")->result());
		}else{
			echo json_encode($this->db_model->get_where("v_pelatihan", array('id' => $this->session->userdata("id")))->result());
		}
		
			// echo json_encode($this->db_model->all_data("v_pelatihan_karyawan")->result());
	}
	public function exel(){
		$data = $this->db_model->datapelatihan();
		$this->load->view('laporan/pelatihan' , ['data'=>$data]);
	}


	function get_nama_karyawan()
	{
		echo json_encode($this->db_model->get_all('karyawan')->result());
	}


	function tambah_pelatihan()
	{
		$data = [
			"nama_pelatihan" => $this->input->post('nama_pelatihan', TRUE),
			"tgl_mulai_pelatihan" => $this->input->post('tgl_mulai_pelatihan', TRUE),
			"tgl_selesai_pelatihan" => $this->input->post('tgl_selesai_pelatihan', TRUE),
			"nama" => $this->input->post('nama_karyawan', TRUE),
			"durasi_pelatihan" => $this->input->post('durasi_pelatihan', TRUE),
			"no_sertifikat" => $this->input->post('no_sertifikat', TRUE)
		];

		// echo json_encode($data);
		echo json_encode($this->db_model->insert_get("pelatihan_karyawan", $data));
	}

	
	function upload_pernyataan_sertifikat()
	{
		$user = $this->db_model->get_where('v_pelatihan_karyawan', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "Sertifikat Pelatihan_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_sertifikat')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_sertifikat" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("pelatihan_karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
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


	public function edit()
	{
		$data = [
			"nama_pelatihan" => $this->input->post("nama_pelatihan", TRUE),
			"tgl_mulai_pelatihan" => $this->input->post("tgl_mulai_pelatihan", TRUE),
			"tgl_selesai_pelatihan" => $this->input->post("tgl_selesai_pelatihan", TRUE),
			"durasi_pelatihan" => $this->input->post("durasi_pelatihan", TRUE),
			"no_sertifikat" => $this->input->post("no_sertifikat", TRUE)
		];
		$this->db_model->update('pelatihan_karyawan', $data, ["id" => $this->input->post("id")]);
		echo json_encode("");
		
	}

	public function hapus()
	{
		echo json_encode($this->db_model->delete('pelatihan_karyawan', array('id' => $this->input->post('id', TRUE))));
		
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