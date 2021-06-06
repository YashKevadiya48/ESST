<?php
        include "../admin/connection.php";
        session_start();
        $product_id = $_GET['pc_id'];

        $sql1 = "SELECT product_name FROM product WHERE product_id = '$product_id'";
        $result1 = mysqli_query($conn,$sql1) or die("Query is failed of product name");

        if(mysqli_num_rows($result1) > 0){
            while($row = mysqli_fetch_assoc($result1)){
                $product_name = $row['product_name'];
            }
        }
        $user_id = $_SESSION['user_id'];

        $sql = "INSERT INTO cart(user_id,product_id,product_name) VALUES ('$user_id','$product_id','$product_name')";
        $result = mysqli_query($conn,$sql) or die("Query is failed.");

        if($result){
            $_SESSION['add_cart'] = "Product Successfully inserted into Cart.";
        }
        else{
            $_SESSION['failed_cart'] = "Product is not inserted into Cart.";
        }
        header("Location: http://localhost/ESST/user_productdetails.php?p_id=$product_id");        
?>