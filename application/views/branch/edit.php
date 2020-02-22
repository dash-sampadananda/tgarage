<?php echo form_open('branch/edit/'.$branch['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="companyid" class="col-md-4 control-label">Companyid</label>
		<div class="col-md-8">
			<input type="text" name="companyid" value="<?php echo ($this->input->post('companyid') ? $this->input->post('companyid') : $branch['companyid']); ?>" class="form-control" id="companyid" />
		</div>
	</div>
	<div class="form-group">
		<label for="nameenglish" class="col-md-4 control-label">Nameenglish</label>
		<div class="col-md-8">
			<input type="text" name="nameenglish" value="<?php echo ($this->input->post('nameenglish') ? $this->input->post('nameenglish') : $branch['nameenglish']); ?>" class="form-control" id="nameenglish" />
		</div>
	</div>
	<div class="form-group">
		<label for="namearabic" class="col-md-4 control-label">Namearabic</label>
		<div class="col-md-8">
			<input type="text" name="namearabic" value="<?php echo ($this->input->post('namearabic') ? $this->input->post('namearabic') : $branch['namearabic']); ?>" class="form-control" id="namearabic" />
		</div>
	</div>
	<div class="form-group">
		<label for="address1english" class="col-md-4 control-label">Address1english</label>
		<div class="col-md-8">
			<input type="text" name="address1english" value="<?php echo ($this->input->post('address1english') ? $this->input->post('address1english') : $branch['address1english']); ?>" class="form-control" id="address1english" />
		</div>
	</div>
	<div class="form-group">
		<label for="address1arabic" class="col-md-4 control-label">Address1arabic</label>
		<div class="col-md-8">
			<input type="text" name="address1arabic" value="<?php echo ($this->input->post('address1arabic') ? $this->input->post('address1arabic') : $branch['address1arabic']); ?>" class="form-control" id="address1arabic" />
		</div>
	</div>
	<div class="form-group">
		<label for="address2english" class="col-md-4 control-label">Address2english</label>
		<div class="col-md-8">
			<input type="text" name="address2english" value="<?php echo ($this->input->post('address2english') ? $this->input->post('address2english') : $branch['address2english']); ?>" class="form-control" id="address2english" />
		</div>
	</div>
	<div class="form-group">
		<label for="address2arabic" class="col-md-4 control-label">Address2arabic</label>
		<div class="col-md-8">
			<input type="text" name="address2arabic" value="<?php echo ($this->input->post('address2arabic') ? $this->input->post('address2arabic') : $branch['address2arabic']); ?>" class="form-control" id="address2arabic" />
		</div>
	</div>
	<div class="form-group">
		<label for="cityenglish" class="col-md-4 control-label">Cityenglish</label>
		<div class="col-md-8">
			<input type="text" name="cityenglish" value="<?php echo ($this->input->post('cityenglish') ? $this->input->post('cityenglish') : $branch['cityenglish']); ?>" class="form-control" id="cityenglish" />
		</div>
	</div>
	<div class="form-group">
		<label for="cityarabic" class="col-md-4 control-label">Cityarabic</label>
		<div class="col-md-8">
			<input type="text" name="cityarabic" value="<?php echo ($this->input->post('cityarabic') ? $this->input->post('cityarabic') : $branch['cityarabic']); ?>" class="form-control" id="cityarabic" />
		</div>
	</div>
	<div class="form-group">
		<label for="stateenglish" class="col-md-4 control-label">Stateenglish</label>
		<div class="col-md-8">
			<input type="text" name="stateenglish" value="<?php echo ($this->input->post('stateenglish') ? $this->input->post('stateenglish') : $branch['stateenglish']); ?>" class="form-control" id="stateenglish" />
		</div>
	</div>
	<div class="form-group">
		<label for="statearabic" class="col-md-4 control-label">Statearabic</label>
		<div class="col-md-8">
			<input type="text" name="statearabic" value="<?php echo ($this->input->post('statearabic') ? $this->input->post('statearabic') : $branch['statearabic']); ?>" class="form-control" id="statearabic" />
		</div>
	</div>
	<div class="form-group">
		<label for="phone1" class="col-md-4 control-label">Phone1</label>
		<div class="col-md-8">
			<input type="text" name="phone1" value="<?php echo ($this->input->post('phone1') ? $this->input->post('phone1') : $branch['phone1']); ?>" class="form-control" id="phone1" />
		</div>
	</div>
	<div class="form-group">
		<label for="phone2" class="col-md-4 control-label">Phone2</label>
		<div class="col-md-8">
			<input type="text" name="phone2" value="<?php echo ($this->input->post('phone2') ? $this->input->post('phone2') : $branch['phone2']); ?>" class="form-control" id="phone2" />
		</div>
	</div>
	<div class="form-group">
		<label for="fax" class="col-md-4 control-label">Fax</label>
		<div class="col-md-8">
			<input type="text" name="fax" value="<?php echo ($this->input->post('fax') ? $this->input->post('fax') : $branch['fax']); ?>" class="form-control" id="fax" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>