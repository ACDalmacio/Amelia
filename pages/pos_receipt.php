<!DOCTYPE html>
<?php
include'../includes/connection.php';
require_once('session.php');
  confirm_logged_in();
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
<center>
	<div class="card">
		<div class="col-md-3">
		<div class="card-body">
<h4>Ann's Home Cake's and Pastries</h4>
<h4> <?php echo  $_SESSION['FIRST_NAME']. ' '.$_SESSION['LAST_NAME'] ;?></h4>
<h4> Transaction No.: <?php echo $tid;?> </h4>



	</div>
	</div>
	</div>

	</center>
	
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

