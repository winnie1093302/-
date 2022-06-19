<?php session_start();

$link=@mysqli_connect('localhost','root','','夢夜');


         $id=$_GET['id'];

         $sql="SELECT state FROM cart_link WHERE tname='$id' AND state='2'";
         if(mysqli_query($link,$sql))
         {
         
            $updateSQL ="UPDATE cart_link SET state = '3' WHERE tname ='$id' ";
            if(mysqli_query($link,$updateSQL))
    {
        echo "<script type='text/javascript'>";
        echo "alert('更改成功')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=allmember.php'>";
    }
    else
    {
        echo "<script type='text/javascript'>";
        echo "alert('更改失敗')";
        echo "</script>";
        // echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";
    }
         }
    
     



?>