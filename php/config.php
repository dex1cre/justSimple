<?php

###############
#Файл настроек
###############
#Настройки
define("DESIGN", false);

####################
#Константы и функции
####################

############################
#Работа с базой данных MySQL
############################
$db_name = "justSimple";
$name = "root";
$password = "";
$host = "localhost";

$conn = new mysqli($host, $name, $password, $db_name);
if (mysqli_connect_errno()) echo mysqli_connect_error();

#################################
#Работа с дополнительными файлами
#################################
#Подключаемые файлы стилей
$style = array(
	"index.php" => "views/css/style.css",
	"admin.php" => "views/css/admin.css",
);
$script = array(
	"admin.php" => "views/js/admin.js",
);

function Request_url() {
  $result = $_SERVER['REQUEST_URI'];
  return $result;
}

function Redirection() {
	$views = "views/html/";
	
	include "php/redirect.php";
	$file_atribute = Request_url();
	
	#Проверка на обработку url
	if ($redirect[$file_atribute]) {
		$file_name = $views.$redirect[$file_atribute];
		
		#Проверка существования файла
		if (file_exists($file_name)) {
			require_once $file_name;
			return $redirect[$file_atribute];
		} else {
			
			#Если включён режим разработчика
			if (DESIGN)
				echo "Have not file<br>";
		}
	} else if (DESIGN)
		echo "Have not this link (adress)<br>";
	else
		echo file_get_contents("views/html/404.html");
}
?>