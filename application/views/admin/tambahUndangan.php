<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tanbah Undangan
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Undangan</li>
        </ol>
    </section>

    <div class="content">
        <h4>Tambah Undangan</h4>
        <div>
            <form method="post" action="#">
                <input type="file" name="udamgan" id="udanganInput">
                <img id="preview" src="#"><br>
                </i><input type="submit" name="submit" value="+ Tambah" class="btn btn-success">
            </form>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Harga Barang</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td><img id="myImg" src="<?php echo base_url();?>assets/image/mas fad.png" alt="mas fad" width="300" height="200"></td>
                        <td><img id="myImg" src="<?php echo base_url();?>assets/image/json.png" alt="kklkl fad" width="300" height="200"</td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal">
        <span class="closeModal">&times;</span>
        <img class="modal-content" id="img01">
        <div id="captionModal"></div>
    </div>

    <!-- Main content -->


    <!-- /.content -->
</div>