<?php
session_start();
?>
<html>
    <head>
    <link rel="stylesheet" href="flexslider.css" type="text/css">
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet'></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="jquery.flexslider.js"></script>
    <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
        $('.flexslider').flexslider();
    });
</script>
<style type="text/css">
body{
    padding: 0;
    margin: 0;
}
#sitebody{
    width:100%;
/* width:600px; */
margin:0 auto;
font-size:13px;
height: 100%;
/* background: -o-linear-gradient(180deg, rgb(59, 60, 60), rgb(105, 107, 106));
background: -moz-linear-gradient(180deg, rgb(59, 60, 60), rgb(105, 107, 106));
background: -webkit-linear-gradient(180deg, rgb(59, 60, 60), rgb(105, 107, 106));
background: linear-gradient(180deg, rgb(59, 60, 60), rgb(105, 107, 106)); */
}
/* #header{
    margin: 0;
    background: #fff;
    border: 0;
    position: fixed;
    top: 0px;
    z-index: 1003;
    width: 100%;
    padding-bottom: 9px;
background-color:#FFD4D4;
height:125px;
text-align:center;
line-height:80px;
} */
.header .top-header {

    background: #DBD0BE;
    line-height: 44px;
    height: 40px;
    font-size: 12px;
    color: #9B504A;
}
.container {

    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
}
.container:before, .container:after {
    content: " ";
    display: table;
}
.main-navigation
{
    background-color: #3B3C3C;
}
.header .contact-info {
    color:#9B504A;
    font-weight:900;
    font-size: large;
}
.pull-left {
    float: left !important;
}
.icon-fw {
    padding: 0 3px;
}
.header .top-header a {
    color: #9B504A;
}
.header .top-header ul {
    margin: 0px;
}
.header .cart-links {
    float: right;
    color:#9B504A;
    font-weight:900;
    font-size: large;
}
.header .top-header ul li {
    float: left;
    margin: 0 9px;
    position: relative;
    height: 40px;
}
.header .top-header ul li + li:before {
    content: "|";
    color: #9B504A;
    position: absolute;
    margin-right: 12px;
    display: block;
    left: -11px;
}
*:before, *:after {
  -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.icon_cart:before {
    content: "\e07a";
}
.header .top-header a {
    color: #9B504A;
}
.container:after {
    clear: both;
}
.main-navigation .nav-branding .header-logo  {
    
    width: 140px;
}

.main-navigation .nav-branding .header-logo {
    margin: 5px 0;
    transition: all 0.5s;
}
 ul li{
  list-style-type: none;
}
.icon_phone:before {
    content: "\2709";
}
.search {
  width: 100%;
  position: relative;
  display: flex;

}

.searchTerm {
  width: 100%;
  border: 3px solid #fff;
  border-right: none;
  padding: 5px;
  height: 36px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #000000;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #fff;
  background: #fff;
  text-align: center;
  color: #000000;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*调整大小查看搜索栏的变化*/
.wrap{
  width: 20%;
  position: absolute;
  top: 40%;
  left: 84%;
  transform: translate(-50%, -50%);
}
/* #sidebar_left{
background-color:#FFECC9;
width:120px;
height:400px;
text-align:center;
line-height:400px;
float:left;
} */
#sidebar_right{
/* background-color:#FFECC9; */
/* margin-right:0px; */
width:405px;
height:1000px;
text-align:center;
line-height:400px;
float:right;
overflow: hidden;
background: -o-linear-gradient(180deg, rgb(59, 60, 60), rgb(105, 107, 106));
background: -moz-linear-gradient(180deg, rgb(59, 60, 60), rgb(105, 107, 106));
background: -webkit-linear-gradient(180deg, rgb(59, 60, 60), rgb(105, 107, 106));
background: linear-gradient(180deg, rgb(59, 60, 60), rgb(105, 107, 106));
}
#content{
/* margin-left:120px; */
/* margin-right:350px; */
width:100%;
height:1500px;
/* background-color:#F2FFF2; */
text-align:center;
/* line-height:400px; */
overflow: hidden;
background: -o-linear-gradient(180deg, rgb(59, 60, 60), rgb(105, 107, 106));
background: -moz-linear-gradient(180deg, rgb(59, 60, 60), rgb(105, 107, 106));
background: -webkit-linear-gradient(180deg, rgb(59, 60, 60), rgb(105, 107, 106));
background: linear-gradient(180deg, rgb(59, 60, 60), rgb(105, 107, 106));
}
/* #footer{
clear:both;
background-color:#FFD4D4;
height:80px;
text-align:center;
line-height:80px;
} */
.dangerous_img {
    width: 100%;
    content: url(https://my98.cyberbiz.co/s/files/5565/theme/14037/assets/warning_2x.png?2017100518);
}
.dangerousslogan{
    position: fixed;
    width: 100%;
    height: 12%;
    bottom: -1px;
    background: #000000;
    z-index: 10000;
}
.flexslider
{
    top: 170px;
    /* padding-top: 150px; */
    /* float: right; */
    right: -5px;
    border: #3B3C3C;
    /* background: #3B3C3C; */
}
.header{
    margin: 0;
    /* background: #fff; */
    border: 0;
    position: fixed;
    top: 0px;
    z-index: 1003;
    width: 100%;
    padding-bottom: 9px;
/* background-color:#FFD4D4; */
height:125px;
text-align:center;
line-height:80px;
}
#content .Whiskey
{
    /* line-height: 5; */
    padding-top: 200px;
    margin-left: 60px;
    width: min-content;
    overflow: hidden;

}
#content .Whiskey h3
{
    /* margin-top: -160px; */
    margin: 8px 0;
    line-height: 1.1;
    /* padding-top: -500px; */

}
#content .Whiskey h3 a{
    color: #DBD0BE;
}
.cart-link{
     margin-top:80px;
     /* float:right; */
     margin-right:250px;
     margin-left:250px;
     width:1000px;
     height:800px;
     border:0;
     background: #FFF6E7;
     opacity: 0.75;
	display: none;
    padding: 0;


}
 .order{
     margin-top:80px;
     /* float:right; */
     margin-right:250px;
     margin-left:250px;
     width:1000px;
    height:800px;
    border:0;
    background: #FFF6E7;
    opacity: 0.75;
	  display: block;
      padding: 0;
  
    
 }
 .history{
     margin-top:80px;
     /* float:right; */
     margin-right:250px;
     margin-left:250px;
     width:1000px;
     height:800px;
     border:0;
     background: #FFF6E7;
     opacity: 0.75;
	display: none;
    padding: 0;



}
 /* .t1{
    cursor: pointer;
    float:left;
  display:inline-block;

 }
 .t2{
    float: left;
  display:inline-block;
  cursor: pointer;
 }
 .t3{
    float: left;
  display:inline-block;
  cursor: pointer;
 } */
 /* input:hover{ 
        color:black;
        background-color:#DFCFBD;
        border:2px #DFCFBD solid;}按鈕(首頁/關於我們) */

.slogan{
    margin-top: -90px;
}
.ppp{
    margin-top: 200px;
    margin-left: 370px;
    /* z-index: 1; */
}
.mail{
    margin-left: 480px;
}
.pwd{
    margin-left: 480px;
}
.addmember
{
    margin-top: -60px;
    margin-right: -700px;
    
}
.forgetpwd
{
    margin-top: -85px;
    margin-right: 360px;
}
</style>
    </head>
    <body>
    <div id="sitebody">
        <header class="header">
        <div id="header">
        <nav class="main-navigation">
    <div class="container">
      <div class="nav-branding hidden-xs">
        <h1 class="header-logo">
            <a href="首頁未登入.php">
            <img src="logo.png" alt="夢夜" class="ht_logo" style="width:3.68857143cm;height:2.28857143cm">            
          </a>
        </h1>
        <img src="slogan.png" style="height:2.28857143cm" class="slogan">
        <!-- 搜尋框 -->
        <!-- <div class="wrap">
          <div class="search">
            <input type="text" class="searchTerm" placeholder="">
            <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
            </button>
          </div>
        </div> -->
        <!-- 搜尋框 -->
      </div> 
    </div>
  </nav>
  <div class="top-header">
    <div class="container">
      <div class="contact-info pull-left">
        <ul>
          
          <li> <span aria-hidden="true" class="icon_phone icon-fw"></span> </li>
          
          
          <li> <i class="fa fa-facebook-square"></i><span aria-hidden="true" class="social_facebook_circle icon-fw"></span> </li>
          <li><i class="fa fa-instagram"></i><span aria-hidden="true" class="social_facebook_circle icon-fw"></span></li>
          
        </ul>
      </div>
      <ul class="cart-links ">
        
          
          <li style="font-family:Microsoft JhengHei;"><a href="登入.php"><i class="fa fa-user"></i><span aria-hidden="true" class="icon_lock icon-fw"></span>登入/註冊</a></li>
        
        
        <li class="shopcart-dropdown" style="font-family:Microsoft JhengHei;"><a href="購物車.php"><i class="fa fa-shopping-cart"></i> 購物車</a></li>
        
      </ul>

    </div>
  </div>
        </div>
        </header>
                  <!--警語-->
        <table class="dangerousslogan" cellpadding="0" cellspacing="0">
            <tbody>
            <tr>
                <td align="center">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                    <td align="center">
                        <img class="dangerous_img">
                    </td>
                    </tr>
                </tbody>
                </table>
                </td>
            </tr>
            </tbody>
        </table>
  <!--警語-->
        <div id="content">
            <form action=" " method="POST">
        <h1 style="width: 800px;"><p class="ppp" ><input type="text" name="" disabled="disabled" value="會員登入"  style="border-style:solid;border-color:white;border-width:3px; background:transparent;width:800px;height:50px; color:#fff;text-align:center;font-size:x-large;border-radius: 10px;"/></p></h1>
        <h2 ><p class="addmember" ><a href="註冊.php" style="text-decoration:none;"><span style="color:#fff;">加入會員</span></a></p></h2>
        <br>
        <!-- <form action="會員資料.php" method="post"> -->
        
        
         <p Align="Left" class="mail" style="font-size:x-large; color:#fff;">電子郵件<br><input type="email" name="umail" style="width:600px; height: 35px; border-style:solid; border-color:white;border-width:2px; background:transparent;"></p>
         <p Align="Left" class="pwd" style="font-size:x-large; color:#fff;">密碼<br><input type="password" name="upwd" style="width:600px;height: 35px; border-style:solid; border-color:white;border: width 2px; background:transparent;"></p>  
         <h2 ><p class="forgetpwd" ><a href="忘記密碼_mail.php" style="text-decoration:none;"><span style="color:#9DBFAF;">忘記密碼</span></a></p></h2>
         <button type="submit" name="submit" style="margin-top: 80px;width: 80px;height: 30px;">登入</button>
        </form>
        </div>
        
        <?php
        ob_start();
        
        $link=@mysqli_connect('localhost','root','','夢夜');

            if($_POST["umail"]!=null)
            {
                // $M=mysqli_real_escape_string($link,$_POST['umail']);
                // $P=mysqli_real_escape_string($link,$_POST['upwd']);
                $m=$_POST["umail"];
                $p=$_POST["upwd"];
                $admin="winnie070688@gmail.com";
                $pwda="070814";
                $SQL="SELECT * FROM member WHERE mail='$m' AND password='$p'";
        
                $result=mysqli_query($link,$SQL);
                $row=mysqli_fetch_assoc($result);
                echo $admin;
                if($m==$admin&&$p=$pwda)
                {
                   
                   echo"<meta http-equiv='Refresh' content='0; url=12.php'>";
                }
                else if(mysqli_num_rows($result)==1)
                {
                    // $row=mysqli_fetch_array($result);
                    $_SESSION["systemlogin"]="ok";
                    $_SESSION['name']=$row['name'];
                    //setcookie("UID",$u,time()+3600);
                    // $_SESSION['uname']=$row['name'];
                    // $_SESSION['ubirth']=$row['birth'];
                    // $_SESSION['uage']=$row['age'];
                    // $_SESSION['utel']=$row['tel'];
                    // $_SESSION['uaddress']=$row['address'];
                    $_SESSION['umail']=$m;
                    echo"<meta http-equiv='Refresh' content='0; url=首頁已登入.php'>";
                    //header('Location:首頁已登入.php');

                }
                else 
                {
                    echo "<script>alert('帳號或密碼輸入錯誤!')</script>";
                }
 
                // else if($u==$user&&$p==$upwd)
                // {
                //    $_SESSION["userlogin"]="self";
                //    setcookie("uid",$u,time()+3600);
                //    header('Location:註冊.php');
                // }
                // else
                // {
                //    echo "帳號或密碼輸入錯誤!";
                // }    
            }
            else
            {
                echo "您尚未輸入帳號或密碼";
            }
        // }
        ob_flush();
        ?>

    </div>

</html>
