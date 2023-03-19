<?php
session_start();
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$ad_name=$_POST['ad_name'];
$ad_userid=$_POST['ad_userid'];
$ad_pass=$_POST['ad_pass'];
$sql = "INSERT INTO admin_details (ad_name,ad_userid,ad_pass) VALUES ('$ad_name', '$ad_userid', '$ad_pass');";
	if(mysqli_query($conn, $sql))
{  
	$message = "You have been successfully logged in";
	header("Location: menu.php");
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
<TITLE>admin login on Indian Railways</TITLE>
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
<BODY  background="img/bg10.jpg" link="white" alink="white" vlink="white" width="1024" height="768">
<?php include("header.php") ?>

<div id="register_form" align="center" height="200" width="200">
<FORM name="admin" method="post" action="admin.php" onsubmit="return validate()">

<TABLE border="0">

<CAPTION><FONT size="6" color="WHITE"><br/>Confirm your details:</FONT></CAPTION>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Name:</FONT></TD>
<TD><INPUT style="height:35px;"name="ad_name" type="TEXT" placeholder="Enter your name" size="30" maxlength="30" align="center" id="ad_name"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">User id:</FONT></TD>
<TD><INPUT style="height:35px;"type="TEXT" name="ad_userid" align="center" size="30" maxlength="30" placeholder="Enter your userid" id="ad_userid"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Password:</FONT></TD>
<TD><INPUT style="height:35px;"type="PASSWORD" name="ad_pass" align="center" size="30" maxlength="3" placeholder="Enter password" id="ad_pass"></TD>
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