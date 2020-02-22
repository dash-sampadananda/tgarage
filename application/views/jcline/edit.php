<?php echo form_open('jcline/edit/'.$jcline['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="workname" class="col-md-4 control-label">Workname</label>
		<div class="col-md-8">
			<input type="text" name="workname" value="<?php echo ($this->input->post('workname') ? $this->input->post('workname') : $jcline['workname']); ?>" class="form-control" id="workname" />
		</div>
	</div>
	<div class="form-group">
		<label for="description" class="col-md-4 control-label">Description</label>
		<div class="col-md-8">
			<input type="text" name="description" value="<?php echo ($this->input->post('description') ? $this->input->post('description') : $jcline['description']); ?>" class="form-control" id="description" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>