	
		<div class="container_12 nganan">
			<div class="col-md-3 border">
				<h3>Contact</h3>
				<div class="alamat">
					<span class="fa fa-map-marker fa-2x"></span>
					<h4>Alamat</h4>
					<p>Jalan Danau Ranau, Sawojajar, Malang</p>
				</div>
				<div class="email">
					<span class="fa fa-rss fa-2x"></span>
					<h4>Email</h4>
					<p>example@blabla.com</p>
				</div>
				<div class="contact">
					<span class="fa fa-mobile fa-2x"></span>
					<h4>Telepon</h4>
					<p>+62 813 5795 2203</p>
				</div>
				<div class="jam-buka">
					<span class="fa fa-clock-o fa-2x"></span>
					<h4>Jam Buka</h4>
					<p>08.00 - 16.00 WIB</p>
				</div>
			</div>
			<div class="col-md-7 scroll">
				<?php 
					foreach($data as $testi) {
				 ?>
				<div class="jam-buka">
					<span class="fa fa-user fa-2x"></span>
					<h4><?php echo $testi->email_testi; ?></h4>
					<p><?php echo $testi->comment; ?></p>
				</div>
				<?php } ?>
			</div>
			<script type="text/javascript">
				var ScrollPos = 0;

				$(".scroll").scroll(function(){
					var CurScrollPos = $(this).scrollTop();
					if (CurScrollPos > ScrollPos) {
						$(this).addClass("top");
						$(this).removeClass("bottom");
					}else{
						$(this).addClass("bottom");
						$(this).removeClass("top");
					}

					ScrollPos = CurScrollPos;
				});

				$(document).ready(function(){
					$(".scroll").mouseout(function(){
						$(".scroll").removeClass("top");
						$(".scroll").removeClass("bottom");
					})
				})
			</script>
		</div>
		<div class="container_12">
			<?php 
				if (!empty($notif)) {
	    			echo '<div class="alert alert-danger">'.$notif.'</div>';
	    		}
			 ?>
			<div class="col-md-8 col-md-offset-2 contact-form">
				<h2 class="naik">Kritik<span> / </span>Saran<span> / </span>Testimoni</h2>
				<form action="<?php echo base_url() ?>index.php/info/do_testi" method="post">
					<input type="text" name="name" placeholder="Name" required="">
					<input type="email" class="email" name="email" placeholder="Email" required="">
					<textarea placeholder="Message" name="message" required=""></textarea>
					<input type="submit" name="submit" value="SUBMIT" class="submit">
				</form>
			</div>
		</div>
	