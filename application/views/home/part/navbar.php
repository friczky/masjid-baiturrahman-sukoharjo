<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="wrapper hiden">

        <div class="madticker">
            <div id="infotit">
                <span>SEKILAS INFO</span>
            </div>

            <div class="mask">
                <ul id="wees-ticker" class="newstickers">
                    <li>Website masjid masih dalam maintence</li>
            
                </ul>
            </div>

            <div class="infotim">
                <div class="jam">WAKTU <span id="time"></span>:<span id="minu"></span> <span id="secs"></span></div>
            </div>

        </div>
        <div class="mob">
            <div class="smob">
                <div class="search-post">
                    <form method="get" id="searchform" action="https://wpmasjid.com/">
                        <fieldset>
                            <input class="spo" name="s" type="text" placeholder="cari berita..." value="" />
                            <input type="hidden" name="post_type" value="post" />
                            <button type="submit" style="display:none"><i class="fa fa-search"></i></button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="mobi">
                <ul id="acc" class="accordion">
                    <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-278"><a href="index.html" aria-current="page">Beranda</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-214"><a href="event/index.html"></a></li>
					<li  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-257"><a href="#">Tentang</a>
                        <ul class="sub-menu">
                            <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-281"><a href="profile/index.html">Profile</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-280"><a href="sejarah/index.html">Sejarah</a></li>
                            <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-279"><a href="dewan-pengurus/index.html">Dewan Pengurus</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-214"><a href="event/index.html">Jadwal Kajian</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-262"><a href="jadwal-jumat/index.html">Jadwal </a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-269"><a href="tausiyah/index.html">Tausiyah</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-271"><a href="#">Laporan</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-272"><a href="infaq/index.html">Lap Infaq</a></li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-tahun menu-item-584"><a href="tahun/2018/index.html">Infaq 2018</a></li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-tahun menu-item-583"><a href="tahun/2019/index.html">Infaq 2019</a></li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-bulan menu-item-585"><a href="bulan/januari-2019/index.html">Januari 2019</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type_archive menu-item-object-takmir menu-item-586"><a href="takmir/index.html">Takmir Masjid</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-265"><a href="#">Lainnya</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-270"><a href="pengumuman/index.html">Pengumuman</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-264"><a href="lembaga/index.html">Lembaga</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-266"><a>Layanan</a></li>
                            <li iclass="menu-item menu-item-type-custom menu-item-object-custom menu-item-267"><a href="inventaris/index.html">Inventaris</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-259"><a href="perpustakaan/index.html">Perpustakaan</a></li>
                        </ul>
                    </li>
                   
                </ul>
            </div> <i class="fas fa-times xclose"></i>
        </div>
        <div class="nav-masjid">
            <div class="mas-nav clear">

                <div class="inn">
                    <div class="logos">
                        <div class="logo-img">
                            <a href="<?= base_url()?>">
                                <img id="logo" src="<?= base_url()?>uploads/logo/logombr.png" width="" style="padding-left: 12px;">
                            </a>
                        </div>
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="ws clear">
                        <h3><span><?= date("d-m-Y")?></span></h3>
                        <script type="text/javascript" src="https://www.muslimpro.com/muslimprowidget.js?cityid=1626754&amp;language=id&amp;timeformat=24" async></script>
                    </div>
                </div>
            </div>
        </div>

        <div class="men">
            <div class="mas-nav clear">
                <div class="toplist">
                    <div class="nav">
                        <ul id="dd" class="dd">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-278"><a href="<?= base_url()?>" aria-current="page">Beranda</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-214"><a href="<?= base_url()?>berita">Berita</a></li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-257"><a href="#">Tentang</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-281"><a href="<?= base_url()?>profile">Profile</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-280"><a href="<?= base_url()?>sejarah">Sejarah</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-279"><a href="<?= base_url()?>dewanpengurus">Dewan Pengurus</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-214"><a href="<?= base_url()?>jadwalkajian">Jadwal Kajian</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-262"><a href="<?= base_url()?>jadwaljumat">Jadwal Jumat</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-269"><a href="<?= base_url()?>event">Event</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-271"><a href="#">Laporan</a>
                                <ul class="sub-menu"> 	
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-272"><a href="<?= base_url()?>laporaninfaq">Lap Infaq</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-post_type_archive menu-item-object-takmir menu-item-586"><a href="<?= base_url()?>takmirmasjid">Takmir Masjid</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-265"><a href="#">Lainnya</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-270"><a href="<?= base_url()?>pengumuman">Pengumuman</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-264"><a href="<?= base_url()?>lembaga">Lembaga</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-266"><a>Layanan</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-267"><a href="<?= base_url()?>inventaris">Inventaris</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-259"><a href="<?= base_url()?>perpustakaan">Perpustakaan</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="ca">
                    <div class="search-post">
                        <form method="get" id="searchform" action="#">
                            <fieldset>
                                <input class="spo" name="s" type="text" placeholder="cari berita..." value="" />
                                <input type="hidden" name="post_type" value="post" />
                                <button type="submit" style="display:none"><i class="fa fa-search"></i></button>
                            </fieldset>
                        </form>
                    </div>
                </div>

            </div>
        </div>
