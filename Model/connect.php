<?php

$conn = new PDO('mysql:host=localhost;dbname=jobeet;charset=utf8', "root", "");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Kết nối thành công";
//$conn = null; // Đóng kết nối
/*$conn = mysqli_connect("localhost", "root","", "jobeet");
mysqli_set_charset($conn,"utf8");*/

?>
