<?php 
    session_start();
    if($_SESSION['user_id'] == 0){
        $_SESSION['msg'] = "Please, Login to access website";
        header("Location: http://localhost/ESST/admin/login.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/profile.css">
        <title>Profile</title>
    </head>
    <body>
        <?php include "header.php";?><br>
        <p class="h1"> Profile </p>
        <div class="container-fluid">
            
            <?php
                session_start();
                if(isset($_SESSION['profile'])){
                    if($_SESSION['profile'] == "Profile Updated Successfully."){
                        echo "<br><div class='alert alert-success' role='alert'>$_SESSION[profile]</div>";
                        unset($_SESSION['profile']);
                    }
                    else{
                        echo "<br><div class='alert alert-denger' role='alert'>$_SESSION[profile]</div>";
                        unset($_SESSION['profile']);
                    }
                    
                }
                $user_id = $_SESSION['user_id'];
                include 'connection.php';

                $sql = "SELECT * FROM user WHERE user_id = '$user_id'";

                $result = mysqli_query($conn,$sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                    
            ?>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="main-form container" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="file" name="profile-photo" class="form-control" ><br>
                <img src="../admin/upload/profile-photo/<?php echo $row['profile_photo']?>" alt="photo is not found." style="width: 200px; height:200px; border-radius:100px; border:1px solid black;"> <br>
                <span id="image-error" style="color: red;"></span>
                <input type="hidden" name="old-image" value="<?php echo $row['profile_photo']?>">
            </div>
            <div class="mb-3">
                <lable for="firstname">First Name :</lable>
                <input type="text" name="fname" value="<?php echo $row['first_name']?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <lable for="lastname">Last Name :</lable>
                <input type="text" name="lname" value="<?php echo $row['last_name']?>" class="form-control" required> 
            </div>
            <div class="mb-3">
                <lable for="username">User Name :</lable>
                <input type="text" name="uname" value="<?php echo $row['user_name']?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <lable for="password">Password :</lable><br>
                <input type="password" name="password" value="<?php echo $row['password']?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <lable for="phone">Mobile Number :</lable>
                <input type="tel" name="mobile" maxlength="10" value="<?php echo $row['mobile_no']?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <lable for="email">E-mail id :</lable>
                <input type="email" name="email" value="<?php echo $row['email_id']?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <lable for="address">Address :</lable>
                <input type="address" name="address" value="<?php echo $row['address']?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <lable for="pincode">Pincode :</lable>
                <input type="tel" name="pincode" maxlength="6" value="<?php echo $row['pincode']?>" class="form-control" required> 
            </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Update">
                    
            </form>
            <?php  } } ?>
        </div>
    </body>
</html>
   
<?php include "profile-update.php";?>