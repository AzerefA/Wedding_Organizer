<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding DUBY</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Wedding Plan Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link href="<?php echo base_url() ?>assets/pinjam/css/sb-admin-2.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/themes/css/flexslider.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/styleku.css" media="all" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/other/css/style.css" type="text/css" media="all" />
<link href="<?php echo base_url() ?>assets/other/css/mislider.css" rel="stylesheet" type="text/css" /> <!-- Testimonials-CSS -->
<link href="<?php echo base_url() ?>assets/other/css/mislider-custom.css" rel="stylesheet" type="text/css" /> <!-- Testimonials-CSS -->
<!--// css -->
<!-- font-awesome icons -->
<link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
<!-- //font -->
<script src="<?php echo base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="w3layouts-header-top">
			<div class="container">
				<div class="w3-header-top-grids">
					<!-- -->
				</div>
			</div>
		</div>
		<div class="head">
			<div class="container">
				<div class="navbar-top">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
							 <div class="navbar-brand logo ">
								<h1><a href="index.html">Wedding <span>Plan</span></a></h1>
							</div>

						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav link-effect-4">
							<li class="first-list"><a href="<?php echo base_url() ?>index.php/home">Home</a> </li>
							<li class="active dropdown">
								<a href="codes.html" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Lainnya <b class="fa fa-angle-down fa-fw"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url() ?>index.php/gedung">Gedung</a></li>
									<li><a href="<?php echo base_url() ?>index.php/dekor">Dekorasi</a></li>
									<li><a href="<?php echo base_url() ?>index.php/undangan">Undangan</a></li>
									<li><a href="<?php echo base_url() ?>index.php/mc">Pembawa Acara</a></li>
									<li><a href="<?php echo base_url() ?>index.php/supportAcara">Pengisi Acara</a></li>
									<li><a href="<?php echo base_url() ?>index.php/photographer">Fotografer</a></li>
									<li><a href="<?php echo base_url() ?>index.php/catering">Katering</a></li>
								</ul>
							</li>
							<li class="pinjam"><a href="<?php echo base_url() ?>index.php/pinjam">Pinjam</a></li>
							<li class="info"><a href="<?php echo base_url() ?>index.php/info">Info</a></li>
							<li class="w3ls-button">
								<a href="<?php echo base_url() ?>index.php/login">Login <b class="fa fa-user fa-fw"></b></a>
							</li>
						</ul>
						</div><!-- /.navbar-collapse -->
					</div>
			</div>
		</div>
		<div class="w3layouts-header-top">
			<div class="container">
				<div class="w3-header-top-grids">
					<!-- -->
				</div>
			</div>
		</div>
		<div class="agileinfo-banner">
				<div class="container">
					<h2>
						<?php 
							echo $judul;
						 ?>
					</h2>
				</div>
			</div>
	</div>

	<div class="gallery">
		<?php
			$this->load->view($lainnya_view);
		?>
	</div>

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p>© 2017 Wedding Plan. All rights reserved | Design by <a href="#">DUBY</a></p>
		</div>
	</div>
	<!-- //copyright -->
	<!-- for-gallery -->
		<script type="text/javascript" src="<?php echo base_url() ?>assets/other/js/jquery.hoverdir.js"></script>	
				<script type="text/javascript">
					$(function() {
					
						$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

					});
				</script>
		<!-- for-gallery-rotation -->
			<script src="<?php echo base_url() ?>assets/other/js/modernizr.custom.97074.js"></script>
			<!--swipebox -->	
				<link rel="stylesheet" href="<?php echo base_url() ?>assets/other/css/swipebox.css">
					<script src="<?php echo base_url() ?>assets/other/js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
				<!-- //swipebox Ends -->
		<!-- //for-gallery-rotation -->
		<!-- //for-gallery -->
		<script type="text/javascript">
			var a = "<?php echo $judul ?>"

			if (a == 'Peminjaman') {
				$("li.pinjam").toggleClass("active")
				$("li.dropdown").removeClass("active")
			}else if(a == 'Informasi'){
				$("li.info").toggleClass("active")
				$("li.dropdown").removeClass("active")
			}
		</script>
</body>
</html>