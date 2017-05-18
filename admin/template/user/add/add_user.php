<?php
if(isset($_POST["submit"]))
	{
		 $username  = $_POST["username"];
		 $password = $_POST["password"];
		 $skills = $_POST["skills"];
		 $email = $_POST["email"];

		 $post_from_form_add_user = array(
		 	"username" => $username,
		 	"password" => $password,
		 	"skills" => $skills,
		 	"email" => $email
		 );
	}
?>