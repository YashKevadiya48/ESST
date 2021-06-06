<?php

     if(isset($_POST['submit'])){



        $otp_page = $_POST['otp-page'];

        session_start();

        include "admin/connection.php";



       $sql = "SELECT email_id,otp FROM user WHERE otp = '$otp_page'";



        $result = mysqli_query($conn,$sql) or die("query is failed.");



        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_assoc($result)){ 

                session_start();

                $_SESSION['otp_Matched'] = "OTP is matched.";

               $_SESSION['emails'] =  $row['email_id'];

                header("Location: http://localhost/ESST/forgate-password.php");

            }

        }  

        else{

            session_start();

            $_SESSION['not_Matched'] = "OTP is not matched.";

            header("Location: http://localhost/ESST/otp.php");

        } 

     }

?>



    