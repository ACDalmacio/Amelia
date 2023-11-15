<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?>

<?php 

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
                  </script><?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?>
             <?php   }
                         
           
} 

//bale eto po ay ininput ko lang po manually hehe, di po kasi ako marunong mag ajax at jquery po
//eto po dapat ay monthly sales po ng bawat branches po, para makita alin yung may pinaka madaming sales po
$barchart = array( 
	array("y" => 34946,"label" => "Main Branch" ),
	array("y" => 7775,"label" => "Bauan Branch" ),
	array("y" => 7225,"label" => "Kumintang Branch" ),
	array("y" => 11050,"label" => "P.Burgos Branch" ),
	array("y" => 13450,"label" => "SM Batangas Branch" )
);
 

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	axisY: {
		title: "Sales",
		includeZero: true,
    prefix: "P",
		suffix:  "k"
	},
	data: [{
		type: "bar",
		yValueFormatString: "P#,##0K",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($barchart, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>


  
  <!--BAR CHART-->
  <div class="col-sm mt-3">
  <h3 class="text-center text-dark font-weight-bold">
    Sales this <?php echo date('F')?>
  </h3>
  </div>

<div id="chartContainer" style="height: 350px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
const labels = Utils.months({count: 7});
const data = {
  labels: labels,
  datasets: [{
    label: 'My First Dataset',
    data: [65, 59, 80, 81, 56, 55, 40],
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
  }]
};
</script>
<script>
const config = {
  type: 'bar',
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};
</script>