<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Category', 'category'); ?>

			<div class="input">
				<?php echo Form::select('category', Input::post('category', isset($question) ? $question->category : $current_user->id), $category, array('class' => 'span4')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Question', 'question'); ?>

			<div class="input">
				<?php echo Form::textarea('question', Input::post('question', isset($question) ? $question->question : ''), array('class' => 'span4')); ?>

			</div>
		</div>		
	</fieldset>

<?php if ($subjects): ?>


<table cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example" width="100%">
	<thead>
		<tr>
			<th>Action</th>
			<th>Subject Code</th>
			<th>Subject Description</th>
			<th>Schedule</th>
			<th>Time</th>
			<th>Room</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($subjects as $key => $value): ?><tr>
		<td><?php echo Form::checkbox('subj_id[]', $value['id'], array('id'=>'stud_id'));?></td>
		<td><?php echo $value['subj_code']; ?></td>
		<td><?php echo $value['subj_desc']; ?></td>
		<td><?php echo $value['schedule']; ?></td>
		<td><?php echo $value['time']; ?></td>
		<td><?php echo $value['room']; ?></td>
	</tr>
<?php endforeach; ?>

	</tbody>
</table>
<br />
<br />
<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
<?php echo Form::close(); ?>
<?php else: ?>
<p>No Users.</p>

<?php endif; ?>
<br />
<br />