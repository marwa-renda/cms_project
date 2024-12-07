<?php ob_start();

$db['db_host'] = "localhost";
$db['db_user'] = "marwarenda";
$db['db_pass'] = "MjSzbXVVPsab2hs";
$db['db_name'] = "cms_project";

foreach($db as $key => $value){
define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);



$query = "SET NAMES utf8";
mysqli_query($connection,$query);

//if($connection) {
//
//echo "We are connected";
//
//}








?>