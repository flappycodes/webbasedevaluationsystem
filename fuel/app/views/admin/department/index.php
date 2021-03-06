<h2>Listing Departments</h2>
<br>
<?php if ($departments): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Dept name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($departments as $department): ?>		<tr>

			<td><?php echo $department->dept_name; ?></td>
			<td>
				<?php echo Html::anchor('admin/department/view/'.$department->id, '',  array('class'=>'icon icon-eye-open', 'title'=>'View')); ?> |
				<?php echo Html::anchor('admin/department/edit/'.$department->id, '', array('class'=>'icon icon-wrench', 'title'=>'Edit')); ?> |
				<?php echo Html::anchor('admin/department/delete/'.$department->id, '', array('onclick' => "return confirm('Are you sure?')", 'class'=>'icon icon-trash', 'title'=>'Delete')); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Departments.</p>

<?php endif; ?><p>
	<br />
	<br />
	<?php echo Html::anchor('admin/department/create', 'Add new Department', array('class' => 'btn btn-success')); ?>

</p>
