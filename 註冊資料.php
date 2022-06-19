<?php
ob_start();
require("DBconnect.php");
$name=$_POST["name"];
$age=$_POST["age"];
$pwd=$_POST["login_pass"];
$pwd2=$_POST["check"];
$day=$_POST["birth"];
$gmail=$_POST["mail"];
$live=$_POST["address"];
$phone=$_POST["telphone"];

// echo $name .$pwd .$pwd2 .$day .$gmail .$live .$phone;
$SQL="INSERT INTO member (name,birth,age,tel,address,mail,password) VALUES ('$name','$day','$age','$phone','$live','$gmail','$pwd')";

if(mysqli_query($link,$SQL))
{
    echo "<script type='text/javascript'>";
    echo "alert('註冊成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=登入.php'>";
}
else
{
    echo "<script type='text/javascript'>";
    echo "alert('註冊失敗')";
    echo "</script>";
}
ob_flush();
?>