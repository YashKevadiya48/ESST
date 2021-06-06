<?php include "data/send-otp.php"?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- External css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Forgot Password</title>

    <style>
    @media screen and (min-width: 400px){
        .main-form {
            width: 50%;
        }
    }    
    </style>

</head>
<body style="font-family:'Trirong';">

        <?php 
            include "includes/header.php";
        ?>
    <!-- over header div -->

        <p class="h1 text-center">Forgot password</p>
        <div class="container-fluid">
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
            
        </div>
        
        <!-- start footer div -->
        <?php
            include 'includes/footer.php';
        ?>
</body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>