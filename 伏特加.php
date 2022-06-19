<?php 
session_start();
$name=$_SESSION['name'];
$_SESSION['name']=$name;
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
width:1114px;
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
#content .Screwdriver
{
    /* line-height: 5; */
    padding-top: 200px;
    margin-left: 60px;
    width: min-content;
    overflow: hidden;

}
#content .Screwdriver h2
{
    /* margin-top: -160px; */
    margin: 8px 0;
    line-height: 1.1;
    /* padding-top: -500px; */

}
#content .Screwdriver h2 a{
    color: #DBD0BE;
    text-decoration:none;
}
#content .Screwdriver h2 a span{
    color: crimson;
}
.Cosmopolitan
{
    margin-top: -330px;
    margin-left: -100px;
}
#content .Cosmopolitan h2
{
    margin: 8px 0;
    line-height: 1.1;

}
#content .Cosmopolitan h2 a{
    color: #DBD0BE;
    text-decoration:none;
}
.BloodyMary
{
    margin-top: -330px;
    margin-left: 600px;
}
#content .BloodyMary h2
{
    /* margin-top: -160px; */
    margin: 8px 0;
    line-height: 1.1;
    /* padding-top: -500px; */

}
#content .BloodyMary h2 a{
    color: #DBD0BE;
    text-decoration:none;
}
.SexontheBeach
{
    margin-top: 100px;
    margin-left: -795px;
}
#content .SexontheBeach h2
{
    /* margin-top: -160px; */
    margin: 8px 0;
    line-height: 1.1;
    /* padding-top: -500px; */

}
#content .SexontheBeach h2 a{
    color: #DBD0BE;
    text-decoration:none;
}
.SaltyDog
{
    margin-top: -330px;
    margin-left: -100px;
}
#content .SaltyDog h2
{
    /* margin-top: -160px; */
    margin: 8px 0;
    line-height: 1.1;
    /* padding-top: -500px; */

}
#content .SaltyDog h2 a{
    color: #DBD0BE;
    text-decoration:none;
}
.Chocolatemartini
{
    margin-top: -330px;
    margin-left: 600px;
}
#content .Chocolatemartini h2
{
    /* margin-top: -160px; */
    margin: 8px 0;
    line-height: 1.1;
    /* padding-top: -500px; */

}
#content .Chocolatemartini h2 a{
    color: #DBD0BE;
    text-decoration:none;
}
.Kamikaze
{
    margin-top: 100px;
    margin-left: -795px;
}
#content .Kamikaze h2
{
    /* margin-top: -160px; */
    margin: 8px 0;
    line-height: 1.1;
    /* padding-top: -500px; */

}
#content .Kamikaze h2 a{
    color: #DBD0BE;
    text-decoration:none;
}
.MoscowMule
{
    margin-top: -330px;
    margin-left: -100px;
}
#content .MoscowMule h2
{
    /* margin-top: -160px; */
    margin: 8px 0;
    line-height: 1.1;
    /* padding-top: -500px; */

}
#content .MoscowMule h2 a{
    color: #DBD0BE;
    text-decoration:none;
}
.GodMother
{
    margin-top: -330px;
    margin-left: 600px;
}
#content .GodMother h2
{
    /* margin-top: -160px; */
    margin: 8px 0;
    line-height: 1.1;
    /* padding-top: -500px; */

}
#content .GodMother h2 a{
    color: #DBD0BE;
    text-decoration:none;
}
.slogan{
    margin-top: -90px;
}
.winner{
    margin-top: 200px;
    margin-right: 50px;
}
.t{
    margin-top: 200px;
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
            <a href="首頁已登入.php">
            <img src="logo.png" alt="夢夜" class="ht_logo" style="width:3.68857143cm;height:2.28857143cm">            
          </a>
        </h1>
        <img src="slogan2.png" style="height:2.28857143cm" class="slogan">
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
        
          
          <li><a href="會員資料.php"><i class="fa fa-user"></i><span aria-hidden="true" class="icon_lock icon-fw"></span><?php echo $name;?></a></li>
        
        
        <li class="shopcart-dropdown"><a href="購物車-購物清單.php"><i class="fa fa-shopping-cart"></i> 購物車</a></li>
        
      </ul>
      <!-- Button trigger modal -->
    </div>
  </div>
        </div>
        </header>
        <div id="sidebar_right">
            <div class="flexslider" style="width:350px;height:430px">
                    <ul class="slides" style="width:100px;height:100px">
                    <li>
                        <img src="海報/海報1.png" style="width:350px;height:430px" />
                    </li>
                    <li>
                        <img src="海報/海報2.png" style="width:350px;height:430px" />
                    </li>
                    <li>
                        <img src="海報/海報3.png" style="width:350px;height:430px"/>
                    </li>
                    <li>
                        <img src="海報/海報4.png" style="width:350px;height:430px"/>
                    </li>
                    </ul>
            </div>
            <img src="排行榜.png" class="winner" style="width:350px;height:430px">
        </div>
        <div id="content">
        <?php
        session_start();
        $link=@mysqli_connect('localhost','root','','夢夜');
        $SQL="SELECT * FROM bartending WHERE bid=4 AND state=1";
        $result=mysqli_query($link,$SQL);
        ?>
        <table class="t"style="text-align:center; "  cellpadding="10px">
        
        <tbody>
			<?php
            
				if(mysqli_num_rows($result) > 0)
				{
                    $count=0;
                    foreach($result as $row)
                    {
                        echo "<td height='50px' width='350px'>";
                        echo "<a href='".$row['tname'].".php' style=text-decoration:none;><img src='".$row['pic']."' width='70%'><br>";
                        echo "<font color=#DBD0BE size=4px>".$row['tname']."<br>";
                        echo "<font color=#F2F4F3 size=4px>$".$row['tprice'];
                        echo "</td>";  
                        $count++;
                        if($count%3==0)
                        {
                            echo "<tr>";
                        }       
                    }
                                
                                
                }
                            
                        

			?>
   
		</tbody>
            <!-- <div class="basicwine"> -->
            <!-- <div class="Screwdriver">
            <a href="螺絲起子.php" style="text-decoration:none;"><img src="調酒/螺絲起子.png" style="width:200px;height:250px"/> </a>
            <h2><a href="螺絲起子.php">Screwdriver<br>螺絲起子</a><br><span style="color:#F2F4F3;">$130</span></h2>
            </div>
            <div class="Cosmopolitan">
            <a href="柯夢波丹.php" style="text-decoration:none;"><img src="調酒/柯夢波丹.png" style="width:200px;height:250px"/> </a>
            <h2><a href="柯夢波丹.php">Cosmopolitan<br>柯夢波丹</a><br><span style="color:#F2F4F3;">$120</span></h2>
            </div>
            <div class="BloodyMary">
            <a href="血腥瑪麗.php" style="text-decoration:none;"><img src="調酒/血腥瑪麗.png" style="width:200px;height:250px"/> </a>
            <h2><a href="血腥瑪麗.php">Bloody Mary<br>血腥瑪麗</a><br><span style="color:#F2F4F3;">$110</span></h2>
            </div>
            <div class="SexontheBeach">
            <a href="性感海灘.php" style="text-decoration:none;"><img src="調酒/性感海灘.png" style="width:200px;height:250px"/> </a>
            <h2><a href="性感海灘.php">Sex on the Beach<br>性感海灘</a><br><span style="color:#F2F4F3;">$120</span></h2>
            </div>
            <div class="SaltyDog">
            <a href="鹹狗.php" style="text-decoration:none;"><img src="調酒/鹹狗.png" style="width:200px;height:250px"/> </a>
            <h2><a href="鹹狗.php">Salty Dog<br>鹹狗</a><br><span style="color:#F2F4F3;">$100</span></h2>
            </div>
            <div class="Chocolatemartini">
            <a href="巧克力馬丁尼.php" style="text-decoration:none;"><img src="調酒/巧克力馬丁尼.jpg" style="width:200px;height:250px"/> </a>
            <h2><a href="巧克力馬丁尼.php">Chocolate martini<br>巧克力馬丁尼</a><br><span style="color:#F2F4F3;">$140</span></h2>
            </div>
            <div class="Kamikaze">
            <a href="神風特攻隊.php" style="text-decoration:none;"><img src="調酒/神風特攻隊.png" style="width:200px;height:250px"/> </a>
            <h2><a href="神風特攻隊.php">Kamikaze<br>神風特攻隊</a><br><span style="color:#F2F4F3;">$130</span></h2>
            </div>
            <div class="MoscowMule">
            <a href="莫斯科騾子.php" style="text-decoration:none;"><img src="調酒/莫斯科騾子.png" style="width:200px;height:250px"/> </a>
            <h2><a href="莫斯科騾子.php">Moscow Mule<br>莫斯科騾子</a><br><span style="color:#F2F4F3;">$120</span></h2>
            </div>
            <div class="GodMother">
            <a href="教母.php" style="text-decoration:none;"><img src="調酒/教母.png" style="width:200px;height:250px"/> </a>
            <h2><a href="教母.php">God Mother<br>教母</a><br><span style="color:#F2F4F3;">$130</span></h2>
            </div>
             -->
            <!-- <div class="Whiskey">
            <a href=""><img src="海報4.png" style="width:200px;height:250px"/> </a>
            <h3><a href="">威士忌 Whiskey</a></h3>
            </div> -->
        <!-- </div> -->
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