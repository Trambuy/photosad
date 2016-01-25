<?php
	 class edit_photographs extends ACore_Admin{
		
		public function get_content(){
			
			$content = "";
			
			$content .= "<div class='main'>\n";
			$content .= "<h1> Здесь будут все фотографы</h1> ";
			
			$query = "SELECT id, full_name, login, date_of_registration FROM photographers";
				$result = $this->_db->query($query);
				if(!$result){
					exit("Ошибка подключения");
					
				}
			while ($row = $result->fetch_assoc()){
				$content .= "<div>Имя:".$row['full_name'].";<br>
				Login:".$row['login'].";<br>
				Регистрация от ".$row['date_of_registration'].";<br>
				<a href='?option=update_photograph&id=".$row['id']."'>Редактировать профиль</a>|<a href='?option=delete_photograph&id=".$row['id']."'>Удалить фотографа из базы</a>'
				</div> <hr>";
			}
			
			
			
			$content .= "</div>\n";
			$content .= "</div>\n";
			$content .= "</div>\n";
			
			print_r($content);
		}
		
	 }
?>