<div class="pull-right">
	<a href="<?php echo site_url('jobcard/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Jobtype</th>
		<th>Insuranceid</th>
		<th>Cancled</th>
		<th>Userid</th>
		<th>Createddate</th>
		<th>Delivereddate</th>
		<th>Customerfeedback</th>
		<th>Customerid</th>
		<th>Jobstatus</th>
		<th>Vehicleid</th>
		<th>Actions</th>
    </tr>
	<?php foreach($jobcard as $j){ ?>
    <tr>
		<td><?php echo $j['id']; ?></td>
		<td><?php echo $j['jobtype']; ?></td>
		<td><?php echo $j['insuranceid']; ?></td>
		<td><?php echo $j['cancled']; ?></td>
		<td><?php echo $j['userid']; ?></td>
		<td><?php echo $j['createddate']; ?></td>
		<td><?php echo $j['delivereddate']; ?></td>
		<td><?php echo $j['customerfeedback']; ?></td>
		<td><?php echo $j['customerid']; ?></td>
		<td><?php echo $j['jobstatus']; ?></td>
		<td><?php echo $j['vehicleid']; ?></td>
		<td>
            <a href="<?php echo site_url('jobcard/edit/'.$j['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('jobcard/remove/'.$j['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
