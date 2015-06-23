<?php class Contacts  extends Controller{
	
	public function action_index(){
		
		$data=array('name'=>' Jhone','phone'=>'3412324323');
		$my_view=strtolower(__CLASS__).'.php';
		$this->view->generate('base.php',$my_view,$data);
	}
}