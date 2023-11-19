<?php
include('../model/class.php');
Session_start();
$avatar=$_GET['para'];
$id=$_SESSION['id'];
$username=$_SESSION['username'];
$obj= new operation();
$obj1= new operation();
$obj->avatarUpate($avatar,$id);
$obj1->bordAvatar($username,$avatar);
$obj1->executeQuery();
$result=$obj->executeQuery();
if($result){
    $username=$_SESSION['username'];
    $obj->details($username);
    $result=$obj->executeQuery();
    $row=$result->fetch_assoc();
    $_SESSION['avatar']=$row["avatar"];
    header('location:../views/profile.php'); 
    
}


?>