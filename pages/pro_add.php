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

$opt = "<select class='form-control' name='category'>
        <option disabled selected>Select Category</option>";
  while ($row = mysqli_fetch_assoc($result)) {
    $opt .= "<option value='".$row['CATEGORY_ID']."'>".$row['CNAME']."</option>";
  }

$opt .= "</select>";
?>
          <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Add Product</h4>
            </div>
            <a href="product.php?action=add" type="button" class="btn btn-primary bg-gradient-primary">Back</a>
            <div class="card-body">
                      <div class="table-responsive">



                        <form role="form" method="post" action="pro_transac.php?action=add">
                            <div class="form-group">
                              <input type="file" name="image" id="image">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Product Code" name="prodcode" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Name" name="name" required>
                            </div>
                           <div class="form-group">
                              <input type="number"  min="1" max="999999999" class="form-control" placeholder="Quantity" name="quantity" required>
                            </div>
                            <div class="form-group">
                              <input type="number"  min="1" max="9999999999" class="form-control" placeholder="Price" name="price" required>
                            </div>
                            <div class="form-group">
                              <?php
                                echo $opt;
                              ?>
                            </div>

                            <div class="form-group">
                              <input class="form-control" placeholder="Size" name="name" required>
                            </div>
                            
                            <div class="form-group">
                              <input type="datet" class="form-control" placeholder="Date Stock In" name="datestock" required>
                            </div>
                            <hr>
                            <button type="submit" name="insert" id="insert" class="btn btn-success btn-block"><i class="fa fa-check fa-fw"></i>Save</button>
                            <button type="reset" class="btn btn-danger btn-block"><i class="fa fa-times fa-fw"></i>Reset</button>
                            
                        </form>  







                      </div>
            </div>
          </div></center>

        <!--script>
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
          </script-->
        
<?php
include '../includes/footer.php';
?>
