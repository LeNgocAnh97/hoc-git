
<h1> Tất cả công việc </h1>
<table  class="table table-striped">
		<Tr>
		<th>Tên</th>
		<th>Email</th>
		<th>Skill</th>
		<th> Edit </th>
		<th> Delete </th>
		</Tr>
	<?php //print_r($posts);
		//var_dump($posts); ?>
	
	<?php  foreach ($posts as $post) : ?>
		<tr>
		<td><a href="index.php?test=chi_tiet_user&idUser=<?php echo $post['id']  ?>"> <?php echo $post["username"]; ?> </a></td>
		<td> <?php echo $post["email"]; ?> </td>
		<td> <?php echo $post["skills"]; ?> </td>
		<td> <a href="index.php?test=form_edit_user&idUser=<?php echo $post['id']?>">Sửa</a> </td>
		<td> <a href="index.php?test=delete_user&idUser=<?php echo $post['id']?>""> Xoá </a></td>
		</tr>
	<?php endforeach;?>
	<a href="index.php?test=form_add_user"><h3> Thêm user </h3>  </a>
	</table>

