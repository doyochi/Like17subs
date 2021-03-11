<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Form Applicant</title>
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
          <h2>Form Applicant</h2>
          <ol>
            <li><a href="dashboard.php">Home</a></li>
            <li>Form Applicant</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>
          <!-- Example inner page template -->
                    <center><h2>Join Like17Subs</h2></center>
            <form id="formulir" action="aksi.php" method="post">
              <div class="container-fluid">
            <fieldset>
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="nama" placeholder="Your Name">
              </div>
              <p>
                <label>Gender</label>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" name="gender" value="0"> Male
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" name="gender" value="1"> Female
                  </label>
                </div>
              </p>
              
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="example@mail.com">
              </div>
              <div class="form-group">
                <label>Twitter ID</label>
                <input type="text" class="form-control" name="twt" placeholder="@username">
              </div>
              
              <div class="form-group">
                  <label>What position are you applying for</label>
                  <select class="form-control" name="position">
                    <option>--Choose a position--</option>
                    <?php
                    include 'koneksi.php';
                    $query = "select * from tb_position";
                    $eksekusi = mysqli_query($connect,$query);
                    while ($data = mysqli_fetch_array($eksekusi))
                    {
                      ?>
                    <option value="<?= $data['id_position'] ?>"><?= $data['position'] ?></option>
                      <?php
                    }
                    ?>
                  </select>
              </div>
              <div class="form-group">
                <label>Do you have any experience in subbing? if yes, please leave examples of your work. (Links) For translator applicants, please elucidate on your language skill level.</label><br>
                <textarea name="expe" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label>Why do you want to join? Please tell us more how you join this fandom?</label><br>
                <textarea name="why" class="form-control"></textarea>
              </div>
              <center>
              <input type="submit" class="btn btn-warning" name="proses" value="Submit">
              <input type="reset" class="btn btn-outline-secondary" value="Reset">
            </center>
            </fieldset>
          </div>
          </form>
        </p>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- <?php 
include 'footer.php';
?> -->

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