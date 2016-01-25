<?php
	 class main extends ACore{
		
		public function get_content(){
			
			$content = "";
			
			$content .= "<div class='main'>";
			
			$content .= "<div class='photo_btn'>";
			$content .= "<a href='?option=photoes'>";
			$content .= "<button>Перейти к фотографиям</button>";
			$content .= "</a>";
			
			$content .= "</div>";
			$content .= "</div>";
			
			print_r($content);
		}
	}

?>