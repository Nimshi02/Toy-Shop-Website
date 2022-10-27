<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="stype.css">
</head>
<body><form action="forlogin.php" method="post">
	<table width="968" height="598" border="0" align="center">
  <tbody>
    <tr>
      <td width="383" height="126"><img src="Logos/ASLOGO.png" width="328" height="134" alt=""/></td>
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
    <tr>
		  <td height="322" colspan="2" style="text-align: center"><img src="Logos/ASLOGO.png" width="410" height="191" alt=""/></td>
    </tr>
	  <tr>
		  <td height="65" colspan="2" style="text-align: center">
		    <p>
		      <input type="text" name="txt1" id="txt1" required>
		    </p>
	      <p><b><h2>Username</h2></b> </p></td>
    </tr>
	  <tr>
	    <td height="65" colspan="2" style="text-align: center"><p>
	      <input type="password" name="password" id="password" required>
	    </p>
        <p><b><h2>Password</h2></b></p></td></tr>
	  <tr>
	    <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Login">
	      <input type="reset" name="reset" id="reset" value="Cancel"><br>
			<lable><a href="Register.html">Forget Password?</a></lable>
	    </td></tr>
	  </tbody>
	  </table>
	</form>
</body>
</html>