
<?php
		$id =  $_GET["id"];
		$conn = new PDO('mysql:host=localhost;dbname=jobeet;charset=utf8', "root", "");
	    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare
				("SELECT * from jobs where id = '$id'");
				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				$stmt->execute();
				$resultSet = $stmt->fetchAll();

	 	
?>
<?php foreach($resultSet as $job) ?>
<form class="form" method="post" action="index.php?test=get_form_edit_job&idJob=<?php echo $job["id"] ?>">
	<div class="form-group">
	<label> Ten cong viec</label>
	<input type="text" placeholder="<?php echo  $job["title"] ?>" name="title">
	</div>
Nội dung:  <input type="text" placeholder="<?php echo $job["description"] ?>" name="description"> <br>
	Chế độ public: 
	<input type="radio" name="radio" value="1">
	Không public
	<input type="radio" name="radio" value="0"> <br>
	<input type="submit" name="submit" value="Sửa">

</form>