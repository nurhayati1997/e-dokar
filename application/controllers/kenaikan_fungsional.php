<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kenaikan_fungsional extends CI_Controller 
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
		$this->template->load('template', 'kenaikan_fungsional_v');
	}	
	
	public function tampil()
	{
		
			echo json_encode($this->db_model->all_data("v_kenaikan_fungsional")->result());
	}

	function get_nama_karyawan()
	{
		echo json_encode($this->db_model->get_all('hrd_user')->result());
	}


	function tambah_kenaikan_fungsional()
	{
		$data = [
			"nama" => $this->input->post('nama_karyawan', TRUE),
			"tgl_kenaikan" => $this->input->post('tgl_kenaikan', TRUE),
			"file_fc_karpeg" => $this->input->post('file_fc_karpeg', TRUE),
			"file_fc_sk_pangkat_terakhir" => $this->input->post('file_fc_sk_pangkat_terakhir', TRUE),
			"file_pak_asli" => $this->input->post('file_pak_asli', TRUE),
			"file_fc_ijazah_terakhir" => $this->input->post('file_fc_ijazah_terakhir', TRUE),
			"file_fc_skp_2_tahun" => $this->input->post('file_fc_skp_2_tahun', TRUE),
			"file_pak_sebelumnya" => $this->input->post('file_pak_sebelumnya', TRUE),
			"file_fc_sk_konversi_nip" => $this->input->post('file_fc_sk_konversi_nip', TRUE),
			"file_asli_pak_terakhir" => $this->input->post('file_asli_pak_terakhir', TRUE),
			"file_jabatan_fungsional" => $this->input->post('file_jabatan_fungsional', TRUE),
			"file_asli_sk_terakhir" => $this->input->post('file_asli_sk_terakhir', TRUE),
			"file_asli_skp_2_tahun" => $this->input->post('file_asli_skp_2_tahun', TRUE),
			"file_asli_ijazah" => $this->input->post('file_asli_ijazah', TRUE),
			"file_asli_transkip" => $this->input->post('file_asli_transkip', TRUE)
		];

		// echo json_encode($data);
		echo json_encode($this->db_model->insert_get("kenaikan_fungsional_karyawan", $data));
	}
	public function dataById($id)
	{

		$query = "select * from hrd_user where id=".($id);	
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
			"no_sertifikat" => $this->input->post("no_sertifikat", TRUE),
			"file_sertifikat" => $this->input->post("file_sertifikat", TRUE)
		];
		$this->db_model->update('pelatihan_karyawan', $data, ["id" => $this->input->post("id")]);
		echo json_encode("");
		
	}

	public function hapus()
	{
		echo json_encode($this->db_model->delete('kenaikan_fungsional_karyawan', array('id' => $this->input->post('id', TRUE))));
		
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