<html>
    <head>
        <title>Display the cancellation details</title>
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

<div id="display">The cancelled tickets:</div><br/><br/>
<?php
session_start();
$conn = mysqli_connect("localhost","root","","railway");

$sqlget="SELECT *FROM cancellation";
$sqldata=mysqli_query($conn,$sqlget) or die('error getting');
echo "<table>";

echo "<tr><th>p_id</th><th>p_fname</th><th>tic_no</th><th>password</th><th>Reason</th></tr>";
while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
    echo "<tr><td>";
    echo $row['p_id'];
    echo "</td><td>";
    echo $row['p_fname'];
    echo "</td><td>";
    echo $row['tic_no'];
    echo "</td><td>";
    echo $row['password'];
    echo "</td><td>";
    echo $row['Reason'];
    echo "</td><td>";
}
echo "</table>";
?>