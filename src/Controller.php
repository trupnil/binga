<?php
namespace ourcodeworld\HelloComposer;
use ourcodeworld\HelloComposer\View;
use ourcodeworld\HelloComposer\We_Model;
use ourcodeworld\HelloComposer\Query;

//require_once 'Libs/view.php';
//require_once 'Libs/We_Model.php';
//require_once 'Libs/late_static.php';//add late_static


Class Controller
{
	public $view;
	public $Model;
	//public $query1;
	
	public function __construct()
	{
		$this->view = new View();//DI......
		$this->Model = new We_Model();//that is dependancy injection
		//$this->query1 = new Query();//that is dependancy injection
	}

	public function index()
	{
		echo "This is default";
	}
}

?>