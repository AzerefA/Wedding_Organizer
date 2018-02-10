
		<div class="container">
			<div class="gallery-grids">
				<section>
					<ul id="da-thumbs" class="da-thumbs">
					<?php foreach($barang as $barangs){?>
						<li>
							<a href="<?php echo base_url() ?>index.php/silver/detil/<?php echo $barangs->id_silver;?>">
								<img src="<?php echo base_url(); ?>uploads/<?php echo $barangs->gambar_silver;?>"/>
								<div>
								<br>
								<br>
								<br>
									<span><h5><?php echo $barangs->nama_silver;?></h5></span>
								</div>
							</a>
						</li>
						<?php } ?>
						
						
					</ul>
				</section>
			</div>
		</div>
	