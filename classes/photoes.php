<?php
	 class photoes extends ACore{
		//protected $_db;
		public function get_content(){
			
			$content = "";
			
			$content .= "<div class='main'>";
			
			
				$query = "SELECT full_size_link FROM photoes";
				$result = $this->_db->query($query);
				if(!$result){
					exit("Ошибка соеднения с бд");
					
				}
			while ($row = $result->fetch_assoc()) {
				
				$content .= "<div ><img class='photo' src=".$row['full_size_link']."></div>";

			}
			$content .= "</div>";
			$content .= "</div>";
			
			print_r($content);
		}
	}

?>