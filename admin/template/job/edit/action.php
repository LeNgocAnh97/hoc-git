<?php
	
		$id =  $_GET["id"];
		$conn = new PDO('mysql:host=localhost;dbname=jobeet;charset=utf8', "root", "");
	    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare
				("SELECT jobs.id,title,description, jobs.modified, jobs.created from jobs INNER JOIN categories 
				  ON jobs.category_id = categories.id WHERE categories.id = '$id' ");
				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				$stmt->execute();
				$resultSet = $stmt->fetchAll();
?>
<hr>

<form>
<select class="form-control" onchange="ajaxfunction2(this.value)">
 
	<?php foreach($resultSet as $job){ ?>
	<option value="<?php echo $job['id']; ?>" > <?php echo $job["title"];  ?></option>
	<?php } ?>
</select>

</form>