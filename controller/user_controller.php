<?php
    $data = array();
    flexible_function($data);
    function flexible_function(&$data){
        $function = "viewUser";
        if(isset($_GET['action'])){
            $function = $_GET['action'];
        }
        $function($data);
    }
    function viewUser(&$data){
        $data['viewUser'] = m_view();
        $data['page'] = 'user/viewUser';
    }
    function add_form(&$data){
        $data['page'] = "user/addUser";
    }
    function add_users(&$data){
        $data_add = m_add($_POST);
        if($data_add){
            $action = 'viewUser';
        }else{
            $action = 'addUser';
        }
        header("Location: index2.php?action=$action");
    }
    
    function delete(&$data){
        $data_delete = m_delete($_POST);
        if($data_delete){
            $action = 'viewUser';
        }else{
            $action = 'delete';
        }
        header("Location: index2.php?action=$action");
    }
    function edit(&$data){
        $data['page'] = "user/editUser";
    }
    function edit_data(&$data){
        $data['viewUser'] = m_edit($_POST);
        if($data){
            $action = 'viewUser';
        }else{
            $action = 'edit';
        }
        header("Location: index2.php?action=$action");
    }
?>