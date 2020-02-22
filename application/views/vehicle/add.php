<?php echo form_open('vehicle/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="customerid" class="col-md-4 control-label">Customerid</label>
		<div class="col-md-8">
			<input type="text" name="customerid" value="<?php echo $this->input->post('customerid'); ?>" class="form-control" id="customerid" />
		</div>
	</div>
	<div class="form-group">
		<label for="make" class="col-md-4 control-label">Make</label>
		<div class="col-md-8">
			<input type="text" name="make" value="<?php echo $this->input->post('make'); ?>" class="form-control" id="make" />
		</div>
	</div>
	<div class="form-group">
		<label for="model" class="col-md-4 control-label">Model</label>
		<div class="col-md-8">
			<input type="text" name="model" value="<?php echo $this->input->post('model'); ?>" class="form-control" id="model" />
		</div>
	</div>
	<div class="form-group">
		<label for="number" class="col-md-4 control-label">Number</label>
		<div class="col-md-8">
			<input type="text" name="number" value="<?php echo $this->input->post('number'); ?>" class="form-control" id="number" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>