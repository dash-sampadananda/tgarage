<div class="pull-right">
	<a href="<?php echo site_url('bill/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Billno</th>
		<th>Jobcardno</th>
		<th>Createddate</th>
		<th>Chequeno</th>
		<th>Bankname</th>
		<th>Issettelted</th>
		<th>Paymenttype</th>
		<th>Amount</th>
		<th>Tax</th>
		<th>Userid</th>
		<th>Actions</th>
    </tr>
	<?php foreach($bill as $b){ ?>
    <tr>
		<td><?php echo $b['id']; ?></td>
		<td><?php echo $b['billno']; ?></td>
		<td><?php echo $b['jobcardno']; ?></td>
		<td><?php echo $b['createddate']; ?></td>
		<td><?php echo $b['chequeno']; ?></td>
		<td><?php echo $b['bankname']; ?></td>
		<td><?php echo $b['issettelted']; ?></td>
		<td><?php echo $b['paymenttype']; ?></td>
		<td><?php echo $b['amount']; ?></td>
		<td><?php echo $b['tax']; ?></td>
		<td><?php echo $b['userid']; ?></td>
		<td>
            <a href="<?php echo site_url('bill/edit/'.$b['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('bill/remove/'.$b['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
