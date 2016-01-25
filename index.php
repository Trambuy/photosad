<?php
	header("Content-Yype:text/html;charset='utf-8'");
	include_once("config.php");
	include_once("classes/ACore.php");
	include_once("classes/ACore_Admin.php");
	//include_once("classes/ACore_Photographer.php");
	include_once("classes/db_class.php");
	
		if(isset($_GET["option"])){
			$class = trim(strip_tags($_GET["option"]));
			
		}
		else{
			$class="main";
			
		}
		
		if(file_exists("classes/".$class.".php")){
			include_once("classes/".$class.".php");
			if(class_exists($class)){
				$obj = new $class;
				$obj->get_body();
			}
			else{
				exit('Не правильные данные для входа');
			}
		}
		else{
			header( 'Location: /', true, 307 );
			
			
			
			
			
			
			
			
			//exit("<p>Не правильный адрес</p>");
		}
?>