<?php 
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

?>