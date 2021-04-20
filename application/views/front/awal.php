<!DOCTYPE HTML>
<!--
  Dopetrope by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php $url=base_url();?>
<html>
<head>
  <title>SIG PEMETAAN TRAYEK BUS</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="<?=$url;?>assets/css/main.css" />
  <link rel="stylesheet" href="<?= base_url();?>leaflet/leaflet.css" />
    <script src="<?= base_url(); ?>leaflet/leaflet.js"></script>
  <style type="text/css" media="screen">
   .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }

  .button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
  }

  .button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
  }

  .button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
  }

  .button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
  }

  .button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
  } 
  ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
}

ul.pagination li {display: inline;}

ul.pagination li a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
}

ul.pagination li a.active {
    background-color: #4CAF50;
    color: white;
    border: 1px solid #4CAF50;
}

ul.pagination li a:hover:not(.active) {background-color: #ddd;}

div.center {text-align: center;}
</style>
</head>
<body class="homepage is-preload">
  <div id="page-wrapper">

    <!-- Header -->
    <section id="header" style="padding: 0em 0 4em 0">

      <!-- Logo -->
      <h1 style="background: #252122;padding: 15px;color:white"><a href="home.html">GIS PEMETAAN TRAYEK BUS SEKOLAH DAN HALTE DI CBD BANGKINANG</a></h1>
      <?php 
        $uri=$this->uri->segment(1);
        if ($uri=='' || $uri=='home.html') {
           $cls='current';
        }
      ?>
      <!-- Nav -->
      <nav id="nav">
        <ul>
          <li class="<?=$cls?>"><a href="<?=base_url()?>home.html">Home</a></li>
          <li class="<?= $uri === 'bus.html' ? "current" : "" ?>" ><a href="<?=base_url()?>bus.html">BUS</a></li>
          <li class="<?= $uri === 'peta.html' ? "current" : "" ?>"><a href="<?=base_url()?>peta.html">PETA</a></li>
          <li class="<?= $uri === 'halte.html' ? "current" : "" ?>"><a href="<?=base_url()?>halte.html">Lokasi Halte</a></li>
          <li ><a href="<?=base_url()?>login.html" class="button1">LOGIN</a></li>
          <li ><a href="<?=base_url()?>registrasi.html" class="button1">Registrasi</a></li>


        </ul>
      </nav>

      <!-- Banner -->
    <!--   <section id="banner">
        <img src="https://www.mainmain.id/uploads/post/2020/08/19/google-maps-india.jpg" alt="">
      </section> -->

   

    </section>

    <!-- Main -->
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- Blog -->
           <?= $this->load->view($page); ?> 
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <section id="footer">
      <div class="container">
        <div class="row">
          
       
          <div class="col-12">

            <!-- Copyright -->
            <div id="copyright">
              <ul class="links">
                <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </section>

  </div>

  <!-- Scripts -->
  <script src="<?=$url;?>assets/js/jquery.min.js"></script>
  <script src="<?=$url;?>assets/js/jquery.dropotron.min.js"></script>
  <script src="<?=$url;?>assets/js/browser.min.js"></script>
  <script src="<?=$url;?>assets/js/breakpoints.min.js"></script>
  <script src="<?=$url;?>assets/js/util.js"></script>
  <script src="<?=$url;?>assets/js/main.js"></script>

</body>
</html>