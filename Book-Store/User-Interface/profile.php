<!DOCTYPE html>
<?php
session_start();?>
<html>
<head>
<title>Profile Page</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="../css/stylecart.css">
<link rel="stylesheet" type="text/css" href="../css/styleFooter.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

<!---------navigation-------->

<section id="nav-bar">

<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
      
	   <li class="nav-item ">
        <a class="nav-link" href="index.php">BOOKS</a>
      </li>
	<li class="nav-item ">
        <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i>&nbsp;CART</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="AboutUs.html">PDF TO AUDIO</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="Contact.php">Upload</a>
      </li>
      
 <li class="nav-item active">
        <a class="nav-link" href="profile.php"><i class="fa fa-user"></i>&nbsp;Profile</a>
      </li>
    </ul>
  </div>
</nav>
</section>


<!-------------------------------------------------------------------------------->

<div class="profile-Section" >


<?php
if(isset($_SESSION['CustId'])==false){ ?>
<div class="text-center">
   <h1 ><a href="login/login.php" style="color:red;"><?php echo "Please Login First"; ?></a></h1></div>
 
<?php
}else{
	try{
	$db= new PDO('mysql:host=localhost;dbname=bookstore;charset=utf8','root','');
	
	}
	catch(Exception $e){
		
		echo "Error has Occured";

}
?>

<p>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Book Orders</button>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample2">Uploads</button>
  <a href="login/logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
</p>

<!-------------------------------------------------------------------------------------------------->

<div class="collapse multi-collapse show" id="multiCollapseExample3">

<div class="card card-body">

    <h3 class="text-center"> Uploaded books</h3>
    <br>        
	
<table class="table table-hover">
<tr><td><b>title</b></td><td><b>Price</b></td><td><b>publish</b></td> <td><b>Uploaded Book</b></td></tr>
<?php
	$customer1= $_SESSION['CustId'];
	$stmt= $db->query("select * from  upload where id='$customer1'");
	while($row=$stmt->fetch()){
	
?>
<tr>
<td><?php echo $row['title']." " ?></td>
<td><?php echo $row['price']." " ?></td>
<td><?php echo $row['display']." " ?></td>
<td><a href="../pdf/<?php echo $row['pdf'].""?>" target="blank" alt="" width="600px;"height="1500px;"><?php echo $row['pdf'].""?></a></td>
</tr>
<?php } ?>

</table>

</div>
</div>


<div class="collapse multi-collapse show" id="multiCollapseExample2">

<div class="card card-body">

    <h3 class="text-center"> Book Orders</h3>
    <br>        
	
<table class="table table-hover">
<tr><td><b>Name</b></td><td><b>OrderId</b></td><td><b>Order Status</b></td> <td><b>Document</b></td></tr>
<?php
	$customer= $_SESSION['CustId'];
	$stmt= $db->query("select * from  transcationbook where Cid ='$customer'");
	while($row=$stmt->fetch()){	
	
?>
<tr>
<td><?php echo $row['name']." " ?></td>
<td><?php echo $row['OrderID']." " ?></td>
<td><?php echo $row['OrderStatus']." " ?></td>	
<td> 
	<form action="invoice.php" method="post">
	<input type="hidden" name="preview_id" value="<?php echo $row['OrderID']; ?>" style="color:black"/>
	<button type="submit" value="submit" class="btn btn-success" name="preview_btn">View Detail</button></form></td>
</tr>
<?php } ?>
</table>


</div>
</div>

<?php } ?>


</div>

<!----------------------------------footer------------------------------------------->

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

<!------------------------------------>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</body>
</html>
