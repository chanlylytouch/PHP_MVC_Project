<?php
$data = array();
    flexible_function($data);
    function flexible_function(&$data){
        $function = 'login';
        if(isset($_GET['action'])){
            $function = $_GET['action'];
        }
        $function($data);
    }
    //login function use to call form login
    function login(&$data){
       $data['page'] = 'Login/login';
    }
    //view function use to call view file and to get club data
    function view(&$data){
       $data['page'] = 'club/view';
        //use to request from model for get data of club
       $data['club_data'] = m_get_data();
    }
    //add function use to call add file
    function add(&$data){
        $data['page'] = 'club/add';
    }
    //home function use to get data user and give condition to user login
    function home(&$data){
        session_start();
        //get data user
        $data['dataUser'] = getUser($_POST);
        foreach( $data['dataUser'] as $value){
            //give condition when login form
            if($value['pass'] == $_SESSION['pass'] && $value['user'] == $_SESSION['user']) {
                $data['page'] = 'homepage/homepage';
                //get data of club
                $data['club_data'] = m_get_data();
            }else{
                $data['page'] = 'Login/login';
            }
        }   
    }
    //homepage function use to call homepage file
    function homepage(&$data){
        $data['page'] = 'homepage/homepage';
    }
    //add_club function use to add club
    function add_club(&$data){
         //use to request from model for add data of club
        $data_add = m_add($_POST);
        if($data_add){
            //if $data_add equal true it will call to view funtion
            $action = 'view';
        }else{
             //if $data_add equal false it will call to add funtion
            $action = 'add';
        }
        header("Location: index.php?action=$action");
    }
    //detail function use to get detail data of member in club
    function detail(&$data){
         //use to request from model for view detail club
        $data['club_data'] = m_detail();
        $data['page']='club/detail';
    }
    //delete function use to delete club
    function delete(&$data){
        //use to request from model for delete club
        $data_delete = ms_delete($_POST);
        if($data_delete){
            //if$data_delete equal true it will call to view funtion
            $action = 'view';
        }else{
            //if $data_delete equal false it will call to delete funtion
            $action = 'delete';
        }
        header("Location: index.php?action=$action");
    }
    //edit function use to call edit form in edit file
    function edit(&$data){
        $data['page'] = 'club/edit';
        //use to request data of club from model
        $data['edit_club'] = m_edit_club($_POST);
    }
    function data_edit(&$data){
        //use to request from model for update club
        $result = m_update($_POST);  
        if($result){
            $action = 'view';
        }else{
            $action = 'edit';
        }
        header("Location: index.php?action=$action");
    }
?>