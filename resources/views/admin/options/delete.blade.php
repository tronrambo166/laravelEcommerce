
<?php    session_start();
include "../universals/sessions.php";
include "../universals/class.php";



// Delete: Product

if(isset($_GET['proid']) ){

$id=$_GET['proid'];
$image=$_GET['image'];



$del=" delete from products where ID='$id' ";
$run=$db->delete($del);


if($run==true){
	unlink('images/'.$image);
	
	$_SESSION['delpro']="Deleted Successfully";	
	header('location:../index.php?page=options/manpro'); exit;
}

}	





// Delete: Category

if(isset($_GET['cid'])){

$id=$_GET['cid'];

$del=" delete from category where ID='$id' ";
$run=$db->delete($del);

if($run==true){
	
	$_SESSION['del']="Deleted Successfully";
	header('location:../index.php?page=options/mancat'); exit;
}
}	
	
	



// Delete:Brand

if(isset($_GET['bid'])){
$id=$_GET['bid'];

$del=" delete from brands where ID='$id' ";
$run=$db->delete($del);

if($run==true){
	
	$_SESSION['delbrand']="Deleted Successfully";
	header('location:../index.php?page=options/manbrand'); exit;
}

}		
	

?>

