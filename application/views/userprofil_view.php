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
<link href="<?php echo base_url(); ?>assets/profil/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>assets/profil/style.css" rel="stylesheet" type="text/css" media="all" />

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
								<h1><a href="<?php echo base_url() ?>index.php/home">Wedding <span>Plan</span></a></h1>
							</div>

						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav link-effect-4">
							<li class="first-list"><a href="<?php echo base_url() ?>index.php/home">Home</a> </li>
							<li class="w3ls-button">
								<a href="<?php echo base_url() ?>index.php/login/logout">SignOut <b class="fa fa-user fa-fw"></b></a>
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

	<div class="container_12">
		<div class="agileinfo-banner">
			<div class="container">
				<h1>User Profile</h1>
				<div class="agileits-border"> </div>
			</div>
		</div>
	</div> 
	<div class="container">
		<div class="col-md-6 register-top-grid">
			<div class="thumb-image"> 
			<img src="<?php echo $user->picture; ?>" onerror="this.src='<?php echo base_url();?>assets/images/user.png'" data-imagezoom="true" class="img-responsive user" alt="<?php echo base_url();?>assets/images/user.png"> 
			</div>
		</div>
		<div class=" col-md-6 register-bottom-grid"> 
			<div class="mation">
				<label>Nama</label>
				<input type="text" name="username" disabled="disabled" value="<?php echo $user->first_name; ?> <?php echo $user->last_name ?>">
			
				<label>Email</label>
				<input type="text" name="email" disabled="disabled" value="<?php echo $user->email; ?>">
			</div>
		</div>
	</div>
	<br><br>
	
	<div class="container riwayat">
		<h4>Riwayat <strong>Transaksi</strong></h4>
		<p class="a"></p>
		<p></p>
	</div>
	<div class="container">
		<div class="table-responsive">
		<?php
          if (!empty($notif)) {
            echo '<div class="alert alert-danger">'.$notif.'</div>';
          }
        ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th id="id">ID Transaksi</th>
                        <th id="tt">Tanggal Transaksi</th>
                        <th id="tp">Harga Sewa</th>
                        <th id="sp">Status Pembayaran</th>
                        <th id="sp">Gambar</th>
                        <th id="aksi">Aksi</th>
                    </tr>
                </thead>
                <tbody class="tbody">
                	<?php
                		foreach($riwayat as $data): 
                	?>
                    <tr class="success">
                        <td><?php echo $data->id_transaksi ?></td>
                        <td><?php echo $data->tanggal_transaksi ?></td>
                        <td>Rp. <?php echo number_format($data->total_harga) ?></td>
                        <td><?php echo $data->status ?></td>
                        <td><img style="width: 200px;height: 200px;" onerror="this.src='<?php echo base_url();?>assets/images/user.png'" src="<?php echo base_url();?>/uploads/<?php echo $data->gambar_transaksi;?>"></td>
                        <td>
                        	<?php if ($data->status != 'Terverifikasi') {?>
								<button class="btn btn-primary btn-ku" data-toggle="modal" data-target="#myModal<?php echo $data->id_transaksi ?>">Upload Bukti Pembayaran</button>
                        	<?php }else{ 
                        		echo '<b>Pembayaran Anda telah kami verifikasi</b>';
                        	} ?>
                        	
                        	
                        </td>
                    </tr>
                    <div class="modal fade" id="myModal<?php echo $data->id_transaksi ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				        <div class="modal-dialog">
				        	<form action="<?php echo base_url() ?>index.php/login/upload_bukti/<?php echo $data->id_transaksi ?>" method="post" enctype="multipart/form-data" runat="server">
				                <div class="modal-content">
				                    <div class="modal-header">
				                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                        <h4 class="modal-title" id="myModalLabel">Silahkan Upload Bukti Pembayaran</h4>
				                    </div>
				                    <div class="modal-body">
				                    	<input type="file" id="foto" name="foto" class="foto" autofocus/>
				                    	<img class="preview" id="preview" onerror="this.src='<?php echo base_url();?>assets/images/user.png'" src="#" alt="Your Image">
				                    	<script type="text/javascript">
				                			function readURL(input) {
											    if (input.files && input.files[0]) {
											        var reader = new FileReader();

											        reader.onload = function (e) {
											            $('img.preview').attr('src', e.target.result);
											        }

											        reader.readAsDataURL(input.files[0]);
											    }
											}

											$("input.foto").change(function(){
											    readURL(this);
											});
				                        </script>
				                    </div>
				                    <div class="modal-footer">
				                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				                        <input type="submit" name="submit" value="Upload" class="btn btn-success">
				                    </div>
				                </div>
				            </form>
				            <!-- /.modal-content -->
				        </div>
				        <!-- /.modal-dialog -->
				    </div>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
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

						$(document).ready(function(){

							$('.user').each(function(){

							$(this).attr(“onerror”,”this.src='<?php echo base_url();?>assets/images/user.png');
								});
							});
					</script>
				<!-- //swipebox Ends -->
		<!-- //for-gallery-rotation -->
		<!-- //for-gallery -->
</body>
</html>