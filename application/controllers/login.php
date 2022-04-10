<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller 
{

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
		$this->load->model('db_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		if ($this->session->userdata("id")) {
			redirect("dashboard");
		}

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
			"required" => "Email tidak boleh kosong.",
			"valid_email" => "Email tidak valid."
		]);
		$this->form_validation->set_rules('pass', 'Password', 'required|trim');
		if ($this->form_validation->run() == false) {
			//$data['fotoCaptcha'] = $this->buatCaptcha();
			$this->load->view('login_v'); //, $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post("email");
		$pass = $this->enkripsi($this->input->post("pass"));
		$user = $this->db_model->get_where("karyawan", ["email" => $email])->row_array();

		//if ($this->cekCaptcha()) {
		if ($user) {
			if (password_verify($pass, $this->spin($user['password']))) {
				$data = [
					'id' => $user['id'],
					'email' => $user['email'],
					'nama' => $user['nama'],
					'rule' => $user['rule']
				];
				$this->session->set_userdata($data);

				redirect('dashboard');
			} else {
				//$data['fotoCaptcha'] = $this->buatCaptcha();
				$data["error"] = ["pass", "Password tidak cocok."];
				$this->load->view('login_v', $data);
			}
		} else {
			// $data['fotoCaptcha'] = $this->buatCaptcha();
			$data["error"] = ["email", "Email tidak terdaftar."];
			$this->load->view('login_v', $data);
		}
		// } else {
		// 	$data['fotoCaptcha'] = $this->buatCaptcha();
		// 	$data["error"] = ["cap", "Captcha Salah."];
		// 	$this->load->view('login_v', $data);
		// }
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('rule');
		redirect('login');
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
