<?php
namespace ourcodeworld\HelloComposer;
//database connection here......
//pass here 4 param in function construct for the database connection

Class Database
{
	protected $servername;
	protected $username;
	protected $password;
	protected $database;
	
	public function __construct()
	{
		$this->servername = "Localhost";
		$this->username = "root";
		$this->password = "";
		$this->database = "we_test";
    }
}

?>