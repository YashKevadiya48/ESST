<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/headerhome.css">

    <title>HOME</title>
</head>
<body>
  
<?php include "header.php";?>
<!-- navbar2 -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fSize" aria-current="page" href="product-data.php">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fSize" href="mall-data-table.php">Malls</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active fSize" href="category-data-table.php" >Category</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active fSize" href="logout.php" >Logout</a>
        </li>

        <li class="nav-item">
          <?php
              // session_start();
              $user_id = $_SESSION['user_id'];
              include 'connection.php';
              $sql = "SELECT user_name,profile_photo FROM user where user_id = '$user_id'";
              $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result) > 0){
          ?>
          <a href="profile.php"  class="welcome">
              <?php 
                  while($row = mysqli_fetch_assoc($result)){
              ?>
              Welcome, <?php echo $row['user_name']; ?> &nbsp; 
              <img src="upload/profile-photo/<?php echo $row['profile_photo']?>" alt="image not found" style="width:50px; height:50px; border-radius:30px; border:1px solid black">
                  
              <?php } ?>
          </a>
          <?php } ?>
        </li>
      </ul>
    </div>
  </div>
</nav>











<!-- JS-Script -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>