<?php
	 class admin extends ACore_Admin{
		
		public function get_content(){
			
			$content = "";
			
			$content .= "<div class='main'>\n";
			$content .= "<h1> ПРИВЕТСТВУЮ АДМИНИСТРАТОР ЧУДЕСНОГО САЙТА</h1> ";
			
			/*$query = "SELECT id, full_size_link FROM photoes";
				$result = $this->_db->query($query);
				if(!$result){
					exit("Ошибка подключения");
					
				}
			while ($row = $result->fetch_assoc()){
				$content .= "<div class='photo_block'><img class='photo' src=".$row['full_size_link']."><a style ='color:red' href='?option=delete_photo&id=".$row['id']."'>Удалить</a></div>\n";
			}*/
			
			
			
			$content .= "</div>\n";
			$content .= "</div>\n";
			$content .= "</div>\n";
			
			print_r($content);
		}
		
	 }
?>