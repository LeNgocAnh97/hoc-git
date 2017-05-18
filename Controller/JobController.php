
<?php
    include  "Model/JobModel.php";
    include  "View/JobView.php";
    class JobControllerPublic{
    public function all_job(){
        $m_all_job = new JobModelPublic();
        $all_job =  $m_all_job->all_job();
        $m_all_category_dua_vao_menu = new JobModelPublic();
        $All_category_dua_vao_menu = $m_all_category_dua_vao_menu->m_all_category_dua_vao_menu();
        //  var_dump($All_category_dua_vao_menu);
        $v_all_job = new JobViewPublic();
        $v_all_job->v_all_job($all_job,$All_category_dua_vao_menu);
    }

}
?>