<h2>Viewing #<?php echo $subject[0]['id']; ?></h2>
<p>
	<strong>subject Code:</strong>
	<?php echo $subject[0]['subj_code']; ?></p>
<p>
	<strong>subject Code:</strong>
	<?php echo $subject[0]['subj_desc']; ?></p>
<p>
	<strong>Schedule:</strong>
	<?php echo $subject[0]['schedule']; ?></p>
<p>
	<strong>Time:</strong>
	<?php echo $subject[0]['time']; ?></p>
<p>
	<strong>Room:</strong>
	<?php echo $subject[0]['room']; ?></p>
<p>
	<strong>Teacher Name:</strong>
	<?php echo ucwords($subject[0]['fname'])." ".ucwords($subject[0]['mname'])." ".ucwords($subject[0]['lname']); ?></p>

<?php echo Html::anchor('admin/subject/edit/'.$subject[0]['id'], 'Edit'); ?> |
<?php echo Html::anchor('admin/subject', 'Back'); ?>