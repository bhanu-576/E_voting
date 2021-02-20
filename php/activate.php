<?php
include 'dbcon.php';

if(isset($_GET['token'])) {
    $token = $_GET['token'];
    $update = "UPDATE u_login SET stat='active' WHERE token = '$token' ";
    $query = mysqli_query($con,$update);

    if($query){
        session_start();
        header('location:../dashbord.php');
    }

}
?>