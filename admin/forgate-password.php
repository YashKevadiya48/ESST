<?php include "forgate-data.php"?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="css/forgate-password.css">
        <title>Forgate password</title>
    </head>
    <body>
        <?php include "header.php";?><br>
        <p class="h1"> Create New Password </p>
        <div class="container-fluid">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="main-form container">

            <?php
                session_start();
                if(isset($_SESSION['otp_Matched'])){
                    echo "<br><div class='alert alert-success' role='alert'>$_SESSION[otp_Matched]</div>";
                    unset($_SESSION['otp_Matched']);
                }
                if(isset($_SESSION['pass_not'])){
                    echo "<br><div class='alert alert-danger' role='alert'>$_SESSION[pass_not]</div>";
                    unset($_SESSION['pass_not']);
                }
            ?>
            
            <div class="mb-3">
                <label for="new-password">Enter Password</label>
                <input type="password" name="password" id="" class="form-control" required>
            </div>
               
            <div class="mb-3">
                <label for="re-password">Re Enter Password</label>
                <input type="password" name="re-password" id="" class="form-control" required>
            </div>

            <input type="submit" name= "submit" value="Update" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>
