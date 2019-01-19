<?php 
namespace ourcodeworld\HelloComposer;
use ourcodeworld\HelloComposer\db;
//require_once 'Libs/Database.php';
class Query extends db
{

	protected static $table = 'basetable';
	public $dbs;
	//protected $Query;

	public function __construct()
	{
		parent::__construct();
		$this->dbs = new db();
		$this->dbs = new mysqli($this->servername,$this->username,$this->password,$this->database);
	
		
	}
	

	public function select()
	{
	     $sql =  "SELECT * FROM".static::$table;
	     $ex = $this->dbs->query($sql);
	     

	} 

	public function insert()
	{
		echo "INSERT INTO".static::$table;
	}

}


?>