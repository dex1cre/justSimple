<?php

###############
#���� ��������
###############
#���������
define("DESIGN", false);

####################
#��������� � �������
####################

#������������ ����� ������
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
	
	#�������� �� ��������� url
	if ($redirect[$file_atribute]) {
		$file_name = $views.$redirect[$file_atribute];
		
		#�������� ������������� �����
		if (file_exists($file_name)) {
			require_once $file_name;
		} else {
			
			#���� ������� ����� ������������
			if (DESIGN)
				echo "Have not file<br>";
		}
	} else if (DESIGN)
		echo "Have not this link (adress)<br>";
	else
		echo file_get_contents("views/html/404.html");
}
?>