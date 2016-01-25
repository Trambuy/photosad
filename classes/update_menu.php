<?php
	 class update_menu extends ACore_Admin{
		
		public function get_content(){
			
			
			$content .= "<div class='main'>";
			$content .= "</div>\n";
			$content .= "</div>\n";
			$content .= "</div>\n";
			
			print_r($content);
			
		}
		/*public function get_content(){
			
			$content = "";
			
			$content .= "<div class='main'> <a href='?option=add_menu'>Добавить новый пункт меню</a>";
			//echo $_SESSION['res'];
			
			$query = "SELECT id, title, link FROM menu";
				$result = $this->_db->query($query);
				if(!$result){
					exit("Ошибка подключения");
					
				}
			while ($row = $result->fetch_assoc()){
				print_r($row["id"]);
				$content .="<a href='?update_menu&id=".$row["id"]."'>".$row["title"]."</a><br>";
			}
			
			
			
			$content .= "</div>\n";
			$content .= "</div>\n";
			$content .= "</div>\n";
			
			print_r($content);
		}
		*/
		
		
		
	}

?>