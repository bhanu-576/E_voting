<?php
require_once("dbcon.php");
//check the login from was submitted
if (!isset($_POST['enroll'], $_POST['email'])) {
    exit('Invalid access isset');
}
// make sure the submitted value are not empty
if (empty($_POST['enroll']) || empty($_POST['email'])) {
    exit('Invalid access empty');
} 

$token = bin2hex(random_bytes(15));
if ($stmt = $con->prepare('SELECT id,u_email,u_name,stat,u_enroll FROM u_login WHERE  u_enroll = ?')) {
    // Bind parameters(s= string , i= int etc.)
    $stmt->bind_param('i', $_POST['enroll']);
    $stmt->execute();
    //Store the result so we can check the account is exist or not
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id,$email,$name,$stat,$enroll);
        
        $stmt->fetch();
        if ($email !== $_POST['email']){
            exit('No user found');
        } else {  
           $stmt = $con->prepare("UPDATE u_login SET token = '$token' WHERE u_enroll = ?");
           $stmt->bind_param('i', $_POST['enroll']);
           $stmt->execute();
         

           $subject  = "Email Activation";
           $body = "Hi , $name. Click here to confirm your account http://localhost/E%20voting/php/activate.php?token=$token";
           $sender_email = "From: bhanusharma576@gmail.com";
           if(mail($email,$subject,$body,$sender_email)) {
               echo "Check your mail to activate your account";
           } else {
               exit( "Email sending failed");
           }

        }
        }
    }
?>