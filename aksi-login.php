<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel untuk menyimpan kiriman dari form
	$user = $_POST['username'];
	$pass = $_POST['pw'];
	
	if($user=='' || $pass==''){
		echo "Form belum lengkap!!";
	}else{
		include "koneksi.php";
		$sqlLogin = mysqli_query($connect, "SELECT * FROM admin 
						WHERE user='$user' AND pw='$pass'");
		$jml = mysqli_num_rows($sqlLogin);
		$d=mysqli_fetch_array($sqlLogin);
		if($jml > 0){
			session_start();
			$_SESSION['login']	= true;
			// $_SESSION['id']		= $d['u'];
			$_SESSION['user']=$d['user'];
			// echo "Login Berhasil";
			header('location: dashboard.php');
		}else{
            header ('location: login-gagal.php');
			// echo "<div class='alert alert-secondary' role='alert'>";
			// echo "Username dan Password anda Salah!!!";
		}
	}
}
?>