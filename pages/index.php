<style>
	a {
		text-decoration: none;
		display: inline-block;
		padding: 2px 4px;
	}

	a:hover {

		color: black;
	}

	.previous {

		color: black;
	}

	.next {

		color: black;
	}

	.round {
		border-radius: 50%;
	}



	#filters {
		margin-left: 10%;
		margin-top: 2%;
	}
</style>


<!--?php
session_start();
$lcid_branch = $_SESSION['BRANCH_ID'];

if($lcid_branch == 20) {
    ?>
<script>
	alert("Restricted Page! You will be redirected to POS");
	window.location = "pos_pburgos.php";
</script>
<--?php
}
?-->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<?php
include '../includes/connection.php';
include '../includes/sidebar.php';
?>





	<?php
	include '../includes/footer.php';
?>