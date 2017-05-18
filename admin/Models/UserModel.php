<?php
	include "connect.php";
	class UserModel{
		public function post_all_user(){
			include "connect.php";  // Kết nối cơ sở dữ liệu	
			$stmt = $conn->prepare('SELECT * from users');
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$resultSet = $stmt->fetchAll(); // Xuất ra mảng dữ liệu
			$posts = $resultSet; // Hứng giá trị 
			return $posts; //Trả ra 
			
		}
		
		public function post_user_by_id($id){
			include "connect.php";
			
			$stmt = $conn->prepare("SELECT * from users WHERE id = '$id'");
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$resultSet = $stmt->fetchAll();
			$post = $resultSet;
			return $post;
		}
		public function add_user($post_from_form_add_user){
				
			include "connect.php";
			$stmt = $conn->prepare("
				INSERT INTO users (username,password,email,skills,created)VALUES(?,?,?,?,?)");
		
			$stmt->bindValue(1,$post_from_form_add_user["username"]);
			$stmt->bindValue(2,$post_from_form_add_user["password"]);
			$stmt->bindValue(3,$post_from_form_add_user["email"]);
			$stmt->bindValue(4,$post_from_form_add_user["skills"]);
			$stmt->bindValue(5,date('Y/m/d H:i:s'));
			$stmt->execute();

		}
		public function edit_user($post_from_form_edit_user){
			include "connect.php";
			//var_dump($post_from_form_edit_user);
			$stmt= $conn->prepare("
				UPDATE users SET username = ? , password = ? , email = ?, skills = ?, created = ? WHERE id = ? ;
			");
			$stmt->bindValue(1,$post_from_form_edit_user["username"]);
			$stmt->bindValue(2,$post_from_form_edit_user["password"]);
			$stmt->bindValue(3,$post_from_form_edit_user["email"]);
			$stmt->bindValue(4,$post_from_form_edit_user["skills"]);
			$stmt->bindValue(5,date('Y/m/d H:i:s'));
			$stmt->bindValue(6,$post_from_form_edit_user["id"]);
			$stmt->execute();
		}
		public function delete_user($id){
			include "connect.php";
			$stmt= $conn->prepare("
				DELETE FROM users WHERE id = '$id'
			");
			$stmt->execute();
		}

	

	}
?>