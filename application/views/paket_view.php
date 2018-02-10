
		<div class="container">
			<table class="form">
				<tbody>
				
				<?php 
					$barangs = $barang->result_array();
					$data = $this->session->userdata('userData');
				 ?>
					<tr>
						<td><span>Gedung</span></td>
						<td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="">Preview</span></button></td>
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	                        <div class="modal-dialog">
	                        	 
		                            <div class="modal-content">
		                                <div class="modal-header">								
		                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                                    <h4 class="modal-title" id="myModalLabel">Preview Gedung</h4>
		                                </div>
		                                <div class="modal-body">
				                        	<img id="preview" onerror="this.src='<?php echo base_url();?>assets/images/404.png'" src="<?php echo base_url(); ?>uploads/<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumGedung' || $barangs[$i]['kategori_barang'] == 'GoldGedung' || $barangs[$i]['kategori_barang'] == 'SilverGedung') {
				                        			echo $barangs[$i]['gambar_barang'];
				                        		}
				                        	}?>" alt="Your Image">
				                        	<p>
				                        		<?php 

				                        		for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumGedung' || $barangs[$i]['kategori_barang'] == 'GoldGedung' || $barangs[$i]['kategori_barang'] == 'SilverGedung') {
				                        			echo $barangs[$i]['nama_barang'];
				                        			}
				                        			} ?>
				                        	</p>
		                                </div>
		                                <div class="modal-body">
				                        
				                        	<p>
				                        		<?php 

				                        		for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumGedung' || $barangs[$i]['kategori_barang'] == 'GoldGedung' || $barangs[$i]['kategori_barang'] == 'SilverGedung') {
				                        			echo $barangs[$i]['deskripsi_barang'];
				                        			}
				                        			} ?>
				                        	</p>
		                                </div>
		                                <div class="modal-footer">
		                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                                </div>
		                            </div>
	                            
	                            <!-- /.modal-content -->
	                        </div>
	                        <!-- /.modal-dialog -->
	                    </div>
					</tr>

					<tr>
						<td><span>Dekorasi</span></td>
						<td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal2"><span class="">Preview</span></button></td>
						<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	                        <div class="modal-dialog">
	                        	 
		                            <div class="modal-content">
		                                <div class="modal-header">
		                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                                    <h4 class="modal-title" id="myModalLabel">Preview Dekorasi</h4>
		                                </div>
		                                <div class="modal-body">
				                        	<img id="preview" onerror="this.src='<?php echo base_url();?>assets/images/404.png'" src="<?php echo base_url(); ?>uploads/<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumDekor' || $barangs[$i]['kategori_barang'] == 'GoldDekor' || $barangs[$i]['kategori_barang'] == 'SilverDekor') {
				                        			echo $barangs[$i]['gambar_barang'];
				                        		}
				                        	}?>" alt="Your Image">
				                        	<p>
				                        	<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumDekor' || $barangs[$i]['kategori_barang'] == 'GoldDekor' || $barangs[$i]['kategori_barang'] == 'SilverDekor') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>
				                        	</p>
		                                </div>
		                                <div class="modal-body">
				                  
				                        	<p>
				                        	<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumDekor' || $barangs[$i]['kategori_barang'] == 'GoldDekor' || $barangs[$i]['kategori_barang'] == 'SilverDekor') {
				                        			echo $barangs[$i]['deskripsi_barang'];
				                        		}
				                        	}?>
				                        	</p>
		                                </div>
		                                <div class="modal-footer">
		                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                                </div>
		                            </div>
	                            
	                            <!-- /.modal-content -->
	                        </div>
	                        <!-- /.modal-dialog -->
	                    </div>
					</tr>

					<tr>
						<td><span>Undangan</span></td>
						<td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal3"><span class="">Preview</span></button></td>
						<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	                        <div class="modal-dialog">
	                        	 
		                            <div class="modal-content">
		                                <div class="modal-header">
		                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                                    <h4 class="modal-title" id="myModalLabel">Preview Undangan</h4>
		                                </div>
		                                <div class="modal-body">
				                        	<img id="preview" onerror="this.src='<?php echo base_url();?>assets/images/404.png'" src="<?php echo base_url(); ?>uploads/<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumUndangan' || $barangs[$i]['kategori_barang'] == 'GoldUndangan' ||$barangs[$i]['kategori_barang'] == 'SilverUndangan') {
				                        			echo $barangs[$i]['gambar_barang'];
				                        		}
				                        	}?>" alt="Your Image">
				                        	<p>
				                        	<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumUndangan' || $barangs[$i]['kategori_barang'] == 'GoldUndangan' ||$barangs[$i]['kategori_barang'] == 'SilverUndangan') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>
				                        	</p>
		                                </div>
		                                 <div class="modal-body">
				                        	
				                        	<p>
				                        	<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumUndangan' || $barangs[$i]['kategori_barang'] == 'GoldUndangan' ||$barangs[$i]['kategori_barang'] == 'SilverUndangan') {
				                        			echo $barangs[$i]['deskripsi_barang'];
				                        		}
				                        	}?>
				                        	</p>
		                                </div>
		                                <div class="modal-footer">
		                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                                </div>
		                            </div>
	                            
	                            <!-- /.modal-content -->
	                        </div>
	                        <!-- /.modal-dialog -->
	                    </div>
					</tr>

					<tr>
						<td><span>Fotografer</span></td>
						<td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal4"><span class="">Preview</span></button></td>
						<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	                        <div class="modal-dialog">
	                        	 
		                            <div class="modal-content">
		                                <div class="modal-header">
		                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                                    <h4 class="modal-title" id="myModalLabel">Preview Fotografer</h4>
		                                </div>
		                                <div class="modal-body">
				                        	<img id="preview" onerror="this.src='<?php echo base_url();?>assets/images/404.png'" src="<?php echo base_url(); ?>uploads/<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumPhotographer' || $barangs[$i]['kategori_barang'] == 'GoldPhotographer' ||$barangs[$i]['kategori_barang'] == 'SilverPhotographer') {
				                        			echo $barangs[$i]['gambar_barang'];
				                        		}
				                        	}?>" alt="Your Image">
				                        	<p>
				                        	<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumPhotographer' || $barangs[$i]['kategori_barang'] == 'GoldPhotographer' ||$barangs[$i]['kategori_barang'] == 'SilverPhotographer') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>
				                        	</p>
		                                </div>
		                                <div class="modal-body">
				                        	
				                        	<p>
				                        	<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumPhotographer' || $barangs[$i]['kategori_barang'] == 'GoldPhotographer' ||$barangs[$i]['kategori_barang'] == 'SilverPhotographer') {
				                        			echo $barangs[$i]['deskripsi_barang'];
				                        		}
				                        	}?>
				                        	</p>
		                                </div>
		                                <div class="modal-footer">
		                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                                </div>
		                            </div>
	                            
	                            <!-- /.modal-content -->
	                        </div>
	                        <!-- /.modal-dialog -->
	                    </div>
					</tr>

					<tr>
						<td><span>Katering</span></td>
						<td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal5"><span class="">Preview</span></button></td>
						<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	                        <div class="modal-dialog">
	                        	 
		                            <div class="modal-content">
		                                <div class="modal-header">
		                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                                    <h4 class="modal-title" id="myModalLabel">Preview Paket Katering</h4>
		                                </div>
		                                <div class="modal-body">
				                        	<img id="preview" onerror="this.src='<?php echo base_url();?>assets/images/404.png'" src="<?php echo base_url(); ?>uploads/<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumCatering' || $barangs[$i]['kategori_barang'] == 'GoldCatering' ||$barangs[$i]['kategori_barang'] == 'SilverCatering') {
				                        			echo $barangs[$i]['gambar_barang'];
				                        		}
				                        	}?>" alt="Your Image">
				                        	<p>
				                        	<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumCatering' || $barangs[$i]['kategori_barang'] == 'GoldCatering' ||$barangs[$i]['kategori_barang'] == 'SilverCatering') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>
				                        	</p>
		                                </div>
		                                 <div class="modal-body">
				                        	
				                        	<p>
				                        	<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumCatering' || $barangs[$i]['kategori_barang'] == 'GoldCatering' ||$barangs[$i]['kategori_barang'] == 'SilverCatering') {
				                        			echo $barangs[$i]['deskripsi_barang'];
				                        		}
				                        	}?>
				                        	</p>
		                                </div>
		                                <div class="modal-footer">
		                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                                </div>
		                            </div>
	                            
	                            <!-- /.modal-content -->
	                        </div>
	                        <!-- /.modal-dialog -->
	                    </div>
					</tr>

					<tr>
						<td><span>Pembawa Acara</span></td>
						<td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal6"><span class="">Preview</span></button></td>
						<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	                        <div class="modal-dialog">
	                        	 
		                            <div class="modal-content">
		                                <div class="modal-header">
		                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                                    <h4 class="modal-title" id="myModalLabel">Preview Pembawa Acara</h4>
		                                </div>
		                                <div class="modal-body">
				                        	<img id="preview" onerror="this.src='<?php echo base_url();?>assets/images/404.png'" src="<?php echo base_url(); ?>uploads/<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumMC' || $barangs[$i]['kategori_barang'] == 'GoldMC' ||$barangs[$i]['kategori_barang'] == 'SilverMC') {
				                        			echo $barangs[$i]['gambar_barang'];
				                        		}
				                        	}?>" alt="Your Image">
				                        	<p>
				                        	<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumMC' || $barangs[$i]['kategori_barang'] == 'GoldMC' ||$barangs[$i]['kategori_barang'] == 'SilverMC') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>
				                        	</p>
		                                </div>
		                                 <div class="modal-body">
				                        	
				                        	<p>
				                        	<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumMC' || $barangs[$i]['kategori_barang'] == 'GoldMC' ||$barangs[$i]['kategori_barang'] == 'SilverMC') {
				                        			echo $barangs[$i]['deskripsi_barang'];
				                        		}
				                        	}?>
				                        	</p>
		                                </div>
		                                <div class="modal-footer">
		                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                                </div>
		                            </div>
	                            
	                            <!-- /.modal-content -->
	                        </div>
	                        <!-- /.modal-dialog -->
	                    </div>
					</tr>

					<tr>
						<td><span>Pengisi Acara</span></td>
						<td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal7"><span class="">Preview</span></button></td>
						<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	                        <div class="modal-dialog">
	                        	 
		                            <div class="modal-content">
		                                <div class="modal-header">
		                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                                    <h4 class="modal-title" id="myModalLabel">Preview Pengisi Acara</h4>
		                                </div>
		                                <div class="modal-body">
				                        	<img id="preview" onerror="this.src='<?php echo base_url();?>assets/images/404.png'" src="<?php echo base_url(); ?>uploads/<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumSupport' || $barangs[$i]['kategori_barang'] == 'GoldSupport' ||$barangs[$i]['kategori_barang'] == 'SilverSupport') {
				                        			echo $barangs[$i]['gambar_barang'];
				                        		}
				                        	}?>" alt="Your Image">
				                        	<p>
				                        	<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumSupport' || $barangs[$i]['kategori_barang'] == 'GoldSupport' ||$barangs[$i]['kategori_barang'] == 'SilverSupport') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>
				                        	</p>
		                                </div>
		                                 <div class="modal-body">
				                        	
				                        	<p>
				                        	<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumSupport' || $barangs[$i]['kategori_barang'] == 'GoldSupport' ||$barangs[$i]['kategori_barang'] == 'SilverSupport') {
				                        			echo $barangs[$i]['deskripsi_barang'];
				                        		}
				                        	}?>
				                        	</p>
		                                </div>
		                                <div class="modal-footer">
		                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                                </div>
		                            </div>
	                            
	                            <!-- /.modal-content -->
	                        </div>
	                        <!-- /.modal-dialog -->
	                    </div>
					</tr>
					
					<tr>
						<td></td>
						<td>
							<button class="paket" style="border-radius: 6px; border: none; outline: none">
								<span class="fa fa-arrow-down fa-fw fa-rotate-180"></span>
							</button>
						</td>
						
					</tr>
				</tbody>
			</table>
				<table class="form forms form-hide">
					<tbody>
					<form action="<?php echo base_url();?>index.php/pinjam/pinjams" method="post">

					<tr>
						<td><span>Nama Lengkap</span></td>
						<td><input type="text" name="" value="<?php echo $data['first_name']." ".$data['last_name']; ?>" disabled placeholder=" Nama Lengkap"></td>
					</tr>

					<tr>
						<td><span>Alamat</span></td>
						<td><input type="text" name="alamat" value="" placeholder=" Alamat Pemesan"></td>
						<td align="left">&nbsp*</td>
					</tr>
					
					<tr>
						<td><span>Nomor KTP</span></td>
						<td><input type="text" name="ktp" value="" placeholder=" NomorKTP anda"></td>
						<td align="left">&nbsp*</td>
					</tr>


					<tr>
						<td><span>Pembawa Acara</span></td>
						<td><input type="text" name="" value="  <?php for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumMC' || $barangs[$i]['kategori_barang'] == 'GoldMC' || $barangs[$i]['kategori_barang'] == 'SilverMC') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>
						" disabled placeholder=" Nama mc"></td>
					</tr>


					<tr>
						<td><span>Pengisi Acara</span></td>
						<td><input type="text" name="" value="  <?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumSupport' || $barangs[$i]['kategori_barang'] == 'GoldSupport' || $barangs[$i]['kategori_barang'] == 'SilverSupport') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>" disabled placeholder=" Nama Pengisi"></td>
					</tr>

					<tr>
						<td><span>Fotografer</span></td>
						<td><input type="text" name="" value="  <?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumPhotographer' || $barangs[$i]['kategori_barang'] == 'GoldPhotographer' || $barangs[$i]['kategori_barang'] == 'SilverPhotographer') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>" disabled placeholder=" Fotografer"></td>
					</tr>

					<tr>
						<td><span>Katering</span></td>
						<td><input type="text" name="" value="  <?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumCatering' || $barangs[$i]['kategori_barang'] == 'GoldCatering' || $barangs[$i]['kategori_barang'] == 'SilverCatering') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>" disabled placeholder=" Katering"></td>
					</tr>
					<tr>
						<td><span>Waktu Sewa</span></td>
						<td><input type="text" name="jamGedung" value="" min="0" max="24" placeholder=" per Jam"></td>
						<td align="left">&nbsp*</td>
					</tr>

					<tr>
						<td><span>Jumlah Undangan</span></td>
						<td><input type="text" name="jumlahUndangan" value="" min="0" placeholder=" Buah"></td>
						<td align="left">&nbsp*</td>
					</tr>

					<tr>
						<td><span>Jumlah Katering</span></td>
						<td><input type="text" name="jumKat" value="" min="0" placeholder=" Porsi"></td>
						<td align="left">&nbsp*</td>
					</tr>
					<tr>
						<td><span>Tanggal Acara</span></td>
						<td><input type="text" name="tanggal_acara" value="" id="tanggal_acara" placeholder=" Tanggal Acara"></td>
						<td align="left">&nbsp*</td>
					</tr>

					<tr>
						<td>
							<span>Total harga :</span>
						</td>
						<td >
							<span id="totalHarga"></span>
						</td>
						<td colspan="2">
							<input type="submit" class="button-paket" name="submit" value="Lanjut pesan">
						</td>
					</tr>
				</tbody>
			</table>

			<script type="text/javascript">
				$(document).ready(function() {
					$("button.paket").click(function(){
						if ($("table.forms").hasClass("form-hide")) {
							$("span.fa").removeClass("fa-rotate-180");
							$("table.forms").removeClass("form-hide");
						}else{
							$("span.fa").addClass("fa-rotate-180");
							$("table.forms").addClass("form-hide");
						}
					});
				});
			</script>

			<table class="form hidden">
				<tbody>
					<tr>
						<td><span>Nama Lengkap</span></td>
						<td><input type="text" name="nama" value="<?php echo $data['first_name']." ".$data['last_name']; ?>" placeholder=" Nama mc"></td>
					</tr>
					<tr>
						<td><span>Gedung</span></td>
						<td><input type="text" name="gedung" value="<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumGedung' || $barangs[$i]['kategori_barang'] == 'GoldGedung' || $barangs[$i]['kategori_barang'] == 'SilverGedung') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>"  placeholder=" Nama mc"></td>
					</tr>

					<tr>
						<td><span>Gedung</span></td>
						<td><input type="text" name="undangan" value="<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumUndangan' || $barangs[$i]['kategori_barang'] == 'GoldUndangan' ||$barangs[$i]['kategori_barang'] == 'SilverUndangan') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>"  placeholder=" Nama mc"></td>
					</tr>

					<tr>
						<td><span>Gedung</span></td>
						<td><input type="text" name="dekor" value="<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumDekor' || $barangs[$i]['kategori_barang'] == 'GoldDekor' || $barangs[$i]['kategori_barang'] == 'SilverDekor') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>"  placeholder=" Nama mc"></td>
					</tr>
					<tr>
						<td><span>Pembawa Acara</span></td>
						<td><input type="text" name="mc" value="<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumMC' || $barangs[$i]['kategori_barang'] == 'GoldMC' || $barangs[$i]['kategori_barang'] == 'SilverMC') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>"  placeholder=" Nama mc"></td>
					</tr>
					<tr>
						<td><span>Pengisi Acara</span></td>
						<td><input type="text" name="support" value="<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumSupport' || $barangs[$i]['kategori_barang'] == 'GoldSupport' || $barangs[$i]['kategori_barang'] == 'SilverSupport') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>" placeholder=" Nama Pengisi"></td>
					</tr>
					<tr>
						<td><span>Fotografer</span></td>
						<td><input type="text" name="fotografer" value="<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumPhotographer' || $barangs[$i]['kategori_barang'] == 'GoldPhotographer' || $barangs[$i]['kategori_barang'] == 'SilverPhotographer') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>" placeholder=" Fotografer"></td>
					</tr>
					<tr>
						<td><span>Katering</span></td>
						<td><input type="text" name="katering" value="<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumCatering' || $barangs[$i]['kategori_barang'] == 'GoldCatering' || $barangs[$i]['kategori_barang'] == 'SilverCatering') {
				                        			echo $barangs[$i]['nama_barang'];
				                        		}
				                        	}?>" placeholder=" Katering"></td>
					</tr>

					<tr>
						<td><span>harga katering</span></td>
						<td><input type="text" name="harga_kat" value="<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumCatering' || $barangs[$i]['kategori_barang'] == 'GoldCatering' || $barangs[$i]['kategori_barang'] == 'SilverCatering') {
				                        			echo $barangs[$i]['harga_barang'];
				                        		}
				                        	}?>" placeholder=" Katering"></td>
					</tr>

					<tr>
						<td><span>harga undangan</span></td>
						<td><input type="text" name="harga_undangan" value="<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumUndangan' || $barangs[$i]['kategori_barang'] == 'GoldUndangan' ||$barangs[$i]['kategori_barang'] == 'SilverUndangan') {
				                        			echo $barangs[$i]['harga_barang'];
				                        		}
				                        	}?>"></td>
					</tr>

					<tr>
						<td><span>harga gedung</span></td>
						<td><input type="text" name="harga_gedung" value="<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumGedung' || $barangs[$i]['kategori_barang'] == 'GoldGedung' || $barangs[$i]['kategori_barang'] == 'SilverGedung') {
				                        			echo $barangs[$i]['harga_barang'];
				                        		}
				                        	}?>"></td>
					</tr>

					<tr>
						<td><span>harga support</span></td>
						<td><input type="text" name="harga_supp" value="<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumSupport' || $barangs[$i]['kategori_barang'] == 'GoldSupport' || $barangs[$i]['kategori_barang'] == 'SilverSupport') {
				                        			echo $barangs[$i]['harga_barang'];
				                        		}
				                        	}?>"></td>
					</tr>

					<tr>
						<td><span>harga mc</span></td>
						<td><input type="text" name="harga_mc" value="<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumMC' || $barangs[$i]['kategori_barang'] == 'GoldMC' || $barangs[$i]['kategori_barang'] == 'SilverMC') {
				                        			echo $barangs[$i]['harga_barang'];
				                        		}
				                        	}?>"></td>
					</tr>

					<tr>
						<td><span>harga dekorasi</span></td>
						<td><input type="text" name="harga_dekor" value="<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumDekor' || $barangs[$i]['kategori_barang'] == 'GoldDekor' || $barangs[$i]['kategori_barang'] == 'SilverDekor') {
				                        			echo $barangs[$i]['harga_barang'];
				                        		}
				                        	}?>"></td>
					</tr>

					<tr>
						<td><span>harga foto</span></td>
						<td><input type="text" name="harga_foto" value="<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumPhotographer' || $barangs[$i]['kategori_barang'] == 'GoldPhotographer' || $barangs[$i]['kategori_barang'] == 'SilverPhotographer') {
				                        			echo $barangs[$i]['harga_barang'];
				                        		}
				                        	}?>"></td>
					</tr>
					<input type="hidden" name="totalHarga">
					<input type="hidden" name="from" value="<?php 
				                        	for ($i=0; $i < count($barangs); $i++) { 
				                        		if ($barangs[$i]['kategori_barang'] == 'PlatinumUndangan') {
				                        			echo "platinum";
				                        		}
				                        		if ($barangs[$i]['kategori_barang'] == 'GoldUndangan') {
				                        			echo "gold";
				                        		}
				                        		if ($barangs[$i]['kategori_barang'] == 'SilverUndangan') {
				                        			echo "silver";
				                        		}
				                        	}?>">


					
						
					</form>


					<tr>
						<td colspan="2">
							<a href="">
								<button class="button-pesan">Pesan Sekarang</button>
							</a>
						</td>

					</tr>
				</tbody>
			</table>
			<script type="text/javascript">
				$(document).ready(function() {
					$("button.button-paket").click(function(){
						$("table.hidden").removeClass("hidden");
					})

					setInterval(function() {
						var total = 0;
						var totalGedung = 0;
						var totalUnd = 0;
						var totalKat = 0;

						var hargaUndangan = $('input[name="harga_undangan"]').val();
						var hargaDekor = $('input[name="harga_dekor"]').val();
						var hargaGedung = $('input[name="harga_gedung"]').val();
						var hargaKatering = $('input[name="harga_kat"]').val();
						var hargaSupp = $('input[name="harga_supp"]').val();
						var hargaMC = $('input[name="harga_mc"]').val();
						var hargaFoto = $('input[name="harga_foto"]').val();
						var jamGedung = $('input[name="jamGedung"]').val();
						var jumlahUnd = $('input[name="jumlahUndangan"]').val();
						var jumlahKat = $('input[name="jumKat"]').val();

						totalGedung = parseInt(jamGedung * hargaGedung);
						totalUnd = parseInt(jumlahUnd * hargaUndangan);
						totalKat = parseInt(jumlahKat * hargaKatering);

						total += totalUnd;
						total += totalKat;
						total += totalGedung;
						total += parseInt(hargaMC);
						total += parseInt(hargaSupp);
						total += parseInt(hargaDekor);
						total += parseInt(hargaFoto);

						$('input[name="totalHarga"]').val(total);
						$('#totalHarga').text('Rp. '+ $.number(total));
						console.log($('input[name="totalHarga"]').val() +" "+total)
					},500)
				});

			$( function() {
            $( "#tanggal_acara" ).datepicker({
                dateFormat: "yy-mm-dd",
                monthNames: [ "Januari", "Febuari", "Maret", 
                            "April", "Mei", "Juni", 
                            "Juli", "Agustus", "September", 
                            "Oktober", "November", "December" ],
                dayNamesMin: [ "Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab" ]
                
            });
            $
            
        } );
			</script>
		</div>
	