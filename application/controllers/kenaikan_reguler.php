<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kenaikan_reguler extends CI_Controller 
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
		$this->template->load('template', 'kenaikan_reguler_v');
	}	
	
	public function tampil()
	{
		if ($this->session->userdata("rule")==1) {
			// redirect("login");
			echo json_encode($this->db_model->all_data("v_kenaikan_reguler")->result());
		}else{
			echo json_encode($this->db_model->get_where("v_kenaikan_reguler_karyawan", array('id' => $this->session->userdata("id")))->result());
		}
		
			// echo json_encode($this->db_model->all_data("v_kenaikan_reguler")->result());
	}
	
	function upload_pernyataan_karpeg()
	{
		$user = $this->db_model->get_where('v_kenaikan_reguler', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "Karpeg_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_karpeg')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_fc_karpeg" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("kenaikan_reguler_karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_sk_pangkat_terakhir()
	{
		$user = $this->db_model->get_where('v_kenaikan_reguler', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "FC SK PANGKAT TERAKHIR_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_sk_pangkat_terakhir')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_fc_sk_pangkat_terakhir" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("kenaikan_reguler_karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_stlud()
	{
		$user = $this->db_model->get_where('v_kenaikan_reguler', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "FC STLUD_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_stlud')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_fc_stlud" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("kenaikan_reguler_karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_ijazah_terakhir()
	{
		$user = $this->db_model->get_where('v_kenaikan_reguler', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "FC Ijazah Terakhir_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_ijazah_terakhir')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_fc_ijazah_terakhir" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("kenaikan_reguler_karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_skp_2_tahun()
	{
		$user = $this->db_model->get_where('v_kenaikan_reguler', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "FC SKP 2 Tahun Terakhir_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_skp_2_tahun')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_fc_skp_2_tahun" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("kenaikan_reguler_karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_cpns_pns()
	{
		$user = $this->db_model->get_where('v_kenaikan_reguler', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "FC SK CPNS/PNS Baru Naik Pangkat_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_cpns_pns')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_fc_cpns_pns" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("kenaikan_reguler_karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_sk_konversi_nip()
	{
		$user = $this->db_model->get_where('v_kenaikan_reguler', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "FC SK Konversi NIP_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_sk_konversi_nip')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_fc_sk_konversi_nip" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("kenaikan_reguler_karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_sk_terakhir()
	{
		$user = $this->db_model->get_where('v_kenaikan_reguler', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "Asli SK Terakhir_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_sk_terakhir')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_asli_sk_terakhir" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("kenaikan_reguler_karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_asli_skp_2_tahun()
	{
		$user = $this->db_model->get_where('v_kenaikan_reguler', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "Asli SKP 2 Tahun Terakhir_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_asli_skp_2_tahun')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_asli_skp_2_tahun" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("kenaikan_reguler_karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_asli_ijazah()
	{
		$user = $this->db_model->get_where('v_kenaikan_reguler', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "Asli Ijazah_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_asli_ijazah')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_asli_ijazah" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("kenaikan_reguler_karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	function upload_pernyataan_asli_transkip()
	{
		$user = $this->db_model->get_where('v_kenaikan_reguler', array('id' => $this->input->post('id', TRUE)))->row();
		$nama = "Asli Transkip_" .$user->nama ;
		// $nama = $user->tanggal_antri . "_" . $user->id . "_" . $user->nama;

		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './assets/arsip_karyawan/';
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

		if ($this->upload->do_upload('berkas_asli_transkip')) {

			$namaFotoBaru = $this->upload->data('file_name');

			$data = [
				"file_asli_transkip" => $namaFotoBaru
				// "tindakan" => $this->input->post('jenis', TRUE),
			];

			echo json_encode($this->db_model->update("kenaikan_reguler_karyawan", $data, array('id' => $this->input->post("id", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}

	public function exel(){
		$data = $this->db_model->datareguler();
		$this->load->view('laporan/reguler' , ['data'=>$data]);
	}

	function get_nama_karyawan()
	{
		echo json_encode($this->db_model->get_all('karyawan')->result());
	}


	function tambah_kenaikan_reguler()
	{
		$data = [
			"nama" => $this->input->post('nama_karyawan', TRUE),
			"jenis_kenaikan_reguler" => $this->input->post('jenis_kenaikan_reguler', TRUE),
			"tgl_kenaikan" => $this->input->post('tgl_kenaikan', TRUE),
		];

		// echo json_encode($data);
		echo json_encode($this->db_model->insert_get("kenaikan_reguler_karyawan", $data));
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
			"no_sertifikat" => $this->input->post("no_sertifikat", TRUE),
			"file_sertifikat" => $this->input->post("file_sertifikat", TRUE)
		];
		$this->db_model->update('pelatihan_karyawan', $data, ["id" => $this->input->post("id")]);
		echo json_encode("");
		
	}

	public function hapus()
	{
		echo json_encode($this->db_model->delete('kenaikan_reguler_karyawan', array('id' => $this->input->post('id', TRUE))));
		
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