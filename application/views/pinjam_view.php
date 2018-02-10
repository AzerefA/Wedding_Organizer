
		<div class="container_12">
			<form method="post" action="<?php echo base_url(); ?>index.php/pinjam/pinjams">
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
				                        foreach($gedung as $data_gedung) {
				                        ?>
				                        <div class="col-md-3">
				                        	<label>
					                        	<input type="radio" name="gedung" value="<?php echo $data_gedung->nama_barang ?>">
					                        	<img src="<?php echo base_url() ?>uploads/<?php echo $data_gedung->gambar_barang ?>">
					                        	<input type="hidden" class="price" value="<?php echo $data_gedung->harga_barang ?>">
					                        	<div class="box">
													<h5><?php echo $data_gedung->nama_barang ?></h5>
													<p>Rp. <?php echo number_format($data_gedung->harga_barang) ?></p>
												</div>
					                        </label>
				                        </div>
				                        <?php } ?>
				                    </div>
				                    <div class="tab-pane fade" id="profile-pills">
				                        <h2>- Pilih <strong>Dekorasi</strong> -</h2>
				                        <?php
				                        foreach($dekor as $data_dekor) {
				                        ?>
				                        <div class="col-md-3">
				                        	<label>
					                        	<input type="radio" name="dekor" value="<?php echo $data_dekor->nama_barang ?>">
					                        	<img src="<?php echo base_url() ?>uploads/<?php echo $data_dekor->gambar_barang ?>">
					                        	<input type="hidden" class="price" value="<?php echo $data_dekor->harga_barang ?>">
					                        	<div class="box">
													<h5><?php echo $data_dekor->nama_barang ?></h5>
													<p>Rp. <?php echo number_format($data_dekor->harga_barang) ?></p>
												</div>
					                        </label>
				                        </div>
				                        <?php } ?>
				                    </div>
				                    <div class="tab-pane fade" id="messages-pills">
				                        <h2>- Pilih <strong>Undangan</strong> -</h2>
				                        <?php
				                        foreach($undangan as $data_undangan) {
				                        ?>
				                        <div class="col-md-3">
				                        	<label>
					                        	<input type="radio" name="undangan" value="<?php echo $data_undangan->nama_barang ?>">
					                        	<img src="<?php echo base_url() ?>uploads/<?php echo $data_undangan->gambar_barang ?>">
					                        	<input type="hidden" class="price" value="<?php echo $data_undangan->harga_barang ?>">
					                        	<div class="box">
													<h5><?php echo $data_undangan->nama_barang ?></h5>
													<p>Rp. <?php echo number_format($data_undangan->harga_barang) ?></p>
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
				                        foreach($mc as $data_mc) {
				                        ?>
				                        <div class="col-md-3">
				                        	<label>
					                        	<input type="radio" name="mc" value="<?php echo $data_mc->nama_barang ?>">
					                        	<img src="<?php echo base_url() ?>uploads/<?php echo $data_mc->gambar_barang ?>">
					                        	<input type="hidden" class="price" value="<?php echo $data_mc->harga_barang ?>">
					                        	<div class="box">
													<h5><?php echo $data_mc->nama_barang ?></h5>
													<p>Rp. <?php echo number_format($data_mc->harga_barang) ?></p>
												</div>
					                        </label>
				                        </div>
				                        <?php } ?>
				                    </div>
				                    <div class="tab-pane fade" id="profile">
				                        <h2>- Pilih <strong>Pengisi Acara</strong> -</h2>
				                        <?php
				                        foreach($support as $data_support) {
				                        ?>
				                        <div class="col-md-3">
				                        	<label>
					                        	<input type="radio" name="support" value="<?php echo $data_support->nama_barang ?>">
					                        	<img src="<?php echo base_url() ?>uploads/<?php echo $data_support->gambar_barang ?>">
					                        	<input type="hidden" class="price" value="<?php echo $data_support->harga_barang ?>">
					                        	<div class="box">
													<h5><?php echo $data_support->nama_barang ?></h5>
													<p>Rp. <?php echo number_format($data_support->harga_barang) ?></p>
												</div>
					                        </label>
				                        </div>
				                        <?php } ?>
				                    </div>
				                    <div class="tab-pane fade" id="messages">
				                        <h2>- Pilih <strong>Fotografer</strong> -</h2>
				                        <?php
				                        foreach($fotografer as $data_fotografer) {
				                        ?>
				                        <div class="col-md-3">
				                        	<label>
					                        	<input type="radio" name="fotografer" value="<?php echo $data_fotografer->nama_barang ?>">
					                        	<img src="<?php echo base_url() ?>uploads/<?php echo $data_fotografer->gambar_barang ?>">
					                        	<input type="hidden" class="price" value="<?php echo $data_fotografer->harga_barang ?>">
					                        	<div class="box">
													<h5><?php echo $data_fotografer->nama_barang ?></h5>
													<p>Rp. <?php echo number_format($data_fotografer->harga_barang) ?></p>
												</div>
					                        </label>
				                        </div>
				                        <?php } ?>
				                    </div>
				                    <div class="tab-pane fade" id="settings">
				                        <h2>- Pilih <strong>Katering</strong> -</h2>
				                        <?php
				                        foreach($katering as $data_katering) {
				                        ?>
				                        <div class="col-md-3">
				                        	<label>
					                        	<input type="radio" name="katering" value="<?php echo $data_katering->nama_barang ?>">
					                        	<img src="<?php echo base_url() ?>uploads/<?php echo $data_katering->gambar_barang ?>">
					                        	<input type="hidden" class="price" value="<?php echo $data_katering->harga_barang ?>">
					                        	<div class="box">
													<h5><?php echo $data_katering->nama_barang ?></h5>
													<p>Rp. <?php echo number_format($data_katering->harga_barang) ?></p>
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
				   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel">Isilah Data Dengan Benar</h4>
                      </div>
                      	<?php $data = $this->session->userdata('userData'); ?>
				        <div class="modal-body">
				          <h4>Nama Pemesan:</h4><input class="form-control" type="text" name="nama" value="<?php echo $data['first_name']." ".$data['last_name']; ?>">
				          <br>
				          <h4>Alamat :</h4> <input class="form-control" type="text" name="alamat">
				          <br>
				          <h4>No.KTP :</h4> <input class="form-control" type="number" name="ktp">
				          <br>
				          <h4>Tanggal Acara :</h4> <input type="text" class="form-control" name="tanggal_acara" id="datepicker">
				          <br>
				          <h4>Nama Gedung : </h4><p id="p"></p>
				          <br>
				          <h4>Jam Sewa</h4><input class="form-control" type="number" min="0" max="24" name="jamGedung"><p id="hargaGed">Rp. 0</p>
				          <br>
				          <h4>Paket Dekorasi : </h4><p id="d"></p><p id="hargaDek">Rp. 0</p>
				          <br>
				          <h4>Undangan : </h4><p id="f"></p>
				          <br>
				          <h4>Jumlah Undangan</h4><input class="form-control" value="0" min="0" type="number" name="jumlahUndangan">
				          <p id="hargaUnd">Rp. 0</p>
				          <input type="hidden" name="jumKat">
				          <br>
				          <h3>Produk Lainnya</h3>
				          
				        </div>
				        <div class="modal-footer">
				        	<label>Total Harga : </label><input type="hidden" name="totalHarga" value=""><p id="totalHarga"></p>
				        	<input class="btn btn-success" type="submit" name="submit" value="Setuju dan Pesan">
				          <button type="button" id="tutup" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				    </div>
				  </div>
				</div>

            <div class="container_12">
            	<div class="col-md-2 col-md-offset-5">
            		<button type="button" id="tamp" class="btn button-pinjam">Submit</button>
            		<button type="button" style="display: none;" id="tampil" class="btn button-pinjams" data-toggle="modal" data-target="#myModal" hidden>Submit</button>
            	</div>
            </div>
            </form>
		</div>
		


		<script type="text/javascript">
		



			var totalGedung=0;
			var totalUndangan=0;
			var totalKatering=0;
			var total;


			$("#judul1ku").click(function(){
			    $(".float1").toggleClass("down");
			});

			$("#judul2ku").click(function(){
			    $(".float2").toggleClass("down");
			});

			$('#tamp').click(function() {

				var gedung = $('input[name=gedung]:checked');
				var dekor = $('input[name=dekor]:checked');
				var undangan = $('input[name=undangan]:checked');
				var mc = $('input[name=mc]:checked');
				var support = $('input[name=support]:checked');
				var fotografer = $('input[name=fotografer]:checked');
				var katering = $('input[name=katering]:checked');

				if (gedung.val() != null && dekor.val() != null && undangan.val() != null) {
					document.getElementById('p').innerHTML = gedung.val();
					document.getElementById('d').innerHTML = dekor.val();
					document.getElementById('f').innerHTML = undangan.val();
					var hargaDekor = $('input[name=dekor]:checked').next().next('.price').val();
					$('#hargaDek').text('Rp. '+$.number(hargaDekor));
					$('p').remove('.append');
					$('b').remove('.append');
					$('input').remove('.append');
					if (mc.val() == null && support.val() == null && fotografer.val() == null && katering.val() == null) {
						$('.modal-body').append('<p class="append"> Tidak Ada</p>');
					}else{
						if (mc.val() != null) {
							$('.modal-body').append('<b class="append">Nama Pembawa Acara : </b>');
							$('.modal-body').append('<p class="append">'+mc.val()+'</p>');
							$('.modal-body').append('<p id="hargaMc" class="append">Rp. 0</p>');
							var hargaMc = $('input[name=mc]:checked').next().next('.price').val();
							$('#hargaMc').text('Rp. '+$.number(hargaMc));
						}
						if (support.val() != null) {
							$('.modal-body').append('<b class="append">Nama Pengisi Acara : </b>');
							$('.modal-body').append('<p class="append">'+support.val()+'</p>');
							$('.modal-body').append('<p id="hargaSupport" class="append">Rp. 0</p>');
							var hargaSupport = $('input[name=support]:checked').next().next('.price').val();
							$('#hargaSupport').text('Rp. '+$.number(hargaSupport));
						}
						if (fotografer.val() != null) {
							$('.modal-body').append('<b class="append">Fotografer : </b>');
							$('.modal-body').append('<p class="append">'+fotografer.val()+'</p>');
							$('.modal-body').append('<p id="hargaFoto" class="append">Rp. 0</p>');
							var hargaFoto = $('input[name=fotografer]:checked').next().next('.price').val();
							$('#hargaFoto').text('Rp. '+$.number(hargaFoto));

						}
						if (katering.val() != null) {
							$('.modal-body').append('<b class="append">Paket Katering : </b>');
							$('.modal-body').append('<p class="append">'+katering.val()+'</p>');
							$('.modal-body').append('<input class="append form-control" value="0" type="number" min="0" name="jumlahKatering">');
							$('.modal-body').append('<p id="hargaKat" class="append">Rp. 0</p>');
						}
					}

					$( "#tampil" ).trigger( "click" );
				}else{
					
					swal({
			            title: "Gagal",
			            text: "Pastikan Anda sudah Memilih menu wajib yang tersedia",
			            type: "error",
			            showConfirmButton: true,
			            confirmButtonColor: "#00ff00"
			        })
				}

			})


			$('input[name=jamGedung]').keyup(function () {
				var hargaGedung = $('input[name=gedung]:checked').next().next('.price').val();
				var jam = $('input[name=jamGedung]').val();
				$('#hargaGed').text('Rp. '+$.number(hargaGedung*jam));
				totalGedung = hargaGedung*jam;

			})

			$('input[name=jumlahUndangan]').keyup(function () {
				var hargaUndangan = $('input[name=undangan]:checked').next().next('.price').val();
				var jumlahU = $('input[name=jumlahUndangan]').val();
				$
				$('#hargaUnd').text('Rp. '+$.number(hargaUndangan *jumlahU));
				totalUndangan = hargaUndangan *jumlahU;

			})

			$(document).on('keyup',function () {

				setInterval(function () {
					total= 0;
				var hargaDekor = $('input[name=dekor]:checked').next().next('.price').val();
						if ($('input[name=mc]:checked').val() != null) {
							var hargaMc = $('input[name=mc]:checked').next().next('.price').val();
							$('#hargaMc').text('Rp. '+$.number(hargaMc));
							total += parseInt(hargaMc);
						}
						if ($('input[name=support]:checked').val() != null) {
							var hargaSupport = $('input[name=support]:checked').next().next('.price').val();
							$('#hargaSupport').text('Rp. '+ $.number(hargaSupport));
							total += parseInt(hargaSupport);
						}
						if ($('input[name=fotografer]:checked').val() != null) {
							var hargaFoto = $('input[name=fotografer]:checked').next().next('.price').val();
							$('#hargaFoto').text('Rp. '+$.number(hargaFoto));
							total += parseInt(hargaFoto);
						}
						if ($('input[name=katering]:checked').val() != null) {
							var hargaKatering = $('input[name=katering]:checked').next().next('.price').val();
							var jumlahK = $('input[name=jumlahKatering]').val();
							$('input[name=jumKat]').val($('input[name=jumlahKatering]').val());
							$('#hargaKat').text('Rp. '+ $.number(hargaKatering *jumlahK));
							totalKatering = hargaKatering *jumlahK;
							total += parseInt(totalKatering);
						}
				total += parseInt(hargaDekor);
				total += totalGedung;
				total += totalUndangan;
				$('input[name=totalHarga]').val(total);
				$('#totalHarga').text('Rp .'+$.number(total));
				console.log($('input[name=totalHarga]').val()+" "+total)
				},500)
				
			})

			$( function() {
            $( "#datepicker" ).datepicker({
                dateFormat: "yy-mm-dd",
                monthNames: [ "Januari", "Febuari", "Maret", 
                            "April", "Mei", "Juni", 
                            "Juli", "Agustus", "September", 
                            "Oktober", "November", "December" ],
                dayNamesMin: [ "Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab" ]
                
            });
            
        } );

			
			

			/*setTimeout(function() {
				
			},3000);*/

			


		</script>
	