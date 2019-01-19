<?php
namespace ourcodeworld\HelloComposer;
use ourcodeworld\HelloComposer\Database;


//require_once 'Libs/Database.php';//include files here

class We_Model extends Database
{

	public $db;
	//protected $Query;

	public function __construct()
	{
		parent::__construct();
		$this->db = new Database();
		
		// $this->db = new mysqli($this->servername,$this->username,$this->password,$this->database);
		// if($this->db)
		// {
		// 	echo "database connected";
		// }
		// else
		// {
		// 	echo "Error";
		// }

		
	}
	

	public function insert(string $table,array $data)
	{
		$fields=implode("`,`",array_keys($data));
		$values=implode("','",array_values($data));
		echo $sql="INSERT INTO  `$table` (`$fields`) values ('$values')";
		return $ex = $this->db->query($sql);
		
	}

	
	
}

?>