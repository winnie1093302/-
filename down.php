<?php session_start();

$link=@mysqli_connect('localhost','root','','夢夜');


         $id=$_GET['id'];
         
         $updateSQL ="UPDATE bartending SET state = '0' WHERE tid ='$id'";
     
     
if(mysqli_query($link,$updateSQL))
    {
        echo "<script type='text/javascript'>";
        echo "alert('更改成功')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=12.php'>";
    }
    else
    {
        echo "<script type='text/javascript'>";
        echo "alert('更改失敗')";
        echo "</script>";
        // echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";
    }


?>