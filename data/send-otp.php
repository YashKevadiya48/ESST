<?php
    if(isset($_POST['submit'])){

        include "connection.php";

        $user_name = mysqli_real_escape_string($conn,$_POST['uname']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);

        $sql = "SELECT status FROM user 
                WHERE user_name = '$user_name' AND email_id = '$email'";

        $result = mysqli_query($conn,$sql);

        session_start();
        if(mysqli_num_rows($result)){
            while($row = mysqli_fetch_assoc($result)){
                if($row['status'] == 'active'){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $sql1 = "UPDATE user SET otp = '$otp'
                             WHERE user_name = '$user_name' AND email_id = '$email'";

                    $result1 = mysqli_query($conn,$sql1);

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
                        $mail->Password = '';   

                    //   $path = 'reseller.pdf';
                    //   $mail->AddAttachment($path);

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
                            echo "E-mail sending failed...";
                        }
                        else 
                        {
                            session_start();
                            $_SESSION['otp_sent'] = "OTP successfully send on $to";
                            header('Location: http://localhost/ESST/otp.php');
                        }
                    }

                    // $to   = 'yashkevadiya46@gmail.com';
                    $from = 'admin@esst.infinityfreeapp.com';
                    $name = 'admin_ESST';
                    $subj = 'For Forgot Password in Your account of ESST website';
                    $msg = 'Hello!' . $user_name . ' Your  OTP is to forgot your password
                                <h1> OTP : ' . $otp . '</h1>';

                    $error=smtpmailer($email,$from, $name ,$subj, $msg);
                }
                else{
                    session_start();
                    $_SESSION['msg_error'] = " $user_name Your account is not active. Please, active your account.";
                    header('Location: http://localhost/ESST/login.php');
                }
            }

        }
        else{
            $_SESSION['send-otp'] = "E-mail id or user name Wrong.";
        }
    }
?>  