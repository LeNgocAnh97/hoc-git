<?php
	class ViewCategory{
		public function v_all_category($posts)
		{
			include "template/category/view_all_category.php";
		}
		public function v_call_form_edit_category($category){
			include "template/category/edit/form_edit_category.php";
		}
		public function v_edit_category(){
			include "template/category/edit/edit_category.php";
		}
		public function v_lay_category_de_ajax_job($posts){
			include "template/job/edit/view_job_from_category.php";
		}
	}
?>