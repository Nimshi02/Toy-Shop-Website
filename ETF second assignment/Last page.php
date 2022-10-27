<!doctype html>
<?php
if(isset($_POST["submit"]))
{
	$name=$_POST["txtpname"];
	$txtqty=$_POST["txtqty"];
	$txtcontact=$_POST["txtcontact"];
	$txtprice=$_POST["txtprice"];
	$mail=$_POST["txtmail"];
	$txtaddress=$_POST["textarea"];
	$uname=$_POST["txtname"];
	$tot=bcmul($txtqty,$txtprice);
}

?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="stype.css">
</head>

<body>
	<table width="968" height="140" border="0" align="center">
  <tbody>
    <tr>
      <td width="383" height="136"><img src="Logos/ASLOGO.png" width="328" height="134" alt=""/></td>
		<td width="575"><div>
			<ul>
			<li><a href="Home page.html"><b>Home</b></a></li>
			<li><a href="About.html"><b>About</b></a></li><li><div class="dropdown" align="left">
  					<button class="dropbtn"><b>Products</b></button>
  					<div class="dropdown-content">
    				<a href="Buliding blocks.php">Buliding blocks</a>
    				<a href="Toy vehicles.php">Toy vehicles</a>
    				<a href="Dolls.php">Dolls</a>
				<a href="Animals.php">Animals</a>
				<a href="Woden toys.php">Woden toys</a>
  					</div></div></li>
			<li><a href="Login.php"><b>Login</b></a></li>
			<li><a href="Register.html"><b>SignUp</b></a></li>
		 </ul></div>
	  </td></tr></tbody></table>
<h1 style="text-align: center">Thank You For Your Order</h1>
<form id="form1" name="form1" method="post">
  <table width="618" height="754" border="0" align="center">
    <tbody>
      <tr>
        <td width="90" style="font-size: 18px">Name</td>
        <td width="160"><input type="text" name="txtname" id="txtname" value="<?php echo @$uname?>"></td>
      </tr>
      <tr>
        <td style="font-size: 18px">Address</td>
        <td><textarea name="txtaddress" id="txtaddress"><?php echo @$txtaddress?></textarea></td>
      </tr>
      <tr>
        <td style="font-size: 18px">Contact</td>
        <td><input type="text" name="txtcontact" id="txtcontact" value="<?php echo @$txtcontact?>"></td>
      </tr>
      <tr>
        <td style="font-size: 18px">Email</td>
        <td><input type="text" name="txtemail" id="txtemail" value="<?php echo @$mail?>"></td>
      </tr>
      <tr>
        <td colspan="2" align="center" style="font-size: 24px"><b>Order Details</b></td>
      </tr>
		<tr>
			<td style="font-size: 18px">Product Name</td>
			<td><input type="text" name="txtpname" id="txtpname" value="<?php echo @$name?>" readonly></td>
		</tr>
		<tr>
			<td style="font-size: 18px">Price for each</td>
			<td><input type="text" name="txtqp" id="txtqp" value="<?php echo @$txtprice?>" readonly></td>
		</tr>
		<tr>
			<td style="font-size: 18px">Quantity</td>
			<td><input type="text" name="txtqty" id="txtqty" value="<?php echo @$txtqty?>"></td>
		</tr>
		<tr>
			<td style="font-size: 18px">Total Price</td>
			<td><input type="text" name="txtprice" id="txtprice" value="<?php echo @$tot?>"></td>
		</tr>
    </tbody>
  </table>
</form>
<p style="text-align: center">&nbsp;</p>
</body>
</html>