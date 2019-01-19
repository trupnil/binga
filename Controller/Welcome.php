<?php
use ourcodeworld\HelloComposer\Controller;
use ourcodeworld\HelloComposer\We_Model;
//use ourcodeworld\HelloComposer\Home;
//require_once 'Libs/Controller.php';
//require_once 'Model/Home.php';
//this is controller
//require_once 'Model/late_test.php'; trying late static binding

//require_once 'Libs/we_model.php';

class Welcome extends Controller
{
	public $home; //this is for create a manual model
   // public $reg;
    public $we_model;
	public function __construct()
	{
		//parent::__construct();
      //  $this->home = new Home();
        //$this->reg = new reg();

        $this->we_model = new We_model();
	}

	public function home()
	{
		 // echo "oke";
         $this->view->render('View/reg');
    }

    public function insertdata()
    {
    	$fname = $_POST['fname'];
    	$data = ["fname"=>$fname];

    	$this->we_model->insert("reg",$data);

    }

    public function showdata()
    {

        $this->reg->select();
        //$data =  $this->Model->select('*')->from('user');
        //print_r($data);
        //$this->view->render('View/showdata');
    }


	
}


?>