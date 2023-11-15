<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?><?php

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
<?php   }
}
?>

<div class="card shadow mb-4" style="height:75vh;overflow-x:auto;">
	<div class="card-header py-3">
		<h4 class="m-2 font-weight-bold text-dark">Employee&nbsp;<a href="#" data-toggle="modal"
				data-target="#employeeModal" type="button" class="btn" style="color:white; background-color: #BBA732;"
				style="border-radius: 0px;"><i class="fas fa-fw fa-plus"></i></a></h4>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width="30%">First Name</th>
						<th>Last Name</th>
						<th>Role</th>
						<th width="20%">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
            $query = 'SELECT EMPLOYEE_ID, FIRST_NAME, LAST_NAME, j.JOB_TITLE FROM employee e JOIN job j ON e.JOB_ID=j.JOB_ID';
$result = mysqli_query($db, $query) or die(mysqli_error($db));
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>'. $row['FIRST_NAME'].'</td>';
    echo '<td>'. $row['LAST_NAME'].'</td>';
    echo '<td>'. $row['JOB_TITLE'].'</td>';

    echo '<td align="right"> <div class="btn-group">
                              <a type="button" class="btn" style="color:white; background-color: hsl(356, 65%, 35%);" href="emp_searchfrm.php?action=edit & id='.$row['EMPLOYEE_ID'] . '"><i class="fas fa-fw fa-list-alt"></i> Details</a>
                            <div class="btn-group">
                              <a type="button" class="btn dropdown no-arrow" style="color:white; background-color: hsl(356, 65%, 35%);" data-toggle="dropdown" style="color:white;">
                              ... <span class="caret"></span></a>
                            <ul class="dropdown-menu text-center" role="menu">
                                <li>
                                  <a type="button" class="btn btn-warning bg-gradient-warning btn-block" style="border-radius: 0px; " href="emp_edit.php?action=edit & id='.$row['EMPLOYEE_ID']. '">
                                    <i class="fas fa-fw fa-edit"></i> Edit
                                  </a>
                                </li>

                                <li>
                                  <a type="button" class="btn btn-danger bg-gradient-danger btn-block" style="border-radius: 0px;" href="emp_del.php?delete_id='.$row['EMPLOYEE_ID']. '">
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
include'../includes/footer.php';
?>