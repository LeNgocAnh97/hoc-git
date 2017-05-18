
<h1> Tất cả công việc </h1>
<table  class="table table-striped">
    <Tr>
        <th>Tên</th>
        <th>Nội dung</th>
        <th> Thể loại </th>
        <th>Ngày tạo</th>
        <th> Ngày sửa </th>
        <th> Sửa </th>
        <th> Delete </th>
    </Tr>
    <?php //print_r($posts);
    //var_dump($posts); ?>

    <?php  foreach ($all_job as $job) : ?>
        <tr>
            <td><a href="index.php?test=all_job&idJob=<?php echo $job['id']  ?>"> <?php echo $job["title"]; ?> </a></td>
            <td> <?php echo $job["description"]; ?> </td>
            <td> <?php echo $job["name"] ?></td>
            <td> <?php echo $job["created"] ?></td>
            <td> <?php echo $job["modified"] ?></td>

            <td> <a href="index.php?test=form_edit_user&idUser=<?php echo $job['id']?>">Sửa</a> </td>
            <td> <a href="index.php?test=delete_user&idUser=<?php echo $job['id']?>""> Xoá </a></td>
        </tr>
    <?php endforeach;?>
    <a href="index.php?test=form_add_user"><h3> Thêm user </h3>  </a>
</table>

