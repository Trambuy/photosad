<?php
	 class photographer extends ACore{
		
		public function get_content(){
			
			$content = "";
			
			$content .= "<div class='main'> 
			<a href='?option=upload_new_photoes'>Загрузить новые фотографии</a>";
			
			$query = "SELECT full_size_link FROM photoes";
				$result = $this->_db->query($query);
				if(!$result){
					exit("Ошибка соеднения с бд");
					
				}
			while ($row = $result->fetch_assoc()) {
				
				$content .= "<div><img class='photo' src=".$row['full_size_link']."></div>";

			}
			
			
			
			$content .= "</div>";
			
			print_r($content);
		}
		
		protected function get_menu(){
			$query = "SELECT title, link FROM menu WHERE type_of_user = 'all' OR type_of_user ='user' ";
			$result = $this->_db->query($query);
			if(!$result){
				exit("Ошибка соеднения с бд");
				
			}
			$content = "<div class='menu'>";
			while ($row = $result->fetch_assoc()) {
				
				$content .= "<div class='submenu'>"."<a href = ".$row["link"].">".$row["title"]."</a></div>";

			}
			$content.= "</div>";
			
			
		
		print_r($content);
		
		}
	}

?>