<?php

include 'part/header.php';
include 'part/navbar.php';

?>

<!-- Konten -->
<!-- Container -->
<div class="clear">

    <?php include 'part/nav.php'?>
	
    <section class="wecontent clear">

        <div class="mas-nav clear">

            <div >

                <!-- left side -->

                <div class="blog-content clear">
                    <h2>Sejarah</h2>
					<?php foreach($sejarah as $s){?>
                    <img src="<?= base_url()?>uploads/tentang/<?= $s->foto?>" alt="">
					<p>
						<?= $s->isi?>
					</p>
					<?php }?>
                </div>
            </div>

            <?php include 'part/footer.php';?>
