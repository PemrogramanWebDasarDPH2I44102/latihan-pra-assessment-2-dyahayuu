<?php 
class data{
	private $conn;

	function __construct(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "data";

		$this->conn = mysqli_connect($servername, $username, $password, $database);
	}

	public function karyawan(){
		$nama = $_POST['nama_k'];
		$nip = $_POST['nip'];

		$sql = "INSERT INTO karyawan (nama_k, nip)
				VALUES ('$nama', '$nip')";

		mysqli_query($this->conn, $sql);
	}

	public function create(){
		$isi_paket = $_POST['isi_paket'];
		$sasaran = $_POST['sasaran'];

		$sql = "INSERT INTO paket (isi_paket, sasaran)
				VALUES ('$isi_paket', '$sasaran')";

		mysqli_query($this->conn, $sql);
	}
}
	$data = new data();
	if ("karyawan"){
		$data->karyawan();
	}
 ?>