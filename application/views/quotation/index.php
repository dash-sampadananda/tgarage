<div class="pull-right">
	<a href="<?php echo site_url('quotation/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Createdate</th>
		<th>Approved</th>
		<th>Approvedby</th>
		<th>Approveddate</th>
		<th>Jobcardno</th>
		<th>Actions</th>
    </tr>
	<?php foreach($quotation as $q){ ?>
    <tr>
		<td><?php echo $q['id']; ?></td>
		<td><?php echo $q['createdate']; ?></td>
		<td><?php echo $q['approved']; ?></td>
		<td><?php echo $q['approvedby']; ?></td>
		<td><?php echo $q['approveddate']; ?></td>
		<td><?php echo $q['jobcardno']; ?></td>
		<td>
            <a href="<?php echo site_url('quotation/edit/'.$q['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('quotation/remove/'.$q['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
