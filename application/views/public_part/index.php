<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>IQAC</title>
	    <!-- Web Fonts -->
	    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
	    <!-- Flaticon CSS -->
	    <link href="fonts/flaticon/flaticon.css" rel="
	    stylesheet">
	    <!-- font-awesome CSS -->
	    <link href="<?php echo base_url();?>assets/frontend/css/font-awesome.min.css" rel="stylesheet">
	    <!-- Offcanvas CSS -->
	    <link href="<?php echo base_url();?>assets/frontend/css/hippo-off-canvas.css" rel="stylesheet">
	    <!-- animate CSS -->
	    <link href="<?php echo base_url();?>assets/frontend/css/animate.css" rel="stylesheet">
	    <!-- owl.carousel CSS -->
	    <link href="<?php echo base_url();?>assets/frontend/css/owl.theme.css" rel="stylesheet">
	    <link href="<?php echo base_url();?>assets/frontend/css/owl.carousel.css" rel="stylesheet">
	    <!-- Bootstrap Core CSS -->
	    <link href="<?php echo base_url();?>assets/frontend/css/bootstrap.min.css" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link href="<?php echo base_url();?>assets/frontend/css/style.css" rel="stylesheet">
	    <!-- Responsive CSS -->
	    <link href="<?php echo base_url();?>assets/frontend/css/responsive.css" rel="stylesheet">

	    <script src="<?php echo base_url();?>assets/frontend/js/vendor/modernizr-2.8.1.min.js"></script>
	    
	</head>


<body id="page-top" data-spy="scroll"  data-target=".navbar">

  <div id="st-container" class="st-container">
    <div class="st-pusher">
        <div class="st-content">
            <div class="st-content-inner">

			  	<header class="header">
					<nav class="navbar navbar-default" role="navigation">
						<div class="container">
							<div class="navbar-header">
		                        <button type="button" class="navbar-toggle collapsed" >
		                          <span class="sr-only">Toggle navigation</span>
		                          <i class="fa fa-bars"></i>
		                        </button>
							    <!-- offcanvas-trigger-effects -->
								<h1 class="logo"><a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>assets/frontend/img/iqac1.png"></a></h1>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-collapse">
								<ul class="nav navbar-nav navbar-right ">
									<li><a class="page-scroll" href="#home">Home</a></li>
									<li><a class="page-scroll" href="#qac">QAC</a></li>
									<li><a class="page-scroll" href="#iqac">IQAC</a></li>
									<li><a class="page-scroll" href="#objectives">OBJECTIVES</a></li>
									<li><a class="page-scroll" href="#functions">FUNCTIONS</a>
										<ul>
								      		<li><a class="page-scroll"  href="#activities">ACTIVITIES</a></li>
								      		<li><a class="page-scroll" href="#material" style="text-align: left">DOWNLOAD CORNER</a></li>
		      							</ul>
									</li>
									<li><a class="page-scroll" href="#gallery">GALLERY</a></li>
									<li><a class="page-scroll" href="#contact">CONTACT</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container -->
					</nav>
				</header>


              <?php echo $home_main_content; ?>

		        <!-- footer start -->
				<footer id="contact" class="footer-widget-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-sm-3 col-md-3 col-md-offset-1">
								<div class="footer-widget footer-logo">
									<a href="#">IQAC</a>
									<p>Comilla University</p>
								</div><!-- /.col-md-6 -->
							</div><!-- /.col-md-6 -->
							<div class="col-sm-3 col-md-2 col-lg-2">
								<div class="footer-widget">
									<h3>Social</h3>
									<ul>
										<li><a href="#">Twitter</a></li>
										<li><a href="#">Facebook</a></li>
										<li><a href="#">Google+</a></li>
										<li><a href="#">Linkedin</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
							<div class="col-sm-3 col-md-3">
								<div class="footer-widget">
									<h3>Location</h3>
									<address>
									  Comilla University,<br>
									  Kotbari Comilla<br>
									  <!-- Google Map Modal Trigger -->
									  <a class="modal-map" data-toggle="modal" data-target="#cssMapModal" href="#">View on Google Maps</a>
									</address>


									<!-- Modal -->
									<div class="modal fade" id="cssMapModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog modal-lg">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Our Location</h4>
									      </div>
									      <div class="modal-body">

										    <div id="googleMap">
										    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4353.85706132408!2d91.1342855242365!3d23.419208348047697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37547e78b6312e8d%3A0xa9c070c9b3e0d1b9!2sComilla+University!5e0!3m2!1sbn!2sbd!4v1535805919368" width="" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
										    </div>
										    
									      </div>
									    </div><!-- /.modal-content -->
									  </div><!-- /.modal-dialog -->
									</div><!-- End Modal -->

								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->

<?php include "contact.php";?>


						</div><!-- /.row -->

						<div class="row">
							<div class="col-xs-12 text-center">
								<div class="copyright">
									<p>&copy; 2018 IQAC.  Design and Develop by : <a href="http://couitsbd.org/" title="CoUITS">CoUITS</a></p>
								</div>
							</div>
						</div>

					</div><!-- /.container -->
				</footer>
				<!-- footer end -->
        </div> <!-- .st-content-inner -->
    </div> <!-- .st-content -->
    </div> <!-- .st-pusher -->


    	<!-- OFFCANVAS MENU -->
    	<div class="offcanvas-menu offcanvas-effect visible-xs">
	        <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
	        <h3>Sidebar Menu</h3>
	        <ul class="list-unstyled">
	            <li class="active"><a class="offcanvas-link" href="#home">Home<span class="sr-only">(current)</span></a></li>
	            <li><a class="offcanvas-link" href="#qac">QAC</a></li>
	            <li><a class="offcanvas-link" href="#iqac">IQAC</a></li>
	            <li><a class="offcanvas-link" href="#objectives">OBJECTIVES</a></li>
	            <li><a class="offcanvas-link" href="#functions">FUNCTIONS</a></li>
	            <li><a class="offcanvas-link" href="#activities">ACTIVITIES</a></li>
	      		<li><a class="offcanvas-link" href="#material">Referrance Materials</a></li>
	            <li><a class="offcanvas-link" href="#gallery">GALLERY</a></li>
	            <li><a class="offcanvas-link" href="#contact">CONTACT</a></li>
	        </ul>
      	</div><!-- .offcanvas-menu -->
	</div><!-- /st-container -->


		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>


	    <!-- jQuery -->
	    <script src="<?php echo base_url();?>assets/frontend/js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="<?php echo base_url();?>assets/frontend/js/bootstrap.min.js"></script>
	    <!-- wow.min.js -->
	    <script src="<?php echo base_url();?>assets/frontend/js/wow.min.js"></script>
	    <!-- smoothscroll -->
	    <script src="<?php echo base_url();?>assets/frontend/js/smoothscroll.js"></script>
	    <!-- twitterFetcher_min -->
	    <script src="<?php echo base_url();?>assets/frontend/js/twitterFetcher_min.js"></script>
	    <!-- owl.carousel -->
	    <script src="<?php echo base_url();?>assets/frontend/js/owl.carousel.min.js"></script>
		<!-- Offcanvas Menu -->
		<script src="<?php echo base_url();?>assets/frontend/js/hippo-offcanvas.js"></script>
		<!-- inview -->
		<script src="<?php echo base_url();?>assets/frontend/js/jquery.inview.min.js"></script>
		<!-- stellar -->
		<script src="<?php echo base_url();?>assets/frontend/js/jquery.stellar.js"></script>
		<!-- countTo -->
		<script src="<?php echo base_url();?>assets/frontend/js/jquery.countTo.js"></script>
	    <!-- Scrolling Nav JavaScript -->
	    <script src="<?php echo base_url();?>assets/frontend/js/jquery.easing.min.js"></script>
		<!-- flickerPhoto -->
		<script src="<?php echo base_url();?>assets/frontend/js/flickerPhoto.min.js"></script>
		<!-- Shuffle.min js -->
		<script src="<?php echo base_url();?>assets/frontend/js/jquery.shuffle.min.js"></script>
	    <!-- GOGLE MAP -->
	    <script src="https://www.google.com/maps/place/Comilla+University/@23.4194179,91.1342713,17z/data=!3m1!4b1!4m5!3m4!1s0x37547e78b6312e8d:0xa9c070c9b3e0d1b9!8m2!3d23.419413!4d91.13646"></script>
	    <!-- Custom Script -->
	    <script src="<?php echo base_url();?>assets/frontend/js/scripts.js"></script>
	</body>
</html>
