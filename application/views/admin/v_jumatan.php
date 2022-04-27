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
                <h3>Jumatan</h3>
            </div>
            <div class="col-sm-6" align="right">
                <a href="#tambahjumatan" class="btn btn-info" data-toggle="modal"
                                        data-target="#tambahjumatan">
                    <i class="fa fa-plus"></i>
                    Tambah Jumatan</a>
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
                                <th style="color: black;">Imam</th>
                                <th style="color: black;">Khatib</th>
                                <th style="color: black;">Muadzin</th>
                                <th style="color: black;">Bilal</th>
                                <th style="color: black;">Tanggal</th>
                                <th style="color: black;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no =1 ; foreach ($jumat as $u) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $u->imam ?></td>
                                <td><?= $u->khatib ?></td>
                                <td><?= $u->muazdin ?></td>
                                <td><?= $u->bilal ?></td>
                                <td><?= $u->tanggal ?></td>
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
    </div>

    <!-- Modal Tambah User -->

    <div
        class="modal fade"
        id="tambahjumatan"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Jumatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                    <div class="tab-content" id="myTabContent">
                        <div
                            class="tab-pane fade show active"
                            id="home1"
                            role="tabpanel"
                            aria-labelledby="home-tab">
                            <br>
                            <div class="container">
                                <form
                                    action="<?= base_url()?>admin/jumatan/store"
                                    method="post"
                                    enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Imam</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input
                                                    type="text"
                                                    id="first-name"
                                                    class="form-control"
                                                    name="imam"
                                                    placeholder="Masukan Nama Imam"
                                                    required="required">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Khatib</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input
                                                    type="text"
                                                    id="first-name"
                                                    class="form-control"
                                                    name="khatib"
                                                   placeholder="Masukan Nama Khatib"
                                                    required="required">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Muazdin</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input
                                                    type="text"
                                                    id="first-name"
                                                    class="form-control"
                                                    name="muazdin"
                                                    placeholder="Masukan Nama Muazdin"
                                                    required="required">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Bilal</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input
                                                    type="text"
                                                    id="first-name"
                                                    class="form-control"
                                                    name="bilal"
                                                    placeholder="Masukan Nama Bilal"
                                                    required="required">
                                            </div>
                        
                                    <div class="col-md-4">
                                        <label>Tanggal</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" onfocus="(this.type='date')" class="form-control" 
                                        placeholder="Klik Untuk Masukan Tanggal" 
                                        name="tanggal">
                                    </div>
                                    
                                            <div class="col-md-4"></div>
                                            <div class="col-md-8 form-group">
                                                <button type="submit" class="btn btn-primary">Tambah Data</button>
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
    </div>

    <!-- Akhir Modal Edit -->

    <!-- Modal Edit User -->
    <?php $no =1 ; foreach ($jumat as $u) { ?>
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
                        <?= $u->imam?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                    <div class="tab-content" id="myTabContent">
                        <div
                            class="tab-pane fade show active"
                            id="home<?= $u->id ?>"
                            role="tabpanel"
                            aria-labelledby="home-tab">
                            <br>
                            <div class="container">
                                <form
                                    action="<?= base_url()?>admin/jumatan/update/<?= $u->id?>"
                                    method="post"
                                    enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Imam</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input
                                                    type="text"
                                                    id="first-name"
                                                    class="form-control"
                                                    name="imam"
                                                    value="<?= $u->imam ?>"
                                                    required="required">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Khatib</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input
                                                    type="text"
                                                    id="first-name"
                                                    class="form-control"
                                                    name="khatib"
                                                    value="<?= $u->khatib ?>"
                                                    required="required">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Muazdin</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input
                                                    type="text"
                                                    id="first-name"
                                                    class="form-control"
                                                    name="muazdin"
                                                    value="<?= $u->muazdin ?>"
                                                    required="required">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Bilal</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input
                                                    type="text"
                                                    id="first-name"
                                                    class="form-control"
                                                    name="bilal"
                                                    value="<?= $u->bilal ?>"
                                                    required="required">
                                            </div>
                        
                                    <div class="col-md-4">
                                        <label>Tanggal</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" onfocus="(this.type='date')" value="<?= $u->tanggal?>" class="form-control" name="tanggal">
                                    </div>
									
                                           

                                        </div>
                                    </div>
                                </form>
                            </div>
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
    <?php $no =1 ; foreach ($jumat as $u) { ?>
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
                        <?= $u->imam ?>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Ingin menghapus data
                    <b><?= $u->imam ?></b>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <a
                        href="<?= base_url()?>admin/jumatan/delete/<?= $u->id ?>"
                        class="btn btn-danger">Ya</a>
                </div>
            </div>
        </div>
    </div>
    <?php }?>

    <!-- Akhir Modal Hapus -->

    <?php include 'part/footer.php' ?>
