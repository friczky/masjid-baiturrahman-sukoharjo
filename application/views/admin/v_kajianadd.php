<?php 
include 'part/header.php' ;
include 'part/navbar.php' ;
include 'part/sidebar.php' ;
?>
<!--Content Start-->
<div class="content transition">
    <div class="container-fluid dashboard">
        <div class="row">
            <div class="col-sm-6">
                <h3>Tambah Kajian</h3>
            </div>
            <div class="col-sm-6" align="right">
                <a href="<?= base_url()?>admin/kajian" class="btn btn-info">
                    <i class="fa fa-arrow-left"></i>
                    Kembali</a>
            </div>
        </div>
        <hr>
        <!--Start Form-->
        <div class="col-md-12 col-12">

            <div class="card">
                <div class="card-header"></div>
                <div class="card-content">
                    <div class="card-body">
                        <form
                            action="<?= base_url()?>admin/kajian/store"
                            method="post"
                            enctype="multipart/form-data">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Judul Kajian</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input
                                            type="text"
                                            id="first-name"
                                            class="form-control"
                                            name="nama"
                                            placeholder="Nama Kajian"
                                            required="required">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kategori</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                       <select name="kategori" id="">
									   <option value="Kajian Fiqih">Kajian Fiqih</option>
									   </select><br>
									   <a href="">Tambah Kategori</a>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Deskripsi</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Kajian" id="" cols="10" rows="5"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tanggal</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="date" class="form-control" name="tanggal">
                                    </div>
									<div class="col-md-4">
                                        <label>Jam</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="time" name="jam" class="form-control">
                                    </div>
									<div class="col-md-4">
                                        <label>Tempat</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" placeholder="Lokasi Kajian" name="tempat" class="form-control">
                                    </div>
									<div class="col-md-4">
                                        <label>Peserta</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="peserta" class="" id="">
										<option value="Umum">Umum</option>
										<option value="Akhwat">Akhwat</option>
										<option value="Ikhwan">Ikhwan</option>
										</select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Foto</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="file" class="form-control-file" name="foto" placeholder="foto">
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Simpan</button>
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include 'part/footer.php' ?>
