<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php
	include "template/layout/menu.php";
?>
<div class="col col-md-10">
<?php 	if(isset($_GET["test"]))
	{
		include "Controllers/UserController.php";
		include "Controllers/CategoryController.php";
		include "Controllers/JobController.php";	
		switch ($_GET["test"]) {
			/********************** User *********************/
			case 'user':
				$all_user = new UserController();
				$all_user->all_user();
				break;
			
			case "chi_tiet_user":
				$user_by_id = new UserController();
				$user_by_id->user_by_id();
				break;
			
			//Add user
			case "form_add_user":
				$form_add_user = new UserController();
				$form_add_user->Call_form_add_user();
				break;
			
			case "add_user":
				$add_user = new UserController();
				$add_user->c_add_user();
				header("location: index.php?test=user");	
				break;
			
			//Edit user
			case 'form_edit_user':
				$form_edit_user = new UserController();
				$form_edit_user->c_call_form_edit_user();
				break;
			case 'edit_user':
				$edit_user =  new UserController();
				$edit_user->c_edit_user();
				header("location: index.php?test=user");	
				break;
			
			//Delete User
			case 'delete_user':
				$delete_user =  new UserController();
				$delete_user->c_delete_user();
				header("location: index.php?test=user");	
				break;

		/********************** Category s*********************/
			case "category":
				$all_category = new CategoryController();
				$all_category->all_cetegory();
				break;
			case "form_edit_category":
				$form_edit_category = new CategoryController();
				$form_edit_category-> call_form_edit_category(); 
			case "edit_category":
				$edit_category = new CategoryController();
				$edit_category->edit_category();
				//header("location:index.php?test=category");
				break;

		/***************Job***********************/
            case "all_job":
                $all_job = new JobController();
                $all_job->all_job();
                break;
			case "edit_job":
				$lay_category_de_ajax_job = new CategoryController();
				$lay_category_de_ajax_job->lay_category_de_ajax_edit_job();
				break;
			case "get_form_edit_job":
				$get_form_edit_job = new JobController();
				$get_form_edit_job->edit_job();

            case "add_job":
                $get_form_edit_job = new JobController();
                $get_form_edit_job->get_form_add_job();
                break;
			default:

				include "template/index_view.php";
				break;
		}
	}
	else {
		 include "template/index_view.php";
	}

?>
</div>
