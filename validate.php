<?php

session_start();

$connect = mysqli_connect('localhost', 'root', '');
if($connect){
    echo " ";
}
else{
    echo "connection not established. :( ";
}
mysqli_select_db($connect, 'user');

$uname = $POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$q = " select * from signup where email_id = '$email' && password = '$password' ";

$result = mysqli_query($connect, $q);
$number = mysqli_num_rows($result);
if($number == 1){
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    session_id();
    header('location: user/dashboard.php');
}
else{
    echo "<script onload='login.php'>
                var no = confirm('User does not exist or incorrect username or password do you want to go to the login page  ?');
                if(no == true){
                    window.location.href = 'login.php';
                }
                else{
                    window.location.href = 'signup.php';
                }

          </script>";
}
?>