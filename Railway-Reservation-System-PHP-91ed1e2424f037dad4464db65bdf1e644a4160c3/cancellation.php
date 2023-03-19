<?php
session_start();
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$p_id=$_POST['p_id'];
$p_fname=$_POST['p_fname'];
$tic_no=$_POST['tic_no'];
$password=$_POST['password'];
$Reason=$_POST['Reason'];
$sql = "INSERT INTO cancellation (p_id, p_fname, tic_no, password , Reason) VALUES ('$p_id', '$p_fname', '$tic_no', '$password', '$Reason');";
if(mysqli_query($conn, $sql))
{  
	$message = "You have cancelled your booking";
	
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";

$status = "cancelled";
$sql1 = "UPDATE passengers SET p_fname='$status' WHERE p_id=$p_id";
if(mysqli_query($conn, $sql1))
{  
	$message = "You have cancelled your booking";
	
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
<TITLE>Cancel your booking</TITLE>
<LINK REL="STYLESHEET" HREF="STYLE.CSS">
<style type="text/css">
*	{
	color: #222;
}
#register_form	{
	background-color: white;
	width: 50%;
	margin: auto;
	border-radius: 40px;
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
<div id="register_form" align="center" height="200" width="200">
<FORM name="cancellation" method="post" action="cancellation.php" onsubmit="return validate()">
<TABLE border="0">
<CAPTION><FONT size="6" color="WHITE"><br/>Cancel your order?</FONT></CAPTION>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Passenger ID:</FONT></TD>
<TD><INPUT style="height:35px;" name="p_id" type="TEXT" placeholder="Enter your ID" size="40" maxlength="30" align="center" id="p_id"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Passenger name:</FONT></TD>
<TD><INPUT style="height:35px;"type="TEXT" name="p_fname" align = "center" size="40" maxlength="30" placeholder="Enter your full name" id="p_fname"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Ticket number:</FONT></TD>
<TD><INPUT style="height:35px;"type="TEXT" name="tic_no" align="center" size="40" maxlength="30" placeholder="Enter your ticket number" id="tic_no"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Password:</FONT></TD>
<TD><INPUT style="height:35px;"type="PASSWORD" name="password" size="40" maxlength="10" placeholder="Enter your password" id="password"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TR class="left">
<TD><FONT size="5" color="WHITE">Reason:</FONT></TD>
<TD><INPUT style="height:100px;"name="Reason" type="TEXT" id="Reason" placeholder="Mention the reason in less than 100 words" size="50" maxlength="30"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
</TR><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
</TABLE>
<P><INPUT TYPE="Submit" value="Submit" name="submit" id="submit" class="button" onclick="if(!this.form.tc.checked){alert('You must agree to the terms first.');return false}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<INPUT TYPE="Reset" value="Reset" id="reset" class="button"></P></FORM><br/>
<HR width="450" style="border-color: blue;display: block;" noshade>
<FORM action="login.php">
</FORM></div>
</BODY>
</HTML>