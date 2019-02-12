<?php
session_start();
?>
<?php
 $usr='admin';
 $pwd='admin';
if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) ){

$username=$_POST['username'];
$password=$_POST['password'];
 
if(($username==$usr) && ($password==$pwd) ){
    echo '<script type="text/javascript" src="js/session.js"></script>';
    echo '<script>';
    echo 'Session.set("status", 1)';
    $yourURL="show.html";
    echo '</script>';
    echo ("<script>location.href='$yourURL'</script>");
}else{
    $yourURLun = "login_admin.html";
    echo '<script language="javascript">';
    echo 'alert("login unsuccessfull")';
    echo '</script>';
    echo ("<script>location.href='$yourURLun'</script>");
	// echo '<br>login unsuccessfull';
}
}else{
    $yourURLem = "login_admin.html";
    echo '<script language="javascript">';
    echo 'alert("Connot be left empty!")';
    echo '</script>';
    echo ("<script>location.href='$yourURLem'</script>");
	// echo "<br>Connot be left empty!";
}
?>


