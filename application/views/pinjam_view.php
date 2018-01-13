
		<div class="container_12">
			<div class="panel-body">
                <div class="panel-group" id="accordion">
                    <div class="panel klik">
                        <div class="panel-heading panelku" id="judul1ku" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <h3 class="panel-title judulku">
                            	<strong>Produk Utama</strong>
                            	<span class="fa fa-caret-up fa-fw float1"></span>
                            </h3>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
	                			<!-- Nav tabs -->
				                <ul class="nav nav-tabs">
				                    <li class="active"><a href="#home-pills" data-toggle="tab">Gedung*</a>
				                    </li>
				                    <li><a href="#profile-pills" data-toggle="tab">Dekorasi*</a>
				                    </li>
				                    <li><a href="#messages-pills" data-toggle="tab">Undangan*</a>
				                    </li>
				                </ul>

				                <!-- Tab panes -->
				                <div class="tab-content">
				                    <div class="tab-pane active" id="home-pills">
				                        <h2>- Pilih <strong>Gedung</strong> -</h2>
				                        <?php
				                        for ($i=0; $i < 8; $i++) {
				                        ?>
				                        <div class="col-md-3">
				                        	<label>
					                        	<input type="radio" name="gedung" value="a">
					                        	<img src="<?php echo base_url() ?>assets/themes/images/ladies/1.jpg">
					                        	<div class="box">
													<h5>Ut wisi enim ad</h5>
													<p>$17.25</p>
												</div>
					                        </label>
				                        </div>
				                        <?php } ?>
				                    </div>
				                    <div class="tab-pane fade" id="profile-pills">
				                        <h2>- Pilih <strong>Dekorasi</strong> -</h2>
				                        <?php
				                        for ($i=0; $i < 8; $i++) {
				                        ?>
				                        <div class="col-md-3">
				                        	<label>
					                        	<input type="radio" name="dekor" value="a">
					                        	<img src="<?php echo base_url() ?>assets/themes/images/ladies/2.jpg">
					                        	<div class="box">
													<h5>Ut wisi enim ad</h5>
													<p>$17.25</p>
												</div>
					                        </label>
				                        </div>
				                        <?php } ?>
				                    </div>
				                    <div class="tab-pane fade" id="messages-pills">
				                        <h2>- Pilih <strong>Undangan</strong> -</h2>
				                        <?php
				                        for ($i=0; $i < 8; $i++) {
				                        ?>
				                        <div class="col-md-3">
				                        	<label>
					                        	<input type="radio" name="undangan" value="a">
					                        	<img src="<?php echo base_url() ?>assets/themes/images/ladies/3.jpg">
					                        	<div class="box">
													<h5>Ut wisi enim ad</h5>
													<p>$17.25</p>
												</div>
					                        </label>
				                        </div>
				                        <?php } ?>
				                    </div>
				                </div>
				            <!-- /.panel-body -->
				            </div>
				            <div class="panel-footer judulku">
	                            (*) Wajib
	                        </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion2">
                    <div class="panel">
                        <div class="panel-heading panelku" id="judul2ku" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                            <h3 class="panel-title judulku">
                                <strong>Produk Lainnya</strong>
                                <span class="fa fa-caret-down fa-fw float2"></span>
                            </h3>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
	                			<!-- Nav tabs -->
				                <ul class="nav nav-tabs">
				                    <li class="active"><a href="#home" data-toggle="tab">Pembawa Acara</a>
				                    </li>
				                    <li><a href="#profile" data-toggle="tab">Pengisi Acara</a>
				                    </li>
				                    <li><a href="#messages" data-toggle="tab">Fotografer</a>
				                    </li>
				                    <li><a href="#settings" data-toggle="tab">Katering</a>
				                    </li>
				                </ul>

				                <!-- Tab panes -->
				                <div class="tab-content">
				                    <div class="tab-pane fade in active" id="home">
				                        <h2>- Pilih <strong>Pembawa acara</strong> -</h2>
				                        <?php
				                        for ($i=0; $i < 8; $i++) {
				                        ?>
				                        <div class="col-md-3">
				                        	<label>
					                        	<input type="radio" name="mc" value="a">
					                        	<img src="<?php echo base_url() ?>assets/themes/images/ladies/1.jpg">
					                        	<div class="box">
													<h5>Ut wisi enim ad</h5>
													<p>$17.25</p>
												</div>
					                        </label>
				                        </div>
				                        <?php } ?>
				                    </div>
				                    <div class="tab-pane fade" id="profile">
				                        <h2>- Pilih <strong>Pengisi Acara</strong> -</h2>
				                        <?php
				                        for ($i=0; $i < 8; $i++) {
				                        ?>
				                        <div class="col-md-3">
				                        	<label>
					                        	<input type="radio" name="support" value="a">
					                        	<img src="<?php echo base_url() ?>assets/themes/images/ladies/1.jpg">
					                        	<div class="box">
													<h5>Ut wisi enim ad</h5>
													<p>$17.25</p>
												</div>
					                        </label>
				                        </div>
				                        <?php } ?>
				                    </div>
				                    <div class="tab-pane fade" id="messages">
				                        <h2>- Pilih <strong>Fotografer</strong> -</h2>
				                        <?php
				                        for ($i=0; $i < 8; $i++) {
				                        ?>
				                        <div class="col-md-3">
				                        	<label>
					                        	<input type="radio" name="Fotografer" value="a">
					                        	<img src="<?php echo base_url() ?>assets/themes/images/ladies/1.jpg">
					                        	<div class="box">
													<h5>Ut wisi enim ad</h5>
													<p>$17.25</p>
												</div>
					                        </label>
				                        </div>
				                        <?php } ?>
				                    </div>
				                    <div class="tab-pane fade" id="settings">
				                        <h2>- Pilih <strong>Katering</strong> -</h2>
				                        <?php
				                        for ($i=0; $i < 8; $i++) {
				                        ?>
				                        <div class="col-md-3">
				                        	<label>
					                        	<input type="radio" name="katering" value="a">
					                        	<img src="<?php echo base_url() ?>assets/themes/images/ladies/1.jpg">
					                        	<div class="box">
													<h5>Ut wisi enim ad</h5>
													<p>$17.25</p>
												</div>
					                        </label>
				                        </div>
				                        <?php } ?>
				                    </div>
				                </div>
				            <!-- /.panel-body -->
				            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container_12">
            	<div class="col-md-2 col-md-offset-5">
            		<input class="button-pinjam" type="submit" name="submit" value="submit">
            	</div>
            </div>
		</div>


		<script type="text/javascript">
			$("#judul1ku").click(function(){
			    $(".float1").toggleClass("down");
			});

			$("#judul2ku").click(function(){
			    $(".float2").toggleClass("down");
			});
		</script>
	