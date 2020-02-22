<?php echo form_open('jobcard/add', array("class" => "form-horizontal")); ?>

<div class="form-group">
    <label for="jobtype" class="col-md-4 control-label">Jobtype</label>
    <div class="col-md-8">
        <input type="text" name="jobtype" value="<?php echo $this->input->post('jobtype'); ?>" class="form-control" id="jobtype" />
    </div>
</div>
<div class="form-group">
    <label for="insuranceid" class="col-md-4 control-label">Insurance</label>
    <div class="col-md-8">
        <select name="insuranceid"  class="form-control">
            <option value="" >Select an Insurance Company</option>
            <?php foreach ($insuranceOptions as $insuranceOption) { ?>
            <option value="<?php echo $insuranceOption["id"]; ?>" ><?php echo $insuranceOption["name"]; ?></option>
            <?php } ?>
        </select>
    </div>
</div>
<!--	<div class="form-group">
                <label for="cancled" class="col-md-4 control-label">Cancled</label>
                <div class="col-md-8">
                        <input type="text" name="cancled" value="<?php echo $this->input->post('cancled'); ?>" class="form-control" id="cancled" />
                </div>
        </div>-->
<!--	<div class="form-group">
                <label for="userid" class="col-md-4 control-label">Userid</label>
                <div class="col-md-8">
                        <input type="text" name="userid" value="<?php echo $this->input->post('userid'); ?>" class="form-control" id="userid" />
                </div>
        </div>-->
<!--	<div class="form-group">
                <label for="createddate" class="col-md-4 control-label">Createddate</label>
                <div class="col-md-8">
                        <input type="text" name="createddate" value="<?php echo $this->input->post('createddate'); ?>" class="form-control" id="createddate" />
                </div>
        </div>-->
<div class="form-group">
    <label for="delivereddate" class="col-md-4 control-label">Delivereddate</label>
    <div class="col-md-8">
        <input type="text" name="delivereddate" value="<?php echo $this->input->post('delivereddate'); ?>" class="form-control" id="delivereddate" />
    </div>
</div>
<div class="form-group">
    <label for="customerfeedback" class="col-md-4 control-label">Customerfeedback</label>
    <div class="col-md-8">
        <input type="text" name="customerfeedback" value="<?php echo $this->input->post('customerfeedback'); ?>" class="form-control" id="customerfeedback" />
    </div>
</div>
<div class="form-group">
    <label for="customerid" class="col-md-4 control-label">Customerid</label>
    <div class="col-md-8">
        <input type="text" name="customerid" class="form-control custAutoComplete" type="text" autocomplete="off" id="customerid" data-url="<?php echo $custAutocompleteUrl; ?>" />
    </div>
</div>
<div class="form-group">
    <label for="jobstatus" class="col-md-4 control-label">Jobstatus</label>
    <div class="col-md-8">
        <input type="text" name="jobstatus" value="<?php echo $this->input->post('jobstatus'); ?>" class="form-control" id="jobstatus" />
    </div>
</div>
<div class="form-group">
    <label for="vehicleid" class="col-md-4 control-label">Vehicleid</label>
    <div class="col-md-8">
        <select name="vehicleid" class="form-control" id="vehicleid">
            <option value="" >Select a Vehicle</option>
        </select>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success">Save</button>
    </div>
</div>

<?php echo form_close(); ?>