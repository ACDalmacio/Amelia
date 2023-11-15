<?php
include('../includes/connection.php');
			$zz = $_POST['id'];
			$pc = $_POST['prodcode'];
			$pname = $_POST['prodname'];
            $pr = $_POST['price'];
            $cat = $_POST['category'];
			$bra = $_POST['branches'];
			$file = $_POST['image'];
		
	 			$query = 'UPDATE product set NAME="'.$pname.'",
					 PRICE="'.$pr.'", 
					 CATEGORY_ID ="'.$cat.'", 
					 PRO_IMG = "'.$file. '",
					 BRANCH_ID = "'.$bra.'" 
					 WHERE PRODUCT_CODE ="'.$pc.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));

							
?>	
	<script type="text/javascript">
			alert("You've Update Product Successfully.");
			window.location = "product.php";
		</script>