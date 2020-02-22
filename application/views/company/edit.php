<?php echo form_open('company/edit/'.$company['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nameenglish" class="col-md-4 control-label">Nameenglish</label>
		<div class="col-md-8">
			<input type="text" name="nameenglish" value="<?php echo ($this->input->post('nameenglish') ? $this->input->post('nameenglish') : $company['nameenglish']); ?>" class="form-control" id="nameenglish" />
		</div>
	</div>
	<div class="form-group">
		<label for="namearabic" class="col-md-4 control-label">Namearabic</label>
		<div class="col-md-8">
			<input type="text" name="namearabic" value="<?php echo ($this->input->post('namearabic') ? $this->input->post('namearabic') : $company['namearabic']); ?>" class="form-control" id="namearabic" />
		</div>
	</div>
	<div class="form-group">
		<label for="address1english" class="col-md-4 control-label">Address1english</label>
		<div class="col-md-8">
			<input type="text" name="address1english" value="<?php echo ($this->input->post('address1english') ? $this->input->post('address1english') : $company['address1english']); ?>" class="form-control" id="address1english" />
		</div>
	</div>
	<div class="form-group">
		<label for="address1arabic" class="col-md-4 control-label">Address1arabic</label>
		<div class="col-md-8">
			<input type="text" name="address1arabic" value="<?php echo ($this->input->post('address1arabic') ? $this->input->post('address1arabic') : $company['address1arabic']); ?>" class="form-control" id="address1arabic" />
		</div>
	</div>
	<div class="form-group">
		<label for="address2english" class="col-md-4 control-label">Address2english</label>
		<div class="col-md-8">
			<input type="text" name="address2english" value="<?php echo ($this->input->post('address2english') ? $this->input->post('address2english') : $company['address2english']); ?>" class="form-control" id="address2english" />
		</div>
	</div>
	<div class="form-group">
		<label for="address2arabic" class="col-md-4 control-label">Address2arabic</label>
		<div class="col-md-8">
			<input type="text" name="address2arabic" value="<?php echo ($this->input->post('address2arabic') ? $this->input->post('address2arabic') : $company['address2arabic']); ?>" class="form-control" id="address2arabic" />
		</div>
	</div>
	<div class="form-group">
		<label for="cityenglish" class="col-md-4 control-label">Cityenglish</label>
		<div class="col-md-8">
			<input type="text" name="cityenglish" value="<?php echo ($this->input->post('cityenglish') ? $this->input->post('cityenglish') : $company['cityenglish']); ?>" class="form-control" id="cityenglish" />
		</div>
	</div>
	<div class="form-group">
		<label for="cityarabic" class="col-md-4 control-label">Cityarabic</label>
		<div class="col-md-8">
			<input type="text" name="cityarabic" value="<?php echo ($this->input->post('cityarabic') ? $this->input->post('cityarabic') : $company['cityarabic']); ?>" class="form-control" id="cityarabic" />
		</div>
	</div>
	<div class="form-group">
		<label for="stateenglish" class="col-md-4 control-label">Stateenglish</label>
		<div class="col-md-8">
			<input type="text" name="stateenglish" value="<?php echo ($this->input->post('stateenglish') ? $this->input->post('stateenglish') : $company['stateenglish']); ?>" class="form-control" id="stateenglish" />
		</div>
	</div>
	<div class="form-group">
		<label for="statearabic" class="col-md-4 control-label">Statearabic</label>
		<div class="col-md-8">
			<input type="text" name="statearabic" value="<?php echo ($this->input->post('statearabic') ? $this->input->post('statearabic') : $company['statearabic']); ?>" class="form-control" id="statearabic" />
		</div>
	</div>
	<div class="form-group">
		<label for="phone1" class="col-md-4 control-label">Phone1</label>
		<div class="col-md-8">
			<input type="text" name="phone1" value="<?php echo ($this->input->post('phone1') ? $this->input->post('phone1') : $company['phone1']); ?>" class="form-control" id="phone1" />
		</div>
	</div>
	<div class="form-group">
		<label for="phone2" class="col-md-4 control-label">Phone2</label>
		<div class="col-md-8">
			<input type="text" name="phone2" value="<?php echo ($this->input->post('phone2') ? $this->input->post('phone2') : $company['phone2']); ?>" class="form-control" id="phone2" />
		</div>
	</div>
	<div class="form-group">
		<label for="fax" class="col-md-4 control-label">Fax</label>
		<div class="col-md-8">
			<input type="text" name="fax" value="<?php echo ($this->input->post('fax') ? $this->input->post('fax') : $company['fax']); ?>" class="form-control" id="fax" />
		</div>
	</div>
	<div class="form-group">
		<label for="enabletaxation" class="col-md-4 control-label">Enabletaxation</label>
		<div class="col-md-8">
			<input type="text" name="enabletaxation" value="<?php echo ($this->input->post('enabletaxation') ? $this->input->post('enabletaxation') : $company['enabletaxation']); ?>" class="form-control" id="enabletaxation" />
		</div>
	</div>
	<div class="form-group">
		<label for="percentage" class="col-md-4 control-label">Percentage</label>
		<div class="col-md-8">
			<input type="text" name="percentage" value="<?php echo ($this->input->post('percentage') ? $this->input->post('percentage') : $company['percentage']); ?>" class="form-control" id="percentage" />
		</div>
	</div>
	<div class="form-group">
		<label for="imagepath" class="col-md-4 control-label">Imagepath</label>
		<div class="col-md-8">
			<input type="text" name="imagepath" value="<?php echo ($this->input->post('imagepath') ? $this->input->post('imagepath') : $company['imagepath']); ?>" class="form-control" id="imagepath" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>