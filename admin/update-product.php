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
         <link rel="stylesheet" href="css/update-product.css">
        <title>Update-product</title>
    </head>
    <body>
        <?php include "header.php"?>
        <br>     
        <p class="h1"> Update Product </p>
        <div class="container-fluid">
         <?php 
            include "connection.php";
            session_start();
            $user_id = $_SESSION['user_id'];
            $product = $_GET['p_id'];

            $sql = "SELECT * FROM product INNER JOIN category ON product.category_name = category.category_id INNER JOIN mall_details ON product.mall_id = mall_details.mall_id AND product.product_id = '$product'";

            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
         ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="main-form container" enctype="multipart/form-data">
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
                <input type="hidden" name="product-id" value="<?php echo $row['product_id']?>">
                <input type="hidden" name="category-id" value="<?php echo $row['category_id'] ?>">
                
                <div class="mb-3">
                    <lable for="mall-Name">Mall Name :</lable>
                    <?php
                    $sql2 = "SELECT * FROM mall_details WHERE user_id = '$user_id'";

                    $result2 = mysqli_query($conn,$sql2);
                        if(mysqli_num_rows($result2) > 0){
                    ?>
                    <select name="mall_id" class="form-control" required>
                        <?php 
                            while($row2 = mysqli_fetch_assoc($result2)){ 
                                if($row['mall_id'] == $row2['mall_id']){
                                    $select = "selected";
                                }
                                else{
                                    $select = "";
                                }
                        ?>
                            <option <?php echo $select ?> value="<?php echo $row2['mall_id'] ?>"><?php echo $row2['mall_name'] ?></option>
                        <?php }?>
                        </select>
                    <?php  } ?>
                </div>

                <div class="mb-3">
                    <lable for="category-Name">Category Name :</lable>
                    <?php
                    $sql1 = "SELECT * FROM category WHERE user_id = '$user_id'";

                    $result1 = mysqli_query($conn,$sql1);
                        if(mysqli_num_rows($result1) > 0){
                    ?>
                    <select name="category-name" class="form-control" required>
                        <?php 
                            while($row1 = mysqli_fetch_assoc($result1)){ 
                                if($row['category_id'] == $row1['category_id']){
                                    $select = "selected";
                                }
                                else{
                                    $select = "";
                                }
                        ?>
                            <option <?php echo $select ?> value="<?php echo $row1['category_id'] ?>"><?php echo $row1['category_name'] ?></option>
                        <?php }?>
                        </select>
                    <?php  } ?>
                </div>
                <div class="mb-3">
                    <lable for="product-Name">Product Name :</lable>
                    <input type="text" name="product-name" value="<?php echo $row['product_name'] ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <lable for="quantity">Quantity :</lable>
                    <input type="number" name="quantity" value="<?php echo $row['quantity'] ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <lable for="price">Price :</lable></br>
                    <input type="tel" name="price" value="<?php echo $row['product_price'] ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <lable for="photo">Product photo :</lable>
                    <input type="file" name="product-image"class="form-control" ><br>
                    <img src="upload/product-photo/<?php echo $row['product_image'] ?>" alt="image not available." style="width: 150px; height:150px;">
                    <span id="image-error" style="color: red;"></span>
                    <input type="hidden" name="old-image" value="<?php echo $row['product_image'] ?>">
                </div>

                <div class="mb-3">
                <lable for="longitude">Product's Longitude :</lable>
                <input type="text" name="longitude" value="<?php echo $row['product_longitude'] ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                <lable for="latitude">Product's Latitude :</lable>
                <input type="text" name="latitude" value="<?php echo $row['product_latitude'] ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                <lable for="discriptoin">Discription :</lable>
                <textarea rows="10" cols="20" name="discription" class="form-control"><?php echo $row['discription'] ?></textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Update"> 
                <?php }?>
            </form>
            <?php } ?>
    </body>
</html>
<?php include "update-product-data.php"?>