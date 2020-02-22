<div class="pull-right">
	<a href="<?php echo site_url('billline/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Billid</th>
		<th>Item</th>
		<th>Description</th>
		<th>Qty</th>
		<th>Value</th>
		<th>Taxthis</th>
		<th>Actions</th>
    </tr>
	<?php foreach($billline as $b){ ?>
    <tr>
		<td><?php echo $b['id']; ?></td>
		<td><?php echo $b['billid']; ?></td>
		<td><?php echo $b['item']; ?></td>
		<td><?php echo $b['description']; ?></td>
		<td><?php echo $b['qty']; ?></td>
		<td><?php echo $b['value']; ?></td>
		<td><?php echo $b['taxthis']; ?></td>
		<td>
            <a href="<?php echo site_url('billline/edit/'.$b['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('billline/remove/'.$b['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
