<h2>Listing Subjects</h2>
<br>
<?php if ($subjects): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example" width="100%">
	<thead>
		<tr>
			<th>Subject Code</th>
			<th>Subeject Description</th>
			<th>Schedule</th>
			<th>Time</th>
			<th>Room</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($subjects as $subject): ?>		<tr>
			<td><?php echo $subject['subj_code']; ?></td>
			<td><?php echo $subject['subj_desc']; ?></td>
			<td><?php echo $subject['schedule']; ?></td>
			<td><?php echo $subject['time']; ?></td>
			<td><?php echo $subject['room']; ?></td>
			<td>
				<?php echo Html::anchor('teacher/subject/studentlist/'.$subject['sid'], '', array('class'=>'icon icon-eye-open', 'title'=>'View')); ?> | 
				<?php echo Html::anchor('teacher/subject/result_evaluation/'.$subject['teacher_id'].'/'.$subject['sid'], '', array('class'=>'icon icon-eye-open', 'title'=>'View Result of Evaluation')); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Subjects in this semester.</p>

<?php endif; ?>
