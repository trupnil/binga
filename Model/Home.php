<?php namespace ourcodeworld\HelloComposer;
use ourcodeworld\HelloComposer\We_Model;
//this is manual model created here....TODO::namespace
//TODO::method chaining

//require_once 'libs/we_model.php';


class Home extends We_Model
{   


	public function insert1($table,$data)
	{
		//echo "oke";

		//echo $table;
		//print_r($data);
		 $this->db->insertd($table,$data);
	}

	public function test()
	{
		//echo "test";
		//$this->db->test();
	}

	public function select_all()
	{
		//$qq =  $this->db->select('*')->from('reg');
		echo "oke";
	}



}
?>