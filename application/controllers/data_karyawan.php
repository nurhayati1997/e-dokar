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
		// $user = $this->db_model->get_where('hrd_user', array('id' => $this->session->userdata("id")))->row();
		if ($this->session->userdata("rule")==1) {
			// redirect("login");
			echo json_encode($this->db_model->all_data("hrd_user")->result());
		}else{
			echo json_encode($this->db_model->get_where("hrd_user", array('id' => $this->session->userdata("id")))->result());
		}
		
	}


	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[hrd_user.email]', [
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
				// "status_karyawan" => $this->input->post("status_karyawan", TRUE),
				// "jabatan" => $this->input->post("jabatan", TRUE),
				// "jenis_pendidikan" => $this->input->post("jenis_pendidikan", TRUE),
				// "jenis_tenaga" => $this->input->post("jenis_tenaga", TRUE),
				"status" => 1
			];
			$this->db_model->insert('hrd_user', $data);
			echo json_encode("");
		}
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
		$this->db_model->update('hrd_user', $data, ["id" => $this->input->post("id")]);
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
			"file_sip" => $this->input->post("file_sip", TRUE)
		];
		$this->db_model->update('hrd_user', $data, ["id" => $this->input->post("id")]);
		echo json_encode("");
		
	}

	public function hapus()
	{
		echo json_encode($this->db_model->delete('hrd_user', array('id' => $this->input->post('id', TRUE))));
		
	}
 	public function create_result()
   {

         set_time_limit(600);
		//  $list =$this->db_model->all_data("hrd_user")->result();
		// $this->db_model->all_data('hrd_user');
        // $list = $this->input->post(); 
		// $this->load->model('db_model');

		$this->load->model('db_model');
		$list = $this->db_model->all_data("hrd_user")->result_array(); 


         require(APPPATH."PHPExcel-1.8/Classes/PHPExcel.php");
         require(APPPATH."PHPExcel-1.8/Classes/PHPExcel/Writer/Excel5.php");

         $objPHPExcel = new PHPExcel();

         $objPHPExcel->getProperties()->setCreator("");
         $objPHPExcel->getProperties()->setLastModifiedBy("");
         $objPHPExcel->getProperties()->setTitle("");
         $objPHPExcel->getProperties()->setSubject("");
         $objPHPExcel->getProperties()->setDescription("");

         $objPHPExcel->setActiveSheetIndex(0);

         $sheet = $objPHPExcel->getActiveSheet();

         $sheet->setCellValue("A1","Nama");
         $sheet->setCellValue("B1","Jabatan");
        //  $sheet->setCellValue("C1","date");
        //  $sheet->setCellValue("D1","type");
        //  $sheet->setCellValue("E1","view");

         $row = 2;

         foreach ($list as $key => $value)
         {

            // $object->getActiveSheet()->setCellValue('A'.$baris, $karyawan->nama); 
			$sheet->setCellValue("A".$row,$value['nama']);
             $sheet->setCellValue("B".$row,$value['jabatan']);
            //  $sheet->setCellValue("C".$row,$value['MsgDate']);
            //  $sheet->setCellValue("D".$row,$value['MsgType']);
            //  $sheet->setCellValue("E".$row,$value['CountView']);
             $row++;
             }

         $filename = "Task-Exportet-on-".date("Y-m-d-H-i-s").".xls";
         $sheet->setTitle("Task-Overview");

		 header("Pragma: public");
		 header("Expires: 0");
		 header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		 header("Content-Type: application/force-download");
		 header("Content-Type: application/octet-stream");
		 header("Content-Type: application/download");;
		 header("Content-Disposition: attachment;filename=$filename");


        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
                //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        set_time_limit(30);
        exit;
    }

	// public function excel(){
	// 	$data['karyawan'] =$this->db_model->all_data("hrd_user")->result();
	// 	// echo json_encode($this->db_model->all_data("hrd_user")->result());

	// 	require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel.php');
	// 	require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

	// 	$object = new PHPExcel();

	// 	$object->getProperties()->setCreator("Tim IT RSUD SYAMRABU");
	// 	$object->getProperties()->setLastModifiedBy("Tim IT RSUD SYAMRABU");
	// 	$object->getProperties()->setTitle("Data Karyawan");

	// 	$object->setActiveSheetIndex(0);

	// 	$object->getActiveSheet()->setCellValue('A1','NO');
	// 	$object->getActiveSheet()->setCellValue('A1','NAMA');
	// 	$object->getActiveSheet()->setCellValue('A1','RUANGAN');
	// 	$object->getActiveSheet()->setCellValue('A1','JABATAN');
	// 	$object->getActiveSheet()->setCellValue('A1','STATUS KARYAWAN');
	// 	$object->getActiveSheet()->setCellValue('A1','PENDIDIKAN');
	// 	$object->getActiveSheet()->setCellValue('A1','JENIS TENAGA');

	// 	$baris = 2;
	// 	$no = 1;

	// 	foreach($data['karyawan']as $karyawan){
	// 		$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
	// 		$object->getActiveSheet()->setCellValue('A'.$baris, $karyawan->nama);
	// 		$object->getActiveSheet()->setCellValue('A'.$baris, $karyawan->ruangan);
	// 		$object->getActiveSheet()->setCellValue('A'.$baris, $karyawan->jabatan);
	// 		$object->getActiveSheet()->setCellValue('A'.$baris, $karyawan->status_karyawan);
	// 		$object->getActiveSheet()->setCellValue('A'.$baris, $karyawan->jenis_pendidikan);
	// 		$object->getActiveSheet()->setCellValue('A'.$baris, $karyawan->jenis_tenaga);

	// 		$baris++;

	// 	}

	// 	$filename="Data Karyawan".'xlsx';
	// 	$object->getActiveSheet()->setTitle("Data Karyawan");

	// 	header('Content-Type: application/
	// 			vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	// 	header('Content-Disposition; attachment;filename="'.$filename. '"');
	// 	header('Cache-Control; max-age=0');

	// 	$writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
	// 	$writer->save('php://output');

	// 	exit;

		


	// }

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