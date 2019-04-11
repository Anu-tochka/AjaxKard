<?php
function config(){
	$server = 'localhost';
	$user = 'root';
	$pass ='12345';

	$conn = mysqli_connect( $server, $user, $pass, 'honeyhunters') or die(mysql_error());
	return $conn;
}
?>
