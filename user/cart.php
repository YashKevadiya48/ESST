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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- External css -->
    <link rel="stylesheet" href="../css/style.css">
    <title>Cart</title>
</head>
<body style="font-family:'Trirong';">

<?php
            include '../includes/user_header.php';
?>

<div class="container my-4">
    <h2 class="card-header">My Cart</h2>

    <?php
        session_start();
        if(isset($_SESSION['succ-delete'])){
            if($_SESSION['succ-delete'] = "Product is successfully Removed from The Cart."){
                
                echo "<br><div class='alert alert-success' role='alert'>".$_SESSION['succ-delete']."</div>";
                unset($_SESSION['succ-delete']);
            }
            
        }
        if(isset($_SESSION['fail-delete'])){
            if($_SESSION['fail-delete'] = "Product is not Removed."){
            
                echo "<br><div class='alert alert-danger' role='alert'>".$_SESSION['fail-delete']."</div>";
                unset($_SESSION['fail-delete']);
            }
        }
    ?> 
    <?php
        include "../admin/connection.php";
        session_start();
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * FROM cart INNER JOIN product ON cart.product_id = product.product_id WHERE cart.user_id = '$user_id'";
        $result = mysqli_query($conn,$sql) or die("query is failed.");
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
    ?>
    <div class="card">
        <div class="card-body">
            <div class="row g-0">
                <div class="col-md-4 mb-3">
                    <img src="../admin/upload/product-photo/<?php echo $row['product_image']?>" class="img-thumbnail" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $row['product_name']?></h3>
                        <p class="card-text"><b>Price : ₹ <?php echo $row['product_price']?></b></p>
                        <p class="card-text"><b>Quantity : <?php echo $row['quantity']?></b></p>
                        <p class="card-text"><?php echo $row['discription']?><p>
                        <a href="#" class="btn btn-success">Location</a>
                        <a href="http://localhost/ESST/data/remove-cart-data.php?p_id=<?php echo $row['product_id']?>" class="btn btn-success">Remove</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }}?> <br>
</div>
<?php
            include '../includes/footer.php';
?>
   
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>