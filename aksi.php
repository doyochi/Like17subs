<?php
if (isset($_POST['proses']) and $_POST['proses']=='Submit') {
	simpan();
} elseif (isset($_GET['proses']) and $_GET['proses']=='hapus') {
	hapus();
} elseif (isset($_POST['proses']) and $_POST['proses']=='Update') {
	update();
}
function simpan() {
	include_once 'koneksi.php';
	$nama=$_POST['nama'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$twt=$_POST['twt'];
	$id_position=$_POST['position'];
	$expe=$_POST['expe'];
	$why=$_POST['why'];
	$query="INSERT INTO applicant (nama,gender,email,twt,id_position,experience,why) VALUES ('$nama','$gender','$email','$twt','$id_position','$expe','$why');";
	$eksekusi=mysqli_query($connect, $query);
	if ($eksekusi) {
		// echo ("<br>Proses Input Berhasil");
		header('Location:data-applicant.php');
	} else{
		echo ("Proses Input Gagal");
	}
}
function hapus() {
	include 'koneksi.php';
	// echo "<br>";
	$id_app = $_GET['id'];
	$query = "DELETE FROM applicant WHERE id_app=$id_app";
	$eksekusi = mysqli_query($connect, $query);
	if ($eksekusi) {
		// echo "Berhasil dihapus";
		header('Location:data-applicant.php');
	} else {
		echo "Gagal dihapus";
	}
}
function update() {
	include_once 'koneksi.php';
	echo "<br>";
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$web=$_POST['web'];
	$isi=$_POST['isi'];
	$kode=$_POST['kode'];
	$gender=$_POST['gender'];
	$aa=$_POST['jurusan'];
	$query= "UPDATE table_mahasiswa SET nama='$nama',email='$email',web='$web',isi='$isi',gender=$gender, id_jurusan=$aa WHERE kode=$kode;";
	// echo $query;die();
	$eksekusi = mysqli_query($connect, $query);
	if ($eksekusi) {
		// echo "Berhasil";
		header('Location:data-applicant.php');
	} else {
		echo "Gagal";
	}
}
?>