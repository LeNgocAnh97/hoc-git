<?php
class JobModelPublic{
    public function all_job(){
        include "connect.php";
        $stmt = $conn->prepare("
            SELECT * from jobs
        ");

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $result = $stmt->fetchAll();
        //var_dump($result);
        return $result;
    }
    public function m_all_category_dua_vao_menu()
    {
        include "connect.php";  // Kết nối cơ sở dữ liệu
        $stmt = $conn->prepare('SELECT * from categories');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $resultSet = $stmt->fetchAll(); // Xuất ra mảng dữ liệu
        $posts = $resultSet; // Hứng giá trị
        return $posts; //Trả ra
    }
}
?>