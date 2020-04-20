<html>
<head>
<style>
	#box
	{
		width:350px;
		height:300px;
		margin:0px auto;
		border:2px solid black;
	}
	h2{
		text-align: center;
	}
	table{
		margin:0px auto;
	}
	.submit {
  background-color: #008CBA;
  border-radius: 8px;
  transition-duration: 0.4s;
  color: white;
  padding: 12px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;\
 }
  .amount{
  background-color: lightblue;
  color: white;
  border: 3px solid #555;
}
body {
  background-image: url("https://thumbs.dreamstime.com/z/dollar-rupee-balance-concept-d-rendering-isolated-white-background-91706636.jpg");
  background-repeat: no-repeat, repeat;
  background-color: #cccccc;
  background-size: 1550px 1000px;
}


</style>
</head>
 
<body>
 
<form align="center" action="#" method="post">
 
<div id="box">
<h2><center>CURRENCY CONVERTER</center></h2>
<table>
	<tr>
	<td>
		<b><font color="blue">Enter Amount:</b><input type="text" class="amount" name="amount"><br>
	</td>
</tr>
<tr>
<td>
	<br><center><font color="blue">From:<select name='cur1'>
	 <option value="USD" selected>US Dollar(USD)</option>
	 </select>
</td>
</tr>
<tr>
	<td>
	<br><center><font color="blue">To:<select name='cur2'>
	 <option value="INR" selected >Indian Rupee(INR)</option>
	 </select>
</td>
</tr>
<tr>
<td><center><br>
<input type='submit' class='submit'  name='submit' value="CovertNow"></center>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{	
$amount = $_POST['amount'];
$cur1 = $_POST['cur1'];
$cur2 = $_POST['cur2']; 
if($cur1=="USD" and $cur2=="INR")
{
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 76.50 . "</center>";
}
}
 
?>
 
</body>
</html>
