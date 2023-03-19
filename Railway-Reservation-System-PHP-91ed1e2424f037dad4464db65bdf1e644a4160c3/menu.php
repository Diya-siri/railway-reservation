<?php
session_start();
?>
<html>
<head>
<title>Drop-down Menu</title>
</head>
<body>
<style>
form {
  width: 50%;
  margin: 0 auto;
  text-align: center;
}
label {
  font-size: 1.5em;
  font-weight: bold;
}
select {
  font-size: 1em;
  padding: 0.5em;
  margin-top: 1em;
}
</style>
<?php include("header.php") ?>
<BODY  background="img/bg10.jpg" link="white" alink="white" vlink="white" width="1024" height="768"> 
<form>
  <label for="menu">Select the details which you want to view:</label>
  <select id="menu" name="menu" onchange="location = this.value;">
    <option value="">Select </option>
    <option value="ad_passenger.php">passengers details</option>
    <option value="ad_cancel.php">cancellation details</option>
    <option value="ad_ticket.php">ticket details</option>
    
  </select>
</form>
</body>
</html>
