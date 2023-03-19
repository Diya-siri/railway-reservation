<html>
    <head>
        <title>Passenger details</title>
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

<div id="display">The passengers list:</div><br/><br/>
<?php
session_start();
$conn = mysqli_connect("localhost","root","","railway");

$sqlget="SELECT *FROM passengers";
$sqldata=mysqli_query($conn,$sqlget) or die('error getting');
echo "<table>";

echo "<tr><th>p_id</th><th>p_fname</th><th>p_lame</th><th>p_age</th><th>p_contact</th><th>p_gender</th><th>email</th><th>password</th><th>t_no</th></tr>";
while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
    echo "<tr><td>";
    echo $row['p_id'];
    echo "</td><td>";
    echo $row['p_fname'];
    echo "</td><td>";
    echo $row['p_lname'];
    echo "</td><td>";
    echo $row['p_age'];
    echo "</td><td>";
    echo $row['p_contact'];
    echo "</td><td>";
    echo $row['p_gender'];
    echo "</td><td>";
    echo $row['email'];
    echo "</td><td>";
    echo $row['password'];
    echo "</td><td>";
    echo $row['t_no'];
    echo "</td><td>";
}
echo "</table>";
?>