<html>
    <head>
        <title>Display the ticket details</title>
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
        text-align: left;
        font-size: 30px;
	
    }
    table{
        margin:0 auto;
    }
    
        </style>
        
    </head>
<body>
<?php include("header.php") ?>

<div id="display">The Tickets list:</div><br/><br/>
<?php
session_start();
$conn = mysqli_connect("localhost","root","","railway");

$sqlget="SELECT *FROM ticket_details";
$sqldata=mysqli_query($conn,$sqlget) or die('error getting');
echo "<table>";

echo "<tr><th>tic_no</th><th>source</th><th>destination</th><th>fare</th><th>class_id</th></tr>";
while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
    echo "<tr><td>";
    echo $row['tic_no'];
    echo "</td><td>";
    echo $row['source'];
    echo "</td><td>";
    echo $row['destination'];
    echo "</td><td>";
    echo $row['fare'];
    echo "</td><td>";
    echo $row['class_id'];
    echo "</td><td>";
}
echo "</table>";
?>