<?php
//use to response data from controller in m_get_data function
function m_get_data(){
    //use to select data from database
    $query = "SELECT * FROM club";
    include 'connection.php';
    $result = mysqli_query($connection,$query);
    if($result && mysqli_num_rows($result) > 0){
        //use to loop data 
        foreach ($result as $row){
            $rows[] = $row;
        }
    }
    return $rows;
}




//use to response data to m_add function
function m_add($data){
    include 'connection.php';
    if(isset($_POST['create'])){
        //to get data from add form when user field in input form
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $clubName = $_POST['clubName'];
        $description = $_POST['description'];
        //use to insert data to database
        $query = mysqli_query($connection, "INSERT INTO club(username,age,gender,email,clubName,decription)
         VALUES ('$username','$age','$gender','$email','$clubName','$description')");
         return $query;
    }
}
//use to response ms_delete function to delete data
function ms_delete()
{
    include 'connection.php';
    //use to get id in url
    $id = $_GET['id'];
    //use to delete data in database
    $query = mysqli_query($connection, "DELETE FROM club WHERE clubID='$id'");
    return $query;
}
//use to response m_edit_club to controller
function m_edit_club(){
    $id = $_GET['id'];
    include "connection.php";
    //use to select data of club in database by specific id
    $query = mysqli_query($connection,"SELECT * FROM club WHERE clubID = '$id'");
    return $query;
}
//use to response m_update function from controller
function m_update(){
    include 'connection.php';
    $id = $_GET['id'];
    if(isset($_POST['edit'])){
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $clubName = $_POST['clubName'];
        $description = $_POST['description'];
        //use to update data of club in database
        $query = mysqli_query($connection, "UPDATE club SET username='$username',gender='$gender',age='$age',email='$email',clubName='$clubName',decription='$description' WHERE clubID='$id'");
        return $query;
        header("Location: index.php?action=view");
    }
}
//use to response m_detail function from controller
function m_detail(){
    $id = $_GET['id'];
    include "connection.php";
    //use to select data user in database
    $data = mysqli_query($connection,"SELECT * FROM users WHERE userID = '$id'");

    return $data;
}
//use to response getUser function from controller
function getUser(){
    include "connection.php";
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $_SESSION['user'] = $user;
    $_SESSION['pass'] = $pass;
    //use to select data login in database
    $query = mysqli_query($connection, "SELECT * FROM login");
    $data = [];
    foreach($query as $row){
        $data[] = $row;
    }
    return $data;
}



