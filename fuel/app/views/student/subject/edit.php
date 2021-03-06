<h2>Evaluate The Subject</h2>
<br>

<fieldset>
	<table>
		<tr>
			<td><strong>Picture</strong></td>
			<td><?php echo Html::img('uploads/'.$subject[0]['pic_url'], array('class' => "thumbnail", "style" => "width:51px; height:51px")); ?></td>
		</tr>
		<tr>
			<td><strong>Teacher Name:</strong></td>
			<td><?php echo ucwords($subject[0]['fname'])." ".ucwords($subject[0]['mname'])." ".ucwords($subject[0]['lname']); ?></td>
		</tr>
		<tr>
			<td><strong>subject Code:</strong></td>
			<td><?php echo $subject[0]['subj_code']; ?></td>
		</tr>
		<tr>
			<td><strong>subject Code:</strong></td>
			<td><?php echo $subject[0]['subj_desc']; ?></td>
		</tr>
		<tr>
			<td><strong>Schedule:</strong></td>
			<td><?php echo $subject[0]['schedule']; ?></td>
		</tr>
		<tr>
			<td><strong>Time:</strong></td>
			<td><?php echo $subject[0]['time']; ?></td>
		</tr>
			
	</table>		

</fieldset><br><br>
<?php echo Form::open('student/subject/evaluate/'.$subject[0]['subj_id'].'/'.$subject[0]['id'].'/'.$question[0]['id']); ?>
	<table border="1px" cellpadding="10">
		<thead>
			<?php for($y = 0; $y < sizeof($cat_name); $y++){?>
			<tr>
				<td><?php echo "<b>".$cat_name[$y]['cat_name']."</b>"; ?></td>
			</tr>
		</thead>
			<tbody>
			    <?php for($x = 0; $x < sizeof($question); $x++){ 
					$z = $x+1;
				if($cat_name[$y]['id']  == $question[$x]['category']){?>
					<tr>
						<td><?php echo $z.'. '.ucwords($question[$x]['question']); ?></td>
						<?php for($w = 0; $w < sizeof($choices); $w++){?>
						<td><?php echo Form::radio('choices'.$x, $choices[$w]['id'], array('id' =>$z, 'required' => '')).' '.$choices[$w]['choices']; ?></td>
						<?php };?>
					</tr>
				<?php }};?>
			<?php };?>
			</tbody>
	</table>
	<br>
	<div class="clearfix">
		<strong>Comments:</strong>
		<div class="input">
			<?php echo Form::textarea('comments', Input::post('comments'), array('class' => 'span6', 'required' => '')); ?>

		</div>
	</div>

	<div class="actions">
			<?php echo Form::submit('submit', 'Submit', array('class' => 'btn btn-primary')); ?>
	</div>
		
<?php echo Form::close(); ?>

<p>
	<?php echo Html::anchor('student/subject/view/'.$subject[0]['id'], 'View'); ?> |
	<?php echo Html::anchor('student/subject', 'Back'); ?>
</p>
