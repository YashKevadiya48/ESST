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
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="css/update-category.css">
        <title>Update Category</title>
    </head>
    <body>
        <?php include "header.php";?><br>
        <p class="h1"> Update Category </p>

            <?php 
            include "connection.php";
            session_start();
            $user_id = $_SESSION['user_id'];
            $category = $_GET['c_id'];

            $sql = "SELECT * FROM category INNER JOIN mall_details ON category.mall_id = mall_details.mall_id AND category.category_id = '$category'";

            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
         ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="main-form container" enctype="multipart/form-data">
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>                
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
                <lable for="category-name">Category Name</lable>
                <?php 
                    include "connection.php";
                    $category_id = $_GET['c_id'];
    
                    $sql1 = "SELECT * FROM category WHERE category_id = $category_id";
    
                    $result1 = mysqli_query($conn,$sql1);
                    if(mysqli_num_rows($result1) > 0){
                        while($row1 = mysqli_fetch_assoc($result1)){
                        
                ?>
              
                    <input type="hidden" name="category" value="<?php echo $category_id?>">
                    <input type="text" name = "category_name" value="<?php echo $row1['category_name']?>" class="form-control"><br>
                    <input type="submit" name="submit" value="Update" class="btn btn-primary">
                    
                <?php
                    }
                } 
                else{
                    echo "<div class='alert alert-danger' role='alert'>category Not Found</div>";
                }
                ?>
            </div>
            <?php }?>
            </form>
        <?php }?>
        
    </body>
</html>
<?php include "update-category-data.php";?>