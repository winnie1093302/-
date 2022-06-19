<?php
$num=$_POST['count'];
$name=$_POST['name'];
$user=$_POST['username'];
require("DBconnect.php");
$sql="SELECT * FROM cart_link c,member m Where m.name='$user' AND c.tname='$name' AND state='0'";
$result=mysqli_query($link,$sql);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);

if($count > 0)
{
    $sql3="SELECT * FROM cart_link c,member m Where m.name='$user' AND c.tname='$name' AND state='0'";
    $result4=mysqli_query($link,$sql3);
    $row3=mysqli_fetch_assoc($result4);
    $userid=$row3['mid'];
    $usernum=$row3['num'];
    echo $num."<br>";
    echo $usernum;
    $userprice=$row3['total_price'];
    $sql2="SELECT tprice FROM bartending Where tname='$name'";
    $result3=mysqli_query($link,$sql2);
    $row2=mysqli_fetch_assoc($result3);
    $ttprice=$row2['tprice'];
    $allprice=$num*$ttprice;

    $newnum=$usernum+$num;
    echo $newnum;
    $newprice=$userprice+$allprice;
    echo $newprice;
    $SQL1="UPDATE cart_link SET num='$newnum', total_price='$newprice' where mid='$userid' AND state='0' AND tname='$name'";
    // $result1=mysqli_query($link,$SQL1);
    if(mysqli_query($link,$SQL1))
    {
    echo "<script type='text/javascript'>";
    echo "alert('更新成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=購物車-購物清單.php'>";
    }
    else
    {
    echo "<script type='text/javascript'>";
    echo "alert('更新失敗')";
    echo "</script>";
    }
    
}
else
{
    $sql4="SELECT * FROM member Where name='$user'";
    $result5=mysqli_query($link,$sql4);
    $row4=mysqli_fetch_assoc($result5);
    $Userid=$row4['mid'];
    $sql1="SELECT tprice FROM bartending Where tname='$name'";
    $result2=mysqli_query($link,$sql1);
    $row1=mysqli_fetch_assoc($result2);
    $tprice=$row1['tprice'];
    $price=$num*$tprice;
    $SQL2="INSERT INTO cart_link (mid,tname,num,total_price,state) VALUES ('$Userid','$name','$num','$price','0')";
    if(mysqli_query($link,$SQL2))
    {
    echo "<script type='text/javascript'>";
    echo "alert('新增成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=購物車-購物清單.php'>";
    }
    else
    {
    echo "<script type='text/javascript'>";
    echo "alert('新增失敗')";
    echo "</script>";
    }
}
?>






?>