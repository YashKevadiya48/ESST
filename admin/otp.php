<?php
     if(isset($_POST['submit'])){

        $otp_page = $_POST['otp-page'];
        session_start();
        include "connection.php";

        $sql = "SELECT email_id,otp FROM user WHERE otp = '$otp_page'";

        $result = mysqli_query($conn,$sql) or die("query is failed.");

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $_SESSION['otp_Matched'] = "OTP is matched.";
               $_SESSION['emails'] =  $row['email_id'];
                header("Location: http://localhost/ESST/admin/forgate-password.php");
            }
        }  
        else{
            $_SESSION['not-matched'] = "OTP is not matched.";
            header("Location: http://localhost/ESST/admin/otp.php");
        } 
     }
?>

    
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="css/otp.css">
        <title>OTP</title>
    </head>
    <body>

    <?php include "header.php";?><br>
    <p class="h1"> OTP </p>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="main-form container">
        <?php
                session_start(); 
                if(isset($_SESSION['message'])){
        ?>
                    <div class="alert alert-success" role="alert">
                        <?php 
                            echo $_SESSION['message'];
                            unset($_SESSION['send-otp']);
                        ?>
                    </div>
        <?php
                }
        ?>       

        <?php
                session_start(); 
                if(isset($_SESSION['not-matched'])){
            ?>
                    <div class="alert alert-danger" role="alert">
                        <?php 
                            echo $_SESSION['not-matched'];
                            unset($_SESSION['not-matched']);
                        ?>
                    </div>
            <?php
                }
            ?>
        <div class="mb-3">
            <label for="otp">OTP</label>
            <input type="tel" maxlength='6' name="otp-page" id="" class="form-control" required>
        </div>

        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        <input type="reset" value="Reset" class="btn btn-primary">
    </form>
    </body>
</html>