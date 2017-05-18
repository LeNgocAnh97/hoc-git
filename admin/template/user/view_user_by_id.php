<!DOCTYPE html>
<html>
<head>
	<title>Review Job</title>
</head>
<body>
<?php foreach($post as $ps) ?>
<h1> User <small> <?php echo $ps["username"]; ?></small></h1> 
<p class="alert alert-danger"> <?php echo $ps["email"]; ?></p>
<p class="alert alert-success"> <?php echo $ps["skills"]; ?></p>
<p class="alert alert-danger"> <?php echo $ps["created"]; ?></p>

</body>
</html>