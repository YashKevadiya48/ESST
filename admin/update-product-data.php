<?php
  include "connection.php";
  if(isset($_POST['submit'])){
    $product_id = $_POST['product-id'];

    if(empty($_FILES['product-image']['name'])){
        $photo_name = $_POST['old-image'];
    }
    else{
        $errors = array();
  
        $photo_name = $_FILES['product-image']['name'];
        $photo_ext = strtolower(explode(".",$photo_name)[1]);
        $photo_size = $_FILES['product-image']['size'];
        $photo_tmp = $_FILES['product-image']['tmp_name'];
        $photo_type = $_FILES['product-image']['type'];
        $extension = array("jpeg","jpg","png");
  
        if(in_array($photo_ext,$extension) === false){
            $errors[] = "This type of file extension not allowed, Please choose jpeg,jpg or png";
        }
        if($photo_size > 2097152){
            $errors[] = "File size must be 2mb or Lower.";
        }
        if(empty($errors) == true){
            move_uploaded_file($photo_tmp,"upload/product-photo/".$photo_name);
        }
        else{
?>  
         <script>
              document.getElementById('image-error').innerHTML='<?php
                      for ($x = 0; $x < sizeof($errors); $x++)
                      { 
                          echo $errors[$x];
                          echo "<br>";
                      } ?>';
          </script> 
<?php
          die();
         }
      }
  
    $mall_id = $_POST['mall_id'];
    $category_id = $_POST['category-id'];
    $category_name = $_POST['category-name'];
    $product_id = $_POST['product-id'];
    $product_name = $_POST['product-name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $discription = $_POST['discription'];
    
    $sql1 = "UPDATE product SET product.mall_id={$mall_id}, product.category_name='{$category_name}', product_name = '{$product_name}', quantity = {$quantity}, product_price = {$price},product_image = '{$photo_name}', product_longitude = '{$longitude}', product_latitude = '{$latitude}', discription = '{$discription}'
            WHERE product_id = '$product_id'";
      
    $result1 = mysqli_query($conn,$sql1);
  
    if($result1){
        $_SESSION['product'] = "Product is successfully updated.";
        
    }
    else{
        $_SESSION['product'] = "Product is not updated.";
         
    }
    header("Location: http://localhost/ESST/admin/product-data.php");
    }
?>  