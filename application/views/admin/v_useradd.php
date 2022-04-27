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
                <h3>Tambah User</h3>
            </div>
            <div class="col-sm-6" align="right">
                <a href="<?= base_url()?>admin/user" class="btn btn-info">
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
                            action="<?= base_url()?>admin/user/store"
                            method="post"
                            enctype="multipart/form-data">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input
                                            type="text"
                                            id="first-name"
                                            class="form-control"
                                            name="nama"
                                            placeholder="Nama Lengkap"
                                            required="required">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input
                                            type="email"
                                            id="email-id"
                                            class="form-control"
                                            name="email"
                                            placeholder="Email"
                                            required="required">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Password</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input
                                            type="password"
                                            id="password"
                                            class="form-control"
                                            name="password"
                                            placeholder="Password"
                                            required="required">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Role</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select class="form-control" name="role">
                                            <option value="admin">Admin</option>
                                            <option value="penulis">Penulis</option>
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
