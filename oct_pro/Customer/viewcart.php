<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .parent {
            background-color: cyan;
            margin: 10px;
            width: 200px;
            display: inline-block;
            padding: 20px;
        }
    </style>
</head>

<body>

    <?php

    include "authguard.php";
    include "menu.html";
    include "../Shared/connection.php";

    $sql_result = mysqli_query($conn, "select * from cart join product on cart.pid=product.pid where userid=$_SESSION[userid]");

    $total=0;
    while ($dbrow = mysqli_fetch_assoc($sql_result)) {

// print_r($dbrow);
// echo '<br>';

$total+=$dbrow['price'];
        echo "<div class='parent'>
                <div>{$dbrow['name']}</div>
                <div>{$dbrow['price']}</div>
                <img src='{$dbrow['impath']}' > <!-- Added alt attribute -->
                <div>{$dbrow['detail']}</div>
                <div class='action'>
                    
                    <button onclick='popup($dbrow[cartid])'> Remove to cart</button>
                    
                </div>
              </div>";
    }

    echo "<form method='get' class ='w-50' action='placeorder.php'>
    <textarea class='form-control' rows='5' required name='address' placeholder='Entry Delivey Address'></textarea>
    <div class='display-4'>
              Total Amount = $total
              <input name ='total' hidden value='$total'>
               <button class='btn btn-outline-danger'>Place Order</button>
    </div>
    </form>";

    ?>

</body>


<script>
    function popup(cartid){
        res=confirm('Are you Sure want to Delete?')
        if(res){
            location.href=`deletecart.php?cartid=${cartid}`;
        }
    }
</script>


</html>
