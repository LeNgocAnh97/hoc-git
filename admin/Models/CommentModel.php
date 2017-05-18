<?php
	class ModelUser_Comment{
		public function comment_by_user($id){
			include "connect.php";
			$stmt = $conn->prepare
			("SELECT  users.img , username, messsage FROM jobs 
								INNER JOIN applications ON jobs.id = applications.job_id 
								INNER JOIN users ON applications.user_id =  users.id
			  					WHERE applications.job_id = '$id'
			 ");
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$resultSet = $stmt->fetchAll(); // Xuất ra mảng dữ liệu
			//var_dump($resultSet);
			$posts = $resultSet; // Hứng giá trị 
			return $posts; //Trả ra 
		}
	}
?>