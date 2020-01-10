<?php
function m_view()
{
    include "connection.php";
    $query = mysqli_query($connection, "SELECT * FROM users us INNER JOIN club cl ON us.clubID = cl.clubID");
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
        include "connection.php";
        $username = $_POST['userName'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $height = $_POST['height'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $club = $_POST['club'];
        $description = $_POST['description'];
        $query = "INSERT INTO users(username, gender,age,height,role,email, address, clubID ,decription)
        VALUES ('$username','$gender','$age','$height','$role','$email','$address','$club','$description')";
        $result = mysqli_query($connection, $query);
        // var_dump($query);
        // die;
        return $result;
    }
}
function m_delete()
{
    include 'connection.php';
    $id = $_GET['id'];
    $query = mysqli_query($connection, "DELETE FROM users WHERE userID='$id'");
    return $query;
}
function get_data_user()
{
    $id = $_GET['id'];
    include "connection.php";
    $query = mysqli_query($connection, "SELECT * FROM users WHERE userID = '$id'");
    return $query;
}
function m_edit_user()
{
    if (isset($_POST['editUser'])) {
        $id = $_GET['id'];
        $userName = $_POST['userName'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $height = $_POST['height'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $clubId = $_POST['club'];
        $description = $_POST['description'];
        include "connection.php";
        $query = mysqli_query($connection, "UPDATE users SET 
        username=' $userName',gender='$gender',age='$age', height='$height',role='$role', email='$email', address='$address',decription='$description',clubID='$clubId' WHERE userID = '$id'");
        return $query;
    }
}
