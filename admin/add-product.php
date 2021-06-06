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
        <link rel="stylesheet" href="css/product-data.css">
        <title>Add Product</title>
    </head>
    <body>
        <?php include "header.php"?>
        <br>     
        <p class="h1"> Add Product </p>
        <div class="container-fluid">
    
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="main-form container" enctype="multipart/form-data">
            
            <div class="mb-3">
                <lable for="mall-Name">Mall Name :</lable>
                <select name="mall_id" class="form-control" required>
                    <option disabled>Select Mall</option>
                    <?php
                        include "connection.php";
                        session_start();
                        $user_id = $_SESSION['user_id'];

                        $sql = "select mall_id,mall_name from mall_details where user_id = '$user_id'";
                        $result = mysqli_query($conn,$sql) or die("Query unsuccessful.");

                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<option value='{$row['mall_id']}'>{$row['mall_name']}</option>";
                            }
                        }    
                    ?>
                </select>
                
            </div>

            <div class="mb-3">
                <lable for="category-Name">Category Name :</lable>
                <select name="category-name" class="form-control" required>
                    <option disabled>Select Category</option>
                    <?php
                        include "connection.php";
                        session_start();
                        $user_id = $_SESSION['user_id'];
                        $mall_id = $_POST['mall_id'];

                        $sql1 = "select category_id,category_name from category WHERE user_id = '$user_id'";
                        $result1 = mysqli_query($conn,$sql1) or die("Query unsuccessful.");

                        if(mysqli_num_rows($result1) > 0){
                            while($row = mysqli_fetch_assoc($result1)){
                                echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                            }
                        }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <lable for="product-Name">Product Name :</lable>
                <input type="text" name="product-name" class="form-control" required>
            </div>

            <div class="mb-3">
                <lable for="quantity">Quantity :</lable>
                <input type="number" name="quantity" class="form-control" required> 
            </div>

            <div class="mb-3">
                <lable for="price">Price :</lable>
                <input type="tel" name="price" class="form-control" required>
            </div>

            <div class="mb-3">
                <lable for="photo">Product photo :</lable>
                <input type="file" name="product-image" class="form-control" required>
                <span id="image-error" style="color: red;"></span>
            </div>
               
            <div class="mb-3">
                <lable for="longitude">Product's Longitude :</lable>
                <input type="text" name="longitude" class="form-control" required>
            </div>
            <div class="mb-3">
                <lable for="latitude">Product's Latitude :</lable> 
                <input type="text" name="latitude" class="form-control" required>  
            </div>
        
            <div class="mb-3">
                <lable for="discriptoin">Discription :</lable> 
                <textarea rows="10" cols="10" class="form-control" name="discription"></textarea>
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Submit">&nbsp;&nbsp;&nbsp;
            <input type="reset" value="Reset" class="btn btn-primary">

            </form>
        </div>
    </body>
</html>
<?php include "add-product-data.php";?>