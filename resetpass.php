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

    <title>Reset Password</title>

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

        <p class="h1 text-center">Reset password</p>
        <div class="container-fluid">
            <form action="#" class="main-form container">
            <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                    <div class="invalid-feedback">Please enter a valid username.</div>
                </div>

                <div class="mb-3">
                    <label for="confirm password">Confirm password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Update password</button>
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