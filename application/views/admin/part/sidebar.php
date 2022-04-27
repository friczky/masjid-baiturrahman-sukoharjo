<!--Sidebar-->
<div class="sidebar transition overlay-scrollbars">
		<div class="logo">
			<h2 style="font-weight: 700;" class="mb-0">MBR<span style="font-weight: 500;" > Admin</span></h2>
		</div>

		<div class="sidebar-items">
			<div class="accordion" id="sidebar-items">
				<ul>

					<p class="menu">Home</p>

					<li>
						<a href="<?= base_url()?>admin" class="items">
							<i class="fa fa-tachometer-alt"></i>
							<span>Dashoard</span>
						</a>
					</li>

					
					<p class="menu">Menu</p>

					<li id="headingOne">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#berita"
							aria-expanded="true" aria-controls="berita">
							<i class="fas la-cog"></i>
							<span>Berita</span>
							<i class="fas la-angle-right"></i>
						</a>
					</li>
					<div id="berita" class="collapse submenu" aria-labelledby="headingOne" data-parent="#sidebar-items">
						<ul>

							<li>
								<a href="components-alerts.html" >Daftar Berita</a>
							</li>
							<li>
								<a href="components-alerts.html" >Tambah Berita</a>
							</li>
						 </ul>
					</div>

					<li id="headingOne">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#user"
							aria-expanded="true" aria-controls="collapseOne">
							<i class="fas la-cog"></i>
							<span>Manajemen User</span>
							<i class="fas la-angle-right"></i>
						</a>
					</li>
					<div id="user" class="collapse submenu" aria-labelledby="headingOne" data-parent="#sidebar-items">
						<ul>

							<li>
								<a href="<?= base_url()?>admin/user" >Daftar User</a>
							</li>
							<li>
								<a href="<?= base_url()?>admin/user/add" >Tambah User</a>
							</li>

						 </ul>
					</div>

					<li id="headingOne">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#jadwal"
							aria-expanded="true" aria-controls="collapseOne">
							<i class="fas la-cog"></i>
							<span>Manajemen Jadwal</span>
							<i class="fas la-angle-right"></i>
						</a>
					</li>
					<div id="jadwal" class="collapse submenu" aria-labelledby="headingOne" data-parent="#sidebar-items">
						<ul>

							<li>
								<a href="<?= base_url()?>admin/kajian" >Jadwal Kajian </a>
							</li>
							<li>
								<a href="<?= base_url()?>admin/jumatan" >Jadwal Jumat </a>
							</li>
							<li>
								<a href="<?= base_url()?>admin/" >Jadwal Event </a>
							</li>
							

						 </ul>
					</div>

					<li id="headingOne">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#tentang"
							aria-expanded="true" aria-controls="collapseOne">
							<i class="fas la-cog"></i>
							<span>Manajemen Tentang</span>
							<i class="fas la-angle-right"></i>
						</a>
					</li>
					<div id="tentang" class="collapse submenu" aria-labelledby="headingOne" data-parent="#sidebar-items">
						<ul>

							<li>
								<a href="<?= base_url()?>admin/tentang/profile" >Profile Masjid</a>
							</li>
							<li>
								<a href="<?= base_url()?>admin/tentang/sejarah" >Sejarah Masjid</a>
							</li>
							<li>
								<a href="<?= base_url()?>admin/tentang/dewanpengurus" >Dewan Pengurus Masjid</a>
							</li>
						 </ul>
					</div>

					<li>
						<a href="blank-page.html" class="items">
							<i class="lar la-meh-blank"></i>
							<span>Profile</span>
						</a>
					</li>

					
					
					
				</ul>
			</div>
		</div>
	</div>

	<div class="sidebar-overlay"></div>
