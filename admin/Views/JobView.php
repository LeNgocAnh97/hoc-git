<?php
	class ViewJob{
		public function v_all_job($all_job){
			include "template/job/all_job.php";
		}
		public function v_job_by_id($job_by_id,$comment_and_user_by_job){
			include "template/job/view_job_by_id.php";
		}
		public function get_form_add_job(){
		    include "template/job/add/form_add_job.php";
        }
		public function get_form_edit_user(){
			include "template/job/edit/get_edit_job.php";
		}
	
	}