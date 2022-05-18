<?php
include("connect.php");
$sql="UPDATE products set delete_status='1' where id='".$_GET['id']."'";
header('location:product.php');
echo 'Deleted successfully.';
if($conn->query($sql))
{
	echo "Record Deleted";
}else
{
	echo "Not Deleted";
}

