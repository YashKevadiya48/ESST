<?php include "send-otp.php"?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="css/forgate-password.css">
        <title>Forgot password</title>
    </head>
    <body>
        <?php include "header.php";?><br>
        <p class="h1"> Forgate password </p>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="main-form container">
            <?php
                session_start(); 
                if(isset($_SESSION['send-otp'])){
            ?>
                    <div class="alert alert-danger" role="alert">
                        <?php 
                            echo $_SESSION['send-otp'];
                            unset($_SESSION['send-otp']);
                        ?>
                    </div>
            <?php
                }
            ?>
            <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" name="uname" id="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email">Email ID</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            
            <input type="submit" name="submit" value="Recive OTP" class="btn btn-primary"> 
            <input type="reset" value="Reset" class="btn btn-primary">
        </form>
    </body>
</html>