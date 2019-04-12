<?php
function config(){
	$server = 'localhost';
	$user = 'user';
	$pass ='pass';

	$conn = mysqli_connect( $server, $user, $pass, 'honeyhunters') or die(mysql_error());
	return $conn;
}
?>
