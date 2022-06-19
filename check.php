<form action="" method="post">
        <h1 style="width: 800px;"><p class="ppp" ><input type="text" name="" disabled="disabled" value="會員登入"  style="border-style:solid;border-color:white;border-width:3px; background:transparent;width:800px;height:50px; color:#fff;text-align:center;font-size:x-large;border-radius: 10px;"/></p></h1>
        <h2 ><p class="addmember" ><a href="註冊.php" style="text-decoration:none;"><span style="color:#fff;">加入會員</span></a></p></h2>
        <br>
        
         <p Align="Left" class="mail" style="font-size:x-large; color:#fff;">電子郵件<br><input type="email" name="umail" style="width:600px; height: 35px; border-style:solid; border-color:white;border-width:2px; background:transparent;"></p>
         <p Align="Left" class="pwd" style="font-size:x-large; color:#fff;">密碼<br><input type="password" name="upwd" style="width:600px;height: 35px; border-style:solid; border-color:white;border: width 2px; background:transparent;"></p>  
         <h2 ><p class="forgetpwd" ><a href="忘記密碼.php" ><span style="color:#9DBFAF;">忘記密碼</span></a></p></h2>
         <button type="submit"  style="margin-top: 80px;width: 80px;height: 30px;">登入</button>
        </form>
        
<?php
session_start();
$link=@mysqli_connect('localhost','root','','夢夜');
        if(isset($_POST["umail"]))
        {
            if($_POST["umail"]!=null)
            {
                $m=$_POST["umail"];
                $p=$_POST["upwd"];
        
                $SQL="SELECT * FROM member WHERE mail='$m' AND password='$p'";
        
                $result=mysqli_query($link,$SQL);
        
                if(mysqli_num_rows($result)==1)
                {
                    $_SESSION["systemlogin"]="ok";
                    //setcookie("UID",$u,time()+3600);
                    header('Location:首頁已登入.php');
                }
                // else 
                // {
                //     echo "帳號或密碼輸入錯誤!";
                // }
                // if($u==$auser&&$p=$apwd)
                // {
                //    $_SESSION["systemlogin"]="ok";
                //    setcookie("UID",$u,time()+3600);
                //    header('Location:admin.php');
                //     echo "登入成功!";
                // }
                // else if($u==$user&&$p==$upwd)
                // {
                //    $_SESSION["userlogin"]="self";
                //    setcookie("uid",$u,time()+3600);
                //    header('Location:註冊.php');
                // }
                else
                {
                   echo "帳號或密碼輸入錯誤!";
                }    
            }
            else
            {
                echo "您尚未輸入帳號或密碼";
            }
        }?>