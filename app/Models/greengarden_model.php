<?php

namespace App\Models;

use CodeIgniter\Model;

//inisialisasi dependensi untuk tangkap data POST/GET
use CodeIgniter\HTTP\RequestInterface;

class greengarden_model extends Model
{
	//membuat variabel multifunction dan turunannya
	protected $db;
	protected $request;

	public function __construct(){
		//inisialisasi koneksi
		$this->db = \Config\Database::connect();
		//terkait POST/GET data
		$this->request = \Config\Services::request();
	}

	public function selectdaftarbarang(){
		//membuat query
		$sql = "SELECT * FROM daftar_barang";

		//eksekusi query sql
		$query = $this->db->query($sql);

		//uraikan hasil query dalam bentuk array
		$data = $query->getResult('array');

		//kembalikan hasil query ke controller
		return $data;
	}

	public function cari_barang(){
		//tangkap data
		$keyword =$this->request->getPost('keyword');

		//membuat query
		$sql = "SELECT * FROM daftar_barang WHERE nama_barang LIKE '$keyword'";

		//eksekusi query sql
		$query = $this->db->query($sql);

		//uraikan hasil query dalam bentuk array
		$data = $query->getResult('array');

		//kembalikan hasil query ke controller
		return $data;
	}

	public function detailbarang($id_barang){
		//membuat query
		$sql = "SELECT * FROM daftar_barang where id_barang='$id_barang'";

		//eksekusi query sql
		$query = $this->db->query($sql);

		//uraikan hasil query dalam bentuk array
		$data = $query->getResult('array');

		//kembalikan hasil query ke controller
		return $data;
	}

	public function insertbarang(){
		//tangkap data
		$nama =$this->request->getPost('nama_barang');
		$stok =$this->request->getPost('stok');
		$kuantitas =$this->request->getPost('kuantitas');
		$harga =$this->request->getPost('harga');

		//menangkap gambar
		$filefoto = $this->request->getFile('foto');
		$namafoto = $filefoto->getName();

		//memindahkan foto ke lokasi permanen
		$filefoto->move('public/img', $namafoto);

		//membuat query
		$sql = "INSERT INTO daftar_barang(nama_barang, stok, kuantitas, harga, foto) 
							VALUES ('$nama', '$stok','$kuantitas', '$harga', '$namafoto')";

		//eksekusi query sql
		 $this->db->query($sql);

		//kembalikan hasil query ke controller
		return;
	}

	public function editbarang(){
		//tangkap data
		$id =$this->request->getPost('id_barang');
		$fotolama =$this->request->getPost('fotolama');

		$nama =$this->request->getPost('nama_barang');
		$stok =$this->request->getPost('stok');
		$kuantitas =$this->request->getPost('kuantitas');
		$harga =$this->request->getPost('harga');
		
		$sql = "UPDATE daftar_barang SET nama_barang = '$nama',
											 stok = '$stok',
											 kuantitas = '$kuantitas',
											 harga = '$harga'
								WHERE id_barang = '$id'";

		//eksekusi query sql
		 $this->db->query($sql);

		//kembalikan hasil query ke controller
		return;
	}

	public function tambah_keranjang(){
		//tangkap data
		$id_barang = $this->request->getPost('id_barang');
		$nama = $this->request->getPost('nama');
		$kuantitas = $this->request->getPost('kuantitas');
		$harga = $this->request->getPost('harga');
		$foto = $this->request->getPost('foto');

		//memindahkan foto ke lokasi permanen
		//$foto = $foto->move('public/img/keranjang', $foto);

		//membuat query
		$sql = "INSERT INTO keranjang (id_barang, nama, kuantitas, harga, foto) 
							VALUES ('$id_barang', '$nama', '$kuantitas', '$harga', '$foto')";


		$this->db->query($sql);

		//kembalikan hasil query ke controller
		return;
	}

	public function hapusbarang($id_barang, $foto){

		//hapus foto
		unlink('public/img/'.$foto);

		//query penghapusan data
		$sql = "DELETE FROM daftar_barang WHERE id_barang='$id_barang'";

		$this->db->query($sql);

		return;
	}

	public function selectkeranjang(){
		//membuat query
		$sql = "SELECT * FROM keranjang";

		//eksekusi query sql
		$query = $this->db->query($sql);

		//uraikan hasil query dalam bentuk array
		$data = $query->getResult('array');

		//kembalikan hasil query ke controller
		return $data;
	}

	public function hapuskeranjang($id_orderan){

		//query penghapusan data
		$sql = "DELETE FROM keranjang WHERE id_orderan='$id_orderan'";

		$this->db->query($sql);

		return;
	}

	public function total_belanja(){

		//query menghitung jumlah belanja
		$sql = "SELECT SUM(harga) FROM keranjang";

		$query = $this->db->query($sql);

		//uraikan hasil query dalam bentuk array
		$data = $query->getResult('array');

		return $data;
	}

	public function get_keyword($keyword)
    {
    	return $this->db->table('daftar_barang')->like('nama_barang', $keyword);

    }

}
