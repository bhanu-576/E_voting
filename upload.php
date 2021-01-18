<?php
include 'dbcon.php';

if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Enroll = $_POST['enrollment'];
    $Party = $_POST['party'];
    $Aadhar = $_POST['aadhar'];
    $image = $_FILES['image'];                       
}else{
    echo "no button is clicked";
}

print_r($image);

?>                                                               