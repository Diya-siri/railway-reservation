<?php
session_start();
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$Source=$_POST['Source'];
$Destination=$_POST['Destination'];
$No_of_seats=$_POST['No_of_seats'];
$Class_type=$_POST['Class_type'];
$login_password=$_POST['login_password'];
$date=$_POST['date'];
$sql = "INSERT INTO book_a_ticket (Source, Destination, No_of_seats,Class_type,login_password,date) VALUES ('$Source', '$Destination', '$No_of_seats', '$Class_type', '$login_password', '$date');";
	if(mysqli_query($conn, $sql))
{  
	$message = "You have booked you ticket sucessfully!";
	header("Location: ticket_details.php");
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
<TITLE>Book on Indian Railways</TITLE>
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
<div id="Book_ a ticket" align="center" height="200" width="200">
<FORM name="details" method="post" action="booktkt.php" onsubmit="return validate()">
<TABLE border="0">
<CAPTION><FONT size="6" color="WHITE"><br/>Book your ticket!</FONT></CAPTION>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Starting point:</FONT></TD>
<TD><INPUT style="height:35px;"name="Source" type="TEXT" placeholder="Start from" size="40" maxlength="30" align="center" id="Source"></TD>
<HR width="450" style="border-color: blue;display: block;" noshade>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Destination point:</FONT></TD>
<TD><INPUT style="height:35px;" type="TEXT" name="Destination" align="center" size="40" maxlength="30" placeholder="Reach till" id="Destination"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Number of seats:</FONT></TD>
<TD><INPUT style="height:35px;" type="TEXT" name="No_of_seats" align="center" size="40" maxlength="30" placeholder="Enter the number of seats" id="No_of_seats"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Type of class:</FONT></TD>
<TD><INPUT style="height:35px;" type="FLOAT" name="Class_type" size="40" maxlength="10" placeholder="Enter the type of class" id="Class_type"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Login password:</FONT></TD>
<TD><INPUT style="height:35px;" name="login_password" type="PASSWORD" id="login_password" placeholder="Confirm your password" size="40" maxlength="30" ></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Date of reservation:</FONT></TD>
<TD><INPUT style="height:35px;" type="FLOAT" name="date" size="40" maxlength="10" placeholder="Enter the date" id="date"></TD>
</TR><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
</TABLE>
<P><INPUT TYPE="Submit" value="Submit" name="submit" id="submit" class="button" onclick="if(!this.form.tc.checked){alert('You must agree to the terms first.');return false}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<INPUT TYPE="Reset" value="Reset" id="reset" class="button"></P></FORM><br/>
<HR width="450" style="border-color: blue;display: block;" noshade>
</FORM></div>
</BODY>
</HTML>
<!-- <BODY  background="img/bg1.jpg" link="white" alink="white" vlink="white" width="1024" height="768">

<div id="bookticket" align="center" height="200" width="200">
<FORM name="book a ticket" method="post" action="booktkt.php" onsubmit="return validate()">
<TABLE border="0">
<CAPTION><FONT size="6" color="WHITE"><br/>Book your ticket!:</FONT></CAPTION>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">First name:</FONT></TD>
<TD><INPUT name="fname" type="TEXT" placeholder="Enter your first name" size="30" maxlength="30" align="center" id="fname"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Last name:</FONT></TD>
<TD><INPUT type="TEXT" name="lname" align="center" size="30" maxlength="30" placeholder="Enter your last name" id="lname"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Age:</FONT></TD>
<TD><INPUT type="TEXT" name="age" align="center" size="30" maxlength="3" placeholder="Enter age" id="age"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Mobile Number:</FONT></TD>
<TD><INPUT type="TEXT" name="mob" size="30" maxlength="10" placeholder="Enter your mobile number" id="mob"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TR class="left">
<TD><FONT size="5" color="WHITE">Gender:</FONT></TD>
<TD>&nbsp;&nbsp;
<INPUT type="radio" name="gender" value="Male" align="center" id="gender">Male
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="gender" value="Female" align="center" id="gender">Female
</TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">E-Mail ID:</FONT></TD>
<TD><INPUT name="email" type="TEXT" id="email" placeholder="Enter your E-Mail ID" size="30" maxlength="30"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Password:</FONT></TD>
<TD><INPUT type="PASSWORD" name="pw" size="30"  id="pw"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Confirm Password:</FONT></TD>
<TD><INPUT type="PASSWORD" name="cpw" size="30" id="cpw"></TD>
</TR><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
</TABLE>
<P><INPUT TYPE="Submit" value="Submit" name="submit" id="submit" class="button" onclick="if(!this.form.tc.checked){alert('You must agree to the terms first.');return false}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<INPUT TYPE="Reset" value="Reset" id="reset" class="button"></P></FORM><br/>
<HR width="450" style="border-color: blue;display: block;" noshade>
<FORM action="login.php">
<P align="CENTER" id="logintext"><FONT size="6" color="white" face="Arial">
Already have an account with us?<BR/></FONT></FONT>
<INPUT TYPE="submit" value="Login" id="login" class="button">
</P>
</FORM></div>
</BODY>
</HTML> -->