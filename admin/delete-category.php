<?php
    include "connection.php";
    session_start();
    $category_id = $_GET['c_id'];
    $sql1 = "DELETE FROM category WHERE category_id = '$category_id'";
    
    $result1 = mysqli_query($conn,$sql1) or die("Query is failed.");

    if($result1){
        $_SESSION['category'] = "Category is successfully Deleted.";
    }
    else{
        $_SESSION['category'] = "Category is not Deleted.";
    }
    header("Location: http://localhost/ESST/admin/category-data-table.php");
?>