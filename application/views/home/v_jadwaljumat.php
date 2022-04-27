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
		            
	<div id="loop" class="mas-nav clear">
	    <div class="arcin">
	    	<div class="lap-infaq">
	        	<table class="infaq">
		        	<tr class="inhead">
				        <td><strong>TGL</strong></td>
			    		<td><strong>IMAM</strong></td>
				    	<td><strong>KHATIB</strong></td>
				    	<td><strong>MUAZDIN</strong></td>
						<td><strong>BILAL</strong></td>
					</tr>
			        	<?php foreach ($jumat as $j) {?>
			        	
					    <tr>
							<td>02 Agustus 2019</td>
							<td>Anton Hermawan</td>
							<td>Anton Hermawan</td>
					        <td>Husein</td>
							<td></td>
						</tr>
						<?php }?>						
									</table>
			</div>
		</div>
	</div>

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
