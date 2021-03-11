<?php
if (isset($_POST['proses']) and $_POST['proses']=='Submit') {
    simpan();
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
		header('Location:thankyou.php');
	} else{
		echo ("Proses Input Gagal");
	}
}

?>