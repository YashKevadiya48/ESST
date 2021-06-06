<?php 
      session_start();
      if($_SESSION['user_id'] == 0){
        $_SESSION['msg'] = "Please, Login to access websites";
        header("Location: https://esst.infinityfreeapp.com/login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- External css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="CSS/user_productdetails.css">
    <title>Product Details</title>
</head>
<body>
<?php
            include '../includes/user_header.php';
?>
<p class="h1 text-center my-2 mb-4"> Product Details </p>

<div class="container my-4">
<div class="card">
  <h2 class="card-header">Product Name</h2>
  <div class="card-body">
  <div class="row g-0">
    <div class="col-md-4 mb-3">
      <img src="../image/logo1.png" class="img-thumbnail" alt="...">
      <div class="my-3 ms-5">
           <a href="#" class="btn btn-success ">DIRECTIONS</a>
           <a href="#" class="btn btn-success">ADD TO CART</a>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<p>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<?php
            include '../includes/footer.php';
?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>