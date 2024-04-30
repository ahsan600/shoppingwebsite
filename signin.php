<?php
include "dbconnect.php";
session_start();
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];
$number=$_REQUEST['number'];
$birth=$_REQUEST['date'];
$insert="INSERT INTO `ahsan`.`login` (`name`, `email`, `pass`, `phno`, `birthday`) VALUES ('$name', '$email', '$pass', '$number', '$birth');";
$select="SELECT * FROM `login`";
$result=mysqli_query($con,$select);
$row_num=mysqli_num_rows($result);
if($row_num>0){
    $count=0;
    while($data=mysqli_fetch_assoc($result)){
        if($email===$data['email']){
            $count=1;
            header('Location:signin.html');
            exit;
        }
    }
    if($count==0){
        $con->query($insert);
        $_SESSION['useremail']=$email;
        header('Location:shopping.php');
        exit;
    }
}
else{
    $con->query($insert);
    $_SESSION['useremail']=$email;
    header('Location:shopping.php');
    exit;
}
$con->close();
?>