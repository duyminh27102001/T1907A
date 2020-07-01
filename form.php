<!DOCTYPE html>
<html>
<head>
	<title>Quan Ly San Pham</title>
		 <style>
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
.menu a {
    text-decoration:none;
} 
.menu .arrow {
    font-size:11px;
    line-height:0%;
} 
/*----- css cho phần menu cha -----*/
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

img{
	padding-left: 200px;
	padding-top: 75px;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}

	</style>
</head>
<body>
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
<div>
	<img src="img/2.jpg" width="1000px">
</div>
<div class="footer">
              <p><h1>END GAME @2020</h1></p>
</div>
</body>
</html>