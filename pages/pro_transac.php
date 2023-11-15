<?php
include'../includes/connection.php';
?>
          <!-- Page Content -->
          <div class="col-lg-12">
            <?php
              $pc = $_POST['prodcode'];
              $name = $_POST['name'];
              $qty = $_POST['quantity'];
              $pr = $_POST['price']; 
              $cat = $_POST['category'];
              $dats = $_POST['datestock']; 
        
              switch($_GET['action']){
                case 'add':  

                  
                //$path = "../pages/img/";
                //$file_parts = pathinfo($_FILES["image"]["name"]);
                //$file_path = $name.date('Ymd').'prodimg.'.$file_parts['extension'];
               // move_uploaded_file($_FILES["image"]["tmp_name"], $path.$file_path);
               // $filex = $file_path;

                // for($i=0; $i < $qty; $i++){
                  $sql="SELECT * FROM product WHERE PRODUCT_CODE='$pc'";
                      $result = mysqli_query($db,$sql);
                      $resultCheck=mysqli_num_rows($result);
                      if($resultCheck > 0 ) {
                      //do something to notify that there's a duplicate record

                      echo '<script>alert("Warning! Duplicate record found.");</script>';
                      } else {

                      $query = "INSERT INTO product
                              (PRODUCT_ID, PRODUCT_CODE, NAME, QTY_STOCK, PRICE, CATEGORY_ID, DATE_STOCK_IN)
                              VALUES (Null,'{$pc}','{$name}','{$qty}',{$pr},{$cat},'{$dats}')";
                    mysqli_query($db,$query)or die ('Error in updating product in Database '.$query);
                      }


                    
                    //}
                    
                break;
              }
            ?>
              <script type="text/javascript">window.location = "product.php";</script>
          </div>

<?php
include'../includes/footer.php';
?>