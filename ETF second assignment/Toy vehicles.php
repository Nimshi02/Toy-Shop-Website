<?php session_start();
if(!isset($_SESSION["uname"]))
{
	header('Location:login.php');
}
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Toy vehicles</title>
<link rel="stylesheet" type="text/css" href="stype.css">
	<link rel="stylesheet" type="text/css" href="cssForValues.css">
</head>

<body style="text-align: center; font-size: 30px;">
	<form action="buy.php" method="post">
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
	  </td>
    </tr>
	 <tr><td colspan="2">
	<ul><li><img src="Vehicles/s-l400 (12).jpg" width="358" height="276"/><br><input type="text" name="n1" id="n1" value="Hot wheel gift pack"><br>Rs.<input name="test1" type="text" id="test1"value="1900" size="6px" readonly><br><input type="submit" id="btn1" name="btn1" value="buy"></li>
	<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</li>
	<li><img src="Vehicles/s-l400 (13).jpg" width="329" height="276"><br><input type="text" name="n2" id="n2" value="Fire department bus"><br>Rs.<input name="test2" type="text" id="test2"value="500" size="6px" readonly><br><input type="submit" id="btn2" name="btn2" value="buy"></li></ul></td></tr>
	  
		<tr> <td colspan="2"><ul>
		<li><img src="Vehicles/download.webp" width="329" height="276"><br><input type="text" name="n3" id="n3" value="British Airway plane" >
		  <br>Rs.<input name="test3" type="text" id="test3" value="3000" size="6px" readonly><br><input type="submit" id="btn3" name="btn3" value="buy"></li>
			<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><img src="Vehicles/shopping.webp" width="288" height="277"><br><input type="text" name="n4" id="n4" value="Jet bule fun plane">
		  <br>Rs.<input name="test4" type="text" id="test4" value="1000" size="6px" readonly><br><input type="submit" id="btn4" name="btn4" value="buy"></li>
			</ul></td></tr>
	  <tr><td>&nbsp;&nbsp;&nbsp;</td></tr>
	  <tr><td colspan="2"><ul>
		<li><img src="Vehicles/download (1).webp" width="304" height="271"><br><input type="text" name="n5" id="n5" value="US vought corsair"><br>Rs.<input name="test5" type="text" id="test5" value="1500" size="6px" readonly><br><input type="submit" id="btn5" name="btn5" value="buy"></li>
		  <li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><img src="Vehicles/41JyvHgzOBL._AC_SR300,300.jpg" width="285" height="278"><br><input type="text" name="n6" id="n6" value="Toy train"><br>Rs.<input name="test6" type="text" id="test6" value="3000" size="6px" readonly><br><input type="submit" id="btn6" name="btn6" value="buy"></li>
		</ul></td></tr>
	
	  </tbody>
	 </table>
		</form>
</body>
</html>