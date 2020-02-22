<?php echo form_open('user/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
		</div>
	</div>
	<div class="form-group">
		<label for="username" class="col-md-4 control-label">Username</label>
		<div class="col-md-8">
			<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
		</div>
	</div>
	<div class="form-group">
		<label for="isadmin" class="col-md-4 control-label">Isadmin</label>
		<div class="col-md-8">
			<input type="text" name="isadmin" value="<?php echo $this->input->post('isadmin'); ?>" class="form-control" id="isadmin" />
		</div>
	</div>
	<div class="form-group">
		<label for="branchid" class="col-md-4 control-label">Branchid</label>
		<div class="col-md-8">
			<input type="text" name="branchid" value="<?php echo $this->input->post('branchid'); ?>" class="form-control" id="branchid" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>