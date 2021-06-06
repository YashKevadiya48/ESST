<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- External css -->
    <link rel="stylesheet" href="css/style.css">

    <title> Login </title>

    <style>
    @media screen and (min-width: 400px){
        .main-form {
            width: 50%;
        }
    }    
    </style>

</head>
<body style="font-family:'Trirong';">

    //  <?php 
    //      include "includes/header.php";
    // ?>    
    <!-- over header div -->

        <p class="h1 text-center"> Login </p>

        <div class="container-fluid">
            
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="main-form container">
                <p class="h5">Don't have an account?<a href="signup.php">Signup</a></p>

                <?php
                    session_start();
                    if(isset($_SESSION['msg'])){
                        echo "<br><div class='alert alert-success' role='alert'>$_SESSION[msg]</div>";
                        unset($_SESSION['msg']);

                    }
                    if(isset($_SESSION['msg_error'])){
                        echo "<br><div class='alert alert-danger' role='alert'>$_SESSION[msg_error]</div>";
                        unset($_SESSION['msg_error']);
                    }
                ?> 
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" name="uname" id="username" class="form-control" value="<?php if(isset($_COOKIE['usernamecookie'])){ echo $_COOKIE['usernamecookie'];}?>" required>
                    <div class="invalid-feedback">Please enter a valid username.</div>
                </div>

                <div class="mb-3">
                    <label for="email">Email ID</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php if(isset($_COOKIE['emailcookie'])){ echo $_COOKIE['emailcookie'];}?>" required>
                </div>

                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" value="<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie'];}?>" required>
                    <span id="password-error" style="color: red;"></span>
                </div>
                
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" name="rememberme" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Remember Me
                    </label>
                </div>

                <input type="submit" name="submit" value="Login" class="btn btn-primary"> &nbsp;&nbsp;
                <input type="reset" value="Reset" class="btn btn-primary"><br>

                <div class="mt-3">
                    <p class="h5 text-center"><a href="forgotpass.php">Forgot Password??</a></p>
                </div>
            </form>
        </div>
        <?php include "data/login-data.php"?>
<!-- start footer div -->
        <?php
            include 'includes/footer.php';
        ?>
</body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>