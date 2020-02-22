<?php echo form_open('bill/edit/'.$bill['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="billno" class="col-md-4 control-label">Billno</label>
		<div class="col-md-8">
			<input type="text" name="billno" value="<?php echo ($this->input->post('billno') ? $this->input->post('billno') : $bill['billno']); ?>" class="form-control" id="billno" />
		</div>
	</div>
	<div class="form-group">
		<label for="jobcardno" class="col-md-4 control-label">Jobcardno</label>
		<div class="col-md-8">
			<input type="text" name="jobcardno" value="<?php echo ($this->input->post('jobcardno') ? $this->input->post('jobcardno') : $bill['jobcardno']); ?>" class="form-control" id="jobcardno" />
		</div>
	</div>
	<div class="form-group">
		<label for="createddate" class="col-md-4 control-label">Createddate</label>
		<div class="col-md-8">
			<input type="text" name="createddate" value="<?php echo ($this->input->post('createddate') ? $this->input->post('createddate') : $bill['createddate']); ?>" class="form-control" id="createddate" />
		</div>
	</div>
	<div class="form-group">
		<label for="chequeno" class="col-md-4 control-label">Chequeno</label>
		<div class="col-md-8">
			<input type="text" name="chequeno" value="<?php echo ($this->input->post('chequeno') ? $this->input->post('chequeno') : $bill['chequeno']); ?>" class="form-control" id="chequeno" />
		</div>
	</div>
	<div class="form-group">
		<label for="bankname" class="col-md-4 control-label">Bankname</label>
		<div class="col-md-8">
			<input type="text" name="bankname" value="<?php echo ($this->input->post('bankname') ? $this->input->post('bankname') : $bill['bankname']); ?>" class="form-control" id="bankname" />
		</div>
	</div>
	<div class="form-group">
		<label for="issettelted" class="col-md-4 control-label">Issettelted</label>
		<div class="col-md-8">
			<input type="text" name="issettelted" value="<?php echo ($this->input->post('issettelted') ? $this->input->post('issettelted') : $bill['issettelted']); ?>" class="form-control" id="issettelted" />
		</div>
	</div>
	<div class="form-group">
		<label for="paymenttype" class="col-md-4 control-label">Paymenttype</label>
		<div class="col-md-8">
			<input type="text" name="paymenttype" value="<?php echo ($this->input->post('paymenttype') ? $this->input->post('paymenttype') : $bill['paymenttype']); ?>" class="form-control" id="paymenttype" />
		</div>
	</div>
	<div class="form-group">
		<label for="amount" class="col-md-4 control-label">Amount</label>
		<div class="col-md-8">
			<input type="text" name="amount" value="<?php echo ($this->input->post('amount') ? $this->input->post('amount') : $bill['amount']); ?>" class="form-control" id="amount" />
		</div>
	</div>
	<div class="form-group">
		<label for="tax" class="col-md-4 control-label">Tax</label>
		<div class="col-md-8">
			<input type="text" name="tax" value="<?php echo ($this->input->post('tax') ? $this->input->post('tax') : $bill['tax']); ?>" class="form-control" id="tax" />
		</div>
	</div>
	<div class="form-group">
		<label for="userid" class="col-md-4 control-label">Userid</label>
		<div class="col-md-8">
			<input type="text" name="userid" value="<?php echo ($this->input->post('userid') ? $this->input->post('userid') : $bill['userid']); ?>" class="form-control" id="userid" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>