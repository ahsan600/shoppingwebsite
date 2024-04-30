<?php
include "dbconnect.php";
session_start();
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];
$select="SELECT * FROM `login`";
$result=mysqli_query($con,$select);
$row=mysqli_num_rows($result);
if($row>0){
    $num=1;
    while($data=mysqli_fetch_assoc($result)){
        if($email===$data['email']&&$pass===$data['pass']){
            $num=0;
            $_SESSION["useremail"]=$email;
            header('Location:shopping.php');
            exit;
        }
    }
    if($num=1){
        header('Location:index.html');
        exit;
    }
}
else{
    header('Location:index.html');
    exit;
}
$con->close();


?>