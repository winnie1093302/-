<?php
session_start();
$link=@mysqli_connect('localhost','root','','夢夜');
$SQL="SELECT * FROM bartending WHERE tid=48 ";
$result=mysqli_query($link,$SQL);
$row=mysqli_fetch_assoc($result);
$name=$row['tname'];
$price=$row['tprice'];

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
height:3000px;
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
    margin-left: -160px;
    color: #FDFAE7;
}
.mix{
    margin-top: -20px;
    margin-left: -120px;
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
            <a href="12.php">
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
        
          
          <li><a href="allmember.php"><i class="fa fa-user"></i><span aria-hidden="true" class="icon_lock icon-fw"></span></a></li>
        
        
        <li class="shopcart-dropdown"><a href="購物車資料.php"><i class="fa fa-shopping-cart"></i> 購物車</a></li>
        
      </ul>
      <!-- Button trigger modal -->
    </div>
  </div>
        </div>
        </header>
        <!-- <div id="sidebar_right">
            <div class="flexslider" style="width:350px;height:430px">
                    <ul class="slides" style="width:100px;height:100px">
                    <li>
                        <img src="海報1.png" style="width:350px;height:430px" />
                    </li>
                    <li>
                        <img src="海報2.png" style="width:350px;height:430px" />
                    </li>
                    <li>
                        <img src="海報3.png" style="width:350px;height:430px"/>
                    </li>
                    <li>
                        <img src="海報4.png" style="width:350px;height:430px"/>
                    </li>
                    </ul>
            </div>
            <img src="排行榜.png" class="winner" style="width:350px;height:430px">
        </div> -->
        <div id="content">
        <?php
session_start();
$link=@mysqli_connect('localhost','root','','夢夜');
$SQL="SELECT * FROM bartending";
$result=mysqli_query($link,$SQL);
$row=mysqli_fetch_assoc($result);
?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>產品管理</title>
<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
<script type="text/javascript">
function showChang(id,selectShow){
 location='update.php?id='+id+'&amp;show='+selectShow;
}

</script>

</head>

<body>
<center>
<table class="table table-sm table-bordered"style="text-align:center; margin-top:150px;" border="1" cellpadding="10px">
		<thead style="text-align:center; background-color:#DBD0BE;" >
			<tr style="text-align:center;">
				<th>bid</th>
				<th>tid</th>
				<!-- <th>pic</th> -->
                <th>tname</th>
                <th>tprice</th>
                <th>state</th>
                <th></th>
                <th></th>
                
			</tr>
		</thead>
        <tbody style="background-color:#FDFAE7;">
			<?php
				if(mysqli_num_rows($result) > 0)
				{
					foreach($result as $row)
					{
			?>
                            <?php do { ?>
                            <tr>
                            <td><?php echo $row['bid']; ?></td> 
							<td><?php echo $row['tid'];?></td> 	
                            <td><?php echo $row['tname']; ?></td>
                            <td><?php echo $row['tprice']; ?></td>
                            <td><?php echo $row['state']; ?></td>
                            <td>
                                

                                <a href="up.php?id=<?php echo $row['tid'];?>"><input type="submit" value="上架"></a>
                                </td>
                                <td>
                                <a href="down.php?id=<?php echo $row['tid'];?>"><input type="submit" value="下架"></a>
                            
                                </td>
                            </tr>
                            <?php } while ($row = mysqli_fetch_assoc($result)); ?>
                            </table>
                            
                            <?php
				  }
				}
			?>
		</tbody>
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