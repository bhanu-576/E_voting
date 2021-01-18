<?php 

session_start();
$con = mysqli_connect('localhost','root','','evoting');
if($con){
   echo "successful";
}else{
    echo "mc";
}


// mysqli_select_db($con,'register');
// $name =$_POST['name'];
// $enrollment= $_POST['enrollment'];
// $party = $_POST['party'];

// $q = "select * from register where name = '$name' && enrollment = '$enrollment' && partyname = '$party' ";
// $result = mysqli_query($con,$q);
// $num = mysqli_num_rows($result);

// if($num == 1){
//     echo "already registered";
// }else{
//     $qy = "insert into register(name , enrollment , partyname) values('$name' ,'$enrollment' , '$party')";
//     mysqli_query($con , $qy);
//     echo " saved";
// }
?>