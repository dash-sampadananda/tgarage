<?php echo form_open('billline/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="billid" class="col-md-4 control-label">Billid</label>
		<div class="col-md-8">
			<input type="text" name="billid" value="<?php echo $this->input->post('billid'); ?>" class="form-control" id="billid" />
		</div>
	</div>
	<div class="form-group">
		<label for="item" class="col-md-4 control-label">Item</label>
		<div class="col-md-8">
			<input type="text" name="item" value="<?php echo $this->input->post('item'); ?>" class="form-control" id="item" />
		</div>
	</div>
	<div class="form-group">
		<label for="description" class="col-md-4 control-label">Description</label>
		<div class="col-md-8">
			<input type="text" name="description" value="<?php echo $this->input->post('description'); ?>" class="form-control" id="description" />
		</div>
	</div>
	<div class="form-group">
		<label for="qty" class="col-md-4 control-label">Qty</label>
		<div class="col-md-8">
			<input type="text" name="qty" value="<?php echo $this->input->post('qty'); ?>" class="form-control" id="qty" />
		</div>
	</div>
	<div class="form-group">
		<label for="value" class="col-md-4 control-label">Value</label>
		<div class="col-md-8">
			<input type="text" name="value" value="<?php echo $this->input->post('value'); ?>" class="form-control" id="value" />
		</div>
	</div>
	<div class="form-group">
		<label for="taxthis" class="col-md-4 control-label">Taxthis</label>
		<div class="col-md-8">
			<input type="text" name="taxthis" value="<?php echo $this->input->post('taxthis'); ?>" class="form-control" id="taxthis" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>