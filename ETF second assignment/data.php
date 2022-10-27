<?php
$fname=$_GET["fname"];
$uname=$_GET["uname"];
$address=$_GET["address"];
$email=$_GET["email"];
$contact=$_GET["contact"];
$password=$_GET["password"];
try {
     
    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    
    $bulk = new MongoDB\Driver\BulkWrite;
    $doc = ['_id' => new MongoDB\BSON\ObjectID, 'fname' => $fname, 'uname' => $uname , 'address' => $address , 'email' => $email , 'contact' => $contact , 'password' => $password];
    $bulk->insert($doc);
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