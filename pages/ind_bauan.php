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


#filters{
  margin-left: 10%;
  margin-top: 2%;
}
</style>
<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?><?php 

                $query = 'SELECT ID, t.TYPE
                          FROM users u
                          JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
                $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
                while ($row = mysqli_fetch_assoc($result)) {
                          $Aa = $row['TYPE'];
                   
if ($Aa=='Cashier'){
           
             ?>    <script type="text/javascript">
                      //then it will be redirected
                      alert("Restricted Page! You will be redirected to POS");
                      window.location = "pos.php";
                  </script>
             <?php   }
                         
           
}   
           // Line Graph
$sql=$db->query("
SELECT *,MONTH(DATE) as MONTH ,SUM(QTY) as TOTAL_QTY
FROM `transaction_details`
WHERE YEAR(DATE)=YEAR(CURRENT_TIMESTAMP())
AND EMPLOYEE= 'Bauan'
GROUP BY MONTH(DATE)
");

// Pie Chart
$sql2=$db->query("
SELECT b.NAME,SUM(a.QTY) as TOTAL_QTY 
FROM transaction_details as a
LEFT JOIN product as b
ON a.PRODUCTS= b.NAME
WHERE EMPLOYEE= 'Bauan'
GROUP BY a.PRODUCTS
LIMIT 5
");
// Recent Sales
$sql3=$db->query("
SELECT *,SUM(QTY) as total_qty, SUM(QTY*PRICE) as total_price
FROM `transaction_details`
WHERE MONTH(DATE)=MONTH(CURRENT_TIMESTAMP())
AND EMPLOYEE= 'Bauan'
GROUP BY GRANDTOTAL 
");




// Line Graph
$data = [];
$checker=0;
$i=0;
while($row = $sql->fetch_assoc()) {
  // array_push($data, array($row['PRODUCTS'],$row['TOTAL_QTY']));
  if($row['MONTH']==1){
    array_push($data, array($row['PRODUCTS'],$row['TOTAL_QTY'],'January'));
  }else if($row['MONTH']==2){
    array_push($data, array($row['PRODUCTS'],$row['TOTAL_QTY'],'February'));
  }else if($row['MONTH']==3){
    array_push($data, array($row['PRODUCTS'],$row['TOTAL_QTY'],'March'));
  }else if($row['MONTH']==4){
    array_push($data, array($row['PRODUCTS'],$row['TOTAL_QTY'],'April'));
  }else if($row['MONTH']==5){
    array_push($data, array($row['PRODUCTS'],$row['TOTAL_QTY'],'May'));
  }else if($row['MONTH']==6){
    array_push($data, array($row['PRODUCTS'],$row['TOTAL_QTY'],'June'));
  }else if($row['MONTH']==7){
    array_push($data, array($row['PRODUCTS'],$row['TOTAL_QTY'],'July'));
  }else if($row['MONTH']==8){
    array_push($data, array($row['PRODUCTS'],$row['TOTAL_QTY'],'August'));
  }else if($row['MONTH']==9){
    array_push($data, array($row['PRODUCTS'],$row['TOTAL_QTY'],'September'));
  }else if($row['MONTH']==10){
    array_push($data, array($row['PRODUCTS'],$row['TOTAL_QTY'],'October'));
  }else if($row['MONTH']==11){
    array_push($data, array($row['PRODUCTS'],$row['TOTAL_QTY'],'November'));
  }else if($row['MONTH']==12){
    array_push($data, array($row['PRODUCTS'],$row['TOTAL_QTY'],'December'));
  }
$i++;
$checker++;
}

// Pie Chart
$pie_data = [];
$i=0;
while($row2 = $sql2->fetch_assoc()) {
  array_push($pie_data, array($row2['NAME'],$row2['TOTAL_QTY']));
$i++;
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

      <!--?php 
                $select= 'SELECT COMPANY_NAME 
                FROM branches';
                $res = mysqli_query($db, $select);
                ?>
                Select Branch:
                
                <select id="branch" onchange="selectCOMPANY_NAME()"-->
                  <!--?php while( $rows = mysqli_fetch_array($res)){ 
                  ?>
                  <option value="<?php echo $rows['COMPANY_NAME']; ?>"><?php echo $rows['COMPANY_NAME']; ?></option-->
                <!--?php
                  }
                  ?>      
                </select-->

                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Select Branch
                    </a>
                    <h3 class="text-center text-dark">Bauan Branch</h3>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="index.php">All Branches</a>
                      <a class="dropdown-item" href="ind_main.php">Ann's Home Main Branch</a>
                      <a class="dropdown-item" href="ind_bauan.php">Ann's Home Bauan Branch</a>
                      <a class="dropdown-item" href="ind_kumintang.php">Ann's Home Kumintang Branch</a>
                      <a class="dropdown-item" href="ind_pburgos.php">Ann's Home P.Burgos Branch</a>
                      <a class="dropdown-item" href="ind_sm.php">Ann's Home SM Batangas Branch</a>

                    </div>
                </div>
<!--filter php-->




  <?php
  if($checker!=0) { ?>
    <div class="container">
    <div class="row">
  <!-- Line Graph -->
    <div class="col-sm-6 mt-3">
        <div class="card">
            <h5 class="text-center font-weight-bold pt-2">Monthly Sales</h5>
          <canvas id="myChart"></canvas>
        </div>
      </div>
      <!-- Pie Chart -->
      <div class="col-sm-6 mt-3">
        <div class="card">
            <h5 class="text-center font-weight-bold pt-2">Top 5 Selling Products</h5>
            <div style="width: 50%; margin-left:25%">
            <canvas id="01pie"></canvas>
            </div>
        </div>
      </div>
    </div>
    <!-- Recent Sales -->
  
    <div class="col-sm mt-3">
    
      <h3 class="text-center font-weight-bold">
      Recent Sales this <?php echo date('F')?>
  </h3>

      <table class="table table-hover">
        <tr class="table">
          <th style="background-color: hsl(39, 92%, 74% );">PRODUCTS</th>
          <th style="background-color: hsl(39, 92%, 74% );">QUANTITY</th>
          <th style="background-color: hsl(39, 92%, 74% );">PRICE</th>
          <th style="background-color: hsl(39, 92%, 74% );">TOTAL PRICE</th>
        </tr>
        
          <?php
          while($row3 = $sql3->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row3['PRODUCTS']?></td>
            <td><?php echo $row3['total_qty']?></td>
            <td><?php echo $row3['PRICE']?></td>
            <td><?php echo $row3['total_price']?></td>
            </tr>
        <?php }
          ?>
          
        
      </table>
    </div>
  </div>
 <?php }else{
  ?>
  <h1 class="text-center text-danger">NO STATISTICS YET</h1>
<?php }
  ?>

<!-- Line Graph -->
    <script>
var datas = <?php echo json_encode($data); ?>;
var datas2 = <?php echo json_encode($pie_data); ?>;
</script>
<script src="../js/lineGraph.js"></script> 
<!-- Pie Graph -->
      <script>
        //SETUP
        
        var pieData=[];
        var pieQty=[];
        var cur=0;
        datas2.forEach(function (a, i) {
          pieData.push(datas2[cur][0]);
          pieQty.push(datas2[cur][1]);
          cur++;
          });
        const data2 = {
        labels: pieData,
        datasets: [{
          data: pieQty,
          backgroundColor: [
            'rgb(168, 232, 144)',
            'rgb(245, 223, 153)',
            'rgb(228, 174, 86)',
            'rgb(95, 113, 97)',
            'rgb(162, 205, 205)',
            'rgb(255, 247, 106)',
            'rgb(245, 163, 26)',
            'rgb(32, 117, 97)',
          ],
          hoverOffset: 4
        }]
      };
      //CONFIG
      const config2 = {
      type: 'pie',
      data: data2,
    }; 
      </script>

<script>
//Render

    const myChart2 = new Chart(
      document.getElementById('01pie'),
      config2
    );
  </script>

<?php
include'../includes/footer.php';
?>