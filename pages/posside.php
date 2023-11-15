<style>
	::placeholder {
		font-style: italic;
		font-size: 12px;
		color: mintcream;
		padding: 0px;
	}


	#hidden-print-div {
		display: none;
	}

	@media print {

		html,
		body {
			height: 100%;
		}
	}
</style>
<!-- CHANGE MODAL -->
<div class="card-body col-md-12">


	<?php
    if (!empty($_SESSION['pointofsale'])) :

        $total = 0;

        foreach ($_SESSION['pointofsale'] as $key => $product) :
            ?>
	<?php
                    $total = $total + ($product['quantity'] * $product['price']);
            $lessvat = ($total / 1.12) * 0.12;
            $netvat = ($total / 1.12);
            $addvat = ($total / 1.12) * 0.12;





        endforeach;

        ?>


	<?php
        //  echo "Today's date is : ";
        $today = date("Y-m-d");
        $rno = date("mdGis");
        // echo $today;
        ?>


	<input type="hidden" name="date" value="<?php echo $today; ?>">

	<div class="form-group row mb-2" style="display:none;">

		<div class="col-sm-5 text-left text-primary py-2">
			<h6>
				Subtotal
			</h6>
		</div>
		<div class="col-sm-7">
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">₱</span>
				</div>
				<input type="text" class="form-control text-right "
					value="<?php echo number_format($total, 2); ?>"
					readonly name="subtotal">
			</div>
		</div>

	</div>
	<div class="form-group row mb-2" style="display:none;">

		<div class="col-sm-5 text-left text-primary py-2">
			<h6>
				Less VAT
			</h6>
		</div>

		<div class="col-sm-7">
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">₱</span>
				</div>
				<input type="text" class="form-control text-right "
					value="<?php echo number_format($lessvat, 2); ?>"
					readonly name="lessvat">
			</div>
		</div>

	</div>
	<div class="form-group row mb-2" style="display:none;">

		<div class="col-sm-5 text-left text-primary py-2">
			<h6>
				Net of VAT
			</h6>
		</div>

		<div class="col-sm-7">
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">₱</span>
				</div>
				<input type="text" class="form-control text-right "
					value="<?php echo number_format($netvat, 2); ?>"
					readonly name="netvat">
			</div>
		</div>

	</div>
	<div class="form-group row mb-2" style="display:none;">

		<div class="col-sm-5 text-left text-primary py-2">
			<h6>
				Add VAT
			</h6>
		</div>

		<div class="col-sm-7">
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">₱</span>
				</div>
				<input type="text" class="form-control text-right "
					value="<?php echo number_format($addvat, 2); ?>"
					readonly name="addvat">
			</div>
		</div>

	</div>

	<div class="col-sm-7 float-right">
		<h6 class="font-weight-bold py-2">
			Total
		</h6>
		<div class="input-group mb-2">
			<div class="input-group-prepend">
				<span class="input-group-text">₱</span>
			</div>
			<input type="text" class="form-control text-right "
				value="<?php echo $total; ?>" readonly name="total"
				id="tot">

		</div>

		<div class="col-sm-20 mb-2">
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">₱</span>
				</div>
				<input class="form-control" id="txtNumber" onkeypress="return isNumberKey(event)" type="text"
					name="cash" placeholder="ENTER CASH" required>
			</div>


		</div>
		<?php endif; ?>
		<button type="button" class="btn btn-block btn-danger" onclick="getchange(); ">SUBMIT</button>

		<button type="submit" style="display:none;" id="sbutton"></button>

		<!-- Modal PAYMENT PROCESSING -->
		<div class="modal fade" id="posMODAL" tabindex="-1" role="dialog" aria-labelledby="POS" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle">SUMMARY</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group row text-left mb-2">

							<div class="col-sm-12 text-center">
								<h3 class="py-0">
									GRAND TOTAL:
								</h3>

								<h3 id="totalx" class="font-weight-bold py-3 bg-light">

									<?php echo number_format($total, 2); ?>
								</h3>
							</div>

							<div class="col-sm-12 text-center">
								<h3 class="py-0" onkeypress="return isNumberKey(event)">
									CHANGE:
								</h3>
								<h3 id="changex" class="font-weight-bold py-3 bg-light">
									₱
									<?php echo number_format(0, 2); ?>
								</h3>
							</div>


						</div>





					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success btn-block">PROCEED TO PAYMENT</button>
						<button type="button" class="btn btn-success btn-block" onclick="printreceipt()">PRINT
							RECEIPT</button>
					</div>
				</div>
			</div>
		</div>


		</form>
	</div> <!-- END OF CARD BODY -->

</div>



<script>
	function getchange() {


		var lntotal = $('#tot').val();
		var lncash = $('#txtNumber').val();
		var ntotal = lntotal.replace(',', '');


		if (parseInt(ntotal) > parseInt(lncash)) {
			alert("Insufficient cash !");

		} else {

			//var lnchange = parseInt(lncash) - parseInt(lntotal);
			//$("#posRe").modal("show");
			printreceipt();
			var lnchange = parseInt(lncash) - parseInt(ntotal);

			$('#change').text(lnchange.toFixed(2));
			$('#changex').text(lnchange.toFixed(2));
			//$('#change').text(lncash + " " + parseInt(ntotal));

		}




	}

	function printreceipt() {
		$("#receiptMODAL").modal("show");
	}
</script>




<div class="modal fade" id="receiptMODAL" tabindex="-1" role="dialog" aria-labelledby="POS" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">




			<div class="modal-body" id="print_area">
				<br>
				<center>
					<h5> Ann's Home Cake & Pastries <br>
						<?php echo  $_SESSION['FIRST_NAME'] . ' ' . $_SESSION['LAST_NAME']; ?>
					</h5>
				</center>

				<h5>Date : <strong><?php echo $today; ?></strong>
				</h5>
				<h5>Receipt No : <strong><?php echo $rno; ?> </h5>
				<hr>
				<h5>Items : </h5>

				<?php
                $noitem = 0;
	foreach ($_SESSION['pointofsale'] as $key => $product) :
	    ?>
				<strong>
					<?php echo $product['name']; ?>
					*
					<?php echo $product['quantity']; ?>
					<br>

					- ₱
					<?php echo number_format($product['quantity'] * $product['price'], 2); ?></strong>
				<br>
				<?php
	        $noitem++;
	endforeach;
	?>
				<br>
				<hr>
				<h6> No of Items : <strong>
						<?php echo $noitem; ?></strong> </h6>
				<h6>Subtotal Amt : <strong> ₱
						<?php echo number_format($total, 2); ?></strong>
				</h6>
				<h6>Less Vat :<strong> ₱
						<?php echo number_format($lessvat, 2); ?>
					</strong></h6>
				<h6>Net of Vat : <strong> ₱
						<?php echo number_format($netvat, 2); ?>
					</strong> </h6>
				<h6>Add Vat : <strong> ₱
						<?php echo number_format($addvat, 2); ?>
					</strong></h6>
				<h6>Total : <strong> ₱
						<?php echo number_format($total, 2); ?>
					</strong></h6>
				<h6>Change : ₱ <strong id="change"></strong> </h6>



				<center>
					<hr>

					Thank You !. Come Again. God Bless
				</center>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-block" onclick="printdiv();">PRINT RECEIPT</button>
			</div>

			<script>
				function printdiv() {

					var divToPrint = document.getElementById('print_area');

					var newWin = window.open('', 'Print-Window');

					newWin.document.open();

					newWin.document.write(
						'<html><body onload="window.print()" style="height:auto;width:20vh;margin-left:40vw; padding:10px;border-style: dotted;">' +
						divToPrint.innerHTML + '</body></html>');

					newWin.document.close();

					setTimeout(function() {
						$("#sbutton").click();
						newWin.close();
					}, 10);

				}
			</script>
		</div>
	</div>
</div>