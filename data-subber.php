<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data All Member</title>
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
          <h2>All Member</h2>
          <ol>
            <li><a href="dashboard.php">Home</a></li>
            <li>All Member</li>
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
	<table class="table table-striped">
	<thead>
		<tr>
			<td>Nomor</td>
			<td>Name</td>
			<td>Gender</td>
			<td>Email</td>
			<td>Position</td>
            <td>Photo</td>
            <td>Action</td>
		</tr>
	</thead>
	<tbody>
		<?php
		include 'koneksi.php';
		$id_subb = "id_subb";
		$query = "select a.*,b.position from subber a, tb_position b where a.id_position=b.id_position order by id_subb";
		$dor = mysqli_query($connect,$query);
		$no = 1;
		while ($data = mysqli_fetch_array($dor)) {
			?>
		<tr>
			<td><?= $no ?></td>
			<td><?= $data['nama'] ?></td>
			<td><?php if($data['gender']==0){echo"Male";}else{echo"Female";} ?></td>
			<td><?= $data['email'] ?></td>
			<td><?= $data['position'] ?></td>
			<td>
				<img width="100px" src="assets/img/subber/<?php 
				if($data['photo']=="") {
					echo "svt.png";
				} else {
					echo $data['photo'];
				}
				 ?>">
			</td>
			<td>
				<a href="formedit-subber.php?id_subb=<?= $data['id_subb'] ?>">
					<button type="button" class="btn btn-warning">Edit</button>
				</a>
				<a href="aksi2.php?proses=hapus&id_subber=<?= $data['id_subb'] ?>" onclick="return confirm('Are you sure to remove this subber?')">
					<button type="button" class="btn btn-outline-secondary">Remove</button>
				</a>
			</td>
		</tr>
		<?php
		$no++;
	}
	?>
</tbody>
</table>

<a href="form2.php">
<center><button type="button" class="btn btn-outline-warning">Add new member</button>
</a><center>
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