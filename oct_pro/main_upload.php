
session_start();
$userid=$_SESSION['userid'];

print_r($_POST);

$from_path=$_FILES['pdtimg']['name'];
$to_path="../Shared/images/".$_FILES['pdtimg']['name'];

move_uploaded_file($from_path,$to_path);

include "../Shared/connection.php";
$status=mysqli_query($conn,"insert into product(name,price,detail,impath,owner)values('$_POST[name]',$_POST[price],'$_POST[detail]','$to_path',$userid)");

 if($status){
     echo "Product Uploaded Successfuly";
 }
 else{
     echo "Error in uploading Product Image";
     echo mysqli_error($conn);        
 }


 <!-- ========================================================= AI WRITTEN CODE =============================================================  -->

 <?php

include "authguard.php";
 

$userid = $_SESSION['userid'];

print_r($_POST);

$from_path = $_FILES['pdtimg']['name'];

// Extract file extension
$file_extension = pathinfo($from_path, PATHINFO_EXTENSION);

// Generate a new filename with user ID as a prefix
$new_filename = $userid . '_' . time() . '.' . $file_extension;

$to_path = "../Shared/Images/" . $new_filename;

move_uploaded_file($_FILES['pdtimg']['tmp_name'], $to_path);

include "../Shared/connection.php";

$status = mysqli_query($conn, "insert into product(name, price, detail, impath, owner) values('$_POST[name]', $_POST[price], '$_POST[detail]', '$new_filename', $userid)");


if ($status) {
    echo "Product Uploaded Successfully";
} else {
    echo "Error in uploading Product Image";
    echo mysqli_error($conn);
}
?>>
