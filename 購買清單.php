<?php
session_start();
$name=$_SESSION['name'];
require("DBconnect.php");
$sql="SELECT * FROM cart_link c,member m WHERE m.name='$name' AND c.state='0'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$mid=$row['mid'];

$SQL="UPDATE cart_link SET state='1' where mid='$mid' AND state='0'";
if(mysqli_query($link,$SQL))
{
    echo "<script type='text/javascript'>";
    echo "alert('購買成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=購物車-追蹤訂單.php'>";
}
else
{
    echo "<script type='text/javascript'>";
    echo "alert('購買失敗')";
    echo "</script>";
}
?>