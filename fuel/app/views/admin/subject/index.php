<h2>Listing Subjects</h2>
<br>
<?php if ($users2): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Subject Code</th>
			<th>Subject Description</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users2 as $subject): ?>		<tr>
			<td><?php echo $subject['subj_code']; ?></td>
			<td><?php echo $subject['subj_desc']; ?></td>
			
			<td>
				<?php echo Html::anchor('admin/subject/view/'.$subject['sid'], '', array('class'=>'icon icon-eye-open', 'title'=>'View')); ?> |
				<?php echo Html::anchor('admin/subject/edit/'.$subject['sid'], '', array('class'=>'icon icon-wrench', 'title'=>'Edit')); ?> |
				<?php echo Html::anchor('admin/subject/delete/'.$subject['sid'], '', array('onclick' => "return confirm('Are you sure?'),", 'class'=>'icon icon-trash', 'title'=>'Delete')); ?> |
				<?php echo Html::anchor('admin/subject/student_list/'.$subject['sid'], '', array('class'=>'icon icon-eye-open', 'title'=>'Student List')); ?> 

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Subjects.</p>

<?php endif; ?><p>
	<br />
	<br />
	<br />
	<?php echo Html::anchor('admin/subject/create', 'Add new Subject', array('class' => 'btn btn-success')); ?>
	<?php //echo date("Y"); ?>
</p>
