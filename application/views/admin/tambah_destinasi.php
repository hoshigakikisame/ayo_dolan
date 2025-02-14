<div class="content-wrapper">
    <section class="content-header">
        <h1>Tambah Destinasi</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tambah Data</a></li>
            <li class="active">Tambah Destinasi</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <br>
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Tambah Destinasi</h3>
                    </div>

                    <div class="box-body">
                        <form action="<?php echo base_url(); ?>destinasi/do_add" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Destinasi</label>
                                <input type="text" class="form-control" name="nama_des" placeholder="Masukkan Nama Destinasi">
                            </div>
                            <div class="form-group">
                                <label>Lokasi</label>
                                <input type="text" class="form-control" name="lok_des" placeholder="Masukkan Lokasi">
                            </div>
                            <div class="form-group">
                                <label>Intro Destinasi</label>
                                <textarea class="form-control" rows="3" name="intro_des" placeholder="Masukkan Intro Destinasi"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Gambar Destinasi</label>
                                 <input type="file" name="pic" id="pic" accept="image/*">

                                <!-- <?php echo form_upload('pic'); ?> -->
                            </div>
                            <div class="form-group">
                            <input type="submit" name="submit" value="Tambah">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>
</div>
