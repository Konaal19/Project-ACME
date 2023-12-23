<?php

$uname=$_POST['username'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$usertype=$_POST['usertype'];

if($pass1 != $pass2)
{
    echo "Password Missmatch" ;
    die;   
}

$chiper=md5($pass1);



include_once "connection.php";
try{
$status=mysqli_query($conn,"insert into user(username,password,usertype) values('$uname','$chiper','$usertype')");
    echo "<h2>Registration Success!!</h2>";
}

catch(Exception $ex){
    echo $ex ;
}


?>