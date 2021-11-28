<!DOCTYPE html>
<?php
session_start();?>
<html>
<head>
<title>BookPage</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="../css/stylebookstore.css">
<link rel="stylesheet" type="text/css" href="../css/styleFooter.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>


<!---------navigation-------->
<header >
<section id="nav-bar">

<nav class="navbar navbar-expand-lg navbar-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
      
	   <li class="nav-item active">
        <a class="nav-link" href="index.php">BOOKS</a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i>&nbsp;CART</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="AboutUs.html">PDF TO AUDIO BOOK</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="Contact.php">Upload</a>
      </li>
      
 <li class="nav-item ">
        <a class="nav-link" href="profile.php"><i class="fa fa-user"></i>&nbsp;Profile</a>
      </li>
    </ul>
  </div>
</nav>
.
</section>

<div class="col-md-12">
<div class="title">
<h1>BOOK STORE </h1>&nbsp;
<span class="counter text-center">250</span>&nbsp;+</p>



</div>
</div>
</header>
<!----------------------Menu title--------------->
<div class="container" id="msg-Content">
<h2 class="t1">Book Collection</h2>

<!--Menu items-->

<?php

if(isset($_SESSION['LoginError'])){ ?>
<a href="login/login.php" ><div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong><?php echo $_SESSION['LoginError']; ?> </strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
 </button>
</div></a>
<?php
}
if(isset($_SESSION['cartCount'])){ 
	?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><?php echo $_SESSION['cartCount'];?> Items Added To Cart Successfully. <a href="cart.php">View Cart</a></strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
 </button>
</div><?php
}
?>
</div>
<div class="main-container">
<?php
	try{
	
	$db= new PDO('mysql:host=localhost;dbname=bookstore;charset=utf8','root','');
	}
	catch(Exception $e){
		
		echo "Error has Occured";
	}

	$stmt= $db->query("SELECT * FROM product where display='YES' ");
	while($row=$stmt->fetch()){
?>
<div class="">
<img src="../pic/book/<?php echo $row['image']?>" style="width:100%; height:267px;">
<h3 style="padding-top:10px;"><b><?php	echo $row['title']." " ?></b></h3>
<p><?=	substr($row['description'], 0, 70) . '...'; ?></p>
<div class="line-flex">
<h3><b><span style="font-size:18px;"><i class="fa fa-inr"></i><?php	echo $row['price']." " ?></span></b></h3>
<form action="previewbook.php" method="post">
	<input type="hidden" name="insert_id" value="<?php echo $row['id']; ?>" />
	<button type="submit" value="submit" class="btn btn-outline-warning"  name="insertCart_btn" style="text-align:center;">
	<i class="fa fa-picture-o"> Preview</i></button></form>
</div>
<div class="line-flex">
<div>
<form method="post" id="myform" action="insertCart.php">
	<label style="font-size:18px">Qty:&nbsp;</label><input type="number" name="qun" value="1" min="1" max="99"style="width:50%;" >
	<input type="hidden" name="insert_id" value="<?php echo $row['id']; ?>" /></div>
	<div>
	<button type="submit" name="submit" value="submit" name="insertCart_btn"  class="btn btn-success" >
	 Add <i class="fa fa-shopping-cart" aria-hidden="true"></i></button></form>	</div>			
</div>
</div>

<?php } ?>
</div>
<!--------------Footer -------------------->
<!---------contact section-------->
<div class="bg">
<br><br>
<div class="container ">
<div class="row">
<div class="col-md-6">

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item">
        <img src="../pic/book1.jpg" class="Slider w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../pic/alfons-morales-YLSwjSy7stw-unsplash.jpg" class="Slider w-100" alt="...">
    </div>
    <div class="carousel-item active">
      <img src="../pic/pic1.jpg" class="Slider w-100" alt="...">
    </div>
  </div>
</div>
</div>
<div class="col-md-6">
<br>
<h2><b>Contact Us ;-)</b> </h2>
<h3><i class="fa fa-phone-square" ></i>&nbsp;<b>Phone No :</b><br>+91 8015355385</h3>
<h3><i class="fa fa-envelope" ></i>&nbsp;<b>Email :<br></b>gokulkrishnant99@gmail.com</h3>

</div>


</div>
</div>
<br><br>
</div>


<!--------------------------------Footer---------------------------------------------------------------------->

<div class="footer">
<div class="col-md-12"> <a href="#nav-bar"><i class="fa fa-angle-double-up fa-4x linkup linkk" ></i></a></div>
<div class="row" style="width:100%;padding-left:60px;padding-top:30px;padding-bottom:20px;">

<div class="col-md-4"><b><h5><i class="fa fa-paper-plane-o" ></i>&nbsp;Contact Info :</h5></b>
Mobile: +91 8015355385<br>
Email: gokulkrishnant99@gmail.com <br>
<b>FOR ANY ASSISTANCE</b><br><i class="fa fa-phone"></i>&nbsp;
<br>8015355385<br>
</div>

<br>
</div>
<div class="col-md-4"><b><h5>Social Media</h5></b>
<a href="https://www.facebook.com/gokulthalapathi99" target="_blank" class="linkk" style="font-size:18px;">
<i style="padding-bottom:8px;" class="fa fa-facebook-official linkk" >&nbsp; Facebook</i></a><br>
<a href="https://twitter.com/GOKULKR41170814" target="_blank" class="linkk" style="font-size:18px;">
<i style="padding-bottom:8px;"class="fa fa-twitter linkk" >&nbsp; Twitter</i></a><br> 
<a href="https://www.instagram.com/gokulthalpathi99//" target="_blank" class="linkk" style="font-size:18px;">
<i style="padding-bottom:8px;"class="fa fa-instagram linkk"> &nbsp;Instagram</i></a><br>
<a href="https://www.youtube.com/channel/UCGI_fQFObTwNVjd-wMvPKcQ/featured" target="_blank" class="linkk" style="font-size:18px;">
<i style="padding-bottom:8px;"class="fa fa-youtube-play linkk"> &nbsp;YouTube</i></a>
</div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>