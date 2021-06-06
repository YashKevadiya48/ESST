<?php

    if(isset($_POST['submit'])){
        
        include "connection.php";
    
        if(isset($_FILES['photo'])){
    
            $errors = array();
    
            $files_name = $_FILES['photo']['name'];
            $files_ext = strtolower(explode('.',$files_name)[1]);
            $files_size = $_FILES['photo']['size'];
            $files_tmp = $_FILES['photo']['tmp_name'];
            $files_type = $_FILES['photo']['type'];
            $extension = array("png","jpeg","jpg");
    
            if(in_array($files_ext,$extension) === false){
                $errors[] = "This extension file not allowed, please choose jpeg,jpg or png file.";
            }

            if($files_size > 2097152){
                $errors[] = "File size must be 2mb or Lower";
            }

            if(empty($errors) == true){
                move_uploaded_file($files_tmp,"../admin/upload/profile-photo/".$files_name);
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
    
        $fname =  mysqli_real_escape_string($conn,$_POST['fname']);
        $lname =  mysqli_real_escape_string($conn,$_POST['lname']);
        $uname =  mysqli_real_escape_string($conn,$_POST['uname']);
        $password =  mysqli_real_escape_string($conn,$_POST['password']);
        $repassword = mysqli_real_escape_string($conn,$_POST['repassword']);
        $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $address =  mysqli_real_escape_string($conn,$_POST['address']);
        $pincode =  mysqli_real_escape_string($conn,$_POST['pincode']);
    
    
        $usql = "SELECT user_name FROM user WHERE user_name = '$uname'";
        $uresult = mysqli_query($conn,$usql) or die("user query is unsuccessful.");
        if(mysqli_num_rows($uresult) > 0){
?>
                <script>
                    document.getElementById('username-error').innerHTML='username already exist. ';
                </script>
    <?php
        }
        else{
            $esql = "SELECT email_id FROM user WHERE email_id = '$email'";
            $eresult = mysqli_query($conn,$esql) or die("email query is unsuccessful.");
            if(mysqli_num_rows($eresult) > 0){
    ?>
                    <script>
                        document.getElementById('email-error').innerHTML='This E-mail id Already Exits';
                    </script>
    <?php
            }
            else{
                if($password === $repassword){
    
                    $pass = password_hash($password,PASSWORD_DEFAULT);
                    $repass = password_hash($repassword,PASSWORD_DEFAULT);

                    $tokan = bin2hex(random_bytes(15));

                    $sql = "insert into user(first_name,last_name,user_name,password,mobile_no,email_id,profile_photo,address,pincode,tokan,status)
                            values('{$fname}','{$lname}','{$uname}','{$repass}',{$mobile},'{$email}','{$files_name}','{$address}',{$pincode},'{$tokan}','inactive')";
    
                    $result = mysqli_query($conn,$sql) or die('Query Unsuccessful.');
                    if($result){
                        session_start();
                        require "PHPMailer/PHPMailerAutoload.php";

                        function smtpmailer($to, $from, $from_name, $subject, $body)
                        {
                            $mail = new PHPMailer();
                            $mail->IsSMTP();
                            $mail->SMTPAuth = true; 
                            $mail->SMTPSecure = 'tls'; 
                            $mail->Host = 'smtp.gmail.com';
                            $mail->Port = 587;  
                            $mail->Username = 'yashkevadiya9@gmail.com';
                            $mail->Password = 'Kevadiya@#18';   
                            // $path = 'reseller.pdf';
                            // $mail->AddAttachment($path);
                            $mail->IsHTML(true);
                            $mail->From="admin@esst.infinityfreeapp.com";
                            $mail->FromName=$from_name;
                            $mail->Sender=$from;
                            $mail->AddReplyTo($from, $from_name);
                            $mail->Subject = $subject;
                            $mail->Body = $body;
                            $mail->AddAddress($to);
                            if(!$mail->Send())
                            {
                                $_SESSION['msg'] = "Mail sending failed on $to.";
                                header("Location: http://localhost/ESST/login.php");
                            }
                            else 
                            {
                                $_SESSION['msg'] = "Check your mail to activate your account $to.";
                                header("Location: http://localhost/ESST/login.php");
                            }
                        }
                            // $to   = 'yashkevadiya46@gmail.com';
                        $from = 'admin@esst.infinityfreeapp.com';
                        $name = 'ESST';
                        $subj = 'For Activate Your ESST website account';
                        $msg = 'Hello,'.' '.$uname .' '.'please click on the below link to activate your account
                                http://localhost/ESST/data/activation.php?tokan='.$tokan;
                        $error=smtpmailer($email,$from, $name ,$subj, $msg);
                    }
                    else{
    ?>
                        <script>
                            alert('signup unsuccessful.');
                        </script>
    <?php
                    }
    
                }
                else{
                    ?>
                    <script>
                         document.getElementById('password-error').innerHTML='Password is not match.';
                    </script>
                    <?php
                }
            }
        }
        mysqli_close($conn);
        // header("Location:  http://localhost/ESST/admin/login.php");
    }
    ?>