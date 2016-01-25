<?php
	 class edit_menu extends ACore_Admin{
		
		public function get_content(){
			
			$content = "";
			
			$content .= "<div class='main'> <a href='?option=add_menu'>Добавить новый пункт меню</a><br><hr>";
			$content .= "<div><p>Существующие разделы меню:</p><br>";
			//echo $_SESSION['res'];
			
			$query = "SELECT id, title, link, type_of_user FROM menu";
				$result = $this->_db->query($query);
				if(!$result){
					exit("Ошибка подключения");
					
				}
			while ($row = $result->fetch_assoc()){
				//print_r($row["id"]);
				$content .="<p><b style='color:red;'>".$row["title"]."</b>| Доступно для пользователей группы: ".$row["type_of_user"]." | <a href='?option=update_menu&id=".$row["id"]."'>Редактировать</a>| <a href='?option=delete_menu&id=".$row["id"]."'>Удалить</a></p><br>";
			}
			
			$content .= "</div>\n";
			$content .= "</div>\n";
			$content .= "</div>\n";
			
			print_r($content);
		}
		
		
		
		
	}
8
?>