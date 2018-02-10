<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Creative Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/csssku/styleku.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<!-- //online-fonts -->
</head>

<body>
	<!--header-->
	<div class="header-w3l">
		<h1>
		
			<span>L</span>ogin
			
	</div>
	<!--//header-->
	<div class="main-content-agile">
		<div class="sub-main-w3">
			<h2>Login Here</h2>
			<form action="<?php echo base_url(); ?>index.php/login/manualLogin" method="post">
				<div class="pom-agile">
					<span class="fa fa-user-o" aria-hidden="true"></span>
					<input placeholder="E-mail" name="email" class="user" type="email" required="">
				</div>
				<div class="pom-agile">
					<span class="fa fa-key" aria-hidden="true"></span>
					<input placeholder="Password" name="password" class="pass" type="password" required="">
				</div>
				<div class="sub-w3l">
					<a href="<?php echo base_url() ?>index.php/signup">Belum Punya Akun?</a>
					<div class="clear"></div>
				</div>
				<div class="right-w3l">
					<input type="submit" value="Login">
				</div>
					<div></div>
					<br><br>
				<div>
					<a href="<?php echo $loginURL;?>"><img style="border-radius: 10px;height: 50px;" src="<?php echo base_url();?>assets/images/google.png"></a>
				</div>
			</form>
		</div>
	</div>
	<!--//main-->
	<!--footer-->
	<!--//footer-->
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>

<script type="text/javascript">
	if ('<?php if(isset($notif)){echo $notif;}?>' == 'Login Gagal') {
		swal({
            title: "Mohon Maaf!",
            text: "Periksa ulang Email atau Password anda !",
            type: "error",
            showConfirmButton: true,
            confirmButtonColor: "#00ff00"
        },function () {
        	window.location.replace('<?php echo base_url(); ?>index.php/login')
        })
	}

	if ('<?php echo $this->session->flashdata('notif');?>' == 'Berhasil') {
		swal({
            title: "Berhasil",
            text: "<?php echo $this->session->flashdata('msg'); ?>",
            type: "success",
            showConfirmButton: true,
            confirmButtonColor: "#00ff00"
        })
	}

	if ('<?php echo $this->session->flashdata('notif');?>' == 'UnAuthorized') {
		swal({
            title: "Mohoh Untuk Login Terlebih Dahulu",
            text: "<?php echo $this->session->flashdata('msg'); ?>",
            type: "warning",
            showConfirmButton: true,
            confirmButtonColor: "#00ff00"
        })
	}
        
</script>
</html>