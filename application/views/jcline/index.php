<div class="pull-right">
	<a href="<?php echo site_url('jcline/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Workname</th>
		<th>Description</th>
		<th>Actions</th>
    </tr>
	<?php foreach($jcline as $j){ ?>
    <tr>
		<td><?php echo $j['id']; ?></td>
		<td><?php echo $j['workname']; ?></td>
		<td><?php echo $j['description']; ?></td>
		<td>
            <a href="<?php echo site_url('jcline/edit/'.$j['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('jcline/remove/'.$j['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
