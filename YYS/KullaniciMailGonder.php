<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/smtp.php';
require 'PHPMailer/src/Exception.php';

function PHPMailerFunc($mailAddress, $userName, $password){


    //function mailConfig()
    //{

        $mail = new PHPMailer(true);                                  // Passing `true` enables exceptions
        $mail->IsSMTP();                                                         // Set mailer to use SMTP
        $mail->SMTPDebug = 1;                                                  // enables SMTP debug information (for testing) // 1 = errors and messages // 2 = messages only
        // Specify main and backup SMTP servers

        $mail->Host = 'posta.diyanet.gov.tr';                                         // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                                                 // Enable SMTP authentication
        $mail->SMTPSecure = 'tls';                                              // Enable TLS encryption, `ssl` also accepted
                                                     // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 25;                                                      // TCP port to connect to  gmail: 587       smpt: 25
        $mail->Username = 'fasli.gunaydin@diyanet.gov.tr';                            // TCP port to connect to  gmail: 587       smpt: 25
        $mail->Password = 'Salavan2022*';
        $mail->setFrom($mail->Username, 'Fehime Aslı Günaydın');
//        $mail->AddAddress($mailAddress,'Fehime Aslı Günaydın');
        $mail->AddAddress('fasli.gunaydin@diyanet.gov.tr','Fehime Aslı Günaydın');
        $mail->CharSet = "utf-8";
        $mail->isHtml(true);


        //return $mail;
    //}



    try {

        //Mail Gönder
        //$mail = mailConfig();

        //Döngü olduğu için array sıfırlıyoruz.(Yoksa foreach kadar mail atar)
        unset($temp);

        $mail->isHTML(true);

        $mail->Subject ='YYS Admin Giriş Bilgileri';
        //$mail->Body = 'Mail içeriği';

        $mail->MsgHTML("
        <div class='content' style='max-width: 600px; display: block; margin: 0 auto; padding: 20px;'>
        <table>
        <tr>
        <td class='content-wrap' style='vertical-align: top;margin: 0;padding: 30px;border: 3px solid #67a8e4;border-radius: 7px; background-color: #fff; ' valign='top'>
        <table>

        <tr>
            <td class='content-block' style='font-family:Helvetica,Arial,serif; font-size: 18px; vertical-align: top; margin: 0; padding: 0 0 20px;'>
                Diyanet İşleri Başkanlığı Yemekhane Yönetim Sistemi kullanıcı kaydınız oluşturulmuştur. Kullanıcı adı ve parola ile sisteme giriş yapabilirsiniz.
            </td>
        </tr>

        <tr>
            <td class='content-block' style='font-family:Helvetica,Arial,serif; font-size: 18px; vertical-align: top; margin: 0; padding: 0 0 20px;'>
                  Kullanıcı Adı: $userName 
            </td>
       </tr>

        <tr>
            <td class='content-block' style='font-family:Helvetica,Arial,serif; font-size: 18px; vertical-align: top; margin: 0; padding: 0 0 20px;'>
                 Parola: $password
            </td>
        </tr>

        <tr style='box-sizing: border-box; font-size: 14px; margin: 0;'>
        <td class='content-block' itemprop='handler' >
            <a href='http://localhost/YYS/LoginView.php' class='btn-primary' itemprop='url' style='font-family:Helvetica,Arial,serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #f06292; margin: 0; border-color: #f06292; border-style: solid; border-width: 8px 16px;'>
            Admin Girişi
            </a>
        </td>
        </tr>

        </table>
        </td>
        </tr>
        </table>

        </div>");
        //$mail->AltBody = 'Alt kIsım';




        $mail->send();


    }catch (Exception $exception){
        echo $exception->getMessage();
    }
}