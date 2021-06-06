<?php
    if(isset($_POST['submit'])){
    
        session_start();
        $user_id = $_SESSION['user_id'];
        include "connection.php";
        if(isset($_FILES['mall-photo'])){
            $errors = array();

            $photo_name = $_FILES['mall-photo']['name'];
            $photo_ext = strtolower(explode(".",$photo_name)[1]);
            $photo_size = $_FILES['mall-photo']['size'];
            $photo_tmp = $_FILES['mall-photo']['tmp_name'];
            $photo_type = $_FILES['mall-photo']['type'];
            $extension = array("jpeg","jpg","png");

            if(in_array($photo_ext,$extension) === false){
                $errors[] = "This type of file extension not allowed, Please choose jpeg,jpg or png";
            }
            if($photo_size > 2097152){
                $errors[] = "File size must be 2mb or Lower.";
            }
            if(empty($errors) == true){
                move_uploaded_file($photo_tmp,"upload/mall-photo/".$photo_name);
            }
            else{
?>
                <script>
                     document.getElementById('image-error').innerHTML='<?php
                             for ($x = 0; $x < sizeof($errors); $x++)
                             { 
                                 echo $errors[$x];
                                 echo "<br>";
                             } ?>';
                 </script> 
<?php
                die();
            }
        }


        if(isset($_FILES['upload-map'])){
            $error = array();

            $map_name = $_FILES['upload-map']['name'];
            $map_ext = strtolower(explode(".",$map_name)[1]);
            $map_size = $_FILES['upload-map']['size'];
            $map_tmp = $_FILES['upload-map']['tmp_name'];
            $map_type = $_FILES['upload-map']['type'];
            $extensions = array("jpeg","jpg","png");

            if(in_array($map_ext,$extensions) === false){
                $error[] = "This type of file extension not allowed, Please choose jpeg,jpg or png";
            }
            if($map_size > 2097152){
                $error[] = "File size must be 2mb or Lower.";
            }
            if(empty($error) == true){
                move_uploaded_file($map_tmp,"upload/map-photo/".$map_name);
            }
            else{
?>
                <script>
                     document.getElementById('map-error').innerHTML='<?php
                             for ($y = 0; $y < sizeof($error); $y++)
                             { 
                                 echo $error[$y];
                                 echo "<br>";
                             } ?>';
                 </script> 
<?php
                die();
            }
        }

        $mallname = mysqli_real_escape_string($conn,$_POST['mallname']);
        $mallowner = mysqli_real_escape_string($conn,$_POST['mallowner']);
        $openingtime = mysqli_real_escape_string($conn,$_POST['openingtime']);
        $closeingtime = mysqli_real_escape_string($conn,$_POST['closeingtime']);
        $longitude = mysqli_real_escape_string($conn,$_POST['longitude']);
        $latitude = mysqli_real_escape_string($conn,$_POST['latitude']);
        $malladdress = mysqli_real_escape_string($conn,$_POST['malladdress']);
        $contectno = mysqli_real_escape_string($conn,$_POST['contectno']);
        $discription = mysqli_real_escape_string($conn,$_POST['discription']);
        $type = mysqli_real_escape_string($conn,$_POST['type']);

        $sql = "INSERT INTO mall_details(user_id,mall_name,owner_name,mall_photo,open_time,close_time,mall_longitude,mall_latitude,upload_map,mall_address,contect_no,discription,type_id)
                VALUES ({$user_id},'{$mallname}','{$mallowner}','{$photo_name}','{$openingtime}','{$closeingtime}','{$longitude}','{$latitude}','{$map_name}','{$malladdress}','{$contectno}','{$discription}',{$type})";
       
        $result = mysqli_query($conn,$sql) or die("query is failed.");

        if($result){
            $_SESSION['mall'] = "Mall Data Successfully inserted.";
            header("Location: http://localhost/ESST/admin/mall-data-table.php");
        }
        else{
            $_SESSION['mall'] = "Mall Data is not inserted.";
            header("Location: http://localhost/ESST/admin/mall-data-table.php");
        }
        // header("Location: http://localhost/DE/mall-data-table.php");
    }
?>