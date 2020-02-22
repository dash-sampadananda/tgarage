<div class="pull-right">
	<a href="<?php echo site_url('vehicle/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Customerid</th>
		<th>Make</th>
		<th>Model</th>
		<th>Number</th>
		<th>Actions</th>
    </tr>
	<?php foreach($vehicle as $v){ ?>
    <tr>
		<td><?php echo $v['id']; ?></td>
		<td><?php echo $v['customerid']; ?></td>
		<td><?php echo $v['make']; ?></td>
		<td><?php echo $v['model']; ?></td>
		<td><?php echo $v['number']; ?></td>
		<td>
            <a href="<?php echo site_url('vehicle/edit/'.$v['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('vehicle/remove/'.$v['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
