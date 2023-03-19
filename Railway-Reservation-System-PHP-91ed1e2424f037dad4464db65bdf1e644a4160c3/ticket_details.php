<?php
session_start();
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$tic_no=$_POST['tic_no'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$fare=$_POST['fare'];
$class_id=$_POST['class_id'];
$sql = "INSERT INTO `ticket_details` (`tic_no`, `source`, `destination`, `fare`, `class_id`) VALUES ('$tic_no', '$source', '$destination', '$fare', '$class_id');";
	if(mysqli_query($conn, $sql))
{  
	$message = "You have been successfully entered the details!";
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<HTML>
<HEAD>
<TITLE>Your ticket details</TITLE>
<LINK REL="STYLESHEET" HREF="STYLE.CSS">
<style type="text/css">
*	{
	color: #222;
}
#register_form	{
	background-color: white;
	width: 40%;
	margin: auto;
	border-radius: 25px;
	border: 2px solid blue; 
	margin-top: 25px;
}
#nav	{
	color: white;
}
#logintext	{
	margin-top: 10px;
}
#login	{
	margin-top: 10px;
	margin-bottom: 20px;
}
</style>
<SCRIPT src="validation.js"></SCRIPT>
</HEAD>
<BODY  background="img/wallpaper1.jpg" link="white" alink="white" vlink="white" width="1024" height="768">
<?php include("header.php") ?>
<div id="ticket details" align="center" height="200" width="200">
<FORM name="details" method="post" action="ticket_details.php" onsubmit="return validate()">
<TABLE border="0">
<CAPTION><FONT size="6" color="WHITE"><br/>Enter your ticket details:</FONT></CAPTION>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Ticket number:</FONT></TD>
<TD><INPUT style="height:35px;"name="tic_no" type="TEXT" placeholder="Enter your ticket no properly" size="30" maxlength="30" align="center" id="tic_no"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Source:</FONT></TD>
<TD><INPUT style="height:35px;"type="TEXT" name="source" align="center" size="30" maxlength="30" placeholder="Enter your sorce point" id="source"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Destination:</FONT></TD>
<TD><INPUT style="height:35px;"type="TEXT" name="destination" align="center" size="30" maxlength="30" placeholder="Enter your destination point" id="destination"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Fare:</FONT></TD>
<TD><INPUT style="height:35px;"type="FLOAT" name="fare" size="30" maxlength="10" placeholder="Enter your fare charge paid" id="fare"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Class-ID:</FONT></TD>
<TD><INPUT style="height:35px;"name="class_id" type="TEXT" id="class_id" placeholder="Enter your class id" size="30" maxlength="30" ></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
</TR><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
</TABLE>
<P><INPUT TYPE="Submit" value="Submit" name="submit" id="submit" class="button" onclick="if(!this.form.tc.checked){alert('You must agree to the terms first.');return false}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<INPUT TYPE="Reset" value="Reset" id="reset" class="button"></P></FORM><br/>
<HR width="450" style="border-color: blue;display: block;" noshade>
</FORM></div>
</BODY>
</HTML>