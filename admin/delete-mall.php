<?php
    include "connection.php";
    session_start();
    $mall_id = $_GET['m_id'];

    $sql1 = "DELETE FROM mall_details WHERE mall_id = '$mall_id'";
    $result1 = mysqli_query($conn,$sql1) or die("Query is failed.");

    if($result1){
        $_SESSION['mall'] = "Mall Data is successfully Deleted.";
    }
    else{
        $_SESSION['mall'] = "Mall Data is not Deleted.";
    }
    header("Location: http://localhost/ESST/admin/mall-data-table.php");
?>
    