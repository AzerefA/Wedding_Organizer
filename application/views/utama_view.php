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
<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">      
<link href="<?php echo base_url() ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link href="<?php echo base_url() ?>assets/themes/css/flexslider.css" rel="stylesheet"/>
<link href="<?php echo base_url() ?>assets/themes/css/main.css" rel="stylesheet"/>
<link href="<?php echo base_url() ?>assets/themes/css/bootstrappage.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/styleku.css" media="all" />
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

<!-- EA -->
<link rel="icon" href="<?php echo base_url() ?>assets/classic/images/favicon.ico">
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/classic/images/favicon.ico" />
<script src="<?php echo base_url() ?>assets/classic/js/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/classic/js/jquery-migrate-1.1.1.js"></script>
<script src="<?php echo base_url() ?>assets/classic/js/jquery.equalheights.js"></script>
<script src="<?php echo base_url() ?>assets/classic/js/jquery.ui.totop.js"></script>
<script src="<?php echo base_url() ?>assets/classic/js/jquery.easing.1.3.js"></script>
<script>
$(document).ready(function(){
  $( ".block1" ).mouseover(function() {
    $(this).addClass( "blur" );
  });
  $( ".block1" ).mouseout(function() {
    $(this).removeClass( "blur" );
  });
  $().UItoTop({ easingType: 'easeOutQuart' });
}) 
</script>
<!-- //EA -->

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
									<h1><a href="<?php echo base_url() ?>index.php/home">Wedding <span>Duby</span></a></h1>
								</div>

							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav link-effect-4">
								<li class="active first-list"><a href="<?php echo base_url() ?>index.php/home">Home</a> </li>
								<li class="dropdown">
									<a href="codes.html" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Produk<b class="fa fa-angle-down fa-fw"></b></a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo base_url() ?>index.php/Gedung">Gedung</a></li>
										<li><a href="<?php echo base_url() ?>index.php/dekor">Dekorasi</a></li>
										<li><a href="<?php echo base_url() ?>index.php/undangan">Undangan</a></li>
										<li><a href="<?php echo base_url() ?>index.php/mc">Pembawa Acara</a></li>
										<li><a href="<?php echo base_url() ?>index.php/support">Pengisi Acara</a></li>
										<li><a href="<?php echo base_url() ?>index.php/photographer">Fotografer</a></li>
										<li><a href="<?php echo base_url() ?>index.php/catering">Katering</a></li>
									</ul>
								</li>
								<li><a href="<?php echo base_url() ?>index.php/pinjam">Pesan</a></li>
								<li><a href="<?php echo base_url() ?>index.php/info">Info</a></li>
								<?php if($this->session->userdata('loggedIn') == true){?>
								<li class="dropdown">
									<a href="codes.html" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Me<b class="fa fa-angle-down fa-fw"></b></a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo base_url() ?>index.php/login/userprofil">My Profile</a></li>
										<li><a href="<?php echo base_url() ?>index.php/login/logout">Logout</a></li>
										
									</ul>
								</li>
								<?php }else{ ?>
								<li class="w3ls-button"><a  href="<?php echo base_url() ;?>index.php/login">Login</a></li>
								<?php } ?>
							</ul>
							</div><!-- /.navbar-collapse -->
						</div>
				</div>
			</div>
								<br>
								<br>
								<br>
			<div class="w3layouts-banner-slider">
				<div class="container">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
								
									<div class="agileits-banner-info">
										<h3>Wedding Organizer</h3>
										<p>Website ini menyediakan beberapa pilihan untuk anda dalam ranagka mempersiapkan pernikahan sempurna</p>
									</div>
								</li>
								<li>
									<div class="agileits-banner-info">
										<h3>Duby Wedding</h3>
										<p>Duby Wedding memberikan kenyamanan dan beberapa pilihan poduk untuk anda.</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager:true,
								nav:false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						 </script>
						<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
	</div>
	<!-- //banner -->

	<!-- EA -->
	<div class="container_12">
	    <div class="agileinfo-banner">
			<div class="container paket">
				<h2>Paket <strong>Teratas</strong></h2>
				<div class="agileits-border"> </div>
			</div>
		</div>
	    <a href="<?php echo base_url() ?>index.php/paket/platinum" class="block1">
		  <img src="<?php echo base_url() ?>assets/classic/images/platinum.jpg" alt="">
		  <span class="price"><span></span><span><small></small> Platinum</span><strong></strong></span>
		</a>
		<a href="<?php echo base_url() ?>index.php/paket/gold" class="block1">
		  <img src="<?php echo base_url() ?>assets/classic/images/gold.jpg" alt="">
		  <span class="price"><span></span><span><small></small> Gold</span><strong></strong></span>
		</a>
		<a href="<?php echo base_url() ?>index.php/paket/silver" class="block1">
		  <img src="<?php echo base_url() ?>assets/classic/images/silver.jpg" alt="">
		  <span class="price"><span></span>
		<span><small></small> Silver</span><strong></strong></span>
		</a>
	</div>
	<!-- //EA -->

	<!-- Gedung -->
	<div class="containerku">
	    <div class="row">
			<div class="col-lg-12">
				<h4 class="title">
					<span class="pull-left"><span class="text"><span class="line">Daftar <strong>Gedung</strong></span></span></span>
					<span class="pull-right">
						<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
					</span>
				</h4>
				<div id="myCarousel" class="myCarousel carousel slide sliderku">
					<div class="carousel-inner">
					<?php 
					$count = count($gedung);
					$hasil = ceil((float)$count / 4);
					$counter = 0;
					for ($i=1; $i <= $hasil; $i++) { ?>
					
						<div class="<?php if($i==1){echo 'active';} ?> item">
							<ul class="thumbnails">	
							<?php
							for($j=0;$j<=3;$j++) { 
								if($counter < $count){?>											
								<li class="span3">
									<div class="product-box">
										<span class="sale_tag"></span>
										<p><img src="<?php echo base_url(); ?>uploads/<?php echo $gedung[$counter]['gambar_barang'];?>"/></p>
										<p><?php echo $gedung[$counter]['nama_barang']; ?></p>
										<p class="price">Rp. <?php echo number_format($gedung[$counter]['harga_barang']); ?></p>
									</div>
								</li>
							<?php
							$counter++;
							}
						}
							?>
							</ul>
						</div>
						<?php }?>
						
					</div>							
				</div>
			</div>						
		</div>
	</div>
	<!-- //Gedung -->

	<!-- Dekor -->
	<div class="containerku">
	    <div class="row">
			<div class="col-lg-12">
				<h4 class="title">
					<span class="pull-left"><span class="text"><span class="line">Daftar <strong>Dekorasi</strong></span></span></span>
					<span class="pull-right">
						<a class="left button" href="#myCarousel2" data-slide="prev"></a><a class="right button" href="#myCarousel2" data-slide="next"></a>
					</span>
				</h4>
								<div id="myCarousel2" class="myCarousel carousel slide sliderku">
					<div class="carousel-inner">
					<?php 
					$count2 = count($dekor);
					$hasil2 = ceil((float)$count2 / 4);
					$counter2 = 0;
					for ($i=1; $i <= $hasil2; $i++) { ?>
					
						<div class="<?php if($i==1){echo 'active';} ?> item">
							<ul class="thumbnails">	
							<?php
							for($j=0;$j<=3;$j++) { 
								if($counter2 < $count2){?>											
								<li class="span3">
									<div class="product-box">
										<span class="sale_tag"></span>
										<p><img src="<?php echo base_url(); ?>uploads/<?php echo $dekor[$counter2]['gambar_barang'];?>"/></p>
										<p><?php echo $dekor[$counter2]['nama_barang']; ?></p>
										<p class="price">Rp. <?php echo number_format($dekor[$counter2]['harga_barang']); ?></p>
									</div>
								</li>
							<?php
							$counter2++;
							}
						}
							?>
							</ul>
						</div>
						<?php }?>
						
					</div>							
				</div>
			</div>						
		</div>
	</div>
	<!-- //Dekor -->

	<!-- Undangan -->
	<div class="containerku">
	    <div class="row">
			<div class="col-lg-12">
				<h4 class="title">
					<span class="pull-left"><span class="text"><span class="line">Pilihan <strong>Undangan</strong></span></span></span>
					<span class="pull-right">
						<a class="left button" href="#myCarousel3" data-slide="prev"></a><a class="right button" href="#myCarousel3" data-slide="next"></a>
					</span>
				</h4>
								<div id="myCarousel3" class="myCarousel carousel slide sliderku">
					<div class="carousel-inner">
					<?php 
					$count3 = count($undangan);
					$hasil3 = ceil((float)$count3 / 4);
					$counter3 = 0;
					for ($i=1; $i <= $hasil3; $i++) { ?>
					
						<div class="<?php if($i==1){echo 'active';} ?> item">
							<ul class="thumbnails">	
							<?php
							for($j=0;$j<=3;$j++) { 
								if($counter3 < $count3){?>											
								<li class="span3">
									<div class="product-box">
										<span class="sale_tag"></span>
										<p><img src="<?php echo base_url(); ?>uploads/<?php echo $undangan[$counter3]['gambar_barang'];?>"/></p>
										<p><?php echo $undangan[$counter3]['nama_barang']; ?></p>
										<p class="price">Rp. <?php echo number_format($undangan[$counter3]['harga_barang']); ?></p>
									</div>
								</li>
							<?php
							$counter3++;
							}
						}
							?>
							</ul>
						</div>
						<?php }?>
						
					</div>							
				</div>
		</div></div>
	</div>
	<!-- //Undangan -->

	<!-- popular -->
	<div class="container_12 tinggi">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d987.80348046252!2d112.65841082916307!3d-7.976828671512101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6285c5c1b44e3%3A0xf6c889ac7452dc3a!2sSMK+Telkom+Malang!5e0!3m2!1sen!2sid!4v1515465213361" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<!-- //popular -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p>© 2017 Wedding Plan. All rights reserved | Design by <a href="#">DUBY</a></p>
		</div>
	</div>
	<!-- //copyright -->
	<script src="<?php echo base_url() ?>assets/js/jarallax.js"></script>
	<script src="<?php echo base_url() ?>assets/js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="<?php echo base_url() ?>assets/js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/easing.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/move-top.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!--Slider Menu-->
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
    <script src="<?php echo base_url() ?>assets/themes/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/themes/assets/js/holder.js"></script>
<!--Slider Menu-->
	<script>
      $(document).ready(function(){ 
         $(".bt-menu-trigger").toggle( 
          function(){
            $('.bt-menu').addClass('bt-menu-open'); 
          }, 
          function(){
            $('.bt-menu').removeClass('bt-menu-open'); 
          } 
        ); 
      }) 
    </script>
</body>	
</html>