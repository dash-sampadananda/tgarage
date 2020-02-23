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
        <!--<input name="customerid" class="form-control custAutoComplete" type="text" autocomplete="off" id="customerid" data-url="<?php echo $custAutocompleteUrl; ?>" />-->
        <select class="form-control custAutoComplete" name="customerid"
            placeholder="type to search..." autocomplete="off" id="customerid" data-url="<?php echo $custAutocompleteUrl; ?>" ></select>
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

<div id="addCustomerModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Customer</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control new-cust-name" />
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Phone</label>
                        <div class="col-md-8">
                            <input type="text" name="phone" class="form-control new-cust-phone" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success save-customer" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<div id="addVehicleModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Vehicle</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group">
                        <label for="make" class="col-md-4 control-label">Make</label>
                        <div class="col-md-8">
                            <input type="text" name="make" class="form-control new-vehic-make" />
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group">
                        <label for="model" class="col-md-4 control-label">Model</label>
                        <div class="col-md-8">
                            <input type="text" name="model" class="form-control new-vehic-model" />
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group">
                        <label for="number" class="col-md-4 control-label">Number</label>
                        <div class="col-md-8">
                            <input type="text" name="number" class="form-control new-vehic-number" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success save-vehicle" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>