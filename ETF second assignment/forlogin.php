<?php session_start();?>
<?php
    if(isset($_POST["submit"]))
	{
		$uname=$_POST["txt1"];
		$password=$_POST["password"];
	
try {
    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
	$filter=['uname'=>$uname];
	$options=[];
    $query = new MongoDB\Driver\Query($filter,$options); 
    $rows = $mng->executeQuery("projectdb.user", $query);
	$count=0;
    foreach ($rows as $row) {
		$count=$count+1;
	}
	echo "$count";
	if($count>0)
	{
		$_SESSION["uname"]=$uname;//crete session
		header('Location:Home page.html');
	}
	else
	{
		header('Location:Login.php');
	}
	    
} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";    
}
	}
?>