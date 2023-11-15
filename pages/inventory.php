<style>
	#filters {
		margin-left: 0%;
		margin-top: 0%;
		margin-bottom: 1%;
	}
</style>


<?php
include'../includes/connection.php';
include'../includes/sidebar.php';

$query = 'SELECT ID, t.TYPE
            FROM users u
            JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
$result = mysqli_query($db, $query) or die(mysqli_error($db));

while ($row = mysqli_fetch_assoc($result)) {
    $Aa = $row['TYPE'];

    if ($Aa=='Cashier') {
        ?>
<script type="text/javascript">
	//then it will be redirected
	alert("Restricted Page! You will be redirected to POS");
	window.location = "pos.php";
</script>
<?php
    }
}
?>



<div class="card shadow mb-4" style="height:75vh;overflow-x:auto;">

	<div class="card-header py-3">


		<div class="card-body">
			<h4 class="m-2 font-weight-bold text-dark">Inventory</h4>
			<hr>
			<!--div class="dropdown show">
				<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Select Branch
				</a>

				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="#" onclick="getInventory('allbranch')">All Branches</a>
					<a class="dropdown-item" href="#" onclick="getInventory('Anns Home Main Branch')">Ann's Home Main
						Branch</a>
					<a class="dropdown-item" href="#" onclick="getInventory('Anns Home Bauan Branch')">Ann's Home Bauan
						Branch</a>
					<a class="dropdown-item" href="#" onclick="getInventory('Anns Home Kumintang Branch')">Ann's Home
						Kumintang Branch</a>
					<a class="dropdown-item" href="#" onclick="getInventory('Anns Home P.Burgos Branch')">Ann's Home
						P.Burgos Branch</a>
					<a class="dropdown-item" href="#" onclick="getInventory('Anns Home SM Batangas Branch')">Ann's Home
						SM Batangas Branch</a>

				</div>

			</div>


		</div-->

		<div>




			<div class="table-responsive" id="inventory_data">
				<a href="inv_print.php?bname=allbranch" target="_blank" class="btn float-right" style="color:white; background-color: hsl(356, 65%, 35%);">Print</a>
				<br> <br>

				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Product Code</th>
							<th>Name</th>
							<th>Quantity</th>
							<th>Category</th>
							<th>Size</th>
							<th>Date Stock In</th>
						</tr>
					</thead>

					<tbody>

						<?php

    $query = 'SELECT PRODUCT_ID, PRODUCT_CODE, NAME, QTY_STOCK, CNAME, DATE_STOCK_IN 
    FROM product p 
    join category c on p.CATEGORY_ID=c.CATEGORY_ID 
    GROUP BY PRODUCT_CODE';
$result = mysqli_query($db, $query) or die(mysqli_error($db));

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>'. $row['PRODUCT_CODE'].'</td>';
    echo '<td>'. $row['NAME'].'</td>';
    echo '<td>'. $row['QTY_STOCK'].'</td>';
    echo '<td>'. $row['CNAME'].'</td>';
    echo '<td>'. $row['DATE_STOCK_IN'].'</td>';

    echo '</tr> ';
}
?>

					</tbody>



				</table>
			</div>
		</div>
	</div>



	<?php
include'../includes/footer.php';
?>