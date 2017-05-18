<?php
	 include "Models/JobModel.php";
	 include "Views/JobView.php";
	 class JobController{
	 	public function all_job(){
            $m_all_job = new JobModel();
            $all_job = $m_all_job->all_job();
            $v_all_job = new ViewJob();
            $v_all_job->v_all_job($all_job);
	 	}
	 	public function edit_job(){
	 		$v_edit_job = new ViewJob();
	 		$v_edit_job->get_form_edit_user();
	 		$title = $_POST["title"];
	 		$description = $_POST["description"];
	 		$public  = $_POST["radio"];
	 		$id = $_GET["idJob"];
	 		$post_from_form_edit_job = array(
	 			"id" => $id,
	 			"title" => $title,
	 			"description" => $description,
	 			"public" => $public
	 		);
	 		//var_dump($post_from_form_edit_job);

	 		$m_edit_user = new JobModel();
	 		$m_edit_user->edit_job($post_from_form_edit_job);
	 	}
	 	public function get_form_add_job(){
            $v_get_form_add_job =  new ViewJob();
            $v_get_form_add_job->get_form_add_job();
        }
	 }

	

?>