<?php
class Model_Subject extends \Orm\Model
{
	protected static $_belongs_to = array('users'  => array('key_from' => 'id'), 
										  'question' => array('key_to' => 'id'));

	protected static $_properties = array(
		'id',
		'subj_code',
		'subj_desc',
		'schedule',
		'time',
		'room',
		'teacher_id',
		'semester',
		'academicyear',
		'dateevaluation',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('subj_code', 'Subj_code', 'max_length[50]');
		$val->add_field('subj_desc', 'Subj_desc', 'max_length[50]');
		$val->add_field('schedule', 'Schedule', 'max_length[50]');
		$val->add_field('time', 'Time', '');
		$val->add_field('room', 'Room', 'max_length[50]');
		$val->add_field('teacher_id', 'Teacher Id', 'valid_string[numeric]');
		$val->add_field('semester', 'Semester', '');
		$val->add_field('academicyear', 'Academic Year', '');
		$val->add_field('dateevaluation', 'Dateevaluation', '');
		return $val;
	}

}
