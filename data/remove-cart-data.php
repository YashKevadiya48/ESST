<?php



    include "../admin/connection.php";

    session_start();

    $product_id = $_GET['p_id'];

    $sql = "DELETE FROM cart WHERE product_id = '$product_id'";

    

    $result = mysqli_query($conn,$sql) or die("Query is failed.");



    if($result){

        $_SESSION['succ-delete'] = "Product is successfully Removed from The Cart.";

    }

    else{

        $_SESSION['fail-delete'] = "Product is not Removed.";

    }

    header("Location: http://localhost/ESST/user/cart.php");

    

?>