<?php 

	$email = $_POST["email"];
	$password = $_POST["password"];
	$quantity = $_POST["quantity"];

	$shipping = $_POST["shipping"];
	$shippingCost = 0;

	$product = $_POST["product"];
	$productName;
	$productPrice = 0;

	if($shipping == "Overnight")
	{
		$shippingCost = 50;
	}
	if($shipping == "Three")
	{
		$shippingCost = 5;
	}

	if($product == "product1")
	{
		$productName = "A shiny new number one";
		$productPrice = 10;
	}
	if($product == "product2")
	{
		$productName = "A shiny new number two";
		$productPrice = 20;
	}
	if($product == "product3")
	{
		$productName = "A shiny new number three";
		$productPrice = 30;	
	}
	echo '<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">';
	echo '<link rel="stylesheet" type="text/css" href="customerFrontend.css">';
	echo '<div id="content-receipt">';
		echo 'Email: ' .$email. '</br>';
		echo 'Password: ' .$password. '</br>';
		echo '<table id="table" border=1>';
			echo '<tr>';
				echo '<td> Product: </td>';
				echo '<td> ' .($productName). '</td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td> Price:</td>';
				echo '<td> ' .($productPrice). '</td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td> Total Price:' .($productPrice + $shippingCost). '</td>';
			echo '</tr>';			
		echo '</table>';
		echo '</div>';
?>