<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data Applicant</title>
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
          <h2>Applicant</h2>
          <ol>
            <li><a href="dashboard.php">Home</a></li>
            <li>Applicant</li>
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
		<!-- <center><h2>Keseluruhan Data</h2></center> -->
		<table class="table table-striped">
		<thead>
			<tr>
				<td>Number</td>
				<td>Name</td>
				<td>Gender</td>
				<td>Email</td>
				<td>Twitter ID</td>
				<td>Position</td>
				<td>Experience</td>
				<td>Why</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php
			include 'koneksi.php';
			$id_app = "id_app";
			$query = "select a.*,b.position from applicant a, tb_position b where a.id_position=b.id_position order by id_app";
			$eksekusi = mysqli_query($connect, $query);
			$no = 1;
			while ($data = mysqli_fetch_array($eksekusi)) {
				?>
			<tr>
				<td><?= $no ?></td>
				<td><?= $data['nama'] ?></td>
				<td><?php if($data['gender']==0){echo"Male";}else{echo"Female";} ?></td>
				<td><?= $data['email'] ?></td>
				<td><?= $data['twt'] ?></td>
				<td><?= $data['position'] ?></td>
				<td><?= $data['experience'] ?></td>
				<td><?= $data['why'] ?></td>
				<td><center>
					<a href="form-proceed.php?id_app=<?= $data['id_app'] ?>" onclick="return confirm('Are you sure to accept this applicant?')">
						<button type="button" class="btn btn-warning"><i class="bx bxs-user-plus"></i></button>
					</a>
					<a href="aksi.php?proses=hapus&id=<?= $data['id_app'] ?>" onclick="return confirm('Are you sure to remove this applicant?')">
					    <button type="button" class="btn btn-outline-secondary"><i class="bx bx-trash"></i></button>
					</a></center>
				</td>
			</tr>
			<?php
			$no++;
			}
			?>
		</tbody>
	</table>
	<center><a href="form-applicant.php">
		<button type="button" class="btn btn-outline-warning">Add new applicant</BUTTON>
	</a></center>
</div>
        </p>
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

  <script type="text/javascript" src="assets/js/jquery.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>