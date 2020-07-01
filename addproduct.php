<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		 <style>
           * {
               margin:0px;
               padding:0px;
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
	<div class="container">
        <div class="text-center pt-5">
            <h2>Them San Pham Vao Gio Hang</h2>
        </div>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="fullname">Product Name:</label>
                <input type="text" class="form-control" name="fullname" required >
            </div>
            <div class=" form-group">
                <label for="age">Images:</label>
                <input type="text" class="form-control" placeholder="Link image" name="image" required >
            </div>
            <div class="form-group">
                <label for="address">Price:</label>
                 <input type="text" class="form-control" name="price" required > 
            </div>
            <a href="index.php"><button type="submit" class="btn btn-success">Add</button></a>
        </form>
        <div class="footer">
              <p><h6>END GAME @2020</h6></p>
        </div>
    </div>
</body>
</html> 