<?php include "signup-data.php"?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/signup.css">
        <title>Sign Up | Mall's Owner</title>
    </head>
    <body>
        <?php include "header.php";?>
        <br>     
        <p class="h1"> Sign Up </p>
        <div class="container-fluid">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="main-form container" enctype="multipart/form-data">
                <p class="h5">Already have an account?<a href="login.php">Login</a></p><br>
                <div class="mb-3">
                    <lable for="firstname">First Name :</lable>
                    <input type="text" name="fname" id="firstname" class="form-control" required> 
                </div>
                <div class="mb-3">
                    <lable for="lastname">Last Name :</lable> 
                    <input type="text" name="lname" id="lastname" class="form-control" required> 
                </div>
                <div class="mb-3">
                    <lable for="username">User Name :</lable> 
                    <input type="text" name="uname" id="username" class="form-control" required> 
                    <span id="username-error" style="color: red;"></span> 
                </div>
                <div class="mb-3">
                    <lable for="password">Password :</lable> 
                    <input type="password" name="password" id="password" class="form-control" required>  
                </div>

                <div class="mb-3">
                    <lable for="password">Confirm Password :</lable> 
                    <input type="password" name="repassword" id="confirm-password" class="form-control" required>  
                    <span id="password-error" style="color: red;"></span>
                </div>

                <div class="mb-3">
                    <lable for="phone">Mobile Number </lable>
                    <input type="tel" name="mobile" maxlength="10" id="mobile-number" class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <lable for="email">E-mail id :</lable>
                    <input type="email" name="email" id="email" class="form-control" required>
                    <span id="email-error" style="color: red;"></span>
                </div>

                <div class="mb-3">
                    <lable for="image">Profile Photo :</lable>
                    <input type="file" name="photo" value="p1.png" id="formFileMultiple" class="form-control" required>
                    <span id="image-error" style="color: red;"></span>
                </div>
                
                <div class="mb-3">
                    <lable for="address">Address :</lable>
                    <input type="address" name="address" class="form-control" required>
                </div>

                <div class="mb-3">
                    <lable for="pincode">Pincode :</lable> 
                    <input type="tel" name="pincode" maxlength="6" class="form-control" required>  
                </div>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
                <input type="reset" value="Reset" class="btn btn-primary">

            </form>
        </div>
    </body>
</html>
<?php include "signup-data.php"?>