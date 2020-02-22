<?php echo form_open('qline/edit/'.$qline['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="quotationid" class="col-md-4 control-label">Quotationid</label>
		<div class="col-md-8">
			<input type="text" name="quotationid" value="<?php echo ($this->input->post('quotationid') ? $this->input->post('quotationid') : $qline['quotationid']); ?>" class="form-control" id="quotationid" />
		</div>
	</div>
	<div class="form-group">
		<label for="description" class="col-md-4 control-label">Description</label>
		<div class="col-md-8">
			<input type="text" name="description" value="<?php echo ($this->input->post('description') ? $this->input->post('description') : $qline['description']); ?>" class="form-control" id="description" />
		</div>
	</div>
	<div class="form-group">
		<label for="qty" class="col-md-4 control-label">Qty</label>
		<div class="col-md-8">
			<input type="text" name="qty" value="<?php echo ($this->input->post('qty') ? $this->input->post('qty') : $qline['qty']); ?>" class="form-control" id="qty" />
		</div>
	</div>
	<div class="form-group">
		<label for="cost" class="col-md-4 control-label">Cost</label>
		<div class="col-md-8">
			<input type="text" name="cost" value="<?php echo ($this->input->post('cost') ? $this->input->post('cost') : $qline['cost']); ?>" class="form-control" id="cost" />
		</div>
	</div>
	<div class="form-group">
		<label for="deleted" class="col-md-4 control-label">Deleted</label>
		<div class="col-md-8">
			<input type="text" name="deleted" value="<?php echo ($this->input->post('deleted') ? $this->input->post('deleted') : $qline['deleted']); ?>" class="form-control" id="deleted" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>