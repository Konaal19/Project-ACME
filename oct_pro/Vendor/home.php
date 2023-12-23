<?php

 include "authguard.php";
 include "menu.html";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> -->

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <form action="upload.php" method="post" class="w-50 bg-secondary p-4" enctype="multipart/form-data">
            <h4 class="text-center text-white">Upload Product</h4>
            <input class="form-control mt-3" type="text" name="name" placeholder="Product name">
            <input class="form-control mt-2" type="text" name="price" placeholder="Product Price">
            <textarea class="form-control mt-2" type="text" cols="30" rows="5" name="detail"
                placeholder="Product Description"></textarea>

            <input class="form-control mt-2" type="file" name="pdtimg">
            <div class="text-center mt-3">
                <button class=" btn btn-success">Upload</button>
            </div>
        </form>
    </div>



</body>

</html>