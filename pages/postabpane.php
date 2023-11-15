<!-- Tab panes -->
<div class="tab-content">
	<!-- 1ST TAB -->
	<div class="tab-pane fade in mt-2" id="cakes">
		<div class="row">
			<?php
      $lcid_branch = $_SESSION['BRANCH_ID'];
			$query = "SELECT * FROM product WHERE CATEGORY_ID=1 AND BRANCH_ID='$lcid_branch' GROUP BY PRODUCT_CODE ORDER BY PRODUCT_CODE ASC";
			$result = mysqli_query($db, $query);

			if ($result) :
			    if (mysqli_num_rows($result) > 0) :
			        while ($product = mysqli_fetch_assoc($result)) :
			            $redir = "pos.php";
			            if($lcid_branch == 20) {
			                $redir = "pos_pburgos.php";
			            }

			            //print_r($product);
			            ?>
			<div class="col-sm-4 col-md-4">
				<form method="post"
					action="<?php echo $redir; ?>?action=add&id=<?php echo $product['PRODUCT_ID']; ?>">
					<div class="products">
						<img src="../pages/img/<?php echo $product['PRO_IMG']; ?>"
							style="height:20vh; width:20vh;">
						<br>
						<br>
						<h5 class="text-dark font-weight-bold">
							<?php echo $product['NAME']; ?>
							</h6>
							<h6>₱
								<?php echo $product['PRICE']; ?>
							</h6>
							<h6>Stock:
								<?php echo $product['QTY_STOCK']; ?>
							</h6>




							<input type="text" name="quantity" class="form-control" value="" required />
							<input type="hidden" name="name"
								value="<?php echo $product['NAME']; ?>" />
							<input type="hidden" name="price"
								value="<?php echo $product['PRICE']; ?>" />
							<input type="hidden" name="prod_qty"
								value="<?php echo $product['QTY_STOCK']; ?>" />
							<input type="submit" name="addpos" style="margin-top:5px;" class="btn btn-danger"
								value="Add" />
					</div>
				</form>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<?php
			    endif;
			endif;
			?>
	<!-- 2ND TAB -->
	<div class="tab-pane fade in mt-2" id="cookies">
		<div class="row">
			<?php $lcid_branch = $_SESSION['BRANCH_ID'];
			$query = "SELECT * FROM product WHERE CATEGORY_ID=2 AND BRANCH_ID='$lcid_branch' GROUP BY PRODUCT_CODE ORDER BY PRODUCT_CODE ASC";
			$result = mysqli_query($db, $query);

			if ($result) :
			    if (mysqli_num_rows($result) > 0) :
			        while ($product = mysqli_fetch_assoc($result)) :
			            $redir = "pos.php";
			            if($lcid_branch == 20) {
			                $redir = "pos_pburgos.php";
			            }
			            ?>
			<div class="col-sm-4 col-md-4">
				<form method="post"
					action="<?php echo $redir; ?>?action=add&id=<?php echo $product['PRODUCT_ID']; ?>">
					<div class="products">

						<img src="../pages/img/<?php echo $product['PRO_IMG']; ?>"
							style="height:20vh; width:20vh;">
						<br>
						<br>
						<h5 class="text-dark font-weight-bold">
							<?php echo $product['NAME']; ?>
							</h6>
							<h6>₱
								<?php echo $product['PRICE']; ?>
							</h6>
							<h6>Stock:
								<?php echo $product['QTY_STOCK']; ?>
							</h6>




							<input type="text" name="quantity" class="form-control" value="" required />
							<input type="hidden" name="name"
								value="<?php echo $product['NAME']; ?>" />
							<input type="hidden" name="price"
								value="<?php echo $product['PRICE']; ?>" />
							<input type="hidden" name="prod_qty"
								value="<?php echo $product['QTY_STOCK']; ?>" />
							<input type="submit" name="addpos" style="margin-top:5px;" class="btn btn-danger"
								value="Add" />
					</div>
				</form>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<?php
			    endif;
			endif;
			?>

	<!-- 3RD TAB -->
	<div class="tab-pane fade in mt-2" id="pastries">
		<div class="row">
			<?php $lcid_branch = $_SESSION['BRANCH_ID'];
			$query = "SELECT * FROM product WHERE CATEGORY_ID=4 AND BRANCH_ID='$lcid_branch' GROUP BY PRODUCT_CODE ORDER BY PRODUCT_CODE ASC";
			$result = mysqli_query($db, $query);

			if ($result) :
			    if (mysqli_num_rows($result) > 0) :
			        while ($product = mysqli_fetch_assoc($result)) :
			            $redir = "pos.php";
			            if($lcid_branch == 20) {
			                $redir = "pos_pburgos.php";
			            }
			            ?>
			<div class="col-sm-4 col-md-4">
				<form method="post"
					action="<?php echo $redir; ?>?action=add&id=<?php echo $product['PRODUCT_ID']; ?>">
					<div class="products">

						<img src="../pages/img/<?php echo $product['PRO_IMG']; ?>"
							style="height:20vh; width:20vh;">
						<br>
						<br>
						<h5 class="text-dark font-weight-bold">
							<?php echo $product['NAME']; ?>
							</h6>
							<h6>₱
								<?php echo $product['PRICE']; ?>
							</h6>
							<h6>Stock:
								<?php echo $product['QTY_STOCK']; ?>
							</h6>




							<input type="text" name="quantity" class="form-control" value="" required />
							<input type="hidden" name="name"
								value="<?php echo $product['NAME']; ?>" />
							<input type="hidden" name="price"
								value="<?php echo $product['PRICE']; ?>" />
							<input type="hidden" name="prod_qty"
								value="<?php echo $product['QTY_STOCK']; ?>" />

							<input type="submit" name="addpos" style="margin-top:5px;" class="btn btn-danger"
								value="Add" />
					</div>
				</form>
			</div>
			<?php endwhile;
			    endif;
			endif;
			?>
		</div>
	</div>
	<!-- 4TH TAB -->
	<div class="tab-pane fade in mt-2" id="minicakes">
		<div class="row">
			<?php $lcid_branch = $_SESSION['BRANCH_ID'];
			$query = "SELECT * FROM product WHERE CATEGORY_ID=5 AND BRANCH_ID='$lcid_branch' GROUP BY PRODUCT_CODE ORDER BY PRODUCT_CODE ASC";
			$result = mysqli_query($db, $query);

			if ($result) :
			    if (mysqli_num_rows($result) > 0) :
			        while ($product = mysqli_fetch_assoc($result)) :
			            $redir = "pos.php";
			            if($lcid_branch == 20) {
			                $redir = "pos_pburgos.php";
			            }
			            ?>
			<div class="col-sm-4 col-md-4">
				<form method="post"
					action="<?php echo $redir; ?>?action=add&id=<?php echo $product['PRODUCT_ID']; ?>">
					<div class="products">
						<img src="../pages/img/<?php echo $product['PRO_IMG']; ?>"
							style="height:20vh; width:20vh;">
						<br>
						<br>
						<h5 class="text-dark font-weight-bold">
							<?php echo $product['NAME']; ?>
							</h6>
							<h6>₱
								<?php echo $product['PRICE']; ?>
							</h6>
							<h6>Stock:
								<?php echo $product['QTY_STOCK']; ?>
							</h6>




							<input type="text" name="quantity" class="form-control" value="" required />
							<input type="hidden" name="name"
								value="<?php echo $product['NAME']; ?>" />
							<input type="hidden" name="price"
								value="<?php echo $product['PRICE']; ?>" />
							<input type="hidden" name="prod_qty"
								value="<?php echo $product['QTY_STOCK']; ?>" />

							<input type="submit" name="addpos" style="margin-top:5px;" class="btn btn-danger"
								value="Add" />
					</div>
				</form>
			</div>
			<?php endwhile;
			    endif;
			endif;
			?>
		</div>
	</div>
	<!-- 5th TAB -->
	<div class="tab-pane fade in mt-2" id="slicecakes">
		<div class="row">
			<?php $lcid_branch = $_SESSION['BRANCH_ID'];
			$query = "SELECT * FROM product WHERE CATEGORY_ID=6 AND BRANCH_ID='$lcid_branch' GROUP BY PRODUCT_CODE ORDER BY PRODUCT_CODE ASC";
			$result = mysqli_query($db, $query);

			if ($result) :
			    if (mysqli_num_rows($result) > 0) :
			        while ($product = mysqli_fetch_assoc($result)) :
			            $redir = "pos.php";
			            if($lcid_branch == 20) {
			                $redir = "pos_pburgos.php";
			            }
			            ?>
			<div class="col-sm-4 col-md-4">
				<form method="post"
					action="<?php echo $redir; ?>?action=add&id=<?php echo $product['PRODUCT_ID']; ?>">
					<div class="products">

						<img src="../pages/img/<?php echo $product['PRO_IMG']; ?>"
							style="height:20vh; width:20vh;">
						<br>
						<br>
						<h5 class="text-dark font-weight-bold">
							<?php echo $product['NAME']; ?>
							</h6>
							<h6>₱
								<?php echo $product['PRICE']; ?>
							</h6>
							<h6>Stock:
								<?php echo $product['QTY_STOCK']; ?>
							</h6>




							<input type="text" name="quantity" class="form-control" value="" required />
							<input type="hidden" name="name"
								value="<?php echo $product['NAME']; ?>" />
							<input type="hidden" name="price"
								value="<?php echo $product['PRICE']; ?>" />
							<input type="hidden" name="prod_qty"
								value="<?php echo $product['QTY_STOCK']; ?>" />
							<input type="submit" name="addpos" style="margin-top:5px;" class="btn btn-danger"
								value="Add" />
					</div>
				</form>
			</div>
			<?php endwhile;
			    endif;
			endif;
			?>
		</div>
	</div>



</div>