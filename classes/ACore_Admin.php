<?php
	abstract class ACore_Admin{
		
		protected $_db;
		
		//public static $mysqli = null;
		
		public function __construct(){
			$_db = new db();
			$_db->connect(HOST,USER,PASSWORD,DB);
			/*$ob_mysqli = new mysqli(HOST,USER,PASSWORD,DB);*/
			if(!$ob_mysqli->connect_error){
				$this->_db = $_db;
				$this->_db->query("SET NAMES 'utf8'");
				return $this->_db;
			}
			else{
				exit("No connect to server");
			}
		}
		
		
		public function get_body(){
			$this->get_header();
			$this->get_menu();
			$this->get_left_bar();
			$this->get_content();
			$this->get_footer();
		}
		
		abstract function get_content();
		
		protected function get_header(){
			include "header.php";
		
		}protected function get_footer(){
			include "footer.php";
		}
		protected function get_left_bar(){
			$query = "SELECT title, link FROM admin_menu";
				$result = $this->_db->query($query);
				if(!$result){
					exit("Ошибка соеднения с бд");
					
				}
			$content = "<div class='left_bar_admin'>\n";
			$content .= "<div class='spaser'>Разделы панели администратора";
			while ($row = $result->fetch_assoc()) {
				
				$content .= "<div class='quick_links'><a href='?option=".$row['link']."'>".$row['title']."</a></div>";
				//$content .= "<div class='quick_links'><a href='?option=".$row['link']."'>".$row['title']."</a></div>";

			}
			
			
			
			
			$content.= "</div>\n";
		
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
				
				$content .= "<div class='submenu'>"."<a href=?option=".$row['link'].">".$row["title"]."</a></div>";

			}
			$content.= "</div>";
			
			
		
		print_r($content);
		
		}
		
	}

?>