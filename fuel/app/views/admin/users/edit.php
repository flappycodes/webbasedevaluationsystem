<h2>Editing User</h2>
<br>

<?php
	if ($user->group == 1) {
	 	echo render('admin\users/_form_student');
	 }
	 elseif ($user->group == 50) {
	  	echo render('admin\users/_form_teacher');
	  }
	  else{
	   	echo render('admin\users/_form');
	  }  
?>
<p>
	<?php echo Html::anchor('admin/users/view/'.$user->id, 'View'); ?> |
	<?php echo Html::anchor('admin/users', 'Back'); ?></p>
