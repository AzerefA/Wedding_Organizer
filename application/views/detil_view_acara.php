<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding Plan a Wedding Category Bootstrap responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Wedding Plan Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url() ?>assets/themes/css/flexslider.css" rel="stylesheet"/>
<link href="<?php echo base_url() ?>assets/themes/css/main.css" rel="stylesheet"/>
<link href="<?php echo base_url() ?>assets/themes/css/bootstrappage.css" rel="stylesheet"/>
<!--// bootstrap-css -->
<!-- css -->
<link href="<?php echo base_url() ?>assets/themes/css/flexslider.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/other/css/style.css" type="text/css" media="all" />
<link href="<?php echo base_url() ?>assets/other/css/mislider.css" rel="stylesheet" type="text/css" /> <!-- Testimonials-CSS -->
<link href="<?php echo base_url() ?>assets/other/css/mislider-custom.css" rel="stylesheet" type="text/css" /> <!-- Testimonials-CSS -->
<link href="<?php echo base_url() ?>assets/themes/css/jquery.fancybox.css" rel="stylesheet"/>
<!--// css -->
<!-- font-awesome icons -->
<link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/styleku.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style2ku.css" media="all" />
<!-- //font -->
<script src="<?php echo base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/themes/js/jquery.fancybox.js"></script>
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
							<li class="dropdown">
								<a href="codes.html" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Lainnya <b class="fa fa-angle-down fa-fw"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url() ?>index.php/mc">Pembawa Acara</a></li>
									<li><a href="<?php echo base_url() ?>index.php/supportAcara">Pengisi Acara</a></li>
									<li><a href="<?php echo base_url() ?>index.php/photographer">Fotografer</a></li>
									<li><a href="<?php echo base_url() ?>index.php/catering">Katering</a></li>
								</ul>
							</li>
							<li><a href="#">Pinjam</a></li>
							<li><a href="#">Info</a></li>
							<li class="w3ls-button">
								<a href="blog.html">Login <b class="fa fa-user fa-fw"></b></a>
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
	</div>
	<div class="container2ku">
		<h2 class="tengah">Detail <strong>Produk</strong></h2>
		<div class="row">
			<div class="col-md-4">
			<a href="<?php echo base_url() ?>uploads/<?php echo $barang->gambar_support;?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="<?php echo base_url() ?>uploads/<?php echo $barang->gambar_support;?>"></a>
			</div>
			<div class="col-md-8">
				<address>
					<strong>Nama:</strong> <span><?php echo $barang->nama_support; ?></span><br>							
				</address>									
				<h4><strong>Price: <?php echo $barang->harga_support; ?></strong></h4>

				<br>

				<div class="">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#home">Description</a></li>
					</ul>							 
					<div class="tab-content">
						<div class="tab-pane active" id="home"><?php echo $barang->deskripsi_support; ?></div>				
				</div>	
			</div>
		</div>
	</div>

	<div class="container3ku">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="title">
					<span class="pull-left"><span class="text"><span class="line">Produk <strong>Lainnya</strong></span></span></span>
					<span class="pull-right">
						<a class="left button" href="#myCarousel2" data-slide="prev"></a><a class="right button" href="#myCarousel2" data-slide="next"></a>
					</span>
				</h4>
				<div id="myCarousel2" class="myCarousel carousel slide sliderku">
					<div class="carousel-inner">
						<div class="active item">
							<ul class="thumbnails">												
								<li class="span3">
									<div class="product-box">
										<span class="sale_tag"></span>
										<p><a href="product_detail.html"><img src="<?php echo base_url() ?>assets/themes/images/ladies/1.jpg" alt="" /></a></p>
										<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
										<a href="products.html" class="category">Commodo consequat</a>
										<p class="price">$17.25</p>
									</div>
								</li>
								<li class="span3">
									<div class="product-box">
										<span class="sale_tag"></span>
										<p><a href="product_detail.html"><img src="<?php echo base_url() ?>assets/themes/images/ladies/2.jpg" alt="" /></a></p>
										<a href="product_detail.html" class="title">Quis nostrud exerci tation</a><br/>
										<a href="products.html" class="category">Quis nostrud</a>
										<p class="price">$32.50</p>
									</div>
								</li>
								<li class="span3">
									<div class="product-box">
										<p><a href="product_detail.html"><img src="<?php echo base_url() ?>assets/themes/images/ladies/3.jpg" alt="" /></a></p>
										<a href="product_detail.html" class="title">Know exactly turned</a><br/>
										<a href="products.html" class="category">Quis nostrud</a>
										<p class="price">$14.20</p>
									</div>
								</li>
								<li class="span3">
									<div class="product-box">
										<p><a href="product_detail.html"><img src="<?php echo base_url() ?>assets/themes/images/ladies/4.jpg" alt="" /></a></p>
										<a href="product_detail.html" class="title">You think fast</a><br/>
										<a href="products.html" class="category">World once</a>
										<p class="price">$31.45</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="item">
							<ul class="thumbnails">
								<li class="span3">
									<div class="product-box">
										<p><a href="product_detail.html"><img src="<?php echo base_url() ?>assets/themes/images/ladies/5.jpg" alt="" /></a></p>
										<a href="product_detail.html" class="title">Know exactly</a><br/>
										<a href="products.html" class="category">Quis nostrud</a>
										<p class="price">$22.30</p>
									</div>
								</li>
								<li class="span3">
									<div class="product-box">
										<p><a href="product_detail.html"><img src="<?php echo base_url() ?>assets/themes/images/ladies/6.jpg" alt="" /></a></p>
										<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
										<a href="products.html" class="category">Commodo consequat</a>
										<p class="price">$40.25</p>
									</div>
								</li>
								<li class="span3">
									<div class="product-box">
										<p><a href="product_detail.html"><img src="<?php echo base_url() ?>assets/themes/images/ladies/7.jpg" alt="" /></a></p>
										<a href="product_detail.html" class="title">You think water</a><br/>
										<a href="products.html" class="category">World once</a>
										<p class="price">$10.45</p>
									</div>
								</li>
								<li class="span3">
									<div class="product-box">
										<p><a href="product_detail.html"><img src="<?php echo base_url() ?>assets/themes/images/ladies/8.jpg" alt="" /></a></p>
										<a href="product_detail.html" class="title">Quis nostrud exerci</a><br/>
										<a href="products.html" class="category">Quis nostrud</a>
										<p class="price">$35.50</p>
									</div>
								</li>		
							</ul>
						</div>
					</div>							
				</div>
			</div>						
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<p>© 2017 Wedding Plan. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	

	<script src="<?php echo base_url() ?>assets/themes/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/themes/assets/js/holder.js"></script>
	<script src="<?php echo base_url() ?>assets/themes/js/common.js"></script>
	<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});							
			});
		</script>
</body>
</html>