<?php
    if(isset($_POST['submit'])){

        include "connection.php";

        $mall_id = $_POST['mall_id'];
        $category_id = $_POST['category'];
        $category_name = $_POST['category_name'];
        $sql1 = "UPDATE category SET mall_id = '$mall_id', category_name = '$category_name' WHERE category_id = '$category_id'";
        
        $result1 = mysqli_query($conn,$sql1) or die("Query is failed.");

        if($result1){
            session_start();
            $_SESSION['category'] = "Category is successfully updated.";

        }
        else{
            $_SESSION['category'] = "Category is not updated.";

        }
        header("Location: http://localhost/ESST/admin/category-data-table.php");
    }
?>