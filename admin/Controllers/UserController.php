<?php
	include "Models/UserModel.php";
	include "Views/UserView.php";
	
	class UserController{
		public function all_user(){
			$all_user = new UserModel();  // Khởi tạo đối tượng mới 
			$posts = $all_user->post_all_user(); //Hứng giá trị trả về từ model

			$v_all_user = new ViewUser();  
			$v_all_user->v_all_user($posts);
		}
		public function user_by_id(){
			$m_user_by_id = new UserModel();
			$post = $m_user_by_id->post_user_by_id($_GET["idUser"]);
			/*print_r($post);*/
			$v_user_by_id = new ViewUser();
			$v_user_by_id->v_user_by_id($post);
		}
		public function Call_form_add_user(){
			$m_form_add_user = new ViewUser();
			$m_form_add_user->v_form_add_user();
		}
		public function c_add_user(){
			$v_add_user = new ViewUser();
			$v_add_user->v_add_user();

			//Xử lý $_POST
			$username  = $_POST["username"];
		 	$password = $_POST["password"];
		 	$skills = $_POST["skills"];
		 	$email = $_POST["email"];
		 	//Lưu vào mảng
			 $post_from_form_add_user = array(
		 	"username" => $username,
		 	"password" => $password,
		 	"skills" => $skills,
		 	"email" => $email
		 	);
			 $m_add_user = new UserModel();
			 $m_add_user->add_user($post_from_form_add_user);
		}
		//Edit User
		public function c_call_form_edit_user(){
			$c_user_by_id = new UserModel();
			$user = $c_user_by_id->post_user_by_id($_GET["idUser"]);
			//print_r($user);
			$v_edit_user = new ViewUser();
			$v_edit_user->v_form_edit_user($user);
		}
		public function c_edit_user(){
			$v_edit_user = new ViewUser();
			$v_edit_user->v_edit_user();

			//Xử lý $_POST
			$id = $_GET["idUser"];
			$username  = $_POST["username"];
		 	$password = $_POST["password"];
		 	$skills = $_POST["skills"];
		 	$email = $_POST["email"];
		 	//Lưu vào mảng
			 $post_from_form_edit_user = array(
			"id" =>  $id,
		 	"username" => $username,
		 	"password" => $password,
		 	"skills" => $skills,
		 	"email" => $email
		 	);
			 var_dump($post_from_form_edit_user);

			$m_edit_user =  new UserModel();
			$m_edit_user->edit_user($post_from_form_edit_user);
			
		}	
		public function c_delete_user(){
			$v_delete_user = new ViewUser();
			$v_delete_user->v_delete_user();
			$id = $_GET["idUser"];
			$m_delete_user = new UserModel();
			$m_delete_user->delete_user($id);
		}

		public function logout(){
				
		}


	}
?>