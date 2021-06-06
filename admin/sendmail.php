<?php
    $otp = rand(100,999).rand(100,999);
    $to_mail = "yashkevadiya46@gmail.com";
    $subject = "For activate ESST website account";
    $body = "Hii, YASH KEVADIYA please click on the below link to activate your account.
            OTP :  $otp";
    $headers = "From: yashkevadiya9@gmail.com";

    if(mail($to_mail,$subject,$body,$headers)){
        echo "E-mail Successfully sent to $to_mail...";
    }
    else{
        echo "E-mail sending failed...";
    }
?>
