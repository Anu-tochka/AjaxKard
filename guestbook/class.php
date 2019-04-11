<?php
require_once ("./config.php");
	class messages
	{
	  public $name;
	  public $email;
	  public $comment;

	  function __construct($n, $e, $c)
	  {
		$this->name = $n;
		$this->email = $e;
		$this->comment = $c;
	  }

	  public function add()
	  {
		$newname = check($this->name);
		$newemail = check($this->email);
		$newcomment = check($this->comment);
		record($this->name, $newemail, $newcomment);
		
	  }
	}
?>