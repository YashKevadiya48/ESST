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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../IDK/Kavar/CSS/user-mallDetails.css">
    <title>Mall Details</title>
</head>
<body>


<p class="h1 text-center my-2"> Mall Details </p>

<div class="container">
<div class="card">
  <img src="../image/mall1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h2 class="card-title">Card title</h2>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<div id="button">
                <center>
                <a href="#"><button style="border-radius: 27px; height:50px; width:50px;"><i class="fas fa-directions"></i></button></a>
                <a href="#"><button style="border-radius: 27px; height:50px; width:50px;"><i class="fas fa-bookmark"></i></button></a>
                <a href="#"><button style="border-radius: 27px; height:50px; width:50px;"><i class="fas fa-share-alt"></i></button></a>
                </center>
            </div>

</div>

<div id="details">
                <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;Crystal Mall, Kalavad Rd, Opp. Rani Tower, Rajkot, Gujarat 360001</p>             
                <p><i class="far fa-clock"></i>&nbsp;&nbsp;&nbsp;Timing :- 8:00am-7:00pm</p>                
                <p><i class="fas fa-male"></i>&nbsp;&nbsp;&nbsp;Yash Kevadiya - <a href="tel:180-222-1111">180-222-1111</a></p> 
            </div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>