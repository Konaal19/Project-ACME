<?php

session_start();



$uname = $_POST['username'];
$pass = $_POST['pass'];
$chiper_text = md5(($pass));


include_once "connection.php";
$uname = $_POST['username'];
$sql_result = mysqli_query($conn, "select * from user where username='$uname'and password='$chiper_text'");

$db_row = mysqli_fetch_assoc($sql_result);
print_r($db_row);

if (mysqli_num_rows($sql_result)>0) {
    echo "<h1>Login Success</h1>";
    $_SESSION['login_status']=true;
    $_SESSION['usertype']=$db_row['usertype'];
    $_SESSION['userid']=$db_row['userid'];

    if ($db_row['usertype']=='Vendor') {
        header("location:../Vendor/home.php");
    } 
    elseif ($db_row['usertype'] == 'Customer') {
        header("location:../Customer/view.php");
    }
} else {
    echo "<h1>Invalid Credentials</h1>";
    $_SESSION['login_status']=false;
}



?>