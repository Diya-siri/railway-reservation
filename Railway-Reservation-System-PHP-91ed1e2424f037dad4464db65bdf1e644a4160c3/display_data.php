<html>
    <head>
        <title>Display the station details and train details</title>
        <style type="text/css">
            table{
                border:2px solid red;
                background-color:#FFC;

            }
            th{
                border-bottom:5px solid #000;
            }
            td{
                border-bottom:2px solid #666;
            }
            html { 
		background: url(img/bg10.jpg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
    #display{
        text-align: center;
        font-size: 30px;
	
    }
    table{
        margin:0 auto;
    }
    
        </style>
        
    </head>
<body>

<?php include("header.php") ?>
<div id="display">The trains list:</div><br/>
<?php
$conn = mysqli_connect("localhost","root","","railway");

$sqlget="SELECT *FROM trains";
$sqldata=mysqli_query($conn,$sqlget) or die('error getting');
echo "<table>";

echo "<tr><th>t_no</th><th>t_name</th><th>t_source</th><th>t_destination</th><th>t_type</th><th>t_status</th><th>no_of_seats</th><th>t_duration</th><th></th></tr>";
while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
    echo "<tr><td>";
    echo $row['t_no'];
    echo "</td><td>";
    echo $row['t_name'];
    echo "</td><td>";
    echo $row['t_source'];
    echo "</td><td>";
    echo $row['t_destination'];
    echo "</td><td>";
    echo $row['t_type'];
    echo "</td><td>";
    echo $row['t_status'];
    echo "</td><td>";
    echo $row['no_of_seats'];
    echo "</td><td>";
    echo $row['t_duration'];
    echo "</td><td>";
}
echo "</table>";
?>
<br/><br/>


<div id="display">The stations list:</div><br/>
<?php
session_start();
$conn = mysqli_connect("localhost","root","","railway");

$sqlget="SELECT *FROM station";
$sqldata=mysqli_query($conn,$sqlget) or die('error getting');
echo "<table>";

echo "<tr><th>s_no</th><th>s_name</th><th>s_no_of_platforms</th><th>sid</th></tr>";
while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
    echo "<tr><td>";
    echo $row['s_no'];
    echo "</td><td>";
    echo $row['s_name'];
    echo "</td><td>";
    echo $row['s_no_of_platforms'];
    echo "</td><td>";
    echo $row['sid'];
    echo "</td><td>";
}
echo "</table>";
?>