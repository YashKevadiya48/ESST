<?php
     if(isset($_POST['submit'])){

        $otp_page = $_POST['otp-page'];
        session_start();
        include "admin/connection.php";

       $sql = "SELECT email_id,otp FROM user WHERE otp = '$otp_page'";

        $result = mysqli_query($conn,$sql) or die("query is failed.");

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){ 
                session_start();
                $_SESSION['otp_Matched'] = "OTP is matched.";
               $_SESSION['emails'] =  $row['email_id'];
                header("Location: http://localhost/ESST/forgate-password.php");
            }
        }  
        else{
            session_start();
            $_SESSION['not_matched'] = "OTP is not matched.";
            header("Location: http://localhost/ESST/otp.php");
        } 
     }
?>
<!DOCTYPE html>
  
<!-- <html xmlns="https://www.w3.org/1999/xhtml"> -->
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    
    <!-- External css -->
    <link rel="stylesheet" href="css/style.css">

    <title> Otp </title>
    <style>
        #email{
            width: 100%;
            float: inherit;
        }
        #password{
            width: 100%;
            float: inherit;
        }
        #submit{
            width: 50%;
            margin-top: 10px;
            float: inherit;
        }
        @media only screen and (max-width:620px){
            #email{
                width: 100%;
            }
            
        }
        input,button{
            border-radius: 6px;
            border-color: aliceblue;
            margin: 6px;
        }
        
    </style>

</head>
<body style="font-family:'Trirong';">

        <?php 
            include "includes/header.php";
        ?>
    <!-- start header div -->
    <center>
    <div id="header">
        <h3>OTP</h3><br>
    </div>
    <div class="login">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="main-form container">
            <?php
            session_start();
            if(isset($_SESSION['otp_sent'])){
                echo "<br><div class='alert alert-success' role='alert'>$_SESSION[otp_sent]</div>";
                unset($_SESSION['otp_sent']);                
            }
            if(isset($_SESSION['not_matched'])){
                echo "<br><div class='alert alert-danger' role='alert'>$_SESSION[not_matched]</div>";
                unset($_SESSION['not_matched']);
            }
        ?> 

            <div class="mb-3">
                <label for="otp">OTP</label>
                <input type="tel" maxlength='6' name="otp-page" id="" class="form-control" required>
            </div>

            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-primary">
        </form>
    </div>
    </center>

    <?php include 'includes/footer.php'; ?>
</body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>