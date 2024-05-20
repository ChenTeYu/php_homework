<meta charset="utf-8">
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

//$to=$_POST["to"];
$subject=$_POST["subject"];
$content=$_POST["content"];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$link = @mysqli_connect('localhost','root','3319','email240520');
if(!$link){
    die("無法開啟資料庫<br>");
}
else{
    echo "成功開啟資料庫<br>";
}

$SQL = "SELECT * FROM email";

$result = mysqli_query($link, $SQL);
//用來執行 SQL 查詢的 PHP 語句，並將查詢結果存儲在 $result 變數中
$num_rows = mysqli_num_rows($result);
//得到有幾筆序列值
echo "共有 $num_rows 筆記錄<br>";


if ($result) {
    // 使用 mysqli_fetch_assoc 來逐行獲取數據
    while ($row = mysqli_fetch_assoc($result)) {
        // 假設我們要取出 '某屬性' 值
        $email = $row['email'];
        echo "email: " . $email . "<br>";
    }
}

for ($i = 0; $i < $num_rows; $i++) {
    // 移動指標到第 $i 行
    mysqli_data_seek($result, $i);
    // 獲取該行數據
    $row = mysqli_fetch_assoc($result);
    // 假設我們要取出 'email_address' 屬性值
    $email_address = $row['email'];


    try {
        //Server settings
        $mail->SMTPDebug = false;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '8859249jessica@gmail.com';                     //SMTP username
        $mail->Password   = 'mqil nnhg dylt kpsd';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet='utf-8'; //主旨中文就不會亂碼
        
        //Recipients
        $mail->setFrom('8859249jessica@gmail.com', 'Mailer');  //誰寄
        $mail->addAddress($email_address, 'Membership');     //Add a 收件者
        //$mail->addAddress('ellen@example.com');               //Name is optio
        $mail->addReplyTo('8859249jessica@gmail.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        
        
        $mail->Subject = $subject;
        $mail->Body    = nl2br($content);
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

