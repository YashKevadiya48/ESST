<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Login | Mall's Owner</title>
    </head>
    <body>
        <?php include "header.php"?><br>
        <p class="h1"> Log In </p>
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

                <div class="mb-3">
                   <br><a href="forgate.php"><p class="h5">Forgot Password?</p></a>
                </div>
            </form>
        </div>
    </body>
</html>
<?php include "login-data.php";?>