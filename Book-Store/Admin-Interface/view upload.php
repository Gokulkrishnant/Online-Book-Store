<html>
	<head>
		<title>Admin panel</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/styleAdmin.css" type="text/css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans">
		
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	</head>
	<body>
		<div id="menu-bar">
			<div id="menu" onclick="onClickMenu()">
				<div id="bar1" class="bar"></div>
				<div id="bar2" class="bar"></div>
				<div id="bar3" class="bar"></div>
			</div>
			<ul class="nav" id="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="books.php">Books</a></li>
				<li><a href="bookorders.php">Books Orders </a></li>
				<li><a href="orderstatus.php">Order Status </a></li>
				<li><a href="view upload.php">View Upload</a></li>
				
			</ul>
		</div>
		<div class="menu-bg" id="menu-bg"></div>
		<script>
 		function onClickMenu(){
		document.getElementById("menu").classList.toggle("change");
		document.getElementById("nav").classList.toggle("change");
	
		document.getElementById("menu-bg").classList.toggle("change-bg");
}
		</script>
		<div class="">
		<h1 class="hed">Admin Panel<h1></div>
		<hr color="white">
<?php session_start(); 
 if(isset($_SESSION['name'])==false)
 { ?><div class="text-center">
  <h1><a href="Template/login.php" style="color:red;">Please Login First</a></h1></div><?php
 }
 else{
?>
<h4><a href="template/logout.php" style="float:right;padding-right:50px;">Logout</h4></a>
		<!----------------------------------------------------------------->
		<div class="container">
    <div class="text-center">
        <h2 style="margin-top: 0px; padding-top: 0; padding-left: 5px;color:white; ">Update User Uploads</h2>
    </div>
    <br>
	
	<!----------------------------------------------------------------------------->

   <table class="table table-hover">

<tr> <td ><b>Id</b></td> <td><b>Title</b></td> <td ><b>Price</b></td> <td colspan="2"><b>Description</b></td>  <td><b> CreateOn</b></td><td><b>Publish</b></td>

<td><b>Book pdf</b></td><td><b>Remove</b></td> <td><b>Book img</b></td> <td><b>Update Display</b></td></tr>
<?php
	try{
	$db= new PDO('mysql:host=localhost;dbname=bookstore;charset=utf8','root','');
	
	}
	catch(Exception $e){
		
		echo "Error has Occured";
	}
	if(isset($_POST["edit_btn"]))
	{
		$id=$_POST["edit_id"];	
	    
	}


	$stmt= $db->query("select * from upload");
	while($row=$stmt->fetch()){	
?>

<tr> <td><?php echo $row['id']." " ?></td>
	<td><?php echo $row['title']." " ?></td>
	<td><?php echo $row['price']." " ?></td>
	<td colspan="2"><?php echo  substr( $row['description'], 0, 60) . '...'; ?></td>
	<td><?php echo $row['createOn']." " ?></td>
		<td><?php echo $row['display']." "?></td>

		
	<td> 
	<a href="../pdf/<?php echo $row['pdf'].""?>" target="blank" alt="" width="600px;"height="1500px;"><i class="fa fa-download" aria-hidden="true" ></i></p>


</a>
<td>

	<form action="template/BookremoveQueryusr.php" method="post">
	<input type="hidden" name="remove_id" value="<?php echo $row['title']."" ?>"/>
	<button type="submit" value="submit" class="btn btn-danger" name="remove_btn">Remove</button>	</form></td>

	<td> <a href="../pic/book/<?php echo $row['image'].""?>" target="blank" alt="" width="600px;"height="1500px;"><i class="fa fa-download" aria-hidden="true" ></i></p>
	</a>
</td>
</form>
	<td>
<form action="template/BookupdateQueryusr.php" method="post">
	<input type="hidden" name="update_id" value="<?php echo $row['title']."" ?>"/>

     <select class="form-control" name="Display" value="<?php echo $row['Display'] ?>" required />
  <option name="Display" style="color:black;">No</option>
  <option name="Display" style="color:black;">Yes</option>
  </select>
    </div>
    
<button type="submit" name="submit" value="submit" class="btn btn-primary"/>Update</button>&nbsp;
  </form>
</td>
</a>

	
	</tr>
<?php
	}
?>
<?php } ?></body>
</html>