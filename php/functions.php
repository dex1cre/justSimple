<?php
####################
#Для всех страниц
####################
function css($style, $url) {
	echo "<style>";
	foreach ($style as $key => $value) {
		if ($key == $url)
			require_once $value;
	}
	echo "</style>";
}

function js($script, $url) {
	echo "<script>";
	foreach ($script as $key => $value) {
		if ($key == $url)
			require_once $value;
	}
	echo "</script>";
}

####################
#Функции для страниц
####################


#############
#Админ панель
#############

?>