<?php 
include('../model/class.php');
Session_start();
$flag=$_POST['flag'];
//
$avatar=$_SESSION['avatar'];
$username=$_SESSION['username'];
$obj= new operation();
if (!isset($_SESSION['flagScore'])) {
    $_SESSION['flagScore'] = NULL; // Initialize with an initial value 
}
$_SESSION['flag1'];
$_SESSION['flag2'];
$_SESSION['flag3'];
$_SESSION['flag4'];

if (!isset($_SESSION['flag5'])) {
    $_SESSION['flag5'] = NULL; // Initialize with an initial value
}
if($flag=='2?1dErWE31997h@(R'){
    if($_SESSION['flag1']==NULL){
    $_SESSION['flagScore']=5+$_SESSION['flagScore'];
    $score=$_SESSION['flagScore'];
    $rank=0;
    $obj->boardUpdate($score,$rank,$username);
    $obj->executeQuery();
    $_SESSION['flag1']=1;
    header('location:../views/ctfenigma.php?id=01'); //ok
        }
        else{
            header('location:../views/ctfenigma.php?id=02'); //no more
        }
}elseif($flag=='Wh1teH@tH@cker'){
    if($_SESSION['flag2']==NULL){
        $_SESSION['flagScore']=$_SESSION['flagScore']+20;
        $score=$_SESSION['flagScore'];
        $rank=0;
        $obj->boardUpdate($score,$rank,$username);
        $obj->executeQuery();
        $_SESSION['flag2']=1;
        header('location:../views/ctfenigma.php?id=01'); //ok
    }else{
        header('location:../views/ctfenigma.php?id=02'); //no more
    }
}elseif($flag=='k&i5H/\/@@Nj@!_i'){
    if($_SESSION['flag3']==NULL){
        $_SESSION['flagScore']=$_SESSION['flagScore']+25;
        $score=$_SESSION['flagScore'];
        $rank=0;
        $obj->boardUpdate($score,$rank,$username);
        $obj->executeQuery();
        $_SESSION['flag3']=1;
        header('location:../views/ctfenigma.php?id=01'); //ok
    }else{
        header('location:../views/ctfenigma.php?id=02'); //no more
    }
}
elseif($flag=='J@5|Y@.\/|*'){
    if($_SESSION['flag4']==NULL){
        $_SESSION['flagScore']=$_SESSION['flagScore']+50;
        $score=$_SESSION['flagScore'];
        $rank=0;
        $obj->boardUpdate($score,$rank,$username);
        $obj->executeQuery();
        $_SESSION['flag4']=1;
        header('location:../views/ctfenigma.php?id=01'); //ok
    }else{
        header('location:../views/ctfenigma.php?id=02'); //no more
    }
}
elseif($flag=='zU(|<Er'){
    if($_SESSION['flag5']==NULL){
        $_SESSION['flagScore']=$_SESSION['flagScore']+100;
        $score=$_SESSION['flagScore'];
        $rank=0;
        $obj->boardUpdate($score,$rank,$username);
        $obj->executeQuery();
        $_SESSION['flag5']=1;
        header('location:../views/ctfenigma.php?id=01'); //ok
    }else{
        header('location:../views/ctfenigma.php?id=02'); //no more
    }
}
else{
    header('location:../views/ctfenigma.php?id=03'); //wrong
}
?>