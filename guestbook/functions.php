<?php
//include_once ("test.php");
require_once ("./config.php");

/*** ������� �������� ������� �������� ***/

function check($str){
	$str = strip_tags ( $str);
	$str = trim ( $str);
	
	return $str;
}


/*** ������� ������ �� �� ***/

function read(){
	$query =  "SELECT * FROM messages";
	$sql = mysqli_query(config(), $query);
	$items = '{';
	$i = 0;
    while ($row = mysqli_fetch_assoc($sql)) {
		$items = $items.'"'.$i.'":{"name": "'.$row['name'].'", "email": "'.$row["email"].'", "comment": "'
		.$row["comment"].'"}, ';
		$i++;
    }
	
	$items = substr($items, 0, -2).'}';
	echo $items;
	mysqli_free_result($sql);
}	


/*** ������� ������ � �� ***/

function record($name, $email, $comment){  
	$query =  "INSERT INTO messages (name,email,comment) VALUES ('".$name."', '".$email."', '".$comment."');";
	$sql = mysqli_query(config(), $query);
}	

?>