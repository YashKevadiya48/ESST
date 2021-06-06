<!DOCTYPE html>
  
<!-- <html xmlns="https://www.w3.org/1999/xhtml"> -->
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- External css -->
    <link rel="stylesheet" href="css/style.css">

    <title> Sign Up </title>

</head>
<body>

        <?php 
            include "includes/header.php";
        ?>
    <!-- start header div -->
    <center>
    <div id="header">
        <h3>Sign Up</h3>
    </div>
    <div class="login">
        <form action="submit.php" method="post">
            <table> 
                <tr>   
                    <td>    
                        <input type="text" name="username" placeholder="Username" size="50" required>
                    </td>
                </tr>
                <tr>        
                    <td>    
                        <input type="email" name="email" placeholder="Email.." size="50" required>
                    </td>
                </tr>
                <tr>        
                    <td>    
                        <input type="password" name="password" placeholder="Password.." size="50" required>
                    </td>
                </tr>
                <tr>    
                    <td colspan="2" align="center">
                        <button type="submit"> SignUp </button>
                    </td>
                </tr>     
            </table>
<!--            <div> <a href="forgotpassword.php"> forgot password??? </a></div>-->
        </form> 
    </div>
    </center>
    <br><br><br><br><br><br><br><br><br>

    <?php
            include 'includes/footer.php';
        ?>
</body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>