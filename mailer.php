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
$token = $_POST['token'];
$tn = $_POST['tn'];
// echo $tn;
$name = $_POST['name'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$age = $_POST['age'];
$job_l = $_POST['job_lawa'];
$sal = $_POST['sal'];


$ei = $_POST['ei'];
$de = isset($_POST['type_de']) ? $_POST['type_de'] : '';
$hsc = isset($_POST['hscc']) ? $_POST['hscc'] : '';
$sub_hsc = isset($_POST['ssub_hscc']) ? $_POST['ssub_hscc'] : '';
$gpa = $_POST['gpa'];
$ssd = $_POST['ssd'];
$gd = $_POST['gd'];

$u_ei = $_POST['u_ei'];
$deu = isset($_POST['deuu']) ? $_POST['deuu'] : '';
$fac_u = isset($_POST['faculty_u']) ? $_POST['faculty_u'] : '';
$major_u = isset($_POST['major_uu']) ? $_POST['major_uu'] : '';
$u_gpa = $_POST['u_gpa'];
$u_ssd = $_POST['u_ssd'];
$u_gd = $_POST['u_gd'];


$tel = $_POST['tel'];
$mail_r = $_POST['mail'];
$ref = $_POST['ref'];
$aic = $_POST['aic'];
$ca = $_POST['ca'];

$sp = $_POST['sp'];
$tfp = $_POST['tfp'];
$spack = $_POST['spack'];
$db = $_POST['database'];
$os = $_POST['oper'];


$fb = $_POST['fb'];
$line = $_POST['line'];
$ig = $_POST['ig'];
$git = $_POST['git']; 
$link = $_POST['link'];

$cen = $_POST['cen'];
$job = $_POST['cur_job'];
$swd = $_POST['swd'];
$dop = $_POST['dop'];
$cs = $_POST['cs'];
$about = $_POST['about'];
// $pic = $_POST['pic'];
$exp = $_POST['exp'];



$gmail_username = "appecs.ecs@gmail.com"; // gmail ที่ใช้ส่ง
$gmail_password = "ecs12345"; // รหัสผ่าน gmail
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
	</head>
    <body>
    <h3>Your information</h3>
        ID : <label>$id1</label><br>
        token for edit && delete you information : <label>$token</label><br>
        <label>$tn&nbsp;</label><label>$name&nbsp;&nbsp;</label><label>$lname </label><br>
        Date of birth : <label>$dob</label><br>
        Height : <label>$height</label><br>
        Weight : <label>$weight</label><br>
        Age : <label>$age</label><br>
        Position : <label>$job</label><br>
        Salary : <label>$sal</label><br>

        Educational institution : <label>$ei</label><br>
        Type : <label>$de</label><br>
        Course : <label>$hsc</label><br>
        Department : <label>$sub_hsc</label><br>
        GPA : <label>$gpa</label><br>
        Study start date : <label>$ssd</label><br>
        Graduation day : <label>$gd</label><br>

        Educational institution : <label>$u_ei</label><br>
        Degree : <label>$deu</label><br>
        Faculty : <label>$fac_u</label><br>
        Major : <label>$major_u</label><br>
        GPA : <label>$u_gpa</label><br>
        Study start date : <label>$u_ssd</label><br>
        Graduation day : <label>$u_gd</label><br> 


        Telephone number :<label>$tel</label><br>
        Email Address : <label>$mail_r</label><br>
        Reference : <label>$ref</label><br>
        Address in ID Card : <label>$aic</label><br>
        Current Address : <label>$ca</label><br>

        Facebook : <label>$fb</label><br>
        Line : <label>$line</label><br>
        Instagram : <label>$ig</label><br>
        Github : <label>$git </label><br>
        linkedin : <label>$link</label><br>


        Skill programming : <label>$sp</label><br>
        Tool for development : <label>$tfp</label><br>
        Software Package : <label>$spack</label><br>
        Database : <label>$db</label><br>
        Operating System : <label>$os</label><br>




        Organization : <label>$cen</label><br>
        Working position : <label>$job_l</label><br>
        Start work date : <label>$swd</label><br>
        Date of departure : <label>$dop</label><br>
        Salary : <label>$cs</label><br>
        Describe yourself and relevant experience: <label>$about</label><br>
        Responsibilities : <label>$exp</label><br>

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
        // echo "ระบบได้ส่งข้อความไปเรียบร้อย";
        echo '<script language="javascript">';
        echo 'alert("Send mail successfully")';
        echo '</script>';
        // echo 'ok done';
        // echo 'aa',$de , 'bb',$deu ,  'cc',$hsc , 'dd',$sub_hsc,$fac_u,$major_u;
        $yourURL="index.html";
        echo ("<script>location.href='$yourURL'</script>");
	}	 
}



?>