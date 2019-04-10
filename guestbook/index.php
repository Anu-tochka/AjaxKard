<?php
require_once ("./config.php");
require_once ("./functions.php");
require_once ("./class.php");

		read();

	if ($_POST) {
		$m = new messages($_POST['name'],$_POST['email'], $_POST['comment']);
		$m->add();
		read();
}

	if ($_GET) {
		read();
}
?>
