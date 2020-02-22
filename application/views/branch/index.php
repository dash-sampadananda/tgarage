<div class="pull-right">
	<a href="<?php echo site_url('branch/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Companyid</th>
		<th>Nameenglish</th>
		<th>Namearabic</th>
		<th>Address1english</th>
		<th>Address1arabic</th>
		<th>Address2english</th>
		<th>Address2arabic</th>
		<th>Cityenglish</th>
		<th>Cityarabic</th>
		<th>Stateenglish</th>
		<th>Statearabic</th>
		<th>Phone1</th>
		<th>Phone2</th>
		<th>Fax</th>
		<th>Actions</th>
    </tr>
	<?php foreach($branch as $b){ ?>
    <tr>
		<td><?php echo $b['id']; ?></td>
		<td><?php echo $b['companyid']; ?></td>
		<td><?php echo $b['nameenglish']; ?></td>
		<td><?php echo $b['namearabic']; ?></td>
		<td><?php echo $b['address1english']; ?></td>
		<td><?php echo $b['address1arabic']; ?></td>
		<td><?php echo $b['address2english']; ?></td>
		<td><?php echo $b['address2arabic']; ?></td>
		<td><?php echo $b['cityenglish']; ?></td>
		<td><?php echo $b['cityarabic']; ?></td>
		<td><?php echo $b['stateenglish']; ?></td>
		<td><?php echo $b['statearabic']; ?></td>
		<td><?php echo $b['phone1']; ?></td>
		<td><?php echo $b['phone2']; ?></td>
		<td><?php echo $b['fax']; ?></td>
		<td>
            <a href="<?php echo site_url('branch/edit/'.$b['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('branch/remove/'.$b['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
