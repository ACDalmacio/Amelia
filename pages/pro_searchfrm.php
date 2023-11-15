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
<center>
	<div class="card shadow mb-3 col-xs-12 col-md-6 border-bottom-danger">
		<div class="card-header py-3">
			<a href="product.php?action=add" class="close"> <i class="fas fa-flip-horizontal fa-fw fa-share"></i></a>
			<h4 class="m-2 font-weight-bold text-dark">Product's Detail</h4>
		</div>
		<div class="card-body">
			<?php
      $query = "
                SELECT PRODUCT_ID, PRODUCT_CODE, NAME, PRO_IMG, BRANCH_ID, COUNT(`QTY_STOCK`) AS 'QTY_STOCK', PRICE, c.CNAME FROM product p join category c on p.CATEGORY_ID=c.CATEGORY_ID WHERE PRODUCT_CODE ='{$_GET['id']}'
                ";
$result = mysqli_query($db, $query) or die(mysqli_error($db));
while ($row = mysqli_fetch_array($result)) {
    $zz = $row['PRODUCT_ID'];
    $zzz = $row['PRODUCT_CODE'];
    $i = $row['NAME'];
    $c = $row['PRICE'];
    $d = $row['CNAME'];
    $branchid = $row['BRANCH_ID'];
    $path = "img/";
    $img = $row['PRO_IMG'];

    $sql = "SELECT COMPANY_NAME from branches where BRANCH_ID = '$branchid'";
    $resultx = mysqli_query($db, $sql) or die(mysqli_error($db));
    $rowx = mysqli_fetch_array($resultx);
    $branchname = $rowx['COMPANY_NAME'];

    switch ($branchname) {
        case "Anns Home Main Branch":
            $employee = "Anns Home";
            break;
        case "Anns Home Bauan Branch":
            $employee = "Bauan Branch";
            break;

        case "Anns Home P.Burgos Branch":
            $employee = "P.Burgos Branch";
            break;

        case "Anns Home SM Batangas Branch":
            $employee = "SM Batangas Branch";
            break;

        case "Anns Home Kumintang Branch":
            $employee = "Kumintang Branch";
            break;
    }
}
$id = $_GET['id'];
?>


			<img src="<?php echo $path . $img; ?>"
				style="height:30vh;width:30vh;">

			<hr>

			<div class="form-group row text-left">
				<div class="col-sm-4  text-dark">
					<h5>
						Product Code<br>
					</h5>
				</div>
				<div class="col-sm-8">
					<h5>
						: <?php echo $zzz; ?><br>
					</h5>
				</div>
			</div>

			<div class="form-group row text-left">
				<div class="col-sm-4 text-dark ">
					<h5>
						Product Name<br>
					</h5>
				</div>
				<div class="col-sm-8">
					<h5>
						: <?php echo $i; ?> <br>
					</h5>
				</div>
			</div>




			<div class="form-group row text-left">
				<div class="col-sm-4 text-dark ">
					<h5>
						Price<br>
					</h5>
				</div>
				<div class="col-sm-8">
					<h5>
						: <?php echo $c; ?><br>
					</h5>
				</div>
			</div>

			<div class="form-group row text-left">
				<div class="col-sm-4 text-dark">
					<h5>
						Category<br>
					</h5>
				</div>
				<div class="col-sm-8">
					<h5>
						: <?php echo $d; ?><br>
					</h5>
				</div>
			</div>



			<div class="form-group row text-left">
				<div class="col-sm-4 text-dark">
					<h5>
						Branch<br>
					</h5>
				</div>
				<div class="col-sm-8">
					<h5>
						: <?php echo $branchname; ?><br>
					</h5>
				</div>
			</div>

			<div class="form-group row text-left">
				<div class="col-sm-4 text-dark">
					<h5>
						Employee<br>
					</h5>
				</div>
				<div class="col-sm-8">
					<h5>
						: <?php echo $employee; ?><br>
					</h5>
				</div>
			</div>

			<a href="#" class="btn btn-outline-danger"
				onclick="confirmdelprod('<?php echo $zz;?>')">Delete</a>

		</div>

</center>




<?php
include '../includes/footer.php';
?>