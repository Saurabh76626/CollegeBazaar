<?php

include 'config.php';

//$product_code = $_POST["product_code"];
$product_name = $_POST["product_name"];
$product_desc = $_POST["product_desc"];
$qty = $_POST["qty"];
$price = $_POST["price"];
$seller = $_POST["seller"];

if($mysqli->query("INSERT INTO products (product_name, product_desc, qty, price, seller) VALUES( '$product_name', '$product_desc', '$qty', '$price', '$seller')")){
	echo 'Data inserted';
	echo '<br/>';
}

else{
	echo 'Error';
}

header ("location:index.php");

?>