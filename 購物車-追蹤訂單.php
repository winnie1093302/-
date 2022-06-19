<?php
session_start(); 
$link=@mysqli_connect('localhost','root','','夢夜');
$name=$_SESSION['name'];
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
            <a href="首頁已登入.php">
            <img src="logo.png" alt="夢夜" class="ht_logo" style="width:3.68857143cm;height:2.28857143cm">            
          </a>
        </h1>
        <img src="slogan.png" style="height:2.28857143cm" class="slogan">
        <!-- 搜尋框 -->
        <div class="wrap">
          <div class="search">
            <input type="text" class="searchTerm" placeholder="">
            <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
            </button>
          </div>
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
        
          
          <li style="font-family:Microsoft JhengHei;"><a href="會員資料.php"><i class="fa fa-user"></i><span aria-hidden="true" class="icon_lock icon-fw"></span><?php echo $_SESSION['name'];?></a></li>
        
        
        <li class="shopcart-dropdown" style="font-family:Microsoft JhengHei;"><a href="購物車.php"><i class="fa fa-shopping-cart"></i> 購物車</a></li>
        
      </ul>

    </div>
  </div>
        </div>
        </header>

        <div id="content">
            
            <h1><img src="購物車杯.png" style="width: 30px;height: 70px;" class="pic"><p class="ppp">追蹤訂單</p></h1>
        <hr Width="80%" Color="#fff">
        <?php
        
        $link=@mysqli_connect('localhost','root','','夢夜');
        $SQL="SELECT * FROM cart_link c,member m Where m.name='$name' AND c.mid=m.mid AND c.state='1' UNION  SELECT * FROM cart_link c,member m Where m.name='$name' AND c.mid=m.mid AND c.state='2' ";
        $result=mysqli_query($link,$SQL);
        $count=mysqli_num_rows($result);
        ?>
        <script src="jquery-3.1.0.min.js"></script>
        <form action="" method="post">
            <center>
        <table class="table table-sm "style="text-align:center; margin-top:100px; width: 1000px;"   cellpadding="20px">
                <thead style="text-align:center; background-color:#DBD0BE;">
                    <tr style="text-align:center;">
                        <!-- <th>姓名</th> -->
                        <th style="font-size:x-large;">購買商品</th>
                        <th style="font-size:x-large;">數量</th>
                        <th style="font-size:x-large;">價格</th>
                        <th style="font-size:x-large;">狀態</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sum=0;
                        if(mysqli_num_rows($result) > 0)
                        {
                            
                            foreach($result as $row)
                            {
                                
                    ?>
                                    <?php do {
                                        $winename=$row['tname']; 
                                        ?>
                                    <tr style="background-color:#FDFAE7;">
                                    
                                    <td style="font-size:larger;"><?php echo $row['tname']; ?></td>
                                    <td style="font-size:larger;"><?php echo $row['num'];?></td> 	
                                    <td style="font-size:larger;"><?php echo $row['total_price'];
                                    $sum+=$row['total_price'];?></td>
                                    <td><?php if($row['state']==1)
                                                { echo "待出貨";}
                                                if($row['state']==2)
                                                { echo "待收貨";}?></td>
                                    </tr>
                                    
                                    <?php } while ($row = mysqli_fetch_assoc($result)); ?>
                                    </table>

                                    


                                    
                    <?php
                        }
                         
                        
                                    
                                    
                        }
                    ?>
                </tbody>
            </center>
                    </form>
                    <table style="margin-left: 100px;">
							<tr>
									<td><a href="購物車-購物清單.php"><img src="fast-forward (1).png" style="width: 50px;height:50px;"></a></td><td width=1500></td><td><a href="購物車-歷史紀錄.php"><img src="fast-forward.png" style="width: 50px;height:50px;"></a></td>
								</tr>
								<br>
								<tr>
									<td width=150 style="color: #000000;">購物清單</td><td width=1500></td><td width=200 style="color: #000000;">歷史訂單</td>
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
//切換登入註冊
    var TurnToOrder = () => {
        document.getElementById('order').style.display = "block";
        document.getElementById('cart-link').style.display = "none";
        document.getElementById('history').style.display = "none";
    }
    var TurnToCart = () => {
        document.getElementById('cart-link').style.display = "block";
        document.getElementById('order').style.display = "none";  
        document.getElementById('history').style.display = "none";
    }
    var TurnToHistory = () => {
        document.getElementById('history').style.display = "block";
        document.getElementById('cart-link').style.display = "none"; 
        document.getElementById('order').style.display = "none"; 
    }

    </script>
</html>