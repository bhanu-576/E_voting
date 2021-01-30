<?php
require_once("dbcon.php");
// check if the data from the registration form was submitted
if (!isset($_POST['name'], $_POST['enrollment'], $_POST['aadhar'], $_POST['party'])) {
    exit('Invalid access method');
}
//make sure the submitted values are not empty.
if (empty($_POST['name'] )|| empty($_POST['enrollment']) || empty($_POST['aadhar']) || empty($_POST['party'])){
    exit('Invalid access method');
}
//we need to check if the account with that enrollment exists
if ($stmt = $con->prepare('SELECT id,u_aadh FROM register WHERE u_enroll = ?')) {
    //Bind parameters (s= string, i= int , b = blob etc)
    $stmt->bind_param('i',$_POST['enrollment']);
    $stmt->execute();
    $stmt->store_result();

    //Store the result so we can check if the account exists in the database
    if ($stmt->num_rows > 0) {
        //Enrollment already exists
        echo 'You are already registered';
    } else {
        // image check
       $target_file = "../images/" . basename($_FILES['image']['name']);
       $uploadOk = 1;
       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        //check if image file is actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES['image']['tmp_name']);
            if($check !==false) {
                echo "File is an image" . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image";
                $uploadOk = 0;

            }
        }
        // if file is empty
      if ($_FILES['image']['size'] == 0){
          echo "please upload file";
      }
               // File extension
             else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType !="jpeg") {
                echo "Sorry, only jpg,jpeg and png files are allowed.";
                $uploadOk = 0;
            }
        // check file size
        if ($_FILES['image']['size'] > 200000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
 
        // check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded";
        } //if everything is ok, try to upload file
        else {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {

        if ($stmt = $con->prepare('INSERT INTO register (u_name,u_enroll,u_party,u_aadh,u_image) VALUES (?,?,?,?,?)')){
            $stmt->bind_param('sisis', $_POST['name'],$_POST['enrollment'],$_POST['party'],$_POST['aadhar'],$target_file);
            $stmt->execute();
            echo 'Registration was successful';
        } else {
            echo 'Internal server error';
      }  
    }
}
}
    $con->close();
    } 

?>
        