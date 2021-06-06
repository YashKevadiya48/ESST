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
        <link rel="stylesheet" href="css/update-mall.css">
        <title>Update-Mall</title>
    </head>
    <body>
    <?php include "header.php"?>
        <br>     
        <p class="h1"> Update Mall </p>
    <div class="container-fluid">
        <?php
            include "connection.php";
            $mall_id = $_GET['m_id'];
            $sql = "SELECT * FROM mall_details WHERE mall_id = '$mall_id'";

            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="main-form container" enctype="multipart/form-data">
            
                <input type="hidden" name = "mall" value="<?php echo $mall_id ?>">
            <div class="mb-3">
                <lable for="mall-name">Mall Name :</lable>
                <input type="text" name="mall-name" class="form-control" value="<?php echo $row['mall_name']?>" required> 
            </div>
            <div class="mb-3">
                <lable for="mall-owner">Mall Owner :</lable>
                <input type="text" name="owner-name" class="form-control" value="<?php echo $row['owner_name']?>" required>
            </div>
            <div class="mb-3">
                <lable for="mall-photo">Mall Photo :</lable> 
                <input type="file" name="mall-photo" class="form-control" value="<?php echo $row['mall_photo']?>"><br>
                <img src="upload/mall-photo/<?php echo $row['mall_photo']?>" alt="image not available." style="width: 150px; height:150px;"><br>
                <span id="image-error" style="color: red;"></span>
                <input type="hidden" name="old-image" value="<?php echo $row['mall_photo']?>">
            </div>

            <div class="mb-3">
                <lable for="opening-time">Opening Time :</label>
                <input type="time" name="opening-date" class="form-control" value="<?php echo $row['open_time']?>">
            </div>
            <div class="mb-3">
                <lable for="closeing-time">closeing Time :</label>
                <input type="time" name="closeing-date" class="form-control" value="<?php echo $row['close_time']?>">
            </div>
            <div class="mb-3">
                <lable for="longitude">mall's Longitude :</lable><br>
                <input type="text" name="longitude" class="form-control" value="<?php echo $row['mall_longitude']?>" required>
            </div>
            <div class="mb-3">
                <lable for="latitude">mall's Latitude :</lable> 
                <input type="text" name="latitude" class="form-control" value="<?php echo $row['mall_latitude']?>" required>
            </div> 

            <div class="mb-3">
                <lable for="map-photo">Mall-Map Photo :</lable> 
                <input type="file" name="map-photo" class="form-control" value="<?php echo $row['upload_map']?>"><br>
                <img src="upload/map-photo/<?php echo $row['upload_map']?>" alt="image not available." style="width: 150px; height:150px;"><br>
                <span id="map-error" style="color: red;"></span>
                <input type="hidden" name="old-map" value="<?php echo $row['upload_map']?>">
            </div>

            <div class="mb-3">
                <lable for="address">Address</lable><br>
                <textarea rows="10" cols="20" name="address" class="form-control" ><?php echo $row['mall_address']?></textarea>
            </div>
            <div class="mb-3">
                <lable for="mobile-number">Mobile Number :</lable> 
                <input type="tel" maxlength="10" name = "mobile-number" class="form-control" value="<?php echo $row['contect_no']?>" required> 
            </div>
            <div class="mb-3"> 
                <lable for="discription">Discription</lable> 
                <textarea rows="10" cols="20" name="discription" class="form-control" ><?php echo $row['discription']?></textarea>
            </div>
            <div class="mb-3">
                <lable for="type">Type</lable>
                <?php

                    $sql1 = "SELECT * FROM type";
                    $result1 = mysqli_query($conn,$sql1);
                    if(mysqli_num_rows($result1) > 0){
                ?>
                <select name="type"  class="form-control">
                    <option disabled>Select Type</option>
                    <?php 
                        while($row1 = mysqli_fetch_assoc($result1)){
                        if(mysqli_num_rows($result) > 0){
                            if($row1['type_id'] == $row['type_id']){
                                $select = 'selected';
                            }
                            else{
                                $select = "";
                            }
                        }
                    ?>
                    <option <?php echo $select ?> value="<?php echo $row1['type_id']?>"><?php echo $row1['type_name']?></option>
                    <?php } ?>
                </select>
                <?php } ?>
            </div><br>
            <input type="submit" name="submit" value="Update" class="btn btn-primary">
        </form>
            <?php }} ?>
        </div>
    </body>
</html>
<?php include "update-mall-data.php";?>