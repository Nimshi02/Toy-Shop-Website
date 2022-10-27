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
<title>Animals</title>
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
	<ul><li><img src="Animals/s-l400 (5).jpg" width="358" height="276"/><br><input type="text" name="n1" id="n1" value="Brown tiger teddy toy"><br>Rs.<input name="test1" type="text" id="test1"value="2900" size="6px" readonly><br><input type="submit" id="btn1" name="btn1" value="buy"></li>
	<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</li>
	<li><img src="Animals/s-l400 (6).jpg" width="344" height="277"><br><input type="text" name="n2" id="n2" value="Clockwork zoo kids toy">
	  <br>Rs.<input name="test2" type="text" id="test2"value="1000" size="6px" readonly><br><input type="submit" id="btn2" name="btn2" value="buy"></li></ul></td></tr>
	  
		<tr> <td colspan="2"><ul>
		<li><img src="Animals/s-l400 (7).jpg" width="294" height="225"><br><input type="text" name="n3" id="n3" value="soft wild animal toy">
		  <br>Rs.<input name="test3" type="text" id="test3" value="1600" size="6px" readonly><br><input type="submit" id="btn3" name="btn3" value="buy"></li>
			<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><img src="Animals/s-l400 (8).jpg" width="302" height="229"><br><input type="text" name="n4" id="n4" value="Koala figure wild animal">
		  <br>Rs.<input name="test4" type="text" id="test4" value="1600" size="6px" readonly><br><input type="submit" id="btn4" name="btn4" value="buy"></li>
			</ul></td></tr>
	  <tr><td>&nbsp;&nbsp;&nbsp;<td></tr>
	  <tr><td colspan="2"><ul>
		<li><img src="Animals/s-l400 (9).jpg" width="244" height="180"><br><input type="text" name="n5" id="n5" value="Mini wild safari zoo animals">
		  <br>Rs.<input name="test5" type="text" id="test5" value="2000" size="6px" readonly><br><input type="submit" id="btn5" name="btn5" value="buy"></li>
		  <li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; </li>
		<li><img src="Animals/s-l400 (10).jpg" width="241" height="186"><br><input type="text" name="n6" id="n6" value="Smuggle giraffe">
		  <br>Rs.<input name="test6" type="text" id="test6" value="3000" size="6px" readonly><br><input type="submit" id="btn6" name="btn6" value="buy"></li>
		</ul></td></tr>
	
	  </tbody>
	 </table>
		</form>
</body>
</html>