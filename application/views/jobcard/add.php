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
<div class="form-group">
    <label for="delivereddate" class="col-md-4 control-label">Delivereddate</label>
    <div class="col-md-8">
        <input type="date" name="delivereddate" value="<?php echo $this->input->post('delivereddate'); ?>" class="form-control" id="delivereddate" />
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
    <div class="col-md-6">
        <input name="customerid" class="form-control custAutoComplete" type="text" autocomplete="off" id="customerid" data-url="<?php echo $custAutocompleteUrl; ?>" />
    </div>
    <div class="col-md-2">
        <button class="btn btn-success" id="addcustomer" data-toggle="modal" data-target="#addCustomerModal">Add</button>
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
    <div class="col-md-6">
        <select name="vehicleid" class="form-control" id="vehicleid">
            <option value="" >Select a Vehicle</option>
        </select>
    </div>
    <div class="col-md-2">
        <button class="btn btn-success" id="addvehicle" data-toggle="modal" data-target="#addVehicleModal">Add</button>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success">Save</button>
    </div>
</div>

<?php echo form_close(); ?>