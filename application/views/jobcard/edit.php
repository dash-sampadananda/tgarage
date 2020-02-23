<?php echo form_open('jobcard/edit/' . $jobcard['id'], array("class" => "form-horizontal")); ?>

<div class="form-group">
    <label for="jobtype" class="col-md-4 control-label">Jobtype</label>
    <div class="col-md-8">
        <input type="text" name="jobtype" value="<?php echo ($this->input->post('jobtype') ? $this->input->post('jobtype') : $jobcard['jobtype']); ?>" class="form-control" id="jobtype" />
    </div>
</div>
<div class="form-group">
    <label for="insuranceid" class="col-md-4 control-label">Insuranceid</label>
    <div class="col-md-8">
        <input type="text" name="insuranceid" value="<?php echo ($this->input->post('insuranceid') ? $this->input->post('insuranceid') : $jobcard['insuranceid']); ?>" class="form-control" id="insuranceid" />
    </div>
</div>
<!--<div class="form-group">
    <label for="cancled" class="col-md-4 control-label">Cancled</label>
    <div class="col-md-8">
        <input type="text" name="cancled" value="<?php echo ($this->input->post('cancled') ? $this->input->post('cancled') : $jobcard['cancled']); ?>" class="form-control" id="cancled" />
    </div>
</div>-->
<!--<div class="form-group">
    <label for="userid" class="col-md-4 control-label">Userid</label>
    <div class="col-md-8">
        <input type="text" name="userid" value="<?php echo ($this->input->post('userid') ? $this->input->post('userid') : $jobcard['userid']); ?>" class="form-control" id="userid" />
    </div>
</div>
<div class="form-group">
    <label for="createddate" class="col-md-4 control-label">Createddate</label>
    <div class="col-md-8">
        <input type="text" name="createddate" value="<?php echo ($this->input->post('createddate') ? $this->input->post('createddate') : $jobcard['createddate']); ?>" class="form-control" id="createddate" />
    </div>
</div>-->
<div class="form-group">
    <label for="delivereddate" class="col-md-4 control-label">Delivereddate</label>
    <div class="col-md-8">
        <input type="text" name="delivereddate" value="<?php echo ($this->input->post('delivereddate') ? $this->input->post('delivereddate') : $jobcard['delivereddate']); ?>" class="form-control" id="delivereddate" />
    </div>
</div>
<div class="form-group">
    <label for="customerfeedback" class="col-md-4 control-label">Customerfeedback</label>
    <div class="col-md-8">
        <input type="text" name="customerfeedback" value="<?php echo ($this->input->post('customerfeedback') ? $this->input->post('customerfeedback') : $jobcard['customerfeedback']); ?>" class="form-control" id="customerfeedback" />
    </div>
</div>
<div class="form-group">
    <label for="customerid" class="col-md-4 control-label">Customerid</label>
    <div class="col-md-8">
        <input type="text" name="customerid" value="<?php echo ($this->input->post('customerid') ? $this->input->post('customerid') : $jobcard['customerid']); ?>" class="form-control" id="customerid" />
    </div>
</div>
<div class="form-group">
    <label for="jobstatus" class="col-md-4 control-label">Jobstatus</label>
    <div class="col-md-8">
        <input type="text" name="jobstatus" value="<?php echo ($this->input->post('jobstatus') ? $this->input->post('jobstatus') : $jobcard['jobstatus']); ?>" class="form-control" id="jobstatus" />
    </div>
</div>
<div class="form-group">
    <label for="vehicleid" class="col-md-4 control-label">Vehicleid</label>
    <div class="col-md-8">
        <input type="text" name="vehicleid" value="<?php echo ($this->input->post('vehicleid') ? $this->input->post('vehicleid') : $jobcard['vehicleid']); ?>" class="form-control" id="vehicleid" />
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success">Save</button>
    </div>
</div>

<?php echo form_close(); ?>

<div class="add-jobeline-row">
    <div class="Row">
        <div class="col-md-3 col-md-offset-3">
            <div class="form-group">
                <label for="work_name" class=" control-label text-right">Work Name</label>				
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="desscription" class="control-label">Description</label>			
            </div>
        </div>
    </div>

    <?php if(count($jobLineItems) > 0) { ?>
        <?php foreach($jobLineItems as $jobLineItem) { ?>
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <div class="form-group">
                    <input type="text" name="work_name" value="<?php echo $jobLineItem["workname"] ?>" class="form-control workname">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <input type="text" name="desscription" value="<?php echo $jobLineItem["description"] ?>" class="form-control description">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">		
                    <button type="Delete" class="btn btn-danger remove-jobeline-row">Delete</button>
                </div>
            </div>
        </div>
        <?php } ?>
    <?php } else { ?>
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <div class="form-group">
                    <input type="text" name="work_name" class="form-control workname">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <input type="text" name="desscription" class="form-control description">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">		
                    <button type="Delete" class="btn btn-danger remove-jobeline-row">Delete</button>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<div class="form-group">	
    <div class="col-sm-offset-6 col-sm-3">
        <button class="btn btn-success save-jobeline">Save</button>
    </div>
    <div class="col-sm-3">
        <button class="btn btn-success add-jobeline">Add</button>
    </div>
</div>