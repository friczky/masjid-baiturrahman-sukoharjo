	<!-- Footer -->
	<div class="footer transition">
		<hr>
		<p>
			&copy; 2020 All Right Reserved by <a href="https://facebook.com/riczky07" target="_blank">Fadilah Riczky</a>
		</p>
	</div>

	<!-- Loader -->
	<div class="loader">
		<div class="spinner-border text-light" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	
	<div class="loader-overlay"></div>

	<!-- Library Javascipt-->
	<script src="<?= base_url() ?>assets/admin/vendors/bootstrap/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/admin/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/admin/vendors/bootstrap/js/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/admin/js/script.js"></script>
	
	<script src="<?= base_url()?>plugins/datatables/datatables.min.js"></script>
	<script>
		$(document).ready(function() {
    $('#example').DataTable();
		} );
	</script>

	<!-- Summernote JS-->
	<script src="<?= base_url() ?>assets/admin/vendors/summernote/summernote.min.js"></script>
	<script>
      $('#summernote').summernote({
        placeholder: 'Isi disini',
        tabsize: 10,
        height: 200
      });
    </script>


 </body>
</html>
