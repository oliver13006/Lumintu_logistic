<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
$mail->SMTPDebug = 2;                           // Enable verbose debug output
$mail->isSMTP();                                // Set mailer to use SMTP
$mail->Host       = 'smtp.gmail.com;';          // Specify main SMTP server (follow the sender email)
$mail->SMTPAuth   = true;                       // Enable SMTP authentication
$mail->Username   = 'lumintu.event.2022@gmail.com';  // SMTP username
$mail->Password   = 'minacantik54321';         // SMTP password
$mail->SMTPSecure = 'tls';                      // Enable TLS encryption, 'ssl' also accepted
$mail->Port       = 587;                        // TCP port to connect to

$mail->setFrom('lumintu.event.2022@gmail.com', 'Lumintu Event'); // Set sender of the mail

include("reference.php");

for ($i=0; $i < sizeof($dataLength); $i++) { 
    $address = $hasil['data'][$i]['email'];
    $mail->addAddress($address);
}

$mail->isHTML(true);                                  
$mail->Subject = 'Certificate of Attandance Symposium Kraton Jogja 2022';
$mail->Body    = '

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
    <title></title>
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
</head>

<body style="margin:0;padding:0;">
<center>
    <table role="presentation" style="width:550px; border-collapse:collapse; border:1px solid #cccccc; border-spacing:0; text-align:left; background-image: url(https://lumintulogistic2021.s3.ap-southeast-1.amazonaws.com/bg.png); align-content: center;font-family: Montserrat, sans-serif;color: white;font-size: 12px;">

        <tr>
            <td>
                <img src="https://lumintulogistic2021.s3.ap-southeast-1.amazonaws.com/kraton.png" alt=""width="80" style="height:auto;display:block; padding-left:20px;padding-top:20px; padding-bottom:15px"/>
            </td>

            <th>
            <p style="padding-left: 10px; padding-top: 20px; line-height: 15px; font-weight: bold; font-size: 10px">
                KRATON<br>
                NGAYOGYAKARTA<br>
                HADININGRAT
            </p>

            </th>
            <th></th>
            <td>
                <img src="https://lumintulogistic2021.s3.ap-southeast-1.amazonaws.com/tingalan.png" alt="" width="85"  style="height:auto;display:block; padding-right:20px;padding-top:20px;padding-bottom: 15px;" />
            </td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th colspan="2">
                <h1 style="font-weight: bold">Hi!</h1>
                <h2 style="font-weight: bold">Thank you for joined our event.</h2>
                <hr>
                <p style="margin-block-start: 20px;font-weight: lighter; margin-block-end: 10px;"> We are very glad for your participation in the Symposium Kraton 
                Hadiningrat. We hope that the knowledge that you have gained over 
                the session of the program will be great benefit to you. Please
                download your certificate of attendance to this email!</p>
            </th>
            <th>&nbsp;</th>
        </tr>

        <tr>
            <th>&nbsp;</th>
            <th colspan="2">
                <center>
                <button type="button" style=" margin-bottom: 20px; border-radius: 30px; border-color:#C4C4C4;padding: 6px 28px; " ><a style="font-size: 12px; color: black; font-weight: bold; text-decoration: none; text-align: center;" href="#" > DOWNLOAD</a></button>
                </center>
            </th>
            <th>&nbsp;</th>
        </tr>
        
        <tr>
        <th>&nbsp;</th>
            <th colspan="2">
                <p style="margin-block-end: 10px;font-weight: lighter;">We wish you good luck and may we meet again in the next event!</p>
            </th>
            <th>&nbsp;</th>
        </tr>

        <tr>
            <th>&nbsp;</th>
            <th colspan="2">
                <p style="margin-block-end: 40px;font-weight: lighter;">Your sincerely,
                    <br>Lumintu Event Team</p>
            </th>
            <th>&nbsp;</th>
        </tr>

        <tr> 
            <td style="padding:0"; colspan="4">   
            <table role="presentation" style="width:550px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;background: #C4C4C4; align-content: center;font-family: Montserrat, sans-serif;color: white;font-size: 12px;">
            <tr>
            
            <th>&nbsp;</th>
            <th style="color: black; font-weight: bold;">
            <h3 style="font-style: bold;font-weight: bold; padding-left: 97px; padding-top:10px; margin: 0px 0px 0px; ">Connect With Us!</h3>
                
               
                <p style="font-weight: bold; padding-left: 97px; padding-right: 80px; padding-top: 5px; margin: 0 0 0px;">Lumintu Logic</p> <br>
                <p style="font-weight: lighter; padding-left: 97px; padding-right: 80px; padding-top: 2px; margin: 0 0 0px;">
                Jl. Tegal Arum Jl. Ringroad Barat, Gamping Kidul, Tamantirto,<br>
                Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55294</p>
                <br>
            
            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;margin-block-end: 10px;  font-family: Montserrat, sans-serif; color: white; font-size: 12px; border:2px solid #0000 !important;">
            <tr>
                <td style="padding-left: 89px;width:50%; align:center; font-family: Montserrat, sans-serif;  color: white; border:2px solid #0000 !important;">
                <table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;  font-family: Montserrat, sans-serif; color: white; font-size: 12px; border:2px solid #0000 !important;">
                    <tr>
                        <td style="padding:0 0 0 0px;width:30px; font-family: Montserrat, sans-serif;  color: white; border:2px solid #0000 !important;">
                            <a href="#"><img src="https://lumintulogistic2021.s3.ap-southeast-1.amazonaws.com/gg_instagram.png" alt="Twitter" width="30" style="height:auto;display:block;border:0;" /></a>
                        </td>
                        <td style="padding:0 0 0 0px;width:30px; font-family: Montserrat, sans-serif;  color: white; border:2px solid #0000 !important;">
                            <a href="#"><img src="https://lumintulogistic2021.s3.ap-southeast-1.amazonaws.com/jam_facebook-square.png" alt="Facebook" width="30" style="height:auto;display:block;border:0;" /></a>
                        </td>
                        <td style="padding:0 0 0 0px;width:30px; font-family: Montserrat, sans-serif;  color: white; border:2px solid #0000 !important;">
                            <a href="#"><img src="https://lumintulogistic2021.s3.ap-southeast-1.amazonaws.com/jam_linkedin-square.png" width="30" style="height:auto;display:block;border:0;" /></a>
                        </td>
                        <td style="padding:0 251px 0 0px;width:30px; font-family: Montserrat, sans-serif;  color: white; border:2px solid #0000 !important;">
                            <a href="#"><img src="https://lumintulogistic2021.s3.ap-southeast-1.amazonaws.com/jam_twitter-square.png" alt="Facebook" width="30" style="height:auto;display:block;border:0;" /></a>
                        </td>
                    </tr>
                </table>
                </td>
            </tr>
            </table>
            </th>
            <th>&nbsp;</th>
        </tr>
    
    </td>
    </tr>
</center>   
</body>
</html>

';

$mail->AltBody = 'Body in plain text for non-HTML mail clients';

$mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
include ("update.php");
?>