<?php session_start();
if(!isset($_SESSION["uname"]))
{
	header('Location:login.php');
}
	?>
<!doctype html>
<html>
	<head>
		<script>
		function Changecon()
		{
		var xhttp= new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
	if (this.readyState == 4 && this.status == 200)
		{
			document.getElementById("txtname").innerHTML=this.responseText();
		}
		else
			{
				document.getElementById("txtname").innerHTML=Error;
			}
	
	xhttp.open("GET","page.php?txt="+document.getElementById("txtname").value,true);
	xhttp.send();
		
		}
		</script>
		
<?php
 if(isset($_POST["btn1"]))
	{
		$price=$_POST["test1"];
	 $name=$_POST["n1"];
 	}
 if(isset($_POST["btn2"]))
 {
	 $price=$_POST["test2"];
	 $name=$_POST["n2"];
 }
if(isset($_POST["btn3"]))
 {
	 $price=$_POST["test3"];
	$name=$_POST["n3"];
 }
if(isset($_POST["btn4"]))
 {
	 $price=$_POST["test4"];
	$name=$_POST["n4"];
 }
if(isset($_POST["btn5"]))
 {
	 $price=$_POST["test5"];
	$name=$_POST["n5"];
 }
if(isset($_POST["btn6"]))
 {
	 $price=$_POST["test6"];
	$name=$_POST["n6"];
 }
try {
    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
	$uname=$_SESSION["uname"];
	$filter=['uname'=>$uname];
	$options=[];
    $query = new MongoDB\Driver\Query($filter,$options); 
    $rows = $mng->executeQuery("projectdb.user", $query);
    foreach ($rows as $row) {
		 
	?>

<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="stype.css">
	
	
</head>

<body>
<table width="968" height="682" border="0" align="center">
	  <tbody>
	    <tr>
	     <td width="383" height="126"><img src="Logos/ASLOGO.png" width="328" height="134" alt=""/></td>
	      <td><ul>
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
		 </ul></td>
        </tr>
	    <tr>
	      <td colspan="2"><form id="form1" name="form1" action="Last page.php" method="post">
	        <table width="582" height="632" border="0" align="center" >
	          <tbody>
	            <tr>
	              <td colspan="2" style="text-align: center"><h1>Order page</h1></td>
                </tr>
	            <tr>
	              <td width="226" height="72" style="font-size: 24px">Receivers Name</td>
	              <td width="209" style="font-size: 24px"><input type="text" name="txtname" id="txtname" value="<?php echo $row->fname?>"/> 
					  </td><td width="133">
	                  <input type="button" value="Change" onclick="Changecon()" ></button></td>
                </tr>
	            <tr>
	              <td height="72" style="font-size: 24px">Receivers Address</td>
	              <td><textarea name="textarea" id="textarea"><?php echo $row->address?></textarea>
	                <span style="font-size: 24px"></span></td>
                </tr>
				   <tr>
	              <td height="73" style="font-size: 24px">Email</td>
	              <td style="font-size: 24px"><input type="text" name="txtmail" id="txtmail" value="<?php echo $row->email?>"></td>
                </tr>
	            <tr>
	              <td height="73" style="font-size: 24px">Quantity</td>
	              <td style="font-size: 24px"><input type="text" name="txtqty" id="txtqty"></td>
                </tr>
				   <tr>
	              <td height="73" style="font-size: 24px">Contact Number</td>
	              <td style="font-size: 24px"><input type="text" name="txtcontact" id="txtcontact" value="<?php echo $row->contact?>"></td>
                </tr>
				  <tr>
	              <td height="73" style="font-size: 24px">product name</td>
	              <td style="font-size: 24px"><input type="text" name="txtpname" id="txtpname" value="<?php echo @$name?>"></td>
                </tr>
				  <tr>
	              <td height="73" style="font-size: 24px">price</td>
	              <td style="font-size: 24px"><input type="text" name="txtprice" id="txtprice" value=<?php echo @$price?>></td>
                </tr>
	            <tr>
	              <td height="236" colspan="2" style="text-align: center; font-size: 24px; color: #000000;"><span style="text-align: justify">Our website use the cash of delivery method to pay for the goods. Please keep the due amount ready at the time our employee visit your place to avoid the inconvenience which can be occurred.</span><br>Thank You</td>
                </tr>
				  <tr>
	              <td height="122" colspan="2" style="text-align: center"><input type="submit" name="submit" id="submit" value="Confirm">
	                <input type="reset" name="reset" id="reset" value="Cancel"></td>
                </tr>
              </tbody>
            </table>
          </form></td>
        </tr>
  </tbody>
</table>
</body>
	<?php
	   }
    
} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";       
}
?>
</html>