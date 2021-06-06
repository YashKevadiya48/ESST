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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title> User_Home </title>   

</head>
    <body style="font-family:'Trirong';">

            <?php include "includes/user_header.php"?>

            <p class="h1 text-center mt-3">Mall List</p>
            <p class="h4 text-center">List of nearest mall to you.</p>

            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                    include "admin/connection.php";
                    $sql = "SELECT * FROM mall_details";

                    $result = mysqli_query($conn,$sql) or die("Query is failed.");

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                    
                        
                         <div class="col">
                           <div class="card">
                                <a href="user_malldetails.php?m_id=<?php echo $row['mall_id'];?>">
                                    <img src="admin/upload/mall-photo/<?php echo $row['mall_photo']?>" class="card-img-top img-size" alt="Cinque Terre" width="600" height="400">
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title text-center"><?php echo $row['mall_name']?></h3>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                           </div>
                          </div>
                       
                <?php } }?>
                </div>
             </div> 


           

            <div class="clearfix"></div>

 </div>
            
            
        <?php 
            include "includes/user_footer.php";
        ?>

         <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>

</html>