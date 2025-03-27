<?php for($i = 0; $i < $_GET['count']; $i++ ): ?>
<hr>
<div class="row">
	<div class="col-md-6">
		<label class="control-label">Name</label>
		<input type="text" id="name" name="name" class="form-control">
	</div>
	<div class="col-md-6">
		<label class="control-label">Contact Number</label>
		<input type="text" id="contact" name="contact" class="form-control">
	</div>
</div>

<div class="row">
<div class="form-group col-md-12">
	<label class="control-label">Email Address</label>
	<input name="email" id="email" class="form-control">
</div>
</div>

<div class="row">
<div class="form-group col-md-12">
	<label class="control-label">Address</label>
	<textarea name="address" id="address" cols="30" rows="2" class="form-control"></textarea>
</div>
</div>
<?php endfor; ?>