<div class="pull-right">
	<a href="<?php echo site_url('insurance/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Description</th>
		<th>Actions</th>
    </tr>
	<?php foreach($insurance as $i){ ?>
    <tr>
		<td><?php echo $i['id']; ?></td>
		<td><?php echo $i['name']; ?></td>
		<td><?php echo $i['description']; ?></td>
		<td>
            <a href="<?php echo site_url('insurance/edit/'.$i['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('insurance/remove/'.$i['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
