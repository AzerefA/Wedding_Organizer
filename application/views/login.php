<!DOCTYPE html>
<html>
	<head>
		<title>Perpus</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">

        <style>
            .card1{
                width: 100%;
                height:400px;
            }

            .card1:hover img{
                filter: blur(2px);
            }

            .card1:hover button{
                filter: none;
            }

            .card1 img{
                height: 100%;
                width: 70$;
                margin:auto;
                display: inline-block;
                position: relative;
            }

            .inibutton{
                width: 140px;
                height:140px;
                border-radius: 50%;
                background: rgba(0, 0, 0, 0.26);
                color: white;
                margin: auto;
                position: absolute;
                margin-top: 10%;
            }




        </style>
	</head>
	<body>
		<div class="container" style="padding-top: 150px;">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4"></div>
				<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Login Administrator</h4></div>
				    	<div class="panel-body">
                <?php if (!empty($notif)) {
                      echo '<div class="alert alert-danger">';
                      echo $notif;
                      echo '</div>';
                } ?>
							<form action="<?php echo base_url();?>index.php/admin/login" id="form-login" method="post">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
									<input type="text" id="username" name="username" autofocus value="" placeholder="Username" class="form-control" />
								</div>
								<br>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input type="password" id="password" name="password" autofocus value="" placeholder="Password" class="form-control" />
								</div>
								<br>
								<input type="submit" name="submit" value="LOGIN" class="btn btn-block btn-sm btn-danger">
                                <p>
                                    <a href="<?php echo $loginURL; ?>">Login with Google</a>
                                </p>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4"></div>
			</div>
		</div>

<!--        <div class="container">-->
<!--            <h2>Card Header and Footer</h2>-->
<!--            <div class="card">-->
<!--                <div class="card-header card1"><img class="gambar" src="--><?php //echo base_url();?><!--/assets/image/buku/croe.png" alt=""><button class="inibutton">Apik</button></div>-->
<!--                <div class="card-body">Content</div>-->
<!--                <div class="card-footer">Footer</div>-->
<!--            </div>-->
<!--        </div>-->
	</body>
</html>
