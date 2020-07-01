<?php 
 require_once('dbhelp.php');
 require_once('config.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		    body{
                font-family: arial;
            }
            .container{
                width: 1200px;
                margin: 0 auto;
                padding-top: 20px;
            }
            h1{
                text-align: center;
            }
            .product-items{
                border: 1px solid #ccc;
                padding: 30px;
            }
            .product-item{
                float: left;
                width: 23%;
                margin: 1%;
                padding: 10px;
                box-sizing: border-box;
                line-height: 26px;
            }
            .product-item label{
                font-weight: bold;
            }
            .product-item p{
                margin: 0;
                line-height: 26px;
                max-height: 52px;
                overflow: hidden;
            }
            .product-price{
                color: red;
                font-weight: bold;
            }
            .product-img{
                padding: 5px;
                border: 1px solid #ccc;
                margin-bottom: 5px;
            }
            .product-item img{
                max-width: 100%;
            }
            .clear-both{
                clear: both;
            }
            a{
                text-decoration: none;
            }
            .buy-button{
                text-align: right;
                margin-top: 10px;
            }
            .buy-button a{
                background: #444;
                padding: 5px;
                color: #fff;
            }
            .clear-both{
                clear: both;
            }
            a{
                text-decoration: none;
            }
            .buy-button{
                text-align: right;
                margin-top: 10px;
            }
            .buy-button a{
                background: #444;
                padding: 5px;
                color: #fff;
            }
                       * {
               margin:0px;
               padding:0px;
              }
.clearfix:after {
    display:block;
    clear:both;          
}
.wrapper {
    width:100%;
    box-shadow:0px 1px 3px rgba(0,0,0,0.2); 
    background:#3e3436;
}
 
/*----- Phần menu -----*/
.menu {
    width:1000px;
    margin:0px auto;
    background:#bf5c71;
    height: 50px;
}
.menu li {
    margin:0px;
    list-style:none;
    font-family:'Ek Mukta';
}

.menu .arrow {
    font-size:11px;
    line-height:0%;
} 
.menu > ul > li {
    float:left;
    display:inline-block;
    position:relative;
    font-size:19px;
}
.menu > ul > li > a {
    padding:10px 40px;
    display:inline-block;
    color:white;
}
.footer {
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
   height: 25px;
   padding-top: 20px;
}
	</style>
</head>
     <div class="wrapper">
    <nav class="menu">
        <ul class="clearfix">
            <li><a href="form.php">Trang chủ</a></li>
            <li><a href="DanhMuc.php">Danh Muc San Pham</a></li>
            <li><a href="index.php">Gio Hang</a></li>
            <li><a href="#">Lien He</a></li>
            <li><a href="#">Tin Tuc</a></li>
        </ul>
    </nav>
</div>
	<div class="container">
        <h1>Danh Sach San Pham</h1>
   	<div class="product-items">
   		<form method="post">
   		<div class="product-item">
   			<div class="product-img">
   				<img src="img/shoes-1.jpg" style="width: 250px" height="220px">
   			</div>
   			<strong name = "fullname" >Giay Bong Da</strong><br>
   			<label>Gia:</label>
   			<span class="product-price" name ="price">1.250.000</span>
   			<p>Giay Dung Cho San Co Nhan Tao</p>
   			<div class="buy-button"><a href="addproduct.php">Mua San Pham</a></div>
   		</div>
   		<div class="product-item">
   			<div class="product-img">
   				<img src="img/shoes-2.jpg" style="width: 250px" height="220px">
   			</div>
   			<strong>Giay Bong Da</strong><br>
   			<label>Gia:</label>
   			<span class="product-price">1.250.000</span>
   			<p>Giay Dung Cho San Co Nhan Tao</p>
   			<div class="buy-button">
   				<a href="addproduct.php">Mua San Pham</a>
   			</div>
   		</div>
   		<div class="product-item">
   			<div class="product-img">
   				<img src="img/shoes-3.jpg" style="width: 250px" height="220px">
   			</div>
   			<strong>Giay Bong Da</strong><br>
   			<label>Gia:</label>
   			<span class="product-price">1.250.000</span>
   			<p>Giay Dung Cho San Co Nhan Tao</p>
   			<div class="buy-button">
   				<a href="addproduct.php">Mua San Pham</a>
   			</div>
   		</div>
   		<div class="product-item">
   			<div class="product-img">
   				<img src="img/shoes-4.jpg" style="width: 250px" height="220px">
   			</div>
   			<strong>Giay Bong Da</strong><br>
   			<label>Gia:</label>
   			<span class="product-price">1.250.000</span>
   			<p>Giay Dung Cho San Co Nhan Tao</p>
   			<div class="buy-button">
   				<a href="addproduct.php">Mua San Pham</a>
   			</div>
   		</div>
   		<div class="product-item">
   			<div class="product-img">
   				<img src="img/shoes-5.jpg" style="width: 250px" height="220px">
   			</div>
   			<strong>Giay Bong Da</strong><br>
   			<label>Gia:</label>
   			<span class="product-price">1.250.000</span>
   			<p>Giay Dung Cho San Co Nhan Tao</p>
   			<div class="buy-button">
   				<a href="addproduct.php">Mua San Pham</a>
   			</div>
   		</div>
   		<div class="product-item">
   			<div class="product-img">
   				<img src="img/shoes-6.jpg" style="width: 250px" height="220px">
   			</div>
   			<strong>Giay Bong Da</strong><br>
   			<label>Gia:</label>
   			<span class="product-price">1.250.000</span>
   			<p>Giay Dung Cho San Co Nhan Tao</p>
   			<div class="buy-button">
   				<a href="addproduct.php">Mua San Pham</a>
   			</div>
   		</div>
   		<div class="product-item">
   			<div class="product-img">
   				<img src="img/shoes-7.jpg" style="width: 250px" height="220px">
   			</div>
   			<strong>Giay Bong Da</strong><br>
   			<label>Gia:</label>
   			<span class="product-price">1.250.000</span>
   			<p>Giay Dung Cho San Co Nhan Tao</p>
   			<div class="buy-button">
   				<a href="addproduct.php">Mua San Pham</a>
   			</div>
   		</div>
   		<div class="product-item">
   			<div class="product-img">
   				<img src="img/shoes-8.jpg" style="width: 250px" height="220px">
   			</div>
   			<strong>Giay Bong Da</strong>
   			<label>Gia:</label>
   			<span class="product-price">1.250.000</span>
   			<p>Giay Dung Cho San Co Nhan Tao</p>
   			<div class="buy-button">
   				<a href="addproduct.php">Mua San Pham</a>
   			</div>
   		</div>
   		<div class="clear-both"></div>
   		</form>
   	</div>
   	</div>
    <div class="footer">
              <p><h3>END GAME @2020</h3></p>
        </div>
</body>
</html>