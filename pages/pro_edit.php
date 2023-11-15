<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
  $query = 'SELECT ID, t.TYPE
            FROM users u
            JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
  $result = mysqli_query($db, $query) or die (mysqli_error($db));
  
  while ($row = mysqli_fetch_assoc($result)) {
            $Aa = $row['TYPE'];
                   
  if ($Aa=='Cashier'){
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
$result = mysqli_query($db, $sql) or die ("Bad SQL: $sql");

$opt = "<select class='form-control' name='category' required>
        <option value='' disabled selected hidden>Select Category</option>";
  while ($row = mysqli_fetch_assoc($result)) {
    $opt .= "<option value='".$row['CATEGORY_ID']."'>".$row['CNAME']."</option>";
  }

$opt .= "</select>";

$sql2 = "SELECT DISTINCT BRANCH_ID, COMPANY_NAME FROM branches order by COMPANY_NAME asc";
$result2 = mysqli_query($db, $sql2) or die ("Bad SQL: $sql2");

  $query = 'SELECT PRODUCT_ID,PRODUCT_CODE, NAME, QTY_STOCK, DATE_STOCK_IN, PRO_IMG , PRICE, c.CNAME 
  FROM product p 
  join category c on p.CATEGORY_ID=c.CATEGORY_ID 
  WHERE PRODUCT_ID ='.$_GET['id'];
  $result = mysqli_query($db, $query) or die(mysqli_error($db));
    while($row = mysqli_fetch_array($result))
    {   
      $zz = $row['PRODUCT_ID'];
      $zzz = $row['PRODUCT_CODE'];
      $A = $row['NAME'];
      $C = $row['PRICE'];
      $D = $row['CNAME'];
      $E = $row['DATE_STOCK_IN'];
      $file = $row['PRO_IMG'];
    }
      $id = $_GET['id'];


$bra = "<select class='form-control' name='branches'>
        <option disabled selected>Select Branch</option>";
  while ($row = mysqli_fetch_assoc($result2)) {
    $bra .= "<option value='".$row['BRANCH_ID']."'>".$row['COMPANY_NAME']."</option>";
  }

$bra .= "</select>";
?>

  <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-success">
            <div class="card-header py-3">
            <a href="product.php?action=add" class="close"><i class="fas fa-flip-horizontal fa-fw fa-share"></i></a>
              <h4 class="m-2 font-weight-bold text-dark">Edit Product</h4>
            </div>
            <div class="card-body">

            <form role="form" method="post" action="pro_edit1.php">
             <div class="form-group row text-left font-weight-bold text-dark">
             <div class="col-sm-3" style="padding-top: 5px;">
                Upload Photo:
                </div>
                  <input type="file" name="image" id="image" value="<?php echo $file?>">
              </div>

              <input type="hidden" name="id" value="<?php echo $zz; ?>" />
              <div class="form-group row text-left font-weight-bold text-dark">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Product Code:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Product Code" name="prodcode" value="<?php echo $zzz; ?>" readonly>
                </div>
              </div>
              <div class="form-group row text-left font-weight-bold text-dark">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Product Name:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Product Name" name="prodname" value="<?php echo $A; ?>" required>
                </div>
              </div>
              
              <div class="form-group row text-left font-weight-bold text-dark">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Price:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Price" name="price" value="<?php echo $C; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left font-weight-bold text-dark">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Category:
                </div>
                <div class="col-sm-9">
                   <?php
                    echo $opt;
                   ?>
                </div>
              </div>
              <div class="form-group row text-left font-weight-bold text-dark">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Branch:
                </div>
                <div class="col-sm-9">
                   <?php
                    echo $bra;
                   ?>
                </div>
              </div>

              <div class="form-group row text-left font-weight-bold text-dark">
              <div class="col-sm-3" style="padding-top: 5px;">
                Date Stock In:
              </div>
              <div class="col-sm-9">
                 <input type="datet" class="form-control" placeholder="Date Stock In" name="datestock" value="<?php echo $E; ?>" required>
               </div>
                </div>
              <hr>

                <button type="submit" name="insert" id="insert" class="btn btn-warning btn-block"><i class="fa fa-edit fa-fw"></i>Update</button>    
              </form>  
            </div>
          </div></center>

          <script>
          $(document).ready(function(){
            $('#insert').click(function(){
              var image_name = $('#image').val();
              if (image_name =='')
              {
                alert("Please Select Image");
                return false;
              }
              else{
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                  alert('Invalid Image File');
                  $('#image').val('');
                  return false;
                }
              }
            });
          });
          </script>

<?php
include'../includes/footer.php';
?>