<?php 
    session_start();
    if($_SESSION['user_id'] == 0){
        $_SESSION['msg'] = "Please, Login to access websites";
        header("Location: http://localhost/ESST/admin/login.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="css/product-data.css"> -->
        <title>Product | Mall Admin</title>
    </head>
    <body>
        
    <?php include "headerhome.php";?><br>
        <center>
        <div>
            <h2>Product Details</h2><br>
            <a href="add-product.php"><input type="button" value="Add"></a><br>
    
       
            <?php 
                if(isset($_SESSION['product'])){
                    if($_SESSION['product'] == "Product is successfully added." || $_SESSION['product'] == "Product is successfully updated." || $_SESSION['product'] = "Product is successfully Deleted."){
                        echo "<br><div class='alert alert-success' role='alert'>$_SESSION[product]</div>";
                        unset($_SESSION['product']);
                    }
                    else{
                        echo "<br><div class='alert alert-denger' role='alert'>$_SESSION[product]</div>";
                        unset($_SESSION['product']);
                    }
                    
                }
               $user_id = $_SESSION['user_id'];

                $sql = "SELECT * FROM product INNER JOIN category ON product.category_name = category.category_id INNER JOIN mall_details ON product.mall_id = mall_details.mall_id AND product.user_id = '$user_id'";
               
               $result = mysqli_query($conn,$sql);

               if(mysqli_num_rows($result) > 0){
            ?>
         </div>
            <br>
            <table border="1px" cellspacing="0px" cellpadding="10px" name="product-mall">
                <tr>
                    <th>Id</th>
                    <th>Mall Name</th>
                    <th>Category Name</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Product Price</th>
                    <th>Product Photo</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Discription</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php
                     $product_id = 1;
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $product_id?></td>
                    <td><?php echo $row['mall_name']?></td>
                    <td><?php echo $row['category_name']?></td>
                    <td><?php echo $row['product_name']?></td>
                    <td><?php echo $row['quantity']?></td>
                    <td><?php echo $row['product_price']?></td>
                    <td><img src="upload/product-photo/<?php echo $row['product_image']?>" alt="image is not available." style="width: 150px; height:150px;"></td>
                    <td><?php echo $row['product_longitude']?></td>
                    <td><?php echo $row['product_latitude']?></td>
                    <td><?php echo $row['discription']?></td>
                    <td><a href="update-product.php?p_id=<?php echo $row['product_id']?>"><input type="button"  value="Update"></a></td>
                    <td><a href="delete-product.php?p_id=<?php echo $row['product_id']?>"><input type="button"  name = "delete" value="Delete"></a></td>
                </tr>
                <?php
                    $product_id = $product_id + 1;
                    }
                ?>
            </table>
            <?php } ?><br><br>
            <input type="button" value="Prev">
            <input type="button" value="1">
            <input type="button" value="2">
            <input type="button" value="Next">
        </div>
        </center>
    </body>
</html>

<!-- //<?php 

        // include "delete-product.php";
// ?> -->