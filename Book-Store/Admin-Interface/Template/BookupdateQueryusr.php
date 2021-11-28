	 <?php
	try{
	$db= new PDO('mysql:host=localhost;dbname=bookstore;charset=utf8','root','');
	
	}
	catch(Exception $e){
		
		echo "Error has Occured";
	}
$n=$_POST['Display'];
	
$n1=$_POST['update_id'];




	 
 $stmt=$db->prepare("UPDATE upload SET display='$n' where title='$n1'");
 
 $stmt->execute();
header("location:../view upload.php");
exit();

?>
