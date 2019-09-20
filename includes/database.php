<?php 
	// Using Medoo namespace
use Medoo\Medoo;
$server = ($_SERVER['HTTP_HOST'] == "localhost") ? "localhost" : "localhost" ;
 
// Initialize
$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'canones',
    'server' => $server,
    'username' => 'root',
    'password' => ''
    ]);
    
?>