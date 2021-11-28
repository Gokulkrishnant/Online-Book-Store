	 <?php
	try{
	$db= new PDO('mysql:host=localhost;dbname=bookstore;charset=utf8','root','');
	
	}
	catch(Exception $e){
		
		echo "Error has Occured";
	}
	
 	 
 

 $title=$_POST['title'];
 $price=$_POST['price'];
 $description=$_POST['description'];
 $file=$_FILES['photo'];
 $file1=$_FILES['pdf'];


 //PRINT_R( $file);
 
 $filename= $file['name'];
 $filepath= $file['tmp_name'];
 $filename1=$file1['name'];
 $filepath1=$file1['tmp_name'];
 $fileerror= $file['error'];
 if($fileerror == 0){
 $destfile= '../../pic/book/'.$filename;
  $destfile1= '../../pdf/'.$filename1;
 
 //ECHO  $destfile;
 
 move_uploaded_file($filepath, $destfile);
  move_uploaded_file($filepath1, $destfile1);


 } 
 $stmt=$db->prepare("insert into product values(null,'$title', $price , '$description','$filename',now(),'NO','$filename1')");
 $stmt->execute();
 
header("location:../books.php");
exit();
?>