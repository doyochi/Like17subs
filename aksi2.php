<?php
if (isset($_POST['proses']) and $_POST['proses']=='Simpan') {
	simpan();
} elseif (isset($_GET['proses']) and $_GET['proses']=='hapus') {
	hapus();
} elseif (isset($_POST['proses']) and $_POST['proses']=='Update') {
	update();
}
function simpan() {
	include 'koneksi.php';
	$nama=$_POST['nama'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$position=$_POST['position'];
	$file_name=$_FILES['foto']['name'];
	$tmp_name=$_FILES['foto']['tmp_name'];
	$query="INSERT INTO subber (nama,gender,email,id_position,photo) VALUES ('$nama','$gender','$email','$position','$file_name');";
	$dor=mysqli_query($connect,$query);
	// upload file
	if ($file_name !="") {
		if(move_uploaded_file($tmp_name,"assets/img/subber/".$file_name)) {
			echo "Sukses diupload";
		}
	}
	if ($dor) {
		// echo "Proses input berhasil";
		header('Location:data-subber.php');
	} else{
		echo "Proses input gagal";
	}
}
function hapus() {
	include 'koneksi.php';
	$idsubb = $_GET['id_subber'];
	$foto = $_GET['photo'];
	$query = "DELETE FROM subber WHERE id_subb = $idsubb";
	// echo $query;die();

	unlink("assets/images/".$foto);
	$dor = mysqli_query($connect,$query);
	if ($dor) {
		header('Location:data-subber.php');
		// echo "Berhasil dihapus";
	} else {
		echo "Gagal dihapus";
	}
}
function update() {
	include_once 'koneksi.php';
	echo "<br>";
	$nama=$_POST['nama'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$position=$_POST['position'];
	$file_name=$_FILES['foto']['name'];
	$tmp_name=$_FILES['foto']['tmp_name'];
	$id_subb=$_POST['ids'];
	
	if ($file_name !="") {
		$query= "UPDATE subber SET nama='$nama',gender='$gender',email='$email',id_position='$position',
		photo='$file_name' WHERE id_subb=$id_subb";
		// echo $query;die();
		if(move_uploaded_file($tmp_name,"assets/img/subber/".$file_name)) {
			echo "Sukses diupload";
		}
	} else {
		$query= "UPDATE subber SET nama='$nama',gender='$gender',email='$email',id_position='$position'
		WHERE id_subb=$id_subb";
	}
	$dor = mysqli_query($connect,$query);
	if ($dor) {
		// echo "Berhasil";
		header('Location:data-subber.php');
	} else {
		echo "Gagal";
	}
}
?>