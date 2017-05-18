<?php
	
	class CategoryModel{
		public function post_all_category(){
			include "connect.php";  // Kết nối cơ sở dữ liệu	
			$stmt = $conn->prepare('SELECT * from categories');
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$resultSet = $stmt->fetchAll(); // Xuất ra mảng dữ liệu
			$posts = $resultSet; // Hứng giá trị 
			return $posts; //Trả ra 
		}
		public function select_category_by_id($id){
			include "connect.php";  // Kết nối cơ sở dữ liệu
			$stmt = $conn->prepare("SELECT * from categories WHERE id='$id'");
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$resultSet = $stmt->fetchAll(); // Xuất ra mảng dữ liệu
			$posts = $resultSet; // Hứng giá trị
			return $posts; //Trả ra
		}
		public function edit_category($post_from_form_edit_category){
			include "connect.php";  // Kết nối cơ sở dữ liệu
				$stmt= $conn->prepare("
				UPDATE categories SET name = ? , modified = ? WHERE id = ? ;
			");
			$stmt->bindValue(1,$post_from_form_edit_category["name"]);
			$stmt->bindValue(2,date('Y/m/d H:i:s'));
			$stmt->bindValue(3,$post_from_form_edit_category["id"]);
			$stmt->execute();
		
		}		

	}

?>