<?php

include 'part/header.php';
include 'part/navbar.php';

?>

  

        <div class="wee-slider clear">
            <script>
                jQuery(document).ready(function($) {
                    var owl = $('.justslide');
                    owl.on('initialize.owl.carousel initialized.owl.carousel ' +
                        'initialize.owl.carousel initialize.owl.carousel ' +
                        'resize.owl.carousel resized.owl.carousel ' +
                        'refresh.owl.carousel refreshed.owl.carousel ' +
                        'update.owl.carousel updated.owl.carousel ' +
                        'drag.owl.carousel dragged.owl.carousel ' +
                        'translate.owl.carousel translated.owl.carousel ' +
                        'to.owl.carousel changed.owl.carousel',
                        function(e) {
                            $('.' + e.type)
                                .removeClass('secondary')
                                .addClass('success');
                            window.setTimeout(function() {
                                $('.' + e.type)
                                    .removeClass('success')
                                    .addClass('secondary');
                            }, 500);
                        });
                    owl.owlCarousel({
                        loop: true,
                        nav: false,
                        dots: false,
                        lazyLoad: true,
                        autoplay: true,
                        autoplayTimeout: 100,
                        autoplayHoverPause: false,
                        margin: 0,
                        video: true,
                        items: 1,
                    });
                });
            </script>

            <section id="slidex" class="slide1">



                <div class="justslide owl-carousel owl-theme">

				<?php foreach($slider as $s) { ?>

                    <div class="item">
                        <img width="1200" height="500" src="<?= base_url()?>uploads/slider/<?= $s->foto?>" class="attachment-slide size-slide wp-post-image" alt="<?= $s->nama?>" loading="lazy" title="<?= $s->nama?>" />
                    </div>
				<?php  } ?>

                </div>


            </section>
        </div>



        <!-- Container -->
        <div class="clear">

            <div id="topcontainer" class="clear">
                <div class="mas-nav">
                    <div id="after">
                        <script>
                            jQuery(document).ready(function($) {
                                var owl = $('.latest');
                                owl.on('initialize.owl.carousel initialized.owl.carousel ' +
                                    'initialize.owl.carousel initialize.owl.carousel ' +
                                    'resize.owl.carousel resized.owl.carousel ' +
                                    'refresh.owl.carousel refreshed.owl.carousel ' +
                                    'update.owl.carousel updated.owl.carousel ' +
                                    'drag.owl.carousel dragged.owl.carousel ' +
                                    'translate.owl.carousel translated.owl.carousel ' +
                                    'to.owl.carousel changed.owl.carousel',
                                    function(e) {
                                        $('.' + e.type)
                                            .removeClass('secondary')
                                            .addClass('success');
                                        window.setTimeout(function() {
                                            $('.' + e.type)
                                                .removeClass('success')
                                                .addClass('secondary');
                                        }, 7000);
                                    });
                                owl.owlCarousel({
                                    loop: true,
                                    nav: false,
                                    dots: false,
                                    lazyLoad: true,
                                    autoplay: true,
                                    autoplayTimeout: 6000,
                                    autoplayHoverPause: true,
                                    margin: 0,
                                    video: true,
                                    responsive: {
                                        0: {
                                            items: 1
                                        },
                                        480: {
                                            items: 1
                                        },
                                        800: {
                                            items: 2
                                        },
                                        980: {
                                            items: 3
                                        },
                                        1170: {
                                            items: 1
                                        }
                                    }
                                });
                            });
                        </script>

                        <div class="mas-nav">
                            <div class="address clear">
                                <div class="colover clear">
                                    <div class="colslide">
                                        <div class="cols-1">
                                            <div class="indiv">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <div class="masname">MASJID BAITURRAHMAN</div>
                                                <div class="em">
												Jl. Sukoharjo, Ngabean Wetan, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="callslide">
                                        <div class="cols-3">
                                            <div class="indiv">
                                                <i class="fas fa-phone-volume"></i>
                                                <div class="tops">PUSAT INFORMASI</div>
                                                <div class="numphone">0815-4247-8709</div>
                                                <div class="em">
                                                    <div class="infa">
                                                        <a href="https://facebook.com/"><i class="fab fa-facebook"></i></a> <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>                                                        <a href="https://youtube.com/"><i class="fab fa-youtube"></i></a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="colspeop">
                                        <div class="cols-2">

                                            <!-- SLIDE RANDOM -->
                                            <section id="agendamasjid">
                                                <div class="row">
                                                    <div class="large-12 columns">
                                                        <div class="latest owl-carousel owl-theme">
                                                            <div class="item">
                                                                <div class="itover">
                                                                    <div class="label">
                                                                        <img width="300" height="400" src="" class="attachment-fopengurus size-fopengurus wp-post-image" alt="" loading="" 
                                                                            sizes="(max-width: 300px) 100vw, 300px" /> </div>
                                                                    <div class="pp">
                                                                        <div class="takname">PAK TRIS</div>
                                                                        <div class="jab">Ketua Takmir</div>
                                                                        <a href="takmir/agus-hermawan/index.html">
                                                                            <div class="takpro">PROFILE</div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <!-- SLIDE -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="faqcontainer" class="clear">
                <div class="mas-nav">
                    <div id="infaq">
                        <div class="blockinfaq clear">

                            <!-- LAPORAN INFAQ -->
                            <div class="pepinfaq">
                                <h3><span>LAPORAN INFAQ</span></h3>

                                <div class="lap-infaq clear">
                                    <table class="infaq">
                                        <tr>
                                            <td><strong>JUMLAH</strong></td>
                                            <td class="tglnol"><strong>TGL</strong></td>
                                            <td><strong>KETERANGAN</strong></td>
											<td><strong>STATUS</strong></td>
                                        </tr>
										<?php foreach($infaq as $i){?>
                                        <tr>
                                            <td><strong>Rp. <?= $i->jumlah?></strong></td>
                                            <td class="tglnol"><?= $i->tanggal?></td>
                                            <td><?= $i->keterangan?></td>
											<td><?= $i->status?></td>
                                        </tr>
										<?php }?>
                                    </table>
                                </div>
                            </div>
                            <!-- LAPORAN INFAQ -->

                            <!-- PENGUMUMAN -->
                            <div class="yukinfaq">
                                <h3><span>JALUR INFAQ</span></h3>

                                <div class="peng-text">
                                    <div class="lapdain">
                                        LAPORAN SALDO DANA INFAQ
                                    </div>
                                    <div class="saldo">
									<?php
										$masuk =  $infaq_masuk['jumlah'];
										$keluar = $infaq_keluar['jumlah'];

										$total = $masuk - $keluar;
									?>
                                        SALDO : <strong>Rp. <?= number_format($total) ?>,-</strong>
                                    </div>
                                    <div class="lapdain">
                                        Saudara dapat berinfaq melalui rekening dibawah ini :
                                    </div>
                                    <div class="latest owl-carousel owl-theme">
                                        <div class="item">
                                            <strong>BRI</strong><br/> Kode : 002<br/>74678384798383<br/> Atas Nama : Agus Sugiyanto 
										</div>
                                       
                                    </div>
                                    <div class="link-in">
                                        <a href="#">
                                            <div class="butin">LIHAT LAPORAN</div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <!-- PENGUMUMAN -->
                        </div>
                    </div>
                </div>
            </div>

            <div id="bercontainer" class="clear">
                <div class="mas-nav">
                    <div id="berita">
                        <!-- Block Berita -->
                        <div class="ll clear">
                            <h3><span>BERITA TERBARU</span></h3>

                            <div class="berr">
                                <div class="berrin">
                                    <a href="eum-etque-ostrum-lineos-voluptas-dicta-similique/index.html"><img width="150" height="113" src="wp-content/uploads/2017/09/hike3-2-600x450.jpg" class="attachment-thumb size-thumb wp-post-image" alt="Eum Etque Ostrum Lineos. Voluptas Dicta Similique" loading="lazy" title="Eum Etque Ostrum Lineos. Voluptas Dicta Similique"
                                            srcset="https://wpmasjid.com/wp-content/uploads/2017/09/hike3-2-600x450.jpg 600w, https://wpmasjid.com/wp-content/uploads/2017/09/hike3-2-300x225.jpg 300w, https://wpmasjid.com/wp-content/uploads/2017/09/hike3-2-768x576.jpg 768w, https://wpmasjid.com/wp-content/uploads/2017/09/hike3-2-320x240.jpg 320w, https://wpmasjid.com/wp-content/uploads/2017/09/hike3-2.jpg 800w"
                                            sizes="(max-width: 150px) 100vw, 150px" /> </a>
                                    <div class="coberr">
                                        <i class="far fa-clock"></i> Selasa, 14 Mei 2019
                                        <h3><a href="eum-etque-ostrum-lineos-voluptas-dicta-similique/index.html">Eum Etque Ostrum Lineos. Voluptas Dicta Similique</a></h3>
                                        Oleh : <em>yayun</em> </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>

            <div id="agcontainer" class="clear">
                <div class="mas-nav">
                    <div id="agenda">
                        <!-- Agenda -->
                        <div class="gg clear">
                            <div class="masag">
                                <div class="outag">
                                    <h3><span>PETUGAS JUMAT</span></h3>



                                    <div class="ndeleft"><span class="noagen">Belum ada Jadwal</span></div>



                                </div>
                            </div>

                            <div class="masgen">

                                <div class="genin">


                                    <div class="homgen clear">
                                        <!-- first post -->
                                        <div class="agenda-info">
                                            <div class="floatag">
                                                <h3><a href="#">BELUM ADA AGENDA</a></h3>
                                            </div>
                                            <div class="imagenda">
                                                <img src="<?= base_url()?>assets/home/images/default.png" />
                                                <div class="imaover"></div>
                                            </div>
                                        </div>

                                        <div class="meta-info">
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="peng">
                                <div class="pengin">
                                    <div class="peinner">
                                        <h3><span>PENGUMUMAN</span></h3>

                                        <div class="inpen">
                                            <i class="far fa-clock"></i> Jumat, 6 Okt 2017
                                            <h4><a href="pengumuman/nam-asagittis-evelnis-guis-vaximus-morbi-dringilla/index.html">Nam Asagittis Evelnis Guis Vaximus. Morbi Dringilla</a></h4>
                                            Eum atque nostrum in eos. Voluptas dicta similique perferendis nihil tenetur necessitatibus. Quo maxime est quia mquam impedit aut omnis... </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="sercontainer" class="clear">
                <div class="mas-nav serv">
                    <div id="layanan">
                        <!-- LAYANAN MASJID -->
                        <div class="servin">

                            <div class="lay">
                                <h3><span>LAYANAN</span></h3>
                                <div class="clear outserv">
                                    <div class="servbox">
                                        <div class="servimg">
                                            <a href="layanan/pernikahan/index.html">
                                                <img width="320" height="240" src="wp-content/uploads/2017/10/nikah-1-320x240.jpg" class="attachment-medthumb size-medthumb wp-post-image" alt="Pernikahan" loading="lazy" title="Pernikahan" srcset="https://wpmasjid.com/wp-content/uploads/2017/10/nikah-1-320x240.jpg 320w, https://wpmasjid.com/wp-content/uploads/2017/10/nikah-1-300x225.jpg 300w, https://wpmasjid.com/wp-content/uploads/2017/10/nikah-1.jpg 600w"
                                                    sizes="(max-width: 320px) 100vw, 320px" /> </a>
                                        </div>
                                        <div class="sinbox">
                                            <div class="stop"><strong>Pernikahan</strong></div>
                                            <div class="clear">
                                                <span class="stleft">Hasanudin</span>
                                                <span class="stright"><i class="fas fa-phone"></i> 08122251385</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                        <!-- LAYANAN MASJID -->
                    </div>
                </div>
                <div class="laylai">
                </div>
            </div>

            <div id="taucontainer" class="clear">
                <div class="mas-nav">
                    <div id="tausiyah">
                        <div class="intau clear">
                            <div class="tau">
                                <div class="taubox">
                                    <h3><span>TAUSIYAH</span></h3>

                                    <div class="taulist">
                                        <div class="tls clear">
                                            <div class="imgtau">
                                                <div class="tauimg">
                                                    <a href="tausiyah/morbi-fringilla-quam-jimpedit-gaut-momnis-eccaecati/index.html"><img width="320" height="240" src="wp-content/uploads/2017/10/tausiyah-1-320x240.jpg" class="attachment-medthumb size-medthumb wp-post-image" alt="Morbi Fringilla Quam Jimpedit Gaut Momnis Eccaecati"
                                                            loading="lazy" title="Morbi Fringilla Quam Jimpedit Gaut Momnis Eccaecati" srcset="https://wpmasjid.com/wp-content/uploads/2017/10/tausiyah-1-320x240.jpg 320w, https://wpmasjid.com/wp-content/uploads/2017/10/tausiyah-1-300x225.jpg 300w, https://wpmasjid.com/wp-content/uploads/2017/10/tausiyah-1-768x576.jpg 768w, https://wpmasjid.com/wp-content/uploads/2017/10/tausiyah-1-600x450.jpg 600w, https://wpmasjid.com/wp-content/uploads/2017/10/tausiyah-1.jpg 800w"
                                                            sizes="(max-width: 320px) 100vw, 320px" /> </a>
                                                </div>
                                            </div>
                                            <div class="taucon">
                                                Oleh : yayun - <i class="far fa-clock"></i> Jumat, 6 Okt 2017
                                                <h4><a href="tausiyah/morbi-fringilla-quam-jimpedit-gaut-momnis-eccaecati/index.html">Morbi Fringilla Quam Jimpedit Gaut Momnis Eccaecati</a></h4>
                                                Eum atque nostrum ina eos. Voluptas dicta similique perferendis nihil tenetur necessitatibus. Quo maxime est quia mquam impedit aut omnis... </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="ggam">
                                <div class="gbox">
                                    <h3><span>GALERI</span></h3>
                                    <div class="clear">
                                        <ul class="clear">
                                            <li>
                                                <div class="glist">
                                                    <a href="galeri/126/index.html"><img width="320" height="240" src="wp-content/uploads/2017/09/hike3-2-320x240.jpg" class="attachment-medthumb size-medthumb wp-post-image" alt="Quo maxime est quia" loading="lazy" title="Quo maxime est quia"
                                                            srcset="https://wpmasjid.com/wp-content/uploads/2017/09/hike3-2-320x240.jpg 320w, https://wpmasjid.com/wp-content/uploads/2017/09/hike3-2-300x225.jpg 300w, https://wpmasjid.com/wp-content/uploads/2017/09/hike3-2-768x576.jpg 768w, https://wpmasjid.com/wp-content/uploads/2017/09/hike3-2-600x450.jpg 600w, https://wpmasjid.com/wp-content/uploads/2017/09/hike3-2.jpg 800w"
                                                            sizes="(max-width: 320px) 100vw, 320px" /></a>
                                                </div>
                                            </li>
                                           
                                            <li>
                                                <div class="glist">
                                                    <a href="galeri/129/index.html"><img width="320" height="240" src="wp-content/uploads/2017/10/kaboompics.com_Heart-with-a-red-oil-pastel-1-320x240.jpg" class="attachment-medthumb size-medthumb wp-post-image" alt="Quam impedit aut omnis"
                                                            loading="lazy" title="Quam impedit aut omnis" srcset="https://wpmasjid.com/wp-content/uploads/2017/10/kaboompics.com_Heart-with-a-red-oil-pastel-1-320x240.jpg 320w, https://wpmasjid.com/wp-content/uploads/2017/10/kaboompics.com_Heart-with-a-red-oil-pastel-1-600x450.jpg 600w"
                                                            sizes="(max-width: 320px) 100vw, 320px" /></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			<div id="vidcontainer" class="clear">
		<div class="mas-nav">
			<div id="video">
				<!-- GALERI VIDEO -->
				<div class="vbox">
					<h3>
						<span>VIDEO</span></h3>
					<div class="masvid clear">
						<div class="vlist">
							<div class="vfull">
								<iframe
									src="https://www.youtube.com/embed/V5K2AriwrLI"
									frameborder="0"
									allowfullscreen="allowfullscreen"></iframe>
							</div>
						</div>
						<div class="vlist">
							<div class="vfull">
								<iframe
									src="https://www.youtube.com/embed/wJeOf8dx5Lc"
									frameborder="0"
									allowfullscreen="allowfullscreen"></iframe>
							</div>
						</div>
						<div class="vlist">
							<div class="vfull">
								<iframe
									src="https://www.youtube.com/embed/KfXIF2Mm2Kc"
									frameborder="0"
									allowfullscreen="allowfullscreen"></iframe>
							</div>
						</div>
					</div>
				</div>
				<!-- GALERI VIDEO -->
			</div>
		</div>

       <?php include 'part/footer.php';?>
