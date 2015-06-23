<?php
class Main extends Controller{
	
	public function action_index(){
		
		$data=array('text'=>' my data');
		$my_view=strtolower(__CLASS__).'.php';
		$this->view->generate('base.php',$my_view,$data);
	}

}