<?php 

session_start();
$con = mysqli_connect('localhost','root','','evoting');
//check connection
if (mysqli_connect_errno()) {
    echo "failed to connect to MySQL: " . mysqli_connect_error();

}

?>