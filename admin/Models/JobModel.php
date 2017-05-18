
		//Lấy ra id của job để click xem chi tiết
		public function get_id_job(){

		}
		public function chi_tiet_job($id){
			include "connect.php";
			$stmt = $conn->prepare
			("SELECT  * FROM jobs WHERE id = '$id'");
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$resultSet = $stmt->fetchAll(); // Xuất ra mảng dữ liệu
			return $resultSet; //Trả ra
			//print_r($resultSet);
		}
		public function comment_from_job($id)
		{
			include "connect.php";
			$stmt = $conn->prepare
			("SELECT job_id, applications.id, messsage from applications INNER JOIN jobs
			  ON jobs.id = applications.job_id WHERE jobs.id = '$id' ");
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$resultSet = $stmt->fetchAll(); // Xuất ra mảng dữ liệu
			$posts = $resultSet; // Hứng giá trị 
			return $posts; //Trả ra 
		}
		public function edit_job($post_from_form_edit_job){
			include "connect.php";
			//var_dump($post_from_form_edit_user);
			$stmt= $conn->prepare("
				UPDATE jobs SET title = ? , description = ? , is_public =? ,modified = ? WHERE id = ? ;
			");
			$stmt->bindValue(1,$post_from_form_edit_job["title"]);
			$stmt->bindValue(2,$post_from_form_edit_job["description"]);
			$stmt->bindValue(3,$post_from_form_edit_job["public"]);
			$stmt->bindValue(4,date('Y/m/d H:i:s'));
			$stmt->bindValue(5,$post_from_form_edit_job["id"]);
			$stmt->execute();
		}
		public function add_job($post_from_form_add_job){
		    include  "connect.php";
            $stmt = $conn->prepare("
				INSERT INTO users (title ,description ,is_public ,created , category_id, user_id )VALUES(?,?,?,?,?, ?)");

            $stmt->bindValue(1,$post_from_form_add_job["title"]);
            $stmt->bindValue(2,$post_from_form_add_job["description"]);
            $stmt->bindValue(3,$post_from_form_add_job["is_public"]);
            $stmt->bindValue(5,date('Y/m/d H:i:s'));
            $stmt->bindValue(4,$post_from_form_add_job["category_id"]);
            $stmt->bindValue(4,$post_from_form_add_job["user_id "]);
            $stmt->execute();
        }

	}

?>