	<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
			<!-- content ends -->
			</div><!--/#content.span10-->
		<?php } ?>
		</div><!--/fluid-row-->
		<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
		
		<hr>

		<footer>
			<p class="pull-left">&copy;  <a href="http://cadnaukri.com" target="_blank"> Cadnaukri</a> <?php echo date('Y') ?></p>
			
		</footer>
		<?php } ?>

	</div><!--/.fluid-container-->
<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	
		<script src="<?php echo base_url('assets/superadmin/js/bootstrap-dropdown.js')?>"></script>
	<!-- jQuery UI -->
	
	<!-- jQuery -->
	<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure want to delete?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
	
	
</body>
</html>
