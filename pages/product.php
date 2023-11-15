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
$sql = "SELECT DISTINCT CNAME, CATEGORY_ID FROM category order by CNAME asc";
$result = mysqli_query($db, $sql) or die("Bad SQL: $sql");

$aaa = "<select class='form-control' name='category' required>
        <option disabled selected hidden>Select Category</option>";
while ($row = mysqli_fetch_assoc($result)) {
    $aaa .= "<option value='" . $row['CATEGORY_ID'] . "'>" . $row['CNAME'] . "</option>";
}

$aaa .= "</select>";

?>
<!-- Include jQuery first -->
<!--script src="https://code.jquery.com/jquery-3.6.0.min.js"></script-->

<!-- Then include Bootstrap JS -->
<!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script-->

<!-- Include Bootstrap CSS -->
<!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"-->


<div class="card shadow mb-4" style="height:75vh;overflow-x:auto;">
	<div class="card-header y-3">
		<h4 class="m-2 font-weight-bold text-dark">Product&nbsp;<a href="#" data-toggle="modal" data-target="#aModal"
				type="button" class="btn text-white"
				style="border-radius: 11px; background-color: #BBA732;"><i class="fas fa-fw fa-plus"></i></a>
		</h4>
	</div>
	<div class="card-body">



		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Product Code</th>
						<th>Name</th>
						<th>Price</th>
						<th>Category</th>
						<th>Size</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

					<?php
          $query = 'SELECT PRODUCT_ID, PRODUCT_CODE, NAME, PRICE, CNAME, DATE_STOCK_IN
    FROM product p join category c on p.CATEGORY_ID=c.CATEGORY_ID 
    GROUP BY PRODUCT_CODE';
$result = mysqli_query($db, $query) or die(mysqli_error($db));

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    //echo '<td>'. $row['PRO_IMG'].'</td>';
    //echo '<td> <img class="img-responsive img-thumbnail" src="../pages/img/' . $row['PRO_IMG'] . '"
                //</td>';
    echo '<td>' . $row['PRODUCT_CODE'] . '</td>';
    echo '<td>' . $row['NAME'] . '</td>';
    echo '<td>' . $row['PRICE'] . '</td>';
    echo '<td>' . $row['CNAME'] . '</td>';
    echo '<td align="center"> <div class="btn-group">
                              <a type="button" class="btn text-white" style="background-color: hsl(356, 65%, 35%);" href="pro_searchfrm.php?action=edit & id=' . $row['PRODUCT_CODE'] . '"><i class="fas fa-fw fa-list-alt"></i> Details</a>
                            <div class="btn-group">
                              <a type="button" class="btn text-white dropdown no-arrow" data-toggle="dropdown" style="color:white; background-color: hsl(356, 65%, 35%); border-radius: 0px;">
                              ... <span class="caret"></span></a>
                            <ul class="dropdown-menu text-center" role="menu">
                                <li>
                                  <a type="button" class="btn btn-warning bg-gradient-warning btn-block" name="edit" style="border-radius: 0px;" href="pro_edit.php?action=edit & id=' . $row['PRODUCT_ID'] . '">
                                    <i class="fas fa-fw fa-edit"></i> Edit
                                  </a>
                                </li>

                                <li>
                                  <a type="button" class="btn btn-danger bg-gradient-danger btn-block" style="border-radius: 0px;" href="pro_del.php?delete_id=' . $row['PRODUCT_ID'] . '">
                                    <i class="fas fa-fw fa-trash"></i> Delete
                                  </a>
                                </li>
                            </ul>
                            </div>
                          </div> </td>';
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

<!-- Product Modal-->
<div class="modal fade" id="aModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form role="form" method="post" action="pro_transac.php?action=add" enctype="multipart/form-data">
					<div class="form-group">
						<!--input type="file" name="image" id="image"-->
					</div>
					<div class="form-group">
						<input class="form-control" placeholder="Product Code" name="prodcode" required>
					</div>
					<div class="form-group">
						<input class="form-control" placeholder="Name" name="name" required>
					</div>
					<!--div class="form-group">
             <textarea rows="5" cols="50" texarea" class="form-control" placeholder="Description" name="description" required></textarea>
           </div-->

					<div class="form-group">
						<input type="number" min="1" max="999999999" class="form-control" placeholder="Quantity"
							name="quantity" required>
					</div>

					<div class="form-group">
						<input class="form-control" placeholder="Size" name="name" required>
					</div>

					<div class="form-group">
						<input type="number" min="1" max="9999999999" class="form-control" placeholder="Price"
							name="price" required>
					</div>
					<div class="form-group">
						<?php
            echo $aaa;
?>
					</div>
					<div class="form-group">
						 
					</div>
					<div class="form-group">
						<input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control"
							placeholder="Date Stock In" name="datestock" required>
					</div>
					<hr>
					<button type="submit" name="insert" id="insert" class="btn btn-success"><i
							class="fa fa-check fa-fw"></i>Save</button>
					<button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				</form>
			</div>
		</div>
	</div>
</div>