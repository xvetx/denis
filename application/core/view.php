<?php
class View{
	
	public function generate($template_view,$content_view,$data){
		
		include('application/views/'.$template_view);
	}
}