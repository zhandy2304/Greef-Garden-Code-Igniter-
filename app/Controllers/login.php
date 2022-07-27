<?php

namespace App\Controllers;

//inisialisasi model yang digunakan
use App\Models\login_model;

//inisialisasi untuk menangkap POST
use COdeIgniter\Controller;
/**
* 
*/
class login extends BaseController{

	protected $login_model;

	public function __construct(){
	//menggunakan model
		$this->login_model = new login_model();
	}

	public function index()
	{
		session();
		$data['pesan_validasi'] = \Config\Services::validation();

		// nama web
		$data['title'] = "Green Garden - Daftar";

		return view('pages/daftar', $data);
		
	}

	public function daftar_aksi(){

		//validasi gambar dari user
		if(!$this->validate([
			'foto' => 'uploaded[foto]|max_size[foto,1024]|ext_in[foto,png,jpg,gif]'
		])){
			return redirect()->to('/login/index')->withInput();
		}

		$data['barang'] = $this->login_model->daftar();

		return redirect()->to('/login/masuk');

	}

	public function masuk()
	{
		// nama web
		$data['title'] = "Green Garden - Masuk";
		return view('pages/login', $data);
	}

	public function masuk_aksi()
	{
		$login = $this->login_model->ceklogin();

		if($login!='<script>alert("Password Salah")</script>'){
			//berhasil login
			$this->session->set('data_login', $login);

			return redirect()->to('/greengarden/daftar_barang');

		}else{
			//gagal login
			echo $login;
			return redirect()->to('/login/masuk');
		}
	}

	public function logout(){
		$this->session->destroy();

		return redirect()->to('/login');
	}

}

?>