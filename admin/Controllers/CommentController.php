<?php
	class CommentController{
	
			public function comment_in_category(){
	 		$m_job_from_category = new JobModel();
	 		$posts_chi_tiet_job = $m_job_from_category->job_from_category($_GET["categoryID"]);
			$v_job_from_category = new ViewJob();
	 		$v_job_from_category->v_job_from_category($posts_chi_tiet_job);
		}
	}

?>	