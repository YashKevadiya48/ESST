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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title> User_Home </title>
    
    <style>
        * {
          box-sizing: border-box;
        }

        

        @media screen and (max-width: 480px) {
          .img-size{
            height: 360px;
            width:198px;
        }
        }

        @media screen and (max-width: 1280px) {
          .img-size{
            height: 360px;
            width:226px;
        }
        }

        body {
          font-family: Arial;
          font-size: 17px;
            background: #dcd5d5;
        }

        .container {
          position: relative;
          max-width: 70%;
          margin: 0 auto;
        }

        .container img {vertical-align: middle;}

        .container .content {
          position: absolute;
          bottom: 0;
          background: rgb(0, 0, 0); /* Fallback color */
          background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
          color: #f1f1f1;
          width: 100%;
          padding: 20px;
        }
        
        hr{
            border: 3px solid black;
        }
        #button button{
            margin: 22px;
            margin-top: 10px;
            border: 2px solid black;
            background-color: #dcd5d5;
/*            color: white;   */
        }
        #button button:hover{
            color: black;
            background-color: white;
            cursor: pointer;
        }
        
        #details p{
            margin-top: 10px;
            background-color: #dcd5d5;
            margin: auto;
            width: 72%;
            padding: 7px;
        }
        
        * {
          box-sizing: border-box;
        }

        body {
          margin: 0;
        }

        .navbar {
          overflow: hidden;
          background-color: #ebe1e1;
          font-family: Arial, Helvetica, sans-serif;
/*            padding-left: 50px;*/
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: black;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
        
        .productactive{
          background-color: #ada9a9;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;  
          border: none;
          outline: none;
          color: black;
          padding: 14px 16px;
          background-color: inherit;
          font: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: #ada9a9;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          width: 100%;
          left: 0;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content .header {
          background: red;
          padding: 16px;
          color: white;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }

        /* Create three equal columns that floats next to each other */
        .column {
          float: left;
          width: 33.33%;
          padding: 10px;
          background-color: #ccc;
          height: 250px;
        }

        .column a {
          float: none;
          color: black;
          padding: 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .column a:hover {
          background-color: #ddd;
        }

        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }

        /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .column {
            width: 100%;
            height: auto;
          }
        }
        div.gallery {
          border: 1px solid #ccc;
        }

        div.gallery:hover {
          border: 1px solid #777;
/*            width: 370px;*/
        }

        div.gallery img {
          width: 100%;
          height: auto;
        }

        div.desc {
          padding: 15px;
          text-align: center;
        }

        * {
          box-sizing: border-box;
        }

        .responsive {
          padding: 0 6px;
          float: left;
          width: 24.99999%;
            padding-top: 20px;
        }

        @media only screen and (max-width: 700px) {
          .responsive {
            width: 49.99999%;
            margin: 6px 0;
          }
        }

        @media only screen and (max-width: 500px) {
          .responsive {
            width: 100%;
          }
        }

        .clearfix:after {
          content: "";
          display: table;
          clear: both;
        }
        hr{
            border: 1px solid black;
        }
    </style>
    

</head>
    <body style="font-family:'Trirong';">
            <?php 
                include "admin/connection.php";

                $mall_id = $_GET['m_id'];
                $sql = "SELECT * FROM mall_details WHERE mall_id = '$mall_id'";

                $result = mysqli_query($conn,$sql) or die("Query is failed.");

                if(mysqli_num_rows($result) > 0){
                   while($row = mysqli_fetch_assoc($result)){
            ?>
            <center>
                <h2>Mall Details</h2>
            </center>
            <br>
            <div class="container">
                <a href="#"><img src="admin/upload/mall-photo/<?php echo $row['mall_photo']?>" alt="Mall" style="width:100%; height:500px;"></a>
              <div class="content">
                <h1><?php echo $row['mall_name']?></h1>
              </div>
            </div>
            <div id="button">
                <center>
                <a href="http://localhost/php-projects/design-eng/storelocater/storeLocate.php"><button style="border-radius: 27px; height:50px; width:50px;"><i class="fas fa-directions"></i></button></a>
                <a href="#"><button style="border-radius: 27px; height:50px; width:50px;"><i class="fas fa-bookmark"></i></button></a>
                <a href="#"><button style="border-radius: 27px; height:50px; width:50px;"><i class="fas fa-share-alt"></i></button></a>
                </center>
            </div>
            <div id="details">
                <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;<?php echo $row['mall_address']?></p>             
                <p><i class="far fa-clock"></i>&nbsp;&nbsp;&nbsp;Timing :- 8:00am-7:00pm</p>                
                <p><i class="fas fa-male"></i>&nbsp;&nbsp;&nbsp; <?php echo $row['owner_name']?> - <a href="tel:<?php echo $row['contect_no']?>"><?php echo $row['contect_no']?></a></p> 
            </div>
        
        <?php }}?>
        <hr>
            <div class="navbar" id="navbar">
                    <a href="#home" class="btn productactive">Grocery</a>
            </div>
            <br>
            
            
               <center>
                    <h2>Product List</h2>
                </center>

                <div class="container">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php
                            include "admin/connection.php";

                            $mall_id2 = $_GET['m_id'];
                            $sql2 = "SELECT * FROM product WHERE mall_id = '$mall_id2'";
                            $result2 = mysqli_query($conn,$sql2) or die("Query is failed.");

                            if(mysqli_num_rows($result2) > 0){
                               while($row2 = mysqli_fetch_assoc($result2)){
                        ?>


                            <div class="col">
                              <div class="card">
                                <a href="user_productdetails.php?p_id=<?php echo $row2['product_id']?>">
                                    <img src="admin/upload/product-photo/<?php echo $row2['product_image'];?>" class="card-img-top img-size" alt="...">
                                </a>
                                <div class="card-body">
                                  <h3 class="card-title text-center"><?php echo $row2['product_name']?></h3>
                                  <p class="card-text"><?php echo $row2['discription']?></p>
                                </div>
                              </div>
                            </div>
                        <?php }}?>
                    </div>
                </div>
            
            <script>
            // Add active class to the current button (highlight it)
            var header = document.getElementById("navbar");
            var btns = header.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function() {
              var current = document.getElementsByClassName("productactive");
              current[0].className = current[0].className.replace(" productactive", "");
              this.className += " productactive";
              });
            }
            </script>
        <?php 
            include "includes/user_footer.php";
        ?>
    </body>

</html>