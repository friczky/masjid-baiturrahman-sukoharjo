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
                <h3>Kajian</h3>
            </div>
            <div class="col-sm-6" align="right">
                <a href="<?= base_url()?>admin/kajian/add" class="btn btn-info">
                    <i class="fa fa-plus"></i>
                    Tambah Kajian</a>
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
                                <th style="color: black;">Kategori</th>
                                <th style="color: black;">Tanggal</th>
                                <th style="color: black;">Jam</th>
                                <th style="color: black;">Tempat</th>
								<th style="color: black;">Peserta</th>
                                <th style="color: black;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no =1 ; foreach ($user as $u) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $u->nama ?></td>
                                <td><?= $u->kategori ?></td>
                                <td><?= $u->tanggal ?></td>
                                <td><?= $u->jam ?></td>
                                <td><?= $u->tempat ?></td>
								<td><?= $u->peserta ?></td>
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

    <!-- Modal Edit User -->
    <?php $no =1 ; foreach ($user as $u) { ?>
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
                   
                    <div class="tab-content" id="myTabContent">
                        <div
                            class="tab-pane fade show active"
                            id="home<?= $u->id ?>"
                            role="tabpanel"
                            aria-labelledby="home-tab">
                            <br>
                            <div class="container">
                                <form
                                    action="<?= base_url()?>admin/kajian/update/<?= $u->id?>"
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
                                                    value="<?= $u->nama ?>"
                                                    required="required">
                                            </div>
                                            <div class="col-md-4">
                                        <label>Kategori</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                       <select name="kategori" id="">
									   <option value="<?= $u->kategori?>"><?= $u->kategori?> (Sebelumnya)</option>
									   <option value="Kajian Fiqih">Kajian Fiqih</option>
									   </select><br>
									   <a href="">Tambah Kategori</a>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Deskripsi</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Kajian" id="" cols="10" rows="5"><?= $u->deskripsi?></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tanggal</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" onfocus="(this.type='date')" value="<?= $u->tanggal?>" class="form-control" name="tanggal">
                                    </div>
									<div class="col-md-4">
                                        <label>Jam</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" onfocus="(this.type='time')" value="<?= $u->jam?>" name="jam" class="form-control">
                                    </div>
									<div class="col-md-4">
                                        <label>Tempat</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" placeholder="Lokasi Kajian" value="<?= $u->tempat?>" name="tempat" class="form-control">
                                    </div>
									<div class="col-md-4">
                                        <label>Peserta</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="peserta" class="" id="">
										<option value="<?= $u->peserta?>"><?= $u->peserta?> (Sebelumnya)></option>
										<option value="Umum">Umum</option>
										<option value="Akhwat">Akhwat</option>
										<option value="Ikhwan">Ikhwan</option>
										</select>
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
    <?php $no =1 ; foreach ($user as $u) { ?>
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
                        href="<?= base_url()?>admin/kajian/delete/<?= $u->id ?>"
                        class="btn btn-danger">Ya</a>
                </div>
            </div>
        </div>
    </div>
    <?php }?>

    <!-- Akhir Modal Hapus -->

    <?php include 'part/footer.php' ?>
