<?php
class Controller_Student_Questionnaire extends Controller_Teacher 
{

	public function action_index()
	{
		$data['questionnaires'] = Model_Questionnaire::find('all');
		$this->template->title = "Questionnaires";
		$this->template->content = View::forge('student\questionnaire/index', $data);

	}

	public function action_view($id = null)
	{
		$data['questionnaire'] = Model_Questionnaire::find($id);

		$this->template->title = "Questionnaire";
		$this->template->content = View::forge('student\questionnaire/view', $data);

	}
	
}