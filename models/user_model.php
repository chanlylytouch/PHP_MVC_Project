<?php
function m_view()
{
    include "conection.php";
    $query = mysqli_query($connection, "SELECT * FROM users");
    $rows = [];
    if ($query && mysqli_num_rows($query)) {
        foreach ($query as $record) {
            $rows[] = $record;
        }
    }
    return $rows;
}
function m_add()
{
    if (isset($_POST['add'])) {
        include "conection.php";
        $userName = $_POST['userName'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $height = $_POST['height'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $description = $_POST['description'];       
        $clubID = $_POST['clubID'];       
        $query = mysqli_query($connection, "INSERT INTO users(username, age, height, role, email, address, description, gender)
        VALUES ('$userName','$age','$height','$role','$email','$address','$description','$gender')");
        return $query;
    }
}
function m_delete(){
    include 'conection.php';
    $id = $_GET['id'];
    $query = mysqli_query($connection,"DELETE FROM users WHERE userID='$id'");
    
    return $query;
}
function m_edit($data){
    $id = $_GET['id'];
    $userName = $_POST['userName'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $gender = $_POST['gender'];
    $clubId = $_POST['clubID'];

    include "conection.php";
    $query = mysqli_query($connection, "UPDATE users SET userName=' $userName',age='$age',height='$height',role='$role', email='$email', address='$address',description='$description',gender='$gender',clubID='$clubId' WHERE userID = $id ");
    return $query;
}
