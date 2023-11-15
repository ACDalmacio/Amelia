<!DOCTYPE html>
<?php
include'../includes/connection.php';

?>
<html lang="en">
	<head>
		<style>	
		.table {
			width: 100%;
			margin-bottom: 20px;
		}	
		
		.table-striped tbody > tr:nth-child(odd) > td,
		.table-striped tbody > tr:nth-child(odd) > th {
			background-color: #f9f9f9;
		}
		
		@media print{
			#print {
				display:none;
			}
		}
		@media print {
			#PrintButton {
				display: none;
			}
		}
		
		@page {
			size: auto;   /* auto is the initial value */
			margin: 10;  /* this affects the margin in the printer settings */
		}
	</style>
	</head>
<body>
	<h2>Transaction</h2>
	<br /> <br /> <br /> <br />
	<b style="color:blue;">Date Prepared:</b>
	<?php
		$date = date("Y-m-d", strtotime("+6 HOURS"));
		echo $date;
	?>
	<br /><br />
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Transaction #</th>
				<th>Name</th>
				<th>Quantity</th>
				
            </tr>
		</thead>
		<tbody>
		<?php
                include'../includes/connection.php';
                $query = 'SELECT *, COMPANY_NAME
				FROM transaction t join branches b on t.BRANCH_ID=b.BRANCH_ID GROUP BY TRANS_D_ID';
                $result = mysqli_query($db, $query) or die (mysqli_error($db));

                while ($row = mysqli_fetch_assoc($result)) {

					
			?>
			
			<tr>
				<td style="text-align:center;"><?php echo $row['TRANS_D_ID']?></td>
				<td style="text-align:center;"><?php echo $row['COMPANY_NAME']?></td>
				<td style="text-align:center;"><?php echo $row['NUMOFITEMS']?></td>
				
			</tr>
			
			<?php
                }
			?>
		</tbody>
	</table>
	<center><button id="PrintButton" onclick="PrintPage()">Print</button></center>
</body>
<script type="text/javascript">
	function PrintPage() {
		window.print();
	}
	document.loaded = function(){
		
	}
	window.addEventListener('DOMContentLoaded', (event) => {
   		PrintPage()
		setTimeout(function(){ window.close() },750)
	});
</script>
</html>


