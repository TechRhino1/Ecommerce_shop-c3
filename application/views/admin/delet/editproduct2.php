<?php
include("connect.php");

$sql="UPDATE products set name='".$_POST['name']."',quantity='".$_POST['quantity']."',buy_price='".$_POST['buy_price']."',sale_price='".$_POST['sale_price']."',categorie_id='".$_POST['categorie_id']."' ,media_id='".$_POST['media_id']."' where id='".$_GET['id']."'";
$result=$conn->query($sql);
header('location:product.php');
?>