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
                <h3>Slider</h3>
            </div>
            <div class="col-sm-6" align="right">
                <button
                    type="button"
                    class="btn btn-info"
                    data-toggle="modal"
                    data-target="#tambah">
                    <i class="fa fa-plus"></i>
                    Tambah Slider</button>
            </div>
        </div>
        <hr>
        <div class="col-sm-12">
            <div class="card row">
                <div class="card-body">
                    <table id="example" class="display text-center responsive" style="width:100%">
                        <thead>
                            <tr>
                                <th style="color: black;">No</th>
                                <th style="color: black;">Nama</th>
                                <th style="color: black;">Deskripsi</th>
                                <!-- <th style="color: black;">Password</th> -->
                                <th style="color: black;">Foto</th>
                                <!-- <th style="color: black;">Foto</th> -->
                                <th style="color: black;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no =1 ; foreach ($slider as $u) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $u->nama ?></td>
                                <td><?= $u->deskripsi ?></td>
                                <td><img width="50px" src="<?= base_url('uploads/slider/')?><?= $u->foto ?>" alt=""></td>
                                <td>
                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-toggle="modal"
                                        data-target="#edit<?= $u->id ?>">
                                        <i class="fa fa-pen-square"></i>
                                        Ubah</button>
                                    |
                                    <button
                                        type="button"
                                        class="btn btn-danger"
                                        data-toggle="modal"
                                        data-target="#hapus<?= $u->id ?>">
                                        <i class="fa fa-trash"></i>
                                        Hapus</button>
                                </tr>
                                <?php } ?>
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tambah Slider -->

        <div
            class="modal fade"
            id="tambah"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">Tambah Data Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                id="home-tab"
                                data-toggle="tab"
                                href="#home"
                                role="tab"
                                aria-controls="home"
                                aria-selected="true">Data Slider</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div
                            class="tab-pane fade show active"
                            id="home"
                            role="tabpanel"
                            aria-labelledby="home-tab">
                            <br>
                            <div class="container">
                                <form
                                    action="<?= base_url()?>admin/slider/store"
                                    method="post"
                                    enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input
                                                    type="text"
                                                    id="first-name"
                                                    class="form-control"
                                                    name="nama"
                                                    required="required">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Deskripsi</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input
                                                    type="text"
                                                    id="email-id"
                                                    class="form-control"
                                                    name="deskripsi"
                                                    required="required">
                                            </div>

                                            <div class="col-md-4">
                                                <label>Foto</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="file" class="form-control-file" name="foto">

                                            </div>
                                            <div class="col-md-4"></div>
                                            <div class="col-md-8 form-group">
                                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div><br>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Modal Tambah Slider -->

    <!-- Modal Edit User -->
    <?php $no =1 ; foreach ($slider as $u) { ?>
    <div
        class="modal fade"
        id="edit<?= $u->id?>"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data :
                        <?= $u->nama?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                id="home-tab"
                                data-toggle="tab"
                                href="#home<?= $u->id ?>"
                                role="tab"
                                aria-controls="home"
                                aria-selected="true">Data User</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div
                            class="tab-pane fade show active"
                            id="home<?= $u->id ?>"
                            role="tabpanel"
                            aria-labelledby="home-tab">
                            <br>
                            <div class="container">
							<div class="form-body">
							<div class="row">
							<div class="col-sm-4">
							</div>
							<div class="col-sm-8">
							<img class="img-thumbnail" width="200px" src="<?= base_url('uploads/slider/')?><?= $u->foto ?>" alt=""></div>
							</div></div><br>
							
                                <form
                                    action="<?= base_url()?>admin/slider/update/<?= $u->id?>"
                                    method="post"
                                    enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nama Slider</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input
                                                    type="text"
                                                    id="first-name"
                                                    class="form-control"
                                                    name="nama"
                                                    value="<?= $u->nama ?>"
                                                    required="required">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Deskripsi</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input
                                                    type="text"
                                                    id=""
                                                    class="form-control"
                                                    name="deskripsi"
                                                    value="<?= $u->deskripsi ?>"
                                                    required="required">
                                            </div>

                                            <div class="col-md-4">
                                                <label>Foto</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="file" class="form-control-file" name="foto">
                                                <input type="hidden" name="foto_old" value="<?= $u->foto ?>">
                                            </div>
                                            <div class="col-md-4"></div>
                                            <div class="col-md-8 form-group">
                                                <button type="submit" class="btn btn-primary">Ubah Data</button>
                                            </div>

                                        </div>
									
                                    </div>
                                </form>
                            </div><br>
                        </div>
                       
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
    <?php }?>

    <!-- Akhir Modal Edit -->

    <!-- Modal Hapus -->
    <?php $no =1 ; foreach ($slider as $u) { ?>
    <div
        class="modal fade"
        id="hapus<?= $u->id ?>"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data :
                        <?= $u->nama ?>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Ingin menghapus data
                    <b><?= $u->nama ?></b>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <a
                        href="<?= base_url()?>admin/slider/delete/<?= $u->id ?>"
                        class="btn btn-danger">Ya</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php }?>

    <!-- Akhir Modal Hapus -->

    <?php include 'part/footer.php' ?>
