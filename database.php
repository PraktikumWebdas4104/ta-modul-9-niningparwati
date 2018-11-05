<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "tabel"; //isi sesuai nama database anda

	function __construct(){
		$this->conn = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
		//buatlah koneksi secara OOP
		
	}

	function tampil_data(){
		//lengkapilah method tampil data
		//query select user
		$data = mysqli_query($this->conn, "SELECT * FROM user");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia){
		//buatlah method input
		//query inset into user
		$film = implode(',', $_POST['film']);
		$travelling = implode(',', $_POST['travelling']);
		mysqli_query($this->conn, "INSERT INTO user VALUES('','$nama','$alamat','$usia','$film','$travelling')");

	}

	function hapus($id){
		mysqli_query($this->conn, "DELETE FROM user WHERE id='$id'");
		//buatlah method hapus
		//query delete from id where id ='$id'
	}

	function edit($id){
		//lengkapilah method edit
		//query select from user where id ='$id'
		$data = mysqli_query($this->conn, "SELECT * FROM user WHERE id='$id'");

		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia){
		$film = implode(',', $_POST['film']);
		$travelling = implode(',', $_POST['travelling']);
		mysqli_query($this->conn, "UPDATE user SET nama='$nama', alamat='$alamat', usia='$usia', film='$film', travelling='$travelling' WHERE id='$id'");
		//buatlah method update
		//query update user set blablabla where id='$id'
	}

} 

?>