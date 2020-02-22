<div class="pull-right">
	<a href="<?php echo site_url('company/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
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
		<th>Enabletaxation</th>
		<th>Percentage</th>
		<th>Imagepath</th>
		<th>Actions</th>
    </tr>
	<?php foreach($company as $c){ ?>
    <tr>
		<td><?php echo $c['id']; ?></td>
		<td><?php echo $c['nameenglish']; ?></td>
		<td><?php echo $c['namearabic']; ?></td>
		<td><?php echo $c['address1english']; ?></td>
		<td><?php echo $c['address1arabic']; ?></td>
		<td><?php echo $c['address2english']; ?></td>
		<td><?php echo $c['address2arabic']; ?></td>
		<td><?php echo $c['cityenglish']; ?></td>
		<td><?php echo $c['cityarabic']; ?></td>
		<td><?php echo $c['stateenglish']; ?></td>
		<td><?php echo $c['statearabic']; ?></td>
		<td><?php echo $c['phone1']; ?></td>
		<td><?php echo $c['phone2']; ?></td>
		<td><?php echo $c['fax']; ?></td>
		<td><?php echo $c['enabletaxation']; ?></td>
		<td><?php echo $c['percentage']; ?></td>
		<td><?php echo $c['imagepath']; ?></td>
		<td>
            <a href="<?php echo site_url('company/edit/'.$c['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('company/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
