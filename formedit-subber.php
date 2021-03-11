<?php
	include 'koneksi.php';
	$idsub = $_GET['id_subb'];
	$query = "SELECT * FROM subber WHERE id_subb=$idsub";
	$dor = mysqli_query($connect, $query);
	while ($data = mysqli_fetch_array($dor)) {
		$nama = $data['nama'];
		$gender = $data['gender'];
		$email = $data['email'];
		$position = $data['id_position'];
		$foto = $data['photo'];
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Member</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v2.2.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<?php 
include 'header-admin.php';
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Edit Member</h2>
          <ol>
            <li><a href="dashboard.php">Home</a></li>
            <li>Edit Member</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>
          <!-- Example inner page template -->
          <!-- <br> -->
          <div class="container-fluid">
          <center><h1>Edit Member Info</h1></center>
	<form method="POST" action="aksi2.php" enctype="multipart/form-data">
		<div class="container-fluid">
		<div class="form-group">
		<br>
	<label>Name</label>
		<input type="text" class="form-control" name="nama" value="<?= $nama ?>"></input>
	<br>
		<p>
			<label>Gender</label>
			<div class="form-check">
				<label class="form-check-label">
					<input type="radio" name="gender" value="0" <?php if($gender==0){echo "checked";}?>> Male
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input type="radio" name="gender" value="1" <?php if($gender==1){echo "checked";}?>> Female
				</label>
			</div>
		</p>
	<label>Email</label>
	<input type="email" class="form-control" name="email" value="<?= $email ?>"></input>
	<br>
	<label>Position</label>
	<select name="position" class="form-control">
		<option>--Choose a position--</option>
		<?php 
		include 'koneksi.php';
		$query="SELECT * FROM tb_position";
		$dor = mysqli_query($connect,$query);
		while ($data=mysqli_fetch_array($dor)) {
			?>
			<option <?php
			if($data['id_position']==$position){
				echo "selected";
			} ?>
			value= "<?= $data['id_position'] ?>"> <?= $data['position'] ?></option>
			<?php
		}
		?>
	</div>
	</select>
	</div>
	<br>
	<label>Foto</label>
	<br>
	<img width="100px" src="assets/img/subber/<?php 
				if($foto=="") {
					echo "svt.png";
				} else {
					echo $foto;
				}
				 ?>">
		<input type="file" name="foto">
	<br><br>
</div>
	<!-- <label>Tanggal</label>
		<input type="date"></input> -->
		<input type="hidden" name="ids" value="<?= $idsub ?>">
		<center>
		<input type="submit" class="btn btn-primary" name="proses" value="Update">
		<input type="reset" class="btn btn-light" value="Reset"> <center>
		</form>
		</div>
        </div>
    </section>

  </main><!-- End #main -->

  <?php 
    include 'footer.php';
  ?>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>