<?php
session_start();
$link=@mysqli_connect('localhost','root','','夢夜');
$SQL="SELECT * FROM bartending WHERE tid=13 ";
$result=mysqli_query($link,$SQL);
$row=mysqli_fetch_assoc($result);
$name=$row['tname'];
$price=$row['tprice'];
$username=$_SESSION['name'];
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
height:1500px;
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
flex-direction: row;
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
    margin-left: 200px;
    width: min-content;
    overflow: hidden;

}
/* #content .Whiskey h2
{
    
    margin: 8px 0;
    line-height: 1.1;
    

}
#content .Whiskey h2 a{
    color: #DBD0BE;
} */

.slogan{
    margin-top: -90px;
}
.winner{
    margin-top: 200px;
    margin-right: 50px;
}
.name
{
    margin-top: -380px;
    margin-left: -110px;
    color: #FDFAE7;
}
.mix{
    margin-top: -20px;
    margin-left: -140px;
    color: #fff;
}
.taste{
    margin-left: 600px;
    color: #fff;
}
.story{
    margin-left: 50px;
}
.price{
    color: #fff;
    margin-top: 50px;
    margin-left: -180px;
}
#dec
{
    margin-top: 20px;
    margin-left: 70px;
}
.s1{
    color: #FDFAE7;
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
        <div class="wrap">
          <!-- <div class="search">
            <input type="text" class="searchTerm" placeholder="">
            <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
            </button>
          </div> -->
          <a href="登出.php"><img src="logout.png" style="width: 20px;height: 20px; margin-left:350px; margin-top:20px;"></a>
        </div>
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
        
          
          <li><a href="會員資料.php"><i class="fa fa-user"></i><span aria-hidden="true" class="icon_lock icon-fw"></span><?php echo $username;?></a></li>
        
        
        <li class="shopcart-dropdown"><a href="購物車-購物清單.php"><i class="fa fa-shopping-cart"></i> 購物車</a></li>
        
      </ul>
      <!-- Button trigger modal -->
    </div>
  </div>
        </div>
        </header>
        
        <div id="content">
            <!-- <div class="basicwine"> -->
            <div class="Whiskey">
            <?php echo "<img src='".$row['pic']."' width=300px,height=375px'>";?>
            </div>
            
            <p class="name"  style="font-size:xx-large; font-weight:bold;"><?php echo $name;?></p>
            <!-- <hr Width="40%" style="margin-left: 420px; margin-top:-20px"> -->
            <p class="mix"  style="font-size:large;">成分:琴酒+不甜香艾酒</p>
            <hr Width="40%" style="margin-left: 600px; margin-top:px">
            <p class="taste" Align="Left"  style="font-size:large;">口感:口感獨特，酒感較重</p>
            <img src="小故事/馬丁尼.png" style="width: 30%;" class="story">
            <p class="price"  style="font-size:x-large;">價格 $<?php echo $price;?></p>
            <form action="購買.php" method="POST">
            <input id="dec" type="button" value="-" style="font-size:large; height: 30px; ">
            <input id="count" name="count" type="text" value="1" size="1" style="font-weight:bold; font-size:large; text-align:center; width: 200px; height: 30px;">
            <input id="inc" type="button" value="+" style="font-size:large; height: 30px;">
            <input type="hidden" name="name" value="<?php echo $name;?>">
            <input type="hidden" name="username" value="<?php echo $username;?>">
            <input type="submit" value="加入購物車" style="font-size:large; height: 35px; ">
            </form>
            <p Align="Left"  style="font-size:xx-large; width:200px;height:5px; margin-left:200px;">推薦列表</p>
            <?php
            $SQL1="SELECT * FROM bartending WHERE tid=10";
            $SQL2="SELECT * FROM bartending WHERE tid=12";
            $SQL3="SELECT * FROM bartending WHERE tid=16";
            $result1=mysqli_query($link,$SQL1);
            $result2=mysqli_query($link,$SQL2);
            $result3=mysqli_query($link,$SQL3);
            $row1=mysqli_fetch_assoc($result1);
            $row2=mysqli_fetch_assoc($result2);
            $row3=mysqli_fetch_assoc($result3);
            ?>
            <table style="text-align:center; margin-top:100px; margin-left:200px;">
            <tr>
                <td><a href="琴通寧.php"><?php echo "<img src='".$row1['pic']." 'width=180px,height=375px'>";?></a></td>
                <td width=50px;></td>
                <td><a href="白色佳人.php"><?php echo "<img src='".$row2['pic']." 'width=170px,height=355px'>";?></a></td>
                <td width=50px;></td>
                <td><a href="二十世紀.php"><?php echo "<img src='".$row3['pic']." 'width=210px,height=375px'>";?></a></td>
            </tr>
            <tr>
            <td><a href="琴通寧.php" style="text-decoration:none;" class="s1"><?php echo $row1['tname'];?></a></td>
            <td width=50px;></td>
            <td><a href="白色佳人.php" style="text-decoration:none;" class="s1"><?php echo $row2['tname'];?></a></td>
            <td width=50px;></td>
            <td><a href="二十世紀.php" style="text-decoration:none;" class="s1"><?php echo $row3['tname'];?></a></td>

            </tr>
            <tr>
            <td>$<?php echo $row1['tprice'];?></td>
            <td width=50px;></td>
            <td>$<?php echo $row2['tprice'];?></td>
            <td width=50px;></td>
            <td>$<?php echo $row3['tprice'];?></td>
            </tr>
        </table>

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
    <script>
    window.onload = function() {
        var count = document.getElementById("count");
        var inc = document.getElementById("inc");
        var dec = document.getElementById("dec");
        inc.onclick = function() {
            count.value = parseInt(count.value) + 1;
        };
        dec.onclick = function() {
            if (!isNaN(count.value) && count.value > 0){
                count.value = parseInt(count.value) - 1;
            } else {
                count.value = 0;
            }
        };
    };
</script>
</html>