<?php    
header('Content-Type: text/plain; charset=utf-8');
 
include_once 'config/db-connect.php';
$db;
    
$db = new DbConnect();
    
if(isset($_GET["photo_id"])){
	$photo_result = mysqli_query($db->getDb(), "SELECT * FROM product_photo
         WHERE id = ".$_GET["photo_id"]) or die ("Error :".mysql_error());
	$photos = array();
	while($photo = $photo_result->fetch_assoc()) {
	    $photos = $photo;
	}
	return json_encode($photos);
}
?>