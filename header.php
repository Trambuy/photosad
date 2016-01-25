<?php
	$title = "";
	$name = "";
	 $_db;
	 $ob_mysqli = new mysqli(HOST,USER,PASSWORD,DB);
			if(!$ob_mysqli->connect_error){
				$_db = $ob_mysqli;
			}
			else{
				exit("No connect to server");
			}
	if(isset($_GET['option'])){
		$name =  trim(htmlspecialchars($_GET['option']));
		$query = "SELECT title 
					FROM pages
					WHERE name = '$name'";
		$result = $_db->query($query);
		
		if(!$result){
			exit("Ошибка соеднения с бд");
		}
		
		while ($row = $result->fetch_assoc()){
			$title = $row['title'];
		}
	}


	

	?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta charset='UTF-8' />
		<link href="styles/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="header"></div>
			