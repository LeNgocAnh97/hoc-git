<?php 
	//print_r($user);
?>
<?php foreach($user as $us) {?>

<form method="post" action="index.php?test=edit_user&idUser=<?php echo 	$us['id'] ?>">
	Tên <input type="text" name="username" placeholder="<?php echo $us["username"] ?>"> <br>
	Mật khẩu <input type="text" name="password" placeholder="<?php echo $us["password"] ?> "> <br>
	Email <input type="text" name="email" placeholder="<?php echo $us["email"] ?>"> <br>
	Kỹ năng 	<input type="text" name="skills" placeholder="<?php echo $us["skills"] ?>"	> <br>
<?php } ?>
	<input type="submit" name="submit">
</form> 