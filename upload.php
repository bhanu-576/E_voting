<?php
include 'dbcon.php';

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $enrollment = $_POST['enrollment'];
    $party = $_POST['party'];
    $aadhar = $_POST['aadhar'];
    $image = $_FILES['image'];       
      
    print_r($image);        
}else{
    echo "no button is clicked";
}

// print_r($Image);

?>                                                               