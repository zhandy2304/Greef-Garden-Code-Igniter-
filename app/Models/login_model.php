<?php

namespace App\Models;

use CodeIgniter\Model;

//inisialisasi dependensi untuk tangkap data POST/GET
use CodeIgniter\HTTP\RequestInterface;

class login_model extends Model{

	//membuat variabel multifunction dan turunannya
	protected $db;
	protected $request;

	public function __construct(){
		//inisialisasi koneksi
		$this->db = \Config\Database::connect();
		//terkait POST/GET data
		$this->request = \Config\Services::request();
	}

	public function daftar(){
			//tangkap data
			$nama =$this->request->getPost('nama');
			$email =$this->request->getPost('email');
			$password =$this->request->getPost('password');

			//menangkap gambar
			$filefoto = $this->request->getFile('foto');
			$namafoto = $filefoto->getName();

			//memindahkan foto ke lokasi permanen
			$filefoto->move('public/img', $namafoto);

			//membuat query
			$sql = "INSERT INTO user(nama, email, password, foto) 
								VALUES ('$nama', '$email','$password', '$namafoto')";

			//eksekusi query sql
			 $this->db->query($sql);

			//kembalikan hasil query ke controller
			return;
	}

	public function ceklogin(){
		//tangkap data
		$uname = $this->request->getPost('nama');
		$upass = $this->request->getPost('password');

		//pembuatan query
		$sql = "SELECT * FROM user WHERE nama='$uname' AND password='$upass'";

		//eksekusi query
		$query = $this->db->query($sql);

		if($query->getNumRows()>0){
			$hasil =array(
				'nama' => $uname,
				'password' => $upass
				);
		}else{
			$hasil = '<script>alert("Password Salah")</script>';
		}

		return $hasil;

	}

}

?>