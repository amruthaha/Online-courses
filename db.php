<?php
$connection;
function returnDBConnection(){
	global $connection;
    $connection = mysqli_connect('localhost','root','nopassword','restora') or die(mysqli_error($connection));
    return $connection;
}

?>
