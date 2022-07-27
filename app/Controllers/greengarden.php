<?php

namespace App\Controllers;

//inisialisasi model yang digunakan
use App\Models\greengarden_model;

//inisialisasi untuk menangkap POST
use COdeIgniter\Controller;

/**
* 
*/
class greengarden extends BaseController
{
	//membuat multifunction variabel
	protected $greengarden_model;

	public function __construct(){
		//menggunakan model
		$this->greengarden_model = new greengarden_model();
	}

	public function index()
	{
		// nama web
		$data = [
			'title' => 'Green Garden - Start'
		];

		return view('pages/index', $data);
	}

	public function daftar_barang()
	{
		// nama web
		$data['title'] = "Green Garden - Daftar Barang";
		$data['barang'] = $this->greengarden_model->selectdaftarbarang();
		$data['login_status'] = $this->session->data_login;

		//cek login atau belum
		if(empty($this->session->data_login)){

			return redirect()->to('/login/masuk');
		}

		return view('pages/daftar_barang', $data);
	}

	public function cari_barang()
	{
		// Mencari data berdasarkan keyword
		$data['title'] = "Green Garden - Cari Barang";
		$keyword = $this->request->getpost('keyword');
		$data['barang'] = $this->greengarden_model->cari_barang();
		$data['login_status'] = $this->session->data_login;

		return view('pages/daftar_barang', $data);
	}

	public function detail_barang($id_barang)
	{
		//cek login atau belum
		if(empty($this->session->data_login)){

			return redirect()->to('/login/masuk');
		}

		// nama web
		$data['title'] = "Green Garden - Detail Barang";
		$data['barang'] = $this->greengarden_model->detailbarang($id_barang);
		$data['login_status'] = $this->session->data_login;

		return view('pages/detail_barang', $data);
	}

	public function keranjang()
	{
		//cek login atau belum
		if(empty($this->session->data_login)){

			return redirect()->to('/login/masuk');
		}

		// nama web
		$data['title'] = "Green Garden - keranjang";
		$data['barang'] = $this->greengarden_model->selectkeranjang();
		$data['login_status'] = $this->session->data_login;

		return view('pages/keranjang', $data);
	}

	public function checkout()
	{
		//cek login atau belum
		if(empty($this->session->data_login)){

			return redirect()->to('/login/masuk');
		}
		
		// nama web
		$data['title'] = "Green Garden - Check Out";
		$data['barang'] = $this->greengarden_model->selectkeranjang();
		$data['login_status'] = $this->session->data_login;
		$data['jumlah'] = $this->greengarden_model->total_belanja();

		return view('pages/checkout', $data);
	}

	public function tentang()
	{
		//cek login atau belum
		if(empty($this->session->data_login)){

			return redirect()->to('/login/masuk');
		}

		// nama web
		$data['title'] = "Green Garden - Tentang";
		$data['login_status'] = $this->session->data_login;

		return view('pages/tentang', $data);
	}

	public function kontak()
	{
		//cek login atau belum
		if(empty($this->session->data_login)){

			return redirect()->to('/login/masuk');
		}

		// nama web
		$data['title'] = "Green Garden - Kontak";
		$data['login_status'] = $this->session->data_login;

		return view('pages/kontak', $data);
	}

	public function insert_barang()
	{
		//cek login atau belum
		if(empty($this->session->data_login)){

			return redirect()->to('/login/masuk');
		}

		session();
		$data['pesan_validasi'] = \Config\Services::validation();
		// nama web
		$data['title'] = "Green Garden - Tambah Barang";
		$data['login_status'] = $this->session->data_login;

		return view('pages/insert_barang', $data);
	}

	public function insert_barang_aksi()
	{
		//cek login atau belum
		if(empty($this->session->data_login)){

			return redirect()->to('/login/masuk');
		}

		//validasi gambar dari user
		if(!$this->validate([
			'foto' => 'uploaded[foto]|max_size[foto,1024]|ext_in[foto,png,jpg,gif]'
		])){
			return redirect()->to('/greengarden/insert_barang')->withInput();
		}

		$data['barang'] = $this->greengarden_model->insertbarang();
		$data['login_status'] = $this->session->data_login;

		return redirect()->to('/greengarden/daftar_barang');
	}

	public function edit($id_barang){
		//cek login atau belum
		if(empty($this->session->data_login)){

			return redirect()->to('/login/masuk');
		}

		// nama web
		$data['title'] = "Green Garden - Edit";
		$data['barang'] = $this->greengarden_model->detailbarang($id_barang);
		$data['login_status'] = $this->session->data_login;

		return view('pages/edit', $data);
	}

	public function edit_aksi($id_barang){
		//cek login atau belum
		if(empty($this->session->data_login)){

			return redirect()->to('/login/masuk');
		}

		$data['barang'] = $this->greengarden_model->editbarang();
		$data['login_status'] = $this->session->data_login;

		return redirect()->to('/greengarden/daftar_barang');
	}

	public function add_keranjang($id_barang){
		//cek login atau belum
		if(empty($this->session->data_login)){

			return redirect()->to('/login/masuk');
		}

		$data['barang'] = $this->greengarden_model->tambah_keranjang();
		$data['login_status'] = $this->session->data_login;

		return redirect()->to('/greengarden/daftar_barang');
	}

	public function hapuskeranjang($id_orderan){
		//cek login atau belum
		if(empty($this->session->data_login)){

			return redirect()->to('/login/masuk');
		}

		$this->greengarden_model->hapuskeranjang($id_orderan);

		return redirect()->to('/greengarden/keranjang');
	}

	public function hapus ($id_barang, $foto){
		//cek login atau belum
		if(empty($this->session->data_login)){

			return redirect()->to('/login/masuk');
		}

		$this->greengarden_model->hapusbarang($id_barang, $foto);

		return redirect()->to('/greengarden/daftar_barang');

	}

}