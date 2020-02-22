<div class="pull-right">
	<a href="<?php echo site_url('qline/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Quotationid</th>
		<th>Description</th>
		<th>Qty</th>
		<th>Cost</th>
		<th>Deleted</th>
		<th>Actions</th>
    </tr>
	<?php foreach($qline as $q){ ?>
    <tr>
		<td><?php echo $q['id']; ?></td>
		<td><?php echo $q['quotationid']; ?></td>
		<td><?php echo $q['description']; ?></td>
		<td><?php echo $q['qty']; ?></td>
		<td><?php echo $q['cost']; ?></td>
		<td><?php echo $q['deleted']; ?></td>
		<td>
            <a href="<?php echo site_url('qline/edit/'.$q['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('qline/remove/'.$q['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
