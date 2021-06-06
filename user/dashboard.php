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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- External css -->
    <link rel="stylesheet" href="../css/style.css">
    <title>Dashboard</title>
    
    <style>
            .mySlides {display:none; height: 600px;}

            #imageslider{
               width: 100%;    
            }

            #malllist{
              background: whitesmoke;
            }
            .column{
                    border: 1px solid black;
                    float: left;
                    width: 45%;
                    padding: 5px;
                    margin: 12px;
            }
            .column h2,p{
                    color: #999;
            }
            .row:after{
                    content: "";
                    display: table;
                    clear: both;
            }
        
            @media only screen and (max-width:1085px){
                .column{
                        width: 90%;
                }
            } 
            .img-size{
              height: 250px;
            }
            .card{
              margin-top: 15px;
            }
    </style>
    

</head>
    <body style="font-family:'Trirong';">
        <?php 
            include "../includes/user_header.php";
        ?>

        <div>
            <div id="imageslider">
                <div class="w3-content" style="max-width:1550px">
                      <img class="mySlides" src="../image/mall3.jpg" style="width:100%">
                      <img class="mySlides" src="../image/mall2.jpg" style="width:100%">
                      <img class="mySlides" src="../image/mall4.jpg" style="width:100%">
                </div>
                <div class="w3-center">
                  <div class="w3-section">
                    <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
                    <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
                  </div>
                  <button class="w3-button demo" onclick="currentDiv(1)">1</button> 
                  <button class="w3-button demo" onclick="currentDiv(2)">2</button> 
                  <button class="w3-button demo" onclick="currentDiv(3)">3</button> 
                </div>
            </div><br>
            <!-- list -->
<div class="container">
 <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="../image/mall1.jpeg" class="card-img-top img-size" alt="...">
      <div class="card-body">
        <h3 class="card-title text-center">Himalaya Mall</h3>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="../image/mall2.jpg" class="card-img-top img-size" alt="...">
      <div class="card-body">
        <h3 class="card-title text-center">ATOZ shopping mall</h3>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="../image/mall3.jpg" class="card-img-top img-size" alt="...">
      <div class="card-body">
        <h3 class="card-title text-center">K-Mall</h3>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="../image/mall4.jpg" class="card-img-top img-size" alt="...">
      <div class="card-body">
        <h3 class="card-title text-center">Ghanshyam Mall</h3>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
 
  <div class="col">
    <div class="card">
      <img src="../image/mall5.jpg" class="card-img-top img-size" alt="...">
      <div class="card-body">
        <h3 class="card-title text-center">Modicare Mall - Bhavnagar</h3>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="../image/mall6.jpg" class="card-img-top img-size" alt="...">
      <div class="card-body">
        <h3 class="card-title text-center">Modicare Mall - Bhavnagar</h3>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>

 </div>
</div>
            
        </div>
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
              showDivs(slideIndex += n);
            }

            function currentDiv(n) {
              showDivs(slideIndex = n);
            }

            function showDivs(n) {
              var i;
              var x = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("demo");
              if (n > x.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = x.length}
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-red", "");
              }
              x[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " w3-red";
            }

        </script>
        <?php 
            include "../includes/footer.php";
        ?>
    </body>

     <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>