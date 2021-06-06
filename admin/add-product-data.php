<?php
    if(isset($_POST['submit'])){
        // session_start();
        $user_id =  $_SESSION['user_id'];
        
        include "connection.php";

        if(($_FILES['product-image'])){

            $errors = array();

            $file_name = $_FILES['product-image']['name'];
            $file_ext = strtolower(explode('.',$file_name)[1]);
            $file_size = $_FILES['product-image']['size'];
            $file_tmp = $_FILES['product-image']['tmp_name'];
            $file_type = $_FILES['product-image']['type'];
            $extension = array("png","jpeg","jpg");

            if(in_array($file_ext,$extension) === false){
                $errors[] = "This extension file not allowed, Please choose jpeg,jpg or png";
            }

            if($file_size > 2097152){
                $errors[] = "File size must be 2mb or Lower.";
            }

            if(empty($errors) == true){
                move_uploaded_file($file_tmp,"upload/product-photo/".$file_name);
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

        $mall_id = mysqli_real_escape_string($conn,$_POST['mall_id']);
        $category_name = mysqli_real_escape_string($conn,$_POST['category-name']);
        $product_name = mysqli_real_escape_string($conn,$_POST['product-name']);
        $quantity = mysqli_real_escape_string($conn,$_POST['quantity']);
        $price = mysqli_real_escape_string($conn,$_POST['price']);
        $longitude = mysqli_real_escape_string($conn,$_POST['longitude']);
        $latitude = mysqli_real_escape_string($conn,$_POST['latitude']);
        $discription = mysqli_real_escape_string($conn,$_POST['discription']);


        $sql = "insert into product(user_id,mall_id,category_name,product_name,quantity,product_price,product_image,product_longitude,product_latitude,discription)
                values({$user_id},{$mall_id},'{$category_name}','{$product_name}',{$quantity},{$price},'{$file_name}','{$longitude}','{$latitude}','{$discription}')";

        $result = mysqli_query($conn,$sql);

        if($result){
            $_SESSION['product'] = "Product is successfully added.";
        }
        else{
            $_SESSION['product'] = "Product is not added.";
        }
        mysqli_close($conn);
        header("Location: http://localhost/ESST/admin/product-data.php");
    } 
?>
       