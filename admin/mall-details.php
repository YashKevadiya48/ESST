<?php 
    session_start();
    if($_SESSION['user_id'] == 0){
        $_SESSION['msg'] = "Please, Login to access website";
        header("Location: http://localhost/ESST/admin/login.php");
    }
    else{
        include "mall-data.php"; 
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/mall-data.css">
        <title>Add mall Details | Mall's Owner</title>
    </head>
    <body>
        <?php include "header.php";?><br>
        <p class="h1"> Add Mall Details </p>
        <div class="container-fluid">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="main-form container" enctype="multipart/form-data">

                <div class="mb-3">
                    <lable for="mall-name">Mall Name</lable>
                    <input type="text" name="mallname" id="mallName" class="form-control" required>
                </div>
                <div class="mb-3">
                    <lable for="mall-owner">Mall Owner Name</lable>
                    <input type="text" name="mallowner" id="mallOwner" class="form-control" required>
                </div>

                <div class="mb-3">
                    <lable for="mall-photo">Mall Photo</lable>
                    <input type="file" name="mall-photo" id="formFileMultiple" class="form-control" required>
                    <span id="image-error" style="color: red;"></span>
                </div>

                <div class="mb-3">
                    <lable for="mall-opening-time">Mall Opening time :</lable>
                    <input type="time" name="openingtime" id="openingTime" class="form-control" required>
                </div>

                <div class="mb-3">
                    <lable for="mall-closeing-time">Mall Closeing time :</lable>
                    <input type="time" name="closeingtime" id="openingTime" class="form-control" required> 
                </div>

                <div class="mb-3">
                    <lable for="longitude">Mall's Longitude :</lable> 
                    <input type="text" name="longitude" class="form-control" required> 
                </div>

                <div class="mb-3">
                    <lable for="latitude">Mall's Latitude :</lable> 
                    <input type="text" name="latitude" class="form-control" required> 
                </div>

                <div class="mb-3">
                    <lable for="upload_map">Upload Map :</lable>
                    <input type="file" name="upload-map" id="formFileMultiple" class="form-control" required>
                    <span id="map-error" style="color: red;"></span>
                </div>

                <div class="mb-3">
                    <lable for="contect-no">Contect No :</lable>
                    <input type="tel" maxlength="10" name="contectno" class="form-control" required> 
                </div>

                <div class="mb-3">
                    <lable for="mall-address">Mall Address :</lable>
                    <input type="text" name="malladdress" class="form-control" required>
                </div>

                <div class="mb-3">
                    <lable for="discription">Discription :</lable>
                    <input type="text" name="discription" class="form-control" required> 
                </div>
                
                <div class="mb-3">               
                    <lable for="type">Type :</lable>
                    <?php
                        include "connection.php";

                        $sql1 = "SELECT * FROM type";
                        $result1 = mysqli_query($conn,$sql1);
                        if(mysqli_num_rows($result1) > 0){
                    ?>
                    <select name="type"  class="form-control" required>
                        <option selected disabled>Select Type</option>
                        <?php 
                            while($row1 = mysqli_fetch_assoc($result1)){
                        ?>
                        <option value="<?php echo $row1['type_id']?>"><?php echo $row1['type_name']?></option>
                        <?php } ?>
                    </select>
                    <?php } ?>
                </div>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
                <input type="reset" value="Reset" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>
<?php }?>
