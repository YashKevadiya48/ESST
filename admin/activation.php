<?php
    session_start();
    include "connection.php";

    if(isset($_GET['tokan'])){
         $tokan = $_GET['tokan'];

         $sql = "UPDATE user SET status = 'active' WHERE tokan = '$tokan'";
        
        $result = mysqli_query($conn,$sql);
        
        if($result){
           echo $_SESSION['msg'] = "Your account successfully Activate.";
           header("Location: http://localhost/ESST/admin/login.php");
        }
        else{
          echo $_SESSION['msg'] ="Failed to activate your account.";
         header("Location: http://localhost/ESST/admin/login.php");
        }
    }
?>