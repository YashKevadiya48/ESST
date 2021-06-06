<?php

    if(isset($_POST['submit'])){

        //  session_start();

        $user_id = $_SESSION['user_id'];



        include '../data/connection.php';



        if(empty($_FILES['profile-photo']['name'])){

            $photo_name = $_POST['old-image'];

        }

        else{

            $errors = array();



            $photo_name = $_FILES['profile-photo']['name'];

            $photo_ext = strtolower(explode('.',$photo_name)[1]);

            $photo_size = $_FILES['profile-photo']['size'];

            $photo_tmp = $_FILES['profile-photo']['tmp_name'];

            $photo_type = $_FILES['profile-photo']['type'];

            $extension = array("jpeg","jpg","png");



            if(in_array($photo_ext,$extension) === false){

                $errors[] = "This extension file not allowed, please choose jpeg,jpg or png file.";

            }



            if($photo_size > 2097152){

                $errors[] = "File size must be 2mb or Lower";

            }



            if(empty($errors) == true){

                move_uploaded_file($photo_tmp,"../admin/upload/profile-photo/".$photo_name);

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



        $first_name = mysqli_real_escape_string($conn,$_POST['fname']);

        $last_name = mysqli_real_escape_string($conn,$_POST['lname']);

        $user_name = mysqli_real_escape_string($conn,$_POST['uname']);

        $password = mysqli_real_escape_string($conn,$_POST['password']);

        $phone = mysqli_real_escape_string($conn,$_POST['mobile']);

        $email = mysqli_real_escape_string($conn,$_POST['email']);

        $address = mysqli_real_escape_string($conn,$_POST['address']);

        $pincode = mysqli_real_escape_string($conn,$_POST['pincode']);



        $sql = "UPDATE user 

                SET first_name = '$first_name', last_name = '$last_name', user_name = '$user_name', password = '$password', mobile_no = '$phone', email_id = '$email',profile_photo = '$photo_name', address = '$address', pincode = '$pincode'

                WHERE user_id = '$user_id'";



        $result = mysqli_query($conn,$sql) or die("query is failed.");



        if($result){

            session_start();

            $_SESSION['profile'] = "Profile Updated Successfully.";

        }

        else{

            $_SESSION['profile'] = 'Failed to update data.';

        }

        mysqli_close($conn);

        header("Location: http://localhost/DE/profile.php");

    }

?>  