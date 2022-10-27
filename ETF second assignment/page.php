<?php session_start();
if(!isset($_SESSION["uname"]))
{
	header('Location:login.php');
}
	?>
<?php
$txtname=$_GET["txt"];
$uname=$_SESSION["uname"];
echo $txtname;
try {
     
    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    
    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->update(['uname' => $uname], ['$set' => ['fname' => $txtname]]);
    
    $mng->executeBulkWrite('projectdb.user', $bulk);
        
} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";    
}

?>