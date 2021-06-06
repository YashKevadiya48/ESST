<?php

session_start();

$connect = mysqli_connect('localhost', 'root', '');
if($connect){
    echo "";
}
else{
    echo "connection not established. :( ";
}
mysqli_select_db($connect, 'mymistakes');

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$q = " select * from signup where email = '$email' ";

$result = mysqli_query($connect, $q);
$number = mysqli_num_rows($result);
if($number == 1){
    echo "<script onload='signup.php'>
                var no = confirm('User alredy exist do you want to go to the login page  ?');
                if(no == true){
                    window.location.href = 'login.php';
                }
                else{
                    window.location.href = 'signup.php';
                }

          </script>";
}
else{
    $query = "insert into signup(email, username,password) values('$email', '$username', '$password') ";
    mysqli_query($connect, $query);
   echo "<script onload='signup.php'>
                var no = confirm('You want to go to the login page  ?');
                if(no == true){
                    window.location.href = 'login.php';
                }
                else{
                    window.location.href = 'shopping.php';
                }

          </script>";
}
?>