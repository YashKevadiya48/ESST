<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/headerhome.css">
    </head>
    <body>
        <div class="header">
            <div class="site_image">
                <img src="image/logo1.png" style="width:50px; height:50px;" alt="Image is not found.">
                <h1>ESST</h1>
                <p>Efficient Shopping in Short Time</p>
            </div>
            <div class="data-name">
                <a href="product-data.php"><input type="button" class="btn btn-primary" value="Products"></a>
                <a href="mall-data-table.php"><input type="button" value="Malls"></a>
                <a href="category-data-table.php"><input type="button" value="Categorys"></a>

                <?php
                    session_start();
                    $user_id = $_SESSION['user_id'];
                    include 'connection.php';
                    $sql = "SELECT user_name,profile_photo FROM user where user_id = '$user_id'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                ?>
                <a href="profile.php" >
                    <?php 
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    Welcome, <?php echo $row['user_name']; ?>
                    <img src="upload/profile-photo/<?php echo $row['profile_photo']?>" alt="image not found" style="width:50px; height:50px; border-radius:30px; border:1px solid black">
                        
                    <?php } ?>
                </a>
                <?php } ?>
                <a href="logout.php" ><input type="button" value="Logout"></a>
            </div>
        </div> 
    </body>
</html>  