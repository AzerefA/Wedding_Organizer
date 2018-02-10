<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
<title>Official Signup Form Flat Responsive widget Template :: w3layouts</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<!-- /fonts -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/signup/csssign/font-awesome.min.css">
<!-- css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/signup/csssign/styleku.css">
	
</head>
<body>
<h1 class="w3ls">Official DUBY Signup Form</h1>
<div class="content-w3ls">
	<div class="content-agile1">
		<h2 class="agileits1">Official</h2>
		<p class="agileits2">Official DUBY Wedding Plan</p>
	</div>
	<div class="content-agile2">
		<form action="<?php echo base_url(); ?>index.php/signup/daftar" method="post">
			<div class="form-control w3layouts"> 
				<input type="text" id="firstname" name="firstname" placeholder="First Name" title="Please enter your First Name" required="">
			</div>
			<div class="form-control w3layouts"> 
				<input type="text" id="firstname" name="lastname" placeholder="Last Name" title="Please enter your lastname Name" required="">
			</div>

			<div class="form-control w3layouts">	
				<input type="email" id="email" name="email" placeholder="mail@example.com" title="Please enter a valid email" required="">
			</div>

			<div class="form-control agileinfo">	
				<input type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
			</div>	

			<div class="form-control agileinfo">	
				<input type="password" class="lock" name="confirm-password" placeholder="Confirm Password" id="password2" required="">
			</div>			
			
			<input type="submit" name="submit" class="register" style="background-color: orange;" value="Register">
		</form>
		<script type="text/javascript">
			window.onload = function () {
				document.getElementById("password1").onchange = validatePassword;
				document.getElementById("password2").onchange = validatePassword;
			}
			function validatePassword(){
				var pass2=document.getElementById("password2").value;
				var pass1=document.getElementById("password1").value;
				if(pass1!=pass2)
					document.getElementById("password2").setCustomValidity("Passwords Don't Match");
				else
					document.getElementById("password2").setCustomValidity('');	 
					//empty string means no validation error
			}
		</script>
		<!-- <p class="wthree w3l">Fast Signup With Your Favourite Social Profile</p>
		<ul class="social-agileinfo wthree2">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="<?php echo $loginURL;?>"><i class="fa fa-google-plus"></i></a></li>
		</ul> -->
	</div>
	<div class="clear"></div>
</div>
</body>
<script type="text/javascript">
	if ('<?php echo $this->session->flashdata('notif');?>' == 'Gagal') {
		swal({
            title: "Berhasil",
            text: "<?php echo $this->session->flashdata('msg'); ?>",
            type: "danger",
            showConfirmButton: true,
            confirmButtonColor: "#00ff00"
        })
	}
</script>
</html>