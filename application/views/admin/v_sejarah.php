<?php 
include 'part/header.php' ;
include 'part/navbar.php' ;
include 'part/sidebar.php' ;
?>
	<!--Content Start-->
	<div class="content transition">
		<div class="container-fluid dashboard">
				
		<h3>Sejarah</h3>

		<div class="row">
		<?php foreach($profile as $p){?>
			
			
			<!--Start Forms-->
			  <div class="col-sm-12">
				  <div class="card row">
					  <div class="card-header  font-weight-bold mr-auto">
						  <!-- Simple Summernote -->
					  </div>
					  <form action="<?= base_url()?>admin/tentang/sejarah_update"
                                    method="post"
                                    enctype="multipart/form-data">
					  
					  <div class="card-body">
					  <div class="form-group row">
						  <label class="col-sm-1"></label>
						  <div class="col-sm-11">
						  <img class="img-thumbnail" src="<?= base_url()?>uploads/tentang/<?= $p->foto?>" alt="" width="300px">
						  </div>
						</div>
					  
						<div class="form-group row">
						  <label class="col-sm-1">Foto</label>
						  <div class="col-sm-7">
							<input type="file" class="form-control-file" name="foto">
							<input type="hidden" name="foto_old" value="<?= $p->foto?>">
						  </div>
						</div>
						<div class="form-group row ">
						  <label class="col-sm-1">Isi</label>
						  <div class="col-sm-11">
							  <textarea id="editor" class="form-control summernote" cols="100" rows="100" name="isi" ><?= $p->isi ?> </textarea>
						  </div>
						</div>
			
						<div class="form-group row ">
						  <label class="col-sm-1"></label>
						  <div class="col-sm-11">
							<button class="btn btn-primary">Perbarui</button>
						  </div>
						</div>
					  </div>
					  </form>
				  </div>
				</div>
			</div>

		<!--End Start Forms-->
		<?php }?>
        </div>
			

        </div>
    </div>


<?php include 'part/footer.php' ?>
