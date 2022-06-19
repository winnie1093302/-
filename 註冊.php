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
 .t1{
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
 }
 input:hover{ 
        color:black;
        background-color:#DFCFBD;
        border:2px #DFCFBD solid;}/*按鈕(首頁/關於我們)*/
hr{
    margin-top: 30px;
    padding:0%;
}
.ppp{
    color:#fff;
    margin-top: 200px;
    /* padding:0%; */
    padding-left: 80px;
    /* margin-left: -1000px; */
    letter-spacing: 10px;
    width: 300px;
}
.pic{
    float: left;
    margin-top: -25px;
    margin-left: 150px;
    padding: 0;
}
.slogan{
    margin-top: -90px;
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
          <!-- <a href="/"> -->
            <!-- <span class="sr-only">夢夜</span> -->
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

        <div id="content">
            
            <h1><img src="會員註冊杯.png" style="width: 40px;height: 70px;" class="pic"><p class="ppp">會員註冊</p></h1>
        <hr Width="80%" Color="#fff" style="margin-top: -10px;">
        <p style="margin-left: -800px; color:#fff;">除了可以收到最新資訊，還能在活動期間享有最划算的折扣喔!</p>
        <center>
        <form action="註冊資料.php" method="post">
        <table cellpadding="10px" >

        <tr>
                <td style="vertical-align:middle; font-size:x-large; color:#fff;">姓名：</td>
                <td><input type="text" name="name" required="required" style="color:#fff; width: 300px; height: 30px; border-style:solid; border-color:white;border-width:2px; background:transparent;"/></td>  
                <td></td> 
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td> 
                <td style="vertical-align:middle; font-size:x-large; color:#fff;">年齡：</td>
                <td><input type="text" name="age" required="required" style="color:#fff; width: 300px; height: 30px; border-style:solid; border-color:white;border-width:2px; background:transparent;"/></td> 
        </tr>

        <tr>
                <td style="vertical-align:middle; font-size:x-large; color:#fff; ">密碼：</td>
                <td><input type="password" name="login_pass" required="required" style="color:#fff; width: 300px; height: 30px; border-style:solid; border-color:white;border-width:2px; background:transparent;"/></td>
                <td>    </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="vertical-align:middle; font-size:x-large; color:#fff;">確認密碼：</td>
                <td><input type="password" name="check" required="required" style="color:#fff; width: 300px; height: 30px; border-style:solid; border-color:white;border-width:2px; background:transparent;"/></td>
        </tr>

        <tr>
                <td style="vertical-align:middle; font-size:x-large; color:#fff;">生日：</td>
                <td><input type="date" name="birth" required="required" style="color:#fff; width: 300px; height: 30px; border-style:none; border-color:white;border-width:2px; background:transparent;"/></td>
                <td>    </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="vertical-align:middle; font-size:x-large; color:#fff;">Gmail:</td>
                <td><input type="email" name="mail" required="required" style="color:#fff; width: 300px; height: 30px; border-style:solid; border-color:white;border-width:2px; background:transparent;"/></td>

        </tr>

        <tr>
                <td style="vertical-align:middle; font-size:x-large; color:#fff;">地址：</td>
                <td><input type="text" name="address" style="color:#fff; width: 400px; height: 30px;border-style:solid; border-color:white;border-width:2px; background:transparent;" required="required" /></td>
                <td>    </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="vertical-align:middle; font-size:x-large; color:#fff;">手機號碼：</td>
                <td><input type="tel" name="telphone" style="color:#fff; width: 300px; height: 30px;border-style:solid; border-color:white;border-width:2px; background:transparent;" required="required" /></td>

        </tr></h1>
        <tr></tr>
        <tr>
                <td colspan="16" style="text-align:center; ">
                        <input type="hidden" name="action" value="reg" />
                        <input type="submit" value="註冊" style="width: 80px;height:30px;"/>
                </td>
        </tr>

        </table>
        </form>
        </center>
 

        
        
        </div>
  


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
        <!-- <div id="footer">footer</div> -->
    </div>

</html>