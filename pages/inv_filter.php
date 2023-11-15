<!--drp-down filter-->
<div class="table-responsive" id="main">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                     <th>Product Code</th>
                     <th>Name</th>
                     <th>Quantity</th>
                     <th>Category</th>
                     <th>Branch</th>
                     <th>Date Stock In</th>
                   </tr>
               </thead>
<tbody>
<div id="main">
<?php        
    
    $query = 'SELECT PRODUCT_ID, PRODUCT_CODE, NAME, QTY_STOCK, CNAME, COMPANY_NAME, DATE_STOCK_IN 
    FROM product p 
    join category c on p.CATEGORY_ID=c.CATEGORY_ID 
    join branches b on p.BRANCH_ID=b.BRANCH_ID 
    WHERE b.BRANCH_ID = 24
    GROUP BY PRODUCT_CODE';
       $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
           while ($row = mysqli_fetch_assoc($result)) {
  
                                 
                echo '<tr>';
                echo '<td>'. $row['PRODUCT_CODE'].'</td>';
                echo '<td>'. $row['NAME'].'</td>';
                echo '<td>'. $row['QTY_STOCK'].'</td>';
                echo '<td>'. $row['CNAME'].'</td>';
                echo '<td>'. $row['COMPANY_NAME'].'</td>';
                echo '<td>'. $row['DATE_STOCK_IN'].'</td>';
                     
                echo '</tr> ';
                        }
?> 
                                    
                                </tbody>
                      </div>