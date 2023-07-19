<?php
include('include/init.php');
	if(isset($_POST['category'])){
		$category = $_POST['category'];
		if($category === ""){
			$products = getAllProducts();
		}else{
			$products = displayCategory($category);
		}
		echo json_encode($products);
	}