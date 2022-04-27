<?php

include 'part/header.php';
include 'part/navbar.php';

?>

<!-- Konten -->
	<!-- Container -->
			<div class="clear">

            <div class="breadcrumbs"><div class="inbread">Lokasi Halaman : <span typeof="v:Breadcrumb"><a href="<?= base_url()?>" rel="v:url" property="v:title">Home</a></span> / <span class="current"><?= $title ?></span></div></div><!-- .breadcrumbs -->    
    	<section class="weefirst">
     	    <div class="mas-nav clear">
     	     	<div class="pack-one clear">	
     	     				<?php foreach ($jk as $k) {?>
     	     					
     	     				
						    <div class="we-3">
							    <div class="pack-img">
								    <div class="relimg">
								        										<a href="#">
						        			<img width="150" height="150" src="<?= base_url()?>uploads/kajian/<?= $k->foto?>" class="attachment-thumb size-thumb wp-post-image" loading="lazy" />										</a>
						    		    									</div>
									<div class="dets">
									    <div class="dets-inn">
											<i class="far fa-clock"></i> <?= $k->tanggal?> : <?= $k->jam?>
										</div>
										<h4><a href="morbi-fringilla-quam-jimpedit-gaut-momnis-eccaecati/index.html"><?= $k->nama?></a></h4>
									</div>
								</div>
							</div>
						<?php }?>
		        </div>
		        <div class="inipage clear">
		            
<div class="clear">
	<div class="pagination">
							</div>
</div>		     	</div>
	    	</div>
        </section>
	
		</div>
		<!-- Container -->


<?php include 'part/footer.php';?>
