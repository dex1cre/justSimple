<?php

###############
#Файл настроек
###############
#Настройки
define("DESIGN", false);

####################
#Константы и функции
####################

#Подключаемые файлы стилей
$style = array(
	"views/css/style.css",
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