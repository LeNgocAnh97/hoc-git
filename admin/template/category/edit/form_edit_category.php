
<?php foreach($category as $cate): ?>

<form method="post" action="index.php?test=edit_category&idTheLoai=<?php echo $cate['id'] ?>">
	Tên <input type="text" name="name" placeholder="<?php echo $cate["name"] ?>"> <br>

		
<?php endforeach; ?>
	<input type="submit" name="submit">
</form> 