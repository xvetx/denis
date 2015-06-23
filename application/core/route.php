<?php
class Route{
	
	public static function start(){
		$request=explode('/',$_SERVER['REQUEST_URI']);		
		$controller_name='Main';
		$action_name='index';
		
		if(isset($request[1]) and !empty($request[1])){
			$controller_name=$request[1];
		}
		if(isset($request[2])){
			$action_name=$request[2];
		}
		$file_controller=strtolower($controller_name).'_controller.php';
		$file_model=strtolower($model_name).'_model.php';
		
		$path_controller='application/controllers';
		$path_model='application/models';
		
		
		if(file_exists($path_controller.'/'.$file_controller) ){
			
			require_once($path_controller.'/'.$file_controller);
			
			//require_once($path_model.$file_model);
		}else{
			$file_controller='404_controller.php';
			
			
			//exit();
		
		}
		$action='action_'.$action_name;
		echo $controller_name;
		$site=new $controller_name;
		$site->$action();
		
	}

}