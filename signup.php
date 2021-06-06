
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

    <title> Sign up </title>

    <style>
    @media screen and (min-width: 400px){
        .main-form {
            width: 50%;
        }
    }
    </style>

</head>
<body style="font-family:'Trirong';">

        <?php include "data/signup-data.php"?>
        <?php 
            include "includes/header.php";
        ?>
    <!-- over header div -->

        <p class="h1 text-center"> Sign Up </p>
        <div class="container-fluid">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" class="main-form container" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <p class="h5 text-center"> Already have an account? <a href="login.php">Login</a> </p>
        </div>
                
                <div class="mb-3">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="fname" id="firstname" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lname" id="lastname" class="form-control" required>            
                </div>
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" name="uname" id="username" class="form-control" required>
                    <span id="username-error" style="color: red;"></span> 
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" name="repassword" id="confirm-password" class="form-control" required>
                    <span id="password-error" style="color: red;"></span>
                </div>
                <div class="mb-3">
                    <label for="mobile-number">Mobile Number</label>
                    <input type="tel" name="mobile" id="mobile-number" maxlength="10" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email ID</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                    <span id="email-error" style="color: red;"></span>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple">Profile Photo</label>
                    <input class="form-control" type="file" name="photo" id="formFileMultiple" required>
                    <span id="image-error" style="color: red;"></span>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="pincode">Pincode</label>
                    <input type="number" name="pincode" id="pincode" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>&nbsp;&nbsp;&nbsp;
                <button type="reset" class="btn btn-primary">Reset</button>
        </form>
        </div>

        <?php include "data/signup-data.php"?>
    <!-- start footer div -->
    <?php
            include 'includes/footer.php';
        ?>
</body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>

<!-- start PHP code -->

<!-- stop PHP Code -->
