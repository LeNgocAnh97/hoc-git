<?php
class CategoryModelPublic
{
    public function m_all_job_theo_id_cua_category($id)
    {
        include "connect.php";  // Kết nối cơ sở dữ liệu
        $stmt = $conn->prepare("SELECT * from jobs INNER JOIN  categories 
        ON  jobs.category_id = categories.id WHERE categories.id = '$id'
        ");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $resultSet = $stmt->fetchAll(); // Xuất ra mảng dữ liệu
        $posts = $resultSet; // Hứng giá trị
        return $posts; //Trả ra
    }
}
?>