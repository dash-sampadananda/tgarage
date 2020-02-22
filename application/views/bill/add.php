<?php echo form_open('bill/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="billno" class="col-md-4 control-label">Billno</label>
		<div class="col-md-8">
			<input type="text" name="billno" value="<?php echo $this->input->post('billno'); ?>" class="form-control" id="billno" />
		</div>
	</div>
	<div class="form-group">
		<label for="jobcardno" class="col-md-4 control-label">Jobcardno</label>
		<div class="col-md-8">
			<input type="text" name="jobcardno" value="<?php echo $this->input->post('jobcardno'); ?>" class="form-control" id="jobcardno" />
		</div>
	</div>
	<div class="form-group">
		<label for="createddate" class="col-md-4 control-label">Createddate</label>
		<div class="col-md-8">
			<input type="text" name="createddate" value="<?php echo $this->input->post('createddate'); ?>" class="form-control" id="createddate" />
		</div>
	</div>
	<div class="form-group">
		<label for="chequeno" class="col-md-4 control-label">Chequeno</label>
		<div class="col-md-8">
			<input type="text" name="chequeno" value="<?php echo $this->input->post('chequeno'); ?>" class="form-control" id="chequeno" />
		</div>
	</div>
	<div class="form-group">
		<label for="bankname" class="col-md-4 control-label">Bankname</label>
		<div class="col-md-8">
			<input type="text" name="bankname" value="<?php echo $this->input->post('bankname'); ?>" class="form-control" id="bankname" />
		</div>
	</div>
	<div class="form-group">
		<label for="issettelted" class="col-md-4 control-label">Issettelted</label>
		<div class="col-md-8">
			<input type="text" name="issettelted" value="<?php echo $this->input->post('issettelted'); ?>" class="form-control" id="issettelted" />
		</div>
	</div>
	<div class="form-group">
		<label for="paymenttype" class="col-md-4 control-label">Paymenttype</label>
		<div class="col-md-8">
			<input type="text" name="paymenttype" value="<?php echo $this->input->post('paymenttype'); ?>" class="form-control" id="paymenttype" />
		</div>
	</div>
	<div class="form-group">
		<label for="amount" class="col-md-4 control-label">Amount</label>
		<div class="col-md-8">
			<input type="text" name="amount" value="<?php echo $this->input->post('amount'); ?>" class="form-control" id="amount" />
		</div>
	</div>
	<div class="form-group">
		<label for="tax" class="col-md-4 control-label">Tax</label>
		<div class="col-md-8">
			<input type="text" name="tax" value="<?php echo $this->input->post('tax'); ?>" class="form-control" id="tax" />
		</div>
	</div>
	<div class="form-group">
		<label for="userid" class="col-md-4 control-label">Userid</label>
		<div class="col-md-8">
			<input type="text" name="userid" value="<?php echo $this->input->post('userid'); ?>" class="form-control" id="userid" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>