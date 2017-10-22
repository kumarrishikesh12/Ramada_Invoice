<?php

$hostname='localhost';
$username='root';
$password='';
$database='Demo_Invoice';

try {
$conn = new PDO("mysql:host=$hostname;dbname=$database;",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e){
  die("Connenction Failed:: ". $e->getMessage());
}

?>
