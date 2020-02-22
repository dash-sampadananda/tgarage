<?php echo form_open('quotation/edit/'.$quotation['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="createdate" class="col-md-4 control-label">Createdate</label>
		<div class="col-md-8">
			<input type="text" name="createdate" value="<?php echo ($this->input->post('createdate') ? $this->input->post('createdate') : $quotation['createdate']); ?>" class="form-control" id="createdate" />
		</div>
	</div>
	<div class="form-group">
		<label for="approved" class="col-md-4 control-label">Approved</label>
		<div class="col-md-8">
			<input type="text" name="approved" value="<?php echo ($this->input->post('approved') ? $this->input->post('approved') : $quotation['approved']); ?>" class="form-control" id="approved" />
		</div>
	</div>
	<div class="form-group">
		<label for="approvedby" class="col-md-4 control-label">Approvedby</label>
		<div class="col-md-8">
			<input type="text" name="approvedby" value="<?php echo ($this->input->post('approvedby') ? $this->input->post('approvedby') : $quotation['approvedby']); ?>" class="form-control" id="approvedby" />
		</div>
	</div>
	<div class="form-group">
		<label for="approveddate" class="col-md-4 control-label">Approveddate</label>
		<div class="col-md-8">
			<input type="text" name="approveddate" value="<?php echo ($this->input->post('approveddate') ? $this->input->post('approveddate') : $quotation['approveddate']); ?>" class="form-control" id="approveddate" />
		</div>
	</div>
	<div class="form-group">
		<label for="jobcardno" class="col-md-4 control-label">Jobcardno</label>
		<div class="col-md-8">
			<input type="text" name="jobcardno" value="<?php echo ($this->input->post('jobcardno') ? $this->input->post('jobcardno') : $quotation['jobcardno']); ?>" class="form-control" id="jobcardno" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>