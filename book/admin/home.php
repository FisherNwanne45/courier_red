<style>
   
</style>

<div class="containe-fluid">

	<div class="row">
		<div class="col-lg-12">
			
		</div>
	</div>

	<div class="row mt-3 ml-3 mr-3">
			<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
				<?php echo "Welcome back ".($_SESSION['login_type'] == 3 ? "Dr. ".$_SESSION['login_name'].','.$_SESSION['login_name_pref'] : $_SESSION['login_name'])."!"  ?>
									
									
									<br>
									<br>
									
									<a href="../../resources"><button class="btn btn-sm btn-primary col-sm-3 offset-md-3">Return to Courier Settings</button></a>
				</div>
				<hr>
				<div class="row">
				
				</div>
			</div>
			
		</div>
		</div>
	</div>

</div>
<script>
	
</script>