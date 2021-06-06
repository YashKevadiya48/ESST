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
        <link rel="stylesheet" href="css/category-data.css">
        <title>Add Category</title>
    </head>
    <body>
    <?php include "header.php";?><br>
        <p class="h1"> Add Category </p>
        <div class="container-fluid" >
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="main-form container">
            
            <div class="mb-3">
                <lable for="mall-Name">Mall Name :</lable>
                <select name="mall_id" class="form-control" required>
                    <option disabled>Select Mall</option>
                    <?php
                        include "connection.php";
                        session_start();
                        $user_id = $_SESSION['user_id'];

                        $sql = "select mall_id,mall_name from mall_details where user_id = '$user_id'";
                        $result = mysqli_query($conn,$sql) or die("Query unsuccessful.");

                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<option value='{$row['mall_id']}'>{$row['mall_name']}</option>";
                            }
                        }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="categoryName">Category Name</label>
                <input type="text" name="category" id="categoryName" class="form-control" required>
                <div class="invalid-feedback">Please enter a valid Category Name.</div>
            </div>

            <input type="submit" name="submit" value="Add" class="btn btn-primary"> &nbsp;&nbsp;
            <input type="reset" value="Reset" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>
<?php include "add-category-data.php";?>