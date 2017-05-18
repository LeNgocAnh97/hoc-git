<h1> Tất cả thể loại </h1>
<table  class="table table-striped">
		<Tr>
		<th>Tên</th>
		<th>Ngày tạo</th>
		<th>Ngày sửa</th>
		<th> Edit </th>
		<th> Delete </th>
		</Tr>
	
	
	<?php  foreach ($posts as $post): ?>
		<tr>
		<td><a/> <?php echo $post["name"]; ?> </a></td>
		<td> <?php echo $post["created"]; ?> </td>
		<td> <?php echo $post["modified"]; ?> </td>
		<td><a href="index.php?test=form_edit_category&idTheLoai=<?php echo $post['id']?>">Sửa</a> </td>
		
		</tr>
	<?php endforeach;?>
	<a href="index.php?test=form_add_user"><h3> Thêm thể loại </h3>  </a>
	</table>

