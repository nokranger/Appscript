<?php require($_SERVER['DOCUMENT_ROOT']."/lib/phpmailer/PHPMailerAutoload.php");?>
<?php
header('Content-Type: text/html; charset=utf-8');

$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;

$id1 = $_POST['id'];
$tn = $_POST['tn'];
$name = $_POST['name'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$tel = $_POST['tel'];
$fb = $_POST['fb'];
$line = $_POST['line'];
$ig = $_POST['ig'];
$aic = $_POST['aic'];
$ca = $_POST['ca'];
$ei = $_POST['ei'];
$gpa =$_POST['gpa'];
$sp = $_POST['sp'];
$tfp = $_POST['tfp'];
$spack = $_POST['spack'];
$mail_r = $_POST['mail'];
$git = $_POST['git']; 
$link = $_POST['link'];
$major = $_POST['major'];
$minor = $_POST['minor'];
$about = $_POST['about'];
// $pic = $_POST['pic'];
$exp = $_POST['exp'];
$ref = $_POST['ref'];
$token = $_POST['token'];
// $email_r = $_POST['mail'];
// $subject = $_POST['name'];
// $detail = $_POST['lname'];


$gmail_username = ""; // gmail ที่ใช้ส่ง
$gmail_password = ""; // รหัสผ่าน gmail
// ตั้งค่าอนุญาตการใช้งานได้ที่นี่ https://myaccount.google.com/lesssecureapps?pli=1


$sender = "Admin@ecs"; // ชื่อผู้ส่ง
$email_sender = "noreply@mail.com"; // เมล์ผู้ส่ง 
$email_receiver = $mail_r; // เมล์ผู้รับ ***

$subject = "ํYour information"; // หัวข้อเมล์


$mail->Username = $gmail_username;
$mail->Password = $gmail_password;
$mail->setFrom($email_sender, $sender);
$mail->addAddress($email_receiver);
$mail->Subject = $subject;

$email_content = "
<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8'/>
		<title>ทดสอบการส่ง Email</title>
	</head>
    <body>
    <h3>Your data for register</h3>
        ID : <label>$id1</label><br>
        <label>$tn&nbsp;</label><label>$name&nbsp;&nbsp;</label><label>$lname </label><br>
        Date of birth : <label>$dob</label><br>
        Telephone number :<label>$tel</label><br>
        Email Address : <label>$mail_r</label><br>
        Facebook : <label>$fb</label><br>
        Line : <label>$line</label><br>
        Instagram : <label>$ig</label><br>
        Address in ID Card : <label>$aic</label><br>
        Current Address : <label>$ca</label><br>
        Educational institution : <label>$ei</label><br>
        GPAX : <label>$gpa</label><br>
        Skill programming : <label>$sp</label><br>
        Tool for development : <label>$tfp</label><br>
        Software Package : <label>$spack</label><br>
        github : <label>$git </label><br>
        linkedin : <label>$link</label><br>
        major : <label>$major</label><br>
        minor : <label>$minor</label><br>
        about you : <label>$about</label><br>
        experience : <label>$exp</label><br>
        reference : <label>$ref</label><br>
        token for edit && delete you information : <label>$token</label><br>
	</body>
</html>
";

//  ถ้ามี email ผู้รับ
if($email_receiver){
	$mail->msgHTML($email_content);


	if (!$mail->send()) {  // สั่งให้ส่ง email

		// กรณีส่ง email ไม่สำเร็จ
		echo "<h3 class='text-center'>ระบบมีปัญหา กรุณาลองใหม่อีกครั้ง</h3>";
		echo $mail->ErrorInfo; // ข้อความ รายละเอียดการ error
	}else{
		// กรณีส่ง email สำเร็จ
		echo "ระบบได้ส่งข้อความไปเรียบร้อย";
	}	
}



?>