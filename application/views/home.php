<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>gendon</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <?php $this->load->view('cli/head.php'); ?>
</head>

<body id="page-top">
  <?php $this->load->view('cli/navbar.php'); ?>

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image:url(<?= base_url('assets/img/d.jpg'); ?>);">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="intro-title mb-4">I am WILDAN 'ABIDA</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Assalafiyyah Vocational School student, I like playing, I also like snacks, I like sleeping, it's impossible to like you, because you don't want to be with me</span><strong class="text-slider"></strong></p>
        </div>
      </div>
    </div>
  </div>

 
  <?php $this->load->view('about.php'); ?>

  <!--/ Section Services Star /-->
  <?php $this->load->view('service.php'); ?>

  <!--/ Section Portfolio Star /-->
  <?php $this->load->view('gallery.php'); ?>


  <!--/ Section Blog Star /-->
  <?php $this->load->view('portofolio.php'); ?>

  <!--/ Section Contact-Footer Star /-->
  <?php $this->load->view('contact.php'); ?>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url().'assets/lib/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/lib/jquery/jquery-migrate.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/lib/popper/popper.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/lib/bootstrap/js/bootstrap.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/lib/easing/easing.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/lib/counterup/jquery.waypoints.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/lib/counterup/jquery.counterup.js'?>"></script>
  <script src="<?php echo base_url().'assets/lib/owlcarousel/owl.carousel.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/lib/lightbox/js/lightbox.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/lib/typed/typed.min.js'?>"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url().'assets/contactform/contactform.js'?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url().'assets/js/main.js'?>"></script>

  <?php $this->load->view('cli/footer.php'); ?>

</body>
</html>
