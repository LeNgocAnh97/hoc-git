<?php
	include "Models/CategoryModel.php";
	include "Views/CategoryView.php";
	class CategoryController{
		public function all_cetegory(){
			$m_all_categoty = new  CategoryModel();
			$posts = $m_all_categoty->post_all_category();
			//print_r($posts);
			$v_all_category = new ViewCategory();
			$v_all_category->v_all_category($posts);
		}

		public function call_form_edit_category(){
			// Đưa giá trị vào view để placeholder
			$m_edit_category_id = new CategoryModel();
			$category = $m_edit_category_id->select_category_by_id($_GET["idTheLoai"]);

			$m_form_edit_category = new ViewCategory();
			$m_form_edit_category->v_call_form_edit_category($category);
		}
		public function edit_category(){
			$v_edit_category_by_id = new ViewCategory();
			$v_edit_category_by_id->v_edit_category();
			// Nếu $_POST["name"] không rỗng thì mới cho thực hiện lưu dữ liệu
			if(isset($_POST["name"]) && isset($_POST["modified"]) && $_POST["name"] != "")
			{
			$name = $_POST["name"];
			$modified = $_POST["modified"];
			$id = $_GET["idTheLoai"];
			$post_from_form_edit_category = array(
				"id" => $id,
				"name" => $name,
				"modified" => $modified
			);
			$m_edit_category_by_id=  new CategoryModel();
			$m_edit_category_by_id->edit_category($post_from_form_edit_category);
			
			} // Kết thúc if

	}
		public function lay_category_de_ajax_edit_job(){
			$m_all_categoty = new  CategoryModel();
			$posts = $m_all_categoty->post_all_category();
			$v_all_category = new ViewCategory();
			$v_all_category->v_lay_category_de_ajax_job($posts);
		}
	}
?>