<!DOCTYPE html>
<html>
<head>
<title>Upload Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/styleContact.css">
<link rel="stylesheet" type="text/css" href="../css/styleFooter.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="email.js"></script> 
</head>



<body>


<!---------navigation-------->
<header>
<section id="nav-bar">

<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">

	   <li class="nav-item">
        <a class="nav-link" href="index.php">BOOKS</a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="cart.php"></i>&nbsp;CART</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link " href="AboutUs.html">PDF TO AUDIO</a>
      </li>
	   <li class="nav-item active">
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
<h1> YOU ARE WELCOME</h1>
</div>
</div>
</header>

<!---------send us a message-box-------->
<div class="card text-center">
 
  <div class="card-body">
    <h1 class="card-title">Upload a Book</h1>
	<h2>Help others</h2>
	<h3 style="color:green;"><b>____________________________________________________________________________________________________</b></h3>
<br>
	<h5><i>We love to meet people and talk about posibilites</i></h5>
     <br>
	 	 </div></div>
<?php session_start(); 
 if(isset($_SESSION['CustId'])==false)
 { ?><div class="text-center">
  <h1><a href="./login/login.php" style="color:red;">Please Login First</a></h1></div><?php
 }
 else{
?>
<h4><a href="./login/logout.php" style="float:right;padding-right:50px;">Logout</h4></a>
    <!----------------------------------------------------------------->
    
  <!----------------------------------------------------------------------------->
   
   <form action="./BookinsertQuery.php" method="POST" enctype="multipart/form-data"> 
 
  <div class="form-row" >
 
    <div class="form-group col-md-4">
      
      <label ><b>Title</b></label><input type="text" class="form-control" name="title" required />
    </div>
    <div class="form-group col-md-4">
      <label ><b>Price</b></label>
      <input type="number" class="form-control" name="price" min="0" required />
    </div>
    
  </div>
    <div class="form-group col-md-12">
    <label ><b>Description</b></label>
    <textarea class="form-control"  rows="3" name="description" required /> </textarea>
  </div>
  </div class="form-row" >
  <div class="form-group col-md-4">
    <label ><b>Image</b></label>
 <p><b>upload Photo:&nbsp;&nbsp;</b><input type="file" name="photo" value="" required />
 <p><b>upload Pdf:&nbsp;&nbsp;</b><input type="file" name="pdf" value="" required />

</div>
</div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" required />
      <label class="form-check-label" for="gridCheck">
        <b>Confirm
      </label>
    </div>
  </div>
  <button type="submit" name="submit" value="submit" class="btn btn-primary"/>Add</button>&nbsp;<button type="reset" class="btn btn-primary" value="clear" >Reset</button>
</form>

<?php } ?>
<br>
<hr>

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
<a href="https://www.instagram.com/gokulthalpathi99/" target="_blank" class="linkk" style="font-size:18px;">
<i style="padding-bottom:8px;"class="fa fa-instagram linkk"> &nbsp;Instagram</i></a><br>
<a href="https://www.youtube.com/channel/UCGI_fQFObTwNVjd-wMvPKcQ/featured" target="_blank" class="linkk" style="font-size:18px;">
<i style="padding-bottom:8px;"class="fa fa-youtube-play linkk"> &nbsp;YouTube</i></a>
</div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>