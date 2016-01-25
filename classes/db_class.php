<?php
class db{
 public $link, $path, $user, $pass, $name;
 public $error=array();
 function __construct() {
  global $dn_path, $dn_user, $dn_pass, $dn_name;
  $this->path = $dn_path;
  $this->user = $dn_user;
  $this->pass = $dn_pass;
  $this->name = $dn_name;
 }
 function connect($path = false, $user = false, $pass = false, $name = false) {
  if(!$path && !$user && !$pass && !$name) {
   $path = $this->path;
   $user = $this->user;
   $pass = $this->pass;
   $name = $this->name;
  }
  $this->link = new mysqli($path, $user, $pass, $name);
  if(mysqli_connect_errno()){
	  $this->error[mysqli_connect_errno()]=mysqli_connect_error();
	  
  }
 }
 
 function query($query){
	 //print_r($this->error);
	 return $this->link->query($query);
	 
 }
 
 function __destruct(){
	 if(count($this->error)){
		 foreach($this->error as $key=>$value){
			 echo '<div style="margin:10% auto;width:50%;background:tomato;color:#fff;padding:25px;border-radius:3px;box-shadow:0 1px 5px #000;"><b style="font-size:2em;">'.$key.'</b><br>'.$value.'</div>';
			 die();
		 }
		 
	 }
 }
 
}

/*$dn_path = "localhost";
$dn_user = "b993594x_roman";
$dn_pass = "qazwsx";
$dn_name = "b993594x_roman";

$db = new db();
$db->connect();*/
//$db->query("CREATE TABLE iskiz (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name VARCHAR(30) NOT NULL);");
//$array=json_encode_array(array('name'=>'Roman', 'age'=>'25', 'job'=>'programmer'));
//$db->query("CREATE TABLE roman (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name VARCHAR(30) NOT NULL);");
//$db->query("ALTER TABLE roman ADD array TEXT(65000);");

//$array = json_encode(array('name' => 'iskiz2', 'age' => '27', 'job' => 'db'));
//$db->query("INSERT INTO roman (name, array) VALUES ('And Dush', '".$array."')");
/*/$count = $db->query("SELECT COUNT(*) as count FROM roman");
print_r(mysqli_fetch_assoc($count));*/
?>