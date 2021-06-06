<?php
if(isset($_POST['submit'])){

   include "connection.php";
    session_start();
    $userid = $_SESSION['user_id'];
    $category = $_POST['category'];
    $mall = $_POST['mall_id'];
    

    $sql1 = "insert into category(user_id,category_name,mall_id)
            values ('$userid','$category','$mall')";

    $result1 = mysqli_query($conn,$sql1) or die("Query failed.");

    if($result1){
        $_SESSION['category'] = "Category Successfully inserted.";
    }
    else{
        $_SESSION['category'] = "Category is not inserted.";
    }
    mysqli_close($conn);
    header("Location: http://localhost/ESST/admin/category-data-table.php");
}
    ?> 