<?php
include('db.php');
require_once("component.php");

// get the post records
/*  $txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];  */

// database insert SQL code
//$sql = "INSERT INTO `contact` (`Id`, `name`, `email`, `Phone`, `Message`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
//$rs = mysqli_query($con, $sql);

//if($rs){	echo "Contact Records Inserted";}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	*{
		box-sizing:border-box;
	}
    html {
        background-color: #f5f5f5;
        text-transform: capitalize;
        letter-spacing: 1.5px;
    }

  table {
        border: none;
        border-color: white;
		box-shadow: 2px 4px 7px rgba(0, 0, 0.1, 0.1);
        transition: all 0.3s ease 0s;
    }

	
	.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}
.bottom-right:hover {
	
   background-color:red;
}
	.grid-container {
		
  display: grid;
  grid-template-columns:  auto auto auto auto auto ;
  background-color: white;
 
}
.grid-item {
  background-color: white;

}
.card{
	position:relative;
	margin: 2em auto;
	font-family:Arial,Helvetica,sans-serif;
	width:min-content;
	text-align:center;
	border-radius: .5rem;
    box-shadow:1px 1px 10px #111;
	padding:1em 1.5em;
}
.card > span
  {
	font-weight: 800;
	font-size:14;
  }
 .card img
 {
	max-width:150px;

 }

 table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style><script src="chart_js/chart.js"></script>
<body>

	<table>
		<tr>
			<td>Year :</td>
			
			<td>Total Customer :</td>
			
			<td>Total kg sales:</td>
			
			<td>Total Price :</td>
        </tr>
	    
	<?php 
		$sql1 = "SELECT distinct YEAR(date),count(name),sum(totalkg),sum(totalprice) from SALE GROUP BY YEAR(DAte);";
 		$arr =array("null");
		$arr1=array("null");
		$result=mysqli_query($con,$sql1);
		while($row = mysqli_fetch_assoc($result))
		{
			getproduct($row['YEAR(date)'],$row['count(name)'],$row['sum(totalkg)'],$row['sum(totalprice)']);
			array_push($arr,$row['YEAR(date)']);
			array_push($arr1,$row['sum(totalprice)']);
		}
		
	?>
	
	</table>
	<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
	<canvas id="myChart1" style="width:100%;max-width:600px"></canvas><br>
  <h1>pie Chart</h1>
	<canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
  <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>

<script>
	
var xValues = [<?php for($i=0;$i<count($arr);$i++){echo $arr[$i].",";}?>];
var yValues = [<?php for($i=0;$i<count($arr1);$i++){echo $arr1[$i].",";}?>];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:166696}}],
    }
  }
});







var xValues = [<?php for($i=0;$i<count($arr);$i++){echo $arr[$i].",";}?>];
var yValues = [<?php for($i=0;$i<count($arr1);$i++){echo $arr1[$i].",";}?>];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart1", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    }
  }
});









var xValues = [<?php for($i=0;$i<count($arr);$i++){echo "'".$arr[$i]."',";}?>];
var yValues = [<?php for($i=0;$i<count($arr1);$i++){echo $arr1[$i].",";}?>];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart2", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "World Wide Wine Production 2018"
    }
  }
});


var xValues = [<?php for($i=0;$i<count($arr);$i++){echo "'".$arr[$i]."',";}?>];
var yValues = [<?php for($i=0;$i<count($arr1);$i++){echo $arr1[$i].",";}?>];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart3", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "World Wide Wine Production 2018"
    }
  }
});
</script>
</body>
</html>