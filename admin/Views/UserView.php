<?php
	
	class ViewUser{
		public function v_all_user($posts){
			include "template/user/view_all_user.php";	
		}
	
		public function v_user_by_id($post){
			include "template/user/view_user_by_id.php";
		}

		public function v_form_add_user()
		{
			include "template/user/add/form_add_user.php";
		}
		public function v_add_user(){
			include "template/user/add/add_user.php";
		}
		public function v_form_edit_user($user){
			include "template/user/edit/form_edit_user.php";
		}
		public function v_edit_user(){
			include "template/user/edit/edit_user.php";
		}
		public function v_delete_user(){
			include "template/user/delete/delete_user.php";
		}
	
}
?>