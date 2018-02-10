<script type="text/javascript">
		if ('<?php echo $this->session->flashdata('notif');?>' == 'Tanggal Ngawur') {
		swal({
            title: "Pinjam Gagal",
            text: "<?php echo $this->session->flashdata('msg'); ?>",
            type: "error",
            showConfirmButton: true,
            confirmButtonColor: "#00ff00"
        })
	}

	if ('<?php echo $this->session->flashdata('notif');?>' == 'validation') {
		
		swal({
            title: "Pinjam Gagal",
            text: "Pastikan Form sudah terisi Semua",
            type: "error",
            showConfirmButton: true,
            confirmButtonColor: "#00ff00"
        })


	}

</script>