<?php
include'../includes/connection.php';
echo($_GET['delete_id']);
	if (isset($_GET['delete_id'])) {

    			$query = "DELETE FROM product WHERE PRODUCT_ID = '{$_GET['delete_id']}'";
    			$result = mysqli_query($db, $query) or die(mysqli_error($db));				
            ?>
    			<script type="text/javascript">alert("Product Successfully Deleted.");
				window.location = "product.php";</script>					
            <?php
    			//break;
            }
?>