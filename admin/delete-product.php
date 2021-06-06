<?php
    include "connection.php";
    session_start();
    $product_id = $_GET['p_id'];
    $sql1 = "DELETE FROM product WHERE product_id = $product_id";
    
    $result1 = mysqli_query($conn,$sql1) or die("Query is failed.");

    if($result1){
        $_SESSION['product'] = "Product is successfully Deleted.";
    }
    else{
        $_SESSION['product'] = "Product is not Deleted.";
    }
     header("Location: http://localhost/ESST/admin/product-data.php");
?>