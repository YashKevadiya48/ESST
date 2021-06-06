<?php

    if(isset($_POST['submit'])){

        include 'connection.php';
         
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
         
    
        $sql = "SELECT user_id, user_name,password FROM user WHERE user_name = '$username' AND email_id = '$email' AND status = 'active'";
    
        $result = mysqli_query($conn,$sql) or die("query failed.");
    
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
    
                $db_pass = $row['password'];
                
    
                if(password_verify($password,$db_pass)){
                    session_start();
                    
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['user_name'] = $row['user_name'];
                    
                    if(!isset($_SESSION['user_id'])){
                        $_SESSION['user_id'] = 0;
                    } 
                    
                    if(isset($_POST['rememberme'])){
                        setcookie('usernamecookie',$username,time()+86400);
                        setcookie('emailcookie',$email,time()+86400);
                        setcookie('passwordcookie',$password,time()+86400);
    
                        header("Location: http://localhost/ESST/user/dashboard.php");
                    }
                    else{
                        header("Location: http://localhost/ESST/user/dashboard.php");
                    }     
                }
                else{
?>
                    <script>
                         document.getElementById('password-error').innerHTML='Password is incorrect.';
                    </script>
<?php
                }
            }
        }
        else{
            $_SESSION['msg_error'] = "Your account is not active  OR Your E-mail id and Username is Wrong.";
            header('Location: http://localhost/ESST/login.php');
        }
    }
?>