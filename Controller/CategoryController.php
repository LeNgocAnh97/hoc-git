<?php
    include "Model/CategoryModel.php";
    include "View/CategoryView.php";
    class CategoryControllerPublic{
        public function all_job_theo_id_cua_category(){
            $m_all_job_theo_id_cua_category = new CategoryModelPublic();
            $all_job_theo_id_cua_category = $m_all_job_theo_id_cua_category->m_all_job_theo_id_cua_category($_GET["category"]);
            var_dump($all_job_theo_id_cua_category);
            $v_all_job_theo_id_cua_category = new CategoryViewPublic();
            $v_all_job_theo_id_cua_category->v_all_job_theo_id_cua_category($all_job_theo_id_cua_category);
        }
}

?>