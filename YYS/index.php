<?php
require_once('phpmailer/phpmailer/class.phpmailer.php');




$mail = new PHPMailer(true);                                  // Passing `true` enables exceptions

$mail->IsSMTP();                                                        // Set mailer to use SMTP
$mail->SMTPDebug = 1;                                                  // enables SMTP debug information (for testing) // 1 = errors and messages // 2 = messages only
$mail->Host = 'smtp.gmail.com';                                         // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                                 // Enable SMTP authentication
$mail->SMTPSecure = 'tls';                                              // Enable TLS encryption, `ssl` also accepted // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                                      // TCP port to connect to  gmail: 587       smpt: 25
$mail->Username = 'fehimeasligunaydin@gmail.com';                            // TCP port to connect to  gmail: 587       smpt: 25
$mail->Password = 'Salavan2022';
$mail->setFrom($mail->Username , "Hava Nur ŞİMŞEK");
$mail->CharSet = "utf-8";
// -----------------------------

try {
$mail->isHTML(true);

$mail->Subject = 'deneme';

$mail->Body = getMailContent('deneme', 'test'); // 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = ' ';
    $mail->addBCC('fasli.gunaydin@diyanet.gov.tr');
$mail->send();

} catch (Exception $mail) {
echo $mail->getMessage();
}

function getMailContent($konu, $icerik)
{

    $content = '
    <div style="color:#fefefe; display:none; font-family:Poppins,sans-serif; font-size:1px; line-height:1px; max-height:0; max-width:0; opacity:0; overflow:hidden"></div>

<table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; border-collapse:collapse!important; mso-table-lspace:0; mso-table-rspace:0; width:100%">
	<tbody>
		<tr>
			<td><!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
			<table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; border-collapse:collapse!important; max-width:600px; mso-table-lspace:0; mso-table-rspace:0; width:100%">
				<tbody>
					<tr>
						<td style="vertical-align:top"><span style="color:#551a8b; font-family:Poppins, sans-serif"><span style="font-size:24px"><strong>BASIN POSTA DİYANET</strong></span></span></td>
					</tr>
				</tbody>
			</table>
			<!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]--></td>
		</tr>
		<tr>
			<td><!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
			<table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; border-collapse:collapse!important; max-width:600px; mso-table-lspace:0; mso-table-rspace:0; width:100%">
				<tbody>
					<tr>
						<td>
						<p style="margin-left:0px; margin-right:0px"><b> Konu : ' . $konu . '</b> </p>
						</td>
					</tr>
					<tr>
						<td>
						<table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; border-collapse:collapse!important; mso-table-lspace:0; mso-table-rspace:0; width:100%">
							<tbody>
								<tr>
									<td>
									<table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; border-collapse:collapse!important; mso-table-lspace:0; mso-table-rspace:0">
										<tbody>
											<tr>
												<td style="border-radius:3px"> ' . $icerik . ' </td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						<hr />
						</td>
					</tr>
				</tbody>
			</table>
			<!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]--></td>
		</tr>
		<tr>
			<td><!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]--><!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]--></td>
		</tr>
		<tr>
			<td><!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
			<table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; border-collapse:collapse!important; max-width:600px; mso-table-lspace:0; mso-table-rspace:0; width:100%">
				<tbody>
					<tr>
						<td>
						<p style="margin-left:0px; margin-right:0px">Bilgi İşlem Daire Başkanlığı | 2021 &copy; Diyanet İşleri Başkanlığı</p>
						</td>
					</tr>
				</tbody>
			</table>
			<!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]--></td>
		</tr>
	</tbody>
</table>

    ';

    return $content;

}