<?php 
      session_start();
      if($_SESSION['user_id'] == 0){
        $_SESSION['msg'] = "Please, Login to access websites";
        header("Location: http://localhost/ESST/login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="CSS/user_productdetails.css">
    <title>Product Details</title>
</head>
<body>
    <?php
                include 'includes/user_header.php';
    ?>

    
    <p class="h1 text-center my-2 mb-4"> Product Details </p>


    <div class='container my-4'>

        <?php
            if(isset($_SESSION['add_cart'])){
                if($_SESSION['add_cart'] = "Product Successfully inserted into Cart."){
                    
                    echo "<br><div class='alert alert-success' role='alert'>$_SESSION[add_cart]</div>";
                    unset($_SESSION['add_cart']);
                }
                
            }
            if(isset($_SESSION['failed_cart'])){
                if($_SESSION['failed_cart'] = "Product is not inserted into Cart."){
                
                    echo "<br><div class='alert alert-danger' role='alert'>$_SESSION[failed_cart]</div>";
                    unset($_SESSION['failed_cart']);
                }
            }
        ?>   
        <?php
            include "admin/connection.php";      
            $product_id = $_GET['p_id'];
            $sql = "SELECT * FROM product WHERE product_id = '$product_id'";
            $result = mysqli_query($conn,$sql) or die("query is failed.");
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
        ?>
            <div class='card' style='margin-bottom: 20px;'>
                <div class='card-body'>
                    <div class='row g-0'>
                        <div class='col-md-4 mb-3'>
                            <input type='hidden' name='pc_id' value="<?php echo $row['product_id']?>" />
                            <input type='hidden' name='product_name' value="<?php echo $row['product_name']?>" />
                            <div class='image'><img src="admin/upload/product-photo/<?php echo $row['product_image']?>" class='img-thumbnail' alt='...' /></div>
                                <div class='my-3 ms-5'> 
                                    <center>
                                        <input type="button" class='btn btn-success ' value="DIRECTIONS">
                                        <a href="http://localhost/ESST/data/cart-data.php?pc_id=<?php echo $row['product_id']?>" class="btn btn-success">Add to Cart</a>
                                        <a href="http://localhost/ESST/user/cart.php" class="btn btn-success">Go to Cart</a>
                                    </center>
                                </div>
                            </div>
                            <div class='col-md-8'>
                                <div class='card-body'>
                                    <h2 class='card-header' style='margin-bottom: 15px;'><?php echo $row['product_name']?></h2>
                                    <p class='card-text h4'> Price:     ₹ <?php echo $row['product_price']?></p>
                                    <p class='card-text h4'> Quantity: <?php echo $row['quantity']?></p>
                                    <p class='card-text'><?php echo $row['discription']?><p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
    </div>
    
<?php include 'includes/user_footer.php';?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>