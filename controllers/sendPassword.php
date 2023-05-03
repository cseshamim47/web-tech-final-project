<?php 

    $data = $_POST['data'];
    $user = json_decode($data);    

    $email = $user->email;
    $name = $user->name;
    $username = $user->username;
    // echo $username;

    require_once('../models/userModel.php');


    require 'vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'reply@cseshamim.com';
    $mail->Password = '123Shamim.';
    $mail->setFrom('reply@cseshamim.com', 'Team Bitcoin');
    $mail->addReplyTo('reply@cseshamim.com', 'do-not-reply');
    $mail->addAddress($email, $name);
    $mail->Subject = 'Temporary Password for Your Account';
    
    //    $mail->msgHTML(file_get_contents('message.html'), __DIR__);
    $tempPass = rand(123123,99912319);
    $mail->Body = "Dear ".$name;
    $mail->Body .= "\r\nAs per your request, we have generated a temporary password for your account. Please use this password to log in to your account, and change it as soon as possible to ensure the security of your account.";
    $mail->Body .= "\r\n\r\nTemporary Password: ".$tempPass;
    $mail->Body .= "\r\n\r\nThank you for using our services.";
    $mail->Body .= "\r\n\r\nSincerely,";
    $mail->Body .= "\r\nMd Shamim Ahmed";
    //    $mail->addAttachment('attachment.txt');
    updatePassword($username,$tempPass);
    // echo $username.' '.$tempPass;
    if (!$mail->send()) {
        echo "Something Went wrong. Try again in few hours!";
    } else {

        echo  'New Password has been sent to your mail!';
    }


?>