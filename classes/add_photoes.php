<?php
	 class add_photoes extends ACore{
		
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
   <div id="drop-files" ondragover="return false">
      <p>Перетащите изображение сюда</p>
        <form id="frm">
           <input type="file" id="uploadbtn" multiple />
        </form>
   </div>
   <div id="uploaded-holder"> 
      <div id="dropped-files">
         <!-- Кнопки загрузить и удалить, а также количество файлов -->
         <div id="upload-button">
               <center>
                  <span>0 Файлов</span>
               <a href="#" class="upload">Загрузить</a>
               <a href="#" class="delete">Удалить</a>
                    <!-- Прогресс бар загрузки -->
                  <div id="loading">
                  <div id="loading-bar">
                     <div class="loading-color"></div>
                  </div>
                  <div id="loading-content"></div>
               </div>
                </center>
         </div>  
        </div>
   </div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="javascript.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />