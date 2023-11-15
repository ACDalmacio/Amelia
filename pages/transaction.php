<?php
include '../includes/connection.php';
include '../includes/sidebar.php';
$query = 'SELECT ID, t.TYPE
            FROM users u
            JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = ' . $_SESSION['MEMBER_ID'] . '';
$result = mysqli_query($db, $query) or die(mysqli_error($db));

while ($row = mysqli_fetch_assoc($result)) {
    $Aa = $row['TYPE'];

    if ($Aa == 'Cashier') {
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
		<a href="transac_print.php" target="_blank" class="btn float-right" style="color:white; background-color: hsl(356, 65%, 35%);">Print</a>
		<h4 class="m-2 font-weight-bold text-dark">Transaction</h4>
	</div>

	<div class="card-body">


		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width="25%">Transaction Number</th>
						<th>Branch Name</th>
						<th width="15%"># of Product</th>
						<th width="15%">Date</th>
						<th width="15%">Action</th>
					</tr>
				</thead>
				<tbody>

					<?php
          $query = 'SELECT *
              FROM transaction t
              ORDER BY TRANS_D_ID ASC';
$result = mysqli_query($db, $query) or die(mysqli_error($db));

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['TRANS_D_ID'] . '</td>';
    echo '<td>' . $row['NUMOFITEMS'] . '</td>';
    echo '<td>' . $row['DATE'] . '</td>';
    echo '<td align="center">
                              <a type="button" class="btn" style="color:white; background-color: hsl(356, 65%, 35%);" 
                              href="trans_view.php?action=edit & id=' . $row['TRANS_ID'] . '">
                              <i class="fas fa-fw fa-th-list"></i> View</a>
                           
                          </td>';
    echo '</tr> ';
}
?>

				</tbody>
			</table>
		</div>
	</div>
</div>

<?php
include '../includes/footer.php';
?>