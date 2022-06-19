<?php 
$wine = $_GET['id'];

echo $wine;
require("DBconnect.php");

$SQL="DELETE  FROM cart_link WHERE tname='$wine' AND state='0'";
if(mysqli_query($link,$SQL))
{
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=購物車-購物清單.php'>";
}
else
{
    echo "<script type='text/javascript'>";
    echo "alert('刪除失敗')";
    echo "</script>";
}

?>
